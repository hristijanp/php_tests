<?php

/**
 * Даден е json објект кој треба да се обработи така што ќе ги следи следниве правила:
 *
 * 1. Треба продуктите внатре да се сортираат по цена во растечки редослед
 * 2. Доколку 2 продукти имаат исти цени треба да се сортираат по нивното име по азбучен ред
 * 3. На крај треба да се испечати string во json формат со таа содржина
 *
 * Пр. за добиен json '[{"name":"eggs", "price":1}, {"name":"coffee", "price":9.99}, {"name":"rice", "price":4.04}]'
 * треба да се испечати назад '[{"name":"eggs", "price":1}, , {"name":"rice", "price":4.04}, {"name":"coffee", "price":9.99}]'
 */

$json = '[{"name":"eggs", "price":1}, {"name":"Sugar", "price":4.04}, {"name":"coffee", "price":9.99}, {"name":"rice", "price":4.04}]';

$pr = json_decode($json, true, 4);

function sorted($pr, $key) {
    foreach($pr as $k=>$v) {
        $b[] = $v[$key];
    }

    asort($b);

    foreach($b as $k=>$v) {
        $c[] = $pr[$k];
    }

    return $c;
}

$sorted = sorted($pr, 'price');
// print_r($sorted);
echo json_encode($sorted);
