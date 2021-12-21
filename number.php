<?PHP
# error_reporting(0); // การปิด error จะไม่เห็น error ทั้งหมด ถ้าชัวให้ปิดได้
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$number3 = $_POST["number3"];
$number4 = $_POST["number4"];
$number5 = $_POST["number5"];
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
        <form action="number.php" method="POST">
            number1 : <input type="number" name="number1"><br>
            number2 : <input type="number" name="number2"><br>
            number3 : <input type="number" name="number3"><br>
            number4 : <input type="number" name="number4"><br>
            number5 : <input type="number" name="number5"><br>
            <input type="submit" value="send">
            <input type="reset" value="reset" 
        </form>
    </body>
</html>
<?php
    if(isset($number1)){
        $sum = $number1+$number2+$number3+$number4+$number5;
        echo $sum;
    } else {
        echo "ไม่มีข้อมูล";
    }
    
    #เช็คค่าว่ามีค่าไหม
#if(isset($number)){
#    echo "$number1 <br>";
#    echo "$number2 <br>";
#    echo "$number3 <br>";
#    echo "$number4 <br>";
#    echo "$number5 <br>";
#}else{
#    echo"ไม่มีข้อมูล";
#}
?>