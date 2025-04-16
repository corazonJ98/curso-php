<?php
const API_URL = "https://www.whenisthenextmcufilm.com/api";
#incialiozar una nueva sesion de curl; ch = curl handle
$ch = curl_init(API_URL);
#Indicar que queremos recibir el resultado de la peticion y no mastrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
#ejecutar la peticion y guardamos el resultado
$result = curl_exec($ch);
//una alternastiva seria file_get_contents
//result  = file_get_contents(API_URL) // si soñp quieres hacer un get de una api
$data = json_decode($result, true);
curl_close($ch);

var_dump($data);

?>

<head>
    <title>La proxima pelicula de marvel</title>
    <meta name="description" content="La proxima pelicula de marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <pre style="font-size: 8px; overflow: scroll; height: 250px;">
        <?php var_dump($data); ?>
    </pre>

    <section>
        <img src="<?= $data["poster_url"]; ?>" width="200" alt="Poster de <?= $data["poster_url"]; ?> "
            style="border-radius: 16px" />
    </section>
    <hgroup>
        <h2>
            <?= $data["title"]; ?> se estrena en <?= $data["days_until"] ?> dias
        </h2>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente pelicula es: <?= $data["following_production"]["title"]; ?> </p>
    </hgroup>
</main>


<!-- $name = 'Miguel';
$isDev = true;
$age = 44; -->

<!-- // $output = "Hola $name, con una edad de $age";

// $outputAge = match($age){
// $age < 2=> "Eres un bebe, $name",
    // }; -->

<!-- 
    $bestLanguages = ["PHP", "js", "py", 1, 2];
    $bestLanguages[3] = "java";
    $bestLanguages[1] = "typeScript";
    ?> -->

    <!-- <ul>
        <?php foreach ($bestLanguages as $languaje): ?>
            <li><?= $languaje ?> </li>
        <?php endforeach; ?>
    </ul> -->

    <!-- <h3> 
El mejor lenguaje es <?= $bestLanguages[0] ?>
</h3> -->

    <!-- <h1>
        <? $output ?>
    </h1>




    <h1>
        <?= "Hola mundo"; ?>
    </h1> -->


    <style>
        
        body {
            display: grid;
            place-content: center;
        }

        section{
            display: flex;
            justify-content: center;
            text-align: center;
        }

        hgroup{
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        img{
            margin: 0 auto;

        }
    </style>