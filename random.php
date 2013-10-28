<?php
$links = array (
"qotsa.php",
"jk.php",
"wc.php",
"buddha.php",
"jp.php",
"jl.php"
);
$href = rand(0, count($links) -1);

header("Location: ".$links[$href]);
?>