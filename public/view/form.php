<form  method="POST" action="index.php?action=create">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <input type="nome" class="form-control" id="nome"  name="nome" pattern="[a-zA-Z]+" aria-describedby="nomeHelp">
    <small id="nomeHelp" class="form-text text-muted">Preencha seu nome (Apenas Letras).</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" id="email" required="required" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">Preencha com um email válido.</small>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Data de Nascimento</label>
      <input type="text" class="form-control" id="inputCity" aria-describedby="dataHelp" name="data_nascimento" maxlength="10"  onkeypress="$(this).mask('00/00/0000');">
      <small id="dataHelp" class="form-text text-muted">Preencha com uma data de nascimento válida. <small>(Dia/Mes/Ano)</small> </small>
    </div>    
    <div class="form-group col-md-6">
      <label for="inputZip">Telefone</label>
      <input type="text" class="form-control" id="inputZip" aria-describedby="foneHelp" name="telefone" onkeypress="$(this).mask('(00) 0000-0000#');">
      <small id="foneHelp" class="form-text text-muted">Preencha com uma telefone válido. <small>: (99) 99999-9999</small> </small>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

