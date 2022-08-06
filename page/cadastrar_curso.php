 <?php

include('lib/conexao.php');

if(isset(['enviar'])) {
    
    $titulo = $_POST['titulo'];
    $descricao_curta = $_POST['descricao_curta'];
    $preco = $_POST['preco'];
    $conteudo = $_POST['conteudo'];
}

?>
 <!-- Page-header start -->
 <div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Cadastrar Curso</h4>
                    <span>Preencha as informações e clique em salvar</span>
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
                    <li class="breadcrumb-item">Cadastrar Curso</li>
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
                    <h5>Formulário de Cadastro</h5>
                </div>
                <div class="card-block">
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Título</label>
                                    <input type="text" name="titulo" class="form-control">
                                </div>                            
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="">Descrição Curta</label>
                                    <input type="text" name="descricao_curta" class="form-control">
                                </div>                            
                            </div><div class="col-lg-8">
                                <div class="form-group">
                                    <label for="">Imagem</label>
                                    <input type="file" name="imagem" class="form-control">
                                </div>                            
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Preço</label>
                                    <input type="text" name="preco" class="form-control">
                                </div>                            
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Conteúdo</label>
                                    <textarea type="text" name="conteudo" rows="10" class="form-control"></textarea>
                                </div>                            
                            </div>
                            <div class="col-lg-12">
                                <a type="button" href="index.php" class="btn btn-primary btn-round"><i class="ti-arrow-left"> Voltar</i></a>
                                <button type="submit" name="enviar" value="1" class="btn btn-success btn-round float-right"><i class="ti-save"> Salvar</i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>