<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List</title>
  <style>
    body {
      background: #ffffff; 
      color: #222;
      font-family: "Segoe UI", Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      padding: 40px 20px;
    }

    h1 {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 10px;
      text-align: center;
      color: #0066cc;
    }

    /* Add New User button style */
    .add-button {
      width: 100%;
      max-width: 900px;
      text-align: right;
      margin-bottom: 10px;
    }

    .add-button a {
      padding: 10px 18px;
      background-color: #0066cc;
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      border-radius: 6px;
      transition: 0.3s;
    }

    .add-button a:hover {
      background-color: #004a99;
    }

    /* Total users style */
    .total-users {
      font-size: 18px;
      font-weight: bold;
      color: #0066cc;
      margin: 15px 0;
      text-align: left;
      width: 100%;
      max-width: 900px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      max-width: 900px;
      margin-top: 20px;
      border: 2px solid #0066cc;
    }

    th, 
    td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
      font-size: 15px;
    }

    th {
      background: #0066cc;
      color: #fff;
      letter-spacing: 0.5px;
    }

    tr:nth-child(even) {
      background: #f9f9f9;
    }

    tr:hover {
      background: #e6f0ff; 
      transition: 0.3s;
    }

    a {
      color: #0066cc;
      text-decoration: none;
      font-weight: 600;
    }

    a:hover {
      text-decoration: underline;
      color: #004080;
    }

    .success-msg {
      font-size: 18px;
      font-weight: bold;
      color: green;
      margin-top: 25px;
      text-align: center;
      border-top: 2px solid #ddd;
      padding-top: 15px;
    }
  </style>
</head>
<body>
  <h1>Welcome to User List</h1>

  <!-- Add New User Button -->
  <div class="add-button">
    <a href="<?= site_url('user/create') ?>">+ Add New User</a>
  </div>

  <!-- Total Users -->
  <div class="total-users">
    Total Users: <?= count($users); ?>
  </div>
  
  <table>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Action</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
      <td><?= html_escape($user['id']); ?></td>
      <td><?= html_escape($user['username']); ?></td>
      <td><?= html_escape($user['email']); ?></td>
      <td>
        <a href="<?= site_url('user/update/'.$user['id']); ?>">Edit</a> | 
        <a href="<?= site_url('user/delete/'.$user['id']); ?>" 
           onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>

  <h2 class="success-msg">✅ Successfully</h2>
</body>
</html>
