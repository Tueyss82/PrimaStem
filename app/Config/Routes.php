<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//service('auth')->routes($routes);

// Site PrimaStem

$routes->get('/', 'PrimaStem::index', ['as' => 'primastem']);

// Pages 

$routes->get('contact', 'Contact::index', ['as' => 'ajoutContact']);
$routes->post('contact', 'Contact::create', ['as' => 'createContact']);

// Partenaires

$routes->get('partenaires', 'Partenaire::index', ['as' => 'partenaires']);

$routes->get('ajout_partenaire', 'Partenaire::ajout', ['as' => 'ajoutPartenaire']);
$routes->post('ajout_partenaire', 'Partenaire::create', ['as' => 'createPartenaire']);

$routes->get('modifier_partenaire(:num)', 'Partenaire::modif/$1', ['as' => 'modifPartenaire']);
$routes->post('modifier_partenaire', 'Partenaire::update', ['as' => 'updatePartenaire']);

$routes->post('suppr_partenaire', 'Partenaire::delete', ['as' => 'supprPartenaire']);

// Blog

$routes->get('blog', 'Blog::index', ['as' => 'blog']);

$routes->get('ajout_article', 'Blog::ajout', ['as' => 'ajoutArticle']);
$routes->post('ajout_article', 'Blog::create', ['as' => 'createArticle']);

$routes->get('modifier_article(:num)', 'Blog::modif/$1', ['as' => 'modifArticle']);
$routes->post('modifier_article', 'Blog::update', ['as' => 'updateArticle']);

$routes->get('suppr_article', 'Blog::delete', ['as' => 'supprArticle']);

//------------------Site exercice

$routes->get('playstem', 'PlayStem::index', ['as' => 'playstem']);

//----Renvoi des pages exercices et leçons 

$routes->get('exercices', 'Exercices::exercices', ['as' => 'exercices']);

$routes->get('exercice-(:num)', 'Exercices::exercice/$1', ['as' => 'exercice']);

$routes->get('lecons', 'Leçons::leçons', ['as' => 'leçons']);

$routes->get('lecon-(num)', 'Leçons::leçon/$1', ['as' => 'leçons']);
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
