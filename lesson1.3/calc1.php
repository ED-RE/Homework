<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<h1>Твой калькулятор</h1>
<body>

<form action="/lesson1.3/send2.php" method="get">

    1 число: <input type="number" name="number1">
    <br>
    знак операции:
<!--    <select name="sign" id="sign">-->
<!--        <option value="-">-</option>-->
<!--        <option value="*">*</option>-->
<!--        <option value="/">/</option>-->
<!--        <option value="+">+</option>-->
<!--    </select>-->
    <input type="text" name="sign">
    <br>
    2 число: <input type="number" name="number2">
    <br>
    <input type="reset">
    <br>
    <button type="submit">Вычислить</button>
</form>

</body>
</html>
required placeholder="Введите число"