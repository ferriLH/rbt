<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']    = 'C_Main_page';

$route['login']                 = 'C_Login';
$route['login/auth']            = 'C_Login/auth';
$route['logout']                = 'C_Login/signout';
$route['signup']                = 'C_Signup';
$route['signup/confirm']        = 'C_Signup/confirm';

$route['dashboard']             = 'C_Dashboard';
$route['dashboard/bio/(:any)']  = 'C_Dashboard/bio/$1';

$route['partner']             	= 'C_Partner';
$route['artist/add']            = 'C_Artist/addArtist';
$route['artist/add/auth']       = 'C_Artist/addArtistAuth';
$route['partner/add']           = 'C_Partner/addPartner';
$route['partner/add/auth']      = 'C_Partner/addPartnerAuth';
$route['delete-partner/(:any)'] = 'C_Partner/deletePartner/$1';
$route['data-artist/(:any)']    = 'C_Artist/dataArtist/$1';
$route['delete-artist/(:any)/(:any)']  = 'C_Artist/deleteArtist/$1/$2';

$route['music/(:any)']          = 'C_Music/index/$1';
$route['music']          		= 'C_Music/index/song';
$route['music/song']          	= 'C_Music/index/song';
$route['music/genre']          	= 'C_Music/index/genre';
$route['music/album']          	= 'C_Music/index/album';

$route['delete-song/(:any)'] 	= 'C_Music/deleteSong/$1';
$route['delete-album/(:any)'] 	= 'C_Music/deleteAlbum/$1';
$route['delete-genre/(:any)'] 	= 'C_Music/deleteGenre/$1';

$route['genre/add'] 			= 'C_Music/addGenre';
$route['song/add'] 				= 'C_Music/addSong';
$route['album/add'] 			= 'C_Music/addAlbum';
$route['genre/add/auth']      	= 'C_Music/addGenreAuth';
$route['album/add/auth']      	= 'C_Music/addAlbumAuth';

$route['promo']             	= 'C_Promo';
$route['promo/addpromo']       	= 'C_Promo/addpromo';
$route['promo/confirm']       	= 'C_Promo/confirm';
$route['delete-promo/(:any)'] 	= 'C_Promo/deletePromo/$1';

$route['contact']             	= 'C_Contact';
$route['artist']             	= 'C_Artist';
$route['artist/page/(:any)']    = 'C_Artist';
$route['artist/page']      	    = 'C_Artist';


$route['album']             	= 'C_Album';
$route['album/page/(:any)']    	= 'C_Album';
$route['album/page']    	    = 'C_Album';

$route['contact/kirim']         = 'C_Contact/kirim';

$route['inbox']             	= 'C_Inbox';
$route['inbox/baca/(:any)']     = 'C_Inbox/baca/$1';
$route['inbox/delete/(:any)']   = 'C_Inbox/delete/$1';

$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
