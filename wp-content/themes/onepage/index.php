<!doctype html>
<html>
<head>
	<?php wp_head(); ?>
	<?php get_header(); ?>


	<?php 
	$message = "";



    if( isset($_POST["name"])){


    $name =   $_POST["name"];
    $sobrenome = $_POST["sobrenome"];
    $descricao = $_POST["descricao"];
    $datenasc = $_POST["datenasc"];
    $datefal = $_POST["datefal"];


	global $wpdb;
    $table_name = $wpdb->prefix . "crud";

    $wpdb->insert(
            $table_name, //table
            array('id' => $id, 'name' => $name, 'sobrenome' => $sobrenome, 'description' => $descricao, 'datenasc' => $datenasc, 'datefal' => $datefal), //data
            array('%s', '%s') //data format			
    );


    	$message.="Registro salvo corretamente";

    }	

	?>
</head>

<body>

	<style>
		body {
			background-image: url('fundo.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
	</style>


	<section id="home" >

		<br>
		<br>
		<br>
		<br>
		

        <?php if (isset($message)): ?><div class="updated"><p><?php echo $message; ?></p></div><?php endif; ?>

		<div class="row">
			<div class="col-sm-3"></div>
			<h1><em>Crie um memorial <br> Para uma pessoal especial!</em></h1>
		</div>

		<div class="row">
			<div class="col-sm-3"></div>
			<h2><img src="icon.png" alt="icon" height="90px" width="90px"></h2>
		</div>


		<div class="row">
			<div class="col-sm-3"></div>
			<p><em>
				<br>O vazio deixado pela ausência é imensurável
				<br> com a pura certeza que jamais será novamente ocupado.
				<br>A saudade será eterna e a presença não poderá mais ser sentida,
				<br> mas as lembranças dos bons momentos vividos são um ótimo conforto,
				<br> que permanecerá para sempre conosco.
				<br>Crie aqui o memorial para seu essa pessoa
				<br> que merece sempre ser lembrado.
			</em></p>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

	
	</section>

	<section id="memorias">
		<div class="container">
			<br>
			<br>
			<br>
			<h1><em>Memorias</em></h1>
			
			
		                <div class="row mb-5">
							
							<div class="col-sm-3">
								
								<div class="card" style="  border-radius: 1.25rem; padding: 10px">
									<img class="card-img-top" src="icon.png" alt="icon" height="100px" style="width:85px!important;">

									<div classe="card-body" style="  border-radius: 1.25rem;">
										<form action="" method="post">
										  <div class="form-group">
										  	<div class="form-rows"><em>
										    <label for="name">Nome:</label>
										    <input type="name" name="name" class="form-control" placeholder="Digite o Nome" id="name" value="">
										    <label for="name">Sobrenome:</label>
										    <input type="name" name="sobrenome" class="form-control" placeholder="Digite o Sobrenome" id="sobrenome" value="">
										    <label for="name">Descrição:</label>
										    <input type="name" name="descricao" class="form-control" placeholder="Digite o Biografia" id="descricao" value="">
										    <label for="nome" >Data de nascimento</label>
										    <div class="col-md-20">
										    <input type="date" name="datenasc" class="form-control" id="date" value=""></div>
										    <label for="nome" >Data de falecimento</label>
										    <div class="col-md-20">
										    <input type="date" name="datefal" class="form-control" id="date" value=""></div>
										  </div></em>
										 </div>

										  <button type="submit" class="btn btn-primary">Submit</button>
										</form>
										<h4 classe="card-title"></h4>


									</div>

								</div>
							</div>


							<br>
							<br>
							<br>
							<br>

							<div class="col-sm-3">

 <?php
        global $wpdb;
        $table_name = $wpdb->prefix . "crud";

        $rows = $wpdb->get_results("SELECT id,name, sobrenome, description as descricao from $table_name order by id desc");
        ?>
            <?php foreach (array_slice($rows, 0, 3)  as $row) { ?>
               <div class="card" style=" border-radius: 1.25rem; padding: 10px">
									<img class="card-img-top" src="rf.jpg" alt="icon" style="width: 100%; border-radius: 1.25rem;">

									<div classe="card-body">
										<h4 classe="card-title"><?php echo $row->name; ?></h4>
										<h5 classe="card-title"><?php echo $row->descricao; ?></h5>

									</div>

								</div>
            <?php } ?>
							</div>

						</div>

			
			<br>
			<br>
			<br>
			

			<div class="row">
				<a type="button" class="btn btn-primary" href="#home" >Go to top</a>
			</div>
		</div>
	</section>

</body>



<?php get_footer();
