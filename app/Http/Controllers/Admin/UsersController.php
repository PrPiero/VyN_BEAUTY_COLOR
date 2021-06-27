<?php

namespace App\Http\Controllers\Admin;

use App\Events\UserWasCreated;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('view', new User);

        if ($request->ajax())
        {
            if (!empty($request->from_date))
            {
                $users = DB::table('users', 'roles')->whereBetween('created_at', array($request->from_date, $request->to_date))->get();
            }

            else
            {
                $users = User::with('roles')->get();
            }

            return DataTables::of($users)
                ->addIndexColumn()
                ->addColumn('action', function($users) {
                    $acciones = '<a href="javascript:void(0)" onclick="editarUsuario(' . $users->id . ')" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>';
                    $acciones .= '&nbsp&nbsp<button type="button" name="delete" id="' . $users->id . '" class="delete btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>';
                    return $acciones;
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('admin.users.index');
    }

    public function store(Request $request)
    {
        $this->authorize('create', new User);

        $rules = [
            'name' => ['required'],
            'surname' => ['required'],
            'dni' => ['required', 'numeric', 'digits:8', Rule::unique('users')->ignore($request->id)],
            'state' => ['required'],
            'roles' => ['required'],
            'email' => ['required', Rule::unique('users')->ignore($request->id)],
            //'password' => ['required', 'min:8', 'confirmed']
        ];

        $rules['password'] = Str::random(8);

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        else
        {
            $user = User::create([
                'name' => $request->name,
                'surname' => $request->surname,
                'dni' => $request->dni,
                'state' => $request->state,
                'email' => $request->email,
                'password' => $rules['password']
            ])->syncRoles($request->roles);

            //ENVIAR EMAIL CON LAS CREDENCIALES DEL LOGIN
            UserWasCreated::dispatch($user, $rules['password']);

            return back();
        }
    }

    public function destroy(User $id)
    {
        $this->authorize('delete', $id);

        $id->delete();
        return back();
    }

    public function edit(User $id)
    {
        $this->authorize('update', $id);

        $user = User::with('roles')->find($id);
        return response()->json($user);
    }

    public function update(Request $request)
    {
        $this->authorize('update', new User);

        $rules = [
            'name' => ['required'],
            'surname' => ['required'],
            'dni' => ['required', 'numeric', 'digits:8', Rule::unique('users')->ignore($request->id)],
            'state' => ['required'],
            'roles' => ['required'],
            'email' => ['required', Rule::unique('users')->ignore($request->id)]
        ];

        if ($request->filled('password'))
        {
            $rules['password'] = ['min:8', 'confirmed'];
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        else
        {
            DB::table('users')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'dni' => $request->dni,
                'state' => $request->state,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $user = User::with('roles')->find($request->id);
            $user->syncRoles($request->roles);

            return back();
        }
    }
}
