
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Brrrrr</title>

</head>
<body>

    
<!-- Navbar -->
<div class="topnav">
  <div class="topnav-right">
    <a href="premium.html">Premium</a>
    <a href="Logout.html">Logout</a>
  </div>
</div>

<!-- Side navbar -->
<div class="sidenav">
     <div class="logo">
        <img src="logo.png" class="img-fluid">
      </div>
  <a href="MainPage.php">Home</a>
  <a href="Search.html">Search</a>
  <a href="tophits.html">Library</a>
  <a href="contact.html">Contact</a>
  <img id="image" src="img/0.png" controls>
  <img id="song" src="song/0.png" controls>
</div>

<!-- Main content -->


<div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="tophits.jpg" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Worldwide Hits</h5>
                    <a href="tophits.html">
                    <button>Play</button>
                    </a>
   </div>
  </div>
 </div>
</div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="hiphop.jpg" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Hiphop Hits</h5>
                    <a href="tophits.html">
                    <button>Play</button>
                    </a>
</div>
</div>
                </div>
            </div>
        </div>
    </div>

  



<!-- 
<div id="demoList"><
  /*
  $songs = glob("audio/*.{mp3,webm,ogg,wav}", GLOB_BRACE);
 
  if (is_array($songs)) { foreach ($songs as $k=>$s) {
    printf("<div data-src='%s' class='song'>%s</div>", $s, basename($s));
  }} else { echo "No songs found!"; }
  */
</div>
-->
<!-- Footer --> 

<footer>
<!-- Music player -->
<div id="top-footer">
<audio id="player" src="Audio/0.mp3" controls></audio>
<button onClick="music_backer()"><</button>
<div id="songPlayPause" onclick="playPause('song')">
<button class="btn"><i class="bi bi-music-note-beamed">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
  <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
  <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
  <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
</svg>
</i></button>
</div>
<button onClick="music_changer()">></button>
<div id="songPlay" onclick="play('song')">
</div>

<div id="songPause" onclick="pause()">
</div>
<!-- Volume slider -->
</div>

<div id ="bottom-footer">
<!-- Time slider -->
<h5 id="timeIndicator"></h5>
<input type="range" id="progressSlider">

<!-- Volume slider -->
<div id="volumeslider">
<span id="vol-icon"><i class="fa fa-volume-up"></i></span><input type="range" id="volume-slider">
</div>

</div>
</footer>

<!-- Js link -->
<script src="audio.js"></script> 
</body>
</html>