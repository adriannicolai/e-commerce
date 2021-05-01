<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/admin.css') ?>">
</head>

<body>
<form action="/dashboard/orders" method="post">
        <h3>Admin Login Page</h3>
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
        <label for="email">Email:</label>
        <input type="text" name="email">
        <label for="password">Password:</label>
        <input type="password" name="password">
        <input type="submit" value="Login">
</form>
</body>

</html>