<style>
    .chatmsg {
        background-color: #075bff;
        border: 1px solid #075bff;
        border-radius: 10px;
        height: 100px;
        width: 100px;
        padding: 8px;
        color: white;


    }

    .adchatmsg {
        background-color: #5FCF80;
        border: 1px solid #5FCF80;
        border-radius: 10px;
        height: 100px;
        width: 100px;
        padding: 8px;
        color: white;

    }

    .time {

        color: white;
        font-size: 12px;

    }

    img {
        width: 40px;
        display: inline;
        height: 40px;
        border-radius: 50%;
        border: 2px solid white;

    }


</style>
<!--to send message-->
<?php

if ($_SERVER['REQUEST_METHOD'] == "GET")//con establish
{
    include "mydb.php";
    $sql = "Select * from chattable order by time desc";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {


            if ($row["username"] == 'admin') {
                echo "<span class='adchatmsg'><img src='../img/admin.jpg'> &nbsp;&nbsp;&nbsp;&nbsp;" . $row["message"] . "<span class='time'>" . substr($row["time"], 8) . "</span></span><br><br>";
            } else {
                echo "<span class='chatmsg'><img src='../img/deafaultuser.jpg'>&nbsp;&nbsp;&nbsp;&nbsp; " . $row["message"] . "<span class='time'>" . substr($row["time"], 8) . "</span></span><br><br>";
            }


        }
    }

}
?>