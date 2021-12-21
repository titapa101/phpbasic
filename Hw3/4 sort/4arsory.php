<?php
    #arsortฟังก์ชันสำหรับการเรียงข้อมูลของ value จากมากไปน้อย
    $numbers=array("1"=>"29","2"=>"18","3"=>"26");
    arsort($numbers);
    for($numbers as $i=>$i_value){ #กำหนดให้ ค่า i เท่ากับหรือน้อยกว่า i value
    echo "key=" . $i . ", Value=" . $i_value.",";
    echo "<br>";
    }
?>