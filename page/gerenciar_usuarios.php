 <?php

include('lib/conexao.php');

$sql_cursos = "SELECT * FROM usuarios";
$sql_query = $mysqli->query($sql_cursos) or die($mysqli->error);
$num_usuarios = $sql_query->num_rows;
?>
 
 <!-- Page-header start -->
 <div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Gerenciar Usuários</h4>
                    <span>Adiministre os usuários cadastrado no sistema</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.php">
                            <i class="icofont icofont-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Gerenciar usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->

<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Todos os usuários</h5>
                    <span><a href="index.php?p=cadastrar_usuario">Clique aqui</a> para cadastrar um usuário</span>
                </div>
                <div class="card-block table-border-style">
                    <div  class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">#</th>
                                    <th style="text-align: center;">Nome</th>
                                    <th style="text-align: center;">E-mail</th>
                                    <th style="text-align: center;">Créditos</th>
                                    <th style="text-align: center;">Data de Cadastro</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($num_usuarios == 0) { ?> 
                                    <tr>
                                    <td colspan="5">Nenhum usuário foi cadastrado</td>
                                </tr>
                                <?php } else {
                                    
                                    while($usuario = $sql_query->fetch_assoc()) {
                                        ?>
                                        <tr style="text-align: center;">
                                            <th scope="row"><?php echo $usuario['id']; ?></th>
                                            <td><?php echo $usuario['nome']; ?></td>
                                            <td><?php echo $usuario['email']; ?></td>
                                            <td>R$<?php echo number_format($usuario['creditos'], 2,',','.'); ?></td>
                                            <td><a href="index.php?p=editar_usuario&id=<?php echo $curso['id']; ?>">Editar</a> | <a href="index.php?p=deletar_usuario&id=<?php echo $usuario['id']; ?>">Deletar</a></td>
                                        </tr>
                                        <?php 
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>