<?php

/**
 * Дадена е низа со производи, која треба да се обработи со крајна цел да се добие и испечати низа која ќе ги задоволува следните услови:
 *
 * 1. Секој зеленчук треба да остане
 * 2. Само овошјето кое е поефтино од 10 денари треба да остане
 * 3. Само зачините кои почнуваат на буквата "К" треба да останат независно од дали буквата е голема или мала.
 *
 * На крај доколку сумата од цените на останатите продукти ви изнесува повеќе од 40 сортирајте ги производите по
 * цена во опаѓачки редослед и отстранете продукти почнувајќи од оние со најниска цена се додека вкупната сума не е еднаква или помала од 40
 */

$produkti = [
    "Banana" => [
        "vid" => "ovosje",
        "cena" => 8
    ],
    "jabolko" => [
        "vid" => "ovosje",
        "cena" => 11
    ],
    "Jagoda" => [
        "vid" => "ovosje",
        "cena" => 6
    ],
    "brokula" => [
        "vid" => "zelencuk",
        "cena" => 9
    ],
    "Morkov" => [
        "vid" => "zelencuk",
        "cena" => 14
    ],
    "kari" => [
        "vid" => "zacin",
        "cena" => 4
    ],
    "Kurkuma" => [
        "vid" => "zacin",
        "cena" => 6
    ],
    "bukovec" => [
        "vid" => "zacin",
        "cena" => 8
    ]
];

function isOvosje($produkti) {
    if($produkti["vid"] == "zelencuk") {
        return true;
    } elseif($produkti["vid"] == "ovosje" && $produkti["cena"] < 10) {
        return true;
    } elseif($produkti["vid"] == "zacin") {
        return true;
    } else {
        false;
    }
}

$arr_filter = array_filter($produkti, "Isovosje");
array_pop($arr_filter);
print_r($arr_filter);
