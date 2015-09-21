<?php

//require file
$LTR = __DIR__ . DIRECTORY_SEPARATOR . 'framework' . DIRECTORY_SEPARATOR . 'lithread.php';
require_once($LTR);

//run app

(new LiThread())->run($config = array());


