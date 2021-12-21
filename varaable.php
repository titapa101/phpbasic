<?php 
    $a = "Hello"; #ทำให้ไม่แสดงคำสั่งนี้ในหน้าเว็บถ้าเป็นตัวแปลเฉยๆต้องใส่$บรรทัดที่ 4 ถ้าเป็นตัวแปลที่ถูกdefineแล้วไม่ต้องใส่สามารถปริ้นได้เลยตัวอย่างในบรรทัด10-11
        echo ($a);
        echo ("<br>");
        define("PROVINCE","Bangkok");
        echo PROVINCE;
        echo ("<br>");
        define("SALARY","15000");
        echo SALARY;
        echo ("<br>");

    //date_default_timezone_set("Asia/Bangkok"); #timezoneของเอเชีย การบ้าน
    date_default_timezone_set("Europe/Berlin"); #timezoneของยุโรป การบ้าน
    $t = date("H"); 
        echo $t;
        echo ("<br>");
    if ($t < "20") {
        echo "Have a good day!";
    }else {
    echo "Have a night!";
    }

    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }

    $favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

?>
<!DOCTYPE html>
<html lang="en">
    <header>
        <!-- Requireed meta tags-->
        <meta charset="utf-8">
        <mata name="viewport" content="width=device-width, initial-scale=1"></mata>
        <title></title>
    </header>
    <body>
        <h1> <!--//font size-->
            <?php
            $a = "Hello";
            echo ($a);
            ?>
        </h1> <!--//font size-->
        <div style="font-size:larger; color:red;"> <!--//font size"larger"/font color"red"-->
            <?php
            echo "<b>คณะบริหารธุรกิจ สาขาเทคโนโลยีสารสนเทศทางธุรกิจ ประกอบด้วย 3 วิชาเอก</b>";
            ?>
        </div>
        <ul>
            <?php
                echo "<li>การจัดการ</li>";
                echo "<li>พัฒนาซอร์ฟแวร์</li>";
                echo "<li>มัลติมีเดีย</li>";
            ?>
        </ul>
    </body>
</html>