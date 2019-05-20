<?php
error_reporting(0);
echo
"[+] 👉 COMO USAR DIGITE: php php.php e seu comando Developer: firor (GRANDE MERDA) [+]\n\n\n";
$argv = $argv[1];

echo
"##################################################
# 👉 Comando $argv Executado! Resultado abaixo 👇 #
##################################################\n\n";

echo exec($argv)."\n\n";
?>