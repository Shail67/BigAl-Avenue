<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - BigAl Avenue</title>
<style>
body {
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
background-color: #f4f4f4;
}
.login-container {
background: #fff;
padding: 20px;
border-radius: 8px;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
width: 300px;
text-align: center;
}
.login-container h1 {
margin-bottom: 10px;
color: #ff0000;
}
.login-container h2 {
margin-bottom: 20px;
color: #8B0000;
font-size: 18px;
}
.login-container form {
display: flex;
flex-direction: column;
}
.login-container input {
margin-bottom: 15px;
padding: 10px;
font-size: 16px;
border: 1px solid #ccc;
border-radius: 5px;
}
.login-container button {
padding: 10px;
font-size: 16px;
background-color: #8B0000;
color: #fff;
border: none;
border-radius: 5px;
cursor: pointer;
}
.login-container button:hover {
background-color: #ff0000;
}
.login-container .error-message {
color: red;
margin-bottom: 10px;
}
</style>
</head>
<body>
<div class="login-container">
<h1>BigAl Avenue</h1>
<h2>Login</h2>
<form action="processLogin.php" method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>
</div>
</body>
</html>
