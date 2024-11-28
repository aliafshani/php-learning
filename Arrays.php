<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <?php
    $users1 = ["alireza", "mobina", "saeed", "fatemeh"];
    $users2 = ["nimoosh", "arta", "mani", "fatemeh"];
    // $users2 = array("alireza", "mobina", "saeed", "fatemeh");
    // var_dump($users[0])


    // $user = [
    //     'name' => 'iman',
    //     'age' => 40,
    //     'color' => 'white'
    // ];

    // var_dump(count($users));
    // var_dump(sizeof($users));


    // sort($users);
    // rsort($users);
    //var_dump(array_reverse($users));
    var_dump(array_diff($users1, $users2));

    ?>


</body>

</html>