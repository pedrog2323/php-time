<?php
$nextweek = time() + (7 * 24 * 60 * 60);

echo 'Now:          '. date ('d-m-Y') ."<br>";

echo 'Now:          '. date ('d-m-Y', $nextweek) ."<br>";

echo 'Now:          '. date ('d-m-Y', strtotime('+1 week')) ."<br>";

?>