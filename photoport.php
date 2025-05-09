<?php
$page="photoport";
require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Photographer Portfolio</title>
    <link rel="icon" type="image/x-icon" href="logo.ico">
    <link rel="stylesheet" href="style.css">

</head>
<body class="body">
<?php include ('nav.php'); ?>
        <table

<?php $photographers= $con->query("SELECT * FROM photographers");
 while ($row = $photographers->fetch_assoc()) { ?>
     <table class="container">
          <td>  <img class="image" src="<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" width="100"></td>
          <tr><th> Name</th>
       <td> <?php echo $row['name']; ?><br></td></tr>
       <tr><th>Phone number</th>
       <td> <?php echo $row['phone']; ?></td></tr>
       <tr><th>Email</th>
       <td> <?php echo $row['email']; ?></td></tr>

</table>
        </div>
  
    <?php
        }
    ?>

    </body>
    </html>

