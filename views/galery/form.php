
<!-- Styles -->
<link href="<?php echo URL?>util/jqueryfiler/css/jquery.filer.css" rel="stylesheet">
<link href="<?php echo URL?>util/jqueryfiler/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet">

<!-- Jvascript -->
<script src="<?php echo URL?>util/jqueryfiler/js/jquery.filer.min.js" type="text/javascript"></script>
<script src="<?php echo URL?>util/jqueryfiler/js/custom.js" type="text/javascript"></script>

<!-- Page Heading -->
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	<div class="x_title">
		<h2 class="page-header"><?php echo $this->title; ?></h2>
		<div class="clearfix"></div>
		<ol class="breadcrumb">
			<li><a href="<?php echo URL; ?>">Home</a></li>
			<li><a href="<?php echo URL; ?>galery">Listar Galeria</a></li>
			<li class="active"><?php echo $this->title; ?></li>
		</ol>
	</div>

<div class="row">

<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
<form id="form1" name="form1" method="post" action="<?php echo URL;?>galery/<?php echo $this->action;?>/" class="form-horizontal">
<input type="hidden" name="idGalery" value="<?=$this->obj->getId_galery()?>" />
<input type="hidden" name="path" value="<?=$this->path?>" />

<div class="form-group">
	<label for="name" class="col-md-2 col-sm-2 col-xs-12 control-label">Nome</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		<input type="text" name="name" id="name"  class="form-control col-md-7 col-xs-12" required="required" value="<?=$this->obj->getName()?>" />
	</div>
</div>

<div class="form-group">
	<label for="date" class="col-md-2 col-sm-2 col-xs-12 control-label">Data</label>
	<div class="col-md-9 col-sm-9 col-xs-12">
		<input type="text" name="date" id="date"  class="form-control calendary col-md-7 col-xs-12" required="required" value="<?=Data::formataData($this->obj->getDate())?>" />
	</div>
</div>


<div class="form-group">
	<div class="col-sm-10  col-sm-offset-2">
		<input type="submit" name="salvar" id="salvar" value="Salvar" class="btn btn-success" />
		<a href="<?php echo URL; ?>galery" class="btn btn-primary">Cancelar</a>
	</div>
</div>

<input type="hidden" name="mainpicture" id="mainpicture" value="<?=$this->obj->getMainpicture()?>">
</form>
</div><!-- col-md-6 -->

<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">

	<!-- debug
	<form name="form5" action="<?php echo URL;?>product/wideimage_ajax/" method="post" enctype="multipart/form-data" >
		<input type="file" name="files[]"  multiple="multiple" >
		<input type="submit">
	</form>-->

	<input type="hidden" name="action_post" id="action_post" value="<?php echo $this->method_upload; ?>">
	<input type="file" name="files[]" id="filer_input2" multiple="multiple">

	<div id="output-files">
	<div class="jFiler-items-list jFiler-items-grid" >

		<?php if( $this->path != '' ) { ?>
		<?php foreach ( Data::getImgPost('galery', $this->path, true ) as $img ) { ?>

		<?php
		// pega o nome da imagem
		$array_img = explode('/', $img); $nome_img = end($array_img);
		?>

		<div class="jFiler-item" id="<?php echo 'id-'.base64_encode($nome_img);?>">
			<div class="jFiler-item-container">
				<div class="jFiler-item-inner">
					<div class="jFiler-item-thumb"><img alt="" src="<?=URL.$img?>" ></div>
					<div class="jFiler-item-assets jFiler-row" style="text-align:center">

						<ul class="list-inline pull-right">
							<?php $link_img = str_replace('/thumb/', '/', $img);?>
							<li>
								<button class="bt-copy btn btn-info btn-xs" data-clipboard-action="copy" data-clipboard-text="<?='../../'.$link_img?>"><i class="glyphicon glyphicon-link"></i></button>
								<a rel="<?php echo base64_encode($this->obj->getPath());?>" name="<?php echo base64_encode($nome_img); ?>" href="#" class="btn delete btn-danger btn-xs"><i class="icon-jfi-trash jFiler-item-trash-action"></i> Deletar</a>
							</li>

						</ul><br>
						<label>

							<?php $checked = $this->obj->getMainpicture() == $nome_img ? 'checked="checked"' : ''; ?>
							<input type="radio" class="radio-mainpicture" <?php echo $checked; ?> name="rd-mainpicture" value="<?php echo $nome_img; ?>">
							Destaque
						</label>
					</div>
				</div>
			</div>
		</div>
		<?php } // end foreach?>
		<?php } // end if ?>
	</div>
	</div>

</div><!-- col-md-6 -->

</div><!-- row -->


</div>
</div>
</div>
<!-- /.row -->




<script>

	$(document).ready(function(){
		var URL = '<?=URL?>';

		$(".delete").click(function(){

			$target = $(this);
			$liImg = '#id-' + $(this).attr('name');
			//alert($(this).attr('rel') +' - '+ $(this).attr('name'));
			$($target).html('Deletando...');
			$.post(URL+'galery/delete_img', { path:$(this).attr('rel'), img_name: $(this).attr('name') }, function(data){

				$($liImg).fadeOut( "slow", function() { $($liImg).remove(); });
				//alert(data);
			});
		});

		$('.radio-mainpicture').on('click',function(){
			$('#mainpicture').val($(this).val());
		})

	});
</script>
