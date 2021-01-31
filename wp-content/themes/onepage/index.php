<!doctype html>
<html>
<head>
	<?php wp_head(); ?>
	<?php get_header(); ?>


	<?php 
	$message = "";



    if( isset($_POST["name"])){


    $name =   $_POST["name"];


	global $wpdb;
    $table_name = $wpdb->prefix . "crud";

    $wpdb->insert(
            $table_name, //table
            array('id' => $id, 'name' => $name, 'sobrenome' => $name, 'description' => $name), //data
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
		<br>
		<br>
		<br>

        <?php if (isset($message)): ?><div class="updated"><p><?php echo $message; ?></p></div><?php endif; ?>

		<div class="row">
			<div class="col-sm-3"></div>
			<h1>Bem vindo!</h1>
		</div>

		<div class="row">
			<div class="col-sm-3"></div>
			<h2><img src="icon.png" alt="icon" height="90px" width="90px"></h2>
		</div>


		<div class="row">
			<div class="col-sm-3"></div>
			<p>
				<br>
				kkkkkkkkk
				texto
				<br>
			</p>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	
	</section>

	<section id="memorias">
		<div class="container">
			<h1>Memorias</h1>
			<br>
			<br>
			<br>
			<br>
			
			
		                <div class="row mb-5">
							
							<div class="col-sm-3">
								
								<div class="card" style="  border-radius: 1.25rem; padding: 10px">
									<img class="card-img-top" src="icon.png" alt="icon" height="70px" style="width:85px!important;">

									<div classe="card-body" style="  border-radius: 1.25rem;">
										<form action="" method="post">
										  <div class="form-group">
										    <label for="name">Nome:</label>
										    <input type="name" name="name" class="form-control" placeholder="Digite o Nome" id="name" value="">
										  </div>
										  <button type="submit" class="btn btn-primary">Submit</button>
										</form>
										<h4 classe="card-title">cadastre</h4>


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
