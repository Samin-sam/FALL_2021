<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Emplyee</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="myjs.js"></script>
</head>
<body>
<table>
    <tr>
        <td>
    <form action="" method="post">

        <h2><b>Update Employee</b></h2>
            <hr>
        <table>
            <tr>
               <td> Search By ID</td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="searchID">
                </td>
                <td>
                    <input type="submit" value="Search" id="searchBtn">
                </td>
            </tr>
        </table>
    </form>

    <form action="" method="post">
        <table style="text-align:left;">
            <tr>
            <td>
                <input type="hidden" id="hidden" name="" value="">
            </td></tr>
            <tr>
                <th>Name:</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <th>Department:</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="department" id="department">
                </td>
            </tr>
            <tr>
                <th>Joining Date:</th>
            </tr>
            <tr>
                <td>
                    <input type="date" name="date" id="date">
                </td>
            </tr>
            <tr>
                <th>Salary :</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Salary" id="Salary">
                </td>
            </tr>

            <tr>
               <td>
                    <input type="submit" value="Update" id="update">
                </td>
            </tr>
        </table>
    </form>
</td>
</tr>
</table>
</body>
</html>