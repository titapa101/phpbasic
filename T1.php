<?php
$a = "ผลการเรียน"; //if else 
    echo ("<br>");
    echo ($a);
    echo ("<br>");
  $score = 54; #กำหนดคะแนนที่ได้

  if ($score >= 45 ) { #มากกว่าหรือเท่ากับ45ให้แสดงว่าผ่าน
    echo "ผ่าน";
    echo("<br>");
  } else { #นอกเหนือจากเงื่อนไขให้แสดงว่าไม่ผ่าน
    echo "ไม่ผ่าน";
    echo("<br>");
  }
$a = "______________"; //เส้นขั้น
    echo ($a); 
    echo ("<br>"); //ขึ้นบรรทัดใหม่
  $a = "GPA";  //ข้อความ gpa
    echo ("<br>");
    echo ($a);
    echo("<br>");
  $score = ("54"); //ใส่คะแนน
  if ($score >= 80) { //ถ้ามากกว่าหรือเท่ากับ 80
    echo "คุณได้เกรด A"; //ให้แสดงว่า คุณได้เกรด A
    echo ("<br>"); //ขึ้นบรรทัดใหม่
    } else if  ($score >= 70 ){ 
      echo "คุณได้เกรด B ";
      echo ("<br>");
    } else if ($score >= 60){
      echo "คุณได้เกรด C ";
      echo ("<br>");
    } else if ($score >= 50){
      echo "คุณได้เกรด D ";
      echo ("<br>");
    }else if ($score >= 45){
      echo "คุณได้เกรด D ";
      echo ("<br>");
    }else { //ถ้านอกเหนือจากนี้
      echo "คุณได้เกรด F "; //ให้แสดงว่า คุณได้เกรด F
      echo ("<br>");
    }
?>