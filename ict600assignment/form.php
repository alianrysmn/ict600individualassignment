<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Permohonan Perkahwinan Bawah Umur / Wali Hakim</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
        <div class="header-banner">
            <h1>Borang Permohonan</h1>
        </div>
    </header>
    <main>
        <div class="content-container">
            <div class="form-container">
                <div class="header">
                    <img src="photo/jawilogo.png" alt="Jabatan Agama Islam Wilayah Persekutuan Logo" width="180"><br><br>
                    <h1>JABATAN AGAMA ISLAM WILAYAH PERSEKUTUAN</h1><br>
                    <h2>AKTA UNDANG-UNDANG KELUARGA ISLAM (WILAYAH-WILAYAH PERSEKUTUAN) 1984, [AKTA 303]</h2>
                    <h3>SEKSYEN 8/SEKSYEN 18[1](C)</h3><br>
                    <h2>BORANG PERMOHONAN BERKAHWIN BAWAH UMUR / WALI HAKIM</h2>
                </div>

                <form id="marriageForm" action="display.php" method="POST">
                    <div class="section">
                        <p><strong>*Bawah umur:</strong><br>
                        Sila masukkan tarikh lahir: <input type="date" id="birthdate" name="birthdate" required><br>
                        Umur pada tarikh akad nikah:
                            <input type="text" id="years" name="hiddenYears" size="2" readonly> tahun 
                            <input type="text" id="months" name="hiddenMonths" size="2" readonly> bulan 
                            <input type="text" id="days" name="hiddenDays" size="2" readonly> hari</p>
                        <br>
                        <p><strong>*Wali Hakim:</strong></p>
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="wali_hakim[]" value="Wali Ghaib" id="wali_ghaib"> Wali Ghaib</label>
                            <label><input type="checkbox" name="wali_hakim[]" value="Anak Tak Sah Taraf" id="anak_tak_sah"> Anak Tak Sah Taraf</label>
                            <label><input type="checkbox" name="wali_hakim[]" value="Saudara Muslim" id="saudara_muslim"> Saudara Muslim</label>
                            <label><input type="checkbox" name="wali_hakim[]" value="Tiada Wali Nasab" id="tiada_wali"> Tiada Wali Nasab</label>
                        </div>
                        <br>
                        <p><strong>Nota:</strong> <input type="text" id="notes" name="notes" size="80"></p>
                        <p><i>(* isi mana yang berkenaan)</i></p>
                    </div>

                    <br>

                    <div class="section">
                        <div class="section-title">1. Maklumat Pemohon</div><br>
                        <div class="input-group">
                            <label>a. Nama:</label>
                            <input type="text" id="applicantName" name="applicantName">
                        </div>
                        <div class="input-group">
                            <label>b. No K/P Baru/Pasport:</label>
                            <input type="text" id="idPassportNo" name="idPassportNo" placeholder="Sila masukkan nombor K/P atau Pasport tanpa '-'">
                        </div>
                        <div class="input-group">
                            <label>c. Alamat:</label>
                            <input type="text" id="applicantAddress" name="applicantAddress">
                        </div>
                        <div class="input-group">
                            <label>d. Pekerjaan:</label>
                            <input type="text" id="applicantOccupation" name="applicantOccupation">
                        </div>
                        <div class="input-group">
                            <label>e. No. Tel:</label>
                            <input type="text" id="phoneNo" name="phoneNo" placeholder="Sila masukkan nombor telefon tanpa '-'">
                        </div>
                    </div>

                    <br>

                    <div class="section">
                        <div class="section-title">2. Maklumat Saksi 1</div><br>
                        <div class="input-group">
                            <label>a. Nama:</label>
                            <input type="text" id="witness1Name" name="witness1Name">
                        </div>
                        <div class="input-group">
                            <label>b. No K/P Baru/Pasport:</label>
                            <input type="text" id="idPassportNo2" name="idPassportNo2" placeholder="Sila masukkan nombor K/P atau Pasport tanpa '-'">
                        </div>
                        <div class="input-group">
                            <label>c. Alamat:</label>
                            <input type="text" id="witness1Address" name="witness1Address">
                        </div>
                        <div class="input-group">
                            <label>d. Pekerjaan:</label>
                            <input type="text" id="witness1Occupation" name="witness1Occupation">
                        </div>
                        <div class="input-group">
                            <label>e. No. Tel:</label>
                            <input type="text" id="phoneNo2" name="phoneNo2" placeholder="Sila masukkan nombor telefon tanpa '-'">
                        </div>
                        <div class="input-group">
                            <label>f. Hubungan dengan pemohon:</label>
                            <select id="witness1Relationship" name="witness1Relationship">
                                <option value="">Pilihan</option>
                                <option value="Ibu">Ibu</option>
                                <option value="Ayah">Ayah</option>
                                <option value="Bapa/Ibu Saudara">Bapa/Ibu Saudara</option>
                                <option value="Adik-beradik">Adik-beradik</option>
                                <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="section">
                        <div class="section-title">3. Maklumat Saksi 2:</div><br>
                        <div class="input-group">
                            <label>a. Nama:</label>
                            <input type="text" id="witness2Name" name="witness2Name">
                        </div>
                        <div class="input-group">
                            <label>b. No K/P Baru/Pasport:</label>
                            <input type="text" id="idPassportNo3" name="idPassportNo3" placeholder="Sila masukkan nombor K/P atau Pasport tanpa '-'">
                        </div>
                        <div class="input-group">
                            <label>c. Alamat:</label>
                            <input type="text" id="witness2Address" name="witness2Address">
                        </div>
                        <div class="input-group">
                            <label>d. Pekerjaan:</label>
                            <input type="text" id="witness2Occupation" name="witness2Occupation">
                        </div>
                        <div class="input-group">
                            <label>e. No. Tel:</label>
                            <input type="text" id="phoneNo3" name="phoneNo3" placeholder="Sila masukkan nombor telefon tanpa '-'">
                        </div>
                        <div class="input-group">
                            <label>f. Hubungan dengan pemohon:</label>
                            <select id="witness2Relationship" name="witness2Relationship">
                            <option value="">Pilihan</option>
                                <option value="Ibu">Ibu</option>
                                <option value="Ayah">Ayah</option>
                                <option value="Bapa/Ibu Saudara">Bapa/Ibu Saudara</option>
                                <option value="Adik-beradik">Adik-beradik</option>
                                <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <div class="section">
                        <div class="section-title">4. Ulasan Pendaftar: </div>
                        <input type="text" id="review" name="review" size="100" height="100">
                    </div>

                    <div class="section">
                        <p>Pengesahan: Saya dengan ini sesungguhnya mengaku bahawa segala butir di atas adalah benar sekiranya
                        mana-mana butir itu palsu maka saya telah melakukan suatu dan kesalahan yang boleh dihukum di bawah
                        seksyen 38 Akta Undang-Undang Keluarga Islam (Wilayah-Wilayah Persekutuan)1984.</p>
                        <div class="checkbox-right">
                            <input type="checkbox" id="declaration" required>
                            <label for="declaration"><i>Sila setuju dengan pengesahan ini</i></label>
                        </div>
                    </div>

                    <div class="button-group">
                        <button type="button" onclick="createDetails()">Hantar</button>
                        <button type="button" onclick="clearForm()">Padam</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
