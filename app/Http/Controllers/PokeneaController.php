<?php

namespace App\Http\Controllers;

class PokeneaController extends Controller
{
    public static $pokenea = array(
        array(
            "id" => "1",
            "name" => "Nea Fresa",
            "image" => "https://storage.googleapis.com/images_pokenea/maluma_1.jpg",
            "ability" => "Detener guerras ",
            "phrase" => "Maluma Baby",
            "height" => "180cm"
        ),
        array(
            "id" => "2",
            "name" => " Dabielis Flamerys",
            "image" => "https://storage.googleapis.com/images_pokenea/vsco5ff8fcd9e8769.jpg",
            "height" => "170cm",
            "phrase" => "Sin mariahuana no me divierto",
            "ability" => "99 Navajasos +1 ",
        ),
        array(
            "id" => "3",
            "name" => " Viejo sabroso",
            "image" => "https://storage.googleapis.com/images_pokenea/28a215f3-1279-444f-aee8-d62a1d1d04cf.jpg",
            "height" => "182cm",
            "phrase" => "ABDUSCAN",
            "ability" => " Decirte calvo hasta dejarte como un espejo",
        ),
        array(
            "id" => "4",
            "name" => "Alias Palomo",
            "image" => "https://storage.googleapis.com/images_pokenea/descarga.jpg",
            "height" => "172cm",
            "phrase" => "Son riesgos que se toman",
            "ability" => "Invocar un ejercito de palomas ",

        ),
        array(
            "id" => "5",
            "name" => "Alias Popeye",
            "image" => "https://storage.googleapis.com/images_pokenea/Captura%20de%20pantalla%202022-05-17%20191616.png",
            "height" => "178cm",
            "phrase" => "Si a bueno",
            "ability" => "Invocar un ejercito de espinacas parlantes",
        )
        ,
        array(
            "id" => "6",
            "name" => "Alias Caballo",
            "image" => "https://storage.googleapis.com/images_pokenea/5a274cd8755ce.r_1541696634158.0-249-3000-1753.jpeg",
            "height" => "178cm",
            "phrase" => "Estudien vagos",
            "ability" => "Invocar una frase bien estupida",
        )
        ,
        array(
            "id" => "7",
            "name" => "Niño de la rosa",
            "image" => "https://storage.googleapis.com/images_pokenea/1407026830_image.jpg",
            "height" => "178cm",
            "phrase" => "Pa’ qué zapatos si no hay casa, pa’ qué hijue",
            "ability" => "Invocar zapatos ",
        )
        ,
        array(
            "id" => "8",
            "name" => "Zarco",
            "image" => "https://storage.googleapis.com/images_pokenea/EzW4VefVEAQgklV.jpg",
            "height" => "178cm",
            "phrase" => "Yo si soy mera loca",
            "ability" => "Robar con la mirada",
        )
        ,
        array(
            "id" => "9",
            "name" => "Alias Dansy",
            "image" => "https://storage.googleapis.com/images_pokenea/descarga%20(1).jpg",
            "height" => "191cm",
            "phrase" => "jajajaj ya aprendi a no toser",
            "ability" => "Ver en la oscuridad",
        )
        ,
        array(
            "id" => "10",
            "name" => "Royser Yair",
            "image" => "https://storage.googleapis.com/images_pokenea/EroRQMaXMAc-N0m.jpg",
            "height" => "168cm",
            "phrase" => "No llore ni cuando mataron al cucho , llorare por usted ",
            "ability" => "Pedir la hora y terminar con un celular",
        )
    );

    public function show()
    {

        $randomNea = PokeneaController::$pokenea[array_rand(PokeneaController::$pokenea)];

        $viewData = [
            'pokenea' => $randomNea,
            'docker_container' => gethostbyname(gethostname()),
        ];

        return view('pokenea.random', $viewData);
    }


    public function image()
    {

        $randomNea = PokeneaController::$pokenea[array_rand(PokeneaController::$pokenea)];

        $viewData = [
            'pokenea' => $randomNea,
            'docker_container' => gethostbyname(gethostname()),
        ];

        return view('pokenea.image', $viewData);
    }
}
