<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	$videos =
		[
			'https://www.youtube.com/embed/2i2khp_npdE', #Alan Walker - Sing Me To Sleep
			'https://www.youtube.com/embed/bDmzGLrdjxQ', #Alan Walker - Faded (Restrung)
			
			'https://www.youtube.com/embed/7x7LZDS-MdI', #carola 1
			'https://www.youtube.com/embed/zZHDSBg-4Ac', #carola 2
			
			'https://www.youtube.com/embed/NbMRPuGdN9E', #bo kasper
			'https://www.youtube.com/embed/z8Kwt0XgHGg', #Benjamin Ingrosso - Love You Again

			'https://player.vimeo.com/video/138084434', # tro hopp kärlek
			'https://player.vimeo.com/video/141161203', # wallmans

			'https://www.youtube.com/embed/cqwO3wKd26M', #jakob1
			'https://www.youtube.com/embed/hhgTatr3dAw', #jakob2
			
			'https://www.youtube.com/embed/CO4ScrNti_4', #Landshypotek
			'https://player.vimeo.com/video/141154060', # chilli
			
			'https://www.youtube.com/embed/ud00OumBOWY', #SAS REMAP London (Swedish version)	
			'https://player.vimeo.com/video/165859153', # nordea visa

			'https://www.youtube.com/embed/pThIdPDOSUc',  #Landshypotek Bank : På Evenstorps Gård samsas kor och hallon under samma tak  added 20/feb 2017
			'https://www.youtube.com/embed/dTLuaND5jU0', # Emelie Olson - Black Room (Official Music Video) added 27feb 2017


		];
    return view('index')->withVideos($videos);
});




function pic($class,$img,$text1,$text2){ # $link = ''; optional?
	
	# to import pix to db run once
 	# but have to make a gui with category table.. worthit? nja
	// $n = new Picture;
	// $n->class = $class;
	
	// $n->img = $img;
	// $n->text1 = $text1;
	// $n->text2 = $text2;
	// $n->save();
	#one run to save  :D

	return '
	<div class="work-item  '.$class.'" style="background: 808080; height: 350px; position: absolute; left: 945px; top: 299px;">
		
		<a class="fancybox" href="'.$img.'"   rel="gallery">
			<img src="'.$img.'" alt="" />
			<div class="work-caption font-alt">
				<h3 class="work-title">'.$text1.'</h3>
				<div class="work-descr">'.$text2.'</div>
			</div>
		</a>

	</div>
	';


}