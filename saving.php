<?php
    $m = $_POST["form_mine"];
    $y = $_POST["form_yours"];
    $now = date("y-m-d H:m:s");

    $myfile = fopen("savefile.txt", "a");
    fwrite($myfile, $now);
    fwrite($myfile, "\t\t");
    fwrite($myfile, $m);
    fwrite($myfile, "\t");
    fwrite($myfile, $y);
    fwrite($myfile, "\r\n");
    fclose($myfile);
    Header("Location:finish.html");
?>