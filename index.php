<?php

// Change path as needed
require_once __DIR__ . '/vendor/autoload.php';

if ($_SERVER['REQUEST_URI'] === '/canvas' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $pageCall = new \PageCall\PageCall([
            'accessKey' => '', // Press your access key
            'secretKey' => '' // Press your access key
        ]);

        $pca = $pageCall->connectIn([
            'userId' => $_POST['userId'],
            'publicRoomId' => $_POST['publicRoomId']
        ]);

        echo $pca['html'];
    } catch (\PageCall\Exceptions\PageCallSDKException $e) {

    } catch (\PageCall\Exceptions\PageCallAuthenticationException $e) {

    }
} else {
    echo file_get_contents('./form.html');
}

