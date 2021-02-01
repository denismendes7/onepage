<?php

function crud_demo_list() {
    ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/crud/style-admin.css" rel="stylesheet" />
    <div class="wrap">
        <h2>Crud</h2>
        <div class="tablenav top">
            <div class="alignleft actions">
                <a href="<?php echo admin_url('admin.php?page=crud_demo_create'); ?>">Novo registro</a>
            </div>
            <br class="clear">
        </div>
        <?php
        global $wpdb;
        $table_name = $wpdb->prefix . "crud";

        $rows = $wpdb->get_results("SELECT id,name, sobrenome,datenasc,datefal, description as descricao from $table_name");
        ?>
        <table class='wp-list-table widefat fixed striped posts'>
            <tr>
                <th class="manage-column ss-list-width">Id</th>
                <th class="manage-column ss-list-width">Nome</th>
                <th class="manage-column ss-list-width">SobreNome</th>
                <th class="manage-column ss-list-width">Descrição</th>
                 <th class="manage-column ss-list-width">datenasc</th>
                  <th class="manage-column ss-list-width">datefal</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($rows as $row) { ?>
                <tr>
                    <td class="manage-column ss-list-width"><?php echo $row->id; ?></td>
                    <td class="manage-column ss-list-width"><?php echo $row->name; ?></td>
                    <td class="manage-column ss-list-width"><?php echo $row->sobrenome; ?></td>
                    <td class="manage-column ss-list-width"><?php echo $row->descricao; ?></td>">
                    <td class="manage-column ss-list-width"><?php echo $row->datenasc; ?></td>">
                    <td class="manage-column ss-list-width"><?php echo $row->datefal; ?></td>">
                    <td><a href="<?php echo admin_url('admin.php?page=crud_demo_update&id=' . $row->id.'&name='.$row->name.'&sobrenome='.$row->sobrenome.'&descricao='.$row->descricao.' &datenasc='.$row->datenasc); ?>">Atualizar</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php
}