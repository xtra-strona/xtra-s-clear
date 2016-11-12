<?php
//Custom Icon jQuery fontIconPicker
add_action( 'customize_register', function( $wp_customize ) {
	/**
	 * The custom control class
	 */
	class Kirki_Controls_Notice_Control extends WP_Customize_Control {
		public $type = 'custom_iconpicker';
		public function render_content() { ?>

 <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

<input <?php $this->link(); ?>  value="<?php echo esc_attr( $this->value() ); ?>" type="text" class='coski' />

<script type="text/javascript">
jQuery(document).ready(function($) {

var fontawesome =  {
	'Web Aplications' : ["fa fa-camera-retro", "fa fa-asterisk"],
	'Custom Aplications' : ["fa fa-beer", "fa fa-battery-empty"],
};
	/**
	 * Example 5
	 * Load with custom search and attribute selector
	 */

	$('.coski').fontIconPicker({
			source: fontawesome,
			theme: 'fip-grey'
	});


});

</script>
			<?php
		}
	}
	// Register our custom control with Kirki  custom_icon
	add_filter( 'kirki/control_types', function( $controls ) {
		$controls['custom_iconpicker'] = 'Kirki_Controls_Notice_Control';
		return $controls;
	} );

} );

// Function Get Categories
function get_categories_select() {
  $teh_cats = get_categories();
  $results;

  $count = count($teh_cats);
  for ($i=0; $i < $count; $i++) {
    if (isset($teh_cats[$i]))
      $results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
    else
      $count++;
  }
  return $results;
}
