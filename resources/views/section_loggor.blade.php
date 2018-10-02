		<section class="module module-parallax bg-light-90">
			<div class="container">
				<div class="row">
				

					{{-- Owl-carousel start --}}
					<div class="slider-clients owl-carousel text-center">
					
						@foreach( File::allFiles("gfx/logos") as $file)
							<div class="owl-item">
								<div class="col-sm-12">
									<span style="vertical-align:middle;">
										<div class="client-item" style="height:200px;border: 0px solid black;  text-align: center;" >
											<img src="{{$file}}" alt="{{$file}}" style="border: 0px solid black">
										</div>
									</span>
								</div>
							</div>
						@endforeach

					</div>
					<!-- Owl-carousel end -->

				</div>
			</div>
		</section>