<?php

Route::get('/','Site\SiteController@index')->name('raiz');
 // Authentication Routes...
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home'); 

Route::group(['middleware' => ['admin']], function () {
Route::get('/admin/temas/{id}/votos', 'Admin\VoteController@votos')->name('votos');
Route::get('/admin/temas/{id}/usuarios', 'Admin\VoterController@teste')->name('usuarios');
Route::post('/admin/temas/{id}/usuarios/create', 'Admin\VoterController@store')->name('usuariosCreate');
Route::post('/admin/temas/busca', 'Admin\TopicController@search')->name('search');
Route::get('/admin/temas/busca', 'Admin\TopicController@searchForm')->name('searchForm');
Route::resource('/admin/temas', 'Admin\TopicController');
Route::get('/admin/temas/{id}/open', 'Admin\TopicController@open')->name('openVoting');
Route::get('/admin/temas/{id}/close', 'Admin\TopicController@close')->name('closeVoting');
Route::resource('/votos', 'Admin\VoteController');
Route::resource('/votantes', 'Admin\VoterController');
});

//Usuarios Communs

Route::resource('/topicos', 'Site\TopicController');
Route::get('/topico/finalizados', 'Site\TopicController@finalizados')->name('finalizados');
Route::get('/topico/pendentes', 'Site\TopicController@pendentes')->name('pendentes');
Route::post('/topicos/busca', 'Site\TopicController@search')->name('searchComum');


//usuarios registrados (Profs,Alunos)
Route::group(['middleware' => ['user']], function () {
Route::post('/user/temas/busca', 'Users\TopicController@search')->name('searchUser');
Route::get('/user/temas/busca', 'Users\TopicController@searchForm')->name('searchFormUser');
Route::get('/user/temas/votaveis', 'Users\TopicController@canVote')->name('canVote');
Route::get('/user/temas/votei', 'Users\TopicController@votei')->name('votei');
Route::resource('/user/temas', 'Users\TopicController',[ 'as' => 'user' ]);
Route::get('/user/temas/{id}/votar', 'Users\VoteInController@votarCreate')->name('votar');
Route::post('/user/temas/{id}/votar/store', 'Users\VoteInController@votarStore')->name('votarStore');
});
// Route::get('/votantes', 'VoterController@find')->name('votantes');
// Route::get('/votantes/create', 'VoterController@find')->name('votantes');



