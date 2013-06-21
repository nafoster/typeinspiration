<?php
$links = array (
"index.php",
"jk.php",
"wc.php",
"buddha.php",
"jp.php"
);
$href = rand(0, count($links) -1);

header("Location: ".$links[$href]);
?>