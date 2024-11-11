// Função para mover o carrossel
function moveCarousel(carouselId, direction) {
    const carousel = document.getElementById(carouselId);
    const images = carousel.querySelector('.carousel-images');
    const totalImages = images.children.length;
    let index = parseInt(images.getAttribute('data-index')) || 0;

    index += direction;

    if (index < 0) index = totalImages - 1;
    if (index >= totalImages) index = 0;

    images.setAttribute('data-index', index);
    images.style.transform = `translateX(-${index * 100}%)`;
}

// Função para abrir o modal
function openModal(product, price, carouselId) {
    document.getElementById('modal-product').innerText = product;
    document.getElementById('modal-price').innerText = price.toFixed(2);
    document.getElementById('paymentModal').style.display = "block";
    document.body.style.overflow = 'hidden';  // Desabilita o scroll quando o modal está aberto
}

// Função para fechar o modal
function closeModal() {
    document.getElementById('paymentModal').style.display = "none";
    document.body.style.overflow = '';  // Habilita novamente o scroll
}

// Função para voltar aos produtos
function goBackToProducts() {
    document.getElementById('paymentModal').style.display = "none";
    document.body.style.overflow = '';  // Habilita novamente o scroll
}

// Função para confirmar o pagamento
function confirmPayment() {
    alert('Pagamento confirmado! Agradecemos pela sua compra!');
    closeModal();
}
