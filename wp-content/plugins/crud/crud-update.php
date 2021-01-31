<?php

function crud_demo_update() {
    global $wpdb;
    $table_name = $wpdb->prefix . "crud";
    
    print_r($_POST);

    $id = $_GET["id"];
    $name = $_POST["name"];
    $sname = $_POST["name"];
    $descricao = $_POST["name"];
    $message = '';
//update
    if (isset($_POST['update'])) {
        $wpdb->update(
                $table_name, //table
                array('name' => $name), //data
                array('ID' => $id),
                array('sobrenome' => $sobrenome),
                array('descricao' => $descricao), //where
                array('%s'), //data format
                array('%s') //where format
        );
    }
//delete
    else if (isset($_POST['delete'])) {
        $wpdb->query($wpdb->prepare("DELETE FROM $table_name WHERE id = %s", $id));
    } else {//selecting value to update	
        $schools = $wpdb->get_results($wpdb->prepare("SELECT id,name,sobrenome,descricao from $table_name where id=%s", $id));
        foreach ($schools as $s) {
            $name = $s->name;
        }
    }
    ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/sinetiks-schools/style-admin.css" rel="stylesheet" />
    <div class="wrap">
        <h2>Atualize o registro</h2>

        <?php if ($_POST['delete']) { ?>
            <div class="updated"><p>Registro excluido</p></div>
            <a href="<?php echo admin_url('admin.php?page=crud_demo_list') ?>">&laquo; Voltar a lista</a>

        <?php } else if ($_POST['update']) { ?>
            <div class="updated"><p>Registro atualizado</p></div>
            <a href="<?php echo admin_url('admin.php?page=crud_demo_list') ?>">&laquo; Voltar a lista</a>

        <?php } else { ?>
            <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                <table class='wp-list-table widefat fixed'>
                    <tr><th>Nome</th><td><input type="text" name="name" value="<?php echo $name; ?>"/></td></tr>
                </table>
                <input type='submit' name="update" value='Actualizar' class='button'> &nbsp;&nbsp;
                <input type='submit' name="delete" value='Eliminar' class='button' onclick="return confirm('&iquest;Est&aacute;s seguro de borrar este elemento?')">
            </form>
        <?php } ?>

    </div>
    <?php
}