<?php $this->load->view('header_register');?>
<div class="row" style="margin-top:-40px;">
	<div class="panel panel-primary">
		<div class="panel-heading" style="font-size:20px;">สมัครเรียน</div>
		<div class="panel-body">
		<!-- insert register  -->
		<br/>
		<?php echo form_open('Registration/insert_register','class="form-horizontal " role="form"');?>
		<div class="row">
			<div class="col-sm-12" style="text-align:center;">
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;"> 
					<i class="glyphicon glyphicon-ok text-success"></i> เงื่อนไขการสมัคร
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;"> 
					<i class="glyphicon glyphicon-ok text-success"></i> เลือกคอร์สเรียน
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;">
					<i class="glyphicon glyphicon-ok text-success"></i>  ข้อมูลผู้สมัคร
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;">
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  ข้อมูลผู้สมัครร่วม
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;"> 
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  ตรวจสอบและยืนยัน
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;"> 
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  เสร็จสิ้น (รอการชำระเงิน)
				</div> 
			</div>
		</div>
		<br/><br/>
		<div class="row">
			<div class="col-sm-4">  
                <label >รหัสประจำประชาชน *</label>
                <input type="text" id="idcard" name="idcard" class="form-control" style="font-size: 20px; height:40px;" required="required">
			</div>
			<div class="col-sm-4"> 
	            <label >เบอร์ติดต่อ *</label>
                <input type="text" id="mobile" name="mobile" class="form-control" style="font-size: 20px; height:40px;" required="required">
            </div>
            <div class="col-sm-4"> 
                <label >อีเมล์ *</label>
            	<input type="email" id="email" name="email" class="form-control" style="font-size: 20px; height:40px;" required="required">
            </div>
        </div>
		<div class="row" style="padding-top:20px;">
			<div class="col-sm-4"> 
                <label >ชื่อ *  
                	<input type="radio" name="is_it" value="1"  checked> นาย 
                	<input type="radio" name="is_it" value="2" > นางสาว 
                </label>
                <input type="text" id="firstname" name="firstname" class="form-control" style="font-size: 20px; height:40px;" required="required">
            </div> 
			<div class="col-sm-4">
                <label >นามสกุล *</label>
                <input type="text" id="lastname" name="lastname" class="form-control" style="font-size: 20px; height:40px;" required="required">
			</div> 
			<div class="col-sm-4">
                <label >ชื่อเล่น *</label>
                <input type="text" id="nickname" name="nickname" class="form-control" style="font-size: 20px; height:40px;" required="required">
			</div> 
		</div>
		<div class="row" style="padding-top:20px;">
			<div class="col-sm-4">
                <label >วันเกิด *</label>
                <input type="text" id="birth_date" name="birth_date" class="form-control" style="font-size: 20px; height:40px;" required="required">
			</div> 
			<div class="col-sm-4">
                <label >facebook</label>
            	<input type="text" id="facebook" name="facebook" class="form-control" style="font-size: 20px; height:40px;" required="required">
            </div>  
			<div class="col-sm-4">
                <label >Line ID</label>
            	<input type="text" id="line_id" name="line_id" class="form-control" style="font-size: 20px; height:40px;" required="required">
            </div> 
        </div>
		<div class="row" style="padding-top:20px;">
			<div class="col-sm-4">
                <label >โรงเรียน</label>
            	<input type="text" id="line_id" name="line_id" class="form-control" style="font-size: 20px; height:40px;" required="required">
	        </div>
	        <div class="col-sm-4">
                <label >ระดับชั้น </label>
                <select name="_id_course" class="form-control">
                	<option value="sel" selected> -- เลือก -- </option>
				    <option value="1">มัธยมศึกษาปีที่ 1</option>
				    <option value="2">มัธยมศึกษาปีที่ 2</option>
				    <option value="3">มัธยมศึกษาปีที่ 3</option>
				    <option value="4">มัธยมศึกษาปีที่ 4</option>
				    <option value="5">มัธยมศึกษาปีที่ 5</option>
				    <option value="6">มัธยมศึกษาปีที่ 6</option>
				</select>
			</div>
			<div class="col-sm-4">
                <label >จังหวัด</label>
            	<select name="id_province" class="form-control">
                	<option value="sel" selected> -- เลือก -- </option>
				    <option value="1">คอร์ส 001</option>
				    <option value="2">คอร์ส 002</option>
				    <option value="3">คอร์ส 003</option>
				</select> 
			</div> 
		</div> 
		<br><br>
		<div class="row">
			<div class="col-sm-3">
				<a href="<?=base_url()?>register/register_add"><div  class="btn btn-warning" style="width:40%;margin-left:19%;"> ย้อนกลับ </div></a>
			</div>
			<div class="col-sm-6"></div>
			<div class="col-sm-3" style="text-align:right;">
				<a href="<?=base_url()?>register/register_friend/"><div class="btn btn-success" style="width:40%;margin-right:19%"> ขั้นตอนถัดไป </div></a>
			</div>
		</div>
		<br/><br/>

		<?php echo form_close();?>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  