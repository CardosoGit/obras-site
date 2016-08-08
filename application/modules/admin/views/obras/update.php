

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    {alert}
    <h1>
      Obras
      <small>Alterar</small>
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
            <form role="form" action="{base_url}admin/obras/update/{id}" method="post" enctype='multipart/form-data'>
              <!-- NOme do servico-->
              <div class="form-group">
                <label>Nome do Proprietário</label>
                <input class="form-control" name="proprietario" value="{proprietario}" type="text" >
              </div>
              <!-- Fim nome do servico -->
              <!-- Descricao curta -->
              <div class="form-group">
                <label>Arquiteto</label>
                <input class="form-control" name="arquiteto" value="{arquiteto}" type="text" >
              </div>

               <div class="form-group">
                <label>Tamanho da obra</label>
                <!-- <input class="form-control" name="tamanho_obra" value="{tamanho_obra}" type="text" > -->

                <div class="input-group">
                      <input class="form-control" name="tamanho_obra" value="{tamanho_obra}" type="text">
                      <span class="input-group-addon">m2</span>
                </div>
              </div>



              <div class="form-group">
                <label>Tipo de Obra</label>
                <select name="tipo_obra" value="{tipo_obra}" class="form-control">
                  <option>Residencial</option>
                  <option>Comercial</option>
                  <option>Industrial</option>
                  <option>Rural</option>
                  <option>Hospitalar</option>
                  <option>Publica</option>
                </select>
              </div>

              <div class="form-group">
                <label>Situação Obra</label>
                <select name="situacao_obra" value="{situacao_obra}" class="form-control">
                  <option>Fundação</option>
                  <option>Levantamento</option>
                  <option>Acabamento</option>
                  <option>Parada</option>
                </select>
              </div>
              <!-- Fim descricao curta -->
              <!-- Descriçao completa -->
              <div class="form-group">
                <label>Observação</label>
                <textarea class="form-control" name="observacao" type="text">{observacao}</textarea>
              </div>
              <!-- Fim Descrição completa -->
              <!-- Categoria -->
              
              <!-- Fim Categoria -->
              <!-- Periodo promocional -->
              <div class="box box-solid" >
                <div class="box-header with-border">
                  <i class="fa fa-map-signs"></i>
                  <h3 class="box-title">Endereço</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="background: aliceblue;">
                <div class="form-inline">
                  <div class="form-group">
                    <label>Rua</label>
                    <input class="form-control" name="rua" type="text" value="{rua}">
                  </div>
                  <div class="form-group">
                    <label>Numero</label>
                    <input class="form-control" name="numero" type="text" value="{numero}">
                  </div>
                </div>
                  
                  <div class="form-group">
                    <label>Bairro</label>
                    <input class="form-control" name="bairro" type="text" value="{bairro}">
                  </div>
                  <div class="form-inline">
                    <div class=" form-group">
                      <label>Cidade</label>
                      <select name="cidade" value="{cidade}" class="form-control">
                        <option>Ijuí</option>
                        <option>Cruz Alta</option>
                        <option>Santa Rosa</option>
                        <option>Santo Angelo</option>
                        <option>Panambi</option>
                      </select>
                    </div>
                     <div class="form-group">
                      <label>CEP</label>
                      <input class="form-control" name="cep"  type="text" value="{cep}" >
                    </div>
                    <div class="form-group">
                      <label>Estado</label>
                      <select name="estado" value="{estado}" class="form-control">
                        <option>RS</option>
                        <option>SC</option>
                        <option>PR</option>
                      </select>
                    </div>
                  </div>
                  
                  
                </div><!-- /.box-body -->
              </div>
              <!-- Fim periodo promocional -->

              <!-- Upload da imagem do servico -->
              <div class="form-group ">
                <label for="url_image_obra">Imagem da Obra</label>
                <input onchange="loadFile(event)" type="file" name="url_image_obra">
                <p class="help-block"></p>
                <div style="display: flex; justify-content: center;align-items: center;"><img class="img-responsive" src="{base_url}{url_image_obra}" style="height: 300px" id="output"/></div>
                
              </div>
              <script>
                var loadFile = function(event) {
                  var reader = new FileReader();
                  reader.onload = function(){
                    var output = document.getElementById('output');
                    output.src = reader.result;
                  };
                  reader.readAsDataURL(event.target.files[0]);
                };
              </script>
              <!-- Fim upload imagem servico -->
              <!-- Btn cadstrar -->
              <div class="box-footer">
                <button  class="btn btn-primary pull-right">Alterar<button>
              </div> 
               <!-- Fim btn cadastrar -->

            </form>
          </div><!-- /.box-body -->
        </div>
      </div>
    </div> 


  </section><!-- /.content -->
</div>
