<div class="login-right">
      <div class="container">
            <h3>Fazer uma senha nova</h3>
            <div class="login-top">
                  <!-- <ul class="login-icons">
                        <li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
                        <div class="clearfix"> </div>
                  </ul> -->
                  <div class="form-info">
                  {alert}
                  <form action="{base_url}login/esqueci_a_senha" method="post">
                            
                              <input type="text"  name="email" placeholder="Digite o email para resetar a senha" required >

                              <label class="hvr-sweep-to-right">
                                    <input type="submit" value="Resetar Senha">
                              </label>
                        </form>
                        <p>Você já tem uma conta no MeuTécnico? <a href="{base_url}login">Faça Login Aqui</a></p>
                  </div>
                  
            </div>
      </div>
</div> 