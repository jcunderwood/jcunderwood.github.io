<?php
set_time_limit(60);

echo exec("C:\Users\Under\AppData\Local\Programs\Python\Python39\python.exe C:\Apache24\htdocs\\test_model\content\wow.py \"" . $_POST["text"] . "\" 2>&1", $output);
?>
