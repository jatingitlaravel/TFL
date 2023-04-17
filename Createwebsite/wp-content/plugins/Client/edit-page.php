<?php
class Custom_Table_Example_List_Table extends WP_List_Table
{
    function __construct()
    {
        global $status, $page;

        parent::__construct(array(
            'singular' => 'dathangnhanh',
            'plural' => 'dathangnhanhs',
        ));
    }
add_action('edit_column','__construct');
   
    function column_name($item)
    {
        
        $actions = array(
            'edit' => sprintf('<a href="?page=persons_form&id=%s">%s</a>', $item['id'], __('Edit', 'cltd_example')),
            'delete' => sprintf('<a href="?page=%s&action=delete&id=%s">%s</a>', $_REQUEST['page'], $item['id'], __('Delete', 'cltd_example')),
        );
        return sprintf('%s %s',
            $item['madonhang'],
            $this->row_actions($actions)
        );
    }
    add_action('edit_delete_column','column_name');

}

// $id = 0815;
// $table = 'eLearning_progress';
// $wpdb->delete( $table, array( 'id' => $id ) );