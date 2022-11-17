<!DOCTYPE html>
<html>
    <head> 
        <title> LED toggle </title>
    </head>

    <body>
        <p>
        <?php
            shell_exec("gpio toggle 0");
        ?>
        </p>
    </body>

</html>