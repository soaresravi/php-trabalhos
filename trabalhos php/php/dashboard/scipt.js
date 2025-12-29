document.addEventListener('DOMContentLoaded', function() { //adiciona um evento que garante que o cocidgo so é executado quando o html tiver carregado
    const urlParams = new URLSearchParams(window.location.search); //cria um objeto urlSearchParam e retorna essa parte (tipo ?error=incorrect)
    const error = urlParams.get('error'); //extrai o valor do parâmetro error
    const errorDiv = document.getElementById('mensagemErro'); //seleciona o elemento html com o id mensagemErro onde a mensagem de erro sera exibida

    if (error === 'incorrect') { //se der incorreto... (se o usuario ou senha tiver incorreto)
        errorDiv.textContent = 'Nome de usuário ou senha inorretos!'; //altera o texto do error div x
    } else if (error === 'exists') { //se nao... (se existir/estiver certo)
        errorDiv.textContent = 'Usuário já está cadastrado!'; //o texto do error div será esse
    }
});

const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status'); 
        const mensagemStatus = document.getElementById('mensagemStatus');

        if (status === 'sucesso') {
            mensagemStatus.textContent = 'Produto adicionado com sucesso!';
        } else if (status === 'erro') {
            mensagemStatus.textContent = 'Erro ao adicionar o produto. Tente novamente.';
        }

const url = new URLSearchParams(window.location.search);
    const sucesso = url.get('sucesso'); //mudei as variáveis pra usar de novo
    const mensagem = document.getElementById('mensagem');

    if (sucesso === 'sucesso') {
        mensagem.textContent = 'Produto alterado com sucesso!';
    } else if (sucesso === 'erro') {
        mensagem.textContent = 'Erro ao alterar o produto. Tente novamente.';
    }        

const urlSearch = new URLSearchParams(window.location.search);
    const sucess = urlSearch.get('sucesso');
    const message = document.getElementById('mensagem');

    if (sucess === 'sucesso') {
        message.textContent = 'Produto excluído com sucesso!';
    } else if (sucess === 'erro') {
        message.textContent = 'Erro ao excluir o produto. Tente novamente.';
    }   
    