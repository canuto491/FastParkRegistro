<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>FastPark - Registo</title>
<link rel="stylesheet" type="text/css" href="style_registo.css"/>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">



</head>
<body>
<div class ="slideshowzone"> Site em construcao </div>
<div class="caixa_registo">
  <h1>Registo</h1>
  <form action="<?php echo base_url('index.php/welcome/singup'); ?>" method="post">
    <label for="email">E-mail </label>
    <input type="email" placeholder="E-mail" name="email" id="email"/>
    <label for="pass">Password </label>
    <input type="password" placeholder="fastpark@uma.pt" name="password" id="pass"/>
    <label for="username">Nome de utilizador</label>
    <input type="text" placeholder="Username" name="username" id="username"/>
    
    <br/>
    <label>Tipo de viatura</label>
    
      <!--<select id="tipo">
        <option value="car">Carro</option>
        <option value="moto">Mota</option>
        <option value="bike">Bicicleta</option>
      </select>-->
      <br/>

 <!-- NUUUUUUEVOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
     <input id="car" type="checkbox">
     <label class="checkbox" for="car"> Carro </label>

     <input id="moto" type="checkbox">
     <label class="checkbox" for="moto"> Mota </label>

     <input id="bike" type="checkbox">
     <label class="checkbox" for="bike"> Bicicleta </label><br/>
    
    <br/>

    <div class="icon_select">
        <div class="cadeira">
         <span class="icono"><i class="fa fa-wheelchair" id="chair"></i></span>
        </div>
          <div class="check_pref"> 
              <input id="preferencial" type="checkbox">
              <label class="checkbox" for="preferencial"> Lugar Preferencial </label>
          </div>
    </div>


    
    <!-- AQUI CODIGO PHP -->

 
    <label for="localidade"> Localidade </label>
      <select id="localidade">
        <option class= "opcoes" value="funchal">Funchal</option>
        <option class= "opcoes" value="canico">Caniço</option>
      </select>


<!-- FIIIIN NUUUUUUEVOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
  
    
    <br/>
    <input type="submit" value="Criar Conta" />
  </form>
</div>
</div>
</body>
</html>
