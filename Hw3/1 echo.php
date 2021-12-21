<?php
    $cars = array("Volvo","BMW","Toyota","Honda",);
    echo "I like " . $cars[0] . "," . $cars[1] . " and " . $cars[2] . ",";
    echo ("<br>");
    echo "I like  $cars[0] , $cars[1] and  $cars[2] .";
    for($i=0;$i<count($cars);$i++){ 
        echo ($cars[$i] ."<br>");
    }
    #ส่วนที่เออเร่อ ทำการเพิ่มifเพื่อให้รันค่าที่เออเร่อออกมา ว่า ไม่มีค่า
    if ($i<=count($cars)){ 
        echo "ไม่มีค่า.";
    }    
?>