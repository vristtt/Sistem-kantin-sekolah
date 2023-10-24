<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id_penjual'];
    
    $name=$_POST['name'];
    $alamat=$_POST['alamat'];
    $nohppenjual=$_POST['no_hp_penjual'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE penjual SET ,name='$name',alamat='$alamat',no_hp_penjual='$nohppenjual' WHERE id_penjual=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM penjual WHERE id_penjual=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $alamat = $user_data['alamat'];
    $nohppenjual = $user_data['no_hp_penjual'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="no_hp_penjual" value=<?php echo $nohppenjual;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>