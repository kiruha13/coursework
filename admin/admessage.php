<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<center><h1>Non-Authenticated User Send Suggestion</h1></center>
<hr>

<style>

    .ntf {
        color: red;
        position: absolute;
        top: 0px;

    }

    .msg {
        color: blue;
    }

    .cont {
        width: 100%;
    }

    .cont-head {
        width: 100%;
        font-weight: bolder;

    }

    td {
        width: 15%;
        text-align: center;
    }

    .notification {
        background-color: #555;
        color: white;
        text-decoration: none;
        padding: 15px 26px;
        position: relative;
        display: inline-block;
        border-radius: 2px;
    }

    .notification:hover {
        background: red;
    }

    .badge {
        position: absolute;
        top: 5px;
        left: 20px;
        padding: 5px 10px;
        border-radius: 50%;
        background-color: red;
        color: white;
    }
</style>


<?php

$i = 0;
include "mydb.php";
$sql = "Select * from contacttable order by time desc";
$result = mysqli_query($conn, $sql);
echo "<table class='cont-head'>";
echo "<tr >";
echo "<td>Sr</td><td>Fullname</td><td>Email</td><td>Subject</td><td>Message</td><td>Time of message</td><td>Options</td>";
echo "</td>";
echo "</tr>";
echo "</table><hr>";
echo "<table class='cont table table-hover table-dark'>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        echo "<tr >";
        echo "<td >" . $i . "</td>" . "<td>" . $row["fullname"] . "</td><td>" . $row["email"] . "</td><td> " . $row["subject"] . "</td><td>" . $row["message"] . "</td><td>" . $row["time"] . "</td><td><button >Delete</button>";
        echo "</td>";
        echo "</tr>";

    }
    echo "</table>";


    echo "<span class='badge'>$i</span>";

} else {

    echo "0 results";
}

?>
