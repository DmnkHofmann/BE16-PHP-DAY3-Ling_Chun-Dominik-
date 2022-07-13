<?php
function formatted_dump($content)
{
    echo '<pre>';
    var_dump($content);
    echo '</pre>';
}

function exercise1()
{
    for ($i = 0; $i < 50; $i++) {
        echo "For:" . $i + 1 . "<br>";
    }

    $iw = 0;
    while ($iw < 50) {
        echo "While:" . $iw + 1 . "<br>";
        $iw++;
    }

    $idw = 0;
    do {
        echo "do while:" . $idw + 1 . " <br>";
        $idw++;
    } while ($idw < 50);
}

function exercise2()
{
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach ($arr as $val) {
        echo $val . "<br>";
    }
}

function randGen($iterartion)
{
    $arr = [];
    for ($i = 0; $i < $iterartion; $i++) {
        array_push($arr, random_int(0, 100));
    }
    return $arr;
}

function exercise3($arr_len)
{
    $arr = randGen($arr_len);
    formatted_dump($arr);
    $max = max($arr);
    echo $max;
    //what does echo do with an int when it is in the beginning? (Type conversion?)
}

function  exercise4()
{
    for ($i = 1; $i < 101; $i++) {
        if ($i % 5 == 0 && $i % 3 == 0) {
            echo "Full-Stack <br>";
        } elseif ($i % 5 == 0) {
            echo "Front-End <br>";
        } elseif ($i % 3 == 0) {
            echo "Back-End <br>";
        } else {
            echo "$i <br>";
        }
    }
}


// exercise1();

// exercise2();

// exercise3(15);

// exercise4();