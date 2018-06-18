<?php namespace NSRosenqvist\CMB2\NumberField;

class Integration
{
	static $init = false;

	static function init()
	{
		if (self::$init) {
			return;
		}

		$init = true;

		// Render function
		add_action('cmb2_render_text_number', function ($field, $escaped_value, $object_id, $object_type, $field_type_object) {
			echo $field_type_object->input(['class' => 'cmb2-text-small', 'type' => 'number']);
		}, 10, 5);


		// Sanitize function
		add_filter( 'cmb2_sanitize_text_number', function($null, $new) {
			$new = preg_replace( "/[^0-9]/", "", $new);
			return intval($new);
		}, 10, 2 );
    }
}
