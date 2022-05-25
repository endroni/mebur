<html>
<head>
<title>Banco</title>

<link rel="icon" 
     type="image/jpg" 
     href="icone.jpg" />

<meta http-equiv="content-type" content="text/html ; charset=utf-8"/>
<style type='text/css'>
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

<body bgcolor='#e1e1e1'>

<?php


	//Criando números random 
	$rid = rand(1,30);
	echo $rid;
?>

<div id='wrapper'>

    <center><font face='Andalus' size='5'>Banco de Dados <b>Quiz</b></font></center>
    <br />
    <br />
    <br />
    <br />

<?php

if ($rid == 1){
	echo "
    <form action='processbanco.php?id=1' method='post' id='quizForm' id='1'>
       
    	<li>
            <h3>Tratando de banco de dados. Qual das frases abaixo fala sobre INFORMAÇÃO?”</h3>
        
            <div>
                <input type='radio' name='answerOne' id='answerOne' value='A' />
                <label for='answerOneA'>A) São dados tratados</label>
            </div>
        
            <div>
                <input type='radio' name='answerOne' id='answerOne' value='B' />
                <label for='answerOneB'>B) Códigos que constituem a matéria prima da informação </label>
            </div>
        
            <div>
                <input type='radio' name='answerOne' id='answerOne' value='C' />
                <label for='answerOneC'>C) Dado que é associado a cada ocorrência de uma entidade ou de um relacionamento</label>
            </div>
            <br />
            <br />
        </li>
        <p align='center'><input type='submit' value='Está certo?' /></p>
    </form>";
}

if ($rid == 2){
	echo "

    <form action='processbanco.php?id=2' method='post' id='quizForm' id='2'>
       
        <li>
            <h3>Tratando de banco de dados. Qual das frases abaixo fala sobre DADOS?</h3>
        
            <div>
                <input type='radio' name='answerTwo' id='answerTwo' value='A' />
                <label for='answerTwoA'>A) São dados tratados</label>
            </div>
        
            <div>
                <input type='radio' name='answerTwo' id='answerTwo' value='B' />
                <label for='answerTwoB'>B) Códigos que constituem a matéria prima da informação </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwo' id='answerTwo' value='C' />
                <label for='answerTwoC'>C) Dado que é associado a cada ocorrência de uma entidade ou de um relacionamento</label>
            </div>
            <br />
            <br />
        </li>
        
     <p align='center'><input type='submit' value='Está certo?' /></p>
    </form>";
}

if ($rid == 3){	
	echo "
    <form action='processbanco.php?id=3' method='post' id='quizForm' id='3'>
        
        <li>
            <h3>Tratando de banco de dados. Qual das frases abaixo fala sobre ATRIBUTO?</h3>
        
            <div>
                <input type='radio' name='answerThree' id='answerThree' value='A' />
                <label for='answerThreeA'>A) São dados tratados</label>
            </div>
        
            <div>
                <input type='radio' name='answerThree' id='answerThree' value='B' />
                <label for='answerThreeB'>B) Códigos que constituem a matéria prima da informação </label>
            </div>
        
            <div>
                <input type='radio' name='answerThree' id='answerThree' value='C' />
                <label for='answerThreeC'>C) Dado que é associado a cada ocorrência de uma entidade ou de um relacionamento</label>
            </div>
            <br />
            <br />
        </li>
     <p align='center'><input type='submit' value='Está certo?' /></p>
</form>";

}

if ($rid == 4){
    echo "
    <form action='processbanco.php?id=4' method='post' id='quizForm' id='4'>
   
        <li>
            <h3>No banco de dados MYSQL, o comando utilizado para mudar o nome de uma ou mais tabelas é:</h3>
        
            <div>
                <input type='radio' name='answerfour' id='answerfour' value='A' />
                <label for='answerfourA'>A) RENAME TABLE.</label>
            </div>
        
            <div>
                <input type='radio' name='answerfour' id='answerfour' value='B' />
                <label for='answerfourB'>B) ALTER TABLE. </label>
            </div>
        
            <div>
                <input type='radio' name='answerfour' id='answerfour' value='C' />
                <label for='answerfourC'>C) CHANGE NAME. </label>
            </div>
            <br />
            <br />

            <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 5){
    echo "
    <form action='processbanco.php?id=5' method='post' id='quizForm' id='5'>
   
        <li>
            <h3>Para localizar informações sobre a estrutura de uma tabela, utiliza-se no MySQL, o comando:</h3>
        
            <div>
                <input type='radio' name='answerfive' id='answerfive' value='A' />
                <label for='answerfiveA'>A) SHOW TABLES; </label>
            </div>
        
            <div>
                <input type='radio' name='answerfive' id='answerfive' value='B' />
                <label for='answerfiveB'>B) DESCRIBE table; </label>
            </div>
        
            <div>
                <input type='radio' name='answerfive' id='answerfive' value='C' />
                <label for='answerC'>C) SHOW DATABASES; </label>
            </div>
            <br />
            <br />
            <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
    </form>";
}

if ($rid == 6){
    echo "
    <form action='processbanco.php?id=6' method='post' id='quizForm' id='6'>
   
        <li>
            <h3>Um usuário MySQL que pode gravar um arquivo em qualquer lugar no sistema de arquivos, com os mesmos privilégios do daemon mysqld, recebeu esta autorização pelo privilégio específico</h3>
        
            <div>
                <input type='radio' name='answersix' id='answersix' value='A' />
                <label for='answersixA'>A) SUPER. </label>
            </div>
        
            <div>
                    <input type='radio' name='answersix' id='answersix' value='B' />
                    <label for='answersixB'>B) UPDATE.</label>
            </div>
        
            <div>
                <input type='radio' name='answersix' id='answersix' value='C' />
                <label for='answersixC'>C) GRANT.</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 7){
    
    echo "
    <form action='processbanco.php?id=7' method='post' id='quizForm' id='7'>
   
        <li>
            <h3>Sobre linguagem SQL, analise as seguintes alternativas e marque a INCORRETA.</h3>
        
            <div>
                <input type='radio' name='answerseven' id='answerseven' value='A' />
                <label for='answersevenA'>A) Nenhuma das alternativas estão corretas.</label>
            </div>
        
            <div>
                    <input type='radio' name='answerseven' id='answerseven' value='B' />
                    <label for='answersevenB'>B) ALTER TABLE teste ADD descricaoteste VARCHAR(70) AFTER nometest;</label>
            </div>
        
            <div>
                <input type='radio' name='answerseven' id='answerseven' value='C' />
                <label for='answersevenC'>C) ALTER TABLE teste ADD  borogodo CHAR(1)  AFTER descricaoteste;</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 8){
    
    echo "
    <form action='processbanco.php?id=8' method='post' id='quizForm' id='8'>
   
        <li>
            <h3>Considere o trecho de linguagem SQL abaixo.
                CREATE TABLE T (ID INT, NAME VARCHAR2(30));
            </h3>
        
            <div>
                <input type='radio' name='answereight' id='answereight' value='A' />
                <label for='answereightA'>A) MSSQL Server.</label>
            </div>
        
            <div>
                <input type='radio' name='answereight' id='answereight' value='B' />
                <label for='answereightB'>B) MSSQL Server.</label>
            </div>
        
            <div>
                <input type='radio' name='answereight' id='answereight' value='C' />
                <label for='answereightC'>C) MySQL.</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 9){
    
    echo "
    <form action='processbanco.php?id=9' method='post' id='quizForm' id='9'>
   
        <li>
            <h3>Num sistema desenvolvido com a utilização de um SGBD, o procedimento de backup é responsabilidade:</h3>
        
            <div>
                <input type='radio' name='answernine' id='answernine' value='A' />
                <label for='answernineA'>A) do DBA.</label>
            </div>
        
            <div>
                <input type='radio' name='answernine' id='answernine' value='B' />
                <label for='answernineB'>B) do analista.</label>
            </div>
        
            <div>
                <input type='radio' name='answernine' id='answernine' value='C' />
                <label for='answernineC'>C) do programador.</label>
            </div>
            <br />
            <br />
               <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 10){
    
    echo "
    <form action='processbanco.php?id=10' method='post' id='quizForm' id='10'>
   
        <li>
            <h3> Uma das técnicas de modelagem E-R inicia nos conceitos mais importantes e navega em direção aos menos importantes. É comum que modelos E-R se desenvolvem em torno de algumas entidades que representam os conceitos mais importantes de um domínio ou aplicação. A técnica especificada é conhecida como  </h3>
        
            <div>
                <input type='radio' name='answerten' id='answerten' value='A' />
                <label for='answertenA'>A) Bottom-Up. </label>
            </div>
        
            <div>
                <input type='radio' name='answerten' id='answerten' value='B' />
                <label for='answertenB'>B) Modelo Conceitual.</label>
            </div>
        
            <div>
                <input type='radio' name='answerten' id='answerten' value='C' />
                <label for='answertenC'>C) Inside-Out. </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 11){
    
    echo "
    <form action='processbanco.php?id=11' method='post' id='quizForm' id='11'>
   
        <li>
            <h3> A técnica de diagramação no modelo de Entidade - Relacionamento é bem simples. Utiliza basicamente um losango para representar Imagem I e um retângulo para representar Imagem II. As lacunas I e II são preenchidas, correta e respectivamente, por</h3>
        
            <div>
                <input type='radio' name='answereleven' id='answereleven' value='A' />
                <label for='answerelevenA'>A) entidades - relacionamentos</label>
            </div>
        
            <div>
                <input type='radio' name='answereleven' id='answereleven' value='B' />
                <label for='answerelevenB'>B) relacionamentos – entidades</label>
            </div>
        
            <div>
                <input type='radio' name='answereleven' id='answereleven' value='C' />
                <label for='answerelevenC'>C) atributos – relacionamentos</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 12){
    
    echo "
    <form action='processbanco.php?id=12' method='post' id='quizForm' id='12'>
   
        <li>
            <h3>A linguagem SQL possui comandos de defnição de dados (DDL - Data Defnition Language), dos quais faz parte o seguinte comando:</h3>
        
            <div>
                <input type='radio' name='answertwelve' id='answertwelve' value='A' />
                <label for='answertwelveA'>A) SELECT </label>
            </div>
        
            <div>
                <input type='radio' name='answertwelve' id='answertwelve' value='B' />
                <label for='answertwelveB'>B) DELETE </label>
            </div>
        
            <div>
                <input type='radio' name='answertwelve' id='answertwelve' value='C' />
                <label for='answertwelveC'>C) ALTER </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 13){
    
    echo "
    <form action='processbanco.php?id=13' method='post' id='quizForm' id='13'>
   
        <li>
            <h3>Em linguagem SQL, o comando utilizado para remover uma tabela de um banco de dados é</h3>
        
            <div>
                <input type='radio' name='answerThirteen' id='answerThirteen' value='A' />
                <label for='answerThirteenA'>A) DELETE TABLE. </label>
            </div>
        
            <div>
                <input type='radio' name='answerThirteen' id='answerThirteen' value='B' />
                <label for='answerThirteenB'>B) DROP TABLE. </label>
            </div>
        
            <div>
                <input type='radio' name='answerThirteen' id='answerThirteen' value='C' />
                <label for='answerThirteenC'>C) REMOVE TABLE.</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 14){
    
    echo "
    <form action='processbanco.php?id=14' method='post' id='quizForm' id='14'>
   
        <li>
            <h3>SQL representa uma linguagem declarativa, não procedural, que permite interação com bancos de dados, sendo constituída de três sublinguagens, a Data Manipulation Language (DML), a Data Definition Language (DDL) e a Data Control Language (DCL). Como comandos DCL, um permite conceder determinado privilégio a um usuário e outro permite retirar o privilégio concedido. Esses comandos são, respectivamente:</h3>
        
            <div>
                <input type='radio' name='answerFourteen' id='answerFourteen' value='A' />
                <label for='answerFourteenA'>A) INSERT e REMOVE </label>
            </div>
        
            <div>
                <input type='radio' name='answerFourteen' id='answerFourteen' value='B' />
                <label for='answerFourteenB'>B) SELECT e DELETE </label>
            </div>
        
            <div>
                <input type='radio' name='answerFourteen' id='answerFourteen' value='C' />
                <label for='answerFourteenC'>C) GRANT e REVOKE</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 15){
    
    echo "
    <form action='processbanco.php?id=15' method='post' id='quizForm' id='15'>
   
        <li>
            <h3> Em relação a banco de dados. Qual das alternativas NÃO está correta? </h3>
        
            <div>
                <input type='radio' name='answerFifteen' id='answerFifteen' value='A' />
                <label for='answerFifteenA'>A) Relacionamento é um conjunto de objetos da realidade modelada sobre os quais deseja-se manter informações no banco de dados.</label>
            </div>
        
            <div>
                <input type='radio' name='answerFifteen' id='answerFifteen' value='B' />
                <label for='answerFifteenB'>B) Banco de Dados é um conjunto de dados integrados que tem por objetivo atender a uma comunidade de usuários.</label>
            </div>
        
            <div>
                <input type='radio' name='answerFifteen' id='answerFifteen' value='C' />
                <label for='answerFifteenC'>C) Sistema Gerenciador de Bando de Dados (SGBD) é o software que incorpora as funções de definição, recuperação e alteração de dados em um banco de dados.</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 16){
    
    echo "
    <form action='processbanco.php?id=16' method='post' id='quizForm' id='16'>
   
        <li>
            <h3> Na feira de informática do primeiro semestre de 2013, a turma do terceiro módulo desenvolveu uma rede social onde envolvia um banco de dados que foi acessado por vários usuários simultaneamente.</h3> 
            <h3>Qual das soluções NÃO poderia ser utilizado para suprir essa necessidade. </h3>
        
            <div>
                <input type='radio' name='answerSixteen' id='answerSixteen' value='A' />
                <label for='answerSixteenA'>A) Usar um banco de dados distribuído, onde cada browser iria acessar de qualquer lugar. </label>
            </div>
        
            <div>
                <input type='radio' name='answerSixteen' id='answerSixteen' value='B' />
                <label for='answerSixteenB'>B) Usar um banco de dados isolado da rede no laboratório, para não correr risco de infecção por vírus. </label>
            </div>
        
            <div>
                <input type='radio' name='answerSixteen' id='answerSixteen' value='C' />
                <label for='answerSixteenC'>C) Usar o servidor da escola Fontes para hospedar o banco de dados MySQL. </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 17){
    
    echo "
    <form action='processbanco.php?id=17' method='post' id='quizForm' id='17'>
   
        <li>
            <h3> Sobre a sentença SQL abaixo Marque a questão INCORRETA. </h3>

            <h3> SELECT codigo,descricao,preco FROM shop WHERE preco = (SELECT MAX (preco) FROM shop); </h3>
        
            <div>
                <input type='radio' name='answerSeventeen' id='answerSeventeen' value='A' />
                <label for='answerSeventeenA'>A) Está buscando o código, descricao e preco em uma tabela. </label>
            </div>
        
            <div>
                <input type='radio' name='answerSeventeen' id='answerSeventeen' value='B' />
                <label for='answerSeventeenB'>B) Está buscando o código, descrição e preco mais caros da tabela shop. </label>
            </div>
        
            <div>
                <input type='radio' name='answerSeventeen' id='answerSeventeen' value='C' />
                <label for='answerSeventeenC'>C) Está buscando o produto mais caro da tabela preco. </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 18){
    
    echo "
    <form action='processbanco.php?id=18' method='post' id='quizForm' id='18'>
   
        <li>
            <h3> Sobre a sentença abaixo. Marque a questão CORRETA.  </h3>

            <h3> SELECT p1.name, e1.remark FROM pet AS p1, event AS e1 WHERE p1.name = 'jow'; </h3>
        
            <div>
                <input type='radio' name='answerEighteen' id='answerEighteen' value='A' />
                <label for='answerEighteenA'>A) Está dando apelidos às tabelas e buscando informações em duas tabelas ao mesmo tempo. </label>
            </div>
        
            <div>
                <input type='radio' name='answerEighteen' id='answerEighteen' value='B' />
                <label for='answerEighteenB'>B) Está dando apelidos às tabelas name e remark e buscando informações em uma tabela. </label>
            </div>
        
            <div>
                <input type='radio' name='answerEighteen' id='answerEighteen' value='C' />
                <label for='answerEighteenC'>C) Está buscando name e remark na tabela event. </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 19){
    
    echo "
    <form action='processbanco.php?id=19' method='post' id='quizForm' id='19'>
   
        <li>
            <h3>  Sobre a sentença abaixo. Marque a questão CORRETA.  </h3>

            <h3> SELECT name, birth FROM pet WHERE MONTH(birth) = 5; </h3>
        
            <div>
                <input type='radio' name='answerNineteen' id='answerNineteen' value='A' />
                <label for='answerNineteenA'>A) Está buscando o name e birth dos animais da tabela MONTH </label>
            </div>
        
            <div>
                <input type='radio' name='answerNineteen' id='answerNineteen' value='B' />
                <label for='answerNineteenB'>B) Está fazendo uma busca dos aniversariantes do mês de maio </label>
            </div>
        
            <div>
                <input type='radio' name='answerNineteen' id='answerNineteen' value='C' />
                <label for='answerNineteenC'>C) Está fazendo uma busca de name e birth na tabela pet do código 5 </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 20){
    
    echo "
    <form action='processbanco.php?id=20' method='post' id='quizForm' id='20'>
   
        <li>
            <h3>  Sobre a sentença abaixo. Marque a questão CORRETA.  </h3>

            <h3> SELECT nome, birth, CURDATE(), (YEAR(CURDATE()) – YEAR (birth)) AS age FROM pet; </h3>
        
            <div>
                <input type='radio' name='answerTwenty' id='answerTwenty' value='A' />
                <label for='answerTwentyA'>A) Retorna a data atual do servidor e registra na data (birth)  </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwenty' id='answerTwenty' value='B' />
                <label for='answerTwentyB'>B) Busca o nome, birth na tabela age. </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwenty' id='answerTwenty' value='C' />
                <label for='answerTwentyC'>C) Busca o nome, birth na tabela pet. </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 21){
    
    echo "
    <form action='processbanco.php?id=21' method='post' id='quizForm' id='21'>
   
        <li>
            <h3>  Analise as afirmativas e marque a opção que NÃO descreve o conceito de Banco de Dados.  </h3>

            <div>
                <input type='radio' name='answerTwentyone' id='answerTwentyone' value='A' />
                <label for='answerTwentyoneA'>A) O software que incorpora as funções de definição, recuperação e alteração de dados em um banco de dados. </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyone' id='answerTwentyone' value='B' />
                <label for='answerTwentyoneB'>B) Banco De Dados ou Base De Dados são coleções de informações que se relacionam de forma que crie um sentido. </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyone' id='answerTwentyone' value='C' />
                <label for='answerTwentyoneC'>C) Representa abstratamente uma parte do mundo real, conhecida como Mini-Mundo ou Universo de Discurso (UD), que é de interesse de uma certa aplicação. </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 22){
    
    echo "
    <form action='processbanco.php?id=22' method='post' id='quizForm' id='22'>
   
        <li>
            <h3>  Sobre linguagem SQL, analise as seguintes alternativas e marque a INCORRETA. </h3>

            <div>
                <input type='radio' name='answerTwentytwo' id='answerTwentytwo' value='A' />
                <label for='answerTwentytwoA'>A) ALTER TABLE teste ADD borogodo VARCHAR(15)  AFTER idteste; </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentytwo' id='answerTwentytwo' value='B' />
                <label for='answerTwentytwoB'>B) ALTER TABLE borogodo ADD teste VARCHAR(45) AFTER teste; </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentytwo' id='answerTwentytwo' value='C' />
                <label for='answerTwentytwoC'>C) ALTER TABLE teste ADD  borogodo CHAR(1)  AFTER descricaoteste; </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 23){
    
    echo "
    <form action='processbanco.php?id=23' method='post' id='quizForm' id='23'>
   
        <li>
            <h3>  Quanto à utilização MySQL no Linux. Qual comando utilizamos para trabalhar modo texto? </h3>

            <div>
                <input type='radio' name='answerTwentythree' id='answerTwentythree' value='A' />
                <label for='answerTwentythreeA'>A) mysql –u root –p/ </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentythree' id='answerTwentythree' value='B' />
                <label for='answerTwentythreeB'>B) sudo mysql –u root –p;  </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentythree' id='answerTwentythree' value='C' />
                <label for='answerTwentythreeC'>C) mysql –u root –p </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 24){
    
    echo "
    <form action='processbanco.php?id=24' method='post' id='quizForm' id='24'>
   
        <li>
            <h3>  Quanto à ferramenta MySQL Workbench 5.2 CE. Assinale a alternativa CORRETA.  </h3>

            <div>
                <input type='radio' name='answerTwentyfour' id='answerTwentyfour' value='A' />
                <label for='answerTwentyfourA'>A) Para criarmos uma conexão é necessário informar o nome da conexão (Connection Name), método de conexão (Connection Method), Nome ou IP da máquina (Hostname), porta (Port), Nome do usuário (Usarname) e senha (Password) e clicar em OK. </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyfour' id='answerTwentyfour' value='B' />
                <label for='answerTwentyfourB'>B) Quando estamos conectados no (LocalHost) ou (127.0.0.1). Quer dizer que estamos conectados em uma máquina externa (que não é a nossa). </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyfour' id='answerTwentyfour' value='C' />
                <label for='answerTwentyfourC'>C) A opção (Hostname) Nome ou IP da máquina não são relevante. </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 25){
    
    echo "
    <form action='processbanco.php?id=25' method='post' id='quizForm' id='25'>
   
        <li>
            <h3>  Qual comando utilizo para criar um banco de dados de nome dbaula?.  </h3>

            <div>
                <input type='radio' name='answerTwentyFive' id='answerTwentyFive' value='A' />
                <label for='answerTwentyFiveA'>A) CREATE TABLE dbaula; </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyFive' id='answerTwentyFive' value='B' />
                <label for='answerTwentyFiveB'>B) CREATE DATABASE dbaula; </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyFive' id='answerTwentyFive' value='C' />
                <label for='answerTwentyFiveC'>C) CREATE BANCO dbaula; </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 26){
    
    echo "
    <form action='processbanco.php?id=26' method='post' id='quizForm' id='26'>
   
        <li>
            <h3>  Preciso executar um comando (SQL) para alterar a estrutura da tabela “cliente” acrescentando uma coluna chamada “e-mail”. Qual tipo de linguagem será?  </h3>

            <div>
                <input type='radio' name='answerTwentySix' id='answerTwentySix' value='A' />
                <label for='answerTwentySixA'>A) DQL </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentySix' id='answerTwentySix' value='B' />
                <label for='answerTwentySixB'>B) DCL </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentySix' id='answerTwentySix' value='C' />
                <label for='answerTwentySixC'>C) DDL </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 27){
    
    echo "
    <form action='processbanco.php?id=27' method='post' id='quizForm' id='27'>
   
        <li>
            <h3>  Preciso executar um comando (SQL) para criar um local que armazene informações sobre meus clientes. Qual tipo de linguagem será?</h3>

            <div>
                <input type='radio' name='answerTwentySeven' id='answerTwentySeven' value='A' />
                <label for='answerTwentySevenA'>A) DDL </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentySeven' id='answerTwentySeven' value='B' />
                <label for='answerTwentySevenB'>B) DML </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentySeven' id='answerTwentySeven' value='C' />
                <label for='answerTwentySevenC'>C) DQL </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 28){
    
    echo "
    <form action='processbanco.php?id=28' method='post' id='quizForm' id='28'>
   
        <li>
            <h3>  Preciso executar uma sentença SQL que permita ao usuário “contabilidade” acessar a tabela “contas” (apenas a tabela contas). Que tipo de linguagem será?</h3>

            <div>
                <input type='radio' name='answerTwentyEight' id='answerTwentyEight' value='A' />
                <label for='answerTwentyEightA'>A) DQL </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyEight' id='answerTwentyEight' value='B' />
                <label for='answerTwentyEightB'>B) DCL </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyEight' id='answerTwentyEight' value='C' />
                <label for='answerTwentyEightC'>C) DML </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 29){
    
    echo "
    <form action='processbanco.php?id=29' method='post' id='quizForm' id='29'>
   
        <li>
            <h3>  Conforme o diagrama. Marque a alternativa correta </h3>
            
            <p align='center'><img src='images/img11.jpg'/></p>
            
            <div>
                <input type='radio' name='answerTwentyNine' id='answerTwentyNine' value='A' />
                <label for='answerTwentyNineA'>A) A tabela curso possui 4 colunas </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyNine' id='answerTwentyNine' value='B' />
                <label for='answerTwentyNineB'>B) A tabela aluno possui 7 colunas </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyNine' id='answerTwentyNine' value='C' />
                <label for='answerTwentyNineC'>C) A tabela aluno possui uma chave primária  </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 30){
    
    echo "
    <form action='processbanco.php?id=30' method='post' id='quizForm' id='30'>
   
        <li>
            <h3>  Conforme o diagrama. Marque a alternativa correta </h3>
            
            <p align='center'><img src='images/img11.jpg'/></p>

            <div>
                <input type='radio' name='answerTwentyThirty' id='answerTwentyThirty' value='A' />
                <label for='answerTwentyThirtyA'>A) CREATE TABLE curso (codigo_curso INT PRIMARY KEY, nome_curso VARCHAR(40), turno VARCHAR(10)); </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyThirty' id='answerTwenThirty' value='B' />
                <label for='answerTwentyThirtyB'>B) CREATE curso (codigo_curso INT PRIMARY KEY, nome_curso VARCHAR(40), turno VARCHAR(10));</label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyThirty' id='answerTwentyThirty' value='C' />
                <label for='answerTwentyThirtyC'>C) CREATE BASE curso (codigo_curso INT PRIMARY KEY, nome_curso VARCHAR(40), turno VARCHAR(10)); </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

?>
</div><!--- end of wrapper div --->

</body>
</html>