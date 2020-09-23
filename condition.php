<?php

$tanya=readline("pilih mana (yes/no/anang) ?");

if($tanya=="yes")   //jika memilih yes
{
    echo "kamu memilih yes";
}elseif($tanya=="no")   //jika memilih no
{
    echo "Kamu memilih no";
}elseif($tanya=="anang")    //jika memilih anang
{
    echo "kamu memilih pilihan yang tepat";
}else{          //jika tidak memilih apapun
    echo "kamu tidak memilih pilihan yang tersedia";
}

echo PHP_EOL;

$menu=readline("pilih menu angka 1 -3 ? ");

//pilih input yang alan diuji

switch($menu)
{
    case 1;     //jika user menginput angka 1
        echo "Anda memilih angka 1";
break;
    case 2;      // jika user menginput angka 2
        echo "Anda memilih angka 2";
break;
    case 3;        //jika user menginput angka 3
        echo "Anda memilih angka 3";
break;        //jika user tidak menginput angka yang tersedia 
    echo "Anda tidak memilih pilihan yang tersedia";
    default;
}