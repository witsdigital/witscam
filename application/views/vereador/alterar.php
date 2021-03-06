<script type="text/javascript">
   function validaSenha (input){ 
    if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Senha não confere,preencha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Publicações
            <small>cadastro de Usuário</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?=  base_url('usuario')?>">Usuários</a></li>
            <li class="active">Cadastro</li>
        </ol>
    </section>



    <!-- Main content -->
    <section class="content">
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap-datepicker.js"></script>
        <!-- Default bo<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap-datepicker.js"></script>x -->
        <div class="box">

            <div class="box-body">
                <form action="<?= base_url(); ?>usuario/update"  onsubmit="return validarSenha(this)" enctype="multipart/form-data" method="post">
                    <div class="col-md-6">
                

                        <div class="box-body">
                            <input type="hidden" value="<?php echo $usuarios[0]->id ?>" name="iduser">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" name="nome"  class="form-control" value="<?php echo $usuarios[0]->nome ?>" required placeholder="Nome">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Sobrenome</label>
                                <input type="text" name="sobrenome"  class="form-control" value="<?php echo $usuarios[0]->sobrenome ?>" required placeholder="sobrenome">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">login</label>
                                <input type="text" name="login"  class="form-control" value="<?php echo $usuarios[0]->login ?>" disabled required placeholder="Login">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Senha</label>
                                <input id="txtSenha" type="password" name="senha"  class="form-control" required placeholder="Senha" disabled>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Confirma Senha</label>
                                <input type="password" name="confirmasenha"  class="form-control" required oninput="validaSenha(this)" disabled placeholder="Confirma senha">
                            </div>
                        </div><!-- /.box-body -->
                    </div>
                     <div class="col-md-6">

                        <div class="box-body">
                             <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" name="email"  class="form-control" value="<?php echo $usuarios[0]->email ?>" required placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Endereço</label>
                                <input type="text" name="endereco"  class="form-control" value="<?php echo $usuarios[0]->endereco ?>" required placeholder="Endereço">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Cidade</label>
                                <input type="text" name="cidade"  class="form-control"  value="<?php echo $usuarios[0]->cidade ?>" required placeholder="Cidade">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Estado</label>
                                <input type="text" name="estado"  class="form-control" required  value="<?php echo $usuarios[0]->estado ?>" placeholder="Estado">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Entidade</label>
                                <select name="entidade" class="form-control">
                                    <option>1</option>
                                    
                                </select>
                            </div>
                           
                        </div><!-- /.box-body -->
                    </div>
                  
                    <div class=" col-md-12">
                        <br><button type="submit" class="btn btn-primary">Enviar</button><button type="button" onclick="window.location.href='<?=  base_url()?>usuario'" class="btn btn-danger">Cancela</button>
                    </div>
                </form>
            </div><!-- /.box-body -->
            <div class="box-footer">

            </div><!-- /.box-footer-->
        </div><!-- /.box -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<!-- InputMask -->

<script type="text/javascript">
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy

        //iCheck for checkbox and radio inputs

    });
</script>

