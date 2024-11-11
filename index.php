<!DOCTYPE html>
<html lang="pt-br" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Confeitaria do Pedrão</title>
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

<!-- Produtos  -->
<section id="produtos">
        <h2>Nossos Produtos</h2>
        <div class="produto-container">
            <div class="produto">
                <img src="IMG/Design sem nome.png" alt="Bolo de Chocolate">
                <h3>Bolo de Chocolate</h3>
                <p>Delicioso bolo de chocolate com cobertura cremosa.</p>
                <p class="preco">R$ 45,00</p>
                <a href="produtos.php"> <button class="btn-adicionar">Comprar...</button></a> 
            </div>
            <div class="produto">
                <img src="IMG/IMG 2.png" alt="Torta de Limão">
                <h3>Torta de Limão</h3>
                <p>Torta refrescante de limão com merengue suave.</p>
                <p class="preco">R$ 35,00</p>
                <a href="produtos.php"> <button class="btn-adicionar">Comprar...</button></a> 
            </div>
            <div class="produto">
                <img src="IMG/IMG 3.png" alt="Cupcake de Baunilha">
                <h3>Cupcake de Baunilha</h3>
                <p>Delicados cupcakes de baunilha com cobertura de chocolate.</p>
                <p class="preco">R$ 5,00 cada</p>
                <a href="produtos.php"> <button class="btn-adicionar">Comprar...</button></a> 
            </div>
            <div class="produto">
                <img src="IMG/IMG 4.png" alt="Bolo de Morango">
                <h3>Bolo de Morango</h3>
                <p>Bolo de morango com creme de leite e pedaços frescos.</p>
                <p class="preco">R$ 50,00</p>
                <a href="produtos.php"> <button class="btn-adicionar">Comprar...</button></a> 
            </div>
            <div class="produto">
                <img src="IMG/IMG 5.png" alt="Brownie">
                <h3>Brownie</h3>
                <p>Brownie de chocolate com nozes, perfeito para compartilhar.</p>
                <p class="preco">R$ 20,00</p>
                <a href="produtos.php"> <button class="btn-adicionar">Comprar...</button></a> 
            </div>
            <div class="produto">
                <img src="IMG/IMG 6.png" alt="Trufa">
                <h3>Trufa</h3>
                <p>Trufas artesanais com diferentes recheios e coberturas.</p>
                <p class="preco">R$ 3,00 cada</p>
                <a href="produtos.php"> <button class="btn-adicionar">Comprar...</button></a> 
            </div>
            <div class="produto">
                <img src="IMG/IMG 7.png" alt="Trufa">
                <h3>Beijinho</h3>
                <p>Beijinho, bem suave para adoçar o seu dia</p>
                <p class="preco">R$ 2,50 cada</p>
                <a href="produtos.php"> <button class="btn-adicionar">Comprar...</button></a> 
            </div>
            <div class="produto">
                <img src="IMG/IMG 8.png" alt="Trufa">
                <h3>Brigadeiro</h3>
                <p>Brigadeiro, bem suave para adoçar o seu dia</p>
                <p class="preco">R$ 2,00 cada</p>
              <a href="produtos.php"> <button class="btn-adicionar">Comprar...</button></a> 
            </div>  

        </div>
    </section>

<!-- Fim produtos  -->

<!-- Banner -->
<div class="banner">
            <div class="banner-container">
                <div class="banner-slide active">
                    <img src="IMG/DESCONTO 2 .png" alt="Bolo de Chocolate">
                </div>
                <div class="banner-slide">
                    <img src="IMG/Desconto.png" alt="Torta de Limão">
                </div>
                <div class="banner-slide">
                    <img src="IMG/DESCONTO 3.png" alt="Cupcake de Baunilha">
                </div>
            </div>
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </div>
<!-- Fim banner  -->

<!-- SOBRE NÓS  -->
    <section id="sobre">
        <h2>Sobre Nós</h2>
        <p>Bem-vindo à Confeitaria do Pedrão! Desde 2010, nós nos dedicamos a criar as melhores sobremesas da cidade. Nossa paixão pela confeitaria começou em uma pequena cozinha e, desde então, crescemos para oferecer uma variedade de delícias, incluindo bolos, tortas e cupcakes. Cada receita é feita com ingredientes frescos e de alta qualidade, garantindo que cada mordida seja uma experiência inesquecível.</p>
        <p>Na Confeitaria do Pedrão, acreditamos que cada doce deve ser feito com amor. Nossa equipe é composta por confeiteiros experientes que têm um olho atento aos detalhes e um compromisso com a excelência. Estamos sempre inovando e criando novas receitas para surpreender nossos clientes e tornar cada celebração ainda mais especial.</p>
        <p>Venha nos visitar e descubra o sabor que tem encantado gerações!</p>
    </section>
<!-- FIM SOBRE NÓS  -->

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

<a href="#subir">
    <span class="quadradinhodasetinha">
        <span class="material-symbols-outlined"><img src="IMG/upload.png" alt="" style="width: 15px;"></span>
    </span>
</a>

<script src="JS/script.js"></script>
<!-- FIM RODAPÉ  -->

