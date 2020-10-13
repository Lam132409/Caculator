
<!DOCTYPE HTML>
<html>
<style type="text/css">

    .login {
        height:180px; width:230px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:5px; margin:5px
    }
</style>
<body>
<form method="post">
    <div class="login">
        <h2>Simple Caculator</h2>
        <input type="number" name="number1" size="30"  placeholder="" />
        <select name="operator">
            <option value="+">Cong</option>
            <option value="-">Tru</option>
            <option value="*">Nhan</option>
            <option value="/">Chia</option>
        </select>
        <input type="number" name="number2" size="30"  placeholder="" />
        <input type="submit" value="Caculator"/>

    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operator = $_POST["operator"];
        if($operator === "+"){
            echo $number1 + $number2;
        }
        else if($operator === "-"){
            echo $number1 -$number2;
        }
        else if($operator === "/"){
            if($number2 === "0") {
                echo "loi";
            }
            else{
                echo $number1/($number2);
            }
        }
        else if($operator === "*"){
            echo $number1*$number2;
        }
    }
    ?>
</form>
</body>
</html>
