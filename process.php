<?php

####################################################################################################################################################
# SCRIPT CRIADO PARA AUXILIAR OS ALUNOS DO CURSO INFORMÁTICA, DISCIPLINA DE REDES DE COMPUTADORES DA ESCOLA ESTADUAL PROFESSOR FONTES -                               PROF. RUBEM                                                         #
####################################################################################################################################################

?>

<html>
<head>
<style type="text/css">
#wrapper {
	
	width:950px;
	 height:auto;
	 padding: 13px;
	 margin-right:auto;
	 margin-left:auto;
	 background-color:#fff;
}
</style>
</head>
<?php 

	$fid = $_GET['id'];

?>
<body bgcolor="#e1e1e1">

<?php include_once("analyticstracking.php") ?> <!-- Analyctis do google -->

<div id="wrapper">

<br />
<br />

<?php

	$answer1 = $_POST['answerOne'];
	$answer2 = $_POST['answerTwo'];						
	$answer3 = $_POST['answerThree'];		
	$answer4 = $_POST['answerfour'];
	$answer5 = $_POST['answerfive'];
	$answer6 = $_POST['answersix'];	
	$answer7 = $_POST['answerseven'];
	$answer8 = $_POST['answereight'];
	$answer9 = $_POST['answernine'];
	$answer10 = $_POST['answerten'];
	$answer11 = $_POST['answereleven'];	
	$answer12 = $_POST['answertwelve'];	
	$answer13 = $_POST['answerThirteen'];	
	$answer14 = $_POST['answerFourteen'];
	$answer15 = $_POST['answerFifteen'];
	$answer16 = $_POST['answerSixteen'];
	$answer17 = $_POST['answerSeventeen'];
	$answer18 = $_POST['answerEighteen'];
	$answer19 = $_POST['answerNineteen'];
	$answer20 = $_POST['answerTwenty'];
	$answer21 = $_POST['answerTwentyone'];
	$answer22 = $_POST['answerTwentytwo'];
	$answer23 = $_POST['answerTwentythree'];
	$answer24 = $_POST['answerTwentyfour'];
	$answer25 = $_POST['answerTwentyfive'];
	$answer26 = $_POST['answerTwentysix'];
	$answer27 = $_POST['answerTwentyseven'];
	$answer28 = $_POST['answerTwentyeight'];
	$answer29 = $_POST['answerTwentynine'];
	$answer30 = $_POST['answerThirty'];


	if ($answer1 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer1 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer1 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

	if ($answer2 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer2 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer2 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

	if ($answer3 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer3 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer3 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

	if ($answer4 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer4 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer4 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

	if ($answer5 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer5 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer5 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

	if ($answer6 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer6 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer6 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

	if ($answer7 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer7 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer7 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer8 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer8 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer8 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
	}

    if ($answer9 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer9 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer9 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
	}

    if ($answer10 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer10 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer10 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
	}

    if ($answer11 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer11 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer11 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
	}	

	if ($answer12 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer12 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer12 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
	}	

	if ($answer13 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer13 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer13 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
	}

	if ($answer14 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer14 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer14 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
	}

	if ($answer15 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer15 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer15 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
	}

	if ($answer16 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer16 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer16 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
	}

	if ($answer17 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer17 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer17 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer18 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer18 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer18 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer19 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer19 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer19 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer20 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer20 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer20 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer21 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer21 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer21 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer22 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer22 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer22 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer23 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer23 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer23 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer24 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer24 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer24 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer25 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer25 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer25 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer26 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer26 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer26 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer27 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer27 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer27 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer28 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer28 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer28 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer29 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer29 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer29 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

    if ($answer30 == "C"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce acertou <br> </font></center>";   		
    }
	if ($answer30 == "A"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }
	if ($answer30 == "B"){
	     echo "<center><font face='Berlin Sans FB' size='8'>Voce errou <br> </font></center>";   		
    }

?>

<form action='redes.php' method='post' id='quizForm' id='4'>

     
     <input type='submit' value='Continuar' />
    
</form>

</div><!--- end of wrapper div --->

</body>
</html>