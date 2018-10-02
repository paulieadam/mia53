<section id="portfolio" class="module">

	<div class="container">

				<!-- MODULE TITLE -->
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						{{-- <h2 class="module-title font-alt">Portfolio</h2> --}}
					</div>
				</div>
				<!-- /MODULE TITLE -->

				<!-- FILTER -->
				<div class="row">

					<div class="col-sm-12">
						<ul id="filters" class="filters font-alt">
							<li><a href="#" data-filter="*" class="current">All</a></li>
							<li><a href="#" data-filter=".editor">Editorial</a></li>
							<li><a href="#" data-filter=".wedding">Wedding</a></li>
							<li><a href="#" data-filter=".x-fashion">Fashion</a></li>
							<li><a href="#" data-filter=".videos">Videos</a></li>
							<li><a href="#" data-filter=".style">Styling</a></li>
							{{-- <li><a href="#" data-filter=".test">TEST</a></li> --}}
							<!-- 1.wedding 2.editorial 3.fashion 4.videos 5.styling -->
						</ul>
					</div>

				</div>
				<!-- /FILTER -->

				<!-- WORKS GRID -->
				<div class="works-grid-wrapper">

					<div id="works-grid" class="works-grid works-hover-w" style="position: relative; height: 59	8px;">

						{{-- DO NOT DELETE THIS DIV  --}}
						<div class="grid-sizer"></div>

						<?php 
							

							
							echo 

							// EDITORIALS  
							// pic(' wide-tall editor','gfx/editorial/edit01.jpg','Editorial','makeup / hair').
							// pic(' wide-tall editor','gfx/editorial/edit02.jpg','Editorial','makeup / hair').
							pic(' wide-tall editor','gfx/editorial/edit31.jpg','Editorial','makeup / hair').
							pic(' wide-tall editor','gfx/editorial/edit30.jpg','Editorial','makeup / hair').
							pic(' wide-tall editor','gfx/editorial/edit20.png','Editorial','makeup / hair').
							pic(' wide-tall editor','gfx/editorial/edit18.png','Editorial','makeup / hair').
							pic(' wide-tall editor','gfx/editorial/edit08.jpg','Editorial','makeup / hair / styling').
							pic(' wide-tall editor','gfx/editorial/edit32.png','Editorial','makeup / hair / styling').
							pic(' wide-tall editor','gfx/editorial/edit04.jpg','Editorial','makeup / hair').
							pic(' wide-tall editor','gfx/editorial/edit05.jpg','Editorial','makeup / hair').
							pic(' wide-tall editor','gfx/editorial/edit15.jpg','Editorial','makeup').
							pic(' wide-tall editor','gfx/editorial/editXX.jpg','Editorial','makeup').
							pic(' wide-tall editor','gfx/editorial/edit12.jpg','Editorial','makeup / hair').
							pic(' wide-tall editor','gfx/editorial/edit16.png','Editorial','makeup / hair').
							pic(' wide-tall editor','gfx/editorial/edit19.png','Editorial','makeup / hair').
							pic(' wide-tall editor','gfx/editorial/edit21.png','Editorial','makeup / hair / styling').
							pic(' wide-tall editor','gfx/sista/sista03.png','Editorial','makeup / hair / styling').
							pic(' wide-tall editor','gfx/sista/sista02.png','Editorial','makeup / hair / styling').
							pic(' wide-tall editor','gfx/sista/sista04.jpg','Editorial','makeup / hair / styling').
							pic(' wide-tall editor','gfx/sista/sista07.jpg','Editorial','makeup / hair / styling').
							pic(' wide-tall editor','gfx/editorial/edit17.jpg','Editorial','makeup / hair').
							pic(' wide-tall editor','gfx/editorial/edit24.png','Editorial','makeup / hair / styling').
							

							// wedding
							pic('wedding tall '      , 'gfx/wedding2/wedding3.jpg','wedding','makeup / hair').
							pic('wedding tall '      , 'gfx/wedding2/wedding4.jpg','wedding','makeup / hair').
							pic('wedding wide-tall ' , 'gfx/wedding2/wedding2.jpg','wedding','makeup / hair').
							pic('wedding wide-tall ' , 'gfx/wedding2/wedding1.jpg','wedding','makeup / hair').
							pic('wedding tall '      , 'gfx/wedding2/wedding5.jpg','wedding','makeup / hair').
							pic('wedding tall '      , 'gfx/wedding2/wedding6.jpg','wedding','makeup / hair').
							pic('wedding wide-tall ' , 'gfx/wedding2/w04.jpg','wedding','makeup / hair').
							pic('wedding wide-tall ' , 'gfx/wedding2/w06.jpg','wedding','makeup / hair').
							pic('wedding wide-tall ' , 'gfx/wedding2/003.jpg','wedding','makeup / hair').
							pic('wedding wide-tall ' , 'gfx/wedding2/004.jpg','wedding','makeup / hair').
							pic('wedding tall '      , 'gfx/wedding2/wedding9.jpg','wedding','makeup / hair').
							pic('wedding tall '      , 'gfx/wedding2/wedding10.jpg','wedding','makeup / hair').
							pic('wedding wide-tall ' , 'gfx/wedding2/wedding7.jpg','wedding','makeup').
							pic('wedding wide-tall ' , 'gfx/wedding2/wedding8.jpg','wedding','makeup / hair').
							pic('wedding wide-tall ' , 'gfx/wedding2/w09.jpg','wedding','makeup / hair').
							pic('wedding wide-tall ' , 'gfx/wedding2/001.jpg','wedding','makeup / hair').
							pic('wedding wide-tall ' , 'gfx/wedding2/002.jpg','wedding','makeup / hair').
							

							
							// fashion  --> x-fashion
							pic(' wide-tall x-fashion','gfx/fashion/04.jpg','Fashion','makeup / hair').
							pic(' wide-tall x-fashion','gfx/fashion/05.jpg','Fashion','makeup / hair').
							pic(' wide-tall x-fashion','gfx/fashion/02.jpg','Fashion','makeup / hair').
							pic(' wide-tall x-fashion','gfx/fashion/03.jpg','Fashion','makeup / hair').
							pic(' wide-tall x-fashion','gfx/fashion/07.png','Fashion','makeup / hair').
							pic(' wide-tall x-fashion','gfx/fashion/13.jpg','Fashion','makeup').
							pic(' wide-tall x-fashion','gfx/fashion/12.jpg','Fashion','makeup').
							pic(' wide-tall x-fashion','gfx/fashion/06.png','Fashion','makeup / hair').
							pic(' wide-tall x-fashion','gfx/fashion/14.jpg','Fashion','makeup / hair').
							pic(' wide-tall x-fashion','gfx/fashion/16.jpg','Fashion','makeup / hair').
							pic(' wide-tall x-fashion','gfx/fashion/01.jpg','Fashion','makeup / hair').	
							pic(' wide-tall x-fashion','gfx/fashion/08.png','Fashion','makeup / hair').
							pic(' wide-tall x-fashion','gfx/fashion/10.png','Fashion','makeup / hair').
							pic(' wide-tall x-fashion','gfx/fashion/15.jpg','Fashion','makeup').

							


							// style
							pic(' wide-tall  style','gfx/style/01.jpg','Styling','styling / makeup / hair').
							pic(' wide-tall  style','gfx/style/02.jpg','Styling','styling / makeup / hair').
							pic(' wide-tall  style','gfx/style/03.jpg','Styling','styling').
							pic(' wide-tall  style','gfx/style/07.jpg','Styling','styling').
							pic(' wide-tall  style','gfx/style/10.jpg','Styling','styling / makeup / hair').
							pic(' wide-tall  style','gfx/style/11.jpg','Styling','styling / makeup / hair').
							pic(' wide-tall  style','gfx/style/06.jpg','Styling','styling / makeup / hair').
							pic(' wide-tall  style','gfx/style/09.jpg','Styling','styling / makeup / hair').
							pic(' wide-tall  style','gfx/style/04.jpg','Styling','styling / makeup / hair').
							pic(' wide-tall  style','gfx/style/05.jpg','Styling','styling / makeup / hair').
							pic(' wide-tall  style','gfx/style/08.jpg','Styling','styling');
							
						?>

					
					{{-- Mias pictures --}}
					
					{{-- @foreach($pictures as  $p)

						<div class="work-item  {{$p->class}}" style="background: 808080; height: 350px; position: absolute; left: 945px; top: 299px;">
							<a class="fancybox" href="{{$p->img}}"   rel="gallery">
								<img src="{{$p->img}}" alt="" />
								<div class="work-caption font-alt">
									<h3 class="work-title">{{$p->text1}}</h3>
									<div class="work-descr">{{$p->text2}} </div>
								</div>
							</a>
						</div>

					@endforeach
	 --}}





					{{-- Videos.  Data is stored in HomeController@index --}}
					@foreach($videos as $url)

						@if(str_contains($url,'youtu'))
							<div style="background: 808080; height: 350px; position: absolute; left: 945px; top: 299px;" class="work-item  wide videos">
								<a class="various fancybox.iframe" href="{{$url}}?autoplay=1">
									<iframe class="fancybox fancybox.iframe"
										width="700" 
										height="400" 
										src="{{$url}}?rel=0"
										frameborder="0" 
										allowfullscreen>
									</iframe>
								</a>
							</div>
						@endif
						
						@if(str_contains($url,'vimeo'))
							<div style="background: 808080; height: 350px; position: absolute; left: 945px; top: 299px;" class="work-item  wide videos">
								<a class="various fancybox.iframe" href="{{$url}}?autoplay=1&title=0&byline=0&portrait=0">
									<iframe class="fancybox fancybox.iframe" src="{{$url}}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</a>
							</div>		
						@endif
					
					@endforeach

				</div>
				<!-- /WORKS GRID -->

				<!-- SHOW MORE -->
				<div class="row m-t-70 text-center">
					<div class="col-sm-12">

						<button href="#" id="show-more" class="btn btn-round btn-b">More works</button>

					</div>
				</div>
				<!-- /SHOW MORE -->
				
	</div> {{-- container end --}}
</section>
