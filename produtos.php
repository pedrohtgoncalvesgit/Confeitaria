<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doceria Delícias</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="JS/script.js"></script>
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
    
    <!-- Container de Produtos -->
    <div class="product-container">
        <h1 class="product-title">Nossa Seleção de Delícias</h1>
        <div class="products">
            <!-- Produto 1 -->
            <div class="product-card">
                <div class="carousel" id="carousel1">
                    <div class="carousel-images">
                        <img src="https://via.placeholder.com/300x200" alt="Produto 1 - Imagem 1">
                        <img src="https://via.placeholder.com/300x200" alt="Produto 1 - Imagem 2">
                    </div>
                    <button class="carousel-button prev" onclick="moveCarousel('carousel1', -1)">&#10094;</button>
                    <button class="carousel-button next" onclick="moveCarousel('carousel1', 1)">&#10095;</button>
                </div>
                <div class="product-info">
                    <h2>Bolinho de Chocolate</h2>
                    <p class="product-description">Deliciosos bolinhos de chocolate com recheio cremoso e cobertura de chocolate meio amargo.</p>
                    <p class="product-price">R$ 15,00</p>
                    <button class="buy-button" onclick="openModal('Bolinho de Chocolate', 15.00, 'carousel1')">Comprar</button>
                </div>
            </div>

            <!-- Produto 2 -->
            <div class="product-card">
                <div class="carousel" id="carousel2">
                    <div class="carousel-images">
                        <img src="https://via.placeholder.com/300x200" alt="Produto 2 - Imagem 1">
                        <img src="https://via.placeholder.com/300x200" alt="Produto 2 - Imagem 2">
                    </div>
                    <button class="carousel-button prev" onclick="moveCarousel('carousel2', -1)">&#10094;</button>
                    <button class="carousel-button next" onclick="moveCarousel('carousel2', 1)">&#10095;</button>
                </div>
                <div class="product-info">
                    <h2>Trufas Gourmet</h2>
                    <p class="product-description">Trufas artesanais recheadas com ganache de chocolate belga e cobertas com cacau puro.</p>
                    <p class="product-price">R$ 25,00</p>
                    <button class="buy-button" onclick="openModal('Trufas Gourmet', 25.00, 'carousel2')">Comprar</button>
                </div>
            </div>

            <!-- Produto 3 -->
            <div class="product-card">
                <div class="carousel" id="carousel3">
                    <div class="carousel-images">
                        <img src="https://via.placeholder.com/300x200" alt="Produto 3 - Imagem 1">
                        <img src="https://via.placeholder.com/300x200" alt="Produto 3 - Imagem 2">
                    </div>
                    <button class="carousel-button prev" onclick="moveCarousel('carousel3', -1)">&#10094;</button>
                    <button class="carousel-button next" onclick="moveCarousel('carousel3', 1)">&#10095;</button>
                </div>
                <div class="product-info">
                    <h2>Pavê de Morango</h2>
                    <p class="product-description">Delicioso pavê de morango com camadas de creme de baunilha e biscoitos champagne.</p>
                    <p class="product-price">R$ 30,00</p>
                    <button class="buy-button" onclick="openModal('Pavê de Morango', 30.00, 'carousel3')">Comprar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Pagamento -->
    <div id="paymentModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <button class="back-button" onclick="goBackToProducts()">Voltar para os Produtos</button>
            <h2>Detalhes da Compra</h2>
            <p>Produto: <span id="modal-product"></span></p>
            <p>Preço: R$ <span id="modal-price"></span></p>
            <div class="form-group">
                <label for="name">Nome Completo:</label>
                <input type="text" id="name" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" placeholder="Digite seu e-mail" required>
            </div>
            <button class="confirm-button" onclick="confirmPayment()">Confirmar Pagamento</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
