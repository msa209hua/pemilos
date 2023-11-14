<!DOCTYPE html>
<html lang="en">
<head>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<style>

body {
  background-image: url('foto/backgroundhome2.jpg');
  background-size: contain;
}
button {
 --color: #0000FF;
 font-family: inherit;
 display: inline-block;
 width: 8em;
 height: 2.6em;
 line-height: 2.5em;
 margin: 20px;
 position: relative;
 overflow: hidden;
 border: 2px solid var(--color);
 transition: color .5s;
 z-index: 1;
 font-size: 30px;
 border-radius: 6px;
 font-weight: 300;
 color: var(--color);
}

button:before {
 content: "";
 position: absolute;
 z-index: -1;
 background: var(--color);
 height: 500px;
 width: 500px;
 border-radius: 20%;
}

button:hover {
 color: #fff;
}

button:before {
 top: 100%;
 left: 100%;
 transition: all .7s;
}

button:hover:before {
 top: -30px;
 left: -30px;
}

button:active:before {
 background: #3a0ca3;
 transition: background 0s;
}
.h1 {
    font-family: Georgia, serif;
    font-style: italic;
}
.foot {
    width: 100%;
    height: 40px;
    background-color: deepskyblue;
    margin-top: 204px;
    font-weight: 700;
        }
.foot p {
    padding-top: 8px;
    margin-bottom: 0px;
    text-align: center;
}
</style>
<body>
<script src="bootstrap/js/bootstrap.js"></script>
    <center>
        <table 
        align="center" 
        bgcolor="white" 
        width="70%" 
        height="500px" 
        style="margin-top : 120px; 
        text-align: center; 
        border-radius: 30px;
        opacity: 0.88;
        ">
        <tr>
            <td><h1 class="h1">Selamat Datang Di Pemilihan Ketua Osis</h1></td>
        </tr>
    <tr>
        <td style="padding-bottom: 50px;"><a href="pilih.php"><button>Pick Your Leader!</button></a></td>
    </tr>
    <tr>
        <td><b style="padding-left: 165px;">(ikuti kata hatimu karena pilihan ada di kamu!😘)</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="foto/smk.png"  style="padding-left: -50px;" width="40" height="40" viewBox="0 0 40 40" fill="none"><circle cx="35" cy="35" r="35">
            <img src="foto/osis.png"  width="40" height="40" viewBox="0 0 40 40" fill="none"><circle cx="35" cy="35" r="35">
            <img src="foto/kesiswaan.png"  width="40" height="40" viewBox="0 0 40 40" fill="none"><circle cx="35" cy="35" r="35">
        </td>
    </tr>
        </table>
    </center>
    <div class="foot">
    <p>&copy; 2023 Made By TEFA RPL SMKN 2 CIMAHI😘</p>
        </div>
</body>