<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <style>
    body {
      background: #ffffff;
      font-family: "Segoe UI", Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      color: #000;
    }

    .container {
      width: 100%;
      max-width: 420px;
      padding: 20px;
    }

    h1 {
      font-size: 26px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 25px;
      color: #0066cc;
    }

    label {
      display: block;
      margin-top: 14px;
      font-weight: 600;
      font-size: 14px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border: 1px solid #bbb;
      border-radius: 6px;
      font-size: 15px;
    }

    input:focus {
      outline: none;
      border-color: #0066cc;
      background: #f5faff;
    }

    .buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 25px;
    }

    .buttons button,
    .buttons a {
      flex: 1;
      padding: 12px;
      font-weight: bold;
      font-size: 15px;
      border-radius: 6px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
    }

    .buttons button {
      background: #0066cc;
      color: #fff;
      border: none;
      margin-right: 10px;
    }

    .buttons button:hover {
      background: #004a99;
    }

    .buttons a {
      background: #ccc;
      color: #222;
    }

    .buttons a:hover {
      background: #aaa;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Update User</h1>
    <form method="post" action="<?= site_url('user/update/'. $user['id']) ?>">
      
      <!-- Username -->
      <label for="username">Username</label>
      <input type="text" id="username" name="username" 
             value="<?= html_escape($user['username']) ?>" required>

      <!-- Email -->
      <label for="email">Email</label>
      <input type="email" id="email" name="email" 
             value="<?= html_escape($user['email']) ?>" required>

      <!-- Buttons -->
      <div class="buttons">
        <button type="submit">Save</button>
        <a href="javascript:void(0);" onclick="window.location='<?= site_url() ?>'">Cancel</a>
      </div>
    </form>
  </div>
</body>
</html>
