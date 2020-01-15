 <table class="table table-sm"  style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody> 
  <?php foreach($pessoas as $pessoa): ?>
    <tr>
       
            <th scope="row"><?php echo $pessoa->getId();  ?></th>
            <td><?php echo $pessoa->getNome();  ?></td>
            <td><?php echo $pessoa->getEmail();  ?></td>
            <td><?php echo $pessoa->getDataNascimento();  ?></td>
            <td><?php echo $pessoa->getTelefone();  ?></td>
            <td>
                <a href="index.php?action=delete&id=<?php echo $pessoa->getId(); ?>"class="btn btn-danger btn-sm" onclick="return confirm('Você tem certeza que deseja excluir?')"><i class="fa fa-trash-o"></i></a>
                <a href="index.php?action=update&id=<?php echo $pessoa->getId(); ?>"class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
            </td>      
     
    </tr>
    <?php endforeach; ?>   
  </tbody>
</table> 