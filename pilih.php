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
            background-image: url(foto/background.jpg);
            background-size: cover;
        }

        .head {
            display: flex;
            flex-direction: row;
            justify-content: center;
            text-align: center;

            margin-top: 30px;
        }

        .book {
            position: relative;
            border-radius: 5px;
            width: 283px;
            height: 370px;
            background-color: whitesmoke;
            -webkit-transform: preserve-3d;
            -ms-transform: preserve-3d;
            transform: preserve-3d;
            -webkit-perspective: 2000px;
            perspective: 2000px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            color: #000;
        }

        .cover {
            top: 0;
            position: absolute;
            background-color: lightgray;
            width: 100%;
            height: 100%;
            border-radius: 5px;
            cursor: pointer;
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
            -webkit-transform-origin: 0;
            -ms-transform-origin: 0;
            transform-origin: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .p-cover {
            background-color: deepskyblue;
            color: white;
            padding: 5px;
            padding-bottom: 0px;
            border-radius: 5px;
            text-align: center;
        }

        .p-cover h5 {
            font-weight: 700;
        }

        .book:hover .cover {
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
            -webkit-transform: rotatey(-90deg);
            -ms-transform: rotatey(-90deg);
            transform: rotatey(-90deg);
            transition-delay: .1s;
        }

        .a,
        .b,
        .c {
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            padding: 5px;
        }

        .b {
            margin: 0 185px 0 185px;
        }

        .main {
            display: flex;
            flex-direction: row;
            justify-content: center;

            background-color: rgba(255, 255, 255, 0.85);
            padding: 30px;
            padding-top: 45px;
            margin: 40px 0 40px 0;
            border-radius: 30px;
        }

        .card-body {
            border: 5px solid deepskyblue;
            border-top: 0px;
        }

        .c-two {
            margin: 0 100px 0 100px;
        }

        .foot {
            width: 100%;
            height: 47.5px;
            background-color: deepskyblue;
            margin-top: 1px;
            font-weight: 700;
        }

        .foot p {
            padding-top: 8px;
            margin-bottom: 0px;
            text-align: center;
        }
    </style>
</head>

<body>
    <script src="bootstrap/js/bootstrap.js"></script>
    <form action="proses.php" method="post">
        <div class="container">
            <div class="head">
                <div class="col-2 a">
                    <?php
                    session_start(); 
                    ?>
                    <h4>BILIK <?=$_SESSION['bilik']?></h4>
                </div>
                <div class="col-4 b">
                    <h6>CALON KETUA & WAKIL KETUA OSIS SMKN 2 CIMAHI TAHUN AJARAN 2023-2024</h6>
                </div>
                <div class="col-2 c">
                    <h4>USERS</h4>
                </div>
            </div>

            <div class="main">
                <div class="card c-one" style="width: 18rem;">
                    <div class="book">
                        <img src="foto/poster-1.jpg" style="width: 283px; height: 378px; border-radius: 5px;">
                        <div class="cover">
                            <div class="p-cover">
                                <h5>Fasya-Sahla</h5>
                                <img src="foto/calon_1.PNG" class="card-img-top">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Number One</h5>
                        <input type="submit" value="VOTE!" name="submit-1" class="btn btn-primary">
                    </div>
                </div>
                <div class="card c-two" style="width: 18rem;">
                    <div class="book">
                        <img src="foto/poster-2.jpg" style="width: 283px; height: 378px; border-radius: 5px;">
                        <div class="cover">
                            <div class="p-cover">
                                <h5>Endriana-Deny</h5>
                                <img src="foto/calon_2.PNG" class="card-img-top">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Number Two</h5>
                        <input type="submit" value="VOTE!" name="submit-2" class="btn btn-primary">
                    </div>
                </div>
                <div class="card c-three" style="width: 18rem;">
                    <div class="book">
                        <img src="foto/poster-3.png" style="width: 283px; height: 378px; border-radius: 5px;">
                        <div class="cover">
                            <div class="p-cover">
                                <h5>Tanszah-Cantika</h5>
                                <img src="foto/calon_3.PNG" class="card-img-top">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Number Three</h5>
                        <input type="submit" value="VOTE!" name="submit-3" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </div>
        <div class="foot">
        <p>&copy; 2023 Made By TEFA RPL SMKN 2 CIMAHI😘</p>
        </div>
    </form>
</body>

</html>