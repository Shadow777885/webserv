<!DOCTYPE html>
<html>
    <head> 
        <title> PHPtest </title>
    </head>

    <body>
        <p>
        <?php
            $uname = $_POST['fname'];
            $password = $_POST['password'];
            $error = "Wrong username or password";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                comparePass($uname, $password); 
            }
    
            function comparePass(){
            $pass = array("123456", "0.0.0.0.");
            $user = array("Sharon", "Oliver");
    
            if (in_array("Sharon", $user){
                if (in_array("123456", $pass){
                echo "Hello $user!";
                }
                else{
                    echo "<script type ='text/javascript'>alert('$error');</script>";	
                }
            }
            elseif (in_array("Oliver", $user){
                if (in_array("0.0.0.0.", $pass){
                echo "Hello $user!";
                }
                else{
                    echo "Wrong password for $user";
                }
                echo "<script type ='text/javascript'>alert('$error');</script>";		
            }
            }
        ?>
        </p>
    </body>

</html>