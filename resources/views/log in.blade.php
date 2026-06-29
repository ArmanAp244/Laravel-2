<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ورود</title>
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .input-group {
            margin-bottom: 20px;
            text-align: right;
        }
        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* برای اینکه padding و border روی عرض تاثیر نگذارند */
            font-size: 16px;
        }
        .login-button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .login-button:hover {
            background-color: #0056b3;
        }
        .forgot-password {
            margin-top: 15px;
            font-size: 13px;
        }
        .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>ورود به حساب کاربری</h1>
        <div class="input-group">
            <label for="username">نام کاربری:</label>
            <input type="text" id="username" name="username" placeholder="نام کاربری خود را وارد کنید">
        </div>
        <div class="input-group">
            <label for="password">رمز عبور:</label>
            <input type="password" id="password" name="password" placeholder="رمز عبور خود را وارد کنید">
        </div>
        <button class="login-button">ورود</button>
        <div class="forgot-password">
            <a href="#">فراموشی رمز عبور؟</a>
        </div>
    </div>
</body>
</html>
