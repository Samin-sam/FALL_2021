
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
</head>
<body>
    <?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{

     $firstname = $_REQUEST['firstname'];
            $lastname = $_REQUEST['lastname'];
            $email = $_REQUEST['email'];
            $MobileNumber = $_REQUEST['MobileNumber'];
            $Hsc = $_REQUEST['Hsc'];
            $Ssc = $_REQUEST['Ssc'];
            $gender = $_REQUEST['gender'];
            $DateofBirth = $_REQUEST['DateofBirth'];

            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->RegUser($conobj,"AIUB",$firstname,$lastname,$email,$MobileNumber,$Hsc,$Ssc,$gender,$DateOfBirth);
            
            $connection->CloseCon($conobj);
    echo "submitted successfully";
}

 ?>


        <form action="Registration.php" method="post">
        <fieldset style="width: 600px;">
            <h1><b>Please fill up the form</b></h1>
            <hr>
<table>
            <tr>
                <td><label for="">First Name </label></td>
                <td>:<input type="text" name="name" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>

            <tr>
                <td><label for="">Last Name </label></td>
                <td>:<input type="text" name="username" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>

            <tr>
                <td><label for="">Email </label></td>
                <td>:<input type="email" name="email" id="" required></td>
            </tr>


            <tr>
                <td colspan="2"></td>
            </tr>


            <tr>
                <td colspan="2">
 

                       Gender: 
                        <input type="radio" name="gender" id="" checked>
                        <label for="">Male</label>
                        <input type="radio" name="gender" id="">
                        <label for="">Female</label>

                </td>
            </tr>

            <tr>
                <td colspan="2"></td>
            </tr>

             
            <tr>
                <td><label for="">Mobile No : </label></td>
                <td>:<input type="text" name="number" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>


            <tr>
                <td>
            <label for="birthday">Date Of Birth:</label>
            <input type="date" id="birthday" name="birthday">
            </td> 
            </tr>

            <tr>
                <td colspan="2"></td>
            </tr>

            <tr>
                <td><label for="">HSC results : </label></td>
                <td>:<input type="text" name="text" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>


             <tr>
                <td><label for="">SSC results : </label></td>
                <td>:<input type="text" name="text" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>


            <tr>
                <td colspan="2">
                
                   
                      <label> Select a course you want to enroll :</label>
                      <select>
                      <option value = "CSE"> CSE
                      </option>
                      <option value = "EEE"> EEE 
                      </option>
                      <option value = "ARCH"> ARCH
                      </option>
                      <option value = "BBA"> BBA
                      </option>
                      </select>
              

                </td>
            </tr>

            <tr>
                <td colspan="2"></td>
            </tr>

        <tr>
             <td colspan="2">
           <label> Chose a enrolling Year :</label>
                      <select>
                      <option value = "2018"> 2018
                      </option>
                      <option value = "2019"> 2019
                      </option>
                      <option value = "2020"> 2020
                      </option>
                      <option value = "2021"> 2021
                      </option>
                      </select>
                  </td>
        </tr>


        <tr>
                <td colspan="2"></td>
            </tr>

        <tr>
             <td colspan="2">
           <label> Chose a enrolling Session :</label>
                      <select>
                      <option value = "Summer"> Summer
                      </option>
                      <option value = "Fall"> Fall
                      </option>
                      <option value = "Spring"> Spring
                      </option>
                      </select>
                  </td>
        </tr>

            <tr>
                <td colspan="2"></td>
            </tr>


            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Insert Data">
                </td>
            </tr>
    </table>    
        </fieldset>
    
    </form>
    
</body>
</html>