<?php $this->load->view('header_register');?>
<div class="row">
	<div class="panel panel-primary"> 
		<div class="panel-body">
		<!-- insert register  --> 
		<br><br><br><br>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<a href="<?=base_url()?>register/register_entry"><button class="btn btn-success" style="width:100%;height:80px;font-size:40px;">สมัครเรียนออนไลน์</button></a>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row"><br><br><br></div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6"> 
				<a href="<?=base_url()?>register_confirm/"><button class="btn btn-warning" style="width:100%;height:80px;font-size:40px;">แจ้งชำระเงิน</button></a>		
			</div>
			<div class="col-sm-3"></div>
		</div>
		<br><br><br><br> 
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  