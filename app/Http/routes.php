<?php
  
  Route::get('/', 'ArticlesController@getIndex');
  Route::controller('articles', 'ArticlesController');