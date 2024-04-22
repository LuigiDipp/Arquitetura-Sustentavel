document.getElementById('botaoo').addEventListener('click', function() {
    this.classList.add('smoothHover');
    setTimeout(() => {
        this.classList.remove('smoothHover');
    }, 300);
});

