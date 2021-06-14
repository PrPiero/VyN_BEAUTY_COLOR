<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        /* **********************SHAMPOO********************** */
        $product = new Product;
        $product->product = "OI SHAMPOO LITRO";
        $product->description = "Aporta una extraordinaria suavidad, brillo y cuerpo al cabello.";
        $product->price = 280.48;
        $product->category_id = 1;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "LOVE SHAMPOO DISCIPLINANTE LITRO";
        $product->description = "Shampoo para cabello encrespado y rebelde.";
        $product->price = 235.65;
        $product->category_id = 1;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "MELU SHAMPOO LITRO";
        $product->description = "Limpia delicadamente el cabello dejándolo luminoso.";
        $product->price = 235.65;
        $product->category_id = 1;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "MOMO SHAMPOO";
        $product->description = "Caracterizado por una espuma cremosa, limpia delicadamente el cabello seco o deshidratado.";
        $product->price = 88.51;
        $product->category_id = 1;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "NOUNOU SHAMPOO LITRO";
        $product->description = "Limpia delicadamente el cabello sensibilizado, brinda profunda, nutrición e hidratación.";
        $product->price = 235.65;
        $product->category_id = 1;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "MINU SHAMPOO LITRO";
        $product->description = "Específico para cabello teñido, limpia delicadamente el cabello protegiendo el color y manteniendo el brillo.";
        $product->price = 235.65;
        $product->category_id = 1;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "DEDE SHAMPOO LITRO";
        $product->description = "Deja el cabello ligero y luminoso. Ideal para cabellos finos.";
        $product->price = 235.65;
        $product->category_id = 1;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "LOVE CURL SHAMPOO LITRO";
        $product->description = "Brinda elasticidad al cabello ondulado o rizado. Hidrata y limpia  el cabello.";
        $product->price = 235.65;
        $product->category_id = 1;
        $product->mark_id = 1;
        $product->save();

        /* **********************MASCARILLA PARA EL CABELLO********************** */
        $product = new Product;
        $product->product = "NOUNOU HAIR MASK LITRO";
        $product->description = "Mascarilla, ayuda al cabello maltratado como decoloración o aislados. Nutre, hidrata y desenreda el cabello.";
        $product->price = 381.64;
        $product->category_id = 2;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "LOVE MASK RIZO LITRO";
        $product->description = "Mascarilla de doble acción, nutre y acondiciona el cabello rizado u ondulado.";
        $product->price = 381.64;
        $product->category_id = 2;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "MINU MASK LITRO";
        $product->description = "Para el cuidado del cabello teñido. Permite nutrir a profundidad el cabello teñido.";
        $product->price = 381.64;
        $product->category_id = 2;
        $product->mark_id = 1;
        $product->save();

        /* **********************ACEITE PARA EL CABELLO********************** */
        $product = new Product;
        $product->product = "OI OIL REESTRUCTURANTE (Sin Aclarado)";
        $product->description = "Aceite desenredante y antiencrespado para mayor suavidad y brillo al cabello.";
        $product->price = 74.72;
        $product->category_id = 3;
        $product->mark_id = 1;
        $product->save();

        /* **********************TINTE PARA EL CABELLO********************** */
        $product = new Product;
        $product->product = "L'Oreal Tinte Inoa 5,35 Castaño Claro Caoba 60gr";
        $product->description = "Optimiza la efectividad de la coloración de la fibra capilar.";
        $product->price = 38.61;
        $product->category_id = 4;
        $product->mark_id = 2;
        $product->save();

        $product = new Product;
        $product->product = "L'Oreal Tinte Inoa 6,40 Rubio Oscuro Cobrizo Intenso 60gr";
        $product->description = "Optimiza la efectividad de la coloración de la fibra capilar.";
        $product->price = 38.61;
        $product->category_id = 4;
        $product->mark_id = 2;
        $product->save();

        $product = new Product;
        $product->product = "L'Oreal Tinte Inoa 6,45 Rubio Oscuro Cobrizo 60gr";
        $product->description = "Optimiza la efectividad de la coloración de la fibra capilar.";
        $product->price = 38.61;
        $product->category_id = 4;
        $product->mark_id = 2;
        $product->save();

        $product = new Product;
        $product->product = "L'Oreal Tinte Inoa 8,23 Rubio Claro Dorado 60gr";
        $product->description = "Optimiza la efectividad de la coloración de la fibra capilar.";
        $product->price = 38.61;
        $product->category_id = 4;
        $product->mark_id = 2;
        $product->save();

        $product = new Product;
        $product->product = "L'Oreal Tinte Inoa C 6,64 Rubio Oscuro Rojo Cobrizo 60gr";
        $product->description = "Optimiza la efectividad de la coloración de la fibra capilar.";
        $product->price = 38.61;
        $product->category_id = 4;
        $product->mark_id = 2;
        $product->save();

        $product = new Product;
        $product->product = "L'Oreal Tinte Inoa 1 Negro sin Amoniaco 60gr";
        $product->description = "Optimiza la efectividad de la coloración de la fibra capilar.";
        $product->price = 38.61;
        $product->category_id = 4;
        $product->mark_id = 2;
        $product->save();

        $product = new Product;
        $product->product = "L'Oreal Tinte Inoa 2 Negro sin Amoniaco 60gr";
        $product->description = "Optimiza la efectividad de la coloración de la fibra capilar.";
        $product->price = 38.61;
        $product->category_id = 4;
        $product->mark_id = 2;
        $product->save();

        $product = new Product;
        $product->product = "L'Oreal Tinte Inoa Supreme 6,23 Cedro Insólito 60gr";
        $product->description = "Optimiza la efectividad de la coloración de la fibra capilar.";
        $product->price = 38.61;
        $product->category_id = 4;
        $product->mark_id = 2;
        $product->save();

        $product = new Product;
        $product->product = "L'Oreal Tinte Inoa Supreme 5,23 Cedro claro Dorado 60gr";
        $product->description = "Optimiza la efectividad de la coloración de la fibra capilar.";
        $product->price = 38.61;
        $product->category_id = 4;
        $product->mark_id = 2;
        $product->save();

        /* **********************ACONDICIONADOR********************** */
        $product = new Product;
        $product->product = "OI ACONDICIONADOR LITRO";
        $product->description = "Aporta al cabello una extraordinaria suavidad, brillo y cuerpo además de acelerar el proceso de secado.";
        $product->price = 401.18;
        $product->category_id = 5;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "LOVE ACONDICIONADOR DISCIPLINANTE LITRO";
        $product->description = "Acondicionador para el control del cabello, hidrata y restaura el cabello.";
        $product->price = 341.41;
        $product->category_id = 5;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "MELU ACONDICIONADOR LITRO";
        $product->description = "Hidrata el cabello, nutre las puntas y previene el quiebre de las mismas.";
        $product->price = 341.41;
        $product->category_id = 5;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "MOMO ACONDICIONADOR LITRO";
        $product->description = "Acondicionador hidratante para cabello seco o deshidratado.";
        $product->price = 341.41;
        $product->category_id = 5;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "NOUNOU ACONDICIONADOR LITRO";
        $product->description = "Acondicionador para cabello maltratado por procesos químicos como decoloración.";
        $product->price = 341.41;
        $product->category_id = 5;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "MINU ACONDICIONADOR LITRO";
        $product->description = "Protege y mantiene el color cosmético, mientras desenreda el cabello teñido, dejándolo suave y sedoso.";
        $product->price = 341.41;
        $product->category_id = 5;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "DEDE ACONDICIONADOR LITRO";
        $product->description = "Ideal para desenredar el cabello, dejándolo suave y ligero.";
        $product->price = 341.41;
        $product->category_id = 5;
        $product->mark_id = 1;
        $product->save();

        /* **********************CREMA PARA EL CABELLO********************** */
        $product = new Product;
        $product->product = "LOVE CREMA RIZO";
        $product->description = "Mayor definición para los cabellos rizados u ondulados.";
        $product->price = 117.25;
        $product->category_id = 6;
        $product->mark_id = 1;
        $product->save();

        $product = new Product;
        $product->product = "LOVE CURL CONTROLLER";
        $product->description = "Crema para el control del volumen con efecto antiencrespamiento, especiales para cabellos ondulados y muy rizados.";
        $product->price = 117.25;
        $product->category_id = 6;
        $product->mark_id = 1;
        $product->save();
    }
}
