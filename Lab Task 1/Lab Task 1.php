<?php 
    if(isset($_POST['submit']))
	{
        $name= $_POST['name'];
        $LastName= $_POST['Lastname'];
        $Age= $_POST['Age'];
        $Designation= $_POST['designation'];
        $Prelang= $_POST['prelang'];
        $email= $_POST['email'];
        $pass= $_POST['pass'];

        if(ctype_alnum($name)||strpos($name, " ")!== false){
            if (strpos($email, "@")!== false && strpos($email, ".")!== false) 
            {
                if (ctype_alnum($Lastname)|| strpos($Lastname, "-")!== false||strpos($Lastname, "_")!== false||strpos($Lastname, " ")!== false && strlen($Lastname)>=2)
                {
                    if(strlen($pass)>=8 && strpos($pass, "@")!== false||strpos($pass, "#")!== false||strpos($pass, "$")!== false||strpos($pass, "%")!== false)
                    {
                        if($pass==$pass)
                        {
                            echo "Registration Successful!";
                        }
                    }

                }
                else
                {
                    echo "Invalid Lastname";
                }
            }
            else 
            {
                echo("$email is not a valid email ");
            }
        }
        else
        {
            echo "Invalid name";
        }


    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
</head>
<body>
        <form method="post">
        <fieldset style="width: 600px;">
            <h1><b>Registration Form</b></h1>
            <hr>
<table>
            <tr>
                <td><label for="">First Name </label></td>
                <td>:<input type="text" name="name" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>

            <tr>
                <td><label for="">Last Name </label></td>
                <td>:<input type="text" name="username" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>

            <tr>
                <td><label for="">Age </label></td>
                <td>:<input type="number" name="age" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>

            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Designation</legend>
                        <input type="radio" name="Designation" id="" checked>
                        <label for="">Junior Programmer</label>
                        <input type="radio" name="Designation" id="">
                        <label for="">Senior Programmer</label>
                        <input type="radio" name="Designation" id="">
                        <label for="">Project Lead</label>
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td colspan="2"><hr></td>
            </tr>

        <tr>
           <td>Preferred Language:</td>
           <td>
           <input type="checkbox" name="one">
           <label for="one"> JAVA</label>
           <input type="checkbox" name="two">
           <label for="two"> PHP</label>
           <input type="checkbox"name="three">
           <label for="three">C++</label>
           </td>
        </tr>

             <tr>
                <td colspan="2"><hr></td>
            </tr>

            <tr>
                <td><label for="">Email </label></td>
                <td>:<input type="email" name="email" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>

            <tr>
                <td><label for="">Password </label></td>
                <td>:<input type="text" name="pass" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>

            <tr>
            <td>Please chose a file:</td>
            <td><input type="file" name="upload"/> </td>
            </tr>

            <tr>
                <td colspan="2"><hr></td>
            </tr>


            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
    </table>    
        </fieldset>
    
    </form>
    
</body>
</html>