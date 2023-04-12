<?php

function exc1(){
    echo "hello";
    //throw new Exception('unable');
}

echo exc1();

echo "<br>";

function exc2($var1){
    //throw new Exception('exc2');
    echo $var1;
}

echo exc2(2);

echo "<br>";

function exc3($var2, $var3){
    echo $var2 + $var3;
    //throw new Exception('unable');
    
}

echo exc3(5, 3);


echo "<br>";

function exc4($var4, $var5){
    echo $var4 + $var5;
    //throw new Exception('unable');
}

echo exc4(6, 3);


echo "<br>";


function exc5($var6, $var7){
    if ($var6 == 0) {
        throw new Exception('unable');
    }
    echo $var6 + $var7;
}

echo exc5(4, 8);


echo "<br>";


function exc6($var7, $var8){
    if ($var7 == 0) {
        throw new Exception('unable');
    }
    echo $var7 + $var8;
}

echo "<br>";

try {
    echo exc6(0, 8);
} catch (Exception $ex) {
    
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();

    echo "Exception thrown in $file on line $line: [Code $code] $message";
} finally {
    echo '<br> so';
}
