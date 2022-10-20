<!DOCTYPE html>
<html>
<body>
    <p>
    <?php
    $server = "localhost";
    $username = "php";
    $password = "1.1.";
    $database = "Users";
    $conn = mysqli_connect($server, $username, $password, $database);
    $newuser = htmlspecialchars($_POST['fname']);
    $newid = htmlspecialchars($_POST['ID']);

    $sql = "INSERT INTO Userinfo (username, userid) VALUES ($newuser, $newid);";
    $result = mysqli_query($conn, $sql);
    //echo $result ? "Sent properly." : "Failure: {mysqli_error($conn)}"; 
    mysqli_close($conn);
    ?>
    <p>
</body>
</html>