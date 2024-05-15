<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/funcoes.php';
?>
<div class="card mt-3">
  <div class="card-header">
    <div class="row">
      <div class="col-10"><h4 class="mt-3"><i class="bi bi-telephone-fill"></i> Contatos</h4></div>
    
    </div>      
  </div>
  <div class="card-body">
  <table class="table table-responsive">
    <tr>
        <th style="width:5% ">Cód:</th>
        <th style="width:45%">Nome</th>
        <th style="width:45%">Telefone</th>
        <th style="width:5%">Ação</th>

    </tr>
        <?php
        $retornoadm = listarTabela('idcliente, nome, telefone','cliente','idcliente' ); 
        if($retornoadm != 'Vazio'){
            foreach($retornoadm as $clientes){
              
              $idcliente=$clientes->idcliente;
                $nome=$clientes->nome;
                $telefone=$clientes->telefone;
             
             
      ?>
    
  
    <tr>
      <th scope="row"><?php echo $idcliente?></th>
      <td><?php echo $nome?></td>
      <td><?php echo $telefone?></td>
   
      <td>
          <div class="btn-group" role="group" aria-label="Basic example">
           
          <button type="button"   class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modaleditcliente" onclick="abrirModalEdicao2('<?php echo $nome ?>','<?php echo $email ?>','<?php echo $cpf ?>',<?php echo $idprodutos ?> )"><i class="bi bi-box-arrow-in-up-left"></i>Alterar</button>
            <button type="button" class="btn btn-outline-danger btn-sm" onclick="deletargeraladm('excadm',<?php echo $idadm ?>)"><i class="bi bi-trash3"></i> </button>
          </div>
      </td>
    </tr>
  <?php 
        }
      };
  ?>
</table>
  </div>
</div>



            
            
           
            
      
