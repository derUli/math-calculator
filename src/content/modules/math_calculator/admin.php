<?php
define ( "MODULE_ADMIN_HEADLINE", get_translation ( "calculator" ) );
define ( "MODULE_ADMIN_REQUIRED_PERMISSION", "math_calculator" );
function math_calculator_admin() {
	echo Template::executeModuleTemplate ( "math_calculator", "calc" );
}
