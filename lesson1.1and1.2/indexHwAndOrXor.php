<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>

<h1>Таблица истинности для &&</h1>
<table>
    <tr>
        <td>a</td>
        <td>b</td>
        <td>a && b</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td><?= (int)(0 && 0) ?></td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td><?= (int)(0 && 1) ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td><?= (int)(1 && 0) ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td><?= (int)(1 && 1) ?></td>
    </tr>
</table>

<h1>Таблица истинности для ||</h1>
<table>
    <tr>
        <td>a</td>
        <td>b</td>
        <td>a || b</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td><?= (int)(0 || 0) ?></td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td><?= (int)(0 || 1) ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td><?= (int)(1 || 0) ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td><?= (int)(1 || 1) ?></td>
    </tr>
</table>

<h1>Таблица истинности для XOR</h1>
<table>
    <tr>
        <td>a</td>
        <td>b</td>
        <td>a XOR b</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td><?= (int)(0 XOR 0) ?></td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td><?= (int)(0 XOR 1) ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td><?= (int)(1 XOR 0) ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td><?= (int)(1 XOR 1) ?></td>
    </tr>

</body>
</html>