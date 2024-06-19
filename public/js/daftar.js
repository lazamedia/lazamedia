const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');
const backgroundMusic = document.getElementById('backgroundMusic');

const box = 20;
let snake = [];
snake[0] = { x: 9 * box, y: 10 * box };
let food = {
    x: Math.floor(Math.random() * 19 + 1) * box,
    y: Math.floor(Math.random() * 19 + 1) * box
};
let score = 0;
let highScore = localStorage.getItem('highScore') || 0;
let d;
let game;
let speed = 200;
let gameOverSound = new Audio('gameover.mp3');
let victorySound = new Audio('victory.mp3');

document.getElementById('highscore').innerText = highScore;

document.addEventListener('keydown', direction);
document.getElementById('playBtn').addEventListener('click', startGame);
document.getElementById('restartBtn').addEventListener('click', restartGame);

document.getElementById('upBtn').addEventListener('click', () => setDirection('UP'));
document.getElementById('leftBtn').addEventListener('click', () => setDirection('LEFT'));
document.getElementById('downBtn').addEventListener('click', () => setDirection('DOWN'));
document.getElementById('rightBtn').addEventListener('click', () => setDirection('RIGHT'));

function direction(event) {
    let key = event.keyCode;
    if (key == 37 && d != 'RIGHT') {
        d = 'LEFT';
    } else if (key == 38 && d != 'DOWN') {
        d = 'UP';
    } else if (key == 39 && d != 'LEFT') {
        d = 'RIGHT';
    } else if (key == 40 && d != 'UP') {
        d = 'DOWN';
    }
}

function setDirection(dir) {
    if (dir == 'LEFT' && d != 'RIGHT') {
        d = 'LEFT';
    } else if (dir == 'UP' && d != 'DOWN') {
        d = 'UP';
    } else if (dir == 'RIGHT' && d != 'LEFT') {
        d = 'RIGHT';
    } else if (dir == 'DOWN' && d != 'UP') {
        d = 'DOWN';
    }
}

function startGame() {
    clearInterval(game);
    backgroundMusic.play();
    game = setInterval(draw, speed);
}

function restartGame() {
    clearInterval(game);
    score = 0;
    speed = 200;
    document.getElementById('score').innerText = score;
    snake = [{ x: 9 * box, y: 10 * box }];
    d = undefined;
    food = {
        x: Math.floor(Math.random() * 19 + 1) * box,
        y: Math.floor(Math.random() * 19 + 1) * box
    };
    document.getElementById('winPopup').style.display = 'none';
    document.getElementById('losePopup').style.display = 'none';
    startGame();
}

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Draw snake
    for (let i = 0; i < snake.length; i++) {
        ctx.fillStyle = (i === 0) ? 'green' : 'white';
        ctx.beginPath();
        ctx.arc(snake[i].x + box / 2, snake[i].y + box / 2, box / 2, 0, Math.PI * 2);
        ctx.fill();
        ctx.strokeStyle = 'red';
        ctx.stroke();
    }

    // Draw food
    ctx.fillStyle = 'red';
    ctx.beginPath();
    ctx.arc(food.x + box / 2, food.y + box / 2, box / 2, 0, Math.PI * 2);
    ctx.fill();

    let snakeX = snake[0].x;
    let snakeY = snake[0].y;

    if (d == 'LEFT') snakeX -= box;
    if (d == 'UP') snakeY -= box;
    if (d == 'RIGHT') snakeX += box;
    if (d == 'DOWN') snakeY += box;

    // Teleport snake if it hits the wall
    if (snakeX < 0) snakeX = canvas.width - box;
    if (snakeX >= canvas.width) snakeX = 0;
    if (snakeY < 0) snakeY = canvas.height - box;
    if (snakeY >= canvas.height) snakeY = 0;

    if (snakeX == food.x && snakeY == food.y) {
        score++;
        speed *= 0.95; // Increase speed
        clearInterval(game);
        game = setInterval(draw, speed);
        document.getElementById('score').innerText = score;
        food = {
            x: Math.floor(Math.random() * 19 + 1) * box,
            y: Math.floor(Math.random() * 19 + 1) * box
        };
    } else {
        snake.pop();
    }

    let newHead = { x: snakeX, y: snakeY };

    if (collision(newHead, snake)) {
        clearInterval(game);
        gameOverSound.play();
        backgroundMusic.pause();
        if (score > highScore) {
            highScore = score;
            localStorage.setItem('highScore', highScore);
            document.getElementById('highscore').innerText = highScore;
        }
        document.getElementById('losePopup').style.display = 'block';
        return;
    }

    snake.unshift(newHead);

    if (score >= 20) {
        clearInterval(game);
        victorySound.play();
        backgroundMusic.pause();
        document.getElementById('winPopup').style.display = 'block';
        return;
    }
}

function collision(head, array) {
    for (let i = 0; i < array.length; i++) {
        if (head.x == array[i].x && head.y == array[i].y) {
            return true;
        }
    }
    return false;
}
