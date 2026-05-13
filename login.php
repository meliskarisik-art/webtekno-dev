<?php
// Formdan gelen verileri alıyoruz
$email = $_POST['email'];
$password = $_POST['password'];

// Kullanıcı adı (okul numaran) ve şifre kontrolü
// Ödev kuralı: Kullanıcı adı b2412100001@sakarya.edu.tr, şifre b2412100001
if ($email == "b2412100001@sakarya.edu.tr" && $password == "b2412100001") {
    echo "<h2>Hoşgeldiniz b2412100001</h2>";
    echo "<p>Giriş işleminiz başarıyla tamamlandı. Ana sayfaya yönlendiriliyorsunuz...</p>";
    header("Refresh: 3; url=index.html");
} else {
    // Hatalı girişte login sayfasına geri gönderiyoruz
    header("Location: login.html?hata=1");
    exit();
}
?>