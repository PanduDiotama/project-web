<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGINKAN AKUN</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f9f9f9;
        }

        h1, h2, h3 {
            margin: 0;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        button {
            background-color: #003366;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #002244;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #003366;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            margin-right: auto;
        }

        header ul {
            display: flex;
            gap: 15px;
            margin-left: 20px;
            margin-right: 20px;
        }

        header ul li {
            padding: 5px 10px;
        }

        header ul li a {
            color: #fff;
            font-weight: bold;
        }

        header ul li a:hover {
            color: #ffcd05;
        }

        .login-container {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 120px;
            background-color: #ffffff;
        }

        .login-container h2 {
            font-size: 32px;
            color: #003366;
            margin-bottom: 20px;
        }

        .login-form {
            max-width: 400px;
            width: 100%;
            background-color: #f5f5f5;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .login-form label {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
            display: block;
        }

        .login-form input {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            background-color: #003366;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #002244;
        }

        footer {
            background-color: #003366;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            header ul {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .login-container {
                margin-top: 100px;
            }

            .login-form {
                width: 100%;
                padding: 20px;
            }
        }

        .register-link {
            margin-top: 20px;
            font-size: 16px;
            color: #003366;
        }

        .register-link a {
            color: #0056b3;
            text-decoration: underline;
        }

        .register-link a:hover {
            color: #ffcd05;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">GG FEST</div>
        <ul>
            <li><a href="phoenix.php">Home</a></li>
            <li><a href="phoenix.php#faq">FAQ</a></li>
            <li><a href="phoenix.php#about">About</a></li>
        </ul>
    </header>

    <div class="login-container">
        <h2>Login</h2>
        <form class="login-form" action="process_login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>

            <button type="submit">Login</button>
            <div class="register-link">
                <p>Tidak punya akun? <a href="register.php">Daftar di sini</a></p>
            </div>
        </form>
    </div>

    <?php include "layout/footer.html" ?>
    
</body>
</html>
