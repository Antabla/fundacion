<?php /** 
* Generated by
* 
*      _____ _          __  __      _     _
*     / ____| |        / _|/ _|    | |   | |
*    | (___ | | ____ _| |_| |_ ___ | | __| | ___ _ __
*     \___ \| |/ / _` |  _|  _/ _ \| |/ _` |/ _ \ '__|
*     ____) |   < (_| | | | || (_) | | (_| |  __/ |
*    |_____/|_|\_\__,_|_| |_| \___/|_|\__,_|\___|_|
*
* The code generator that works in many programming languages
*
*			https://www.skaffolder.com
*
*
* You can generate the code from the command-line
*       https://npmjs.com/package/skaffolder-cli
*
*       npm install -g skaffodler-cli
*
*   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *
*
* To remove this comment please upgrade your plan here: 
*      https://app.skaffolder.com/#!/upgrade
*
* Or get up to 70% discount sharing your unique link:
*       https://app.skaffolder.com/#!/register?friend=5d4f828d2e8ab75d05c7281e
*
* You will get 10% discount for each one of your friends
* 
*/
?>
<?php
	require_once './db/dbfundacion_dbManager.php';
	
/*
 * SCHEMA DB Quienes
 * 
	{
		mision: {
			type: 'String'
		},
		somos: {
			type: 'String'
		},
		vision: {
			type: 'String'
		},
		//RELAZIONI
		
		
		//RELAZIONI ESTERNE
		
		
	}
 * 
 */


//CRUD METHODS


//CRUD - CREATE


$app->post('/quienes',	function () use ($app){

	$body = json_decode($app->request()->getBody());
	
	$params = array (
		'mision'	=> isset($body->mision)?$body->mision:'',
		'somos'	=> isset($body->somos)?$body->somos:'',
		'vision'	=> isset($body->vision)?$body->vision:'',
			);

	$obj = makeQuery("INSERT INTO quienes (_id, mision, somos, vision )  VALUES ( null, :mision, :somos, :vision   )", $params, false);

	
	echo json_encode($body);
	
});
	
//CRUD - REMOVE

$app->delete('/quienes/:id',	function ($id) use ($app){
	
	$params = array (
		'id'	=> $id,
	);

	makeQuery("DELETE FROM quienes WHERE _id = :id LIMIT 1", $params);

});
	
//CRUD - GET ONE
	
$app->get('/quienes/:id',	function ($id) use ($app){
	$params = array (
		'id'	=> $id,
	);
	
	$obj = makeQuery("SELECT * FROM quienes WHERE _id = :id LIMIT 1", $params, false);
	
	
	
	echo json_encode($obj);
	
});
	
	
//CRUD - GET LIST

$app->get('/quienes',	function () use ($app){
	makeQuery("SELECT * FROM quienes");
});


//CRUD - EDIT

$app->post('/quienes/:id',	function ($id) use ($app){

	$body = json_decode($app->request()->getBody());
	
	$params = array (
		'id'	=> $id,
		'mision'	    => isset($body->mision)?$body->mision:'',
		'somos'	    => isset($body->somos)?$body->somos:'',
		'vision'	    => isset($body->vision)?$body->vision:''	);

	$obj = makeQuery("UPDATE quienes SET  mision = :mision,  somos = :somos,  vision = :vision   WHERE _id = :id LIMIT 1", $params, false);

	
	echo json_encode($body);
    	
});


/*
 * CUSTOM SERVICES
 *
 *	These services will be overwritten and implemented in  Custom.js
 */

			
?>