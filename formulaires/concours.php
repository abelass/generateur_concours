<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

function formulaires_concours_charger_dist($id_concours,$id_participant='') {
include_spip('base/abstract_sql');
    $valeurs = array(
	"id_concours"		=> $id_concours,
	"id_participant"	=> $id_participant,			 		
    );
    
	$questions = sql_select('*','spip_gc_concours_questions',"id_concours=$id_concours");
	$valeurs['questions']=array();	
	while ($data = sql_fetch($questions)) {	
		$valeurs['questions'][$data['type'].'_'.$data['id_question']] = array( 															'texte'=>$data["texte"],
										'type'=>$data['type'],
										'id_question'=>$data['id_question'],
										'name'=>$data['type'].'_'.$data['id_question'],	
										'valeur'=>_request($data['type'].'_'.$data['id_question'])
										);						
							}
$valeurs['_hidden'] .= "<input type='hidden' name='id_participant' value='$id_participant' />";    

return $valeurs;
}


/* @annotation: Actualisation de la base de donnée */
function formulaires_concours_traiter_dist($id_concours,$id_participant=""){
include_spip('base/abstract_sql');

$questions = sql_select('*','spip_gc_concours_questions',"id_concours=$id_concours");
	
	while ($data = sql_fetch($questions)) {
 		$texte =_request($data['type'].'_'.$data['id_question']);
		sql_insertq("spip_gc_concours_reponses", array('id_participant' => $id_participant, 'id_question'=>$data['id_question'], 'texte'=>$texte));		
		}

return $message='ok';


}
?>