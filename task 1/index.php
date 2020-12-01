<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1 img counter</title>
</head>
<body>
    <img src="image.php" width="500px"/>
    <br>
    <? 
        $shows = file_get_contents('./img/pictureShowCounter.txt');
        echo 'Просмотров: '.$shows;
    ?>      
</body>
</html>