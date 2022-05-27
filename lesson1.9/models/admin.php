<?php
require __DIR__ . '/../whereis/autoload.php';
spl_autoload_register('autoloader');

try {
    $tableMyself = new models\classes\DB('/../../whereis/config.txt');
    $tableGuest = new models\classes\DB('/../../whereis/config.txt');
} catch (Exception $e) {
    echo $e->getMessage();
}

$adminPage = new views\classes\View();
$adminPage->display('adminTemplate.php');


if (isset($_POST['title']) && isset($_POST['content'])
    && !empty($_POST['title']) && !empty($_POST['content'])) {
    $arrNewArticle = [$_POST['title'], $_POST['content']];
    $sqlSetArticle = "UPDATE aboutmyself SET title ='$arrNewArticle[0]',text='$arrNewArticle[1]'  WHERE id=1";
    $tableMyself->execute($sqlSetArticle);
    header('Location: ' . 'http://lessons/lesson1.9/controllers/aboutMe.php');
}

if (isset($_FILES['nameFile'])) {
    if (0 == $_FILES['nameFile']['error']) {
        move_uploaded_file($_FILES['nameFile']['tmp_name'],
            __DIR__ . '/../views/uploads/pictures/' . $_FILES['nameFile']['name']);
        header('Location: http://lessons/lesson1.9/controllers/gallery.php');
    }
}

if (isset($_POST['titleguest']) && isset($_POST['contentguest'])
    && !empty($_POST['titleguest']) && !empty($_POST['contentguest'])) {
    $arrNewRecord = [$_POST['titleguest'], $_POST['contentguest']];
    $sqlSetRec = "INSERT INTO guestbook (title, text)
VALUES ('$arrNewRecord[0]','$arrNewRecord[1]')";
    $tableGuest->execute($sqlSetRec);
    header('Location: ' . 'http://lessons/lesson1.9/controllers/guestbook.php');
}

$sqlGetID = 'SELECT id FROM guestbook ORDER BY id';
$resultID = $tableGuest->query($sqlGetID);

if (isset($_POST['number']) && !empty($_POST['number'])) {
    for ($i = count($resultID) - 1; $i >= 0; $i--) {
        if ($resultID[$i][0] === $_POST['number']) {
            $sqlDelete = 'DELETE FROM guestbook WHERE id=' . $_POST['number'];
            $tableGuest->execute($sqlDelete);
            header('Location: ' . 'http://lessons/lesson1.9/controllers/guestbook.php');
        }
    }
}