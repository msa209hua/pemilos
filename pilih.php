<?php
    session_start(); 
?>
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
            height: 71.5px;
            background-color: deepskyblue;
            margin-top: 1px;
            font-weight: 700;
        }

        .foot p {
            padding-top: 20.5px;
            margin-bottom: 0px;
            text-align: center;
        }

        #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
    </style>
</head>

<body>
    <script src="bootstrap/js/bootstrap.js"></script>
    <form action="proses.php" method="post">
        <div class="container">
            <div class="head">
                <div class="col-2 a">
                    
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
                        <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                        </div>
                    <div class="book">
                    <img id="myImg"src="foto/poster-1.jpg" style="width: 283px; height: 378px; border-radius: 5px;">
                        <div class="cover">
                            <div class="p-cover">
                                <h5>Fasya-Sahla</h5>
                                <img src="foto/calon_1.png" class="card-img-top">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <input type="submit" value="VOTE!" name="submit-1" class="btn btn-primary">
                    </div>
                </div>
                <div class="card c-two" style="width: 18rem;">
                    <div class="book">
                    <img id="myImg2"src="foto/poster-2.jpg" style="width: 283px; height: 378px; border-radius: 5px;">
                        <div class="cover">
                            <div class="p-cover">
                                <h5>Endriana-Deny</h5>
                                <img src="foto/calon_2.png" class="card-img-top">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <input type="submit" value="VOTE!" name="submit-2" class="btn btn-primary">
                    </div>
                </div>
                <div class="card c-three" style="width: 18rem;">
                    <div class="book">
                    <img id="myImg3"src="foto/poster-3.png" style="width: 283px; height: 378px; border-radius: 5px;">
                        <div class="cover">
                            <div class="p-cover">
                                <h5>Tanszah-Cantika</h5>
                                <img src="foto/calon_3.png" class="card-img-top">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
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
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg2");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg3");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</html>