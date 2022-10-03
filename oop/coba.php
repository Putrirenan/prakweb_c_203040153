<?php
// class merupakan blueprint/template untuk membuat instance dari object
// class mendefinisikan objectnya 
// class dapat menyimpan data dan perilaku yang disebut dengan property dan method

// object merupakan instance yang didefinisikan oleh class
// object dapat dibuat hanya dengan satu class
// object dibuat dengan menggunakan keyword new

class coba
{
}

// membuat object instance dari class
$a = new coba();    // membuat object $a dari class coba
$b = new coba();
$c = new coba();

var_dump($a);
var_dump($b);
var_dump($c);
