<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="../../assets/css/style.css">

</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="../../assets/img/logo.png" class="logo">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SPECIFICATIONS</a></li>
                <li><a href="#">PRODUCTS</a></li>
                <li><a href="#">CONNECT</a></li>

            </ul>
        </div>

        <div class="content">
            <div class="left-col">
                <h1>THE<br>REAL<br>SOUND</h1>
            </div>
            <div class="right-col">
                <p>Click Here To Listen</p>
                <img src="../../assets/img/play.png" id="icon">
            </div>
        </div>
    </div>

    <audio id="mySong">
        <source src="../../assets/img/song.mp3" type="audio/mp3">
    </audio>

    <script>
        var mySong = document.getElementById("mySong");
        var icon = document.getElementById("icon");

        icon.onclick = function () {
            if (mySong.paused) {
                mySong.play();
                icon.src = "../../assets/img/pause.png"

            } else {
                mySong.pause();
                icon.src = "../../assets/img/play.png"
            }
        }

    </script>

</body>

</html>
