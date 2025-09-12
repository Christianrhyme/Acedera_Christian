<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <style>
    body {
      background: #ffffff; /* plain white */
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

    button {
      margin-top: 15px;
      width: 48%;
      padding: 12px;
      background: #0066cc;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      font-size: 15px;
      cursor: pointer;
    }

    button:hover {
      background: #004a99;
    }

    .cancel-btn {
      background: #aaa;
    }

    .cancel-btn:hover {
      background: #888;
    }

    .button-group {
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Create User</h1>
    <form method="post" action="<?= site_url('user/create') ?>">
      <!-- Username -->
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <!-- Email -->
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <!-- Buttons -->
      <div class="button-group">
        <button type="submit">Create User</button>
        <button type="button" class="cancel-btn" onclick="window.location.href='<?= site_url() ?>'">Cancel</button>
      </div>
    </form>
  </div>
</body>
</html>
