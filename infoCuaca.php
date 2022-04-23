<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Berhasil Login Owner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            background-image: url(img/download.jpg);
            color: white;
        }
        nav {
            background-color: rgba(0, 0, 0, .6);
            padding-top: 20px;
            padding-bottom: 5px;
            box-sizing: border-box;
        }
        nav ul {
            display: flex;
            list-style: none;
            width: 50%;
            justify-content: space-between;
            padding-top: 6px;
        }
        nav ul li a{
            text-decoration: none;
            color: rgb(158, 158, 158);
        }
        nav ul li a:hover{
            color: white;
        }
        #cityInput, #cityName, #inputContainer,button{
        margin: 3px;
        padding:5px;
        text-align:center;
        font-size:20px;
        font-weight:bold;
        }

        #weatherContainer{
            position: absolute;
            top: 70%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            height: 350px;
            width: 1300px;
            border: 5px solid rgba(255, 255, 255, 0.829);    
            border-radius: 10px;
        }

        #iconsContainer{
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            height: 300px;
            width: 1200px;    
            border: 5px solid rgb(255, 255, 255);    
            border-radius: 10px;
        }

        .icons{
            display: inline-bock;
            float: left;
            height: 250px;
            width: 190px;
            margin: 20px;
            border: 5px solid rgb(255, 255, 255);
            border-radius: 10px;
        }

        .image{
            height: 140px;
            width: 100%;
        }

        .imgClass{
            height: 140px;
            width: 100%;
        }

        .weather{
            margin: 7px;
        /*  background-color: rgb(106, 215, 255); */
            border-radius: 7px;
            text-align: center;
            font-weight: bold;
        }

        .minValues{
            text-align: center;
            display: inline-block;
            border-radius: 5px;
            height: 25px;
            width: 85px;
            margin: 0;
            margin-bottom: 5px;
            margin-left: 5px;
        }


        .maxValues{
            text-align: center;
            display: inline-block;
            border-radius: 5px;
            height: 25px;
            width: 85px;
            margin: 0;
            margin-bottom: 5px;
            margin-left: 5px;
        }
    </style>
</head>
<body onload="DefaultScreen()">
    <nav class="d-flex justify-content-around">
        <h4 class="pt-1">SEEDS_UP</h4>
        <ul>
            <li><a href="tampilanOwner.php"><h5>Dashboard</h5></a></li>
            <li><a href="laporanPencatatan.php"><h5>Laporan Pencatatan</h5></a></li>
            <li><a href="infoCuaca.php"><h5 style="color: white;">Info Cuaca</h5></a></li>
            <li><a href="pemasaran.php"><h5>Pemasaran</h5></a></li>
        </ul>
    </nav>
    
    <center>
        <h1 id="Para1">Cuaca Dalam 5 Hari Kedepan</h1>
        <p id="inputContainer">Cari Kota : <input type="text" id="cityInput"><button type="button" onclick="GetInfo()">Cari</button></p>
                
        <h2 id="cityName">Perkiraan cuaca di kota Jember</h2>
    </center>

    <div id = "weatherContainer">
        <div id="iconsContainer">    
            <div class = "icons">
                <p class="weather" id="day1"></p>
                <div class="image"><img src="img/dots.png" class="imgClass" id="img1"></div>
                <p class="minValues" id="day1Min">Loading...</p>
                <p class="maxValues" id="day1Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day2"></p>
                <div class="image"><img src="img/dots.png" class="imgClass" id="img2"></div>
                <p class="minValues" id="day2Min">Loading...</p>
                <p class="maxValues" id="day2Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day3"></p>
                <div class="image"><img src="img/dots.png" class="imgClass" id="img3"></div>
                <p class="minValues" id="day3Min">Loading...</p>
                <p class="maxValues" id="day3Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day4"></p>
                <div class="image"><img src="img/dots.png" class="imgClass" id="img4"></div>
                <p class="minValues" id="day4Min">Loading...</p>
                <p class="maxValues" id="day4Max">Loading...</p>
            </div>
            <div class = "icons">
                <p class="weather" id="day5"></p>
                <div class="image"><img src="img/dots.png" class="imgClass" id="img5"></div>
                <p class="minValues" id="day5Min">Loading...</p>
                <p class="maxValues" id="day5Max">Loading...</p>
            </div>
        </div>
    </div>


    
    <script src="script.js"></script>
</body>