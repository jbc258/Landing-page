<?php

session_start(); // Start the session
include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Usuário</title>
    <style>
        * {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}


body {
	font-family: Arial, sans-serif;
	background-color: #cdcaca;
	color: #333;
}

header {
	background-color: #333;
	padding: 20px;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

nav li {
	margin: 0 10px;
}

nav a {
	color: #fff;
	text-decoration: none;
	font-size: 18px;
}

.social-logo {
	width: 30px;
	height: 30px;
}


main {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 50px auto;
  max-width: 800px;
}

/* Style the main heading */
h1 {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 20px;
    font-family: fantasy;
    margin-top: -2%;
    position: absolute;
}

/* Style the paragraph text */
p {
  font-size: 1.2rem;
  text-align: center;
  margin-top: -1%;
  position: absolute;
}

.pmain{
  font-size: 1.2rem;
    text-align: center;
    margin-top: 13%;
    position: relative;
}


        .container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            font-family: cursive;
    font-size: 17px;
        }

        .container h1 {
            text-align: center;
            color: #333;
        }

        .message {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

       

        .Pokedexstyle{
    font-size: 40px;
    padding: 5px;
}

.subtitle{
    font-size: 20px;
    margin-top: 55px;
    margin-left: 0%;
    background-color: white;
    border-radius: 14px;
    width: 90%;
}

.Pokedex{
    height: 720px;
    width: 1229px;
    display: contents;
}

.Container-inferior{
    width: 972px;
    height: 93px;
    background-color: #43266c00;
    position: relative;
    margin-top: -167px;
    margin-left: 7.3%;
}


.Espaco-imagem{
    height: 298px;
    width: 297px;
    background-color: rgb(228, 184, 228);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemGrama{
    height: 298px;
    width: 297px;
    background-color: rgb(36 185 123);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemAgua{
    height: 298px;
    width: 297px;
    background-color: rgb(113 184 231);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemFogo{
    height: 298px;
    width: 297px;
    background-color: rgb(239 61 61);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemRaio{
    height: 298px;
    width: 297px;
    background-color: rgb(236, 234, 72);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemFantasma{
    height: 298px;
    width: 297px;
    background-color: rgb(74, 19, 136);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemPsiquico{
    height: 298px;
    width: 297px;
    background-color: rgb(143, 56, 241);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemVenenoso{
    height: 298px;
    width: 297px;
    background-color: rgba(86, 51, 126, 0.568);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemVoador{
    height: 298px;
    width: 297px;
    background-color: rgb(224, 213, 236);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemPedra{
    height: 298px;
    width: 297px;
    background-color: rgb(194, 157, 109);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemTerra{
    height: 298px;
    width: 297px;
    background-color: rgb(185, 98, 76);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemInseto{
    height: 298px;
    width: 297px;
    background-color: rgb(106, 236, 55);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemLutador{
    height: 298px;
    width: 297px;
    background-color: rgb(202, 199, 157);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}

.Espaco-imagemDragao{
    height: 298px;
    width: 297px;
    background-color: rgb(25 112 100);
    position: absolute;
    margin-top: 15px;
    margin-left: 3px;
}


.parte-esquerda{
    margin-left: 57.51%;
    margin-top: -147.1%;
    background-color: #f0f8ff00;
    height: 314px;
    width: 301px;
    position: relative;
    
}

#imagem3d{
    display: none;
}

.modelo-3d{
    position: absolute;
    margin-left: 42%;
    margin-top: 253px;
}

.modelo-3dMachamp{
    position: absolute;
    margin-left: 42%;
    margin-top: 232px;
}

.modelo-3dMoth {
    position: absolute;
    margin-left: 30%;
    margin-top: 234px;
}


.modelo-3dM2{
    position: absolute;
    margin-left: 26%;
    margin-top: 253px;
}

.modelo-3dVeno{
    position: absolute;
    margin-left: 32%;
    margin-top: 253px;
}

.modelo-3dChar{
    position: absolute;
    margin-left: 32%;
    margin-top: 238px;
}

.modelo-3dIvy{
    position: absolute;
    margin-left: 39%;
    margin-top: 253px;
}

.modelo-3dBlast{
    position: absolute;
    margin-left: 35%;
    margin-top: 253px;
}

.modelo-3dPdgeote{
    position: absolute;
    margin-left: 27%;
    margin-top: 217px;
}

.modelo-3dFear{
    position: absolute;
    margin-left: 24%;
    margin-top: 228px;
}

.modelo-3dArt {
    position: absolute;
    margin-left: 21%;
    margin-top: 229px;
}

.modelo-3dZap {
    position: absolute;
    margin-left: 25%;
    margin-top: 227px;
}

.modelo-3dMol {
    position: absolute;
    margin-left: 15%;
    margin-top: 227px;
}

.modelo-3dAero {
    position: absolute;
    margin-left: 18%;
    margin-top: 223px;
}

.modelo-3d2 {
    position: absolute;
    margin-left: 36%;
    margin-top: 253px;
}

.modelo-3d3 {
    position: absolute;
    margin-left: 42%;
    margin-top: 278px;
}

.modelo-3degg {
    position: absolute;
    margin-left: 28%;
    margin-top: 234px;
}

.modelo-3dGolbat {
    position: absolute;
    margin-left: 24%;
    margin-top: 218px;
}

.modelo-3dekans{
    position: absolute;
    margin-left: 43%;
    margin-top: 289px;
}

.modelo-3dTrio{
    position: absolute;
    margin-left: 40%;
    margin-top: 283px;
}

.modelo-3dScy{
    position: absolute;
    margin-left: 33%;
    margin-top: 228px;}


.modelo-3dMr {
        position: absolute;
        margin-left: 38%;
        margin-top: 253px;
}

.modelo-3dRai {
    position: absolute;
    margin-left: 39%;
    margin-top: 231px;
}

.modelo-3dStar {
    position: absolute;
    margin-left: 42%;
    margin-top: 257px;
}

.modelo-3dfish {
    position: absolute;
    margin-left: 38%;
    margin-top: 251px;
}

.modelo-3dOvo {
    position: absolute;
    margin-left: 38%;
    margin-top: 300px;
}

.modelo-3dOnix {
    position: absolute;
    margin-left: 38%;
    margin-top: 218px;
}

.modelo-3dGraveler {
    position: absolute;
    margin-left: 32%;
    margin-top: 274px;
}

.modelo-3dGolem {
    position: absolute;
    margin-left: 32%;
    margin-top: 258px;
}

.modelo-3dGeodude{
    position: absolute;
    margin-left: 37%;
    margin-top: 264px;
}

.quadrado-matrix{
    
    position: absolute;
    width: 100px;
    height: 100px;
    margin-left: 96px;
    margin-top: 233px;
}


.Container-nome{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    height: 39px;
    width: 242px;
    background-color: #fcfcfc63;
    text-align: center;
    position: absolute;
    border-radius: 15px;
    margin-top: 9px;
    margin-left: -6px;
}

.Nome{
    color: #302a2a;
    font-size: 25px;
    margin-top: 3px;
}

.Container-numero{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    height: 39px;
    width: 242px;
    background-color: #fcfcfc63;
    text-align: center;
    position: absolute;
    border-radius: 15px;
    margin-top: 132px;
    margin-left: -1%;

}

.Numero{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 25px;
    width: 36px;
    color: #302a2a;
    text-align: center;
    margin-top: 3px;
    margin-left: 94px;
    
}

.Container-Tipo{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    height: 39px;
    width: 242px;
    background-color: #fcfcfc63;
    text-align: center;
    position: absolute;
    border-radius: 15px;
    margin-top: 85%;
    margin-left: -1%;
}

.Tipo{
    color: #302a2a;
    font-size: 25px;
    font-weight: bolder;
}

.Container-Regiao{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    height: 39px;
    width: 242px;
    background-color: #fcfcfc63;
    text-align: center;
    position: absolute;
    border-radius: 15px;
    margin-top: 128%;
    margin-left: -1%;
}

.Regiao{
    color: #302a2a;
    font-size: 25px;
    font-weight: bolder;
}

.Container-Status{
    font-family: calibri;
    height: 39px;
    width: 242px;
    background-color: #fcfcfc63;
    text-align: center;
    position: absolute;
    border-radius: 15px;
    margin-top: -19px;
    margin-left: 86%;
    list-style:none;
}

.Status{
    width: 224px;
    color: #302a2a;
    font-size: 25px;
    font-weight: bolder;
    margin-top: -17px;
    position: absolute;
    height: 52px;
    margin-left: 57%;
    font-family: calibri;
    list-style:none;
}

#botaostatus{
    background-color: white;
    position: absolute;
    margin-left: 684px;
    margin-top: 11px;
    border-radius: 69px;
    height: 43px;
    width: 43px;
    cursor: pointer;
}



#botaostatus:hover{
    background-color: black;
}

.stats_box{
    list-style: none;
}

.listats1{
    list-style: none;
}

.stats_box.ch{
    list-style:none;
    display: none;     
}


.status_prop {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-family: Arial, sans-serif;
    width: 122px;
    height: 143px;
    text-align: center;
    padding: 10px;
    position: absolute;
    top: 487px;
    left: -162px;
    font-size: 18px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s, transform 0.3s;
}


.status_prop:hover {
    background-color: #e0e0e0; 
    transform: scale(1.05); 
}

.cartao{
    display: flex;
    opacity: 0;
    position:absolute

}

.cartao.selecionado{
    opacity: 1;
    z-index: 1;
}



.botao-hide{
    width: 70px;
    height: 70px;
    margin-left: 0px;
    margin-top: 0px;
}

.img-pokemon{
    margin-top: 33px;
    margin-left: 29px;
    width: auto;
    height: auto;
    position: relative;
}

.evoluido{
    width: 302px;
    height: 300px;
    margin-left: -9px;
    margin-top: -2px;
}

#next-btn{
    margin-top: 2%;
    margin-left: 13%;
    width: 40px;
    height: 40px;
    border-radius: 25px;
}

#prev-btn{
    margin-top: 2%;
    margin-left: 13%;
    width: 40px;
    height: 40px;
    border-radius: 25px;
}

#prev-btn:hover{
    background-color: aqua;
}

#next-btn:hover{
    background-color: aqua;
}
  
#auto-type {
    display: inline-block;
    width: 0;
    overflow: hidden;
  }

.digitar {
    color: white;
    overflow: hidden;
    border-right: 0.15em solid white;
    white-space: nowrap;
    margin: 0 auto;
    letter-spacing: 0.15em;
    animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
  }
  
#imagem3d{
    display: none;
}


.Parte-direita
{
    background-color: #00ffff00;
    margin-top: -565px;
    margin-left: 811px;
    position: absolute;
    height: 420px;
    width: 284px;
}

#btn{
    background-color: rgb(240, 248, 255);
    width: 70px;
    height: 70px;
    border-radius: 50px;
    border: 0;
    cursor: pointer;
    position: absolute;
    margin-top: 2px;
    margin-left: 195px;
}



#btn:hover{
    background-color: rgb(200, 19, 19);
}


h2 {
    font-size: 18px;
    font-weight: normal;
    line-height: 1.5;
    color: white;
    position: absolute;
  }
  
#pokemon-search{
    background-color: #589f9f;
    border: solid 1px;
    border-radius: 15px;
    width: 300px;
    height: 33px;
    margin-top: -49%;
    margin-left: 9%;
  }
  
#txtBusca{
    float:left;
    background-color:transparent;
    padding-left:5px;
    font-style:italic;
    font-size:18px;
    border:none;
    height:32px;
    width:292px
  }

#imagem3d{
    display: none;
}

.SecDex{
    margin-top: 10%;
    position: absolute;
    padding: 24px;
    margin-left: -1%;
}

.box.selecionada{
    margin-left: -1%;
    margin-top: -84%;
    position: relative;
}
    </style>
</head>
<body>
<header>
		<nav>
			<ul>
				<li><a href="http://localhost/Pokedex/index.php">Home</a></li>
				<li><a href="http://localhost/Pokedex/pokedex.php">Pokedex</a></li>
				<li><a href="https://www.instagram.com/julio_casablancas/" target="_blank"><img class="social-logo" src="imagens/instagram-social.png"></a></li>
				<li><a href="https://www.linkedin.com/in/julio-bonfatti-cremasco-4b0489114/" target="_blank"><img class="social-logo" src="imagens/linkedin.png"></a></li>
			</ul>
		</nav>
	</header>
        <main>

            <h1>Pokedex</h1>
		<p class="subtitle">Eu resolvi criar uma pokedex sem a utilização de Api. Isso tornou o processo um pouco mais lento (Muito mais lento) no entanto, foi divertido de fazer e ficou bem original.</p>
		

        <section class="SecDex">

            <h2 class="h2">Projeto Pokedex</h2>
        
            <h3 class="h3" id="digitar-frase"></h3>
        
        <div class="Pokedex"> <img
                src="imagens/Pokedex 5 botões.jpg"
                alt="Pokedex">
        
              <div class="Container-inferior">
                <button id="btn">
                    <img class="botao-hide"
                        src="imagens/3dbutton-removebg-preview.png"
                        alt="botao direito">
                </button>
        
                <button id="botaostatus">
                    <div class="Container-Status"></div>
                    <span class="Status">
                        < Click for Status</span>
                </button>
        
                <button id="prev-btn"><</button>
                <button id="next-btn">></button> 
        
                <div id="pokemon-search">
                    <input type="text" id="txtBusca" placeholder="Search by pokemon name...">
                  </div>
            
            </div>
        
        <ul class="lista-pokemons">
        
        
            <li class="cartao selecionado">
        
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Bulbassaur</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#001</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
        
        
                    <div class="stats_box escolhida" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 45</li>
                                <li class= "listats1">Atack: 49</li>
                                <li class= "listats1">Defense: 49</li>
                                <li class= "listats1">Sp.Atk: 65</li>
                                <li class= "listats1">Sp.Def: 65</li>
                                <li class= "listats1">Speed: 45</li>
                            </ul>
        
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
        
                <div class="Espaco-imagemGrama">
                    <img class="img-pokemon" src="imagens\001.png"
                        alt="imagem bulbassauro">
        
                <div class="box selecionada" style="display: none">
                <div>
                    <img class="quadrado-matrix"
                        src="imagens/backmatrix.gif"
                        alt="fundo matrix">
                </div>
        
                    <img class="modelo-3d"
                        src="imagens\bulbasaur gif.gif"
                        alt="bulbassaur gif">
                </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Ivysaur</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#002</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class="listats1">Hp: 60</li>
                                <li class="listats1">Atack: 62</li>
                                <li class="listats1">Defense: 63</li>
                                <li class="listats1">Sp.Atk: 80</li>
                                <li class="listats1">Sp.Def: 80</li>
                                <li class="listats1">Speed: 60</li>
                            </ul>
        
                        </div>
                    </div>
                </div>
                
                <div class="parte-esquerda">
                    <div class="Espaco-imagemGrama">
                        <img class="img-pokemon" src="imagens\002.png"
                            alt="imagem Ivyssaur">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dIvy"
                                src="imagens\ivysaur gif.gif"
                                alt="Ivyssaur gif">
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Venusaur</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#003</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
        
        
                    <div class="stats_box" style="display: none">
                        <ul class="status_prop">
                            <li class= "listats1">Hp: 80</li>
                            <li class= "listats1">Atack: 82</li>
                            <li class= "listats1">Defense: 83</li>
                            <li class= "listats1">Sp.Atk: 100</li>
                            <li class= "listats1">Sp.Def: 100</li>
                            <li class= "listats1">Speed: 80</li>
                        </ul>
        
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemGrama">
                        <img class="img-pokemon"
                            src="imagens\003.png"
                            alt="imagem Venossauro">
                        <div class=" box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dVeno"
                                src="imagens\venusaur gif.gif"
                                alt="venusaur gif">
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Charmander</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#004</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
        
        
                    <div class="stats_box" style="display: none">
                        <ul class="status_prop">
                            <li class= "listats1">Hp: 39</li>
                            <li class= "listats1">Atack: 52</li>
                            <li class= "listats1">Defense: 43</li>
                            <li class= "listats1">Sp.Atk: 60</li>
                            <li class= "listats1">Sp.Def: 50</li>
                            <li class= "listats1">Speed: 65</li>
                        </ul>
        
                    </div>
                </div>
        
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon" src="imagens\004.png"
                            alt="imagem Charmander">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\charmander gif.gif"
                                alt="Charmander gif">
                        </div>
                    </div>
                </div>
            </li>
        
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Charmeleon</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#005</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
        
        
                    <div class="stats_box" style="display: none">
                        <ul class="status_prop">
                            <li class= "listats1">Hp: 58</li>
                            <li class= "listats1">Atack: 64</li>
                            <li class= "listats1">Defense: 58</li>
                            <li class= "listats1">Sp.Atk: 80</li>
                            <li class= "listats1">Sp.Def: 65</li>
                            <li class= "listats1">Speed: 80</li>
                        </ul>
        
                    </div>
                </div>
        
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon" src="imagens\005.png"
                            alt="imagem Charmeleon">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\charmeleon gif.gif"
                                alt="Charmeleon gif">
        
                        </div>
                    </div>
                </div>
            </li>
        
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Charizard</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#006</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <ul class="status_prop">
                            <li class= "listats1">Hp: 78</li>
                            <li class= "listats1">Atack: 84</li>
                            <li class= "listats1">Defense: 78</li>
                            <li class= "listats1">Sp.Atk: 109</li>
                            <li class= "listats1">Sp.Def: 85</li>
                            <li class= "listats1">Speed: 100</li>
                        </ul>
        
                    </div>
                </div>
        
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon"
                            src="imagens\006.png" alt="imagem Charizard">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dChar"
                                src="imagens\Charizardresized2.gif"
                                alt="Charizard gif">
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Squirtle</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#007</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 44</li>
                                <li class= "listats1">Atack: 48</li>
                                <li class= "listats1">Defense: 65</li>
                                <li class= "listats1">Sp.Atk: 50</li>
                                <li class= "listats1">Sp.Def: 64</li>
                                <li class= "listats1">Speed: 43</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon" src="imagens\007.png"
                            alt="imagem Squirtle">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\squirtle gif.gif"
                                alt="Squirtle gif">
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Wartortle</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#008</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <ul class="status_prop">
                            <li class= "listats1">Hp: 59</li>
                            <li class= "listats1">Atack: 63</li>
                            <li class= "listats1">Defense: 80</li>
                            <li class= "listats1">Sp.Atk: 65</li>
                            <li class= "listats1">Sp.Def: 80</li>
                            <li class= "listats1">Speed: 58</li>
                        </ul>
        
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon" src="imagens\008.png"
                            alt="imagem Wartton">
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\wartortle gif.gif"
                                alt="Wartortle gif">
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Blastoise</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#009</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 79</li>
                                <li class= "listats1">Atack: 83</li>
                                <li class= "listats1">Defense: 100</li>
                                <li class= "listats1">Sp.Atk: 85</li>
                                <li class= "listats1">Sp.Def: 105</li>
                                <li class= "listats1">Speed: 78</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon" src="imagens\009.png"
                            alt="imagem Blastoise">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dBlast"
                                src="imagens\blastoise gif.gif"
                                alt="Blastoise gif">
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Caterpie</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#010</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 45</li>
                                <li class= "listats1">Atack: 30</li>
                                <li class= "listats1">Defense: 35</li>
                                <li class= "listats1">Sp.Atk: 20</li>
                                <li class= "listats1">Sp.Def: 20</li>
                                <li class= "listats1">Speed: 45</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon"
                            src="imagens\Caterpie.png"
                            alt="imagem caterpie">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\caterpie gif.gif"
                                alt="caterpie gif">
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Metapod</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#011</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 50</li>
                                <li class= "listats1">Atack: 20</li>
                                <li class= "listats1">Defense: 55</li>
                                <li class= "listats1">Sp.Atk: 25</li>
                                <li class= "listats1">Sp.Def: 25</li>
                                <li class= "listats1">Speed: 30</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon"
                            src="imagens\Metapod.png"
                            alt="imagem metapod">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\metapod gif.gif"
                                alt="metapod gif">
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Butterfree</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#012</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon"
                            src="imagens\Butterfree.png"
                            alt="imagem Butterfree">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2" src="imagens\butterfree gif.gif" alt="butterfree gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Atack: 45</li>
                                <Li class= "listats1">Defense: 50</Li>
                                <Li class= "listats1">Sp.Atk: 90</Li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Weedle</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#013</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 45</li>
                                <li class= "listats1">Atack: 35</li>
                                <Li class= "listats1">Defense: 30</Li>
                                <Li class= "listats1">Sp.Atk: 20</Li>
                                <li class= "listats1">Sp.Def: 20</li>
                                <li class= "listats1">Speed: 50</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon" src="imagens\Weedle.png"
                            alt="imagem Weedle">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\weedle gif.gif"
                                alt="Weedle gif">
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Kakuna</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#014</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 45</li>
                                <li class= "listats1">Atack: 25</li>
                                <Li class= "listats1">Defense: 50</Li>
                                <Li class= "listats1">Sp.Atk: 25</Li>
                                <li class= "listats1">Sp.Def: 25</li>
                                <li class= "listats1">Speed: 35</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon" src="imagens\Kakuna.png"
                            alt="imagem Kakuna">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\kakuna gif.gif"
                                alt="kakuna gif">
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Beedrill</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#015</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Atack: 90</li>
                                <Li class= "listats1">Defense: 40</Li>
                                <Li class= "listats1">Sp.Atk: 45</Li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 75</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon"
                            src="imagens\Beedrill.png"
                            alt="imagem Beedrill">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\beedrill gif.gif"
                                alt="Beedrill gif">
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Pidgey</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#016</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Atack: 45</li>
                                <Li class= "listats1">Defense: 40</Li>
                                <Li class= "listats1">Sp.Atk: 35</Li>
                                <li class= "listats1">Sp.Def: 35</li>
                                <li class= "listats1">Speed: 56</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVoador">
                        <img class="img-pokemon" src="imagens\Pidgey.png"
                            alt="imagem Pidgey">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\pidgey gif.gif"
                                alt="Pidgey gif">
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Pidgeotto</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#017</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVoador">
                        <img class="img-pokemon"
                            src="imagens\Pidgeotto.png"
                            alt="imagem Pidgeotto">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dPdgeote"
                                src="imagens\pidgeotto gif.gif"
                                alt="Pidgeotto gif">
                        </div>
                    </div>
                </div>
        
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 63</li>
                                <li class= "listats1">Atack: 60</li>
                                <Li class= "listats1">Defense: 55</Li>
                                <Li class= "listats1">Sp.Atk: 50</Li>
                                <li class= "listats1">Sp.Def: 50</li>
                                <li class= "listats1">Speed: 70</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Pidgeot</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#018</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVoador">
                        <img class="img-pokemon"
                            src="imagens\Pidgeot.png"
                            alt="imagem Pidgeot">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dPdgeote"
                                src="imagens\pidgeot gif.gif"
                                alt="Pidgeot gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 83</li>
                                <li class= "listats1">Atack: 80</li>
                                <Li class= "listats1">Defense: 75</Li>
                                <Li class= "listats1">Sp.Atk: 70</Li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 101</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Rattata</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#019</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Rattata.png"
                            alt="imagem Rattata">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\rattata gif.gif"
                                alt="Rattata gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 30</li>
                                <li class= "listats1">Atack: 56</li>
                                <Li class= "listats1">Defense: 35</Li>
                                <Li class= "listats1">Sp.Atk: 25</Li>
                                <li class= "listats1">Sp.Def: 35</li>
                                <li class= "listats1">Speed: 72</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Raticate</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#020</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Raticate.png"
                            alt="imagem Raticate">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\raticate gif.gif"
                                alt="Raticate gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 55</li>
                                <li class= "listats1">Atack: 81</li>
                                <Li class= "listats1">Defense: 60</Li>
                                <Li class= "listats1">Sp.Atk: 50</Li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 97</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Spearow</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#021</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVoador">
                        <img class="img-pokemon"
                            src="imagens\Spearow.png"
                            alt="imagem Spearow">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\spearow gif.gif"
                                alt="Spearow gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Atack: 60</li>
                                <Li class= "listats1">Defense: 30</Li>
                                <Li class= "listats1">Sp.Atk: 31</Li>
                                <li class= "listats1">Sp.Def: 31</li>
                                <li class= "listats1">Speed: 70</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Fearow</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#022</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVoador">
                        <img class="img-pokemon" src="imagens\Fearow.png"
                            alt="imagem Fearow">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dFear"
                                src="imagens\fearow gif.gif"
                                alt="Fearow gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Atack: 90</li>
                                <Li class= "listats1">Defense: 65</Li>
                                <Li class= "listats1">Sp.Atk: 61</Li>
                                <li class= "listats1">Sp.Def: 61</li>
                                <li class= "listats1">Speed: 100</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Ekans</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#023</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon" src="imagens\Ekans.png"
                            alt="imagem Ekans">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dekans"
                                src="imagens\ekans gif.gif"
                                alt="Ekans gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 35</li>
                                <li class= "listats1">Atack: 60</li>
                                <Li class= "listats1">Defense: 44</Li>
                                <Li class= "listats1">Sp.Atk: 40</Li>
                                <li class= "listats1">Sp.Def: 54</li>
                                <li class= "listats1">Speed: 55</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Arbok</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#024</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon" src="imagens\Arbok.png"
                            alt="imagem Arbok">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\arbok gif.gif"
                                alt="Arbok gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Atack: 95</li>
                                <Li class= "listats1">Defense: 69</Li>
                                <Li class= "listats1">Sp.Atk: 65</Li>
                                <li class= "listats1">Sp.Def: 79</li>
                                <li class= "listats1">Speed: 80</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Pikachu</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#025</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Eletrico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemRaio">
                        <img class="img-pokemon"
                            src="imagens\Pikachu.png"
                            alt="imagem Pikachu">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\pikachu gif.gif"
                                alt="Pikachu gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 35</li>
                                <li class= "listats1">Atack: 55</li>
                                <Li class= "listats1">Defense: 40</Li>
                                <Li class= "listats1">Sp.Atk: 50</Li>
                                <li class= "listats1">Sp.Def: 50</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Raichu</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#026</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Eletrico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemRaio">
                        <img class="img-pokemon" src="imagens\Raichu.png"
                            alt="imagem Raichu">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dRai"
                                src="imagens\raichu gif.gif"
                                alt="Raichu gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Atack: 90</li>
                                <Li class= "listats1">Defense: 55</Li>
                                <Li class= "listats1">Sp.Atk: 90</Li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 100</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Sandshrew</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#027</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Terra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemTerra">
                        <img class="img-pokemon"
                            src="imagens\Sandshrew.png"
                            alt="imagem Sandshrew">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\sandshrew gif.gif"
                                alt="Sandshrew gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 50</li>
                                <li class= "listats1">Atack: 75</li>
                                <Li class= "listats1">Defense: 85</Li>
                                <Li class= "listats1">Sp.Atk: 20</Li>
                                <li class= "listats1">Sp.Def: 30</li>
                                <li class= "listats1">Speed: 40</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Sandslash</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#028</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Terra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemTerra">
                        <img class="img-pokemon"
                            src="imagens\Sandslash.png"
                            alt="imagem Sandslash">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\sandslash gif.gif"
                                alt="Sandslash gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 75</li>
                                <li class= "listats1">Atack: 100</li>
                                <Li class= "listats1">Defense: 110</Li>
                                <Li class= "listats1">Sp.Atk: 45</Li>
                                <li class= "listats1">Sp.Def: 55</li>
                                <li class= "listats1">Speed: 65</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Nidoran F</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#029</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon"
                            src="imagens\Nidoran femea.png"
                            alt="imagem Nidoran F">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Nidoran femea gif.gif"
                                alt="Nidoran F gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 55</li>
                                <li class= "listats1">Atack: 47</li>
                                <Li class= "listats1">Defense: 52</Li>
                                <Li class= "listats1">Sp.Atk: 40</Li>
                                <li class= "listats1">Sp.Def: 40</li>
                                <li class= "listats1">Speed: 41</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Nidoranina</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#030</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon"
                            src="imagens\Nidorina.png"
                            alt="imagem Nidoranina">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\nidorina gif.gif"
                                alt="Nidoranina gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 70</li>
                                <li class= "listats1">Atack: 62</li>
                                <Li class= "listats1">Defense: 67</Li>
                                <Li class= "listats1">Sp.Atk: 55</Li>
                                <li class= "listats1">Sp.Def: 55</li>
                                <li class= "listats1">Speed: 56</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Nidoqueen</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#031</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso e Terra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon"
                            src="imagens\Nidoqueen.png"
                            alt="imagem Nidoqueen">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\nidoqueen gif.gif"
                                alt="Nidoqueen gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 90</li>
                                <li class= "listats1">Atack: 92</li>
                                <Li class= "listats1">Defense: 87</Li>
                                <Li class= "listats1">Sp.Atk: 75</Li>
                                <li class= "listats1">Sp.Def: 85</li>
                                <li class= "listats1">Speed: 76</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Nidoran M</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#032</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon"
                            src="imagens\Nidoran macho.png"
                            alt="imagem Nidoran macho">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\nidoran macho gif.gif"
                                alt="Nidoran macho gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 46</li>
                                <li class= "listats1">Atack: 57</li>
                                <Li class= "listats1">Defense: 40</Li>
                                <Li class= "listats1">Sp.Atk: 40</Li>
                                <li class= "listats1">Sp.Def: 40</li>
                                <li class= "listats1">Speed: 50</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Nidorino</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#033</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon"
                            src="imagens\Nidorino.png"
                            alt="imagem Nidorino">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\nidorino gif.gif"
                                alt="Nidorino gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 61</li>
                                <li class= "listats1">Atack: 72</li>
                                <Li class= "listats1">Defense: 57</Li>
                                <Li class= "listats1">Sp.Atk: 55</Li>
                                <li class= "listats1">Sp.Def: 55</li>
                                <li class= "listats1">Speed: 65</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Nidoking</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#034</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso e Terra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon"
                            src="imagens\Nidoking.png"
                            alt="imagem Nidoking">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\nidoking gif.gif"
                                alt="Nidoking gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 81</li>
                                <li class= "listats1">Atack: 102</li>
                                <Li class= "listats1">Defense: 77</Li>
                                <Li class= "listats1">Sp.Atk: 85</Li>
                                <li class= "listats1">Sp.Def: 75</li>
                                <li class= "listats1">Speed: 85</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Clefairy</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#035</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fada</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Clefairy.png"
                            alt="imagem Clefairy">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\clefairy gif.gif"
                                alt="Clefairy gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 70</li>
                                <li class= "listats1">Atack: 45</li>
                                <Li class= "listats1">Defense: 48</Li>
                                <Li class= "listats1">Sp.Atk: 60</Li>
                                <li class= "listats1">Sp.Def: 65</li>
                                <li class= "listats1">Speed: 35</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Clefable</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#036</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fada</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Clefable.png"
                            alt="imagem Clefable">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\clefable gif.gif"
                                alt="Clefable gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 95</li>
                                <li class= "listats1">Atack: 70</li>
                                <Li class= "listats1">Defense: 73</Li>
                                <Li class= "listats1">Sp.Atk: 95</Li>
                                <li class= "listats1">Sp.Def: 90</li>
                                <li class= "listats1">Speed: 60</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Vulpix</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#037</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon" src="imagens\Vulpix.png"
                            alt="imagem Vulpix">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\vulpix gif.gif"
                                alt="Vulpix gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 38</li>
                                <li class= "listats1">Atack: 41</li>
                                <Li class= "listats1">Defense: 40</Li>
                                <Li class= "listats1">Sp.Atk: 50</Li>
                                <li class= "listats1">Sp.Def: 65</li>
                                <li class= "listats1">Speed: 65</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Ninetales</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#038</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon"
                            src="imagens\Ninetales.png"
                            alt="imagem Ninetales">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\ninetales gif.gif"
                                alt="Ninetales gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 73</li>
                                <li class= "listats1">Atack: 76</li>
                                <Li class= "listats1">Defense: 75</Li>
                                <Li class= "listats1">Sp.Atk: 81</Li>
                                <li class= "listats1">Sp.Def: 100</li>
                                <li class= "listats1">Speed: 100</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Jigglypuff</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#039</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal e Fada</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Jigglypuff.png"
                            alt="imagem Jigglypuff">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\jigglypuff gif.gif"
                                alt="Jigglypuff gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 115</li>
                                <li class= "listats1">Atack: 45</li>
                                <Li class= "listats1">Defense: 20</Li>
                                <Li class= "listats1">Sp.Atk: 45</Li>
                                <li class= "listats1">Sp.Def: 25</li>
                                <li class= "listats1">Speed: 20</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Wigglytuff</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#040</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal e Fada</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Wigglytuff.png"
                            alt="imagem Wigglytuff">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\wigglytuff gif.gif"
                                alt="Wigglytuff gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 140</li>
                                <li class= "listats1">Atack: 70</li>
                                <Li class= "listats1">Defense: 45</Li>
                                <Li class= "listats1">Sp.Atk: 85</Li>
                                <li class= "listats1">Sp.Def: 50</li>
                                <li class= "listats1">Speed: 45</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Zubat</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#041</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon" src="imagens\Zubat.png"
                            alt="imagem Zubat">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Zubat gif.gif"
                                alt="Zubat gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Atack: 45</li>
                                <Li class= "listats1">Defense: 35</Li>
                                <Li class= "listats1">Sp.Atk: 30</Li>
                                <li class= "listats1">Sp.Def: 40</li>
                                <li class= "listats1">Speed: 55</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Golbat</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#042</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon" src="imagens\Golbat.png"
                            alt="imagem Golbat">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dGolbat"
                                src="imagens\Golbat gif.gif"
                                alt="Golbat gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 75</li>
                                <li class= "listats1">Atack: 80</li>
                                <Li class= "listats1">Defense: 70</Li>
                                <Li class= "listats1">Sp.Atk: 65</Li>
                                <li class= "listats1">Sp.Def: 75</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Oddish</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#043</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemGrama">
                        <img class="img-pokemon" src="imagens\Oddish.png"
                            alt="imagem Oddish">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Oddish gif.gif"
                                alt="Oddish gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 45</li>
                                <li class= "listats1">Atack: 50</li>
                                <Li class= "listats1">Defense: 55</Li>
                                <Li class= "listats1">Sp.Atk: 75</Li>
                                <li class= "listats1">Sp.Def: 65</li>
                                <li class= "listats1">Speed: 30</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Gloom</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#044</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemGrama">
                        <img class="img-pokemon" src="imagens\Gloom.png"
                            alt="imagem Gloom">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Gloom gif.gif"
                                alt="Gloom gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Atack: 65</li>
                                <Li class= "listats1">Defense: 70</Li>
                                <Li class= "listats1">Sp.Atk: 85</Li>
                                <li class= "listats1">Sp.Def: 75</li>
                                <li class= "listats1">Speed: 40</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Vileplume</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#045</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemGrama">
                        <img class="img-pokemon"
                            src="imagens\Vileplume.png"
                            alt="imagem Vileplume">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Vileplume gif.gif"
                                alt="Vileplume gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 75</li>
                                <li class= "listats1">Atack: 80</li>
                                <Li class= "listats1">Defense: 85</Li>
                                <Li class= "listats1">Sp.Atk: 110</Li>
                                <li class= "listats1">Sp.Def: 90</li>
                                <li class= "listats1">Speed: 50</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Paras</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#046</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto e Grama</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon" src="imagens\Paras.png"
                            alt="imagem Paras">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Paras gif.gif"
                                alt="Paras gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 35</li>
                                <li class= "listats1">Atack: 70</li>
                                <Li class= "listats1">Defense: 55</Li>
                                <Li class= "listats1">Sp.Atk: 45</Li>
                                <li class= "listats1">Sp.Def: 55</li>
                                <li class= "listats1">Speed: 25</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Parasect</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#047</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto e Grama</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon"
                            src="imagens\Parasect.png"
                            alt="imagem Parasect">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Parasect gif.gif"
                                alt="Parasect gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Atack: 95</li>
                                <Li class= "listats1">Defense: 80</Li>
                                <Li class= "listats1">Sp.Atk: 60</Li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 30</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Venonat</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#048</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon"
                            src="imagens\Venonat.png"
                            alt="imagem Venonat">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Venonat gif.gif"
                                alt="Venonat gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Atack: 55</li>
                                <Li class= "listats1">Defense: 50</Li>
                                <Li class= "listats1">Sp.Atk: 40</Li>
                                <li class= "listats1">Sp.Def: 55</li>
                                <li class= "listats1">Speed: 45</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Venomoth</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#049</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon"
                            src="imagens\Venomoth.png"
                            alt="imagem Venomoth">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dMoth"
                                src="imagens\Venomoth gif.gif"
                                alt="Venomoth gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 70</li>
                                <li class= "listats1">Atack: 65</li>
                                <Li class= "listats1">Defense: 60</Li>
                                <Li class= "listats1">Sp.Atk: 90</Li>
                                <li class= "listats1">Sp.Def: 75</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Diglett</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#050</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Terra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemTerra">
                        <img class="img-pokemon"
                            src="imagens\Diglett.png"
                            alt="imagem Diglett">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dekans"
                                src="imagens\Diglett gif.gif"
                                alt="Diglett gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 10</li>
                                <li class= "listats1">Atack: 55</li>
                                <Li class= "listats1">Defense: 25</Li>
                                <Li class= "listats1">Sp.Atk: 35</Li>
                                <li class= "listats1">Sp.Def: 45</li>
                                <li class= "listats1">Speed: 95</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Dugtrio</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#051</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Terra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemTerra">
                        <img class="img-pokemon"
                            src="imagens\Dugtrio.png"
                            alt="imagem Dugtrio">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dTrio"
                                src="imagens\Dugtrio gif.gif"
                                alt="Dugtrio gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 35</li>
                                <li class= "listats1">Atack: 100</li>
                                <Li class= "listats1">Defense: 50</Li>
                                <Li class= "listats1">Sp.Atk: 50</Li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 120</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Meowth</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#052</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon" src="imagens\Meowth.png"
                            alt="imagem Meowth">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Meowth gif.gif"
                                alt="Meowth gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Atack: 45</li>
                                <Li class= "listats1">Defense: 35</Li>
                                <Li class= "listats1">Sp.Atk: 40</Li>
                                <li class= "listats1">Sp.Def: 40</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Persian</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#053</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Persian.png"
                            alt="imagem Persian">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Persian gif.gif"
                                alt="Persian gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Atack: 70</li>
                                <Li class= "listats1">Defense: 60</Li>
                                <Li class= "listats1">Sp.Atk: 65</Li>
                                <li class= "listats1">Sp.Def: 65</li>
                                <li class= "listats1">Speed: 115</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Psyduck</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#054</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Psyduck.png"
                            alt="imagem Psyduck">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Psyduck gif.gif"
                                alt="Psyduck gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 50</li>
                                <li class= "listats1">Atack: 52</li>
                                <Li class= "listats1">Defense: 48</Li>
                                <Li class= "listats1">Sp.Atk: 65</Li>
                                <li class= "listats1">Sp.Def: 50</li>
                                <li class= "listats1">Speed: 55</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Golduck</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#055</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Golduck.png"
                            alt="imagem Golduck">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Golduck gif.gif"
                                alt="Golduck gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 80</li>
                                <li class= "listats1">Atack: 82</li>
                                <Li class= "listats1">Defense: 78</Li>
                                <Li class= "listats1">Sp.Atk: 95</Li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 85</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Mankey</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#056</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Lutador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemLutador">
                        <img class="img-pokemon" src="imagens\Mankey.png"
                            alt="imagem Mankey">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Mankey gif.gif"
                                alt="Mankey gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Atack: 80</li>
                                <Li class= "listats1">Defense: 35</Li>
                                <Li class= "listats1">Sp.Atk: 35</Li>
                                <li class= "listats1">Sp.Def: 45</li>
                                <li class= "listats1">Speed: 70</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Primeape</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#057</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Lutador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemLutador">
                        <img class="img-pokemon"
                            src="imagens\Primeape.png"
                            alt="imagem Primeape">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Primeape gif.gif"
                                alt="Primeape gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Atack: 105</li>
                                <Li class= "listats1">Defense: 60</Li>
                                <Li class= "listats1">Sp.Atk: 60</Li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 95</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Growlithe</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#058</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon"
                            src="imagens\Growlithe.png"
                            alt="imagem Growlithe">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Growlithe gif.gif"
                                alt="Growlithe gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 55</li>
                                <li class= "listats1">Atack: 70</li>
                                <Li class= "listats1">Defense: 45</Li>
                                <Li class= "listats1">Sp.Atk: 70</Li>
                                <li class= "listats1">Sp.Def: 50</li>
                                <li class= "listats1">Speed: 60</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Arcanine</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#059</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon"
                            src="imagens\Arcanine.png"
                            alt="imagem Arcanine">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Arcanine gif.gif"
                                alt="Arcanine gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 90</li>
                                <li class= "listats1">Atack: 110</li>
                                <Li class= "listats1">Defense: 80</Li>
                                <Li class= "listats1">Sp.Atk: 100</Li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 95</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Poliwag</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#060</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Poliwag.png"
                            alt="imagem Poliwag">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Poliwag gif.gif"
                                alt="Poliwag gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Atack: 50</li>
                                <Li class= "listats1">Defense: 40</Li>
                                <Li class= "listats1">Sp.Atk: 40</Li>
                                <li class= "listats1">Sp.Def: 40</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Poliwhirl</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#061</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Poliwhril.png"
                            alt="imagem Poliwhirl">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Poliwhirl gif.gif"
                                alt="Poliwhirl gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Atack: 65</li>
                                <Li class= "listats1">Defense: 65</Li>
                                <Li class= "listats1">Sp.Atk: 50</Li>
                                <li class= "listats1">Sp.Def: 50</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Poliwrath</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#062</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua e Lutador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Poliwrath.png"
                            alt="imagem Poliwrath">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Poliwrath gif.gif"
                                alt="Poliwrath gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 90</li>
                                <li class= "listats1">Atack: 95</li>
                                <Li class= "listats1">Defense: 95</Li>
                                <Li class= "listats1">Sp.Atk: 70</Li>
                                <li class= "listats1">Sp.Def: 90</li>
                                <li class= "listats1">Speed: 70</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Abra</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#063</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPsiquico">
                        <img class="img-pokemon" src="imagens\Abra.png"
                            alt="imagem Abra">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\Abra gif.gif"
                                alt="Abra gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 25</li>
                                <li class= "listats1">Atack: 20</li>
                                <Li class= "listats1">Defense: 15</Li>
                                <Li class= "listats1">Sp.Atk: 105</Li>
                                <li class= "listats1">Sp.Def: 55</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Kadabra</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#064</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPsiquico">
                        <img class="img-pokemon"
                            src="imagens\Kadabra.png"
                            alt="imagem Kadabra">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\Kadabra gif.gif"
                                alt="Kadabra gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Atack: 35</li>
                                <Li class= "listats1">Defense: 30</Li>
                                <Li class= "listats1">Sp.Atk: 120</Li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 105</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Alakazam</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#065</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPsiquico">
                        <img class="img-pokemon"
                            src="imagens\Alakazam.png"
                            alt="imagem Alakazam">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\Alakazam gif.gif"
                                alt="Alakazam gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 55</li>
                                <li class= "listats1">Atack: 50</li>
                                <Li class= "listats1">Defense: 45</Li>
                                <Li class= "listats1">Sp.Atk: 135</Li>
                                <li class= "listats1">Sp.Def: 95</li>
                                <li class= "listats1">Speed: 120</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Machop</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#066</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Lutador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemLutador">
                        <img class="img-pokemon" src="imagens\Machop.png"
                            alt="imagem Machop">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Machop gif.gif"
                                alt="Machop gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 70</li>
                                <li class= "listats1">Atack: 80</li>
                                <Li class= "listats1">Defense: 50</Li>
                                <Li class= "listats1">Sp.Atk: 35</Li>
                                <li class= "listats1">Sp.Def: 35</li>
                                <li class= "listats1">Speed: 35</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Machoke</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#067</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Lutador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemLutador">
                        <img class="img-pokemon"
                            src="imagens\Machoke.png"
                            alt="imagem Machoke">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Machoke gif.gif"
                                alt="Machoke gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 80</li>
                                <li class= "listats1">Atack: 100</li>
                                <Li class= "listats1">Defense: 70</Li>
                                <Li class= "listats1">Sp.Atk: 50</Li>
                                <li class= "listats1">Sp.Def: 60</li>
                                <li class= "listats1">Speed: 45</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Machamp</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#068</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Lutador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemLutador">
                        <img class="img-pokemon"
                            src="imagens\Machamp.png"
                            alt="imagem Machamp">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dMachamp"
                                src="imagens\Machamp gif.gif"
                                alt="Machamp gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 90</li>
                                <li class= "listats1">Atack: 130</li>
                                <Li class= "listats1">Defense: 80</Li>
                                <Li class= "listats1">Sp.Atk: 65</Li>
                                <li class= "listats1">Sp.Def: 85</li>
                                <li class= "listats1">Speed: 55</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Bellsprout</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#069</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemGrama">
                        <img class="img-pokemon"
                            src="imagens\Bellsprout.png"
                            alt="imagem Bellsprout">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Bellsprout gif.gif"
                                alt="Bellsprout gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 50</li>
                                <li class= "listats1">Atack: 75</li>
                                <Li class= "listats1">Defense: 35</Li>
                                <Li class= "listats1">Sp.Atk: 70</Li>
                                <li class= "listats1">Sp.Def: 30</li>
                                <li class= "listats1">Speed: 40</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Weepinbell</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#070</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemGrama">
                        <img class="img-pokemon"
                            src="imagens\Weepinbell.png"
                            alt="imagem Weepinbell">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Weepinbell gif.gif"
                                alt="Weepinbell gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Atack: 90</li>
                                <Li class= "listats1">Defense: 50</Li>
                                <Li class= "listats1">Sp.Atk: 85</Li>
                                <li class= "listats1">Sp.Def: 45</li>
                                <li class= "listats1">Speed: 55</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Victreebel</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#071</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemGrama">
                        <img class="img-pokemon"
                            src="imagens\Victreebel.png"
                            alt="imagem Victreebel">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Victreebel gif.gif"
                                alt="Victreebel gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 80</li>
                                <li class= "listats1">Atack: 105</li>
                                <Li class= "listats1">Defense: 65</Li>
                                <Li class= "listats1">Sp.Atk: 100</Li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 70</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Tentacool</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#072</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Tentacool.png"
                            alt="imagem Tentacool">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Tentacool gif.gif"
                                alt="Tentacool gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Atack: 40</li>
                                <Li class= "listats1">Defense: 35</Li>
                                <Li class= "listats1">Sp.Atk: 50</Li>
                                <li class= "listats1">Sp.Def: 100</li>
                                <li class= "listats1">Speed: 70</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Tentacruel</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#073</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Tentacruel.png"
                            alt="imagem Tentacruel">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Tentacruel gif.gif"
                                alt="Tentacruel gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 80</li>
                                <li class= "listats1">Atack: 70</li>
                                <Li class= "listats1">Defense: 65</Li>
                                <Li class= "listats1">Sp.Atk: 80</Li>
                                <li class= "listats1">Sp.Def: 120</li>
                                <li class= "listats1">Speed: 100</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Geodude</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#074</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Pedra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPedra">
                        <img class="img-pokemon"
                            src="imagens\Geodude.png"
                            alt="imagem Geodude">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dGeodude"
                                src="imagens\Geodude gif.gif"
                                alt="Geodude gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Atack: 80</li>
                                <Li class= "listats1">Defense: 100</Li>
                                <Li class= "listats1">Sp.Atk: 30</Li>
                                <li class= "listats1">Sp.Def: 30</li>
                                <li class= "listats1">Speed: 20</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Graveler</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#075</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Pedra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPedra">
                        <img class="img-pokemon"
                            src="imagens\Graveler.png"
                            alt="imagem Graveler">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dGraveler"
                                src="imagens\Graveler gif.gif"
                                alt="Graveler gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 55</li>
                                <li class= "listats1">Atack: 95</li>
                                <Li class= "listats1">Defense: 115</Li>
                                <Li class= "listats1">Sp.Atk: 45</Li>
                                <li class= "listats1">Sp.Def: 45</li>
                                <li class= "listats1">Speed: 35</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Golem</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#076</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Pedra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPedra">
                        <img class="img-pokemon" src="imagens\Golem.png"
                            alt="imagem Golem">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dGolem"
                                src="imagens\Golem gif.gif"
                                alt="Golem gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 80</li>
                                <li class= "listats1">Atack: 120</li>
                                <Li class= "listats1">Defense: 130</Li>
                                <Li class= "listats1">Sp.Atk: 55</Li>
                                <li class= "listats1">Sp.Def: 65</li>
                                <li class= "listats1">Speed: 45</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Ponyta</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#077</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon" src="imagens\Ponyta.png"
                            alt="imagem Ponyta">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Ponyta gif.gif"
                                alt="Ponyta gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 50</li>
                                <li class= "listats1">Atack: 85</li>
                                <Li class= "listats1">Defense: 55</Li>
                                <Li class= "listats1">Sp.Atk: 65</Li>
                                <li class= "listats1">Sp.Def: 65</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Rapidash</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#078</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon"
                            src="imagens\Rapidash.png"
                            alt="imagem Rapidash">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Rapidash gif.gif"
                                alt="Rapidash gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Atack: 100</li>
                                <li class= "listats1">Defense: 70</li>
                                <li class= "listats1">Sp.Atk: 80</li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 105</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Slowpoke</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#079</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua e Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Slowpoke.png"
                            alt="imagem Slowpoke">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Slowpoke gif.gif"
                                alt="Slowpoke gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 90</li>
                                <li class= "listats1">Attack: 65</li>
                                <li class= "listats1">Defense: 65</li>
                                <li class= "listats1">Sp.Atk: 40</li>
                                <li class= "listats1">Sp.Def: 40</li>
                                <li class= "listats1">Speed: 15</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Slowbro</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#080</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua e Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Slowbro.png"
                            alt="imagem Slowbro">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Slowbro gif.gif"
                                alt="Slowbro gif">
                        </div>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp:: 95</li>
                                <li class= "listats1">Attack: 75</li>
                                <li class= "listats1">Defense: 110</li>
                                <li class= "listats1">Sp.Atk:: 100</li>
                                <li class= "listats1">Sp. Def: 80</li>
                                <li class= "listats1">Speed: 30</li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Magnemite</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#081</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Eletrico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 25</li>
                                <li class= "listats1">Attack: 35</li>
                                <li class= "listats1">Defense: 70</li>
                                <li class= "listats1">Sp.Atk: 95</li>
                                <li class= "listats1">Sp.Def: 55</li>
                                <li class= "listats1">Speed: 45</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemRaio">
                        <img class="img-pokemon"
                            src="imagens\Magnemite.png"
                            alt="imagem Magnemite">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Magnemite gif.gif"
                                alt="Magnemite gif">
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Magneton</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#082</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Eletrico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 50</li>
                                <li class= "listats1">Attack: 60</li>
                                <li class= "listats1">Defense: 95</li>
                                <li class= "listats1">Sp.Atk: 120</li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 70</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemRaio">
                        <img class="img-pokemon"
                            src="imagens\Magneton.png"
                            alt="imagem Magneton">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Magneton gif.gif"
                                alt="Magneton gif">
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Farfetch'd</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#083</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 52</li>
                                <li class= "listats1">Attack: 90</li>
                                <li class= "listats1">Defense: 55</li>
                                <li class= "listats1">Sp.Atk: 58</li>
                                <li class= "listats1">Sp.Def: 62</li>
                                <li class= "listats1">Speed: 60</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVoador">
                        <img class="img-pokemon"
                            src="imagens\Farfetch'd.png"
                            alt="imagem Farfetch'd">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\farfetchd gif.gif"
                                alt="Farfetch'd gif">
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Doduo</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#084</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
        
        
                    <div class="stats_box" style="display: none">
                        <ul class="status_prop">
                            <li class= "listats1">Hp: 35</li>
                            <li class= "listats1">Attack: 85</li>
                            <li class= "listats1">Defense: 45</li>
                            <li class= "listats1">Sp.Atk: 35</li>
                            <li class= "listats1">Sp.Def: 35</li>
                            <li class= "listats1">Speed: 75</li>
                        </ul>
                    </div>
                </div>
        
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVoador">
                        <img class="img-pokemon" src="imagens\Doduo.png"
                            alt="imagem Doduo">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Doduo gif.gif"
                                alt="Doduo gif">
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Dodrio</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#085</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Attack: 110</li>
                                <li class= "listats1">Defense: 70</li>
                                <li class= "listats1">Sp.Atk: 60</li>
                                <li class= "listats1">Sp.Def: 60</li>
                                <li class= "listats1">Speed: 110</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVoador">
                        <img class="img-pokemon" src="imagens\Dodrio.png"
                            alt="imagem Dodrio">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Dodrio gif.gif"
                                alt="Dodrio gif">
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Seel</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#086</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Attack: 45</li>
                                <li class= "listats1">Defense: 55</li>
                                <li class= "listats1">Sp.Atk: 45</li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 45</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon" src="imagens\Seel.png"
                            alt="imagem Seel">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\Seel gif.gif"
                                alt="Seel gif">
                        </div>
                    </div>
        
        
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Dewgong</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#087</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua e Gelo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <spa1n class="Regiao">Kanto</span>
                    </div>
        
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 90</li>
                                <li class= "listats1">Attack: 70</li>
                                <li class= "listats1">Defense: 80</li>
                                <li class= "listats1">Sp.Atk: 70</li>
                                <li class= "listats1">Sp.Def: 95</li>
                                <li class= "listats1">Speed: 70</li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Dewgong.png"
                            alt="imagem Dewgong">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Dewgong gif.gif"
                                alt="Dewgong gif">
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Grimer</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#088</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon" src="imagens\Grimer.png"
                            alt="imagem Grimer">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\Grimer gif.gif"
                                alt="Grimer gif">
                        </div>
                    </div>
                </div>
        
                <div class="stats_box" style="display: none">
                    <div>
                        <ul class="status_prop">
                            <li class= "listats1">Hp: 80</li>
                            <li class= "listats1">Attack: 80</li>
                            <li class= "listats1">Defense: 50</li>
                            <li class= "listats1">Sp.Atk: 40</li>
                            <li class= "listats1">Sp.Def: 50</li>
                            <li class= "listats1">Speed: 25</li>
                        </ul>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Muk</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#089</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon" src="imagens\Muk.png"
                            alt="imagem Muk">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Muk gif.gif" alt="Muk gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 105</li>
                                <li class= "listats1">Attack: 105</li>
                                <li class= "listats1">Defense: 75</li>
                                <li class= "listats1">Sp.Atk: 65</li>
                                <li class= "listats1">Sp.Def: 100</li>
                                <li class= "listats1">Speed: 50</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Shellder</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#090</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Shellder.png"
                            alt="imagem Shellder">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\Shellder gif.gif"
                                alt="Shellder gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 30</li>
                                <li class= "listats1">Attack: 65</li>
                                <li class= "listats1">Defense: 100</li>
                                <li class= "listats1">Sp.Atk: 45</li>
                                <li class= "listats1">Sp.Def: 25</li>
                                <li class= "listats1">Speed: 40</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Cloyster</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#091</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua e Gelo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Cloyster.png"
                            alt="imagem Cloyster">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Cloyster gif.gif"
                                alt="Cloyster gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 50</li>
                                <li class= "listats1">Attack: 95</li>
                                <li class= "listats1">Defense: 180</li>
                                <li class= "listats1">Sp.Atk: 85</li>
                                <li class= "listats1">Sp.Def: 45</li>
                                <li class= "listats1">Speed: 70</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Gastly</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#092</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fantasma e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFantasma">
                        <img class="img-pokemon" src="imagens\Gastly.png"
                            alt="imagem Gastly">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Gastly gif.gif"
                                alt="Gastly gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 30</li>
                                <li class= "listats1">Attack: 35</li>
                                <li class= "listats1">Defense: 30</li>
                                <li class= "listats1">Sp.Atk: 100</li>
                                <li class= "listats1">Sp.Def: 35</li>
                                <li class= "listats1">Speed: 80</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Haunter</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#093</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fantasma e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFantasma">
                        <img class="img-pokemon"
                            src="imagens\Haunter.png"
                            alt="imagem Haunter">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Haunter gif.gif"
                                alt="Haunter gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 45</li>
                                <li class= "listats1">Attack: 50</li>
                                <li class= "listats1">Defense: 45</li>
                                <li class= "listats1">Sp.Atk: 115</li>
                                <li class= "listats1">Sp.Def: 55</li>
                                <li class= "listats1">Speed: 95</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Gengar</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#094</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fantasma e Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFantasma">
                        <img class="img-pokemon" src="imagens\Gengar.png"
                            alt="imagem Gengar">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Gengar gif.gif"
                                alt="Gengar gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Attack: 65</li>
                                <li class= "listats1">Defense: 60</li>
                                <li class= "listats1">Sp.Atk: 130</li>
                                <li class= "listats1">Sp.Def: 75</li>
                                <li class= "listats1">Speed: 110</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Onix</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#095</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Pedra e Terra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPedra">
                        <img class="img-pokemon" src="imagens\Onix.png"
                            alt="imagem Onix">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dOnix"
                                src="imagens\Onix gif.gif"
                                alt="Onix gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 35</li>
                                <li class= "listats1">Attack: 45</li>
                                <li class= "listats1">Defense: 160</li>
                                <li class= "listats1">Sp.Atk: 30</li>
                                <li class= "listats1">Sp.Def: 45</li>
                                <li class= "listats1">Speed: 70</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Drowzee</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#096</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPsiquico">
                        <img class="img-pokemon"
                            src="imagens\Drowzee.png"
                            alt="imagem Drowzee">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Drowzee gif.gif"
                                alt="Drowzee gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Attack: 48</li>
                                <li class= "listats1">Defense: 45</li>
                                <li class= "listats1">Sp.Atk: 43</li>
                                <li class= "listats1">Sp.Def: 90</li>
                                <li class= "listats1">Speed: 42</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Hypno</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#097</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPsiquico">
                        <img class="img-pokemon" src="imagens\Hypno.png"
                            alt="imagem Hypno">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Hypno gif.gif"
                                alt="Hypno gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 85</li>
                                <li class= "listats1">Attack: 73</li>
                                <li class= "listats1">Defense: 70</li>
                                <li class= "listats1">Sp.Atk: 73</li>
                                <li class= "listats1">Sp.Def: 15</li>
                                <li class= "listats1">Speed: 67</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Krabby</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#098</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon" src="imagens\Krabby.png"
                            alt="imagem Krabby">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Krabby gif.gif"
                                alt="Krabby gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 30</li>
                                <li class= "listats1">Attack: 105</li>
                                <li class= "listats1">Defense: 90</li>
                                <li class= "listats1">Sp.Atk: 25</li>
                                <li class= "listats1">Sp.Def: 25</li>
                                <li class= "listats1">Speed: 50</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Kingler</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#099</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Kingler.png"
                            alt="imagem Kingler">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Kingler gif.gif"
                                alt="Kingler gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 55</li>
                                <li class= "listats1">Attack: 130</li>
                                <li class= "listats1">Defense: 115</li>
                                <li class= "listats1">Sp.Atk: 50</li>
                                <li class= "listats1">Sp.Def: 50</li>
                                <li class= "listats1">Speed: 75</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Voltorb</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#100</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Eletrico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemRaio">
                        <img class="img-pokemon"
                            src="imagens\Voltorb.png"
                            alt="imagem Voltorb">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Voltorb gif.gif"
                                alt="Voltorb gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Attack: 30</li>
                                <li class= "listats1">Defense: 50</li>
                                <li class= "listats1">Sp.Atk: 55</li>
                                <li class= "listats1">Sp.Def: 55</li>
                                <li class= "listats1">Speed: 100</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Electrode</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#101</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Eletrico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemRaio">
                        <img class="img-pokemon"
                            src="imagens\Electrode.png"
                            alt="imagem Electrode">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Electrode gif.gif"
                                alt="Electrode gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Attack: 50</li>
                                <li class= "listats1">Defense: 70</li>
                                <li class= "listats1">Sp.Atk: 80</li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 150</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Exeggcute</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#102</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama e Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemGrama">
                        <img class="img-pokemon"
                            src="imagens\Exeggcute.png"
                            alt="imagem Exeggcute">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dOvo"
                                src="imagens\Exeggcute gif.gif"
                                alt="Exeggcute gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Attack: 40</li>
                                <li class= "listats1">Defense: 80</li>
                                <li class= "listats1">Sp.Atk: 60</li>
                                <li class= "listats1">Sp.Def: 45</li>
                                <li class= "listats1">Speed: 40</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Exeggutor</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#103</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama e Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemGrama">
                        <img class="img-pokemon"
                            src="imagens\Exeggcutor.png"
                            alt="imagem Exeggutor">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3degg"
                                src="imagens\Exeggutor gif.gif"
                                alt="Exeggutor gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 95</li>
                                <li class= "listats1">Attack: 95</li>
                                <li class= "listats1">Defense: 85</li>
                                <li class= "listats1">Sp.Atk: 125</li>
                                <li class= "listats1">Sp.Def: 75</li>
                                <li class= "listats1">Speed: 55</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Cubone</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#104</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Terra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemTerra">
                        <img class="img-pokemon" src="imagens\Cubone.png"
                            alt="imagem Cubone">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Cubone gif.gif"
                                alt="Cubone gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 50</li>
                                <li class= "listats1">Attack: 50</li>
                                <li class= "listats1">Defense: 95</li>
                                <li class= "listats1">Sp.Atk: 40</li>
                                <li class= "listats1">Sp.Def: 50</li>
                                <li class= "listats1">Speed: 35</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Marowak</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#105</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Terra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemTerra">
                        <img class="img-pokemon"
                            src="imagens\Marowak.png"
                            alt="imagem Marowak">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Marowak gif.gif"
                                alt="Marowak gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Attack: 80</li>
                                <li class= "listats1">Defense: 110</li>
                                <li class= "listats1">Sp.Atk: 50</li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 45</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Hitmonlee</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#106</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Lutador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemLutador">
                        <img class="img-pokemon"
                            src="imagens\Hitmonlee.png"
                            alt="imagem Hitmonlee">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Hitmonlee gif.gif"
                                alt="Hitmonlee gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 50</li>
                                <li class= "listats1">Attack: 120</li>
                                <li class= "listats1">Defense: 53</li>
                                <li class= "listats1">Sp.Atk: 35</li>
                                <li class= "listats1">Sp.Def: 110</li>
                                <li class= "listats1">Speed: 87</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Hitmonchan</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#107</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Lutador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemLutador">
                        <img class="img-pokemon"
                            src="imagens\Hitmonchan.png"
                            alt="imagem Hitmonchan">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Hitmonchan gif.gif"
                                alt="Hitmonchan gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 50</li>
                                <li class= "listats1">Attack: 105</li>
                                <li class= "listats1">Defense: 79</li>
                                <li class= "listats1">Sp.Atk: 35</li>
                                <li class= "listats1">Sp.Def: 110</li>
                                <li class= "listats1">Speed: 76</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Lickitung</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#108</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Lickitung.png"
                            alt="imagem Lickitung">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Lickitung gif.gif"
                                alt="Lickitung gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 90</li>
                                <li class= "listats1">Attack: 55</li>
                                <li class= "listats1">Defense: 75</li>
                                <li class= "listats1">Sp.Atk: 60</li>
                                <li class= "listats1">Sp.Def: 75</li>
                                <li class= "listats1">Speed: 30</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Koffing</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#109</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon"
                            src="imagens\Koffing.png"
                            alt="imagem Koffing">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Koffing gif.gif"
                                alt="Koffing gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Attack: 65</li>
                                <li class= "listats1">Defense: 95</li>
                                <li class= "listats1">Sp.Atk: 60</li>
                                <li class= "listats1">Sp.Def: 45</li>
                                <li class= "listats1">Speed: 35</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Weezing</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#110</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Venenoso</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemVenenoso">
                        <img class="img-pokemon"
                            src="imagens\Weezing.png"
                            alt="imagem Weezing">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dScy"
                                src="imagens\Weezing gif.gif"
                                alt="Weezing gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Attack: 90</li>
                                <li class= "listats1">Defense: 120</li>
                                <li class= "listats1">Sp.Atk: 85</li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 60</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Rhyhorn</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#111</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Terra e Pedra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPedra">
                        <img class="img-pokemon"
                            src="imagens\Rhyhorn.png"
                            alt="imagem Rhyhorn">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Rhyhorn gif.gif"
                                alt="Rhyhorn gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 80</li>
                                <li class= "listats1">Attack: 85</li>
                                <li class= "listats1">Defense: 95</li>
                                <li class= "listats1">Sp.Atk: 30</li>
                                <li class= "listats1">Sp.Def: 30</li>
                                <li class= "listats1">Speed: 25</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Rhydon</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#112</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Terra e Pedra</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPedra">
                        <img class="img-pokemon" src="imagens\Rhydon.png"
                            alt="imagem Rhydon">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Rhydon gif.gif"
                                alt="Rhydon gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 105</li>
                                <li class= "listats1">Attack: 130</li>
                                <li class= "listats1">Defense: 120</li>
                                <li class= "listats1">Sp.Atk: 45</li>
                                <li class= "listats1">Sp.Def: 45</li>
                                <li class= "listats1">Speed: 40</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Chansey</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#113</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Chansey.png"
                            alt="imagem Chansey">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Chansey gif.gif"
                                alt="Chansey gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 250</li>
                                <li class= "listats1">Attack: 5</li>
                                <li class= "listats1">Defense: 5</li>
                                <li class= "listats1">Sp.Atk: 35</li>
                                <li class= "listats1">Sp.Def: 105</li>
                                <li class= "listats1">Speed: 50</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Tangela</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#114</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Grama</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemGrama">
                        <img class="img-pokemon"
                            src="imagens\Tangela.png"
                            alt="imagem Tangela">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Tangela gif.gif"
                                alt="Tangela gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Attack: 55</li>
                                <li class= "listats1">Defense: 115</li>
                                <li class= "listats1">Sp.Atk: 100</li>
                                <li class= "listats1">Sp.Def: 40</li>
                                <li class= "listats1">Speed: 60</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Kangaskhan</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#115</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Kangaskhan.png"
                            alt="imagem Kangaskhan">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Kangaskhan gif.gif"
                                alt="Kangaskhan gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 105</li>
                                <li class= "listats1">Attack: 95</li>
                                <li class= "listats1">Defense: 80</li>
                                <li class= "listats1">Sp.Atk: 40</li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Horsea</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#116</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon" src="imagens\Horsea.png"
                            alt="imagem Horsea">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Horsea gif.gif"
                                alt="Horsea gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 30</li>
                                <li class= "listats1">Attack: 40</li>
                                <li class= "listats1">Defense: 70</li>
                                <li class= "listats1">Sp.Atk: 70</li>
                                <li class= "listats1">Sp.Def: 25</li>
                                <li class= "listats1">Speed: 60</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Seadra</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#117</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon" src="imagens\Seadra.png"
                            alt="imagem Seadra">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Seadra gif.gif"
                                alt="Seadra gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 55</li>
                                <li class= "listats1">Attack: 65</li>
                                <li class= "listats1">Defense: 95</li>
                                <li class= "listats1">Sp.Atk: 95</li>
                                <li class= "listats1">Sp.Def: 45</li>
                                <li class= "listats1">Speed: 85</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Goldeen</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#118</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Goldeen.png"
                            alt="imagem Goldeen">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dfish"
                                src="imagens\Goldeen gif.gif"
                                alt="Goldeen gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 45</li>
                                <li class= "listats1">Attack: 67</li>
                                <li class= "listats1">Defense: 60</li>
                                <li class= "listats1">Sp.Atk: 35</li>
                                <li class= "listats1">Sp.Def: 50</li>
                                <li class= "listats1">Speed: 63</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Seaking</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#119</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Seaking.png"
                            alt="imagem Seaking">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Seaking gif.gif"
                                alt="Seaking gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 80</li>
                                <li class= "listats1">Attack: 92</li>
                                <li class= "listats1">Defense: 65</li>
                                <li class= "listats1">Sp.Atk: 65</li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 68</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Staryu</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#120</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon" src="imagens\Staryu.png"
                            alt="imagem Staryu">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dStar"
                                src="imagens\Staryu gif.gif"
                                alt="Staryu gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 30</li>
                                <li class= "listats1">Attack: 45</li>
                                <li class= "listats1">Defense: 55</li>
                                <li class= "listats1">Sp.Atk: 70</li>
                                <li class= "listats1">Sp.Def: 55</li>
                                <li class= "listats1">Speed: 85</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Starmie</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#121</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua e Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Starmie.png"
                            alt="imagem Starmie">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Starmie gif.gif"
                                alt="Starmie gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Attack: 75</li>
                                <li class= "listats1">Defense: 85</li>
                                <li class= "listats1">Sp.Atk: 100</li>
                                <li class= "listats1">Sp.Def: 85</li>
                                <li class= "listats1">Speed: 115</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Mr. Mime</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#122</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Psiquico e Fada</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Mr. Mime.png"
                            alt="imagem Mr. Mime">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dMr"
                                src="imagens\Mr. Mime gif.gif"
                                alt="Mr. Mime gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 40</li>
                                <li class= "listats1">Attack: 45</li>
                                <li class= "listats1">Defense: 65</li>
                                <li class= "listats1">Sp.Atk: 100</li>
                                <li class= "listats1">Sp.Def: 120</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Scyther</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#123</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon"
                            src="imagens\Scyther.png"
                            alt="imagem Scyther">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dScy"
                                src="imagens\Scyther gif.gif"
                                alt="Scyther gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 70</li>
                                <li class= "listats1">Attack: 110</li>
                                <li class= "listats1">Defense: 80</li>
                                <li class= "listats1">Sp.Atk: 55</li>
                                <li class= "listats1">Sp.Def: 80</li>
                                <li class= "listats1">Speed: 105</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Jynx</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#124</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Gelo e Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon" src="imagens\Jynx.png"
                            alt="imagem Jynx">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Jynx gif.gif"
                                alt="Jynx gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Attack: 50</li>
                                <li class= "listats1">Defense: 35</li>
                                <li class= "listats1">Sp.Atk: 115</li>
                                <li class= "listats1">Sp.Def: 95</li>
                                <li class= "listats1">Speed: 95</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Electabuzz</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#125</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Eletrico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemRaio">
                        <img class="img-pokemon"
                            src="imagens\Electabuzz.png"
                            alt="imagem Electabuzz">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Electabuzz gif.gif"
                                alt="Electabuzz gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Attack: 83</li>
                                <li class= "listats1">Defense: 57</li>
                                <li class= "listats1">Sp.Atk: 95</li>
                                <li class= "listats1">Sp.Def: 85</li>
                                <li class= "listats1">Speed: 105</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Magmar</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#126</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon" src="imagens\Magmar.png"
                            alt="imagem Magmar">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Magmar gif.gif"
                                alt="Magmar gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Attack: 95</li>
                                <li class= "listats1">Defense: 57</li>
                                <li class= "listats1">Sp.Atk: 100</li>
                                <li class= "listats1">Sp.Def: 85</li>
                                <li class= "listats1">Speed: 93</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Pinsir</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#127</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Inseto</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemInseto">
                        <img class="img-pokemon" src="imagens\Pinsir.png"
                            alt="imagem Pinsir">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Pinsir gif.gif"
                                alt="Pinsir gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Attack: 125</li>
                                <li class= "listats1">Defense: 100</li>
                                <li class= "listats1">Sp.Atk: 55</li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 85</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Tauros</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#128</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon" src="imagens\Tauros.png"
                            alt="imagem Tauros">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Tauros gif.gif"
                                alt="Tauros gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 75</li>
                                <li class= "listats1">Attack: 100</li>
                                <li class= "listats1">Defense: 95</li>
                                <li class= "listats1">Sp.Atk: 40</li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 110</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Magikarp</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#129</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Magikarp.png"
                            alt="imagem Magikarp">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Magikarp gif.gif"
                                alt="Magikarp gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 20</li>
                                <li class= "listats1">Attack: 10</li>
                                <li class= "listats1">Defense: 55</li>
                                <li class= "listats1">Sp.Atk: 15</li>
                                <li class= "listats1">Sp.Def: 20</li>
                                <li class= "listats1">Speed: 80</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Gyarados</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#130</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Gyarados.png"
                            alt="imagem Gyarados">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Gyarados gif.gif"
                                alt="Gyarados gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 95</li>
                                <li class= "listats1">Attack: 125</li>
                                <li class= "listats1">Defense: 79</li>
                                <li class= "listats1">Sp.Atk: 60</li>
                                <li class= "listats1">Sp.Def: 100</li>
                                <li class= "listats1">Speed: 81</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Lapras</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#131</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua e Gelo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon" src="imagens\Lapras.png"
                            alt="imagem Lapras">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Lapras gif.gif"
                                alt="Lapras gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 130</li>
                                <li class= "listats1">Attack: 85</li>
                                <li class= "listats1">Defense: 80</li>
                                <li class= "listats1">Sp.Atk: 85</li>
                                <li class= "listats1">Sp.Def: 95</li>
                                <li class= "listats1">Speed: 60</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Ditto</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#132</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon" src="imagens\Ditto.png"
                            alt="imagem Ditto">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\Ditto gif.gif"
                                alt="Ditto gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 48</li>
                                <li class= "listats1">Attack: 48</li>
                                <li class= "listats1">Defense: 48</li>
                                <li class= "listats1">Sp.Atk: 48</li>
                                <li class= "listats1">Sp.Def: 48</li>
                                <li class= "listats1">Speed: 48</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Eevee</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#133</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon" src="imagens\Eevee.png"
                            alt="imagem Eevee">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\Eevee gif.gif"
                                alt="Eevee gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 55</li>
                                <li class= "listats1">Attack: 55</li>
                                <li class= "listats1">Defense: 50</li>
                                <li class= "listats1">Sp.Atk: 45</li>
                                <li class= "listats1">Sp.Def: 65</li>
                                <li class= "listats1">Speed: 55</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Vaporeon</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#134</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Vaporeon.png"
                            alt="imagem Vaporeon">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Vaporeon gif.gif"
                                alt="Vaporeon gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 130</li>
                                <li class= "listats1">Attack: 65</li>
                                <li class= "listats1">Defense: 60</li>
                                <li class= "listats1">Sp.Atk: 110</li>
                                <li class= "listats1">Sp.Def: 95</li>
                                <li class= "listats1">Speed: 65</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Jolteon</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#135</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Eletrico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemRaio">
                        <img class="img-pokemon"
                            src="imagens\Jolteon.png"
                            alt="imagem Jolteon">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Jolteon gif.gif"
                                alt="Jolteon gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Attack: 65</li>
                                <li class= "listats1">Defense: 60</li>
                                <li class= "listats1">Sp.Atk: 110</li>
                                <li class= "listats1">Sp.Def: 95</li>
                                <li class= "listats1">Speed: 130</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Flareon</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#136</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon"
                            src="imagens\Flareon.png"
                            alt="imagem Flareon">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Flareon gif.gif"
                                alt="Flareon gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Attack: 130</li>
                                <li class= "listats1">Defense: 60</li>
                                <li class= "listats1">Sp.Atk: 95</li>
                                <li class= "listats1">Sp.Def: 110</li>
                                <li class= "listats1">Speed: 65</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Porygon</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#137</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Porygon.png"
                            alt="imagem Porygon">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\Porygon gif.gif"
                                alt="Porygon gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 65</li>
                                <li class= "listats1">Attack: 60</li>
                                <li class= "listats1">Defense: 70</li>
                                <li class= "listats1">Sp.Atk: 85</li>
                                <li class= "listats1">Sp.Def: 75</li>
                                <li class= "listats1">Speed: 40</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Omanyte</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#138</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Pedra e Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Omanyte.png"
                            alt="imagem Omanyte">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\Omanyte gif.gif"
                                alt="Omanyte gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 35</li>
                                <li class= "listats1">Attack: 40</li>
                                <li class= "listats1">Defense: 100</li>
                                <li class= "listats1">Sp.Atk: 90</li>
                                <li class= "listats1">Sp.Def: 55</li>
                                <li class= "listats1">Speed: 35</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Omastar</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#139</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Pedra e Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemAgua">
                        <img class="img-pokemon"
                            src="imagens\Omastar.png"
                            alt="imagem Omastar">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Omastar gif.gif"
                                alt="Omastar gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 70</li>
                                <li class= "listats1">Attack: 60</li>
                                <li class= "listats1">Defense: 125</li>
                                <li class= "listats1">Sp.Atk: 115</li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 55</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Kabuto</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#140</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Pedra e Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon" src="imagens\Kabuto.png"
                            alt="imagem Kabuto">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d3"
                                src="imagens\Kabuto gif.gif"
                                alt="Kabuto gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 30</li>
                                <li class= "listats1">Attack: 80</li>
                                <li class= "listats1">Defense: 90</li>
                                <li class= "listats1">Sp.Atk: 55</li>
                                <li class= "listats1">Sp.Def: 45</li>
                                <li class= "listats1">Speed: 55</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Kabutops</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#141</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Pedra e Agua</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Kabutops.png"
                            alt="imagem Kabutops">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Kabutops gif.gif"
                                alt="Kabutops gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 60</li>
                                <li class= "listats1">Attack: 115</li>
                                <li class= "listats1">Defense: 105</li>
                                <li class= "listats1">Sp.Atk: 65</li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 80</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Aerodactyl</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#142</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Pedra e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPedra">
                        <img class="img-pokemon"
                            src="imagens\Aerodactyl.png"
                            alt="imagem Aerodactyl">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dAero"
                                src="imagens\Aerodactyl gif.gif"
                                alt="Aerodactyl gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 80</li>
                                <li class= "listats1">Attack: 105</li>
                                <li class= "listats1">Defense: 65</li>
                                <li class= "listats1">Sp.Atk: 60</li>
                                <li class= "listats1">Sp.Def: 75</li>
                                <li class= "listats1">Speed: 130</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Snorlax</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#143</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Normal</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Snorlax.png"
                            alt="imagem Snorlax">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d2"
                                src="imagens\Snorlax gif.gif"
                                alt="Snorlax gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 160</li>
                                <li class= "listats1">Attack: 110</li>
                                <li class= "listats1">Defense: 65</li>
                                <li class= "listats1">Sp.Atk: 65</li>
                                <li class= "listats1">Sp.Def: 110</li>
                                <li class= "listats1">Speed: 30</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Articuno</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#144</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Gelo e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon"
                            src="imagens\Articuno.png"
                            alt="imagem Articuno">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dArt"
                                src="imagens\Articunoresized2.gif"
                                alt="Articuno gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 90</li>
                                <li class= "listats1">Attack: 85</li>
                                <li class= "listats1">Defense: 100</li>
                                <li class= "listats1">Sp.Atk: 95</li>
                                <li class= "listats1">Sp.Def: 125</li>
                                <li class= "listats1">Speed: 85</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Zapdos</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#145</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Eletrico e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemRaio">
                        <img class="img-pokemon" src="imagens\Zapdos.png"
                            alt="imagem Zapdos">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dZap"
                                src="imagens\Zapdos gif.gif"
                                alt="Zapdos gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 90</li>
                                <li class= "listats1">Attack: 90</li>
                                <li class= "listats1">Defense: 85</li>
                                <li class= "listats1">Sp.Atk: 125</li>
                                <li class= "listats1">Sp.Def: 90</li>
                                <li class= "listats1">Speed: 100</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Moltres</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#146</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Fogo e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemFogo">
                        <img class="img-pokemon"
                            src="imagens\Moltres.png"
                            alt="imagem Moltres">
        
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dMol"
                                src="imagens\Moltresresized2.gif"
                                alt="Moltres gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 90</li>
                                <li class= "listats1">Attack: 100</li>
                                <li class= "listats1">Defense: 90</li>
                                <li class= "listats1">Sp.Atk: 125</li>
                                <li class= "listats1">Sp.Def: 85</li>
                                <li class= "listats1">Speed: 90</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Dratini</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#147</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Dragao</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemDragao">
                        <img class="img-pokemon"
                            src="imagens\Dratini.png"
                            alt="imagem Dratini">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Dratini gif.gif"
                                alt="Dratini gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 41</li>
                                <li class= "listats1">Attack: 64</li>
                                <li class= "listats1">Defense: 45</li>
                                <li class= "listats1">Sp.Atk: 50</li>
                                <li class= "listats1">Sp.Def: 50</li>
                                <li class= "listats1">Speed: 50</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Dragonair</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#148</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Dragao</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemDragao">
                        <img class="img-pokemon"
                            src="imagens\Dragonair.png"
                            alt="imagem Dragonair">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Dragonair gif.gif"
                                alt="Dragonair gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 61</li>
                                <li class= "listats1">Attack: 84</li>
                                <li class= "listats1">Defense: 65</li>
                                <li class= "listats1">Sp.Atk: 70</li>
                                <li class= "listats1">Sp.Def: 70</li>
                                <li class= "listats1">Speed: 70</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Dragonite</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#149</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Dragao e Voador</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemDragao">
                        <img class="img-pokemon"
                            src="imagens\Dragonite.png"
                            alt="imagem Dragonite">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Dragonite gif.gif"
                                alt="Dragonite gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 91</li>
                                <li class= "listats1">Attack: 134</li>
                                <li class= "listats1">Defense: 95</li>
                                <li class= "listats1">Sp.Atk: 100</li>
                                <li class= "listats1">Sp.Def: 100</li>
                                <li class= "listats1">Speed: 80</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Mewtwo</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#150</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagemPsiquico">
                        <img class="img-pokemon" src="imagens\Mewtwo.png"
                            alt="imagem Mewtwo">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3dM2"
                                src="imagens\Mewtwo gif.gif"
                                alt="Mewtwo gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 106</li>
                                <li class= "listats1">Attack: 110</li>
                                <li class= "listats1">Defense: 90</li>
                                <li class= "listats1">Sp.Atk: 154</li>
                                <li class= "listats1">Sp.Def: 90</li>
                                <li class= "listats1">Speed: 130</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
            <li class="cartao">
                <div class="Parte-direita">
        
                    <div class="Container-nome">
                        <h3 class="Nome">Mew</h3>
                    </div>
        
                    <div class="Container-numero">
                        <h4 class="Numero">#151</h4>
                    </div>
        
                    <div class="Container-Tipo">
                        <span class="Tipo">Psiquico</span>
                    </div>
        
                    <div class="Container-Regiao">
                        <span class="Regiao">Kanto</span>
                    </div>
                </div>
        
                <div class="parte-esquerda">
                    <div class="Espaco-imagem">
                        <img class="img-pokemon" src="imagens\Mew.png"
                            alt="imagem Mew">
        
                        <div class="box" style="display: none">
                            <div>
                                <img class="quadrado-matrix"
                                    src="imagens/backmatrix.gif"
                                    alt="fundo matrix">
                            </div>
        
                            <img class="modelo-3d"
                                src="imagens\Mew gif.gif" alt="Mew gif">
                        </div>
                    </div>
                </div>
        
                <div class="Parte-direita">
                    <div class="stats_box" style="display: none">
                        <div>
                            <ul class="status_prop">
                                <li class= "listats1">Hp: 100</li>
                                <li class= "listats1">Attack: 100</li>
                                <li class= "listats1">Defense: 100</li>
                                <li class= "listats1">Sp.Atk: 100</li>
                                <li class= "listats1">Sp.Def: 100</li>
                                <li class= "listats1">Speed: 100</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        
        </ul>
        </section>
                
        </main>
        <script> 
        
const button3d = document.getElementById('btn');
button3d.addEventListener('click', function handleClick() {  
var box = document.querySelector('.box.selecionada');
  box.style.display = (box.style.display === 'none') ? 'block' : 'none';
  })

  const buttonStats = document.getElementById('botaostatus');
  buttonStats.addEventListener('click', function handleClick() {  
  var statusCaixa = document.querySelector('.stats_box.escolhida');
  statusCaixa.style.display = (statusCaixa.style.display === 'none') ? 'block' : 'none';
    })




  const boxList = document.querySelectorAll('.box');
  const StatsList = document.querySelectorAll('.stats_box');
  const cartoes = document.querySelectorAll('.cartao');
  const nextButton = document.getElementById('next-btn');
  const prevButton = document.getElementById('prev-btn');
  let selectedBoxIndex = 0;
  let cartaoAtual = 0;
  let StatusBox = 0;
  
  nextButton.addEventListener('click', () => {
    if (cartaoAtual < cartoes.length - 1) {
      cartaoAtual++;
      cartoes[cartaoAtual].classList.add('selecionado');
      const cartaoSelecionado = document.querySelector('.selecionado');
      if (cartaoSelecionado) {
        cartaoSelecionado.classList.remove("selecionado");
      }
      boxList[selectedBoxIndex].classList.remove('selecionada');
      selectedBoxIndex = (selectedBoxIndex + 1) % boxList.length;
      boxList[selectedBoxIndex].classList.add('selecionada');
      StatsList[StatusBox].classList.remove('escolhida');
      StatusBox = (StatusBox + 1) % StatsList.length;
      StatsList[StatusBox].classList.add('escolhida');
    } else {
      cartoes[cartaoAtual].classList.remove('selecionado');
      cartaoAtual = 0;
      cartoes[cartaoAtual].classList.add('selecionado');
      boxList[selectedBoxIndex].classList.remove('selecionada');
      selectedBoxIndex = 0;
      boxList[selectedBoxIndex].classList.add('selecionada');
      StatsList[StatusBox].classList.remove('escolhida');
      StatusBox = 0;
      StatsList[StatusBox].classList.add('escolhida');
    }
  });
  
  
  
  prevButton.addEventListener('click', () => {
    if (cartaoAtual > 0) {
      cartoes[cartaoAtual].classList.remove('selecionado');
      cartaoAtual--;
      cartoes[cartaoAtual].classList.add('selecionado');
      boxList[selectedBoxIndex].classList.remove('selecionada');
      selectedBoxIndex = (selectedBoxIndex - 1 + boxList.length) % boxList.length;
      boxList[selectedBoxIndex].classList.add('selecionada');
      StatsList[StatusBox].classList.remove('escolhida');
      StatusBox = (StatusBox - 1 + StatsList.length) % StatsList.length;
      StatsList[StatusBox].classList.add('escolhida');
    } else if (cartaoAtual === 0) {
      cartoes[cartaoAtual].classList.remove('selecionado');
      cartaoAtual = cartoes.length - 1;
      cartoes[cartaoAtual].classList.add('selecionado');
      boxList[selectedBoxIndex].classList.remove('selecionada');
      selectedBoxIndex = (selectedBoxIndex - 1 + boxList.length) % boxList.length;
      boxList[selectedBoxIndex].classList.add('selecionada');
      StatsList[StatusBox].classList.remove('escolhida');
      StatusBox = (StatusBox - 1 + StatsList.length) % StatsList.length;
      StatsList[StatusBox].classList.add('escolhida');
    }
  });
  
  const searchInput = document.getElementById('txtBusca');
searchInput.addEventListener('keydown', (event) => {
  if (event.keyCode === 13) { // check if the key pressed is "Enter" key
    const searchString = searchInput.value.toLowerCase().trim();
    if (searchString !== '') {
      cartoes.forEach((cartao, index) => {
        const pokemonName = cartao.querySelector('.Nome').textContent.toLowerCase();
        if (pokemonName === searchString) { // check for exact match
          cartao.classList.add('selecionado');
          cartaoAtual = index;
          boxList[selectedBoxIndex].classList.remove('selecionada');
          selectedBoxIndex = index % boxList.length;
          boxList[selectedBoxIndex].classList.add('selecionada');
          StatsList[StatusBox].classList.remove('escolhida');
          StatusBox = index % StatsList.length;
          StatsList[StatusBox].classList.add('escolhida');
        } else {
          cartao.classList.remove('selecionado');
        }
      });
    } else {
      cartoes.forEach((cartao, index) => {
        if (index === cartaoAtual) {
          return;
        }
        cartao.classList.remove('selecionado');
      });
    }
  }
});
</script>
</body>
</html>
