<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($title ?? 'شركة فواصل القابضة'); ?></title>
    <style>
        body {
            font-family: 'Tajawal', Arial, sans-serif;
            background: url('/logo/Background-012.png') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background: #b0b4ba;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2rem;
            box-shadow: 0 2px 8px #0001;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            z-index: 1200;
        }
        .navbar .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-left: auto;
            margin-right: 50px;
        }
        .navbar img {
            height: 48px;
            margin-left: 25px; /* زيادة 5px إضافية (من 20px إلى 25px) */
        }
        .navbar .title {
            font-size: 2rem;
            font-weight: bold;
            color: #232946;
            letter-spacing: 2px;
            margin-left: 30px;
        }
        .nav-links {
            display: flex;
            gap: 2rem;
        }
        .nav-links a {
            text-decoration: none;
            color: #232946;
            font-size: 1.1rem;
            font-weight: 500;
            transition: color 0.2s;
        }
        .nav-links a:hover {
            color: #4f46e5;
        }
        .main-content {
            margin: 5.5rem auto 0 auto;
            max-width: 900px;
            padding: 2rem;
            text-align: center;
            flex-grow: 1;
        }
        .social-bar {
            width: 100vw;
            background: #d3d6db;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5rem;
            padding: 3rem 0 3rem 0;
            box-shadow: 0 2px 8px #0001;
            position: fixed;
            left: 0;
            bottom: -300px;
            z-index: 1000;
            font-size: 3.2rem;
            transition: bottom 0.5s cubic-bezier(.4,2,.6,1);
        }
        .social-bar.visible {
            bottom: 0;
        }
        .social-bar a {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #232946;
            font-size: 4.5rem;
            transition: color 0.2s;
        }
        .social-bar a:hover {
            color: #4f46e5;
        }

        /* التصميم الجديد للمحتوى الرئيسي */
        .content-container {
            max-width: 900px;
            margin: 0 auto;
            text-align: right;
            padding: 2.2rem 0 2rem 0;
        }
        .main-heading {
            color: #000;
            font-size: 3rem;
            margin-bottom: 3rem;
            letter-spacing: 1px;
            font-weight: 900;
            line-height: 1.3;
        }
        .key-points {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
            margin-bottom: 3rem;
        }
        .key-point-title {
            font-size: 2.2rem;
            color: #000;
            margin-bottom: 1rem;
            font-weight: 800;
        }
        .key-point-description {
            font-size: 1.5rem;
            line-height: 1.9;
            color: #333;
            margin-bottom: 2rem;
            padding-right: 1rem;
            border-right: 3px solid #4f46e5;
        }
        .general-content {
            font-size: 1.4rem;
            line-height: 2;
            color: #333;
            margin-top: 3rem;
            text-align: right;
        }

        /* تصميم صفحة التواصل */
        .contact-container {
            max-width: 520px;
            margin: 0 auto;
            text-align: right;
            padding: 2.5rem 0 2rem 0;
        }
        .contact-heading {
            color: #000;
            font-size: 2.5rem;
            margin-bottom: 2rem;
            letter-spacing: 1px;
            font-weight: 900;
        }
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
            margin-top: 2.2rem;
        }
        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.7rem;
            color: #000;
            font-weight: 600;
            padding: 0.8rem 0;
            text-decoration: none;
            transition: color 0.2s;
            font-size: 1.3rem;
            border-bottom: 1px solid #ddd;
        }
        .contact-item:hover {
            color: #4f46e5;
        }

        /* تصميم متجاوب */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }
            .main-heading {
                font-size: 2.5rem;
            }
            .key-point-title {
                font-size: 1.8rem;
            }
            .key-point-description {
                font-size: 1.3rem;
            }
            .social-bar {
                gap: 1rem;
                padding: 0.5rem;
            }
            .social-bar span {
                margin-right: 0.5rem;
            }
            .main-content {
                padding: 1rem;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="/logo/logo-22-02.png" alt="Logo">
            <span class="title">شركة فواصل القابضة</span>
        </div>
        <div class="nav-links">
            <a href="/">القائمة الرئيسية</a>
            <a href="/sectors">قطاعاتنا</a>
            <a href="/csr">المسؤولية الاجتماعية</a>
            <a href="/media">المركز الإعلامي</a>
            <a href="/jobs">الوظائف</a>
            <a href="/contact">تواصل معنا</a>
        </div>
    </nav>
    <footer>
    <div class="social-bar" id="socialBar">
            <a href="#" title="واتساب" target="_blank">
                <svg width="28" height="28" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="16" fill="#25d366"/><path d="M23.5 19.5c-.3-.2-1.7-.8-2-1s-.5-.2-.7.1c-.2.2-.8 1-.9 1.1-.2.2-.3.2-.6.1-.3-.2-1.2-.4-2.3-1.3-.8-.7-1.4-1.6-1.6-1.9-.2-.3 0-.4.1-.6.1-.1.2-.2.3-.4.1-.1.1-.2.2-.3.1-.1.1-.2.2-.3.1-.2.1-.3 0-.5-.1-.2-.7-1.7-1-2.3-.2-.5-.4-.5-.7-.5h-.6c-.2 0-.5.1-.7.3-.2.2-.7.7-.7 1.7 0 1 .7 2.1 1.1 2.6.1.2 2.1 3.2 5.1 4.2.7.2 1.2.3 1.6.2.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.1-1.2z" fill="#fff"/></svg>
            </a>
            <a href="#" title="انستجرام" target="_blank">
                <svg width="28" height="28" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="16" fill="#E1306C"/><path d="M21.5 12.5a2 2 0 0 0-2-2h-7a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-7zm-5.5 7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm4-5.5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zM16 14a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" fill="#fff"/></svg>
            </a>
            <a href="#" title="سناب شات" target="_blank">
                <svg width="28" height="28" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="16" fill="#FFFC00"/><path d="M16 10c-2.2 0-4 1.8-4 4 0 2.2 1.8 4 4 4s4-1.8 4-4c0-2.2-1.8-4-4-4zm0 7.5c-1.9 0-3.5-1.6-3.5-3.5S14.1 10.5 16 10.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5z" fill="#000"/></svg>
            </a>
            <a href="#" title="X (تويتر)" target="_blank">
                <svg width="28" height="28" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="16" fill="#222"/><path d="M12.5 10h2.1l3.1 4.2 3-4.2h2.1l-4 5.5 4.2 5.5h-2.1l-3.2-4.3-3.2 4.3h-2.1l4.2-5.5-4-5.5zm2.2 5.5l-2.7 3.5h1.1l2.1-2.8 2.1 2.8h1.1l-2.7-3.5z" fill="#fff"/></svg>
            </a>
            <a href="#" title="تيك توك" target="_blank">
                <svg width="28" height="28" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="16" fill="#000"/><path d="M21.5 13.5c-1.1 0-2-.9-2-2V9.5h-2v8.1c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2c.2 0 .4 0 .5.1v-2.1c-.2 0-.3-.1-.5-.1-2.2 0-4 1.8-4 4s1.8 4 4 4 4-1.8 4-4v-2.1c.2.1.3.1.5.1h1v-2h-1z" fill="#fff"/><circle cx="22.5" cy="11.5" r="1.5" fill="#25f4ee"/></svg>
            </a>
            <span style="color:#232946;font-size:1.1rem;margin-right:1.5rem;direction:ltr">
                <?php echo e(now()->format('Y/m/d')); ?>

            </span>
        </div>
    </footer>
    <div style="margin-bottom: 200px;"></div>
    <div class="main-content">
        <?php if(request()->is('contact')): ?>
            <div class="contact-container">
                <h1 class="contact-heading"><?php echo e($title ?? ''); ?></h1>
                <div style="font-size:1.3rem;line-height:2.1;color:#333;margin-bottom:2.2rem;">
                    <?php echo $content ?? ''; ?>

                </div>
                <div class="contact-info">
                    <a href="tel:9200XXXXXX" class="contact-item">
                        <svg width="22" height="22" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="12" fill="#4f46e5"/><path d="M17.7 15.3l-2.1-2.1c-.4-.4-1-.4-1.4 0l-.7.7c-1.1-.6-2-1.5-2.6-2.6l.7-.7c.4-.4.4-1 0-1.4l-2.1-2.1c-.4-.4-1-.4-1.4 0l-.6.6c-.5.5-.7 1.2-.5 1.9 1.1 3.1 3.6 5.6 6.7 6.7.7.2 1.4 0 1.9-.5l.6-.6c.4-.4.4-1 0-1.4z" fill="#fff"/></svg>
                        9200XXXXXX
                    </a>
                    <a href="mailto:info@fawasel.com" class="contact-item">
                        <svg width="22" height="22" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="12" fill="#4f46e5"/><path d="M6 8l6 4 6-4v8a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8z" fill="#fff"/><path d="M18 8l-6 4-6-4" stroke="#fff" stroke-width="2"/></svg>
                        info@fawasel.com
                    </a>
                    <div class="contact-item" style="border-bottom: none;">
                        <svg width="22" height="22" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="12" fill="#4f46e5"/><path d="M7 17v-7h10v7a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V8z" fill="#fff"/><path d="M7 10V7a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v3" stroke="#fff" stroke-width="2"/></svg>
                        الرياض، المملكة العربية السعودية
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="content-container">
                <h1 class="main-heading"><?php echo e($title ?? 'شركة فواصل القابضة'); ?></h1>



                <div class="general-content">
                    <?php echo $content ?? 'مرحباً بكم في شركة فواصل القابضة. نحن نعمل على تقديم أفضل الخدمات في جميع القطاعات.'; ?>

                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
<script>
// إظهار شريط السوشيال فقط عند الوصول لأسفل الصفحة
window.addEventListener('scroll', function() {
    var bar = document.getElementById('socialBar');
    if (!bar) return;
    var scrollY = window.scrollY || window.pageYOffset;
    var windowH = window.innerHeight;
    var docH = document.body.scrollHeight;
    if (scrollY + windowH >= docH - 10) {
        bar.classList.add('visible');
    } else {
        bar.classList.remove('visible');
    }
});
</script>
</html>
<?php /**PATH C:\Users\M.C\Desktop\project 1\resources\views/main_layout.blade.php ENDPATH**/ ?>