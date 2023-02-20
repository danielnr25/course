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
                "phone" => "964123456",
                "featured" => 1,
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4523/card_imagen.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Álgebra Lineal",
                "description" => "El curso de álgebra lineal expone una serie de conceptos complementarios en los sistemas de ecuaciones, en cuanto a los problemas que de allí surgen y la manera eficaz y rápida de resolverlos mediante la utilización de espacios vectoriales.",
                "price" => 19.99,
                "phone" => "964123426",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/584/card_imagen.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Álgebra Lineal",
                "description" => "El curso de álgebra lineal expone una serie de conceptos complementarios en los sistemas de ecuaciones, en cuanto a los problemas que de allí surgen y la manera eficaz y rápida de resolverlos mediante la utilización de espacios vectoriales.",
                "price" => 29.99,
                "phone" => "964123156",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/3858/card_imagen.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Estadística",
                "description" => "En este curso de estadística, aprenderás los fundamentos y las aplicaciones de esta disciplina, para llevar a cabo la recolección, caracterización y técnicas para el estudio de las poblaciones y finanzas.",
                "price" => 19.99,
                "phone" => "964123451",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4046/card_imagen.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Química",
                "description" => "En este curso de química, aprenderás de los fundamentos de la materia y sus principales estructuras, nomenclaturas e implementaciones, bajo la finalidad comprender de qué manera esta ciencia facilita el desarrollo humano.",
                "price" => 29.99,
                "phone" => "964123455",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/790/card_imagen.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Física",
                "description" => "En este curso de física eléctrica aprenderás acerca de los principios básicos de esta disciplina y las leyes que la rigen, para comprender qué fenómenos influyen sobre el funcionamiento de la electricidad.",
                "price" => 19.99,
                "phone" => "964123459",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4570/card_imagen.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Redacción",
                "price" => 29.99,
                "description" => "En este curso de redacción aprenderás a escribir textos formales e informales; desde artículos académicos o documentos corporativos, hasta mensajes de WhatsApp o comentarios para redes sociales.",
                "featured" => 1,
                "phone" => "964123056",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4516/card_imagen.jpg",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],

            [
                "title" => "Lectura y comprensión de textos",
                "description" => "En este curso de lectura aprenderás a utilizar la inspección, la visualización y la comprensión lectora, para comprender cierta realidad o tema de interés. Es fácil de aprender y solo se requiere tener conocimientos elementales.",
                "price" => 29.99,
                "phone" => "914123456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4521/card_imagen.jpg",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Filosofía",
                "description" => "En este curso de filosofía aprenderás acerca de cómo se ha forjado el pensamiento crítico y reflexivo, a partir del estudio de la razón, teniendo como base diferentes periodos históricos y escuelas filosóficas.",
                "price" => 9.99,
                "phone" => "924123456",
                "featured" => 1,
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/1378/card_imagen.jpg",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Marketing Digital",
                "description" => "En este curso de marketing digital aprenderás aplicar una serie de estrategias orientadas a la comercialización de una marca, por medio del uso de las redes sociales y el Internet. Es fácil de aprender y solo se requiere tener conocimientos elementales.",
                "price" => 34.99,
                "phone" => "954123456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4297/card_imagen.jpg",
                "categories" => [3],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Comercio Electrónico",
                "description" => "En este curso de comercio electrónico aprenderás aplicar las estrategias asociadas al emprendimiento de su negocio digital , mediante el uso del marketing. Es fácil de aprender y solo se requiere tener conocimientos elementales.",
                "price" => 29.99,
                "phone" => "964123458",
                "featured" => 1,
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4383/card_imagen.jpg",
                "categories" => [3],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Ventas",
                "description" => "En este curso de ventas aprenderás a llevar a cabo una serie de técnicas y  estrategias de ventas efectivas, aplicables a cada situación, con el fin de desarrollar una serie de competencias comerciales, que permitan asegurar las metas de cualquier negocio.",
                "price" => 19.99,
                "phone" => "964123457",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4262/card_imagen.jpg",
                "categories" => [3],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Administración de Empresas",
                "description" => "En este curso de administración de empresas aprenderás a llevar a cabo una serie de técnicas y estrategias de administración efectivas, aplicables a cada situación, con el fin de desarrollar una serie de competencias comerciales, que permitan asegurar las metas de cualquier negocio.",
                "price" => 19.99,
                "phone" => "964123453",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4316/card_imagen.jpg",
                "categories" => [3],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Inglés",
                "description" => "En este curso de inglés aprenderás a utilizar el idioma inglés en diferentes situaciones de la vida cotidiana, para comunicarte con otras personas y desarrollar tu capacidad de expresión oral y escrita.",
                "price" => 19.99,
                "phone" => "963123456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4220/card_imagen.jpg",
                "categories" => [4],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Francés",
                "description" => "En este curso de francés aprenderás a utilizar el idioma francés en diferentes situaciones de la vida cotidiana, para comunicarte con otras personas y desarrollar tu capacidad de expresión oral y escrita.",
                "price" => 19.99,
                "phone" => "96412345",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4524/card_imagen.jpg",
                "categories" => [4],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Italiano",
                "description" => "En este curso de italiano aprenderás a utilizar el idioma italiano en diferentes situaciones de la vida cotidiana, para comunicarte con otras personas y desarrollar tu capacidad de expresión oral y escrita.",
                "price" => 19.99,
                "phone" => "904123456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/1854/card_imagen.jpg",
                "categories" => [4],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Alemán",
                "description" => "En este curso de alemán aprenderás a utilizar el idioma alemán en diferentes situaciones de la vida cotidiana, para comunicarte con otras personas y desarrollar tu capacidad de expresión oral y escrita.",
                "price" => 19.99,
                "phone" => "964127456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/794/card_imagen.jpg",
                "categories" => [4],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Auditoría",
                "description" => "En este curso de auditoría interna aprenderás a planificar, diseñar e implementar y realizar seguimiento y mejora a un programa de auditoría desde la gestión de acuerdo con las directrices de la norma ISO 19011:2018 para una organización de servicios.",
                "price" => 39.99,
                "phone" => "964423456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4515/card_imagen.jpg",
                "categories" => [5],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Gestión de proyectos",
                "description" => "En este curso de gestión de proyectos aprenderás cómo administrar, planificar, coordinar, organizar, controlar y hacer seguimiento a todo tipo de proyectos de manera eficiente y efectiva.",
                "price" => 39.99,
                "phone" => "964163456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4414/card_imagen.jpg",
                "categories" => [5],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Relaciones públicas",
                "description" => "En este curso de relaciones públicas aprenderás los conceptos fundamentales para realizar una campaña de relaciones públicas, teniendo en cuenta la comunicación organizacional, el marketing y el desarrollo empresarial.",
                "price" => 39.99,
                "phone" => "969923456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4569/card_imagen.jpg",
                "categories" => [5],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Topografía",
                "description" => "En este curso de topografía aprenderás aplicar los procesos asociados a la representación gráfica de las superficies terrestres, teniendo en cuenta sus detalles y formas. Es fácil de aprender y solo se requiere tener conocimientos elementales.",
                "price" => 39.99,
                "phone" => "963523456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4293/card_imagen.jpg",
                "categories" => [6],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Autocad",
                "description" => "En este curso de AutoCAD aprenderás a utilizar las funcionalidades que ofrece este programa, por medio de sus ventajas y herramientas, con el fin de automatizar las tareas de dibujo digital.",
                "price" => 39.99,
                "phone" => "964123216",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4327/card_imagen.jpg",
                "categories" => [6],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Autocad",
                "description" => "En este curso de AutoCAD aprenderás a utilizar las funcionalidades que ofrece este programa, por medio de sus ventajas y herramientas, con el fin de automatizar las tareas de dibujo digital. Es fácil de aprender.",
                "price" => 29.99,
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4327/card_imagen.jpg",
                "phone" => "964154456",
                "categories" => [6],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Redes",
                "description" => "En este curso de redes aprenderás acerca de la manera como funcionan las redes, sus principales características y de qué modo se puede implementar. Es fácil de aprender y solo se requiere tener conocimientos elementales.",
                "price" => 39.99,
                "phone" => "964151456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4158/card_imagen.jpg",
                "categories" => [7],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Seguridad Informática",
                "description" => "En este curso de seguridad informática aprenderás aplicar la configuración y programación de redes, utilizar las herramientas de CMD, bajo la finalidad de aprender a prevenir ataques informáticos y cuidar de manera efectiva la información privada.",
                "price" => 39.99,
                "phone" => "964123236",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4286/card_imagen.jpg",
                "categories" => [7],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Informática",
                "description" => "En este curso de informática aprenderás cómo funciona la computación y los procesos que permiten el manejo, almacenamiento, procesamiento y la transmisión de la información a través de los formatos digitales.",
                "price" => 39.99,
                "phone" => "964123461",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4411/card_imagen.jpg",
                "categories" => [7],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Power BI",
                "description" => "En este curso de Power BI aprenderás aplicar los fundamentos de la inteligencia de negocios y el análisis de datos, teniendo en cuenta las aplicaciones del Power BI, bajo el propósito de tomar decisiones basados en datos objetivos y cuantitativos.",
                "price" => 39.99,
                "phone" => "994123456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4345/card_imagen.jpg",
                "categories" => [8],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Photoshop",
                "description" => "En este curso de Photoshop aprenderás a editar imagenes y fotografías, así como realizar retoques digitales de manera profesional. Por lo tanto, aprenderás a utilizar la interfaz y las herramientas que facilitan la creación y edición de imágenes.",
                "price" => 39.99,
                "phone" => "964666456",
                "picture" => "https://d3puay5pkxu9s4.cloudfront.net/curso/4555/1024_imagen.jpg",
                "categories" => [7],
                "status" => Course::PUBLISHED
            ],

        ];

        foreach ($courses as $course) {
            $categories = $course['categories'];
            $course['user_id'] = User::whereRole(User::TEACHER)->get()->random()->id;
            unset($course['categories']);
            $model = Course::create($course);
            $model->categories()->sync($categories);
        }
    }
}
