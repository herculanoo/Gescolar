
function validar_cad_alunos() {
    
        var nome =  document.queryselector('input [name="nome"]');
        var data_nasc =  document.queryselector('input [name="data-nascimento"]');
        var sexo =  document.queryselector('input [name="sexo"]');
        var genero = ocument.queryselector('input [name="genero"]');
        var cpf = document.queryselector('input [name="cpf"]');
        var cidade =  document.queryselector('input [name="cidade"]');
        var estado =  document.queryselector('input [name="estado"]'); 
        var bairro =  document.queryselector('input [name="bairro"]');
        var rua =  document.queryselector('input [name="rua"]');
        var cep =  document.queryselector('input [name="cep"]');

    if(nome.value == "" || nome.value == null) {  
            alert("por favor ,informe o nome do aluno.");
            nome.focus();
            nome.style.border = "1px solid red";
            return false;
     }

        if(data_nasc.value == "" || data_nasc.value == null) {  
            alert("por favor,informe a data de nascimento.");
            data_nasc.focus();
            data_nasc.style.border = "1px solid red";
            return false;
     }

     if(sexo.value == "" || sexo.value == null) { 
         alert("por favor informe o sexo.");
         sexo.focus();
         sexo.style.border = "1px solid red";
         return false;
     }

     if(genero.value == "" || ganero.value == null) { 
         alert("por favor,informe o genero.");
         genero.focus();
         genero.style.border = "1px solid red";
         return false;
     }

     if(cpf.value == "" || cpf.value == null) {
         alert("por favor,informe o cpf.");
         cpf.focus();
         cpf.style.border = "1px solid red";
         return false;
     }

     if(cidade.value == "" || cidade.value == null) {
        alert("por favor,informe o cidade.");
        cidade.focus();
        cidade.style.border = "1px solid red";
        return false; 
    } 

     if(estado.value == "" || estado.value == null) {
        alert("por favor,informe o estado.");
        estado.focus();
        estado.style.border = "1px solid red";
        return false;
    }

    if(bairro.value == "" || bairro.value == null) {
        alert("por favor,informe o bairro.");
        bairro.focus();
        bairro.style.border = "1px solid red";
        return false;
    }

     if(rua.value == "" || rua.value == null) {
        alert("por favor,informe o rua.");
        rua.focus();
        rua.style.border = "1px solid red";
        return false;
    }

    if(cep.value == "" || cep.value == null) {
        alert("por favor,informe o cep.");
        cep.focus();
        cep.style.border = "1px solid red";
        return false;
    }
}
    
        


