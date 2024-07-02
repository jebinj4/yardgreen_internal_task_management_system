<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Screen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/unicons/2.1.10/css/unicons.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container img {
            width: 100px;
            margin-bottom: 1rem;
        }
        .login-container h2 {
            margin: 0 0 1.5rem;
        }
        .login-container .input-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }
        .login-container .input-group label {
            display: block;
            margin-bottom: 0.5rem;
        }
        .login-container .input-group input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .login-container .input-group input:focus {
            outline: none;
            border-color: #007bff;
        }
        .login-container button {
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="your-logo-url.png" alt="Logo">
        <h2>Login</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Replace this with your actual username and password verification logic
            if ($username === 'admin' && $password === 'password') {
                header('Location: index.php');
                exit();
            } else {
                echo '<p style="color: red;">Invalid username or password</p>';
            }
        }
        ?>
        <form method="POST" action="">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
