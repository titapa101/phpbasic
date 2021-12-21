<?php
    $numbers = array("4,6,2,22,11"); #เพิ่มฟันหนุในข้อมูล array 
        sort($numbers); #ทำการ sort ตัวเลขใน array
    for($i=0;$i<count($numbers);$i++){
        echo ("$numbers[$i] ."); #ค่าสุดท้าย ให้ใส่ . แทน #การบ้าน
        }
?>