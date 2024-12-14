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
        require_once 'Aluno.php';
        require_once 'Visitante.php';
        require_once 'Bolsista.php';

        // $p[0]  = new Pessoa('João', 22, 'M');
        $p[1]  = new Aluno('Maria', 15, 'F');
        $p[2] =  new Visitante('Josué Tigrão', 46, 'M');
        $p[3] =  new Bolsista('Tia da Cantina', 55, 'F');

        $p[1]->setMatr(111);
        $p[1]->setCurso('Informatica');
        $p[1]->pagarMensalidade();

        print_r($p[1]);

        $p[3]->setMatr(111);
        $p[3]->setCurso('Informatica');
        $p[3]->pagarMensalidade();        

        print_r($p[3]);

    ?>
    </pre>
</body>
</html>