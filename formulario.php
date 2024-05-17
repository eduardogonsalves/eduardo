<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/formulario.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Formulário</title>
    </head>
    <body>

        <div class="cadastro">  
            <form action="formulario_POST.php" method="POST">
                <label for="userName">Nome <i class="mdi mdi-information-outline is-invalid"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Nome sem números"></i></label><br>
                <input required type="text" name="userName" class="form-control is-invalid" <?php if(isset($erroNome)){ if($erroNome !== "Nenhum"){ echo "is-invalid";}}?>><br>
                    <div class="invalid-feedback">
                        <?php
                            if(isset($erroNome)){
                                if($erroNome !== "Nenhum"){
                                    echo $erroNome;
                                }
                            }
                        ?>
                    </div>
                <label for="sobrenome">Sobrenome</label><br>
                <input type="text" name="sobrenome"><br>
                    <div class="invalid-feedback">
                    <?php
                            if(isset($erroSobrenome)){
                                if($erroSobrenome !== "Nenhum"){
                                    echo $erroSobrenome;
                                }
                            }
                        ?>
                    </div>
                <label for="email">Email</label><br>
                <input required type="text" name="email"><br>
                    <div class="invalid-feedback">
                    <?php
                            if(isset($erroEmail)){
                                if($erroEmail !== "Nenhum"){
                                    echo $erroEmail;
                                }
                            }
                        ?>
                    </div>
                <label for="cell">Telefone <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Digite apenas números"></i></label><br>
                <input type="number" name="cell"><br>
                    <div class="invalid-feedback">
                    <?php
                            if(isset($erroCell)){
                                if($erroCell !== "Nenhum"){
                                    echo $erroCell;
                                }
                            }
                        ?>
                    </div>
                <label for="password">Senha</label><br>
                <input type="password" name="password"><br>
                    <div class="invalid-feedback">
                    <?php
                            if(isset($senha)){
                                if($senha !== "Nenhum"){
                                    echo $senha;
                                }
                            }
                        ?>
                    </div>
                <label for="confirmar">Confirmar Senha <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Repita a mesma senha"></i></label><br>
                <input type="password" name="confirmar"><br>
                    <div class="invalid-feedback">
                    <?php
                            if(isset($confirmar)){
                                if($confirmar!== "Nenhum"){
                                    echo $confirmar;
                                }
                            }
                        ?>
                    </div>
                <button class="botao" type="submit">Enviar</button>
            </form>
        </div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $nome = $_POST['userName'];
                $sobrenome = $_POST['sobrenome'];
                $email = $_POST['email'];
                $cell = $_POST['cell'];
                $senha = $_POST['password'];
                $confirmar = $_POST['confirmar'];
            }

            //validação de nome

            if(empty($nome)){
                $erroNome = "Favor informar nome";
            }   else{
                if(!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
                    $erroNome = "Apenas letras";
                }
            else{
                $erroNome = "Nenhum";
            }

            //validação de email

            if(empty($email)){
                $erroEmail = "Favor informar um email";
            }   else{
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $erroEmail = "Favor informar um email válido";
                }
                else {
                    $erroEmail = "Nenhum";
                }
            }

            //validação de sobrenome

            if(empty($sobrenome)){
                $erroSobrenome = "Favor informar sobrenome";
            }   else{
                if(!preg_match("/^[a-zA-Z-' ]*$/",$sobrenome)) {
                    $erroSobrenome = "Apenas letras";
                }
            else{
                $erroSobrenome = "Nenhum";
            }
            }
            //validação de sobrenome

            if(empty($cell)){
                $erroCell = "Favor informar um número de celular";
            }   else{
                if(filter_var($cell, FILTER_VALIDATE_INT) !== false){
                    $erroCell = "Insira apenas numeros";
                }
            else {
                $erroCell = "Nenhum";
            }
            }

            //validação de senha

            if(empty($senha)){
                $erroSenha = "Por favor, insira uma senha.";
            } else{
                if(strlen($senha) <6 ){
                    $erroSenha = "Por favor, insira uma senha com pelo menos 06 dígitos";
                } else{
                    $erroSenha = "Nenhum";
                }
            }
            //validação de confirmação

            if(empty($confirmar)){
                $erroConfirma = "Por favor, repita a senha anterior.";
            } else{
                if($confirmar != $senha){
                    $erroConfirma = "As senhas precisam ser igual.";
                } else{
                    $erroConfirma = "Nenhum";
                }
            }

            if($erroConfirma =="Nenhum" && $erroSenha =="Nenhum" && $erroCell =="Nenhum" && $erroSobrenome =="Nenhum" && $erroEmail =="Nenhum" && $erroNome =="Nenhum"){
                header('Location: obrigado.html');
            }


        }
        ?>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
        <script>
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
        </script>
        
    </body>
</html>