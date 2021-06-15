<?php

function nama_lengkap($fullname){
	return "$fullname";
}

function nomor_induk($nim){
	return "$nim";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="dashboard.css">
    </head>

    <body>
       <!-- Menu Header -->
        <div id="header">
            <img id="logoipb" src="logo.png">
            <p id="krs">KRS Online |</p>
            <p id="nama"><?php echo nama_lengkap("Rinaldy Ansyah Pramana Lubis"); ?></p>
            <p id="nim"><?php echo nomor_induk("G64180027"); ?></p>
      
            <a href="login"><img id="logout" src="icon-logout.png"><p id="log-out">Logout</p></a>
        </div>

        <!-- Gambar Header -->
        <img src="header-2.png">
        <h1 id="header-text">KRS Online A</h1>
        <p id="subtitle">Pengisian KRS dibuka dari tanggal 12 April 2021 pukul 09.00 sampai 15 April 2021 pukul 23.55</p>

        <!-- Jadwal Saya -->
        <div id="jadwal-saya">
            <img id="jadwal" src="jadwal.png">
            <p id="jadwal-saya-text">Jadwal Saya</p>
            <p id="keterangan">Keterangan :</p>

            <div id="kuliah">
                <p id="kuliah-text">Kuliah</p>
            </div>

            <div id="praktikum">
                <p id="praktikum-text">Praktikum</p>
            </div>

            <div id="responsi">
                <p id="responsi-text">Responsi</p>
            </div>
        </div>

        <!-- Widget Matkul -->


        <!-- Tabel Jadwal -->
        <table id="tabel-jadwal">

            <tr>


                <th></th>
                <th style="font-weight: bold">Senin</th>
                <th style="font-weight: bold">Selasa</th>
                <th style="font-weight: bold">Rabu</th>
                <th style="font-weight: bold">Kamis</th>
                <th style="font-weight: bold">Jumat</th>
                <th style="font-weight: bold">Sabtu</th>
            </tr>

            <tr>
                <th>06</th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr style="font-family: Arial; font-size: 12pt">
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr style="font-family: Arial; font-size: 12pt">
                <th>07</th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr style="font-family: Arial; font-size: 12pt">
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th>08</th>
                <th>
                    <div id="senin">
                        <p id="waktu">08:00 - 09:40<br>
                    [K1]<br>Komunikasi Data dan Jaringan Komputer</p>
                    </div>
                </th>

                <th>
                    
                    <div id="selasa-p">
                        <p id="waktu">08:00 - 10:00<br>
                    [P1]<br>Data Mining</p>
                    </div>

                </th>

                <th>
                    <div id="rabu-bentrok">
                        <p id="waktu">08:00 - 09:40<br>
                    [K2]<br>Pengolahan Citra Digital</p>
                    </div>

                    <div id="rabu-bentrok2">
                        <p id="waktu">08:00 - 09:40<br>
                    [K1]<br>PSBO</p>
                    </div>
                </th>

                <th>
                    <div id="kamis-p">
                        <p id="waktu">08:00 - 09:40<br>
                    [P2]<br>Pengolahan Citra Digital</p>
                    </div>
                </th>

                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th>09</th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th>10</th>
                <th>
                    <div id="senin-bentrok">
                        <p id="waktu">10:00 - 11:40<br>
                    [K1]<br>Data Mining</p>
                    </div>

                    <div id="senin-bentrok2">
                        <p id="waktu">10:00 - 11:40<br>
                    [K1]<br>Analisis Algoritme</p>
                    </div>

                </th>

                <th>
                    <div id="selasa">
                        <p id="waktu">10:00 - 11:40<br>
                    [K1]<br>Pengolahan Citra Digital</p>
                    </div>
                </th>

                <th>
                    <div id="rabu-bentrok-p">
                        <p id="waktu">10:00 - 12:00<br>
                    [P1]<br>PSBO</p>
                    </div>

                    <div id="rabu-bentrok2-p">
                        <p id="waktu">10:00 - 12:00<br>
                    [P2]<br>PSBO</p>
                    </div>
                </th>

                <th>
                    <div id="kamis">
                        <p id="waktu">10:00 - 11:40<br>
                    [K2]<br>Komunikasi Data dan Jaringan Komputer</p>
                    </div>
                </th>

                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th>11</th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th>12</th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th>13</th>
                <th>
                    <div id="senin">
                        <p id="waktu">13:00 - 14:40<br>
                    [K2]<br>Data Mining</p>
                    </div>
                </th>

                <th>
                    <div id="selasa-p-bentrok">
                        <p id="waktu">13:00 - 15:00<br>
                    [P1]<br>Pengolahan Citra Digital</p>
                    </div>

                    <div id="selasa-p-bentrok2">
                        <p id="waktu">13:00 - 15:00<br>
                    [P2]<br>Data Mining</p>
                    </div>
                </th>

                <th>
                    <div id="rabu-bentrok">
                        <p id="waktu">13:00 - 14:40<br>
                    [K1]<br>Sistem Cerdas</p>
                    </div>

                    <div id="rabu-bentrok2">
                        <p id="waktu">13:00 - 14:40<br>
                    [K2]<br>PSBO</p>
                    </div>
                </th>

                <th> </th>

                <th>
                    <div id="jumat">
                        <p id="waktu">13:30 - 15:10<br>
                    [K2]<br>Sistem Cerdas</p>
                    </div>
                </th>

                <th> </th>
            </tr>

            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th>14</th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th>15</th>
                <th> </th>
                <th> </th>
                <th>
                    <div id="rabu-bentrok-p-komdat">
                        <p id="waktu">15:30 - 17:30<br>
                    [P1]<br>Komdat</p>
                    </div>

                    <div id="rabu-bentrok2-p-komdat">
                        <p id="waktu">13:00 - 15:00<br>
                    [P2]<br>Komdat</p>
                    </div>
                </th>

                <th>
                    <div id="kamis-r">
                        <p id="waktu">15:30 - 17:30<br>
                    [R1]<br>Analisis Algoritme</p>
                    </div>
                </th>

                <th>
                    <div id="jumat-bentrok-p">
                        <p id="waktu">15:30 - 17:30<br>
                    [P1]<br>Sistem Cerdas</p>
                    </div>

                    <div id="jumat-bentrok2-p">
                        <p id="waktu">15:30 - 17:30<br>
                    [P2]<br>Sistem Cerdas</p>
                    </div>
                </th>

                <th> </th>
            </tr>

            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th>16</th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th>17</th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th>18</th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

        </table>

    <div id="matkul-tersedia">
        <img id="matkul" src="list.png">
        <p id="matkul-tersedia-text">Mata Kuliah Tersedia</p>
        <div id="search"></div>
    </div>

    <div id="daftar-matkul">
        
        <div id="pilih">
            <p id="kode-pilih">KOM312</p>
            <p id="nama-pilih">- Komunikasi Data dan Jaringan Komputer</p>
            <p id="sub-nama-pilih">3(2-2) - Mayor</p>
            <div id="ambil">
                <p id="teks-ambil">Ambil</p>
            </div>
        </div>

        <div id="pilih">
            <p id="kode-pilih">KOM320</p>
            <p id="nama-pilih">- Sistem Cerdas</p>
            <p id="sub-nama-pilih">3(2-2) - Mayor</p>
            <div id="ambil">
                <p id="teks-ambil">Ambil</p>
            </div>
        </div>

        <div id="pilih">
            <p id="kode-pilih">KOM324</p>
            <p id="nama-pilih">- Pengolahan Citra Digital</p>
            <p id="sub-nama-pilih">3(2-2) - Mayor</p>
            <div id="ambil">
                <p id="teks-ambil">Ambil</p>
            </div>
        </div>

        <div id="pilih">
            <p id="kode-pilih">KOM332</p>
            <p id="nama-pilih">- Data Mining</p>
            <p id="sub-nama-pilih">3(2-2) - Mayor</p>
            <div id="ambil">
                <p id="teks-ambil">Ambil</p>
            </div>
        </div>

        <div id="pilih">
            <p id="kode-pilih">KOM334</p>
            <p id="nama-pilih">- Pengembangan Sistem Berorientasi Objek</p>
            <p id="sub-nama-pilih">3(2-2) - Mayor</p>
            <div id="ambil">
                <p id="teks-ambil">Ambil</p>
            </div>
        </div>

        <div id="pilih">
            <p id="kode-pilih">KOM401</p>
            <p id="nama-pilih">- Analisis Algoritme</p>
            <p id="sub-nama-pilih">3(2-1) - Mayor</p>
            <div id="ambil">
                <p id="teks-ambil">Ambil</p>
            </div>
        </div>



    </div>

        <footer>
            <p style="font-family: Arial; font-size: 12px; text-align: left; margin-top: 300px;">©2021 KRS ONLINE IPB
            </p>
        </footer>
    </body>
</html>
