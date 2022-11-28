<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

session_start();

    $name="Mohit";
    echo ("hello world ").$name;
    //echo ("<h1>hello world header</h1>");

    //echo "Your name is ".$_GET["name"];

    //multiple selection checkbox using array
    //$fruits=$_POST["fruits"];
    //echo "Your 1st selection was ".$fruits[0];

    //Associative array
    $grade=array("mohit"=>"A+","moh"=>"B+");
    //echo "Your grade is: ".$grade[$_POST["name"]];

    //if else statement
    $note=false;
    if($note)
    {
        echo "Welcome";
    }
    else echo "Not welcome";

    //For loop echoing 5times
    for($i=1;$i<=5;$i++)
    {
        echo "Hello world<br>";
    }

    $msg="hello world";
    print_r($msg);      //shows details about variable in a good way
    echo "<br>";
    var_dump($msg);     //show variable type
    

    print_r($_SERVER);        //prints details about server

    //Session cookies
    if(isset($_POST["submit"]))
    {
        echo htmlspecialchars($_POST["name"]);      //htmlspecialchars helps to senitize the input so that scripts are not run e.g 
                                                    //<script>alert("Mohit");</script>
        setcookie("name",$_POST["name"],time()+86400);        //setting cookies which is stored in client side or browser
        if($_POST["name"]=="mohit")
        {
            $_SESSION["name"]=$_POST["name"];
            header("Location: hello.php");
        }
    }
    
    ?>
    
    <form action="index.php" method="post">

        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit"> -->

        <!--multiple selection checkbox using array-->
        Apple :<input type="checkbox" name="fruits[]" value="apple">
        Orange :<input type="checkbox" name="fruits[]" value="orange">
        Peas :<input type="checkbox" name="fruits[]" value="peas">
        <input type="submit">

        
    </form>

    
   
</body>
</html>