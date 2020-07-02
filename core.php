<?php

$chap1 = $_GET['chap1'];
$chap2 = $_GET['chap2'];
$chap3 = $_GET['chap3'];
$chap4 = $_GET['chap4'];


if (isset($chap1)) {
    include 'view/menu/menuChap1.php';
} elseif (isset($chap2)) {
    include 'view/menu/menuChap2.php';
} elseif (isset($chap3)) {
    include 'view/menu/menuChap3.php';
} elseif (isset($chap4)) {
    include 'view/menu/menuChap4.php';
}
 
