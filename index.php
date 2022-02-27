<?php
require_once 'core/core.php';
require_once 'app/views/header.html';
require_once 'app/views/body.html';
require_once 'app/controllers/ParseData.php';
require_once 'app/controllers/WriteDataToDb.php';
require_once 'app/models/ProductModel.php';

function displayDataFromDb($mysqli, $iniData)
{
    $data = [];
    
}
//displayDataFromDb($mysqli, $iniData);
require_once 'app/views/footer.html';











/*$file = fopen("storage/example.txt", 'r');
$content = fread($file, filesize("storage/example.txt"));

$contentArray = explode("---", $content);
echo "Mega Shop <br/>";
foreach ($contentArray as $k => $v){
    echo $v."<br/>";
}
if($_POST){
    echo "Response from megaShop!";
}*/