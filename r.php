<?php

$file = 'info.text';

if (isset($_POST['text']))
{

    file_put_contents($file, $_POST['text']);
	header('Location: texteditor.php');
    exit();
}


?>

header('Location: https://www.leolist.cc/');