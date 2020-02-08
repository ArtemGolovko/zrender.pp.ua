$(document).ready( (e) => {
    
    var r = $(".err");
    var p = $("#help");
    var inp = $("#t");
    var h1 = $("#text");
    var ok = $("#ok");
    var q = $("#q");
    
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
