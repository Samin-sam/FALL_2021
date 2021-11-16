<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
   <link rel="stylesheet" type="text/css" href="../css/regcss.css">
</head>
<body id="bod">

    <div id="header">
    <h1 align="center"> ABC Management System </h1>
    <h2 class="hd" align="center">We Create Future</h2>
    <h2 class="highlight" align="left">
      <div id="hed">
        <font size="4">
            <a href="HomePage.php" id="sam1">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="login.php" id="sam2">About US</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="ContactUs.php" id="sam3">Shop</a>
        </font>
    </div>
    </h2>
        </div> 
        <form method="post">
        <fieldset >
            <h2 class="hid"><b>Registration Form</b></h2>
            <hr>
<table class="fom">
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
                    <input id="sam4"  type="submit" name="submit" value="Submit">
                    <input id="sam5" type="reset" value="Reset">
                </td>
            </tr>
    </table>    
        </fieldset>
    
    </form>
    
</body>
</html>
                
