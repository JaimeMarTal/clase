<?php 
require_once 'ej09_servidor.php';

for ($i=0;$i<=50;$i++){
    echo ($i%2==0 ? $i : resaltar($i))."<br/>\n";
}

?>