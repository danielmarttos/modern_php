<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .b-1 {
            background-color: red;
        }
        .b-2 {
            background-color: yellow;
        }
        .b-3 {
            background-color: green;
        }
        .b-4 {
            background-color: blue;
        }
        .b-5 {
            background-color: gray;
        }
    </style>
</head>

<?php $cor = rand(1,5);?>

<body class="b-<?=$cor?>">

    <?php echo '<h2>TITLE!</h2>'?>

</body>
</html>