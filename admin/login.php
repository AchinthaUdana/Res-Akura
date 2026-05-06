<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akura Admin Login</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/admin/css/admin-style.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #0d8abc 0%, #0f172a 100%);
        }
        .login-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(16px);
            padding: 48px;
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 450px;
            text-align: center;
            animation: slideIn 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .login-logo {
            width: 80px;
            height: 80px;
            background: var(--primary-color);
            color: white;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin-bottom: 24px;
            box-shadow: 0 10px 25px rgba(13, 138, 188, 0.4);
        }
        .login-title {
            font-size: 28px;
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 8px;
        }
        .login-subtitle {
            color: var(--text-muted);
            margin-bottom: 32px;
            font-size: 14px;
        }
        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }
        .login-btn {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            justify-content: center;
            margin-top: 10px;
            border-radius: 12px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-logo">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        <h1 class="login-title">Akura Admin</h1>
        <p class="login-subtitle">Sign in to manage your institution</p>

        <form action="/admin/index.php" method="POST">
            <div class="form-group">
                <label class="form-label">Email Address</label>
                <div style="position: relative;">
                    <i class="fa-solid fa-envelope" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: var(--text-muted);"></i>
                    <input type="email" class="form-control" placeholder="admin@akura.com" style="padding-left: 48px;" required>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <div style="position: relative;">
                    <i class="fa-solid fa-lock" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: var(--text-muted);"></i>
                    <input type="password" class="form-control" placeholder="Enter password" style="padding-left: 48px;" required>
                </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; font-size: 13px;">
                <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                    <input type="checkbox"> Remember me
                </label>
                <a href="#" style="color: var(--primary-color); font-weight: 500;">Forgot Password?</a>
            </div>

            <button type="submit" class="btn btn-primary login-btn">Sign In <i class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i></button>
        </form>
    </div>

</body>
</html>
