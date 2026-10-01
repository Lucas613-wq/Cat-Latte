/* --- script.js --- */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- EFEITO DE ENTRADA SUAVE (INTRO) ---
    // Faz as seções aparecerem suavemente ao carregar a página
    const sections = document.querySelectorAll('header, section, footer');
    
    // Configura a transparência inicial para a animação
    sections.forEach(section => {
        section.classList.add('js-fade-in');
    });

    // Ativa o aparecimento das seções em efeito cascata
    setTimeout(() => {
        sections.forEach((section, index) => {
            setTimeout(() => {
                section.classList.add('active');
            }, index * 200); // Atraso de 200ms entre cada seção
        });
    }, 100);

});


/* --- script.js --- */

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. EFEITO DE ENTRADA SUAVE (INTRO)
    const sections = document.querySelectorAll('header, section, footer');
    sections.forEach(section => {
        section.classList.add('js-fade-in');
    });

    setTimeout(() => {
        sections.forEach((section, index) => {
            setTimeout(() => {
                section.classList.add('active');
            }, index * 200);
        });
    }, 100);

    // 2. LÓGICA DO MODAL (CARD GRANDE DOS GATINHOS)
    const modal = document.getElementById('modal-gato');
    const fecharBtn = document.querySelector('.fechar-modal');
    const cardsGatos = document.querySelectorAll('.cards-gatos .card');

    // Elementos dentro do modal
    const modalImg = document.getElementById('modal-img');
    const modalNome = document.getElementById('modal-nome');
    const modalIdade = document.getElementById('modal-idade');
    const modalHistoria = document.getElementById('modal-historia');
    const modalCuriosidades = document.getElementById('modal-curiosidades');

    // Quando clicar em um card de gato
    cardsGatos.forEach(card => {
        card.addEventListener('click', () => {
            // Pega as informações do card clicado
            const img = card.querySelector('img').src;
            const nome = card.getAttribute('data-nome');
            const idade = card.getAttribute('data-idade');
            const historia = card.getAttribute('data-historia');
            const curiosidades = card.getAttribute('data-curiosidades');

            // Preenche o modal com essas informações
            modalImg.src = img;
            modalNome.textContent = nome;
            modalIdade.textContent = idade;
            modalHistoria.textContent = historia;
            modalCuriosidades.textContent = curiosidades;

            // Exibe o modal
            modal.style.display = 'flex';
        });
    });

    // Fechar no "X"
    fecharBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Fechar ao clicar fora do card (no fundo escuro)
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });

});