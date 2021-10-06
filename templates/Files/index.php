<?php
echo $this->Form->create(NULL, ['type' => 'file']);
echo $this->Form->file('submittedfile');
echo $this->Form->button('Submit');
echo $this->Form->end();
$uploadPath = '../uploads/';
$files = scandir($uploadPath, 0);
echo "Files uploaded in uploads/ are:<br/>";
for ($i = 2; $i < count($files); $i++)
    echo "File is - " . $files[$i] . "<br>";
?>
