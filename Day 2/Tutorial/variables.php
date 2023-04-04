<?php
    // Declare variables
    $i = 0;
    $isActive = false;
    $table_id; // Warning
    echo ($i);

    // Declare constants
    const REGION = 'Japanese'; // Not const $REGION = 'Japanese'
    echo REGION;

    // Cast
    $int = 123;
    $str = (string) $int;
    var_dump($str); // Print 'string(3) "123

    $bool = false;
    var_dump((int) $bool);
?>