<?php #ที่เออเร่อเพราะแค่ส่งฟอร์มให้อ่านได้ ไม่มีค่าอะไรจึงทำให้เออเร่อ
$username = $_POST['username'];
$password = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <!-- Requireed meta tags-->
        <meta charset="utf-8">
        <mat name="viewport" content="width=device-width, initial-scale=1">
        <title>ส่งข้อมูล post </title>
    </header>
    <body>
        <h1> ส่งข้อมูลผ่าน Form (post) </h1> 
        <form action="postform.php" method="POST"> #ส่งค่าไปpetfrom.php เพราะ ถ้าส่งเป็น html จะอ่านค่าแค่htmlอย่างเดียว
            Username : <input type="text"
            name="username"><br>
            Password : <input type="password"
            name="password"><br>
            <input type="submit" value="login"><br>
        </form>
    </body>
</html>
<?php #เช็คค่าว่ามีค่าไหม
if(isset($username)){
    echo "$username <br>";
    echo "$password <br>";
}else{
    echo"ไม่มีข้อมูล";
}
?>