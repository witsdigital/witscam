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
            TV_CAMARA
            <small>Adicionar video</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?=  base_url() ?><?php echo $this->uri->segment(1); ?>"><?php echo $this->uri->segment(1); ?></a></li>
            <li class="active"><?php echo $this->uri->segment(2); ?></li>
        </ol>
    </section>



    <!-- Main content -->
    <section class="content">
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap-datepicker.js"></script>
        <!-- Default bo<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap-datepicker.js"></script>x -->
        <div class="box">

            <div class="box-body">
                <form action="<?= base_url(); ?>tv_camara/salvar"  onsubmit="return validarSenha(this)" enctype="multipart/form-data" method="post">
                    <div class="col-md-12">

                        <div class="box-body">
                            <div class="form-group col-md-7">
                                <label for="exampleInputEmail1">Titulo</label>
                                <input type="text" name="titulo"  class="form-control" required placeholder="Titulo">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputEmail1">Link do video</label>
                                <input type="text" name="video"  class="form-control" required placeholder="link do video">
                            </div>
             
				        </div>
                                
                    </div>
                            
                           
                           
                            
            </div><!-- /.box-body -->
        </div>
                    
                    <div class=" col-md-12">
                        <br><button type="submit" class="btn btn-primary">Adicionar</button> <button type="button" onclick="window.location.href='<?=  base_url('noticia')?>'" class="btn btn-danger">Cancelar</button>
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


<script>
	initSample();
</script>