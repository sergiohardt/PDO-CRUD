<?php
include_once("Classes/Select.Class.php");

$select = new Select;
$select->ExecutaSelect($select->setQuery("SELECT * FROM tbl_produtos"));


echo '----------------------';
echo '<pre>';
var_dump($select->getResultado());
echo '</pre>';