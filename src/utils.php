<?php 

$str   = "10";
$int   = 10;  
$float = 0.3; 
$bool  = true;
$num2  = 0;   

function section_start(string $text = ""){
    echo "<br><div class =\"section_start indent\">" . $text . "</div><br>";
    echo "<div class =\"indent\">" . "{" . "</div>";
}

function section_end(){
    echo "<div class =\"indent\">" . "}" . "</div>";
}

function nline(int $how_many = 1){
    while($how_many-- > 0){
        echo "<br>";
    }
}