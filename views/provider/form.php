
<!-- Page Heading -->
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	<div class="x_title">
		<h2 class="page-header"><?php echo $this->title; ?></h2>
		<div class="clearfix"></div>
		<ol class="breadcrumb">
			<li><a href="<?php echo URL; ?>">Home</a></li>
			<li><a href="<?php echo URL; ?>provider">Listar Provider</a></li>
			<li class="active"><?php echo $this->title; ?></li>
		</ol>
	</div>

<form id="form1" name="form1" method="post" action="<?php echo URL;?>provider/<?php echo $this->action;?>/" class="form-horizontal">

<div class="row">

<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
<input type="hidden" name="idProvider" value="<?=$this->obj->getId_provider()?>" />

<div class="form-group">
	<label for="name" class="col-md-2 col-sm-2 col-xs-12 control-label">Name</label> 
	<div class="col-md-9 col-sm-9 col-xs-12"> 
		<input type="text" name="name" id="name"  class="form-control col-md-7 col-xs-12" required="required" value="<?=$this->obj->getName()?>" />
	</div>
</div>

<div class="form-group">
	<label for="email" class="col-md-2 col-sm-2 col-xs-12 control-label">Email</label> 
	<div class="col-md-9 col-sm-9 col-xs-12"> 
		<input type="text" name="email" id="email"  class="form-control col-md-7 col-xs-12" required="required" value="<?=$this->obj->getEmail()?>" />
	</div>
</div>

<div class="form-group">
	<label for="adress" class="col-md-2 col-sm-2 col-xs-12 control-label">Adress</label> 
	<div class="col-md-9 col-sm-9 col-xs-12"> 
		<input type="text" name="adress" id="adress"  class="form-control col-md-7 col-xs-12" required="required" value="<?=$this->obj->getAdress()?>" />
	</div>
</div>

<div class="form-group">
	<label for="phone1" class="col-md-2 col-sm-2 col-xs-12 control-label">Phone1</label> 
	<div class="col-md-9 col-sm-9 col-xs-12"> 
		<input type="text" name="phone1" id="phone1"  class="form-control col-md-7 col-xs-12" required="required" value="<?=$this->obj->getPhone1()?>" />
	</div>
</div>

<div class="form-group">
	<label for="phone2" class="col-md-2 col-sm-2 col-xs-12 control-label">Phone2</label> 
	<div class="col-md-9 col-sm-9 col-xs-12"> 
		<input type="text" name="phone2" id="phone2"  class="form-control col-md-7 col-xs-12" required="required" value="<?=$this->obj->getPhone2()?>" />
	</div>
</div>

<div class="form-group">
	<div class="col-sm-10  col-sm-offset-2">
		<input type="submit" name="salvar" id="salvar" value="Salvar" class="btn btn-success" />
		<a href="<?php echo URL; ?>provider" class="btn btn-primary">Cancelar</a>
	</div>
</div>


</div>
</div>

</form>
</div>
</div>
</div>
<!-- /.row -->