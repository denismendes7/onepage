<?php

function crud_demo_create() {
    $id = $_POST["id"];
    $name = $_POST["name"];
        $sname = $_POST["name"];
    $descricao = $_POST["name"];
    $message = '';
    //insert
    if (isset($_POST['insert'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . "crud";

        $wpdb->insert(
                $table_name, //table
                array('id' => $id, 'name' => $name, 'sobrenome' => $sname, 'description' => $descricao), //data
                array('%s', '%s') //data format			
        );
        $message.="Registro salvo corretamente";
    }
    ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/crud/style-admin.css" rel="stylesheet" />
    <div class="wrap">
        <h2>Novo registro</h2>
        <?php if (isset($message)): ?><div class="updated"><p><?php echo $message; ?></p></div><?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
            <p>Código alfa-númerico para o ID</p>
            <table class='wp-list-table widefat fixed'>
                <tr>
                    <th class="ss-th-width">Id</th>
                    <td><input type="text" name="id" value="<?php echo $id; ?>" class="ss-field-width" /></td>
                </tr>
                <tr>
                    <th class="ss-th-width">Nome</th>
                    <td><input type="text" name="name" value="<?php echo $name; ?>" class="ss-field-width" /></td>
                </tr>
                <tr>
                    <th class="ss-th-width">Sobrenome</th>
                    <td><input type="text" name="sname" value="<?php echo $sname; ?>" class="ss-field-width" /></td>
                </tr>
                 <tr>
                    <th class="ss-th-width">Descrição</th>
                    <td><input type="text" name="sname" value="<?php echo $descricao; ?>" class="ss-field-width" /></td>
                </tr>
            </table>
            <input type='submit' name="insert" value='Guardar registro' class='button'>
        </form>
    </div>
    <?php
}