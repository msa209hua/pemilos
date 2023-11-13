<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            background-image: url(foto/background-1.jpg);
            background-size: cover;
        }

        .head {
            display: flex;
            flex-direction: row;
            justify-content: center;
            text-align: center;

            margin-top: 30px;
        }

        .a,
        .b,
        .c {
            background-color: white;
            border-radius: 10px;
            padding: 5px;
        }

        .b {
            margin: 0 215px 0 215px;
        }

        .main {
            display: flex;
            flex-direction: row;
            justify-content: center;

            background-color: white;
            padding: 30px;
            margin: 40px 0 40px 0;
            border-radius: 30px;
        }

        .c-two {
            margin: 0 100px 0 100px;
        }
    </style>
</head>

<body>
    <script src="bootstrap/js/bootstrap.js"></script>
    <form action="proses.php" method="post">
        <div class="container">
            <div class="head">
                <div class="col-2 a">
                    <h4>NOMOR BILIK</h4>
                </div>
                <div class="col-4 b">
                    <h3>CALON KETUA/WAKIL OSIS</h3>
                </div>
                <div class="col-2 c">
                    <h4>USERS</h4>
                </div>
            </div>
    
            <div class="main">
                <div class="card c-one" style="width: 18rem;">
                    <img src="foto/calon_3.PNG" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Number One</h5>
                        <p class="card-text">Fasya-Sahla</p>
                        <p>Calon Ketua & Wakil Ketua OSIS SMKN 2 Cimahi tahun ajaran 2023/2024 Nomor Urut <b>1</b></p>
                        <input type="submit" value="VOTE!" name="submit-1" class="btn btn-primary">
                    </div>
                </div>
                <div class="card c-two" style="width: 18rem;">
                    <img src="foto/calon_2.PNG" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Number Two</h5>
                        <p class="card-text">Endriana-Deny</p>
                        <p>Calon Ketua & Wakil Ketua OSIS SMKN 2 Cimahi tahun ajaran 2023/2024 Nomor Urut <b>2</b></p>
                        <input type="submit" value="VOTE!" name="submit-2" class="btn btn-primary">
                    </div>
                </div>
                <div class="card c-three" style="width: 18rem;">
                    <img src="foto/calon_3.PNG" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Number Three</h5>
                        <p class="card-text">Tanszah-Cantika</p>
                        <p>Calon Ketua & Wakil Ketua OSIS SMKN 2 Cimahi tahun ajaran 2023/2024 Nomor Urut <b>3</b></p>
                        <input type="submit" value="VOTE!" name="submit-3" class="btn btn-primary">
                    </div>
                </div>
            </div>
            <div class="foot">
                
            </div>
        </div>
    </form>
</body>

</html>