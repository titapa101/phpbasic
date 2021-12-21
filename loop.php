<!DOCTYPE html>
<html lang="en">
    <header>
        <!-- Requireed meta tags-->
        <meta charset="utf-8">
        <mat name="viewport" content="width=device-width, initial-scale=1">
        <title>Loop</title>
    </header>
    <body>
        <?php
        #for loop
        echo("for loop <br>");
        for($x = 0 ; $x < 10 ;$x++ ){ #วนลูป เริ่มจากเลข 0 ให้ปริ้นค่าวน10ครั้งให้ $x++ = เพิ่มขึ้นทีละ 1 ถ้าอยากเพิ่มทีละ2 $x+2
            echo "The number is; $x <br>";
            #echo "The number is; ".$x." <br> "; #แบบแต่ก่อน ต้องใช้จุดเป็นตัวต่อ(sytax)
            }
        #while loop whileตามด้วยเงื่อนไข รันเสร็จแสดงข้อมุลก่อน ถึงเพิ่มค่าขึ้นลงตามคำสั่ง
        echo("while loop <br>");
        $w=1;
        while ($w<=10){
            echo "The number is; $w <br>";
            $w++;
        }
        #do while loop 
        echo("do while loop <br>");
        $d=1;
        do{
            echo "The number is; $d <br>";
            $d++;
        }while($d<=10);
        ?>
    </body>
</html>