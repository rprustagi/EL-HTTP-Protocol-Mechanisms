<?php

$file = '../img/img-07.jpg';
if (is_file($file)) {
    header('Content-Type: image/jpeg');
    header('Transfer-Encoding: chunked');

    $chunkSize = 1000;
    $handle = fopen($file, 'rb');
    while (!feof($handle)) {
        $buffer = fread($handle, $chunkSize);
        # send chunk size in hex, chunk content, empty new line
        echo sprintf("%x\r\n", $chunkSize);
        echo $buffer; echo "\r\n";
        ob_flush(); flush();
        usleep(500000); # emulate network latency
    }
    fclose($handle);
    exit;
} else {
    header('Content-Type: text/html');
    echo "\r\nNo picture available for $file\r\n";
}
?>
