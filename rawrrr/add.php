<html>
<head>
    <title>Add Penjual</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
        <tr> 
                <td>id_penjual</td>
                <td><input type="varchar" name="id_penjual"></td>
            </tr>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>No.handphone</td>
                <td><input type="varchar" name="no_hp_penjual"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        
        $idpenjual= $_POST['id_penjual'];
        $name = $_POST['name'];
        $nohppenjual = $_POST['no_hp_penjual'];
        $alamat = $_POST['alamat'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO penjual(id_penjual,name,no_hp_penjual,alamat) VALUES('$idpenjual','$name','$nohppenjual','$alamat')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Penjual</a>";
    }
    ?>
</body>
</html>