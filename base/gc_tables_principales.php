<?php
if (!defined("_ECRIRE_INC_VERSION")) return;
//
// Formulaires : Structure
//

function gc_declarer_tables_principales($tables_principales){
	$spip_gc_concours = array(
		"id_concours" 	=> "int(11) NOT NULL",
		"id_auteur" 	=> "int(11) NOT NULL",
		"titre" 	=> "varchar(255) NOT NULL",		
		"maj" 		=> "TIMESTAMP");
	
	$spip_gc_concours_key = array(
		"PRIMARY KEY" 	=> "id_concours",
		"KEY id_auteur"	=> "id_auteur",
		);
		
	$spip_gc_concours_join = array(
		"id_concours"	=> "id_concours",
		"id_auteur"	=> "id_auteur",
		);
			
	
	$tables_principales['spip_gc_concours'] = array(
		'field' => &$spip_gc_concours,
		'key' => &$spip_gc_concours_key,
		'join' => &$spip_gc_concours_join
		);
		
		
	$spip_gc_concours_questions = array(
		"id_question" 	=> "int(11) NOT NULL",	
		"id_concours" 	=> "int(11) NOT NULL",
		"texte" 	=> "text NOT NULL",
		"type" 		=> "varchar(20) NOT NULL",
		"obligatoire" 	=> "bool NOT NULL",		
						);
	
	$spip_gc_concours_questions_key = array(
		"PRIMARY KEY" 	=> "id_question",
		"KEY id_concours"	=> "id_concours",
		);
		
	$spip_gc_concours_questions_join = array(
		"id_question"	=> "id_question",
		"id_concours"	=> "id_concours",
		);	
	
	$tables_principales['spip_gc_concours_questions'] = array(
		'field' => &$spip_gc_concours_questions,
		'key' => &$spip_gc_concours_questions_key,
		'join' => &$spip_gc_concours_questions_join
		);	
			
	$spip_gc_concours_reponses = array(
		"id_reponse" 	=> "int(11) NOT NULL",		
		"id_question" 	=> "int(11) NOT NULL",	
		"id_participant" => "int(11) NOT NULL",
		"texte" 	=> "text NOT NULL",		
						);
	
	$spip_gc_concours_reponses_key = array(
		"PRIMARY KEY" 	=> "id_reponse",
		"KEY id_question"	=> "id_question",		
		"KEY id_participant"	=> "id_participant",
		);
		
	$spip_gc_concours_questions_join = array(
		"id_question"	=> "id_question",
		"id_participant"	=> "id_participant",
		);	
	
	$tables_principales['spip_gc_concours_reponses'] = array(
		'field' => &$spip_gc_concours_reponses,
		'key' => &$spip_gc_concours_reponses_key,
		'join' => &$spip_gc_concours_reponses_join
		);			
		
		
		
	return $tables_principales;
	
	}
?>
