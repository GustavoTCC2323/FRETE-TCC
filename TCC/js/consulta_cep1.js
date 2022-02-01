function limpa_formulário_cep1() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua1').value = ("");
    document.getElementById('bairro1').value = ("");
    document.getElementById('cidade1').value = ("");
    document.getElementById('uf1').value = ("");
  }

  function meu_callback1(conteudo) {
    if (!("erro" in conteudo)) {
      //Atualiza os campos com os valores.
      document.getElementById('rua1').value = (conteudo.logradouro);
      document.getElementById('bairro1').value = (conteudo.bairro);
      document.getElementById('cidade1').value = (conteudo.localidade);
      document.getElementById('uf1').value = (conteudo.uf);
    } //end if.
    else {
      //CEP não Encontrado.
      limpa_formulário_cep1();
      alert("CEP não encontrado.");
    }
  }

  function pesquisacep1(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if (validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua1').value = "...";
        document.getElementById('bairro1').value = "...";
        document.getElementById('cidade1').value = "...";
        document.getElementById('uf1').value = "...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback1';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

      } //end if.
      else {
        //cep é inválido.
        limpa_formulário_cep1();
        alert("Formato de CEP inválido.");
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep1();
    }
  };