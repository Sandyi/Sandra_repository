 <?php 

 //*hoja de estilos*//
function test_styles() {
	 wp_enqueue_style('uni-style',  get_stylesheet_directory_uri() . '/css/custom.css');
}

add_action('wp_enqueue_scripts', 'test_styles');

 //* menu *//
 function register_my_menus() {
  register_nav_menus(
    array(
      'CG_menu' => __( 'CG_menu' ),
      'name'          => '',
  'id'            => '',
  'before_widget' => '<div>',
  'after_widget'  => '</div>',
  'before_title'  => '<ul class="">',
  'after_title'   => '</ul>',
     )
  );
}
add_action( 'init', 'register_my_menus' );


//* logo *//

function themeslug_theme_customizer( $wp_customize ) {
  $wp_customize->add_section( 'themeslug_logo_section' , array(
   'title'       => __( 'Logo', 'themeslug' ),
   'priority'    => 30,
   'description' => 'Subir logotipo',
  ) );
 
  $wp_customize->add_setting( 'themeslug_logo' );
 
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
   'label'    => __( 'Logo', 'themeslug' ),
   'section'  => 'themeslug_logo_section',
   'settings' => 'themeslug_logo',
  ) ) );
  
 }
 add_action('customize_register', 'themeslug_theme_customizer');

 //*widget*//
function init_widget () {
 register_sidebar( array(
  'name'          => 'search widgets',
  'id'            => 'search_widgets',
  'before_widget' => '<div>',
  'after_widget'  => '</div>',
  'before_title'  => '<h3 class="Search">',
  'after_title'   => '</h3>',
 ) );
 }

add_action( 'widgets_init', 'init_widget' );


 //*widget RECENT POST*//
function recentPost_widgets () {
 register_sidebar( array(
  'name'          => 'recentPost widgets',
  'id'            => 'recentPost_widgets',
  'before_widget' => '<div>',
  'after_widget'  => '</div>',
  'before_title'  => '<h3 class="">',
  'after_title'   => '</h3>',
 ) );
 }

add_action( 'widgets_init', 'recentPost_widgets' );