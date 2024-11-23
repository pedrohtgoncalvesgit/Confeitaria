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

// LOGIN
// Função para alternar entre os formulários
function showForm(formType) {
    // Esconder todos os formulários
    document.getElementById('user-form').style.display = 'none';
    document.getElementById('user-register').style.display = 'none';
    document.getElementById('admin-form').style.display = 'none';
    document.getElementById('admin-register').style.display = 'none';
    
    // Mostrar o formulário selecionado
    if (formType === 'login') {
        document.getElementById('user-form').style.display = 'block';
    } else if (formType === 'register') {
        document.getElementById('user-register').style.display = 'block';
    } else if (formType === 'admin-login') {
        document.getElementById('admin-form').style.display = 'block';
    } else if (formType === 'admin-register') {
        document.getElementById('admin-register').style.display = 'block';
    }
}

// Função para verificar se as senhas coincidem
function verifyPasswords(password, confirmPassword) {
    if (password !== confirmPassword) {
        alert("As senhas não coincidem. Tente novamente.");
        return false;
    }
    return true;
}

// Exemplo de verificação de e-mail e senhas ao enviar o formulário
document.getElementById('user-register-form').addEventListener('submit', function(event) {
    const email = document.getElementById('user-register-email').value;
    const password = document.getElementById('user-register-password').value;
    const confirmPassword = document.getElementById('user-register-confirm-password').value;

    if (!verifyPasswords(password, confirmPassword)) {
        event.preventDefault();
    }
});

document.getElementById('admin-register-form').addEventListener('submit', function(event) {
    const email = document.getElementById('admin-register-email').value;
    const password = document.getElementById('admin-register-password').value;
    const confirmPassword = document.getElementById('admin-register-confirm-password').value;

    if (!verifyPasswords(password, confirmPassword)) {
        event.preventDefault();
    }
});

/// CONTATO 
// Efeito de animação no botão de envio
const form = document.getElementById('contact-form');
const submitButton = document.querySelector('.submit-button');

form.addEventListener('submit', function(e) {
    e.preventDefault();

    // Mostrar efeito no botão de envio
    submitButton.style.backgroundColor = '#f28ca6';
    submitButton.innerHTML = 'Enviado!';

    setTimeout(() => {
        submitButton.innerHTML = 'Enviar';
        submitButton.style.backgroundColor = '#e86a85';
    }, 2000);
});
