<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// Site PrimaStem

$routes->get('/', 'PrimaStem::index', ['as' => 'primastem']);
service('auth')->routes($routes);

$routes->group('admin', ['filter' => 'session'], static function ($routes) {
    $routes->get('/', 'PrimaStem::adminIndex', ['as' => 'backofficeIndex']); // Backoffice Admin (need login before)
    
}) ;


// Pages 

$routes->get('contact', 'Contact::index', ['as' => 'ajoutContact']);
$routes->post('contact', 'Contact::create', ['as' => 'createContact']);

// Partenaires

$routes->get('partenaires', 'Partenaire::index', ['as' => 'partenaires']);

$routes->get('ajoutPartenaire', 'Partenaire::ajout', ['as' => 'ajoutPartenaire']);
$routes->post('ajoutPartenaire', 'Partenaire::create', ['as' => 'createPartenaire']);

$routes->get('modifierPartenaire', 'Partenaire::modifIndex', ['as' => 'modifPartenaireIndex']);
$routes->get('modifierPartenaire(:num)', 'Partenaire::modif/$1', ['as' => 'modifPartenaire']);
$routes->post('modifierPartenaire', 'Partenaire::update', ['as' => 'updatePartenaire']);

$routes->get('supprPartenaire', 'Partenaire::deleteIndex', ['as' => 'supprPartenaireIndex']);
$routes->post('supprPartenaire', 'Partenaire::delete', ['as' => 'supprPartenaire']);

$routes->get('files/upload/(:any)', 'FileController::serveImage/$1'); //Get Images

// Blog

$routes->get('blog', 'Blog::index', ['as' => 'blog']);

$routes->get('article(:num)', 'Blog::showArticle/$1', ['as' => 'article']);

$routes->get('ajoutArticle', 'Blog::ajout', ['as' => 'ajoutArticle']);
$routes->post('ajoutArticle', 'Blog::create', ['as' => 'createArticle']);

$routes->get('modifierArticle', 'Blog::modifIndex', ['as' => 'modifArticleIndex']);
$routes->get('modifierArticle(:num)', 'Blog::modif/$1', ['as' => 'modifArticle']);
$routes->post('modifierArticle', 'Blog::update', ['as' => 'updateArticle']);

$routes->get('supprArticle', 'Blog::deleteIndex', ['as' => 'supprArticleIndex']);
$routes->post('supprArticle', 'Blog::delete', ['as' => 'supprArticle']);

//------------------Site exercice

$routes->get('playstem', 'PlayStem::index', ['as' => 'playstem']);

//----Renvoi des pages exercices et leçons 

$routes->get('exercices', 'Exercices::exercices', ['as' => 'exercices']);
///$1
//(:num)
$routes->get('exercice-', 'Exercices::exercice', ['as' => 'exercice']);

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
