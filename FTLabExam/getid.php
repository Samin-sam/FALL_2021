<?php
    include('db.php');
    $id=htmlspecialchars($_POST['id']);
    
    $sql = "SELECT * FROM employee where id=".$ID." ";
    $result = $conn->query($sql);

    if($result->num_rows>0)
    {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    }
?>