Route::get('/', function()
{
	return Redirect::to('/artists');
});

Route::get('/artists', 'WorkController@showArtists');

Route::get('/artist/{id}', 'WorkController@getArtist');

Route::get('/album/{id}', 'WorkController@getAlbum');

Route::get('/track/{id}', 'WorkController@getTrack');
