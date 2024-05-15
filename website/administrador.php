<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/funcoes.php';
?>


<div class="card mt-3">
  <div class="card-header">
    <div class="row">
      <div class="col-10"><h4 class="mt-3"><i class="bi bi-person-fill-gear"></i> Administrador</h4></div>
      <div class="col-2"><button type="button" class="btn btn-outline-dark btn-sm mt-3 float-end"data-bs-toggle="modal" data-bs-target="#modalAddcliente"><i class="bi bi-upload"></i> Adicionar</button></div>
    </div>      
  </div>
  <div class="card-body">
  <table class="table table-responsive">
    <tr>
        <th style="width:5% ">Cód:</th>
        <th style="width:30%">Nome</th>
        <th style="width:30%">Telefone</th>
        <th style="width:20%">Senha</th>
        <th style="width:15%">Ação</th>
    </tr>
        <?php
        $retornoadm = listarTabela('idadm, nome, telefone, senha, cadastro, alteracao, ativo','adm','idadm' ); 
        if($retornoadm != 'Vazio'){
            foreach($retornoadm as $adms){
              
              $idadm=$adms->idadm;
                $nome=$adms->nome;
                $telefone=$adms->telefone;
             
             
      ?>
    
  
    <tr>
      <th scope="row"><?php echo $idadm?></th>
      <td><?php echo $nome?></td>
      <td><?php echo $telefone?></td>
      <td>************</td>
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



            
            
           
            
      
