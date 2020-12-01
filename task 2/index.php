<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>task2 - calculator</title>
</head>
<body>
    <div id="calc">
        <form method="GET" action="" id="calcForm">
            <h3>Калькулятор</h3>
            <input type="number" name="firstOperand" class="form-control" placeholder="Первое число..." required>
            <select class="form-control mt-2" name="operation" required>
                <option selected value="1">+</option>
                <option value="2">-</option>
                <option value="3">*</option>
                <option value="4">/</option>
            </select>
            <input type="number" name="secondOperand" class="form-control mt-2" placeholder="Второе число..." required>
            
            
            <div id="calcFormResultLine">
            <input type="submit" name="calcSubmit" class="btn btn-success mt-2" value="Вычислить">
            <? 
                if(isset($_GET['calcSubmit'])){

                    $a = $_GET['firstOperand'];
                    $b = $_GET['secondOperand'];
                    $result = 'Ошибка расчета';

                    switch ($_GET['operation']){
                        case 1:
                           $result = $a + $b;
                           break;
                        case 2:
                            $result = $a - $b;
                            break;
                        case 3:
                            $result = $a * $b;
                            break;
                        case 4:
                            if($b != 0){
                                $result = $a / $b;
                            }else{
                                $result = '<i class="text-danger">Ошибка: деление на 0</i>';
                            }
                            break;
                    }
                    echo '<span class="mt-2">Результат: <b>'.$result.'</b></span>';
                }
            ?>
            </div>
        </form>
    </div>
</body>
</html>