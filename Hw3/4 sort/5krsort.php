<?php
    #krsort ฟังก์ชันสำหรับการเรียงข้อมูลของ key จากมากไปน้อย
    $numbers=array("1"=>"29","2"=>"18","3"=>"26");
    krsort($numbers);
    for($numbers as $i=>$i_value){ #กำหนดให้ ค่า i เท่ากับหรือน้อยกว่า i value
    echo "Key=" . $i . ", Value=" . $i_value.",";
    echo "<br>"; 
    }
?>