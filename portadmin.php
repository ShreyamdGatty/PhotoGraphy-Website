<?php
require('config.php');

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location:index.php');
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $id=$_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];  
        $email=$_POST['email'] ;

        $target_dir = "";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $image = "";

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image= $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
       
        $sql = "INSERT INTO photographers (id, name, phone, email, image) VALUES ( ' $id',' $name',' $phone','$email',' $image ' )" ;    
         $con->query($sql);
    } elseif (isset($_POST[  'delete'  ])) {
        $id = $_POST[  'id'  ];  
        $sql = "DELETE FROM photographers WHERE id=  '$id'  "  ;
        $con->query($sql)  ;
    }
}

$photographers = $con->query("SELECT * FROM photographers");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="adminstyle.css">
    <title>Admin - Manage</title>
</head>
<body>
    <h1>Manage photographers</h1>
   
    <h2>Add New Photographer</h2>
    <form method="POST" enctype="multipart/form-data">
        id:<input type="number" name="id" required><br>
        Name: <input type="text" name="name" required><br>
        Phone: <input type="text" name="phone" required><br>
        email: <input type="email" name="email" required><br>
        Image URL: <input type="file" name="image" required><br>
        <input type="submit" name="add" value="Add">
    </form>

    <h2>Delete a photographer</h2>
    <form method="POST">
         ID: <input type="text" name="id" required><br>
        <input type="submit" name="delete" value="Delete ">
    </form>
    <h2>Current photographer</h2>
    <table border="1">
       
        <tr>

        <?php while ($row = $photographers->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['email']; ?></td>

            <td><img src="<?php echo htmlspecialchars($row['image']); ?>"></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

</body>
</html>

<?php $con->close()   ?>
</html>

        