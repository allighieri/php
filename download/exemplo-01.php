<?php

$link = "https://s2.glbimg.com/ENfS3NIYbjTACnB9gBcNzfn6WWw=/0x0:2048x1366/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/M/i/HNxeG7SkA3qvaiDmoiQw/fla.jpg";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img sec="<?=$baseame?>">