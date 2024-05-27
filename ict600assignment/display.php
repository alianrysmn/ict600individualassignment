<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengesahan Borang Permohonan</title>
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
                </div>
                <div class="section">
                    <h3>Bawah Umur</h3>
                    <p>Tarikh Lahir: <?php echo htmlspecialchars($_POST['birthdate']); ?></p>
                    <p>Umur Pada Tarikh Akad Nikah: 
                        <?php 
                            echo htmlspecialchars($_POST['hiddenYears']) . " tahun " . 
                                 htmlspecialchars($_POST['hiddenMonths']) . " bulan " . 
                                 htmlspecialchars($_POST['hiddenDays']) . " hari"; 
                        ?>
                    </p>
                    <p>Nota: <?php echo htmlspecialchars($_POST['notes']); ?></p>
                </div>
                <div class="section">
                    <h3>Wali Hakim</h3>
                    <p><?php echo isset($_POST['wali_hakim']) ? implode(', ', $_POST['wali_hakim']) : 'Tiada'; ?></p>
                </div>
                <div class="section">
                    <h3>Maklumat Pemohon</h3>
                    <p>Nama: <?php echo htmlspecialchars($_POST['applicantName']); ?></p>
                    <p>No K/P Baru/Pasport: <?php echo htmlspecialchars($_POST['idPassportNo']); ?></p>
                    <p>Alamat: <?php echo htmlspecialchars($_POST['applicantAddress']); ?></p>
                    <p>Pekerjaan: <?php echo htmlspecialchars($_POST['applicantOccupation']); ?></p>
                    <p>No. Tel: <?php echo htmlspecialchars($_POST['phoneNo']); ?></p>
                </div>
                <div class="section">
                    <h3>Maklumat Saksi 1</h3>
                    <p>Nama: <?php echo htmlspecialchars($_POST['witness1Name']); ?></p>
                    <p>No K/P Baru/Pasport: <?php echo htmlspecialchars($_POST['idPassportNo2']); ?></p>
                    <p>Alamat: <?php echo htmlspecialchars($_POST['witness1Address']); ?></p>
                    <p>Pekerjaan: <?php echo htmlspecialchars($_POST['witness1Occupation']); ?></p>
                    <p>No. Tel: <?php echo htmlspecialchars($_POST['phoneNo2']); ?></p>
                    <p>Hubungan dengan Pemohon: <?php echo htmlspecialchars($_POST['witness1Relationship']); ?></p>
                </div>
                <div class="section">
                    <h3>Maklumat Saksi 2</h3>
                    <p>Nama: <?php echo htmlspecialchars($_POST['witness2Name']); ?></p>
                    <p>No K/P Baru/Pasport: <?php echo htmlspecialchars($_POST['idPassportNo3']); ?></p>
                    <p>Alamat: <?php echo htmlspecialchars($_POST['witness2Address']); ?></p>
                    <p>Pekerjaan: <?php echo htmlspecialchars($_POST['witness2Occupation']); ?></p>
                    <p>No. Tel: <?php echo htmlspecialchars($_POST['phoneNo3']); ?></p>
                    <p>Hubungan dengan Pemohon: <?php echo htmlspecialchars($_POST['witness2Relationship']); ?></p>
                </div>
                <div class="section">
                    <h3>Ulasan Pendaftar</h3>
                    <p><?php echo htmlspecialchars($_POST['review']); ?></p>
                </div>
                <div class="button-group">
                    <form action="confirmation.php" method="POST">
                        <button type="submit">Hantar Permohonan</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
