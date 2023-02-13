<?php

use App\Helpers\Image;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                "title" => "Lógica matemática",
                "description" => "En este curso de lógica matemática aprenderás a emplear las competencias de razonamiento matemático, para llevar a cabo la solución de problemas en los ámbitos cotidianos, empresariales y laborales.",
                "price" => 29.99,
                "featured" => 1,
                "bg" => "F35144",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Álgebra Lineal",
                "description" => "El curso de álgebra lineal expone una serie de conceptos complementarios en los sistemas de ecuaciones, en cuanto a los problemas que de allí surgen y la manera eficaz y rápida de resolverlos mediante la utilización de espacios vectoriales.",
                "price" => 19.99,
                "bg" => "F35144",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Estadística",
                "description" => "En este curso de estadística, aprenderás los fundamentos y las aplicaciones de esta disciplina, para llevar a cabo la recolección, caracterización y técnicas para el estudio de las poblaciones y finanzas.",
                "price" => 19.99,
                "bg" => "F35144",
                "categories" => [1]
            ],
            [
                "title" => "Química",
                "description" => "En este curso de química, aprenderás de los fundamentos de la materia y sus principales estructuras, nomenclaturas e implementaciones, bajo la finalidad comprender de qué manera esta ciencia facilita el desarrollo humano.",
                "price" => 29.99,
                "bg" => "41B881",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Física",
                "description" => "En este curso de física eléctrica aprenderás acerca de los principios básicos de esta disciplina y las leyes que la rigen, para comprender qué fenómenos influyen sobre el funcionamiento de la electricidad.",
                "price" => 19.99,
                "bg" => "0CC1E9",
                "categories" => [1]
            ],
            [
                "title" => "Redacción",
                "price" => 29.99,
                "description" => "En este curso de redacción aprenderás a escribir textos formales e informales; desde artículos académicos o documentos corporativos, hasta mensajes de WhatsApp o comentarios para redes sociales.",
                "featured" => 1,
                "bg" => "0CC1E9",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],

            [
                "title" => "Lectura y comprensión de textos",
                "description" => "En este curso de lectura aprenderás a utilizar la inspección, la visualización y la comprensión lectora, para comprender cierta realidad o tema de interés. Es fácil de aprender y solo se requiere tener conocimientos elementales.",
                "price" => 29.99,
                "bg" => "0098B6",
                "categories" => [2]
            ],
            [
                "title" => "Filosofía",
                "description" => "En este curso de filosofía aprenderás acerca de cómo se ha forjado el pensamiento crítico y reflexivo, a partir del estudio de la razón, teniendo como base diferentes periodos históricos y escuelas filosóficas.",
                "price" => 9.99,
                "featured" => 1,
                "bg" => "FF9733",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Marketing Digital",
                "description" => "En este curso de marketing digital aprenderás aplicar una serie de estrategias orientadas a la comercialización de una marca, por medio del uso de las redes sociales y el Internet. Es fácil de aprender y solo se requiere tener conocimientos elementales.",
                "price" => 34.99,
                "bg" => "FF9733",
                "categories" => [3]
            ],
            [
                "title" => "Comercio Electrónico",
                "description" => "En este curso de comercio electrónico aprenderás aplicar las estrategias asociadas al emprendimiento de su negocio digital , mediante el uso del marketing. Es fácil de aprender y solo se requiere tener conocimientos elementales.",
                "price" => 29.99,
                "featured" => 1,
                "bg" => "FF9733",
                "categories" => [3],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Ventas",
                "description" => "En este curso de ventas aprenderás a llevar a cabo una serie de técnicas y  estrategias de ventas efectivas, aplicables a cada situación, con el fin de desarrollar una serie de competencias comerciales, que permitan asegurar las metas de cualquier negocio.",
                "price" => 19.99,
                "bg" => "FF9733",
                "categories" => [3]
            ],
            [
                "title" => "Administración de Empresas",
                "description" => "En este curso de administración de empresas aprenderás a llevar a cabo una serie de técnicas y estrategias de administración efectivas, aplicables a cada situación, con el fin de desarrollar una serie de competencias comerciales, que permitan asegurar las metas de cualquier negocio.",
                "price" => 19.99,
                "bg" => "FF9733",
                "categories" => [3]
            ],
            [
                "title" => "Inglés",
                "description" => "En este curso de inglés aprenderás a utilizar el idioma inglés en diferentes situaciones de la vida cotidiana, para comunicarte con otras personas y desarrollar tu capacidad de expresión oral y escrita.",
                "price" => 19.99,
                "bg" => "FF9733",
                "categories" => [4]
            ],
            [
                "title" => "Francés",
                "description" => "En este curso de francés aprenderás a utilizar el idioma francés en diferentes situaciones de la vida cotidiana, para comunicarte con otras personas y desarrollar tu capacidad de expresión oral y escrita.",
                "price" => 19.99,
                "bg" => "FF9733",
                "categories" => [4]
            ],
            [
                "title" => "Italiano",
                "description" => "En este curso de italiano aprenderás a utilizar el idioma italiano en diferentes situaciones de la vida cotidiana, para comunicarte con otras personas y desarrollar tu capacidad de expresión oral y escrita.",
                "price" => 19.99,
                "bg" => "FF9733",
                "categories" => [4]
            ],
            [
                "title" => "Alemán",
                "description" => "En este curso de alemán aprenderás a utilizar el idioma alemán en diferentes situaciones de la vida cotidiana, para comunicarte con otras personas y desarrollar tu capacidad de expresión oral y escrita.",
                "price" => 19.99,
                "bg" => "FF9733",
                "categories" => [4]
            ],
            [
                "title" => "Auditoría",
                "description" => "En este curso de auditoría interna aprenderás a planificar, diseñar e implementar y realizar seguimiento y mejora a un programa de auditoría desde la gestión de acuerdo con las directrices de la norma ISO 19011:2018 para una organización de servicios.",
                "price" => 39.99,
                "bg" => "FF9733",
                "categories" => [5]
            ],
            [
                "title" => "Gestión de proyectos",
                "description" => "En este curso de gestión de proyectos aprenderás cómo administrar, planificar, coordinar, organizar, controlar y hacer seguimiento a todo tipo de proyectos de manera eficiente y efectiva.",
                "price" => 39.99,
                "bg" => "FF9733",
                "categories" => [5]
            ],
        ];

        foreach ($courses as $course) {
            $categories = $course['categories'];
            $course['picture'] = Image::image(
                storage_path('app/public/courses'),
                $course['title'],
                $course['bg'],
                850,
                350,
                false
            );
            $course['user_id'] = User::whereRole(User::TEACHER)->get()->random()->id;
            unset($course['categories']);
            unset($course['bg']);
            $model = Course::create($course);
            $model->categories()->sync($categories);
        }
    }
}
