<?php
$dir = substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);
$fullpath = $_SERVER['DOCUMENT_ROOT'] . $dir;
mkdir($fullpath, 0755, true);
$filename = $_SERVER['REQUEST_URI'];
$fileonly = basename($filename);

$full = $fullpath .  trim($fileonly) ;
$fullfile = fopen($full, "w");
fwrite($fullfile, file_get_contents('php://input'));
//file_put_contents($filename, file_get_contents('php://input'));
fclose($fullfile);
