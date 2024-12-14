<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <pre>
    <?php 
        // require_once 'ContaBanco.php';
        // require_once 'ControleRemoto.php';
        require_once 'Lutador.php';
        require_once 'Luta.php';

        // $c1 = new ContaBanco();

        // $c1->abrirConta("CC");

        // $c1->depositar(200);

        // $c1->sacar(75);

        // $c1->setModelo("bic");
        // $c1->setPonta(0.5);

        // echo "Eu tenho uma caneta {$c1->getModelo()} da ponta {$c1->getPonta()}";



        // $controle = new ControleRemoto();
        // $controle->ligar();
        // $controle->menosVolume();
        // $controle->menosVolume();
        // $controle->menosVolume();
        // $controle->menosVolume();
        // $controle->menosVolume();

        // $controle->abrirMenu();

        // print_r($controle);


        $l = [];
        $l[0] = new Lutador('Pretty Boy', 'French', 31, 1.75, 68.9, 11, 3, 1);
        $l[1] = new Lutador('Poatan', 'Brazilian',  28, 1.65, 77.8, 14, 2, 2);
        $l[2] = new Lutador('Adensanya', 'Japanese',   35, 1.70, 82.7, 8, 4, 7);
        $l[3] = new Lutador('Jon Jones', 'American',   32, 1.93, 98.2, 20, 15, 0);

        $uec01 = new Luta;
        $uec01->marcarLuta($l[2], $l[1]);
        $uec01->lutar();



        // $l[0]->apresentar();
        // $l[1]->status();
        // $l[2]->ganharLuta();
        // $l[3]->empatarLuta();

    ?>
    </pre>
</body>
</html>