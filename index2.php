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
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $p[0]  = new Pessoa('João', 22, 'M');
        $p[1]  = new Pessoa('Maria', 35, 'F');

        $l[0] =  new Livro('O Senhor dos Anéis', 'J.R.R. Tolkien', 300,  $p[0]);
        
        $l[1] =  new Livro('Biblia', 'Deus', 550,  $p[1]);

        // print_r($l[0])
        // $l[1]->detalhes();

        $l[1]->abrir();
        $l[1]->folhear(0);
        $l[1]->voltarPag();
        $l[1]->detalhes();

    ?>
    </pre>
</body>
</html>