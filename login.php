<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TickLink | Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="login-card">

        <!-- Company Logo -->
        <img src="assets/ticklink_logo.png"
             alt="TickLink LLC Logo"
             class="company-logo">

        <h1 class="login-title">Log In</h1>

        <p class="welcome-text">
            Welcome back to TickLink!
            <br>
            Access your jobs and manage your work.
        </p>

        <form action="login.php" method="POST">

            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">
                    Username
                </label>

                <input type="text"
                       id="username"
                       name="username"
                       class="form-control"
                       placeholder="Enter your username"
                       required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">
                    Password
                </label>

                <input type="password"
                       id="password"
                       name="password"
                       class="form-control"
                       placeholder="Enter your password"
                       required>
            </div>

            <!-- Login Button -->
            <button type="submit" class="btn login-btn">
                Log In
            </button>

        </form>

        <p class="footer-text">
            Developed for TickLink LLC
        </p>

    </div>

</body>
</html>