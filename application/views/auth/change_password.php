


<div class="login-right">
      <div class="container">
            <h3>Trocar de Senha</h3>
            <div class="login-top">
                  <!-- <ul class="login-icons">
                        <li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
                        <div class="clearfix"> </div>
                  </ul> -->
                  <div class="form-info">
                  {alert}
                  <form action="{base_url}login/trocar_senha" method="post">
                              <input type="password"  name="old_password" placeholder="Senha antiga" required >
                              <input type="password"  name="new_password" placeholder="Nova Senha" required >

                              <label class="hvr-sweep-to-right">
                                    <input type="submit" value="Trocar">
                              </label>
                        </form>
                        <p>Você já tem uma conta no MeuTécnico? <a href="{base_url}login">Faça Login Aqui</a></p>
                  </div>
                  
            </div>
      </div>
</div>