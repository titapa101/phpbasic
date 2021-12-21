<?php #แสดงเกรด 
$a = "25";  #กำหนดค่าตัวแปล4ตัวตามโจทย์
$b = "20";
$c = "20";
$d = "20";
$total = $a + $b + $c + $d; #นำค่าตัวแปลที่กนดมาบวกกัน
echo "คะแนนของคุณทั้งหมด : $total คะแนน<br>";
switch($total){
    case ($a > "25"): #ถ้าคะแนนที่ตัวแปลกำหนดมาเกิน25ให้ขึ้นว่า มีคะแนนเกินนะจ๊ะ
        echo "มีคะแนนเกินนะจ๊ะ<br>";
        break;
    case ($b > "25"):
        echo "มีคะแนนเกินนะจ๊ะ<br>";
        break;
    case ($c > "25"):
        echo "มีคะแนนเกินนะจ๊ะ<br>";
        break;
    case ($d > "25"):
        echo "มีคะแนนเกินนะจ๊ะ<br>";
        break;
    case (($total>=80)&&($total<=100)): #ถ้าคะแนนรวมได้ มากกว่าหรือเท่ากับ80 น้อยกว่าหรือเท่ากับ100 ให้ขึ้นว่า เกรดที่คุณได้รับคือ
        echo "คุณได้เกรด : A<br>";
        break;
    case (($total>=75)&&($total<=79));
        echo "คุณได้เกรด : B+<br>";
        break;
    case (($total>=70)&&($total<=74));
        echo "คุณได้เกรด : B <br>";
        break;
    case (($total>=65)&&($total<=69));
        echo "คุณได้เกรด : C+<br>";
        break;
    case (($total>=60)&&($total<=64));
        echo "คุณได้เกรด : C<br>";
        break;
    case (($total>=55)&&($total<=59));
        echo "คุณได้เกรด : D+<br>";
        break;
    case (($total>=50)&&($total<=54));
        echo "คุณได้เกรด : D<br>";
        break;
    case ($total<=49);
        echo "คุณได้เกรด : F<br>";
        break;
    }
?>