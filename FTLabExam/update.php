<!DOCTYPE html>
<html>
<head>
<script>

  var y = $_POST['Name'].value;
  if (y == "") {
    alert("Name must be filled out");
    return false;
  }
  else{
    <?php
    include("db.php");
    $sql= "Update employee set Name= '".$_POST['Name']."', Department='".$_POST['Department']."',JoiningDate='".$_POST['JoiningDate']."',Salary='".$_POST['Salary']."' where ID='".$_POST['ID']."' ";
    
    $res = $conn->query($sql);
    echo $res;
?>
  }
  
</script>
</head>
</html>