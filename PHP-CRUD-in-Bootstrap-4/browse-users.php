<?php include_once('config.php');?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PHP CRUD utilizando Bootstrap com paginação e motor de pesquisa</title>
	
	
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>	

	<?php
	$condition	=	'';
	if(isset($_REQUEST['username']) and $_REQUEST['username']!=""){
		$condition	.=	' AND username LIKE "%'.$_REQUEST['username'].'%" ';
	}
	if(isset($_REQUEST['useremail']) and $_REQUEST['useremail']!=""){
		$condition	.=	' AND useremail LIKE "%'.$_REQUEST['useremail'].'%" ';
	}
	if(isset($_REQUEST['userphone']) and $_REQUEST['userphone']!=""){
		$condition	.=	' AND userphone LIKE "%'.$_REQUEST['userphone'].'%" ';
	}
	if(isset($_REQUEST['df']) and $_REQUEST['df']!=""){

		$condition	.=	' AND DATE(dt)>="'.$_REQUEST['df'].'" ';

	}
	if(isset($_REQUEST['dt']) and $_REQUEST['dt']!=""){

		$condition	.=	' AND DATE(dt)<="'.$_REQUEST['dt'].'" ';

	}
	
	$userData	=	$db->getAllRecords('users','*',$condition,'ORDER BY id DESC');
	?>
   	<div class="container">
		<h1>PHP CRUD em Bootstrap com botão Procura vs paginação</a></h1>
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Página Inicial</strong> <a href="add-users.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Adicionar utilizadores</a></div>
			<div class="card-body">
				<?php
				if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rds"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Registo eliminado com sucesso!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rus"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Registo atualizado com sucesso!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rnu"){
					echo	'<div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> Não alterou nada!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){
					echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Alguma coisa aconteceu errado! <strong>Por favor tente de novo!</strong></div>';
				}
				?>
				<div class="col-sm-12">
					<h5 class="card-title"><i class="fa fa-fw fa-search"></i> Procurar Utilizador</h5>
					<form method="get">
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group">
									<label>Nome</label>
									<input type="text" name="username" id="username" class="form-control" value="<?php echo isset($_REQUEST['username'])?$_REQUEST['username']:''?>" placeholder="nome">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="useremail" id="useremail" class="form-control" value="<?php echo isset($_REQUEST['useremail'])?$_REQUEST['useremail']:''?>" placeholder="email">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Telefone</label>
									<input type="tel" name="userphone" id="userphone" class="form-control" value="<?php echo isset($_REQUEST['userphone'])?$_REQUEST['userphone']:''?>" placeholder="telefone">
								</div>
							</div>
							<div class="col-sm-4">

								<div class="form-group">

									<label>Data</label>
									<div class="input-group">
										<input type="text" class="fromDate form-control hasDatepicker" name="df" id="df" value="" placeholder="de Data">
										<div class="input-group-prepend"><span class="input-group-text">-</span></div>
										<input type="text" class="toDate form-control hasDatepicker" name="dt" id="dt" value="" placeholder="até data">
										<div class="input-group-append"><span class="input-group-text"><a href="javascript:;" onclick="$('#df,#dt').val('');"><i class="fa fa-fw fa-sync"></i></a></span></div>
									</div>

								</div>

							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>&nbsp;</label>
									<div>
										<button type="submit" name="submit" value="search" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Procurar</button><br></br>
										<a href="<?php echo $_SERVER['PHP_SELF'];?>" class="btn btn-danger"><i class="fa fa-fw fa-sync"></i> Apagar</a>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<hr>
		
		<div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white">
						<th>Nº</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Telefone</th>
						<th class="text-center">Gravar dados</th>
						<th class="text-center">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					if(count($userData)>0){
						$s	=	'';
						foreach($userData as $val){
							$s++;
					?>
					<tr>
						<td><?php echo $s;?></td>
						<td><?php echo $val['username'];?></td>
						<td><?php echo $val['useremail'];?></td>
						<td><?php echo $val['userphone'];?></td>
						<td align="center"><?php echo date('Y-m-d',strtotime($val['dt']));?></td>
						<td align="center">
							<a href="edit-users.php?editId=<?php echo $val['id'];?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Atualizar</a> | 
							<a href="delete.php?delId=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Tem a certeza que deseja eliminar este utilizador?');"><i class="fa fa-fw fa-trash"></i> Eliminar</a>
						</td>

					</tr>
					<?php 
						}
					}else{
					?>
					<tr><td colspan="6" align="center">Nenhum registo(s) encontrado!</td></tr>
					<?php } ?>
				</tbody>
			</table>
		</div> <!--/.col-sm-12-->
		
	</div>
	
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
	<script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
	<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
    <script>
		$(document).ready(function() {
			jQuery(function($){
				  var input = $('[type=tel]')
				  input.mobilePhoneNumber({allowPhoneWithoutPrefix: '+1'});
				  input.bind('country.mobilePhoneNumber', function(e, country) {
					$('.country').text(country || '')
				  })
			 });
			 
			 //From, To date range start
			var dateFormat	=	"yy-mm-dd";
			fromDate	=	$(".fromDate").datepicker({
				changeMonth: true,
				dateFormat:'yy-mm-dd',
				numberOfMonths:2
			})
			.on("change", function(){
				toDate.datepicker("option", "minDate", getDate(this));
			}),
			toDate	=	$(".toDate").datepicker({
				changeMonth: true,
				dateFormat:'yy-mm-dd',
				numberOfMonths:2
			})
			.on("change", function() {
				fromDate.datepicker("option", "maxDate", getDate(this));
			});
			
			
			function getDate(element){
				var date;
				try{
					date = $.datepicker.parseDate(dateFormat,element.value);
				}catch(error){
					date = null;
				}
				return date;
			}
			//From, To date range End here	
			
		});
	</script>
</body>
</html>
