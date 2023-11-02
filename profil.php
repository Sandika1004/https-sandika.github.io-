<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Diri</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> <!-- Mengimpor Font Awesome -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('it.jpg'); /* Ganti 'background.jpg' dengan URL atau path gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.8); /* Latar belakang semi-transparan */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            font-size: 36px;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #666;
        }
		 .profile-pic {
            width: 150px; /* Lebar foto profil */
            height: 150px; /* Tinggi foto profil */
            border-radius: 50%;
            margin: 20px auto;
            overflow: hidden;
        }
		img{
			width: 150px;
			height: 200px;
		}
		 .social-links {
            margin-top: 20px;
        }
        .social-link {
            margin: 0 10px;
            font-size: 24px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="card">
	<div class="profile-pic">
            <img src="sandika.jpg" alt="Foto Profil"> <!-- Ganti 'profile.jpg' dengan URL atau path foto profil Anda -->
        </div>
        <h1>Profil Diri</h1>
        <?php
        $nama = "Sandika";
        $umur = "25 tahun" ;
        $alamat = "Kp. Rancamanyar Rt/Rw 04/26 Desa <br> Margamukti Kec. Pangalengan Kab. Bandung Prov. Jawa Barat";
        $pekerjaan = "IT Support Technician";
        ?>

        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>Umur:</strong> <?php echo $umur; ?></p>
        <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
        <p><strong>Pekerjaan:</strong> <?php echo $pekerjaan; ?></p>
		
		<div class="social-links">
            
			<a href="https://www.facebook.com/sandikagbg?locale=id_ID" target="_blank">
            <i class="fab fa-facebook  fa-2x"></i> <!-- Ikon Facebook -->
        </a>
        <a href="https://www.instagram.com/sandikag/" target="_blank">
            <i class="fab fa-instagram  fa-2x"></i> <!-- Ikon Instagram -->
        </a>
        <a href="https://www.linkedin.com/in/sandi-ka-46013b227" target="_blank">
            <i class="fab fa-linkedin fa-2x"></i> <!-- Ikon LinkedIn -->
        </a>
        </div>
		
    </div>
</body>
</html>
