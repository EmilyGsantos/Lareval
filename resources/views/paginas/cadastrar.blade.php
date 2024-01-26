<x-layout title="Formulário Cadastro">

   <div class="cointainer">
      @foreach($dados as $dado) <!--// os dados que estão vindo da  conttroller se tornam a variavel $dado -->
        <li class="list-group-item">{{$dado->nome}}</li>
        <li class="list-group-item">{{$dado->telefone}}</li>
        <br><br>
      @endforeach
   </div>

  <form action="cadastrar/salvar" method="POST">
     @csrf <!--Segurança Valida o formulario e indentifica qnd não e ataque  -->
    <br>
      <label>nome:</label>
      <input type="text" id="nome" name="nome" placeholder="infrome seu nome" required/><br><br>

      <label >Telefone:</label>
      <input type="text" id="telefone" name="telefone" placeholder="11 9999-999" required/>

      <button type="submit">Enviar</button>
  </form>


</x-layout>