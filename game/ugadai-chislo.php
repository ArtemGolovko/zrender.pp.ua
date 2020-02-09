<?php
$title = "numg";
require(substr(dirname(__FILE__), 0, -5) . '/loader.php');
require( TEKA . '/header.php');
?>
		<div class="row">
			<div class="col-12 col-lg-8 col-md-8 col-sm-12 mx-auto">
				<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
				<div id="container">
					<h1>Угадай число</h1> 
					<h2>Осталось попыток: <span></span></h2>
					<span>Введите число от 1 до 100</span><br/>
					<input type = "number" id = "textArea" class = "textArea"> <br/>
					<span id="errorText"></span><br/>
					<input type = "submit" value = "Проверить" class = "submit" id = "submit"> 
					<h3></h3>
				</div>

				<script type = "text/javascript">
				    var number = Math.floor(Math.random() * 100 + 1);  
				    var trys = 10; 
					$("h2 span").text(trys);

				    document.getElementById("submit").onclick = function(){ 
					
					var guess = document.getElementById("textArea").value; 
					
					if(trys > 0){
					$("#errorText").text("");
					if(guess == number) {   
						$("#container").text("");
						$("#container").append("<h1>Вы выиграли!!!</h1>");
						$("#container").append("<button id=\"reload\">Сыграть еще раз</button>");
						trys = 0;
						document.getElementById("reload").onclick = function(){
							window.location.reload();
						}
					} else if (guess == 0 || guess > 100 || guess[0] === "-"){
						$("#errorText").text("Число должно быть от 1 до 100");
					} else if(guess > number) {
						trys--; 
						$("h3").text("Подсказка: число меньше");
						$("h2 span").text(trys);
					} else if(guess < number) {
						trys--; 
				       $("h3").text("Подсказка: число больше");
					   $("h2 span").text(trys);
					}
					} else {
						$("#container").text("");
						$("#container").append("<h1>Вы прогирали!!!</h1>");
						$("#container").append("<button id=\"reload\">Сыграть еще раз</button>");
						document.getElementById("reload").onclick = function(){
							window.location.reload();
						}
					}
				}

				</script>
			</div>
		</div>
	</body>
</html>