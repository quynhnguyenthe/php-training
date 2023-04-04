<?php
    // Declare a string
    $str1 = 'Hello World';
    $str2 = "Hello World";
//    var_dump($str1 === $str2);
    $tab1 = 'a\tb';
    $tab2 = "a\tb";
//    echo $newLine1; // Print a\tb
//    echo $newLine2; // Print a   b

    // Concatenate strings
    $hello = 'Hello';
    $world = 'World';
    $helloWorld = $hello . ' ' . $world;
    $helloWorld .= '!';
//    echo $helloWorld;

    // Quotation in string
    $quote1 = "I am \"Duy\"";
    $quote2 = 'I am "Duy"';
//    echo $quote1;
//    var_dump($quote1 === $quote2); // bool(true) => same expression

    // Using variables in string
    $name = 'Duy';
    $project = 'TOC';
    const PROJECT = 'TOC';
    $string1 = "My name is $name and I'm from $project";
    $string2 = "My name is $name and I'm from PROJECT";
//    echo $string1;
//    echo $string2; // Won't work like expectation, will print My name is Duy and I'm from PROJECT

    // strpos($haystack, $needle) : case-sensitive
    // stripos($haystack, $needle) : case-insensitive
    $haystack = "Amela";
    $needle1 = 'a';
    $ipos = stripos($haystack, $needle1);
    $pos = strpos($haystack, $needle1);
    echo $ipos . ',' . $pos; // Print 0,4

    // str_contains: case-sensitive
    $needle2 = 'me';
    $needle3 = 'Me';
    $isContain1 = str_contains($haystack, $needle2);
    $isContain2 = str_contains($haystack, $needle3);
    var_dump($isContain1, $isContain2); // echo bool(true) bool(false)

    /* str_len/mb_strlen
    *
    * str_len: Return the number of bytes
    * mb_strlen: Return the number of characters
    *
    */
    $eString = 'Hello';
//    echo strlen($eString) . ',' . mb_strlen($eString); // Print 5,5
    $jString = 'あいうえお';
//    echo strlen($jString) . ',' . mb_strlen($jString); // Print 15,5

    // substr/mb_substr : same as strlen/mb_strlen
    $sub1 = substr($jString, 2);
//    echo $sub1;
//    echo "\n";
    $sub2 = mb_substr($jString, 2);
//    echo $sub2;

    // str_replace
    $string = 'Duy is a PHP Developer';
    $quynh = 'Quynh';
    $newString = str_replace('Duy', $quynh, $string);
//    echo $newString; // Print 'Quynh is a PHP Developer'
    $the = ['The', 'Java'];
    $newString = str_replace(['Quynh', 'PHP'], $the, $newString);
//    echo $newString; // Print 'The is a Java Developer'




