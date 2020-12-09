<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name = "description" content = "Math learning car game">
        <title>Car Game</title>
    </head>

    <body style = "background-color:palegoldenrod">
        <header>
            <h1 style = "color:purple">Car Game</h1> 
            <hr/>   
            
        </header>
        
        <nav>
            
        </nav>
        <main>
            <?php 
                $correct = 0;
                $question = 0;
                $ans = null;
                $op = rand(0,1); 
                if($op == 0){
                    $ran1 = rand(0,49); 
                    $ran2 = rand(0, 49); 
                    $sum = $ran1 + $ran2;
                    echo "<h1> $ran1 + $ran2 =</h1>"; 
                } else{
                    $ran1 = rand(0,49); 
                    $ran2 = rand(0, 49); 
                    if ($ran1 > $ran2){
                        $sum = $ran1 - $ran2;
                        echo "<h1> $ran1 - $ran2 =</h1>"; 
                    } else{
                        $sum = $ran2 - $ran1;
                        echo "<h1> $ran2 - $ran1 =</h1>";
                    }
                }
            ?>
            <input type="text" name="answer" id="answer"/>
            <input type="submit" name="userGuess" id="userGuess" value="Answer" />
            <script src="base.js"></script>
	<script>
		window.onload = function init(){
			var btn = $("userGuess")
			btn.onclick = function(){
				var ans_obj = $("answer") // document.getElementById("username")
				var guess = ans_obj.value;

				// console.log(uname + password)
				$ajax({
					method: 'post',
					url: '../carGamez.php',
					data: guess,
					success: function(result){
						var res = JSON.parse(result)
						console.log(res)
						

					}
				}
				)
			}
			
		}

	</script>
            <?php
                //var_dump($_GET);
                if (isset($_POST["answer"])){
                    $ans = $_POST["answer"]; 
                    echo $ans;
                    $ansArray = array();
                    if($sum == ((int)$ans)){
                        echo "<h3> $ans correct </h3>";
                        $correct = $correct + 1;
                        $ansArray [$question] = "$ans correct";
                        $question = $question + 1;
                        echo $question;
                    }
                    else {
                        echo "<h3> $ans wrong </h3>";
                        $ansArray [$question] = "$ans wrong";
                        $question = $question + 1;
                        echo $question;
                    }

                }
                // var_dump($ansArray);
            ?>
        </main>

        <footer>

        </footer>
    </body>
</html>

