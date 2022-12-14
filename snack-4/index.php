<!-- Snack 4 -->
<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
$array = [];
for( $i =0; $i < 15; $i++ ) {
    //creo la funzione
    //in array vuoto non è presente il numero che ho generato, se nn è presente pushalo.
    $numberRandom = rand(1, 1000);
    if(!in_array($numberRandom, $array)){
        $array[] = $numberRandom;
    }
};
foreach($array as $value){
    echo "<div>Number is: $value</div>";
}

?>