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
    $pullID = htmlspecialchars($_POST['pullID']);


    $sql = "INSERT INTO Userinfo (username, userid) VALUES ('{$newuser}', {$newid});";
    $result = mysqli_query($conn, $sql);
    echo $result ? "Sent properly." : "Failure: {mysqli_error($conn)}"; 
    $sql = "SELECT * FROM Userinfo WHERE id='{$pullID}';";
    $result = mysqli_query($conn, $sql);
    foreach($result as $username){ 
        echo "id:{$username["id"]} | Username: {$username["username"]} {$username["userid"]}\n";
    }
     mysqli_close($conn);
    ?>
    <p>
</body>
</html>