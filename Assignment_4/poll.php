<?php
$filename = 'data.txt';
$lastModTime = filemtime($filename);

while (true) {
    clearstatcache();
    $currentModTime = filemtime($filename);
    if ($currentModTime > $lastModTime) {
        echo file_get_contents($filename);
        break;
    }
    usleep(500000); 
}
?>