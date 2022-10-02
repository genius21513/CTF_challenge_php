<?php

function float($k0){
    $wl="#12";
    if($k0<=0x7F)
        return chr($k0);
    if($k0<=0x7FF)
        return chr(($k0>>6)+192).chr(($k0&63)+128);
    if($k0<=0xFFFF)
        return chr(($k0>>12)+224).chr((($k0>>6)&63)+128).chr(($k0&63)+128);
    if($k0<=0x1FFFFF)
        return chr(($k0>>18)+240).chr((($k0>>12)&63)+128).chr((($k0>>6)&63)+128).chr(($k0&63)+128);
    return '';
}

$l = 404;
$i = 'U+547D';
use function is_numeric as Il;

// echo ('404xx'==$l);
// $x = float(hexdec(str_replace("U+","",$i)));
// echo $x;
// 命

function l($kla0, $lil1){
    for($tuj2=0;$tuj2<strlen($kla0);$tuj2++)
         $kla0[$tuj2]=($kla0[$tuj2]^$lil1[$tuj2%strlen($lil1)]);
    return $kla0;
}

if (!empty($_GET['s']) && isset($_GET['h']) && !empty($_GET['e']) && isset($_GET['ll'])){
    $h = $_GET['s'];
    $ll = $_GET['e'];
    $ss = "#515551";
    
// echo explode('?',$_SERVER['REQUEST_URI'])[1];
    // var_dump(preg_match('/^s\=.\..\..\..\&h\=/', 's=a.b.c.d&h=yyy'));

    // if(preg_match('/^s\=.\..\..\..\&h\=/', explode('?',$_SERVER[REQUEST_URI])[1])){
    if(preg_match('/^s\=.\..\..\..\&h\=/', explode('?', $_SERVER[REQUEST_URI])[1])){
        $s = $_GET['h'];
        $e = $_GET['ll'];
    
        // echo $s.'<br/>';
        // \d+(?!%)
        // echo is_string($s);
        // $s = "404＄";
        // echo preg_match('/^(?<!\d)\d{3}(?!\d)+＄/', $s).'<br/>';
        // // echo preg_match('/^(?<!\d)\d{3}(?!\d)+$/', '404').'<br/>';
        // echo (!Il($s)).'<br/>';
        // echo preg_match('/^(?<!\d)\d$/', '3').'<br/>';
        // echo preg_match('/^(?<!\d)\d{3}(?!\d)+$/', $s).'<br/>';
        // echo md5(l($e, $ss)).'<br/>'; 
        // echo (strcmp(md5(l($e, $ss)), $h)==0).'<br/>';
        // $s = 0x194; = 404

        if (preg_match('/^(?<!\d)\d{3}(?!\d)+＄/', $s) && (strcmp(md5(l($e, $ss)), $h)==0) && !Il($s)){
            if ($_GET['h']==$l){                
                echo 'here';
                if (strcmp(float(hexdec(str_replace("U+","", $i))), $ll)==0){
                    echo file_get_contents( "../f" );
                    die();
                }
            }
        }
    }
}

?>