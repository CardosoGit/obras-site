<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Obras
    </h1>
   
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Lista de Obras </h3>
          </div><!-- /.box-header -->
          <div class="box-body">

            <table id="obras" class="table table-bordered table-striped">
              <thead>
                
                <tr>  
                  <th></th>  
                  <th>Numero</th>            
                  <th>Proprietario</th>
                  <th>Arquiteto</th>
                  <th>Cidade</th>
                  <th>Tamanho</th>
                  <th></th>               
                </tr>
                
              </thead>
              <tbody>
                {obras}
                <tr>
                  <td>                     
                      <a href="{base_url}admin/obras/editar/{id}" class="btn btn-social-icon btn-github"><i class="fa fa-pencil-square-o"></i></a>
                  </td>
                  <td>{id}</td>
                  <td>{proprietario}</td>
                  <td>{arquiteto}</td>
                  <td>{cidade}</td>
                  <td>{tamanho_obra}</td> 
                  <td>                      
                      <button type="button" data-id="{id}" class="btn btn-social-icon btn-google" data-toggle="modal"  data-target="#myModal"><i class="fa fa-times-circle"></i>
                      </button>
                  </td>
                 
                  
                </tr>
                {/obras}
              </tbody>
              <tfoot>
                <tr>  
                  <th></th> 
                  <th>Numero</th>            
                  <th>Proprietario</th>
                  <th>Arquiteto</th>
                  <th>Cidade</th>
                  <th>Tamanho</th>
                  <th></th>            
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
       

      </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="example-modal">
      <div class="modal fade modal-danger" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Cuidado</h4>
            </div>
            <div class="modal-body">
              <p>Você deseja mesmo deletar essa obra?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Não</button>
              <a id="btn-excluir" href="{base_url}admin/obras/excluir/" class="btn btn-outline">Deletar</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
