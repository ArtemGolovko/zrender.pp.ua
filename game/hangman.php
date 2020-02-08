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
    
    var words = [
        . . .<!-- I don't want to someone know the words see it in '/hangman.js' -->
    ];
    
    var word = words[Math.floor(Math.random() * words.length)];
    var answerArray = [];
    for (var i = 0; i < word.length; i++) {
        answerArray[i] = "_";
    }
    var trys = word.length + 2;
    
    var remainingLetters = word.length;
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
                        }
                    }
                }
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