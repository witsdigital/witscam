


<script type="text/javascript">
    $(document).ready(function() {
        $(".confirma").click(function() {
            $("#myModal").modal('show');
        });
    });
</script>
<script type="text/javascript">
  
    function confirma(id) {
        document.getElementById('id').value = id;
        $("#myModal").modal('show');
    }
    function deleta() {
        window.location.href = '<?= base_url('vereador/apagar') ?>' + '/' + document.getElementById('id').value;

    }



</script>
<script type="text/javascript">
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Vereadores
            <small>Vereadores Cadastrados</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= base_url() ?>usuario">Usuarios</a></li>
            <li class="active">Cadastrados</li>
        </ol>
    </section>

    <!-- Main content -->

    <div class="box-body">
        <div class="box">
            <div class="box-header">
                 <div align="right"><input  onclick="window.location.href='<?= base_url()?>vereador/cadastro'" type="button" value="Novo vereador" class="btn btn-success"></button></div>
               
                <!--                  <h3 class="box-title">Data Table With Full Features</h3>-->
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 20px;">Id</th>
                            <th></th>
                            <th>Nome</th>
                            <th>Entidade</th>
                       <th >Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($vereadores as $row) { ?>
                            <tr>
                            
                               


                                <td><?php echo $row->id ?></td>
                                <td style="width: 60px;"><img src="<?=  base_url()?>uploads/vereadores/<?php if($row->img == ""){ $img = "default.png";}else{$img = $row->img;} echo $img; ?> "width="60px" height="60px"></img></td>
                                <td><?php echo $row->nome ?></td>
                                <td><?php 
                                $query = $this->db->get_where('entidade', array('id' => $row->entidade));


                                    foreach ($query->result() as $ent) {
                                        echo $ent->tipo . ' de ' . $ent->nome;
                                    } ?></td>
                                

                                <td style="width: 70px;"><button onclick="confirma(<?php echo $row->id ?>);" class="btn confirma  btn-danger btn-flat" >Apagar</button></td>

                            </tr><?php } ?>                       


                    </tbody>

                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.box-body -->
    <div class="box-footer">
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Confirmação de operação</h4>
                    </div>
                    <div class="modal-body">
                        <p>Deseja mesmo apagar este Veredor?<input type="hidden" id="id" value=""></p>
                        <p class="text-warning"><small>Após esta operação todos os dados serão apagados referente a esta operação.</small></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" onclick="deleta();"class="btn btn-primary">Apagar</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.box-footer-->
</div><!-- /.box -->

</section><!-- /.content -->


