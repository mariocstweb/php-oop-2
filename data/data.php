<?php
require_once __DIR__ . '/../models/Animal.php';
// Istanzio le classi per tipo
$dog = new Dog("Cane");
$cat = new Cat("Gatto");
$bird = new Bird("Uccello");
$fish = new Fish("Pesce");

$food1 = new Food('Royal Canin', 'Food', '20.99', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000');
$food2 = new Food('Almo Nature', 'Food', '30.99', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg');
$food3 = new Food('Almo Nature', 'Food', '10.99', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');
$food4 = new Food('Tetra', 'Food', '5.99', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg');

$game1 = new Toy('Kong', 'Toy', '12.50', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg');
$game2 = new Toy('Trixie', 'Toy', '11.50', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg');

$accessory1 = new Accessory('Wilma', 'Aviary', '100', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg');
$accessory2 = new Accessory('Tetra', 'Filter', '6,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg');

$foods = [$food1, $food2, $food3, $food4];
$toys = [$game1, $game2];
$accessories = [$accessory1, $accessory2];
