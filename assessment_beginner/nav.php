<?php ?>
<div style="display:flex; gap:10px; flex-wrap:wrap; margin-bottom:16px;">
  <a href="/assessment_beginner/index.php">Dashboard</a>
  <a href="/assessment_beginner/pages/clients_list.php">Clients</a>
  <a href="/assessment_beginner/pages/services_list.php">Services</a>
  <a href="/assessment_beginner/pages/bookings_list.php">Bookings</a>
  <a href="/assessment_beginner/pages/tools_list_assign.php">Tools</a>
  <a href="/assessment_beginner/pages/payments_list.php">Payments</a>
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

hr {
  border: none;
  height: 2px;
  background: #e2e8f0;
  margin: 20px 0;
}

h2 {
  margin-bottom: 20px;
  font-size: 28px;
  color: #1e293b;
}

ul {
  list-style: none;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 20px;
  margin-bottom: 30px;
}

ul li {
  background: white;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  font-size: 16px;
}

ul li b {
  display: block;
  margin-top: 8px;
  font-size: 24px;
  color: #2563eb;
}

p {
  background: white;
  padding: 15px 20px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  display: inline-block;
}

p a {
  text-decoration: none;
  color: #2563eb;
  font-weight: bold;
  transition: 0.3s;
}

p a:hover {
  color: #1d4ed8;
}

  </style>
</div>
<hr>