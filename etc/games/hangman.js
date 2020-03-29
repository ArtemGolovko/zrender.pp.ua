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
        "javascript",
        "monkey",
        "amazing",
        "pancake",
        "account",
        "expansion",
        "insurance",
        "learning",
        "organization",
        "punishment",
        "summer",
        "answer",
        "cushion",
        "engine",
        "hammer",
        "library",
        "orange",
        "pencil",
        "potato",
        "receipt",
        "scissors"
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
