// verificação do NOME > 0 caracteres
// verificação da IDADE, somente números >= 0

function validar_entradas(){
    var nome_entrada = document.getElementById('nome').value;
    var idade_entrada = document.getElementById('idade').value;

    if(nome_entrada == ''){
        alert('Digite um nome');
        nome.focus();
    }else if( idade_entrada == '' || idade_entrada < 0){
        alert('Digite uma idade valida');
        idade.focus();
    }else{
        alert('Cadastrado')
    }
}