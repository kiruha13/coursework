
<style>
    .chatmsg {
        background-color: blue;
        border: 1px solid blue;
        border-radius: 10px;
        height: 50px;
        width: 80px;
        padding: 8px;
        color: white;

    }

    .adchatmsg {
        background-color: green;
        border: 1px solid green;
        border-radius: 10px;
        height: 50px;
        width: 80px;
        padding: 8px;
        color: white;

    }
</style>


<!--to send message-->
<?php
if (isset($_POST['username'])) {

    $message = $_POST["msg"];
    $username = $_POST["username"];

    if ($message == "") {
        echo "all inputs required";
    } else {
        include "mydb.php";
        $time = date("m/d/y G.i:s<br>", time());
        $sql = "insert into chattable values('$username','$message','$time')";
        $result = mysqli_query($conn, $sql);
//		echo "message sent!";
        header('Location: chat1.php');
        }
}
?>