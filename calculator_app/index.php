<?php include 'calc.class.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
<div class="form">
    <div class="form-group">
        <h3>Calculator:Input Values</h3>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="inputnum1">Number One</label>
                    <input class="form-control" id="inputnum1" type="text" name="num1">
                </div>
                <div class="form-group">
                    <select class="form-control" name="calculate" id="inputcalc">
                        <option value="add" name="add">Add</option>
                        <option value="sub" name="sub">Substract</option>
                        <option value="mul" name="mul">Multiply</option>
                        <option value="div" name="div">Divide</option>    
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputnum2">Number Two</label>
                    <input class="form-control" id="inputnum2" type="text" name="num2">
                </div>

                <div class="form-group">
                    <button class="btn btn-default" type="submit" name="submit">Calculate</button>
                </div>
                <div class="form-group">
                    <label for="result">Result</label>
                    <input class="form-control" id="result" type="text" name="res" value="<?php       
                            
                            if(isset($_POST['submit'])){
                                $number1 = $_POST['num1'];
                                $number2 = $_POST['num2'];
                                $calculate = $_POST['calculate'];
                                $calculator = new Calculator;
                                $calculator->initCalc($number1,$number2,$calculate);
                                echo $calculator->calcMethod();
                            };
                ?>">
                </div>
            </form>
        </div>
    </div>
</body>
</html>