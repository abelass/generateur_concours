<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

function gc_tables_interfaces($tables_interfaces){
	
	$tables_interfaces['table_des_tables']['gc_concours'] = 'gc_concours';
	$tables_interfaces['table_des_tables']['gc_concours_questions'] = 'gc_concours_questions';
	$tables_interfaces['table_des_tables']['gc_concours_reponses'] = 'gc_concours_reponses';

	return $tables_interfaces;
}

?>
