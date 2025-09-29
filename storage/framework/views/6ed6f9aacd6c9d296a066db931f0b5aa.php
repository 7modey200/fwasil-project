<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل الدخول</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .login-box { background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px #0001; max-width: 350px; margin: 5rem auto; direction: rtl; }
        .login-box h2 { margin-bottom: 1.5rem; text-align: center; }
        .login-box input[type=email], .login-box input[type=password] { width: 100%; padding: 0.75rem; margin-bottom: 1rem; border: 1px solid #ccc; border-radius: 4px; }
        .login-box button { width: 100%; padding: 0.75rem; background: #6366f1; color: #fff; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; }
        .login-box button:hover { background: #4f46e5; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>تسجيل الدخول</h2>
        <form method="POST" action="#">
            <input type="email" name="email" placeholder="البريد الإلكتروني" required>
            <input type="password" name="password" placeholder="كلمة المرور" required>
            <button type="submit">دخول</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\M.C\Desktop\project 1\resources\views/welcome.blade.php ENDPATH**/ ?>