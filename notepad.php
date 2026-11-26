<?php $file = 'notepad.txt';if (isset($_POST['save'])) {$content = isset($_POST['content']) ? $_POST['content'] : ' ' ;
file_put_contents($file, $content);$message = "内容已保存";}
if (isset($_POST['clear'])) {file_put_contents($file, ' ' );$message = "内容已清空";}
$current_content = file_exists($file) ? file_get_contents($file) : ' ' ; ?>

<!DOCTYPE html><html><head><title>Notepad</title>
<link rel="icon" href="ftp/book_writable.png" type="image/png">
<style>body {font-family:Arial, sans-serif;max-width:800px;margin:0 auto;padding:20px;background-color:black;color:white;}
textarea {width:100%;height:400px;margin-bottom:10px;}
.buttons {margin-bottom:20px;}button {padding:8px 15px;margin-right:10px;}
.message {color:green;margin-bottom:10px;}</style>
</head>
<body><h1>简易在线<span style="color:cyan;">记事本</span></h1><?php if (!empty($message)): ?>
<div class="message"><?php echo htmlspecialchars($message); ?></div><?php endif; ?>
<form method="post"><textarea name="content"><?php echo htmlspecialchars($current_content); ?></textarea>
<div class="buttons"><button type="submit" name="save">保存</button><button type="submit" name="clear">清空</button>
<span>右下角可<span style="color:red;">拖动</span>，改变预览大小</span></div></form></body></html>