<?php
function create_project_type() {
  $labels = array(
    'name'                       => _x( 'Project types', 'Taxonomy General Name', 'portfolio-theme' ),
    'singular_name'              => _x( 'Project type', 'Taxonomy Singular Name', 'portfolio-theme' ),
    'menu_name'                  => __( 'Project types', 'portfolio-theme' ),
    'all_items'                  => __( 'All types', 'portfolio-theme' ),
    'new_item_name'              => __( 'New Type Name', 'portfolio-theme' ),
    'add_new_item'               => __( 'Add New Project Type', 'portfolio-theme' ),
    'edit_item'                  => __( 'Edit Project Type', 'portfolio-theme' ),
    'update_item'                => __( 'Update Project Type', 'portfolio-theme' ),
    'add_or_remove_items'        => __( 'Add or remove Project Types', 'portfolio-theme' ),
    'popular_items'              => __( 'Popular Types', 'portfolio-theme' ),
	);
	$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'project-type',
  );

  #the thing that adds it to Wordpress
  register_taxonomy( 'project-type', array('project'), $args );
}


add_action( 'init', 'create_project_type' );


 function create_project_skill() {
   $labels = array(
     'name'                       => _x( 'Project skills', 'Taxonomy General Name', 'portfolio-theme' ),
     'singular_name'              => _x( 'Project skills', 'Taxonomy Singular Name', 'portfolio-theme' ),
     'menu_name'                  => __( 'Project skills', 'portfolio-theme' ),
     'all_items'                  => __( 'All skills', 'portfolio-theme' ),
     'new_item_name'              => __( 'New skill Name', 'portfolio-theme' ),
     'add_new_item'               => __( 'Add New skill Type', 'portfolio-theme' ),
     'edit_item'                  => __( 'Edit Project skill', 'portfolio-theme' ),
     'update_item'                => __( 'Update Project skill', 'portfolio-theme' ),
     'add_or_remove_items'        => __( 'Add or remove Project skill', 'portfolio-theme' ),
     'popular_items'              => __( 'Popular skills', 'portfolio-theme' ),
   );
   $args = array(
     'labels'                     => $labels,
     'hierarchical'               => false,
     'public'                     => true,
     'show_ui'                    => true,
     'show_admin_column'          => true,
     'show_in_nav_menus'          => true,
     'show_tagcloud'              => true,
     'query_var'                  => 'project-skill',
   );

   #the thing that adds it to WordPress (built in function):
   register_taxonomy( 'project-skill', array('project'), $args );
 }


 add_action( 'init', 'create_project_skill' );

  ?>
