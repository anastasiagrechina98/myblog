<?php
$str = "домашнее животное, одно из наиболее популярных(наряду с собакой) «животных-компаньонов»";
echo "str = " . $str  . "<br>";
$cats = ["kek" => "milashka", "lol" => "fenya", "tek" => "svetochka"];
foreach($cats as $key => $catName) {
    echo "key = " . $key . " " . $catName . "<br>";
} 
$breeds = ["british", "scotland", "puk"];

foreach ($breeds as $key => $catBreeds){
    echo "key = " . $key . " " . $catBreeds . "<br>";
}

$cats = [[
    'name' => 'milashka',
    'breed' => 'british',
    'age' => 6
    ],
    [
     'name' => 'fenya',
     'breed' => 'scotland',
     'age' => 3
    ],
    [
        'name' => 'svetochka',
        'breed' => 'puk',
        'age' => 10
    ]
];

foreach($cats as $key => $value) {
    echo "cat name = " . $value['name'] . ' breed =' . $value['breed'] . ' age = ' . $value['age'] . '<br>';
}
$cars = [[
    'name' => 'puk1',
    'brend' => 'audi',
    'year' => '2005',
],
['name' => 'puk2',
'brend' => 'ferarri',
'year' => '2007',
],
['name' => 'svetochka',
'brend' => 'svetylya',
'year' => '2002',
]
];
foreach ($cars as $key=> $value) { 
    if($value['year'] > 2004) {
     echo 'name =' . $value ['name'] . ' ' . 'brend = ' . $value['brend'] . ' year = ' . $value['year'] . '<br>';
    } else {
        echo "no 2004 " . $value['name'] . "<br";
    }
}
?>