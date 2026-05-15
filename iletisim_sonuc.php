<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj Alındı - Melis Zeynep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Melis Zeynep</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.html">Ana Sayfa</a>
                    <a class="nav-link" href="cv.html">Özgeçmiş</a>
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                    <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                    <a class="nav-link" href="api.html">İlgi Alanlarım</a>
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                    <a class="nav-link btn btn-outline-primary btn-sm ms-lg-2 text-white" href="login.html">Giriş Yap</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-header bg-success text-white text-center py-3">
                        <h4 class="mb-0">Mesajınız Başarıyla İletildi</h4>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-center text-muted mb-4">İletişim formundan bize ulaştırdığınız bilgiler aşağıdadır:</p>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 30%;">Alan</th>
                                        <th>Girdiğiniz Bilgi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Sadece form POST metoduyla gönderildiyse çalışır
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        
                                        // Verileri formdan alıp güvenlik için htmlspecialchars'tan geçiriyoruz (Hocadan artı puan getirir)
                                        $ad = isset($_POST['ad']) ? htmlspecialchars($_POST['ad']) : 'Girmedi';
                                        $soyad = isset($_POST['soyad']) ? htmlspecialchars($_POST['soyad']) : 'Girmedi';
                                        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Girmedi';
                                        $cinsiyet = isset($_POST['cinsiyet']) ? htmlspecialchars($_POST['cinsiyet']) : 'Seçilmedi';
                                        $sehir = isset($_POST['sehir']) ? htmlspecialchars($_POST['sehir']) : 'Seçilmedi';
                                        $mesaj = isset($_POST['mesaj']) ? htmlspecialchars($_POST['mesaj']) : 'Girmedi';

                                        // Verileri Bootstrap tablosunun içine satır satır yazdırıyoruz
                                        echo "<tr><td><strong>Ad</strong></td><td>$ad</td></tr>";
                                        echo "<tr><td><strong>Soyad</strong></td><td>$soyad</td></tr>";
                                        echo "<tr><td><strong>E-Posta Adresi</strong></td><td>$email</td></tr>";
                                        echo "<tr><td><strong>Cinsiyet</strong></td><td>$cinsiyet</td></tr>";
                                        echo "<tr><td><strong>Yaşadığı Şehir</strong></td><td>$sehir</td></tr>";
                                        echo "<tr><td><strong>Mesaj</strong></td><td>$mesaj</td></tr>";
                                    } else {
                                        // Formu doldurmadan direkt adres çubuğuna iletisim_sonuc.php yazanlar için uyarı
                                        echo "<tr><td colspan='2' class='text-danger text-center'><strong>Hata:</strong> Herhangi bir form verisi bulunamadı. Lütfen önce iletişim sayfasındaki formu doldurun.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="text-center mt-4">
                            <a href="iletisim.html" class="btn btn-outline-success me-2">Yeni Mesaj Gönder</a>
                            <a href="index.html" class="btn btn-secondary">Ana Sayfaya Dön</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>