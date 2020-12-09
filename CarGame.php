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
            <script language='JavaScript' type='text/JavaScript'>
            <!--
                function reset1(){
                    clearTimeout(my_time);
                    document.getElementById('i1').style.left= "500px";
                    document.getElementById('i1').style.top= "100px";
                    document.getElementById("msg").innerHTML="";
                }

                function move_img(str) {    
                    var x=document.getElementById('i1').offsetTop;
                    x= x +100;
                    document.getElementById('i1').style.top= x + "px";
                }

                function disp(){
                    var step=1; // Change this step value
                    //alert("Hello");
                    var y=document.getElementById('i1').offsetTop;
                    var x=document.getElementById('i1').offsetLeft;
                    if(y < 600 ){
                        y= y +step;
                        document.getElementById('i1').style.top= y + "px"; // vertical movment
                    }else{
                        if(x < 800){
                            x= x +step;
                            document.getElementById('i1').style.left= x + "px"; // horizontal movment
                    }
                }
                //////////////////////
                }   

                function timer(){
                    disp();
                    var y=document.getElementById('i1').offsetTop;
                    var x=document.getElementById('i1').offsetLeft;
                    document.getElementById("msg").innerHTML="X: " + x  + " Y : " + y
                    my_time=setTimeout('timer()',10);
                }
                //-->
            </script>
            <img src= "FAF.png" id='i1' style="position:absolute; left: 500; top: 100;">  
            <br><br><br><br>
            <input type=button onClick=timer() value='Start'>
            <input type=button onClick=reset1() value='Reset'>
            <div id='msg'></div>
        </footer>
    </body>
</html>