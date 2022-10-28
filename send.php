<!DOCTYPE html>
<html>
<body>
    <link rel= "stylesheet" href="style_send.css">
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
    //echo $result ? "Sent properly." : "Failure: {mysqli_error($conn)}"; 
    $sql = "SELECT id, username, userid FROM Userinfo WHERE id={$pullID};";
    $result = mysqli_query($conn, $sql);
    if ($result -> num_rows === 1)
    {
        foreach($result as $row) // There should only be one row returned! 
        {
            echo "ID: {$row['id']}". "<br>". "Username: {$row['username']}". "<br>". "UserID: {$row['userid']}"; 
        }
    }
    else
    {
        echo "Sorry, this person doesn't exist yet";
    }

    mysqli_close($conn);
    ?>
    <p>
</body>
</html>