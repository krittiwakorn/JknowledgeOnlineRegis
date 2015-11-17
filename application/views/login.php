<?php $this->load->view('header');?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		<div class="login-panel panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">กรุณา Sign in</h3>
				</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">จำข้อมูลการล็อกอิน 
								</label>
							</div>
							<!-- Change this to a button or input when using this as a form -->
							<a href="index.html" class="btn btn-lg btn-success btn-block">เข้าสู่ระบบ</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer');?>