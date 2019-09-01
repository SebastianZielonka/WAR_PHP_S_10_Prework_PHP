<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 8</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
    <?php
    //definicja zmiennej z ilością rzędów i gwiazdek w wierszu
    $n = 30;
    //tworzymy pętlę która będzie generowała nam WIERSZE
    for ($i = 0; $i < $n; $i++) {
        $row = '';//zmienna która jest zerowana na początku każdej iteracji, przechowująca gwiazdki z wiersza
        //tworzymy pętlę generującą nam gwiazdki w wierszu
        for ($j = 0; $j < $n; $j++) {
            $row .= '*';
        }
        echo $row . '<br>';//wyświetlamy gwiazdki z wiersza i dodajemy "enter"
    }
    ?>

<!--Powyżej wpisz kod PHP-->
</body>
</html>
