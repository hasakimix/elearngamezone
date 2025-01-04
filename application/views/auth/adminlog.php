<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login/Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #5a7189;
        }

        .container {
            background: #fff;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            width: 900px;
            max-width: 100%;
            min-height: 600px;
        }

        .left, .right {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .left {
            background: #34495e;
            color: white;
            text-align: center;
        }

        .left h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .left button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: #1abc9c;
            color: white;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .left button:hover {
            background: #16a085;
        }

        .right h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #333;
        }

        .AdLogin {
            margin-left: 55px; 
        }

        .right form {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 300px;
        }

        .right input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s;
            width: 270px;
        }

        .right input:focus {
            border-color: #2980b9;
            outline: none;
        }

        .right button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #2980b9;
            color: white;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s;
        }

        .right button:hover {
            background: #2471a3;
        }

        .toggle {
            cursor: pointer;
            font-size: 0.9rem;
            color: #3498db;
            text-decoration: underline;
            margin-top: 20px;
            margin-left: 40px;
        }

        .toggle:hover {
            color: #2980b9;
        }

        .error {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Section -->
        <div class="left">
            <h1>Admin Portal</h1>
            <p>Access administrative tools and manage the system securely.</p>
        </div>

        <!-- Right Section -->
        <div class="right">
            <!-- Login Form -->
            <div id="loginForm">
                <h2 class="AdLogin">Admin Login</h2>
                <form id="login">
                    <div id="loginError" class="error" style="display: none;">Invalid email or password.</div>
                    <input type="email" id="loginEmail" placeholder="Email" required>
                    <input type="password" id="loginPassword" placeholder="Password" required>
                    <button type="submit">Log In</button>
                </form>
            </div>

    <script>
        const loginForm = document.getElementById('loginForm');
        const toggleLogin = document.getElementById('toggleLogin');

        const login = document.getElementById('login');
        const loginError = document.getElementById('loginError');

        toggleLogin.addEventListener('click', () => {
            registerForm.style.display = 'none';
            loginForm.style.display = 'block';
        });

        login.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;

            // Simple validation example
            if (email === 'admin@example.com' && password === 'password') {
                alert('Login successful!');
            } else {
                loginError.style.display = 'block';
            }
        });

    </script>
</body>
</html>
