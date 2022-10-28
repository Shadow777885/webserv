<!DOCTYPE html>
<html>
<body>
    <link rel= "stylesheet" href="style.css">
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

    $result = mysqli_query($conn, $sql);
    //$sql = "INSERT INTO Userinfo (username, userid) VALUES ('{$newuser}', {$newid});";
    //echo $result ? "Sent properly." : "Failure: {mysqli_error($conn)}"; 
    $sql = "SELECT id FROM Userinfo WHERE id={$pullID};";
    $result = mysqli_query($conn, $sql);
    foreach($result as $row) // There should only be one row returned! 
    { 
        echo "ID: {$row['id']} | {$row['username']} | UserID: {$row['userid']}"; 
    }
    echo "Just A test"; 
    mysqli_close($conn);
    ?>
    <p>
</body>
</html>