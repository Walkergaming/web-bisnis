<?php
class HomeController
{
    public function index()
    {
        $title = "Home";
        ob_start();
        include __DIR__ . '/../views/home.php';
        $content = ob_get_clean();
        include __DIR__ . '/../views/layouts/main.php';
    }

    public function about()
    {
        $title = "Tentang Kami";
        ob_start();
        include __DIR__ . '/../views/about.php';
        $content = ob_get_clean();
        include __DIR__ . '/../views/layouts/main.php';
    }

    public function contact()
    {
        $title = "Kontak";
        ob_start();
        include __DIR__ . '/../views/contact.php';
        $content = ob_get_clean();
        include __DIR__ . '/../views/layouts/main.php';
    }

    public function sendContact()
    {
        // proses kirim kontak
        $_SESSION['flash'] = "Pesan Anda sudah dikirim!";
        header('Location: /?action=contact');
        exit;
    }

    public function subscribe()
    {
        $_SESSION['flash'] = "Terima kasih sudah berlangganan!";
        header('Location: /');
        exit;
    }
}