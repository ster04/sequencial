document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Simulação de autenticação (normalmente, você faria uma chamada ao servidor aqui)
    if (username === 'usuario' && password === 'senha123') {
        alert('Login bem-sucedido! Bem-vindo, ' + username + '!');
        window.location.href = 'dashboard.html'; // Redireciona para uma nova página
    } else {
        alert('Nome de usuário ou senha incorretos. Tente novamente.');
    }
});
