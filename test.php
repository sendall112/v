<?php

$command = "sudo php /var/www/file.php 'براميتر'  > /dev/null 2>/dev/null &";
    $shell = shell_exec($command);

echo __FILE__;