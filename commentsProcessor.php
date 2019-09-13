<?php

$results = $_REQUEST['comment'];

$filepath = __DIR__ . '/comments/';

if (! file_exists($filepath)) {
    $mkdirResult = mkdir($filepath);
    if (!$mkdirResult) {
        throw new Exception('Failed to create comments directory.', 10001);
    }
}

$filename = time() . getmypid();

$wroteCount = file_put_contents($filepath.$filename, $results);

print json_encode([wroteCount => $wroteCount]);

exit();
