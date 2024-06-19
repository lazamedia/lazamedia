@extends('layouts.main')

@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake Game</title>
    <link rel="stylesheet" href="css/daftar.css">
</head>
<body>
    <div class="kolom1 mt-20" style="font-family: Poppins, sans-serif">
        <h1>Snake Game</h1>
        <div><h4>Score: <span id="score">0</h4></span></div>
        <p class="text text-danger">*Maaf game masih dalam tahap pengembangan</p>
        {{-- <div>High Score: <span id="highscore">0</span></div> --}}
    </div>
    {{-- <h1>Snake Game</h1>
    <div class="score-container">
        <div>Score: <span id="score">0</span></div>
        <div>High Score: <span id="highscore">0</span></div>
    </div> --}}
    <div class="game-container">
        <canvas id="gameCanvas" width="400" height="400"></canvas>
    </div>
    <div class="button-container">
        <button id="playBtn">Play</button>
        <button id="restartBtn">Restart</button>
    </div>
    <div class="control-buttons">
        <button id="upBtn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z"/>
          </svg></button>
        <div>
            <button id="leftBtn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223"/>
              </svg></button>
            <button id="downBtn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
              </svg></button>
            <button id="rightBtn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671"/>
              </svg></button>
        </div>
    </div>
    <div id="winPopup" class="popup">
        <img src="img/win.png" alt="You Win!">
    </div>
    <div id="losePopup" class="popup">
        <img src="img/lose.png" alt="Game Over">
    </div>
    <audio id="backgroundMusic" src="mp3/soundgame.mp3" loop></audio>
    <script src="js/daftar.js"></script>
</body>
</html>


@endsection