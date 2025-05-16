<?php
$current = $_GET['action'] ?? 'index';
if (!function_exists('navActive')) {
    function navActive($page, $current) { return $page === $current ? 'class="active"' : ''; }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'My Business Web' ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header>
        <h1>Solusi Bisnis Modern</h1>
        <nav>
            <a href="/" <?= navActive('index', $current) ?>>Home</a>
            <a href="/?action=about" <?= navActive('about', $current) ?>>Tentang</a>
            <a href="/?action=contact" <?= navActive('contact', $current) ?>>Kontak</a>
        </nav>
    </header>
    <main>
        <?php if (!empty($_SESSION['flash'])): ?>
            <div class="flash"><?= $_SESSION['flash']; unset($_SESSION['flash']); ?></div>
        <?php endif; ?>
        <?php if (isset($content)) echo $content; ?>
    </main>
    <footer>
        &copy; <?= date('Y') ?> Solusi Bisnis Modern<br>
        <small>Contact: info@mybusiness.com | WhatsApp: 0812-3456-7890</small>
    </footer>
    <a href="https://wa.me/6281234567890" target="_blank" style="position:fixed;bottom:24px;right:24px;background:#25d366;color:#fff;padding:14px 22px;border-radius:50px;text-decoration:none;font-weight:bold;box-shadow:0 2px 8px rgba(0,0,0,0.2);z-index:1000;display:flex;align-items:center;gap:8px;">
        <svg width="22" height="22" viewBox="0 0 448 512" fill="currentColor" style="margin-right:8px;">
            <path d="M380.9 97.1C339-17.8 197.8-35.7 97.1 61.1c-100.7 96.8-82.8 238 32.1 279.9l-11.7 44.3c-2.9 11.1 7.7 21.7 18.8 18.8l44.3-11.7c41.9 114.9 183.1 132.8 283.8 36C530.8 314.2 512.9 173 380.9 97.1zM224 400c-97.2 0-176-78.8-176-176S126.8 48 224 48s176 78.8 176 176-78.8 176-176 176zm97.6-132.1c-5.7-2.8-33.7-16.6-38.9-18.5-5.2-1.9-9-2.8-12.8 2.8-3.8 5.7-14.7 18.5-18 22.3-3.3 3.8-6.6 4.3-12.3 1.4-5.7-2.8-24.1-8.9-45.9-28.3-17-15.1-28.5-33.7-31.8-39.4-3.3-5.7-.4-8.8 2.5-11.6 2.6-2.6 5.7-6.6 8.5-10.1 2.8-3.5 3.8-6.1 5.7-10.1 1.9-3.8.9-7.1-.5-10-1.4-2.8-12.8-30.8-17.6-42.2-4.7-11.3-9.5-9.8-13.1-10-3.3-.2-7.1-.2-10.9-.2-3.8 0-10.1 1.4-15.4 7.1-5.2 5.7-20.3 19.8-20.3 48.3 0 28.5 20.8 56.1 23.7 60 2.8 3.8 41 62.7 99.5 85.8 13.9 5.5 24.7 8.8 33.2 11.2 13.9 3.5 26.6 3 36.6 1.8 11.2-1.3 33.7-13.8 38.5-27.2 4.7-13.3 4.7-24.7 3.3-27.2-1.4-2.5-5.2-3.8-10.9-6.6z"/>
        </svg>
        Chat WhatsApp
    </a>
</body>
</html>