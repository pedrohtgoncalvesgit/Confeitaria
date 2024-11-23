<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato - Doceria Doce Magia</title>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
<header>
        <div class="logo">
            <img src="IMG/Confeitaria_do_Pedrão_-removebg-preview.png"  alt="Confeitaria Delícia" />
        </div>
        <nav>
            <ul>
                <li class="dropdown">
                    Produtos
                    <div class="dropdown-content">
                        <a href="#">Bolos</a>
                        <a href="#">Doces</a>
                        <a href="#">Pães</a>
                    </div>
                </li>
                <li><a href="#">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="login.php" class="login">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact-section">
        <div class="contact-container">
            <h2 class="contact-title">Fale Conosco</h2>
            <p class="contact-description">Adoramos ouvir nossos clientes! Deixe suas mensagens ou dúvidas, vamos adorar ajudar você.</p>

            <form id="contact-form" class="contact-form">
                <div class="form-group">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" id="name" name="name" required placeholder="Digite seu nome" class="form-input">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Digite seu email" class="form-input">
                </div>

                <div class="form-group">
                    <label for="message" class="form-label">Mensagem</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Escreva sua mensagem..." class="form-textarea"></textarea>
                </div>

                <button type="submit" class="submit-button">Enviar</button>
                </div>
            </form>
    </section>
<!-- RODAPÉ -->
<footer id="rodape">
    <div class="rodape-container">
        <div class="info">
            <h3>Confeitaria do Pedrão</h3>
            <p>Endereço: Rua das Flores, 123 - Centro</p>
            <p>Telefone: (11) 1234-5678</p>
            <p>Email: contato@confeitariadopedrao.com.br</p>
            <p>Horários de Funcionamento:</p>
            <p>Segunda a Sexta: 8h - 20h</p>
            <p>Sábado: 9h - 18h</p>
            <p>Domingo: Fechado</p>
        </div>
        <div class="redes-sociais">
            <h3>Siga-nos</h3>
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://twitter.com" target="_blank">Twitter</a>
        </div>
        <div class="mapa">
            <h3>Localização</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.900148892464!2d-46.65824238502453!3d-23.563208984681328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59aa11ed3bb9%3A0x9e96a54a6a4a0f59!2sConfeitaria%20do%20Pedr%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1682370444779!5m2!1spt-BR!2sbr" 
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <p>&copy; 2024 Confeitaria do Pedrão. Todos os direitos reservados.</p>
</footer>
    <script src="JS/script.js"></script>
</body>
</html>
