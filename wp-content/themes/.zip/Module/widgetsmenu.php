<?php
    class WidgetsMenu{
        public function __construct() {
            add_action( 'nav_menu_css_class', array( $this,'add_additional_class_on_li' ), 1, 3 );
            add_action( 'nav_menu_link_attributes', array( $this,'add_additional_class_on_a' ), 1, 3 );
        }
        public function add_additional_class_on_li($classes, $item, $args)
        {
			if(isset($args->add_li_class)) {
				$classes['class'] = $args->add_li_class;
			}
			return $classes;
        }
        public function add_additional_class_on_a($classes, $item, $args)
        {
			if(isset($args->add_li_class)) {
				$classes['class'] = $args->add_li_class;
			}
			return $classes;
        }

    }
    new WidgetsMenu();
?>