<?php
?>
<section>
    <h2>Kontak Kami</h2>
    <p>
        Silakan hubungi kami untuk konsultasi, pertanyaan, atau kerjasama bisnis.
    </p>
    <ul>
        <li>Email: <a href="mailto:info@mybusiness.com">info@mybusiness.com</a></li>
        <li>WhatsApp: <a href="https://wa.me/6281234567890" target="_blank">0812-3456-7890</a></li>
        <li>Alamat: Jl. Contoh Bisnis No. 123, Jakarta</li>
    </ul>
    <form method="post" action="/?action=sendContact">
        <label>Nama:<br><input type="text" name="name" required></label><br>
        <label>Email:<br><input type="email" name="email" required></label><br>
        <label>Pesan:<br><textarea name="message" required></textarea></label><br>
        <button type="submit">Kirim Pesan</button>
    </form>
</section>