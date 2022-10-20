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


    //$sql = "INSERT INTO Userinfo (username, userid) VALUES ('{$newuser}', {$newid});";
    //$result = mysqli_query($conn, $sql);
    //echo $result ? "Sent properly." : "Failure: {mysqli_error($conn)}"; 
    $sql = "SELECT id FROM Userinfo WHERE id='{$pullID}';";
    $result = mysqli_query($conn, $sql);
    $row = mysql_fetch_row($result);
    echo $row[0]; // id
    echo $row[1]; // Username
    echo $row[2]; // Userid
    mysqli_close($conn);
    ?>
    <p>
</body>
</html>