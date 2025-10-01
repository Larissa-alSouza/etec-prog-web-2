const inputPesquisa = document.getElementById('pesquisa');
const tabela = document.getElementById('tabelaCursos').getElementsByTagName('tbody')[0];

inputPesquisa.addEventListener('keyup', function() {
    const filtro = this.value.toLowerCase();
    const linhas = tabela.getElementsByTagName('tr');

    for (let i = 0; i < linhas.length; i++) {
        const linha = linhas[i];
        // Pega todo o texto da linha e converte para minúsculo
        const textoLinha = linha.textContent.toLowerCase();

        // Verifica se o texto da linha contém o texto da pesquisa
        if (textoLinha.indexOf(filtro) > -1) {
            linha.style.display = '';
        } else {
            linha.style.display = 'none';
        }
    }
});