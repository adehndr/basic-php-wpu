<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>
<body>
  <form action="admin.php" method="post">
    <ul>
      <li>
        <label for="username">Username</label>
        <input type="text" name="username" id ="username">
      </li>
      <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
      </li>
    </ul>
    <button type="submit" name="submit">Login </button>
  </form>  
</body>
</html>