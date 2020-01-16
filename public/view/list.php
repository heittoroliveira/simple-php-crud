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
  <?php foreach($pessoa_list as $item): ?>
    <tr>
       
            <th scope="row"><?php echo $item->id;  ?></th>
            <td><?php echo $item->nome;  ?></td>
            <td><?php echo $item->email;  ?></td>
            <td><?php echo $item->data_nascimento;  ?></td>
            <td><?php echo $item->telefone;  ?></td>
            <td>
                <a href="index.php?action=delete&id=<?php echo $item->id; ?>"class="btn btn-danger btn-sm" onclick="return confirm('Você tem certeza que deseja excluir?')"><i class="fa fa-trash-o"></i></a>
                <a href="index.php?action=update&id=<?php echo $item->id; ?>"class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
            </td>      
     
    </tr>
    <?php endforeach; ?>   
  </tbody>
</table> 