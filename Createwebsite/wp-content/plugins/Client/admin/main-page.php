<?php

global $wpdb, $table_prefix;
$wp_emp = $table_prefix. 'emp';


$q = "SELECT * FROM `$wp_emp`;";
$results = $wpdb->get_results($q);

ob_start()
?>
<table class="wp-list-table widefat fixed striped table-view-list posts" >
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($results as $row):
        ?>
    <tr>
        <td><?php echo $row->ID;?></td>
        <td><?php echo $row->name;?></td>
        <td><?php echo $row->email;?></td>
        <td><?php echo admin_url('/'.$wp_emp);?>Edit</td>
    </tr>
    <?php
    endforeach;
   ?>
</tbody>
</table>
<?php
echo ob_get_clean();
