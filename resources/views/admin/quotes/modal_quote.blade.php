<!-- MODAL VER CITA -->
<div class="modal fade" id="QuoteModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="staticBackdropLabel">DETALLES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="quote-form">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="Quote_id" name="Quote_id">
                    <div class="form-inline">
                        <div class="form-group">
                            <label style="cursor: text;"><b>CLIENTE:</b></label>
                            <input type="text" class="form-control my-2" id="txtClient" name="txtClient" onmousedown="return false" readonly="readonly" value="{{ old('txtClient') }}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>
                        <div class="form-group">
                            <label style="cursor: text;"><b>TELÉFONO:</b></label>
                            <input type="text" class="form-control my-2" id="txtPhone" name="txtPhone" onmousedown="return false" readonly="readonly" value="{{ old('txtPhone') }}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label style="cursor: text;"><b>EMAIL:</b></label>
                            <input type="text" class="form-control my-2" id="txtEmail" name="txtEmail" onmousedown="return false" readonly="readonly" value="{{ old('txtEmail') }}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>
                        <div class="form-group">
                            <label style="cursor: text;"><b>FECHA DE CITA:</b></label>
                            <input type="text" class="form-control my-2" id="txtDate" name="txtDate" onmousedown="return false" readonly="readonly" value="{{ old('txtDate') }}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label style="cursor: text;"><b>SERVICIO:</b></label>
                            <input type="text" class="form-control my-2" id="txtService" name="txtService" onmousedown="return false" readonly="readonly" value="{{ old('txtService') }}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>
                        <div class="form-group">
                            <label style="cursor: text;"><b>DESCRIPCIÓN:</b></label>
                            <textarea class="form-control my-2" id="txtDescription" name="txtDescription" rows="3" cols="40" onmousedown="return false" readonly="readonly" value="{{ old('txtTime') }}" style="border: 0; outline:none; background-color: white; cursor: text;"></textarea>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label style="cursor: text;"><b>ESTADO:</b></label>
                            <input type="text" class="form-control my-2" id="txtState" name="txtState" onmousedown="return false" readonly="readonly" value="{{ old('txtState') }}" style="border: 0; outline:none; background-color: white; cursor: text;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" onclick="EnviarCorreo()" class="btn btn-success">Enviar Correo</button>
                    <button type="submit" onclick="CambiarEstado()" class="btn btn-primary">CambiarEstado</button>
                </div>
            </form>
        </div>
    </div>
</div>
