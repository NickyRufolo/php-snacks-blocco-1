<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
$arrayChiavi = array_keys( $db );
// $db['teachers']
for($i=0; $i < count( $arrayChiavi); $i++)
//se l'array di chiavi a come valore estrazione faccio qualcosa, se ha pm faccio altro
if( $arrayChiavi[ $i ] == 'teachers')
//stampo i valori di teachers inun box grigio

?>