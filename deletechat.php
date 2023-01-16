<style>
    .chatmsg
    {
        background-color: blue;
        border: 1px solid blue;
        border-radius: 10px;
        height:50px;
        width:80px;
        padding: 8px;
        color: white;
        
    }
     .adchatmsg
    {
        background-color: green;
        border: 1px solid green;
        border-radius: 10px;
        height:50px;
        width:80px;
        padding: 8px;
        color: white;
        
    }
</style>

<!--to send message-->
<?php
    include "admin/mydb.php";
    $sql = "delete  from  chattable ";
    $result = mysqli_query($conn,$sql);
    echo "all chats deleted";
?>