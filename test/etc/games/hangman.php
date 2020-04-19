<?php
$path = pathinfo($_SERVER['REQUEST_URI']);
$title = "auto";
require(substr(dirname(__FILE__), 0, -5) . '/loader.php');
require( TEKA . '/header.php');
require( TEKA . '/body-header.php');
?>
        <script src="<?php echo GAMES . '/hangman.js'; ?>"></script>
        <div class="row">
            <div class="col-12 col-lg-8 col-md-8 col-sm-12 mx-auto">

                <h1 class="text-center"><strong>Hangman</strong></h1>
                <p class="text-center">Hangman it is a game in which your goal is to guess the word. Also you can lose, if you don't have attempts in my option.</p>
                <div id="game" style="border: solid 1px #000; text-align: center;">
                    <h1 id="text">Hangman</h1>
                    <p id="help"></p>
                    <input type="text" id="t" maxlength="1"><br />
                    <input type="button" value="Ok" id="ok">
                    <input type="button" value="Quit" id="q"><br />
                    <span class="err" style="display: none;"></span>
                    <canvas id="canvas" width="400" height="400"></canvas>
                </div>
                <!--<h1 class="text-center"><strong>How to play</strong></h1>
                <p>To play my alert/prompt option follow the instrution:<br/>
                1. When you start game show to you your progres<br/><p>
                <img src="<?php //echo IMG . '/1.png' ?>" >
                <p>In 1 letters guessed, in 2 your attempts<br/>
                <br/>2. Game ask you for a guess<br/></p>
                <img src="<?php //echo IMG . '/2.png' ?>" >
                <p>In 1 entry field enter here a single letter and click on 2, in 2 click on the bottom to cnfirm your and then the guess will be send to the game,
                  in 3 click on the botton to quit the game<br/>
                3. IF you see it<br/></p>
                <img src="<?php //echo IMG . '/3.png' ?>" >
                <p>It's mean that you did't enter anything or enter more then one symbol<br/>
                4. In the end<br/>
                When you guess the word or attempts is end, the first it show your progres without attempts<br/></p>
                <img src="<?php //echo IMG . '/4.png' ?>" >
                <p>If you win game show to you "Good job! The anser was " + your word<br/></p>
                <img src="<?php //echo IMG . '/5.png' ?>" >
                <p>In option that you lose or quit it show to you "You lose or quit." and "So the word was " + your word word<br/></p>
                <img src="<?php //echo IMG . '/6.png' ?>" >
                <br/>
                <img src="<?php //echo IMG . '/7.png' ?>" > -->
                <h1 class="text-center"><strong>Game code</strong></h1>
                <code>
                    <pre>
$(document).ready( (e) => {
    
    var r = $(".err");
    var p = $("#help");
    var inp = $("#t");
    var h1 = $("#text");
    var ok = $("#ok");
    var q = $("#q");
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    ctx.lineWidth = 4;
    var drawStickman = function (x) {
        if(x === 1){
            ctx.strokeRect(75, 10, 20, 20);
        } else if(x === 2){
            ctx.beginPath();
            ctx.moveTo(85, 30);
            ctx.lineTo(85, 85);
            ctx.stroke();
        } else if(x === 3){
            ctx.beginPath();
            ctx.moveTo(85, 55);
            ctx.lineTo(65, 40);
            ctx.stroke();
        } else if (x === 4){
            ctx.beginPath();
            ctx.moveTo(85, 55);
            ctx.lineTo(105, 40);
            ctx.stroke();
        } else if (x === 5){
            ctx.beginPath();
            ctx.moveTo(85, 85);
            ctx.lineTo(65, 115);
            ctx.stroke();
        } else if(x === 6){
            ctx.beginPath();
            ctx.moveTo(85, 85);
            ctx.lineTo(105, 115);
            ctx.stroke();
        }
    };
    var text = function (text, wrongArr) {
        ctx.font = "20px Courier";
        ctx.fillStyle = "Black";
        ctx.textAlign = "left";
        ctx.textBaseline = "top";
        ctx.fillText(npch, 10, 125);
        ctx.fillText(text, 10, 125);
        ctx.clearRect(370, 0, 30, 400);
        ctx.font = "40px Courier";
        ctx.textAlign = "right";
        for(var i = 0; i < wrongArr.length; i++){
            if(typeof wrongArr[i] != undefined){
                ctx.fillText(wrongArr[i], 400, 40 * i);
                ctx.beginPath();
                ctx.moveTo(370, (40 * i) + 20);
                ctx.lineTo(400, (40 * i) + 20);
                ctx.stroke();
            }
        };
    };

    var words = [
        . . .<!-- I don't want to someone know the words see it in '/hangman.js' -->
    ];

    var word = words[Math.floor(Math.random() * words.length)];
    var answerArray = [];
    var unAnswerArray = [];
    for (var i = 0; i < word.length; i++) {
        answerArray[i] = "_";
        unAnswerArray[i] = word[i];
    }
    var npch = answerArray.join(" ");
    var trys = word.length + 2;
    
    var remainingLetters = word.length;
    var wrong = 0;
    var wrong2 = 0;
    ok.click((e) =>{
        r.hide().text("");
        if (remainingLetters > 0 && trys > 0) {
            
            var guess = inp.val();
            trys--;
            if(guess.length != 0){
                var lowerGuess = guess.toLowerCase();
                for (var j = 0; j < word.length; j++) {
                    if (word[j] === lowerGuess) {
                        if ( answerArray[j] === "_" ) {
                            answerArray[j] = lowerGuess;
                            remainingLetters--;
                            unAnswerArray.splice(unAnswerArray.indexOf(lowerGuess), 1);
                        } else {
                            wrong2++;
                        }
                    } else {
                        wrong2++;
                    }
                }
                if(wrong2 === word.length){
                    wrong2 = 0;
                    wrong++;
                    drawStickman(wrong);
                }
                text(answerArray.join(" "), unAnswerArray);
                p.text(answerArray.join(" ") + " , attempts remained: " + trys);
            } else {
                r.show().text("Please enter a single letter.");
                trys++;
            }
            if (remainingLetters === 0) {
                h1.text("Good job! The anser was " + word);
                r.hide();
                p.hide();
            }
        } else {
            if (remainingLetters === 0) {
                h1.text("Good job! The anser was " + word);
                r.hide();
                p.hide();
            } else {
                h1.text("Game over, so the word was " + word);
                r.hide();
                p.hide();
            }
        }
    });
    q.click((e) => {
        if(remainingLetters != 0){
        trys = 0;
        h1.text("Game over, so the word was " + word);
        r.hide();
        p.hide();
        }
    })
    
});
                    </pre>
                </code>
            </div>
        </div>
    </body>
</html>