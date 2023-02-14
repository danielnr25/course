<?php

use Illuminate\Database\Seeder;

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
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/academy/iconos/others/home/categories/sciences.svg",
            ],
            [
                "name" => "Humanidades",
                "description" => "Todos los cursos de Humanidades son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/academy/iconos/others/home/categories/psychology-education.svg",
            ],
            [
                "name" => "Marketing y Ventas",
                "description" => "Todos los cursos de Marketing y Ventas son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/academy/iconos/others/home/categories/maintenance-repair.svg",
            ],
            [
                "name" => "Idiomas y Lenguas",
                "description" => "Todos los cursos de Idiomas y Lenguas son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/academy/iconos/others/home/categories/languages-languages.svg",
            ],
            [
                "name" => "Negocios y Emprendimiento",
                "description" => "Todos los cursos de Negocios y Emprendimiento son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/academy/iconos/others/home/categories/business-administration.svg",
            ],
            [
                "name" => "Ingeniería",
                "description" => "Todos los cursos de Ingeniería son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/academy/iconos/others/home/categories/engineering.svg",
            ],
            [
                "name" => "Informática",
                "description" => "Todos los cursos de Informática son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/academy/iconos/others/home/categories/computing-informatics.svg",
            ],
            [
                "name" => "Software",
                "description" => "Todos los cursos de Software son de acceso gratis, en el caso que desee obtener un certificado de estudios debe realizar el pago de una tarifa mínima ajustada a la economía de su país.",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/academy/iconos/others/home/categories/software-tools.svg",
            ]
        ];
        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
