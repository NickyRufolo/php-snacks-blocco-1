<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php
$Paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing 
elit. Quidem facere molestias optio vitae. 
Consectetur ipsum corrupti et? Repellendus cupiditate, 
omnis suscipit esse corrupti ipsam ab quas velit porro officiis ea!

Lorem ipsum dolor sit amet 
consectetur adipisicing elit. Dolore, doloribus! 
Delectus, ea distinctio numquam aliquam officia provident corrupti velit quos dolore ipsa autem vero consequuntur voluptates ducimus aspernatur quia obcaecati!";

$arrayParagrafi = explode('.', $Paragrafo );

var_dump( $arrayParagrafi);

for($i=0; $i<count($arrayParagrafi); $i++){

    if( $arrayParagrafi[$i] !== ''){
        echo "<p>";
        echo $arrayParagrafi[$i];
        echo "</p>";
    }
}
?>