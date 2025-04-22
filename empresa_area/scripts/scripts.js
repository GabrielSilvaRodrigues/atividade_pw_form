document.getElementById('menuToggle').addEventListener('click', function() {
    const menu = document.getElementById('menu');
    
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
    }
});

const links = document.querySelectorAll('.navbar a');

links.forEach(link => {
    link.addEventListener('click', function() {
        const menu = document.getElementById('menu');
        menu.classList.add('hidden');
    });
});
document.getElementById('telefone').addEventListener('input', function (e) {
    let value = this.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos

    if (value.length > 2) {
        value = `(${value.slice(0, 2)}) ${value.slice(2)}`;
    }
    if (value.length > 10) {
        value = `${value.slice(0, 10)}-${value.slice(10, 14)}`;
    }

    this.value = value; // Atualiza o valor do input
});
