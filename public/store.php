<?php

for($i=0;$i<100;$i++){
$url = $_GET['url'];
$f = file_get_contents($url);
echo $f;
}