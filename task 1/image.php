<? 
    $imgPath = './img/picture.jpg';
    $showCounterPath = './img/pictureShowCounter.txt';

    $newShowValue = file_get_contents($showCounterPath) + 1;
    $fpc = fopen($showCounterPath, 'w');
    fwrite($fpc, $newShowValue);
    fclose($fpc);

    $fp = fopen($imgPath, 'rb');

    header("Content-Type: image/jpg");
    header("Content-Length: " . filesize($imgPath));

    fpassthru($fp);
