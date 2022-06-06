<?php
    $language = strtolower($_POST['language']);
    $code = $_POST['code'];

    $random = substr(md5(mt_rand()), 0, 7);
    $filePath = "temp/" . $random . "." . $language;
    $programFile = fopen($filePath, "w");
    fwrite($programFile, $code);
    fclose($programFile);

    if($language == "php") {
        $output = shell_exec("C:\xampp\php\php.exe $filePath 2>&1");
        echo $output;
    }
    if($language == "python") {
        $output = shell_exec("C:\Python39\python.exe $filePath 2>&1");
        echo $output;
    }
    if($language == "node") {
        rename($filePath, $filePath.".js");
        $output = shell_exec("node $filePath.js 2>&1");
        echo $output;
    }
    if($language == "c") {
        $outputExe = $random . ".exe";
        shell_exec("gcc $filePath -o $outputExe");
        $output = shell_exec(__DIR__ . "//$outputExe");
        echo $output;
    }
    if($language == "cpp") {
        $outputExe = $random . ".exe";
        shell_exec("g++ C:\MinGW\bin\cpp.exe -o $outputExe");
        $output = shell_exec(__DIR__ . "//$outputExe");
        echo $output;
    }