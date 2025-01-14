<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//service('auth')->routes($routes);

$routes->get('/', 'Home::index', ['as' => 'index']);










//------------------Site exercice


//----Renvoi des pages exercices et leçons 

$routes->get('exercices', 'PlayStem::exercices', ['as' => 'exercices']);

$routes->get('exercice-(:num)', 'PlayStem::exercice/$1', ['as' => 'exercice']);

$routes->get('leçons', 'PlayStem::leçons', ['as' => 'leçons']);
$routes->get('leçon-(num)', 'PlayStem::leçon/$1', ['as' => 'leçons']);
//-----------------------------------------------



//--------------------------Type Jeton
$routes->get('ajout_jeton', 'PlayStem::ajoutJeton', ['as' => 'ajoutJeton']);
$routes->post('ajout_jeton', 'PlayStem::createJeton', ['as' => 'createJeton']);

$routes->get('modifier_jeton(:num)', 'PlayStem::modifJeton/$1', ['as' => 'modifJeton']);
$routes->post('modifier_jeton', 'PlayStem::updateJeton', ['as' => 'updateJeton']);

$routes->post('supprimer_jeton', 'PlayStem::deleteJeton', ['as' => 'supprJeton']);
//-----------------------------------------------

//--------------------------Type Mouvement
$routes->get('ajout_mouvement', 'PlayStem::ajoutMouvement', ['as' => 'ajoutMouvement']);
$routes->post('ajout_mouvement', 'PlayStem::createMouvement', ['as' => 'createMouvement']);

$routes->get('modifier_mouvement(:num)', 'PlayStem::modifMouvement/$1', ['as' => 'modifMouvement']);
$routes->post('modifier_mouvement', 'PlayStem::updateMouvement', ['as' => 'updateMouvement']);

$routes->post('suppr_mouvement', 'PlayStem::deleteMouvement', ['as' => 'supprMouvement']);

//--------------------------Leçon

$routes->get('ajout_leçon', 'PlayStem::ajoutLeçon', ['as' => 'ajoutLeçon']);
$routes->post('ajout_leçon', 'PlayStem::createLeçon', ['as' => 'createLeçon']);

$routes->get('modifier_leçon(:num)', 'PlayStem::modifLeçon/$1', ['as' => 'modifLeçon']);
$routes->post('modifier_leçon', 'PlayStem::updateLeçon', ['as' => 'updateLeçon']);

$routes->post('supprimer_leçon', 'PlayStem::deleteLeçon', ['as' => 'supprLeçon']);
//-----------------------------------------------

//-------------------------- Exercices

$routes->get('ajout_exercices', 'PlayStem::ajoutExercices', ['as' => 'ajoutExercices']);
$routes->post('ajout_exercices', 'PlayStem::createExercices', ['as' => 'createExercices']);

$routes->get('modifier_exercices(:num)', 'PlayStem::modifExercices/$1', ['as' => 'modifExercices']);
$routes->post('modifier_exercices', 'PlayStem::updateExercices', ['as' => 'updateExercices']);

$routes->post('supprimer_exercices', 'PlayStem::deleteExercices', ['as' => 'supprExercices']);
//-----------------------------------------------

//-------------------------- Solutions exercices

$routes->get('ajout_solutions_exercices', 'PlayStem::ajoutSolutionsExercices', ['as' => 'ajoutSolutionExercices']);
$routes->post('ajout_solutions_exercices', 'PlayStem::createSolutionsExercices', ['as' => 'createSolutionExercices']);

$routes->get('modifier_solutions_exercices(:num)', 'PlayStem::modifSolutionsExercices/$1', ['as' => 'modifSolutionExercices']);
$routes->post('modifier_solutions_exercices', 'PlayStem::updateSolutionsExercices', ['as' => 'updateSolutionExercices']);

$routes->post('supprimer_solutions_exercices', 'PlayStem::deleteSolutionsExercices', ['as' => 'supprSolutionExercices']);
//-----------------------------------------------


 $routes->get('/', 'Home::index', ['as' => 'index']);
 
 $routes->get('/playstem', 'PlayStem::index', ['as' => 'playstem']);