<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
    <h3>LET'S GOOOO</h3>
    <pre>
    <?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';

    // $nv[0] = new Video('Manual do Mundo');
    // $nv[1] = new Video('Gaba');
    // $nv[2] = new Video('Cazé');

    // $nv[0]->play();
    // // $nv[0]->pause();
    // $nv[0]->like();

    // print_r($nv[0]);

    $gf = new Gafanhoto('Ismael', 24, 'M', 'mael');

    var_dump($gf);

    // $gf->ganharExp();
    echo '<br>';
    echo $gf->getExperiencia();

    ?>
    </pre>
</body>
</html>