<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form >
        <input name="num1" placeholder="Number 1">
        <input name="num2" placeholder="Number 2">
        <select name="operator">
            <option >Operators</option>
            <option >Add</option>
            <option >Subtract</option>
            <option >Multiply</option>
            <option >Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>Calculate: </p>
    <?php
        if(isset($_GET['submit'])) {
            $input1 = $_GET['num1'];
            $input2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "Operators":
                    echo "!!! Please select a method !!!";
                    break;
                case "Add":
                    echo $input1 + $input2;
                    break;
                case "Subtract":
                    echo $input1 - $input2;
                    break;
                case "Multiply":
                    echo $input1 * $input2;
                    break;
                case "Divide":
                    echo $input1 / $input2;
                    break;    
            }
        }
    ?>

    </body>
</html> 