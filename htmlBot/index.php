<?php 
// includes headers
header("Referrer-Policy: no-referrer");
header('X-Frame-Options: DENY');
header("Content-Security-Policy: frame-ancestors 'none'");
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
header('X-Content-Type-Options: nosniff');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<meta name="robots" content="noindex, nofollow, noimageindex">
<title>PANDA - <?php echo time();?></title>
<link rel="shortcut icon" type="image/x-icon" href="img/favico.png">
<style>
html, *{  margin: 0;  padding: 0; }
body{  background-color: #424242; }
.header-site{  background-color: #787878;  color: white;  font-size: 13px;  font-family: arial;  padding: 16px;  margin-bottom: 20px;  text-align:center; }
.footer{  color: white;  font-size: 13px;  font-family: arial; }
.ftft{  text-align:left;  background-color:  #787878;  padding:16px;  position: fixed;  bottom: 0px;  width: 100%;  max-width:100%;  font-family:arial; }
.main{  position: absolute;  top: 25%; }
</style>

</head>

<body>
<header class="header-site">
<div style="display:flex; justify-content: space-around;">
<p style="color:white;">Você deve tá se perguntando:</p>
<p style="color:white;">Tá, mas e o que são cookies?</p>
</div>
</header>

<main class="main">
<div style="color: #cfcfcf; font-size: 13px; font-family: arial; font-weight: 600;padding:15px;">
<center id="next">E não, não é algo de comer! São arquivos criados por sites que coletam seus</center>
<br>
<center id="bomdia">comportamentos de navegação para garantir o correto funcionamento</center>
<br>
<center id="saida">deles, bem como uma experiência mais completa.</center>
<br>
</div>

<div style="text-align: center; margin-top: 20px;">
<button style="color: white; background-color: #202020; cursor: pointer; width: 35%; border-radius: 5px; padding: 6px; font-size: 10px;">POWER</button>
</div>
</main>

<footer class="ftft">
<div class="footer" id="xxNext">
<p>Fale conosco</p>
<p>Regulamentos</p>
<p>Política de Privacidade</p>
<p>AV. Ribeiro Qd. 25 L, S/N - Norte empresa - 80020-03454 - Rio de Janeiro - RJ</p>
</div>
</footer>

<script>
function panda(){  console.log("GOLLL");  return false; }
window.onload=function(){ panda(); }
</script>
</body>
</html>    