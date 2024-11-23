<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro - Doceria Delícias</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>

    <!-- Fundo interativo -->
    <div class="background-login"></div>

    <!-- Container de Login e Cadastro -->
    <div class="login-container">
        <!-- Formulário de Login -->
        <div class="login-form-container" id="user-login-form-container">
            <h2 class="login-title">Login Usuário</h2>
            <form class="login-form" id="user-login-form">
                <div class="login-form-group">
                    <label for="user-login-email" class="login-label">E-mail</label>
                    <input type="email" id="user-login-email" class="login-input" placeholder="Digite seu e-mail" required>
                </div>
                <div class="login-form-group">
                    <label for="user-login-password" class="login-label">Senha</label>
                    <input type="password" id="user-login-password" class="login-input" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="login-submit-btn">Login</button>
                <p class="login-alternate-action">Não tem conta? <a href="javascript:void(0);" onclick="showForm('user-register')">Cadastre-se</a></p>
            </form>
        </div>

        <!-- Formulário de Cadastro -->
        <div class="login-form-container" id="user-register-form-container" style="display: none;">
            <h2 class="login-title">Cadastro Usuário</h2>
            <form class="login-form" id="user-register-form">
                <div class="login-form-group">
                    <label for="user-register-email" class="login-label">E-mail</label>
                    <input type="email" id="user-register-email" class="login-input" placeholder="Digite seu e-mail" required>
                </div>
                <div class="login-form-group">
                    <label for="user-register-password" class="login-label">Senha</label>
                    <input type="password" id="user-register-password" class="login-input" placeholder="Digite sua senha" required>
                </div>
                <div class="login-form-group">
                    <label for="user-register-confirm-password" class="login-label">Confirmar Senha</label>
                    <input type="password" id="user-register-confirm-password" class="login-input" placeholder="Confirme sua senha" required>
                </div>
                <button type="submit" class="login-submit-btn">Cadastrar</button>
                <p class="login-alternate-action">Já tem conta? <a href="javascript:void(0);" onclick="showForm('user-login')">Login</a></p>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
