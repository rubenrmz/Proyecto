<?php
    $pais = $_POST["pais"];
    $paisEsp = $_POST["paisEsp"];
    $calc = $_POST["calc"];
    $data = $_POST["data"];

    $back = ["data1" => $pais, "data2" => $paisEsp, "data3" => $calc, "data4" => $data];
    echo json_encode($back);
?>