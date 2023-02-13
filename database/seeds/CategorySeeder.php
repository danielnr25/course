<?php

use Illuminate\Database\Seeder;
use App\Helpers\Image;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "name" => "Ciencias",
                "description" => "Todos los cursos de Ciencias son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => Image::image(storage_path('app/public/categories'), "Ciencias", "F35144", 850, 350, true),
            ],
            [
                "name" => "Humanidades",
                "description" => "Todos los cursos de Humanidades son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => Image::image(storage_path('app/public/categories'), "Humanidades", "0CC1E9", 850, 350, true),
            ],
            [
                "name" => "Marketing y Ventas",
                "description" => "Todos los cursos de Marketing y Ventas son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => Image::image(storage_path('app/public/categories'), "Marketing y Ventas", "41B881", 850, 350, true),
            ],
            [
                "name" => "Idiomas y Lenguas",
                "description" => "Todos los cursos de Idiomas y Lenguas son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => Image::image(storage_path('app/public/categories'), "Idiomas y Lenguas", "41B881", 850, 350, true),
            ],
            [
                "name" => "Negocios y Emprendimiento",
                "description" => "Todos los cursos de Negocios y Emprendimiento son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => Image::image(storage_path('app/public/categories'), "Negocios y Emprendimiento", "41B881", 850, 350, true),
            ],
            [
                "name" => "Ingeniería",
                "description" => "Todos los cursos de Ingeniería son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => Image::image(storage_path('app/public/categories'), "Ingeniería", "41B881", 850, 350, true),
            ],
            [
                "name" => "Informática",
                "description" => "Todos los cursos de Informática son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => Image::image(storage_path('app/public/categories'), "Informática", "41B881", 850, 350, true),
            ],
            [
                "name" => "Software",
                "description" => "Todos los cursos de Software son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => Image::image(storage_path('app/public/categories'), "Software", "41B881", 850, 350, true),
            ]
        ];
        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
