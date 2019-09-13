<?php

$comment = $_REQUEST['comment'];

$filepath = __DIR__ . '/comments/';

try {
    if (!file_exists($filepath)) {
        $mkdirResult = mkdir($filepath);
        if (!$mkdirResult) {
            throw new Exception('Failed to create comments directory.', 10001);
        }
    }
    $filename = time() . getmypid();
    $wroteCount = file_put_contents($filepath.$filename, $comment);
    $response = json_encode([
                              'success' => true,
                              'wroteCount' => $wroteCount
                          ]);
} catch (Exception $exception) {
    $response = json_encode([
                              'success' => false,
                              'errorMessage' => $exception->getMessage(),
                              'errorCode' => $exception->getCode()
                          ]);
}

hader('Location: /index.php?response='. $response);

exit();
