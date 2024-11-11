<!DOCTYPE html>
<html lang="pt-br" id="subir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Doceria Delícias</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>

  <!-- header -->
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
                <li><a href="#" class="login">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section de Contato -->
    <section id="contact" class="contact-section">
        <div class="contact-container">
            <h1 class="contact-title">Estamos Aqui Para Você!</h1>
            <p class="contact-description">
                Sua opinião é muito importante para nós! Se você tem alguma dúvida, sugestão ou simplesmente
                quer dizer o quanto ama nossos produtos, entre em contato! Estamos prontos para atendê-lo.
            </p>

            <!-- Formulário de Contato -->
            <form class="contact-form" action="submit_form.php" method="POST">
                <div class="form-group">
                    <label for="name">Seu Nome:</label>
                    <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>

                <div class="form-group">
                    <label for="message">Mensagem:</label>
                    <textarea id="message" name="message" rows="5" placeholder="Escreva sua mensagem aqui..." required></textarea>
                </div>

                <button type="submit" class="submit-button">Enviar</button>
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
<a href="#subir">
    <span class="quadradinhodasetinha">
        <span class="material-symbols-outlined"><img src="IMG/upload.png" alt="" style="width: 15px;"></span>
    </span>
</a>
</footer>
</body>
</html>
