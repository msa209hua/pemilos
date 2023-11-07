<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body style="background-color: #38B6FF>
    <script src="bootstrap/js/bootstrap.js"></script>

    <form action="proses.php" method="post">
        <center>
        <table style="background-color: #FFDFDF" width=100%>
            <tr>
                <td style="background-color: #38B6FF"><img src="foto/1.png" width="281px" height="430px"></td>
                <td style="background-color: #38B6FF"><img src="foto/2.png" width="281px" height="430px"></td>
                <td style="background-color: #38B6FF"><img src="foto/3.png" width="281px" height="430px"></td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary" name="submit_1">Vote!</button></td>
                <td><button type="submit" class="btn btn-primary" name="submit_2">Vote!</button></td>
                <td><button type="submit" class="btn btn-primary" name="submit_3">Vote!</button></td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>