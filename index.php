<?php
$data = json_decode(file_get_contents('data.json'), true);
?>

<img src="<?= $data['banner'] ?>" style="max-width:100%;">
<h1><?= $data['title'] ?></h1>
<a href="<?= $data['join_link'] ?>">立即加入</a>
