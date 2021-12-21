<?php
    #rsort การเรียงข้อมูลจากมากไปน้อย
    $numbers=array(4,6,2,22,11); 
    rsort($numbers);
    for($i=0;$i<count($numbers);$i++){ 
    echo ("$numbers[$i] ,"); #ทำการใส่ , มาด้วย
    echo "<br>"; 
        }
?>