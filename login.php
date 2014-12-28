<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<?php

//$a = 0;
//$b = 100;
//$b = $b - 25;
//$a = $a + 25;
//$d = "Hello";
//$c = $d . ' Max!';
//echo $a;
//echo ' ';
//echo $b;
//echo ' ';
//echo $c;
//echo ' ';
//echo $d;
//echo ' ';

//var_dump($_POST);

$login = $_POST['firstname']; //'Andrey';
$Password = $_POST['lastname']; //'333';
$Mother = $_POST['mothers'];
$Father = $_POST['fathers'];

/* Data base */
$users = array('Andrey', 'Anna', 'Max', 'Mams', 'Paps');
$users2 = array('111', '222', '333', '444', '555');
$users3 = array('111', '222', '333', '444', '555');
$users4 = array('111', '222', '333', '444', '555');

$found = false;

//foreach ($users as $item) {

  //  if ($login == $item) {
    //    $found = true;
      //  break;
    //}
//}

for ($i=0; $i < count($users); $i++) {
    if ($login == $users[$i] && $Password == $users2[$i] && $Mother == $users3[$i] && $Father == $users4[$i]) {
        $found = true;
        break;
    }
}


if ($found == true) {
    echo "Добро пожаловать, " . $login;
    echo $_POST['text'];
} else {
    echo "Идина, " . $login;
}
