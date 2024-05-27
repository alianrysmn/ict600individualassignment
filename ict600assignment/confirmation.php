<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Permohonan Berjaya</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
        <div class="header-banner">
            <h1>Maklumat Borang</h1>
        </div>
    </header>
    <main>
        <div class="content-container">
            <div class="form-container">
                <div class="header">
                    <h2>Permohonan Anda Telah Berjaya</h2>
                </div>
                <div class="section" style="text-align: center;">
                    <img src="photo/tick.png" alt="Success" style="width: 350px; height: 350px;">
                    <p>Terima kasih, permohonan anda sudah berjaya!</p>
                    <div class="centered-button">
                        <button class="back-button" onclick="window.location.href='form.php';">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
