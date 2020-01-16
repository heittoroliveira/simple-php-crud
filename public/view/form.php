

<form  method="POST" action="index.php?action=<?php echo ($pessoa->id==-1)?'create':'update';?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <input type="nome" class="form-control" id="nome"  name="nome" required="required" pattern="[a-zA-Z\s]+" aria-describedby="nomeHelp" value="<?php echo $pessoa->nome; ?>">
    <small id="nomeHelp" class="form-text text-muted">Preencha seu nome (Apenas Letras).</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" id="email" required="required" aria-describedby="emailHelp" name="email" value="<?php echo $pessoa->email; ?>">
    <small id="emailHelp" class="form-text text-muted">Preencha com um email válido.</small>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Data de Nascimento</label>
      <input type="date" class="form-control" id="inputCity" aria-describedby="dataHelp" name="data_nascimento" maxlength="10" placeholder="dd/mm/yyyy" value="<?php echo $pessoa->data_nascimento; ?>">
      <small id="dataHelp" class="form-text text-muted">Preencha com uma data de nascimento válida. <small>(Dia/Mes/Ano)</small> </small>
    </div>    
    <div class="form-group col-md-6">
      <label for="inputZip">Telefone</label>
      <input type="text" class="form-control" id="inputZip" aria-describedby="foneHelp" name="telefone" onkeypress="$(this).mask('(00) 00000-0000');" value="<?php echo $pessoa->telefone; ?>">
      <small id="foneHelp" class="form-text text-muted">Preencha com uma telefone válido. <small>: (99) 99999-9999</small> </small>
    </div>
    <input type="hidden" name="id" value="<?php echo $pessoa->id; ?>" />
  </div>

  <button type="submit" class="btn <?php echo ($pessoa->id==-1)?'btn-primary':'btn-success'; ?>"><?php echo ($pessoa->id==-1)?'Cadastrar':'Salvar'; ?></button>
</form>

