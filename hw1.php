<?php
//    Объяснить, как работает данный код:
//<?php
//$a = 5;
//$b = '05';
//var_dump($a == $b); // Почему true?
//var_dump((int)'012345'); // Почему 12345?
//var_dump((float)123.0 === (int)123.0); // Почему false?
//var_dump((int)0 === (int)'hello, world'); // Почему true?
//
//<!--1. Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась-->
//<!--через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и-->
//<!--текущий год генерировались в блоке контента из созданных переменных.-->
//<!--2. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b-->
//<!--= 2, надо, чтобы получилось: a = 2b = 1, . Дополнительные переменные использовать нельзя.-->
//    Объяснить, как работает данный код:
    $a = 5;
    $b = '05';
    var_dump($a == $b); // Почему true? Здесь производится сравнение на равенство, интерпретатор строку преобразует в число и сравнивает.
    var_dump((int)'012345'); // Почему 12345? Здесь идет преобразование типа данных из строки в число благодаря касту (int)
    var_dump((float)123.0 === (int)123.0); // Почему false? При тождественном равенстве учитывается тип данных, здесь он не совпадает.
    var_dump((int)0 === (int)'hello, world'); // Почему true? Здесть типы совпадают, а приведение строки из букв к числовому типу данных приводит к нулю, поэтому истина.

//*Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b-->
////<!--= 2, надо, чтобы получилось: a = 2b = 1, . Дополнительные переменные использовать нельзя.-->
    $a = 1;
    $b = 2;
    echo "a = $a, b = $b";
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "<br/>";
    echo "a = $a, b = $b";

