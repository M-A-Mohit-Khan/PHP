<?php
session_start();
if(isset($_POST["submit"]))
{
    if($_POST["name"]=="mohit")
    {
        $_SESSION["name"]=$_POST["name"];
        header("Location: hello.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <p>Enter your name</p>
    <form action="<?php echo $_SERVER["PHP_SELF"];?> "method="POST">
        <input type="text" name="name">
        <input type="submit" name="submit">

    </form>
    
   
</body>
</html>