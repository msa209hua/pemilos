<!DOCTYPE html>
<html lang="en">
<head>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<style>

body {
  background-image: url('foto/backgroundhome2.jpg');
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
 font-weight: 500;
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
    margin-top: 107px;
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
        <td style="padding-bottom: 125px;"><a href="pilih.php"><button>Pick Your Leader!</button></a></td>
    </tr>
    <tr>
        <td><b>(ikuti kata hatimu karena pilihan ada di kamu!)</b>
    </tr>
        </table>
    </center>
    <div class="foot">
            <p>lorem &copy; blablabla</p>
        </div>
</body>