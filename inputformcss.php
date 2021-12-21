<?PHP
error_reporting(0); // การปิด error จะไม่เห็น error ทั้งหมด ถ้าชัวให้ปิดได้
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

            <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">

        <title>number</title>
    </header>
    <body>

    <form action="inputformcss.php" method="POST">
    <div class="input-group mb-3">
        <div class="input-group-prepenf">
        <span class="input-group-text" id="inputGroup-sizing-default">number1</span>
        </div>
        <input type="number" class="form-control" 
        aria-label="Sizing example input" 
        aria-describedby="inputGroup-sizing-default"
        name="number1">
        
        <div class="input-group-prepenf">
        <span class="input-group-text" id="inputGroup-sizing-default">number2</span>
        </div>
        <input type="number" class="form-control" 
        aria-label="Sizing example input" 
        aria-describedby="inputGroup-sizing-default"
        name="number2">

        <div class="input-group-prepenf">
        <span class="input-group-text" id="inputGroup-sizing-default">number3</span>
        </div>
        <input type="number" class="form-control" 
        aria-label="Sizing example input" 
        aria-describedby="inputGroup-sizing-default"
        name="number3">

        <div class="input-group-prepenf">
        <span class="input-group-text" id="inputGroup-sizing-default">number4</span>
        </div>
        <input type="number" class="form-control" 
        aria-label="Sizing example input" 
        aria-describedby="inputGroup-sizing-default"
        name="number4">

        <div class="input-group-prepenf">
        <span class="input-group-text" id="inputGroup-sizing-default">number5</span>
        </div>
        <input type="number" class="form-control" 
        aria-label="Sizing example input" 
        aria-describedby="inputGroup-sizing-default"
        name="number5">
    </div>
            <button type="submit" class="btn btn-primary">Send</button>
            <button type="reset" class="btn btn-danger">reset</button>
        </form>

        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
<?php
    if(isset($number1)){
        $sum = $number1+$number2+$number3+$number4+$number5;
        echo $sum;
    } else {
        echo "ไม่มีข้อมูล";
    }
?>