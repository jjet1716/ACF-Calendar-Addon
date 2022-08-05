<?php
/**
 * Plugin Name: STG Events
 * Description: this is a test
 */

function plugin_activate(){

    // Require parent plugin
    if ( ! is_plugin_active( 'advanced-custom-fields/acf.php' ) and ! file_exists('../advanced-custom-fields/acf.php')) {
        // Stop activation redirect and show error
        wp_die('Sorry, but this plugin requires the Advanced Custom Fields to be installed and active. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
    }
}
register_activation_hook( __FILE__, 'plugin_activate' );
include( '../advanced-custom-fields/acf.php');

function cptui_register_my_cpts() {

	/**
	 * Post Type: CEvents.
	 */

	$labels = [
		"name" => __( "CEvents", "hello-elementor-child" ),
		"singular_name" => __( "CEvent", "hello-elementor-child" ),
		"menu_name" => __( "My CEvents", "hello-elementor-child" ),
		"all_items" => __( "All CEvents", "hello-elementor-child" ),
		"add_new" => __( "Add new", "hello-elementor-child" ),
		"add_new_item" => __( "Add new CEvent", "hello-elementor-child" ),
		"edit_item" => __( "Edit CEvent", "hello-elementor-child" ),
		"new_item" => __( "New CEvent", "hello-elementor-child" ),
		"view_item" => __( "View CEvent", "hello-elementor-child" ),
		"view_items" => __( "View CEvents", "hello-elementor-child" ),
		"search_items" => __( "Search CEvents", "hello-elementor-child" ),
		"not_found" => __( "No CEvents found", "hello-elementor-child" ),
		"not_found_in_trash" => __( "No CEvents found in trash", "hello-elementor-child" ),
		"parent" => __( "Parent CEvent:", "hello-elementor-child" ),
		"featured_image" => __( "Featured image for this CEvent", "hello-elementor-child" ),
		"set_featured_image" => __( "Set featured image for this CEvent", "hello-elementor-child" ),
		"remove_featured_image" => __( "Remove featured image for this CEvent", "hello-elementor-child" ),
		"use_featured_image" => __( "Use as featured image for this CEvent", "hello-elementor-child" ),
		"archives" => __( "CEvent archives", "hello-elementor-child" ),
		"insert_into_item" => __( "Insert into CEvent", "hello-elementor-child" ),
		"uploaded_to_this_item" => __( "Upload to this CEvent", "hello-elementor-child" ),
		"filter_items_list" => __( "Filter CEvents list", "hello-elementor-child" ),
		"items_list_navigation" => __( "CEvents list navigation", "hello-elementor-child" ),
		"items_list" => __( "CEvents list", "hello-elementor-child" ),
		"attributes" => __( "CEvents attributes", "hello-elementor-child" ),
		"name_admin_bar" => __( "CEvent", "hello-elementor-child" ),
		"item_published" => __( "CEvent published", "hello-elementor-child" ),
		"item_published_privately" => __( "CEvent published privately.", "hello-elementor-child" ),
		"item_reverted_to_draft" => __( "CEvent reverted to draft.", "hello-elementor-child" ),
		"item_scheduled" => __( "CEvent scheduled", "hello-elementor-child" ),
		"item_updated" => __( "CEvent updated.", "hello-elementor-child" ),
		"parent_item_colon" => __( "Parent CEvent:", "hello-elementor-child" ),
	];

	$args = [
		"label" => __( "CEvents", "hello-elementor-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "calendar", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-calendar-alt",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "page-attributes" ],
		"show_in_graphql" => false,
	];

	register_post_type( "calendar", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts_calendar() {

	/**
	 * Post Type: CEvents.
	 */

	$labels = [
		"name" => __( "CEvents", "hello-elementor-child" ),
		"singular_name" => __( "CEvent", "hello-elementor-child" ),
		"menu_name" => __( "My CEvents", "hello-elementor-child" ),
		"all_items" => __( "All CEvents", "hello-elementor-child" ),
		"add_new" => __( "Add new", "hello-elementor-child" ),
		"add_new_item" => __( "Add new CEvent", "hello-elementor-child" ),
		"edit_item" => __( "Edit CEvent", "hello-elementor-child" ),
		"new_item" => __( "New CEvent", "hello-elementor-child" ),
		"view_item" => __( "View CEvent", "hello-elementor-child" ),
		"view_items" => __( "View CEvents", "hello-elementor-child" ),
		"search_items" => __( "Search CEvents", "hello-elementor-child" ),
		"not_found" => __( "No CEvents found", "hello-elementor-child" ),
		"not_found_in_trash" => __( "No CEvents found in trash", "hello-elementor-child" ),
		"parent" => __( "Parent CEvent:", "hello-elementor-child" ),
		"featured_image" => __( "Featured image for this CEvent", "hello-elementor-child" ),
		"set_featured_image" => __( "Set featured image for this CEvent", "hello-elementor-child" ),
		"remove_featured_image" => __( "Remove featured image for this CEvent", "hello-elementor-child" ),
		"use_featured_image" => __( "Use as featured image for this CEvent", "hello-elementor-child" ),
		"archives" => __( "CEvent archives", "hello-elementor-child" ),
		"insert_into_item" => __( "Insert into CEvent", "hello-elementor-child" ),
		"uploaded_to_this_item" => __( "Upload to this CEvent", "hello-elementor-child" ),
		"filter_items_list" => __( "Filter CEvents list", "hello-elementor-child" ),
		"items_list_navigation" => __( "CEvents list navigation", "hello-elementor-child" ),
		"items_list" => __( "CEvents list", "hello-elementor-child" ),
		"attributes" => __( "CEvents attributes", "hello-elementor-child" ),
		"name_admin_bar" => __( "CEvent", "hello-elementor-child" ),
		"item_published" => __( "CEvent published", "hello-elementor-child" ),
		"item_published_privately" => __( "CEvent published privately.", "hello-elementor-child" ),
		"item_reverted_to_draft" => __( "CEvent reverted to draft.", "hello-elementor-child" ),
		"item_scheduled" => __( "CEvent scheduled", "hello-elementor-child" ),
		"item_updated" => __( "CEvent updated.", "hello-elementor-child" ),
		"parent_item_colon" => __( "Parent CEvent:", "hello-elementor-child" ),
	];

	$args = [
		"label" => __( "CEvents", "hello-elementor-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "calendar", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-calendar-alt",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "page-attributes" ],
		"show_in_graphql" => false,
	];

	register_post_type( "calendar", $args );
}

add_action( 'init', 'cptui_register_my_cpts_calendar' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Calendar Categories.
	 */

	$labels = [
		"name" => __( "Calendar Categories", "hello-elementor-child" ),
		"singular_name" => __( "Calendar Category", "hello-elementor-child" ),
		"menu_name" => __( "Calendar Categories", "hello-elementor-child" ),
		"all_items" => __( "All Calendar Categories", "hello-elementor-child" ),
		"edit_item" => __( "Edit Calendar Category", "hello-elementor-child" ),
		"view_item" => __( "View Calendar Category", "hello-elementor-child" ),
		"update_item" => __( "Update Calendar Category name", "hello-elementor-child" ),
		"add_new_item" => __( "Add new Calendar Category", "hello-elementor-child" ),
		"new_item_name" => __( "New Calendar Category name", "hello-elementor-child" ),
		"parent_item" => __( "Parent Calendar Category", "hello-elementor-child" ),
		"parent_item_colon" => __( "Parent Calendar Category:", "hello-elementor-child" ),
		"search_items" => __( "Search Calendar Categories", "hello-elementor-child" ),
		"popular_items" => __( "Popular Calendar Categories", "hello-elementor-child" ),
		"separate_items_with_commas" => __( "Separate Calendar Categories with commas", "hello-elementor-child" ),
		"add_or_remove_items" => __( "Add or remove Calendar Categories", "hello-elementor-child" ),
		"choose_from_most_used" => __( "Choose from the most used Calendar Categories", "hello-elementor-child" ),
		"not_found" => __( "No Calendar Categories found", "hello-elementor-child" ),
		"no_terms" => __( "No Calendar Categories", "hello-elementor-child" ),
		"items_list_navigation" => __( "Calendar Categories list navigation", "hello-elementor-child" ),
		"items_list" => __( "Calendar Categories list", "hello-elementor-child" ),
		"back_to_items" => __( "Back to Calendar Categories", "hello-elementor-child" ),
		"name_field_description" => __( "The name is how it appears on your site.", "hello-elementor-child" ),
		"parent_field_description" => __( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "hello-elementor-child" ),
		"slug_field_description" => __( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "hello-elementor-child" ),
		"desc_field_description" => __( "The description is not prominent by default; however, some themes may show it.", "hello-elementor-child" ),
	];

	
	$args = [
		"label" => __( "Calendar Categories", "hello-elementor-child" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'calendar_categories', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "calendar_categories",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "calendar_categories", [ "calendar" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

function cptui_register_my_taxes_calendar_categories() {

	/**
	 * Taxonomy: Calendar Categories.
	 */

	$labels = [
		"name" => __( "Calendar Categories", "hello-elementor-child" ),
		"singular_name" => __( "Calendar Category", "hello-elementor-child" ),
		"menu_name" => __( "Calendar Categories", "hello-elementor-child" ),
		"all_items" => __( "All Calendar Categories", "hello-elementor-child" ),
		"edit_item" => __( "Edit Calendar Category", "hello-elementor-child" ),
		"view_item" => __( "View Calendar Category", "hello-elementor-child" ),
		"update_item" => __( "Update Calendar Category name", "hello-elementor-child" ),
		"add_new_item" => __( "Add new Calendar Category", "hello-elementor-child" ),
		"new_item_name" => __( "New Calendar Category name", "hello-elementor-child" ),
		"parent_item" => __( "Parent Calendar Category", "hello-elementor-child" ),
		"parent_item_colon" => __( "Parent Calendar Category:", "hello-elementor-child" ),
		"search_items" => __( "Search Calendar Categories", "hello-elementor-child" ),
		"popular_items" => __( "Popular Calendar Categories", "hello-elementor-child" ),
		"separate_items_with_commas" => __( "Separate Calendar Categories with commas", "hello-elementor-child" ),
		"add_or_remove_items" => __( "Add or remove Calendar Categories", "hello-elementor-child" ),
		"choose_from_most_used" => __( "Choose from the most used Calendar Categories", "hello-elementor-child" ),
		"not_found" => __( "No Calendar Categories found", "hello-elementor-child" ),
		"no_terms" => __( "No Calendar Categories", "hello-elementor-child" ),
		"items_list_navigation" => __( "Calendar Categories list navigation", "hello-elementor-child" ),
		"items_list" => __( "Calendar Categories list", "hello-elementor-child" ),
		"back_to_items" => __( "Back to Calendar Categories", "hello-elementor-child" ),
		"name_field_description" => __( "The name is how it appears on your site.", "hello-elementor-child" ),
		"parent_field_description" => __( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "hello-elementor-child" ),
		"slug_field_description" => __( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "hello-elementor-child" ),
		"desc_field_description" => __( "The description is not prominent by default; however, some themes may show it.", "hello-elementor-child" ),
	];

	
	$args = [
		"label" => __( "Calendar Categories", "hello-elementor-child" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'calendar_categories', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "calendar_categories",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "calendar_categories", [ "calendar" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_calendar_categories' );

if( function_exists('acf_add_local_field_group') ) {
    echo 'registering field group';

    acf_add_local_field_group(array(
        'key' => 'group_62eb0c337a2a8',
        'title' => 'Calendar',
        'fields' => array(
            array(
                'key' => 'field_62ebecf23a6a6',
                'label' => 'All Day Event',
                'name' => 'all_day',
                'type' => 'checkbox',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '100',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'all_day' => 'All Day Event',
                ),
                'allow_custom' => 0,
                'default_value' => array(
                ),
                'layout' => 'horizontal',
                'toggle' => 0,
                'return_format' => 'value',
                'save_custom' => 0,
            ),
            array(
                'key' => 'field_62eb0c4eceb46',
                'label' => 'Start Date',
                'name' => 'start_date',
                'type' => 'date_picker',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '70',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'F j, Y',
                'return_format' => 'F j, Y',
                'first_day' => 1,
            ),
            array(
                'key' => 'field_62ebe4bd4b39f',
                'label' => 'Start Time',
                'name' => 'start_time',
                'type' => 'time_picker',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_62ebecf23a6a6',
                            'operator' => '!=',
                            'value' => 'all_day',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '30',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'g:i a',
                'return_format' => 'g:i a',
            ),
            array(
                'key' => 'field_62ebeace4b3a2',
                'label' => 'Single or Multiday?',
                'name' => 'single_or_multiday',
                'type' => 'radio',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '100',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'single_day' => 'Single Day',
                    'multiday' => 'Multiday',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => 'single_day',
                'layout' => 'horizontal',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'field_62ebe9884b3a0',
                'label' => 'End Date',
                'name' => 'end_date',
                'type' => 'date_picker',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_62ebeace4b3a2',
                            'operator' => '==',
                            'value' => 'multiday',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '70',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'F j, Y',
                'return_format' => 'F j, Y',
                'first_day' => 1,
            ),
            array(
                'key' => 'field_62ebea364b3a1',
                'label' => 'End Time',
                'name' => 'end_time',
                'type' => 'time_picker',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_62ebecf23a6a6',
                            'operator' => '!=',
                            'value' => 'all_day',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '30',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'g:i a',
                'return_format' => 'g:i a',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'calendar',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 1,
    ));
}	
else {
    echo 'NOT registering field group';
}

//
// STG EVENTS PLUGIN START
//


// Possible filters to add:
// add_action( 'publish_calendar', 'publish_cal_events', 10, 2 );
// add_filter('acf/update_value/name=unlink', 'unlink_event', 10, 4);
// add_action( 'post_updated', 'update_cal_events', 10, 3 );
// add_action( 'trash_calendar', 'update_cal_events', 10, 2 ); will update all recurring events to trash
// add_action( 'draft_calendar', 'update_cal_events', 10, 2 ); will update all recurring events to draft


// add custom styling and scripts to admin acf pages
function acf_admin_footer() {
    ?>
    <style type="text/css">
    </style>
	<script type="text/javascript">
		
		// disable all admin fields on frontend
		const hidden_fields = document.querySelectorAll('.hidden_event_field input');
		hidden_fields.forEach( (field) => {
			field.setAttribute('disabled', '');
		});
		
		// listen for unlink
		let unlink_btn = document.querySelector('#unlink_btn input[value="unlink"]');
		unlink_btn.addEventListener('click', () => {
			if (confirm('Are you sure you want to Unlink this event?')) {
				unlink_btn.form.submit();
			}
		});
		
	</script>
    <?php
}
add_action('acf/input/admin_footer', 'acf_admin_footer');

// for each post in calendar, add their custom post meta to the custom columns
function calendar_custom_column_values( $column, $post_id ) {
 
    switch ( $column ) {
 
        // add start and end dates
        case 'start_date':
		case 'end_date':
			$date = get_post_meta( $post_id , $column , true );
			if ($date != '') {
				echo date("F j, Y", strtotime(get_post_meta( $post_id , $column , true )));
			}
        	break; 
			
		// TODO: add categorys, times, author, etc.
    }
}
add_action( 'manage_calendar_posts_custom_column' , 'calendar_custom_column_values', 10, 2 );

// set admin post list columns
function calendar_custom_columns_list($columns) {
     
//     unset( $columns['title']  );
//     unset( $columns['author'] );
//     unset( $columns['date']   );
     
    $columns['start_date'] = 'Start Date';
    $columns['end_date'] = 'End Date';
 
    return $columns;
}
add_filter( 'manage_calendar_posts_columns', 'calendar_custom_columns_list' );

// order query for elementor posts (so that we can order by our custom date field)
function order_cal_events_desc( $query ) {

	// order by the closest 'start_date'
	$query->set( 'post_type', [ 'calendar' ] );
	$query->set( 'meta_key', 'start_date');
	$query->set( 'orderby', 'meta_value');
	$query->set( 'order', 'ASC');
	
}
add_action( 'elementor/query/cal_date_desc', 'order_cal_events_desc' );

// unlink event handler to take event out of recurring chain
function unlink_event( $post_id ) {
	$recur_id = get_field('recur_id', $post_id);
	if ($recur_id) {
		update_field('recurring', '', $post_id);
		update_field('recur_id', -1, $post_id);
		update_field('recur_order', -1, $post_id);
		update_field('unlink', '', $post_id);
		//echo '<script>alert("The event has been unlinked");</script>';
	} 
    return $value;
}


// maybe use in future
function get_all_meta($type){
	global $wpdb;
	$result = $wpdb->get_results($wpdb->prepare(
		"SELECT post_id,meta_key,meta_value FROM wp_posts,wp_postmeta WHERE post_type = 'calendar'
                    AND wp_posts.ID = wp_postmeta.post_id", $type
	), ARRAY_A);
	return $result;
}

// src: https://gist.github.com/eduwass/90c36565c41ac01cafe3
// duplicate a post and all its meta data - return the id
function duplicate_post($post_id) {
    $post = get_post($post_id);
    $dup_post    = array(
      'post_title' => $post->post_title,
	  'post_content' => $post->post_content,
      'post_status' => $post->post_status,
      'post_type' => $post->post_type,
      'post_author' => $post->post_author
    );
    $new_post_id = wp_insert_post($dup_post);
	
    // Copy post custom metadata
    $data = get_post_custom($post_id);
    foreach ( $data as $key => $values) {
      foreach ($values as $value) {
        update_post_meta( $new_post_id, $key, $value );
      }
    }

    return $new_post_id;
}

function get_next_date($repeat_type, $curr_date, $month_pattern=0) {
	if ($repeat_type == "daily") {
		//echo 'returned: ' . date("Y-m-d", strtotime($curr_date . "+1 day"));
		$next_date = date("Y-m-d", strtotime($curr_date . "+1 day"));
		return $next_date;
	}
	elseif ($repeat_type == "weekly") {
		$next_date = date("Y-m-d", strtotime($curr_date . "+1 week"));
		return $next_date;
	}
	else { // monthly
		if ($month_pattern == "day_of_week") {
			
		}
		else { // by day of month
			$days_in_month = date('t', strtotime($curr_date));
			if (date("d", strtotime($curr_date)) == 31) { // on the last day of month - repeat by last day
				$days--;
			}
			$next_date = date("Y-m-d", strtotime($curr_date . "+{$days_in_month} days"));
			return $next_date;
		}
	}
}

function generate_recurring_chain( $post_id, $post ) {
	$head_post_meta = get_fields( $post_id ); // get all fields
	
	// retreive custom post recurring meta data
	$number_of_events = $head_post_meta['number_of_repeats'] - 1; // make sure to count head post
	$repeat_type = $head_post_meta['repeat_type'];
	$month_pattern = $head_post_meta['repetition_pattern_monthly'];
	$start_date_str = $head_post_meta['start_date'];
	
	echo "num events: " . $number_of_events . "<br>";
	echo "repeat type: " . $repeat_type . "<br>";
	echo "month pattern: " . $month_pattern . "<br>";
	echo "start date: " . $start_date_str . "<br>";
	
	$curr_date = date("Y-m-d", strtotime($start_date_str));
	$recur_order_num = 1;
	for ($i = 0; $i < $number_of_events; $i++) {
		$next_date = get_next_date($repeat_type, $curr_date, $month_pattern);
		
		$new_post_id = duplicate_post($post_id);
		update_field('start_date', $next_date, $new_post_id);
		update_field('recur_order', $recur_order_num, $new_post_id);
		
		$curr_date = date("Y-m-d", strtotime($next_date));
		$recur_order_num++;
		//
		// TODO: update end date, end time, start time
		//
	}
	return;
}


$post_before; // global obj - might not need it

// hook in after event updated - also happens when post is first created
function my_acf_save_post( $post_id ) {
	global $post_before;
	
	// check unlink
	if (get_field('unlink', $post_id) == 'unlink') {
		unlink_event($post_id);
	}
	
    // Get newly saved values
    $post_after = get_fields( $post_id );
	if ($post_after['recurring'] == 1) {
		if (!isset($post_after['recur_id']) or $post_after['recur_id'] == -1) {
			echo 'recurring is set for the first time';
			
			//update_field($selector, $value, [$post_id]);
			update_field('recur_id', $post_id, $post_id);
			update_field('recur_order', 0, $post_id);

			// create events here
			generate_recurring_chain($post_id, $post_after);
			//exit;

	
		} else {
			echo 'recurring is already set... update other linked events';
			
			// check if anything related to recurring is changed... if so, delete all linked events and recreate them - should warn user about this
			exit;
		}
	}
}
add_action('acf/save_post', 'my_acf_save_post');

// hook in before event updated
function my_acf_save_post_before( $post_id ) {
	global $post_before;
	
    // Get previous values.
    $post_before = get_fields( $post_id );
}
add_action('acf/save_post', 'my_acf_save_post_before', 5);



