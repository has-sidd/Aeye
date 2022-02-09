<?php
    $conn = mysqli_connect('localhost', 'root', '', 'aeye-diagnostics');

    if (mysqli_connect_errno()){
        echo 'Failed to connect'.mysqli_connect_error();
    };
?>