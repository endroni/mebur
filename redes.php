<html>
<head>
<title>Redes</title>

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

<?php include_once("analyticstracking.php") ?> <!-- Analyctis do google -->

<?php


	//Criando números random 
	$rid = rand(1,30);
	echo $rid;
?>

<div id='wrapper'>

    <center><font face='Andalus' size='5'>Redes de Computadores <b>Quiz</b></font></center>
    <br />
    <br />
    <br />
    <br />

<?php

if ($rid == 1){
	echo "
    <form action='process.php?id=1' method='post' id='quizForm' id='1'>
       
    	<li>
            <h3>Assinale a alternativa que corresponde as lacunas do texto:
            “Redes de Computadores são um conjunto de __________ capazes de trocar informações, compartilhar recursos entre si, utilizando __________ para se comunicarem e sendo interligados por __________.”</h3>
        
            <div>
                <input type='radio' name='answerOne' id='answerOne' value='A' />
                <label for='answerOneA'>A) Equipamentos / Protocolos / Meios de comunicação</label>
            </div>
        
            <div>
                <input type='radio' name='answerOne' id='answerOne' value='B' />
                <label for='answerOneB'>B) Equipamentos / Meios de comunicação / Protocolos</label>
            </div>
        
            <div>
                <input type='radio' name='answerOne' id='answerOne' value='C' />
                <label for='answerOneC'>C) Meios de comunicação / Protocolos / Equipamentos</label>
            </div>
            <br />
            <br />
        </li>
        <p align='center'><input type='submit' value='Está certo?' /></p>
    </form>";
}

if ($rid == 2){
	echo "

    <form action='process.php?id=2' method='post' id='quizForm' id='2'>
       
        <li>
            <h3>Dentre as topologias empregadas na implementação de redes de computadores, uma utiliza cabos de par trançado e um equipamento concentrador, como um hub ou switch, para conexão aos microcomputadores. Do ponto de vista físico, essa topologia é conhecida por:</h3>
        
            <div>
                <input type='radio' name='answerTwo' id='answerTwo' value='A' />
                <label for='answerTwoA'>A) Anel </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwo' id='answerTwo' value='B' />
                <label for='answerTwoB'>B) Estrela</label>
            </div>
        
            <div>
                <input type='radio' name='answerTwo' id='answerTwo' value='C' />
                <label for='answerTwoC'>C) Distribuída</label>
            </div>
            <br />
            <br />
        </li>
        
     <p align='center'><input type='submit' value='Está certo?' /></p>
    </form>";
}

if ($rid == 3){	
	echo "
    <form action='process.php?id=3' method='post' id='quizForm' id='3'>
        
        <li>
            <h3>Paulo deseja ligar dois computadores sem utilizar um concentrador. Resolveu utilizar um tipo de cabo par trançado para interligar a saída de dados do primeiro micro à entrada de dados do segundo e vice-versa. O tipo de cabo utilizado por Paulo é conhecido como</h3>
        
            <div>
                <input type='radio' name='answerThree' id='answerThree' value='A' />
                <label for='answerThreeA'>A) pino a pino.   </label>
            </div>
        
            <div>
                <input type='radio' name='answerThree' id='answerThree' value='B' />
                <label for='answerThreeB'>B) switched-over.</label>
            </div>
        
            <div>
                <input type='radio' name='answerThree' id='answerThree' value='C' />
                <label for='answerThreeC'>C) cross-over.</label>
            </div>
            <br />
            <br />
        </li>
     <p align='center'><input type='submit' value='Está certo?' /></p>
</form>";

}

if ($rid == 4){
    echo "
    <form action='process.php?id=4' method='post' id='quizForm' id='4'>
   
        <li>
            <h3>É um meio de transmissão no qual os repetidores somente são necessários a cada 50 quilômetros de distância em linhas longas; não desperdiça luz e dificilmente é interceptada. Trata-se de.</h3>
        
            <div>
                <input type='radio' name='answerfour' id='answerfour' value='A' />
                <label for='answerfourA'>A) rádio </label>
            </div>
        
            <div>
                <input type='radio' name='answerfour' id='answerfour' value='B' />
                <label for='answerfourB'>B) fibra ótica. </label>
            </div>
        
            <div>
                <input type='radio' name='answerfour' id='answerfour' value='C' />
                <label for='answerfourC'>C) cabo coaxial. </label>
            </div>
            <br />
            <br />

            <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 5){
    echo "
    <form action='process.php?id=5' method='post' id='quizForm' id='5'>
   
        <li>
            <h3>Na comunicação de dados existe sempre um transmissor e um receptor. Os modos de comunicação são definidos pela quantidade de transmissores, esses modos são conhecidos como...         
            __________ Um elemento da rede pode enviar ou receber dados, mas não ao mesmo tempo, comunicação bidirecional não simultânea. (Exemplo: aparelho de fax, walk talk).
            __________ Um elemento da rede só envia ou só recebe dados em comunicação unidirecional. (Exemplo: rádios AM e FM)
            __________ Um elemento da rede pode enviar e receber dados ao mesmo tempo, comunicação bidirecional simultânea. (Exemplo: telefone).

            (complete os espaços com os tipos de comunicação correspondentes). </h3>
        
            <div>
                <input type='radio' name='answerfive' id='answerfive' value='A' />
                <label for='answerfiveA'>A) Half-duplex / Full-duplex / Simplex </label>
            </div>
        
            <div>
                <input type='radio' name='answerfive' id='answerfive' value='B' />
                <label for='answerfiveB'>B) Half-duplex / Simplex / Full-duplex</label>
            </div>
        
            <div>
                <input type='radio' name='answerfive' id='answerfive' value='C' />
                <label for='answerC'>C) Full-duplex / Simplex / Half-duplex</label>
            </div>
            <br />
            <br />
            <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
    </form>";
}

if ($rid == 6){
    echo "
    <form action='process.php?id=6' method='post' id='quizForm' id='6'>
   
        <li>
            <h3>A topologia de rede do tipo ...... utiliza em geral ligações ponto-a-ponto que operam em um único sentido de transmissão. O sinal circula na rede até chegar ao destino. Esta topologia é pouco tolerável à falha e possui uma grande limitação quanto a sua expansão pelo aumento de retardo de transmissão (intervalo de tempo entre o início e chegada do sinal ao nó destino).  Preenche corretamente a lacuna do texto,</h3>
        
            <div>
                <input type='radio' name='answersix' id='answersix' value='A' />
                <label for='answersixA'>A)Barramento</label>
            </div>
        
            <div>
                    <input type='radio' name='answersix' id='answersix' value='B' />
                    <label for='answersixB'>B) Estrela</label>
            </div>
        
            <div>
                <input type='radio' name='answersix' id='answersix' value='C' />
                <label for='answersixC'>C) Anel ( ring) </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 7){
    
    echo "
    <form action='process.php?id=7' method='post' id='quizForm' id='7'>
   
        <li>
            <h3>Considerando as topologias físicas de rede, assinale a opção correspondente à topologia na qual todos os nós estão ligados ao mesmo meio de transmissão e todos os nós podem detectar as informações que estão sendo transmitidas.</h3>
        
            <div>
                <input type='radio' name='answerseven' id='answerseven' value='A' />
                <label for='answersevenA'>A) Barramento</label>
            </div>
        
            <div>
                    <input type='radio' name='answerseven' id='answerseven' value='B' />
                    <label for='answersevenB'>B) Anel</label>
            </div>
        
            <div>
                <input type='radio' name='answerseven' id='answerseven' value='C' />
                <label for='answersevenC'>C) Estrela</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 8){
    
    echo "
    <form action='process.php?id=8' method='post' id='quizForm' id='8'>
   
        <li>
            <h3>Numa rede com topologia estrela, esse equipamento repete para todas as suas portas os bits que chegam, de forma semelhante ao que ocorre na topologia linear. Isso significa que se um computador enviar um pacote para outro, todas as demais estações conectadas nesse equipamento receberão esse mesmo pacote e perderão tempo para descartá-lo. O equipamento citado é o:</h3>
        
            <div>
                <input type='radio' name='answereight' id='answereight' value='A' />
                <label for='answereightA'>A) Switch</label>
            </div>
        
            <div>
                <input type='radio' name='answereight' id='answereight' value='B' />
                <label for='answereightB'>B) Modem</label>
            </div>
        
            <div>
                <input type='radio' name='answereight' id='answereight' value='C' />
                <label for='answereightC'>C) Hub </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 9){
    
    echo "
    <form action='process.php?id=9' method='post' id='quizForm' id='9'>
   
        <li>
            <h3>Em uma rede de computadores, um gateway é utilizado para</h3>
        
            <div>
                <input type='radio' name='answernine' id='answernine' value='A' />
                <label for='answernineA'>A) Permitir a conexão entre dois computadores com arquiteturas de redes diferentes</label>
            </div>
        
            <div>
                <input type='radio' name='answernine' id='answernine' value='B' />
                <label for='answernineB'>B) Criar uma conexão segura (SSH) entre dois computadores.</label>
            </div>
        
            <div>
                <input type='radio' name='answernine' id='answernine' value='C' />
                <label for='answernineC'>C) Aumentar o sinal de transmissão de redes sem fio (wireless).</label>
            </div>
            <br />
            <br />
               <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 10){
    
    echo "
    <form action='process.php?id=10' method='post' id='quizForm' id='10'>
   
        <li>
            <h3> O brigde, dispositivo comum para interconexão de redes, tem diversas características, EXCETO </h3>
        
            <div>
                <input type='radio' name='answerten' id='answerten' value='A' />
                <label for='answertenA'>A) Possuir capacidade de armazenamento de mensagens. </label>
            </div>
        
            <div>
                <input type='radio' name='answerten' id='answerten' value='B' />
                <label for='answertenB'>B) Conectar várias redes de diferentes tipos de arquiteturas.</label>
            </div>
        
            <div>
                <input type='radio' name='answerten' id='answerten' value='C' />
                <label for='answertenC'>C) Exercer função de uma estação repetidora comum.</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 11){
    
    echo "
    <form action='process.php?id=11' method='post' id='quizForm' id='11'>
   
        <li>
            <h3> A implementação de redes de computadores segue padrões internacionais. Conforme a categoria 5, o conector RJ-45 possui oito guias, das quais 1 e 2 são utilizadas para transmissão, enquanto que para recepção, as guias usadas são</h3>
        
            <div>
                <input type='radio' name='answereleven' id='answereleven' value='A' />
                <label for='answerelevenA'>A) 4 e 5. </label>
            </div>
        
            <div>
                <input type='radio' name='answereleven' id='answereleven' value='B' />
                <label for='answerelevenB'>B) 3 e 6. </label>
            </div>
        
            <div>
                <input type='radio' name='answereleven' id='answereleven' value='C' />
                <label for='answerelevenC'>C) 3 e 4. </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 12){
    
    echo "
    <form action='process.php?id=12' method='post' id='quizForm' id='12'>
   
        <li>
            <h3>Com o objetivo de criar uma referência técnica para a elaboração de projetos de cabeamento estruturado para redes de voz e dados, a ABNT (Associação Brasileira de Normas Técnicas) desenvolveu a NBR 14565. Com base nessa Norma, a distância máxima, em metros, para cabos UTP, categoria 5, na rede secundária, é</h3>
        
            <div>
                <input type='radio' name='answertwelve' id='answertwelve' value='A' />
                <label for='answertwelveA'>A) 120  </label>
            </div>
        
            <div>
                <input type='radio' name='answertwelve' id='answertwelve' value='B' />
                <label for='answertwelveB'>B) 110 </label>
            </div>
        
            <div>
                <input type='radio' name='answertwelve' id='answertwelve' value='C' />
                <label for='answertwelveC'>C) 100</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 13){
    
    echo "
    <form action='process.php?id=13' method='post' id='quizForm' id='13'>
   
        <li>
            <h3>Sobre redes de Computadores, é INCORRETO afirmar que:</h3>
        
            <div>
                <input type='radio' name='answerThirteen' id='answerThirteen' value='A' />
                <label for='answerThirteenA'>A) Nas redes cliente/servidor a administração da rede é centralizada.</label>
            </div>
        
            <div>
                <input type='radio' name='answerThirteen' id='answerThirteen' value='B' />
                <label for='answerThirteenB'>B) A rede ponto-a-ponto oferece segurança forte de forma nativa, com um rígido controle sobre a criação de usuários e o compartilhamento de recursos e serviços.</label>
            </div>
        
            <div>
                <input type='radio' name='answerThirteen' id='answerThirteen' value='C' />
                <label for='answerThirteenC'>C) Em uma rede cliente/servidor, não necessariamente um microcomputador desempenhe a tarefa de servidor, mas outros aparelhos criados exclusivamente para aquela tarefa.</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 14){
    
    echo "
    <form action='process.php?id=14' method='post' id='quizForm' id='14'>
   
        <li>
            <h3>Com relação às camadas do modelo de referência OSI (Reference Model of Open System Interconection) e do modelo TCP/IP, é correto afirmar que:</h3>
        
            <div>
                <input type='radio' name='answerFourteen' id='answerFourteen' value='A' />
                <label for='answerFourteenA'>A) O modelo OSI contém apenas 5 camadas, enquanto que o TCP/IP possui 7.</label>
            </div>
        
            <div>
                <input type='radio' name='answerFourteen' id='answerFourteen' value='B' />
                <label for='answerFourteenB'>B) A camada de sessão do TCP/IP descreve os serviços que o protocolo utiliza para lidar com as funcionalidades solicitadas pelos programas aplicativos.</label>
            </div>
        
            <div>
                <input type='radio' name='answerFourteen' id='answerFourteen' value='C' />
                <label for='answerFourteenC'>C) A camada de interface de rede do TCP/IP estabelece as características de voltagem, frequência e corrente elétrica utilizada para comunicação entre hosts.</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 15){
    
    echo "
    <form action='process.php?id=15' method='post' id='quizForm' id='15'>
   
        <li>
            <h3>Com relação a redes de computadores, um fino filamento contínuo de vidro com uma cobertura de proteção, que pode ser usado para conectar longas distâncias, constitui um cabo de</h3>
        
            <div>
                <input type='radio' name='answerFifteen' id='answerFifteen' value='A' />
                <label for='answerFifteenA'>A) Fibra óptica</label>
            </div>
        
            <div>
                <input type='radio' name='answerFifteen' id='answerFifteen' value='B' />
                <label for='answerFifteenB'>B) Cabo coaxial</label>
            </div>
        
            <div>
                <input type='radio' name='answerFifteen' id='answerFifteen' value='C' />
                <label for='answerFifteenC'>C) Par trançado</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 16){
    
    echo "
    <form action='process.php?id=16' method='post' id='quizForm' id='16'>
   
        <li>
            <h3>No que diz respeito à virtualização de sistemas, existe um programa da Oracle que permite instalar e executar diferentes sistemas operacionais em um único computador, viabilizando as funcionalidades listadas a seguir. · pode-se executar o Linux dentro do Windows, o Windows dentro do Mac, o Mac dentro do Windows e até mesmo todos os sistema suportados dentro de um; · a nova versão inclui o suporte aos dispositivos multitouch, além de oferecer uma nova ferramenta de captura de vídeo, que possibilita realizar videoconferências utilizando uma máquina virtual; · a nova versão oferece suporte para o novo Windows 8.1 e Mac OS X 10.9. Esse programa é conhecido por:</h3>
        
            <div>
                <input type='radio' name='answerSixteen' id='answerSixteen' value='A' />
                <label for='answerSixteenA'>A) VirtualBox</label>
            </div>
        
            <div>
                <input type='radio' name='answerSixteen' id='answerSixteen' value='B' />
                <label for='answerSixteenB'>B) Vmware</label>
            </div>
        
            <div>
                <input type='radio' name='answerSixteen' id='answerSixteen' value='C' />
                <label for='answerSixteenC'>C) Xen </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 17){
    
    echo "
    <form action='process.php?id=17' method='post' id='quizForm' id='17'>
   
        <li>
            <h3>Quanto ao cabo coaxial grosso 10 Base 5 e cabo coaxial fino 10 Base 2 respectivamente</h3>
        
            <div>
                <input type='radio' name='answerSeventeen' id='answerSeventeen' value='A' />
                <label for='answerSeventeenA'>A) 600 metros e 300 metros</label>
            </div>
        
            <div>
                <input type='radio' name='answerSeventeen' id='answerSeventeen' value='B' />
                <label for='answerSeventeenB'>B) 500 metros e 200 metros</label>
            </div>
        
            <div>
                <input type='radio' name='answerSeventeen' id='answerSeventeen' value='C' />
                <label for='answerSeventeenC'>C) 300 metros e 400 metros </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 18){
    
    echo "
    <form action='process.php?id=18' method='post' id='quizForm' id='18'>
   
        <li>
            <h3>Em uma rede sem fio de computadores (WLAN), as funções de gerenciamento da WLAN são desempenhadas pelo dispositivo comercialmente chamado de Roteador Wireless. Dentre as funções do Roteador está a de designar um endereço IP válido para as mensagens que saem da LAN para a WAN, uma vez que, na LAN, é utilizado um endereço IP virtual. No Roteador, essa função é desempenhada pelo</h3>
        
            <div>
                <input type='radio' name='answerEighteen' id='answerEighteen' value='A' />
                <label for='answerEighteenA'>A) DNS</label>
            </div>
        
            <div>
                <input type='radio' name='answerEighteen' id='answerEighteen' value='B' />
                <label for='answerEighteenB'>B) DHCP</label>
            </div>
        
            <div>
                <input type='radio' name='answerEighteen' id='answerEighteen' value='C' />
                <label for='answerEighteenC'>C) NAT </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 19){
    
    echo "
    <form action='process.php?id=19' method='post' id='quizForm' id='19'>
   
        <li>
            <h3>Qual o comando utilizo para visualizar as informações de endereço físico (mac adress) no Windows e no Linux respectivamente:</h3>
        
            <div>
                <input type='radio' name='answerNineteen' id='answerNineteen' value='A' />
                <label for='answerNineteenA'>A) ipconfig /all – ifconfig</label>
            </div>
        
            <div>
                <input type='radio' name='answerNineteen' id='answerNineteen' value='B' />
                <label for='answerNineteenB'>B) ipconfig /all – ifconfig /all   </label>
            </div>
        
            <div>
                <input type='radio' name='answerNineteen' id='answerNineteen' value='C' />
                <label for='answerNineteenC'>C) ifconfig -- ipconfig /all </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 20){
    
    echo "
    <form action='process.php?id=20' method='post' id='quizForm' id='20'>
   
        <li>
            <h3>Qual afirmação é verdadeira em relação ao funcionamento do DHCP dentro da rede Fontes?</h3>
        
            <div>
                <input type='radio' name='answerTwenty' id='answerTwenty' value='A' />
                <label for='answerTwentyA'>A) Um cliente DHCP usa um ARP para detectar um servidor DHCP.</label>
            </div>
        
            <div>
                <input type='radio' name='answerTwenty' id='answerTwenty' value='B' />
                <label for='answerTwentyB'>B) Um servidor DHCP usa um PING para detectar conflitos de endereços. </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwenty' id='answerTwenty' value='C' />
                <label for='answerTwentyC'>C) Um servidor DHCP usa uma requisição ARP para detectar clientes DHCP.</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 21){
    
    echo "
    <form action='process.php?id=21' method='post' id='quizForm' id='21'>
   
        <li>
            <h3>Existem dois tipos de satélites, os polares, que circundam a Terra, passando pelo polo norte e polo sul (longitudinal), e são geralmente os de que fazem o serviço de meteorologia, e os satélites geoestacionários, que são aqueles cujo ponto, em relação ao globo terrestre, não muda a sua posição, geralmente são colocados na faixa equatorial, transmitindo ondas de TV, rádio, celular, etc. Qual das expressões a seguir não é real para as condições físicas da dinâmica e estática do satélite?</h3>
        
            <div>
                <input type='radio' name='answerTwentyone' id='answerTwentyone' value='A' />
                <label for='answerTwentyoneA'>A) A velocidade angular é idêntica ao da Terra, com um perímetro percorrido maior que o do seu ponto relativo a sua posição, na superfície do globo terrestre.</label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyone' id='answerTwentyone' value='B' />
                <label for='answerTwentyoneB'>B) Devido as suas condições, este satélite mantém um movimento periódico de 24h, com velocidade escalar maior que o da Terra. </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyone' id='answerTwentyone' value='C' />
                <label for='answerTwentyoneC'>C) Devido as suas condições, este satélite mantém um movimento periódico de 24h, com velocidade escalar igual ao da superfície da Terra.</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 22){
    
    echo "
    <form action='process.php?id=22' method='post' id='quizForm' id='22'>
   
        <li>
            <h3>O Active Directory </h3>
        
            <div>
                <input type='radio' name='answerTwentytwo' id='answerTwentytwo' value='A' />
                <label for='answerTwentytwoA'>A) Depende do DNS para agir como serviço de resolução de nomes e também como serviço de localização.</label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentytwo' id='answerTwentytwo' value='B' />
                <label for='answerTwentytwoB'>B) Independe do DNS para agir como serviço de resolução de nomes e também como parâmetro de localização LOC.  </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentytwo' id='answerTwentytwo' value='C' />
                <label for='answerTwentytwoC'>C) Depende do DPS para agir como serviço de verificação de nomes e também como serviço de compartilhamento.</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 23){
    
    echo "
    <form action='process.php?id=23' method='post' id='quizForm' id='23'>
   
        <li>
            <h3> Qual dos protocolos abaixo NÃO usam TCP na camada de transporte? </h3>
        
            <div>
                <input type='radio' name='answerTwentythree' id='answerTwentythree' value='A' />
                <label for='answerTwentythreeA'>A) SMTP.</label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentythree' id='answerTwentythree' value='B' />
                <label for='answerTwentythreeB'>B) SNMP </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentythree' id='answerTwentythree' value='C' />
                <label for='answerTwentythreeC'>C) FTP </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 24){
    
    echo "
    <form action='process.php?id=24' method='post' id='quizForm' id='24'>
   
        <li>
            <h3> Você precisa de uma sub-rede no segmento Fontes. Quantas sub-redes e hosts estão disponíveis, se você aplicar uma máscara / 28 para uma rede classe C 210.10.2.0 ?</h3>
        
            <div>
                <input type='radio' name='answerTwentyfour' id='answerTwentyfour' value='A' />
                <label for='answerTwentyfourA'>A) 8 redes and 32 hosts.</label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyfour' id='answerTwentyfour' value='B' />
                <label for='answerTwentyfourB'>B) 32 redes and 18 hosts. </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyfour' id='answerTwentyfour' value='C' />
                <label for='answerTwentyfourC'>C) 16 redes and 14 hosts. </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 25){
    
    echo "
    <form action='process.php?id=25' method='post' id='quizForm' id='25'>
   
        <li>
            <h3> Qual dos seguintes endereços NÃO pode ser atribuído a um host ao usar uma máscara de sub-rede 255.255.254.0 ?</h3>
        
            <div>
                <input type='radio' name='answerTwentyfive' id='answerTwentyfive' value='A' />
                <label for='answerTwentyfiveA'>A) 186.54.3.0 </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyfive' id='answerTwentyfive' value='B' />
                <label for='answerTwentyfiveB'>B) 113.10.4.0 </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyfive' id='answerTwentyfive' value='C' />
                <label for='answerTwentyfiveC'>C) 175.33.3.255 </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 26){
    
    echo "
    <form action='process.php?id=26' method='post' id='quizForm' id='26'>
   
        <li>
            <h3> A partir dos conceitos de conectividade, Cabo Crossover, conhecido como cabo cruzado, é um cabo de rede par trançado, que permite a ligação de dois computadores pelas respectivas placas de rede sem a necessidade de um concentrador (Hub ou Switch). A ligação é feita com um cabo de par trançado onde tem-se em uma ponta o padrão T568A e, em outra, o padrão T568B. A sequência de cores correta para a confecção do padrão T568B é:</h3>
        
            <div>
                <input type='radio' name='answerTwentysix' id='answerTwentysix' value='A' />
                <label for='answerTwentysixA'>A) Branco/verde, verde, branco / laranja, azul, branco / azul, laranja, branco / marrom, marrom</label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentysix' id='answerTwentysix' value='B' />
                <label for='answerTwentysixB'>B) Branco / laranja, laranja, branco / verde, azul, branco / azul, verde, branco / marrom, marrom</label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentysix' id='answerTwentysix' value='C' />
                <label for='answerTwentysixC'>C) Verde, branco / verde, azul, branco / azul, laranja, branco / laranja, branco / marrom, marrom</label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 27){
    
    echo "
    <form action='process.php?id=27' method='post' id='quizForm' id='27'>
   
        <li>
            <h3> Analise as seguintes afirmativas sobre administração e configuração de recursos e utilitários do sistema operacional Windows Server. </h3>
            <h3>I.O Windows Server 2003 utiliza um serviço de diretório denominado Active Directory. Para instalar esse serviço, é necessário que o DNS esteja previamente instalado e funcional. </h3>
            <h3>II.No prompt, com privilégio de administrador, podemos executar o comando ipconfig /flushdns para forçar o registro de um nome de host no servidor DNS. </h3>
            <h3>III.O comando ipconfig, do sistema operacional Windows, é similar ao comando ifconfig, do sistema operacional Linux. Estão CORRETAS as afirmativas:</h3>
        
            <div>
                <input type='radio' name='answerTwentyseven' id='answerTwentyseven' value='A' />
                <label for='answerTwentysevenA'>A) I e II, apenas. </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyseven' id='answerTwentyseven' value='B' />
                <label for='answerTwentysevenB'>B) I, II e III. </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyseven' id='answerTwentyseven' value='C' />
                <label for='answerTwentysevenC'>C) I e III, apenas. </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 28){
    
    echo "
    <form action='process.php?id=28' method='post' id='quizForm' id='28'>
   
        <li>
            <h3>São os mesmos comandos utilizados, tanto no ambiente Windows quanto no ambiente Linux, na resolução de problemas relacionados com a comunicação de um cliente ou servidor com a rede:</h3>
            
            <h3>I. NETSTAT: apresenta algumas estatísticas e estado das conexões.</h3>
            <h3>II. PING: permite verificar se a configuração TCP/IP está funcionando ou se um sistema TCP/IP remoto está disponível. </h3>
            <h3>III. ROUTE: manipula a tabela de roteamento do computador, apresenta, remove e adiciona rotas.</h3>
            <h3>IV. TRACERT: obtém o caminho que um pacote atravessa por uma rede de computadores até chegar ao destinatário.</h3> 

            <h3> Está correto o que se afirma APENAS em </h3>

            <div>
                <input type='radio' name='answerTwentyeight' id='answerTwentyeight' value='A' />
                <label for='answerTwentyeightA'>A) I, II e III </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyeight' id='answerTwentyeight' value='B' />
                <label for='answerTwentyeightB'>B) I, II e IV </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentyeight' id='answerTwentyeight' value='C' />
                <label for='answerTwentyeightC'>C) I, III e IV </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 29){
    
    echo "
    <form action='process.php?id=29' method='post' id='quizForm' id='29'>
   
        <li>
            <h3> Sobre os padrões IEEE. Assinale a alternativa que corresponde a cabeamento estruturado.  </h3>
        
            <div>
                <input type='radio' name='answerTwentynine' id='answerTwentynine' value='A' />
                <label for='answerTwentynineA'>A) IEEE 802.15 </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentynine' id='answerTwentynine' value='B' />
                <label for='answerTwentynineB'>B) IEEE 802.3 </label>
            </div>
        
            <div>
                <input type='radio' name='answerTwentynine' id='answerTwentynine' value='C' />
                <label for='answerTwentynineC'>C) IEEE 802.11 </label>
            </div>
            <br />
            <br />
                <p align='center'><input type='submit' value='Está certo?' /></p>
        </li>
             
    </form>";
}

if ($rid == 30){
    
    echo "
    <form action='process.php?id=30' method='post' id='quizForm' id='30'>
   
        <li>
            <h3> Sobre os padrões IEEE. Assinale a alternativa que corresponde a redes wifi.  </h3>
        
            <div>
                <input type='radio' name='answerThirty' id='answerThirty' value='A' />
                <label for='answerThirtyA'>A) IEEE 802.15 </label>
            </div>
        
            <div>
                <input type='radio' name='answerThirty' id='answerThirty' value='B' />
                <label for='answerThirtyB'>B) IEEE 802.3 </label>
            </div>
        
            <div>
                <input type='radio' name='answerThirty' id='answerThirty' value='C' />
                <label for='answerThirtyC'>C) IEEE 802.11 </label>
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