<?php
include "../db.php";

$id = $_GET['id'];

$get = mysqli_query($conn, "SELECT * FROM clients WHERE client_id = $id");
$client = mysqli_fetch_assoc($get);

$message = "";

if (isset($_POST['update'])) {
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  if ($full_name == "" || $email == "") {
    $message = "Name and Email are required!";
  } else {
    $sql = "UPDATE clients
            SET full_name='$full_name', email='$email', phone='$phone', address='$address'
            WHERE client_id=$id";
    mysqli_query($conn, $sql);
    header("Location: clients_list.php");
    exit;
  }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Client</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial,Helvetica,sans-serif;}
body{background:#f4f6f9;padding:20px;color:#333;}
div[style]{background:#1e293b;padding:12px 20px;border-radius:10px;}
div[style] a{color:#fff;text-decoration:none;padding:8px 14px;border-radius:6px;}
h2{margin:20px 0;font-size:28px;color:#1e293b;}

form{
  background:white;
  padding:25px;
  border-radius:12px;
  max-width:500px;
  box-shadow:0 4px 10px rgba(0,0,0,0.05);
}

label{font-weight:bold;}
input{
  width:100%;
  padding:10px;
  margin-top:5px;
  border-radius:6px;
  border:1px solid #ccc;
}

button{
  background:#10b981;
  color:white;
  border:none;
  padding:12px;
  border-radius:8px;
  margin-top:15px;
  cursor:pointer;
  width:100%;
}

button:hover{background:#059669;}

.error{
  color:red;
  margin-bottom:15px;
}
</style>
</head>

<body>
<?php include "../nav.php"; ?>

<h2>Edit Client</h2>

<p class="error"><?php echo $message; ?></p>

<form method="post">
  <label>Full Name*</label>
  <input type="text" name="full_name" value="<?php echo $client['full_name']; ?>">

  <label>Email*</label>
  <input type="text" name="email" value="<?php echo $client['email']; ?>">

  <label>Phone</label>
  <input type="text" name="phone" value="<?php echo $client['phone']; ?>">

  <label>Address</label>
  <input type="text" name="address" value="<?php echo $client['address']; ?>">

  <button type="submit" name="update">Update Client</button>
</form>

</body>
</html>