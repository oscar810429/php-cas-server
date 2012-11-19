<?php

$CONFIG['APIS'] = array(
  array( 
    'url' => '/user',
    'method' => 'get',
    'headers' => null,
    'body_params' => null, //post or put 
    'path_param' => null,   //example user/(id) 
    'url_params' => array("login", "password"), // user?login=&password=
    'name' => "verify_user_password" 
    ),

  array(
    'url' => '/user/sso_attributes/', 
    'method' => 'get',
    'headers' => null, 
    'body_params' => null,
    'path_param' => "login",
    'url_params' => null, // user?login=&password=
    'name' => "sso_attributes"
    ),

  array( 
    'url' => '/user',
    'method' => 'post',
    'headers' => array("Content-Type"  => "application/x-www-form-urlencoded"),
    'body_params' => array("login","password"), //post or put 
    'path_param' => null,   //example user/(id)  only one parameter 
    'url_params' => null, // user?login=&password=
    'name' => "verify_user_password_post"
    ),

  array( 
    'url' => '/user/query/users',
    'method' => 'get',
    'headers' => null,
    'body_params' => null, //post or put 
    'path_param' => null,   //example user/(id)  only one parameter 
    'url_params' => array("columns", "where[email.adresse]"), // user?login=&password=
    'name' => "Search_User_By_Email",
    ),

  array(
    'url' => '/user/sso_attributes_men/',
    'method' => 'get',
    'headers' => null,
    'body_params' => null,
    'path_param' => "login",
    'url_params'=>null,
    'name' => "sso_attributes_men"
  ),

  array( 
    'url' => '/user/query/users',
    'method' => 'get',
    'headers' => null,
    'body_params' => null, //post or put 
    'path_param' => null,   //example user/(id)  only one parameter 
    'url_params' => array("columns", "where[email.adresse]", "where[email.academique]"), //columns = "nom, prenom, login"
    'name' => "Search_Agent_By_Instmail",
    ),
  array( 
    'url' => '/user/parent/eleve',
    'method' => 'get',
    'headers' => null,
    'body_params' => null, //post or put 
    'path_param' => null,   //example user/(id)  only one parameter 
    'url_params' => array("nom", "prenom","sconet_id"), // nom and prenom are optionals, sconet_id is mandatory 
    'name' => "Search_Parent_By_Name_EleveSconetId",
    ), 
  array(
    'url' => '/user/query/users',
    'method' => 'get',
    'headers' => null,
    'body_params' => null, //post or put 
    'path_param' => null,   //example user/(id)  only one parameter 
    'url_params' => array("columns", "nom", "prenom", "where[id_sconet]"), //columns = "nom, prenom, login, date_naissance, code_postal" id_sconet
    'name' => "Search_Eleve_By_Name_SconetId",
    ), 
  array( 
    'url' => '/user/info',
    'method' => 'get',
    'headers' => null,
    'body_params' => null, //post or put 
    'path_param' => "login",   //example user/(id)  only one parameter 
    'url_params' => null, // user?login=&password=
    'name' => "info",
    ),

); 

?>