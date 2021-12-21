<?php
    // array 1 มิติ
    $cars = array("Volvo","BMW","Toyota","Honda");
    echo "I like " . $cars[0] . "," . $cars[1] . " and " . $cars[2] . ","; # คาดหวังให้ปริ้นค่าต่างๆ เช่น 0 คือ volvo 
    echo ("<br>");
    echo "I like  $cars[0] , $cars[1] and  $cars[2] ."; #วิธีต้องการปริ้นไม่ให้มีจุด
    for($i=0;$i<count($cars);$i++){ #ใช้คำสั่งforในการปริ้นค่าแต่ละจุดโดยไม่ต้องเขียน cars1 cars2 
        #count($cars)คือฟังชั่น ทำการ countข้อมูลใน array 
        #ถ้าใช้คำสั่งนี้ คือการcountเอง จะเป็นค่าปัจจุบันเสมอ
        #ถ้าไม่ใช้คำสั่งนี้แล้วเปลี่ยนไปใส่ตัวเลขแทน ถ้าเพิ่มข้อมูลใน array ต้องส่วนนี้ที่เปลี่ยนเป็นตัวเลขก้ต้องเปลี่ยน  
        echo ($cars[$i] ."<br>");
    }    
    echo("<br>");
    // Associative Array 1 มิติ
    $aged = array("Peter"=>"35","Ben"=>"37","Joe"=>"43"); #คี(ตำแหน่ง )คือ "Peter" "Ben" "Joe"
    echo "Peter is ". $aged['Peter'] . " years old.";
    echo "Ben is ". $aged['Ben'] . " years old.";
    echo "Joe is ". $aged['Joe'] . " years old.";
    echo("<br>");
    //Multidimensional Arrays หลายมิติ
    $cars1 = array(
        array("Volvo",22,18), #มิติที่ 1 = Volvo มิติที่ 2 = 22 มิติที่ 3 = 18
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );
    #ถ้าจะปริ้น array ที่มีเป็นมิติแบบนี้ 2มิติ
    echo("<br>");
    echo $cars1[0][0].": In stock: ".$cars1[0][1].", sold:".$cars1[0][2].".<br>";#echo array ตำแหน่งที่ 0 0  ก้คือ "Volvo",22
    echo $cars1[1][0].": In stock: ".$cars1[1][1].", sold:".$cars1[1][2].".<br>";
    echo $cars1[2][0].": In stock: ".$cars1[2][1].", sold:".$cars1[2][2].".<br>";
    echo $cars1[3][0].": In stock: ".$cars1[3][1].", sold:".$cars1[3][2].".<br>";

    #ส่วนสุดท้ายของarray คือการใช้ฟังชั่น

    //Sort Array 
    Sort ($cars); #ทำการ sort ตามตัวอักษร
    for($i=0;$i<count($cars);$i++){
        echo ("$cars[$i] <br>");
        }
    $numbers = array(4,6,2,22,11); #ทำการ sort ตามตัวเลข
        sort($numbers);
    for($i=0;$i<count($numbers);$i++){
        echo ("$numbers[$i] ,"); #ค่าสุดท้าย จะทำการ , มาด้วย
        }
        #การบ้านข้อละคน
    //**sort() - sort arrays in ascending order
    #การบ้านข้อละคน 5ข้อยกตัวอย่าง
    //**rsort() - sort arrays in descending order
    //**asort() - sort associative arrays in ascending order,according to the value
    //**ksort() - sort associative arrays in ascending order,according to the key
    //**arsort() - sort associative arrays in descending order,according to the value
    //**krsort() - sort associative arrays in descending order,according to the ke
?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <!-- Requireed meta tags-->
        <meta charset="utf-8">
        <mat name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </header>
    <body>
    </body>
</html>