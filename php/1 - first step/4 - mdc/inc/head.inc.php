
<?php

if($page_title == '') {
    $page_title = 'MDC'; 
}

if($page_favicon == '') {
    $page_favicon = 'imgs/earth.ico'; 
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="<?=$page_favicon?>" type="image/x-icon">
    <title><?=$page_title?></title>
</head>