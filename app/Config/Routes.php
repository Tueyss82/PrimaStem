<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//service('auth')->routes($routes);

// Site PrimaStem

$routes->get('/', 'PrimaStem::index', ['as' => 'primastem']);

// Pages 

$routes->get('contact', 'PrimaStem::contact', ['as' => 'contact']);

$routes->get('partenaires', 'PrimaStem::partenaires', ['as' => 'partenaires']);

$routes->get('blog', 'PrimaStem::blog', ['as' => 'blog']);

//------------------Site exercice

$routes->get('playstem', 'PlayStem::index', ['as' => 'playstem']);

//----Renvoi des pages exercices et leçons 

$routes->get('exercices', 'Home::exercices', ['as' => 'exercices']);

$routes->get('leçons', 'Home::leçons', ['as' => 'leçons']);
//-----------------------------------------------



//--------------------------Type Jeton
$routes->get('ajout_jeton', 'TypeJeton::ajout', ['as' => 'ajoutJeton']);
$routes->post('ajout_jeton', 'TypeJeton::create', ['as' => 'createJeton']);

$routes->get('modifier_jeton(:num)', 'TypeJeton::modif/$1', ['as' => 'modifJeton']);
$routes->post('modifier_jeton', 'TypeJeton::update', ['as' => 'updateJeton']);

$routes->post('supprimer_jeton', 'TypeJeton::delete', ['as' => 'supprJeton']);
//-----------------------------------------------

//--------------------------Type mouvement
$routes->get('ajout_mouvement', 'TypeMouvement::ajout', ['as' => 'ajoutMouvement']);
$routes->post('ajout_mouvement', 'TypeMouvement::create', ['as' => 'createMouvement']);

$routes->get('modifier_mouvement(:num)', 'TypeMouvement::modif/$1', ['as' => 'modifMouvement']);
$routes->post('modifier_mouvement', 'TypeMouvement::update', ['as' => 'updateMouvement']);

$routes->post('suppr_mouvement', 'TypeMouvement::delete', ['as' => 'supprMouvement']);

//--------------------------Leçon

$routes->get('ajout_leçon', 'Leçon::ajout', ['as' => 'ajoutLeçon']);
$routes->post('ajout_leçon', 'Leçon::create', ['as' => 'createLeçon']);

$routes->get('modifier_leçon(:num)', 'Leçon::modif/$1', ['as' => 'modifLeçon']);
$routes->post('modifier_leçon', 'Leçon::update', ['as' => 'updateLeçon']);

$routes->post('supprimer_leçon', 'Leçon::delete', ['as' => 'supprLeçon']);
//-----------------------------------------------

//-------------------------- Exercices

$routes->get('ajout_exercices', 'Exercices::ajout', ['as' => 'ajoutExercices']);
$routes->post('ajout_exercices', 'Exercices::create', ['as' => 'createExercices']);

$routes->get('modifier_exercices(:num)', 'Exercices::modif/$1', ['as' => 'modifExercices']);
$routes->post('modifier_exercices', 'Exercices::update', ['as' => 'updateExercices']);

$routes->post('supprimer_exercices', 'Exercices::delete', ['as' => 'supprExercices']);
//-----------------------------------------------

//-------------------------- Solutions exercices

$routes->get('ajout_solutions_exercices', 'Solutions-Exercices::ajout', ['as' => 'ajoutSolutionExercices']);
$routes->post('ajout_solutions_exercices', 'Solutions-Exercices::create', ['as' => 'createSolutionExercices']);

$routes->get('modifier_solutions_exercices(:num)', 'Solutions-Exercices::modif/$1', ['as' => 'modifSolutionExercices']);
$routes->post('modifier_solutions_exercices', 'Solutions-Exercices::update', ['as' => 'updateSolutionExercices']);

$routes->post('supprimer_solutions_exercices', 'Solutions-Exercices::delete', ['as' => 'supprSolutionExercices']);
//-----------------------------------------------
