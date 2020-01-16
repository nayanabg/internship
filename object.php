<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

//create class

class car{
    function car(){
    $this->model = "Maruti Zen";  //model is var name
}
}
//create object
    $herbie=new car();


//show object
echo $herbie->model;

?>



</body>
</html>