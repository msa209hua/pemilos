<!DOCTYPE html>
<html lang="en">
<head>

</head>
<style>
    
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
 font-size: 17px;
 border-radius: 6px;
 font-weight: 500;
 color: var(--color);
}

button:before {
 content: "";
 position: absolute;
 z-index: -1;
 background: var(--color);
 height: 150px;
 width: 200px;
 border-radius: 50%;
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

table{}
</style>
<body bgcolor="#00A9FF">
    <center>
        <table align="center" border="4" bgcolor="white" width="70%" height="500px" style="margin-top : 120px; text-align: center;" >
    <tr>
        <td><button>Masuk!</button></td>
    </tr>
        </table>
    </center>
</body>
</html>