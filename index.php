<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="text-center mt-5">
                    <h1>Data Diri</h1>
                    <p>MSIB BATCH 5</p>
                </div>
                <hr>
                <h2>Tentang Saya</h2>
                <p>Saya adalah mahasiswa studi independen batch 5 yang ikut ke dalam GITS.iD.</p>
                <div class="img"> 
                    <img src="gambardiri.webp" alt="Foto Diri" class="img-fluid mx-auto"> 
                </div>

                <h3>Halo, Saya...</h3>
                <div class="card">
                    <div class="card-body">
                        <?php
                            echo "<p>Rinaldi Fransius Simbolon</p>";
                            echo "<p>UPN VETERAN JAWA TIMUR</p>";
                        ?>
                    </div>
                </div>

                <h2>Kontak</h2>
                <?php
                    echo "<p>Email: rinaldisimbolon9@gmail.com</p>";
                    echo '<p>LinkedIn: <a href="https://www.linkedin.com/in/rinaldi-simbolon-817400255/">LinkedIn Profil</a></p>';
                ?>
            </div>
        </div>
    </div>
</body>
</html>
