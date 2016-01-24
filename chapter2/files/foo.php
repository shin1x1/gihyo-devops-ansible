<?php
$path = __DIR__ . '/done.txt';

file_exists($path) ? unlink($path) : file_put_contents($path, date('Y-m-d H:i:s'));

