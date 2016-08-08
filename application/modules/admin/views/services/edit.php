

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    {alert}
    <h1>
      Serviços
      <small>Adicionar</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">   
      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Geral</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <form role="form" action="{base_url}admin/obras/add" method="post" enctype='multipart/form-data'>
              <!-- NOme do servico-->
              <div class="form-group">
                <label>Nome</label>
                <input type="text" name='name_service' value="{name_service}" class="form-control" placeholder="Enter ...">
              </div>
              <!-- Fim nome do servico -->
              <!-- Descricao curta -->
              <div class="form-group">
                <label>Descrição curta</label>
                <input type="text" name="short_description" value="{short_description}" class="form-control" placeholder="Enter ..." >
              </div>
              <!-- Fim descricao curta -->
              <!-- Descriçao completa -->
              <div class="form-group">
                <label>Descrição completa</label>
                <textarea class="form-control" name="description_service" rows="3" placeholder="Enter ...">{description_service}</textarea>
              </div>
              <!-- Fim Descrição completa -->
              <!-- Categoria -->
              <div class="form-group">
                <label>Categoria</label>
                <select name="service_category" value="{service_category}" class="form-control">
                  <option>Eletricista</option>
                  <option>Eletrotecnico</option>
                  <option>Encanador</option>
                  <option>Tecnico Informatica</option>
                  <option>Tecnico de A/V</option>
                </select>
              </div>
              <!-- Fim Categoria -->
              <!-- Periodo promocional -->
              <div class="box box-solid" >
                <div class="box-header with-border">
                  <i class="fa fa-hourglass-o"></i>
                  <h3 class="box-title">Preço promocional</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="background: aliceblue;">
                  <div class="form-group">
                    <label>Periodo </label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <input type="text" name="promo_date_range" value="{promo_date_range}" class="form-control pull-right" id="reservationtime">
                    </div><!-- /.input group -->
                  </div>

                  <div class="input-group">
                    <label>Preço</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="text" name="promo_price" value="{promo_price}" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>  
                    </div>
                    
                  </div>
                </div><!-- /.box-body -->
              </div>
              <!-- Fim periodo promocional -->

              <!-- Upload da imagem do servico -->
              <div class="form-group ">
                <label for="exampleInputFile">Imagem do serviço</label>
                <input type="file" name="url_image_service" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
              </div>
              <!-- Fim upload imagem servico -->
              <!-- Btn cadstrar -->
              <div class="box-footer">
                <button  class="btn btn-primary pull-right">Cadastrar<button>
              </div> 
               <!-- Fim btn cadastrar -->
            </form>
          </div><!-- /.box-body -->
        </div>
      </div>
    </div> 


  </section><!-- /.content -->
</div>
