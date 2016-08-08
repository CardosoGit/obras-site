<div id="login" class="login-right">
	<div class="container">
		<h3>Login</h3>
		
		<div class="login-top">
			{alert}
				<!-- <ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<div class="clearfix"> </div>
				</ul> -->
				<div class="form-info">
					<form action="{base_url}login/entrar" method="post">
						<input type="text" class="text" name="email" placeholder="Email Adress" required="">
						<input type="password"  name="password" placeholder="Password" required="">
						<label class="hvr-sweep-to-right">
							<input type="submit" value="Entrar">
						</label>
					</form>
				</div>
				<div class="create">
					<h4>Novo no MeuTecnico?</h4>
					<a class="hvr-sweep-to-right" href="{base_url}login/novo">Crie uma conta</a>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>