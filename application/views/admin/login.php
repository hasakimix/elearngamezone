<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url("/assets/css/admin/login.css?version=" . uniqid()) ?>" />
</head>

<body>
<!-- Switch to User Icon -->
<div class="user-switch">
  <a href="<?= base_url("#") ?>" title="Switch to User">
    <i class="fa fa-user"></i>
  </a>
</div>

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
</body>

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
</html>
