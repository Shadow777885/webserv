<!DOCTYPE html>
<html>
<body>
    <p>
    <?php
    $servername = "localhost";
    $username = "php";
    $password = "1.1.";
    $dbname = "Users";
    $conn = mysqli_connect($server, $username, $password, $database);
    $newuser = htmlspecialchars($_POST['fname']);
    $newid = htmlspecialchars($_POST['ID']);

    $sql = "INSERT INTO Userinfo (username, userid) VALUES ($newuser, $newid);";
    $result = mysqli_query($conn, $sql);
    echo $result ? "Sent properly." : "Failure: {mysqli_error($conn)}"; 
    mysqli_close($conn);
    ?>
    <p>
</body>
</html>