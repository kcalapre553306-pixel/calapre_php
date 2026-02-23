<?php
include "../db.php";
$result = mysqli_query($conn, "SELECT * FROM clients ORDER BY client_id DESC");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Clients</title>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  background: #f4f6f9;
  padding: 20px;
  color: #333;
}

div[style] {
  background: #1e293b;
  padding: 12px 20px;
  border-radius: 10px;
}

div[style] a {
  text-decoration: none;
  color: #ffffff;
  padding: 8px 14px;
  border-radius: 6px;
  transition: 0.3s;
  font-size: 14px;
}

div[style] a:hover {
  background: #334155;
}

h2 {
  margin: 20px 0;
  font-size: 28px;
  color: #1e293b;
}

.add-btn {
  display: inline-block;
  background: #2563eb;
  color: white;
  padding: 12px 18px;
  border-radius: 8px;
  text-decoration: none;
  margin-bottom: 20px;
  transition: 0.3s;
}

.add-btn:hover {
  background: #1d4ed8;
}

table {
  width: 100%;
  background: white;
  border-collapse: collapse;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

th {
  background: #1e293b;
  color: white;
  padding: 12px;
}

td {
  padding: 12px;
  border-bottom: 1px solid #eee;
}

tr:hover {
  background: #f1f5f9;
}

.edit-btn {
  text-decoration: none;
  background: #10b981;
  color: white;
  padding: 6px 10px;
  border-radius: 6px;
  font-size: 13px;
}
</style>
</head>

<body>
<?php include "../nav.php"; ?>

<h2>Clients</h2>

<a class="add-btn" href="clients_add.php">+ Add Client</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Action</th>
  </tr>

  <?php while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?php echo $row['client_id']; ?></td>
    <td><?php echo $row['full_name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td>
      <a class="edit-btn" href="clients_edit.php?id=<?php echo $row['client_id']; ?>">Edit</a>
    </td>
  </tr>
  <?php } ?>
</table>

</body>
</html>