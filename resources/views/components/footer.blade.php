<!-- Footer -->
	<footer class="text-center text-lg-start text-white footer-color">
  
		<!-- Sezione SOCIAL MEDIA -->
		<section class="d-flex flex-sm-column  justify-content-md-between p-4 section-footer">
		  <div class="row">

			<div class="col-12 col-md-6">
				<div class="me-5">
				
				<p class="text-dark fs-5 fw-bold  query-footer  d-flex align-items-md-center mb-0">
					{{__('ui.becomeRevisor')}}
					<a href="{{route('become_revisor')}}">
				<button class="btn  btn-revisore ms-md-2 mt-sm-5 mt-md-0   mb-sm-5 mb-md-0">{{__('ui.click')}}
				</button>
				</a>
				</p>
				</div>

			</div>

			<div class="col-12 col-md-6">
				<!-- DESTRA -->
				<div class="d-flex   align-items-center">
				
					<span class="dark-blue-text me-4  query-footer  fs-5 fw-bold mb-0">{{__('ui.thisIsUs')}}</span>
					<a href="" class="dark-blue-text me-4">
						<i class="fa-brands fa-facebook"></i>
					</a>
					
					<a href="" class="dark-blue-text me-4">
						<i class="fa-brands fa-instagram"></i>
					</a>
					
					<a href="" class="dark-blue-text me-4">
						<i class="fa-brands fa-twitter"></i>
					</a>
					
					<a href="" class="dark-blue-text me-4">
						<i class="fa-brands fa-telegram"></i>
					</a>
					
					<a href="" class="dark-blue-text me-4">
						<i class="fa-brands fa-linkedin"></i>
					</a>
					
				</div>

			</div>


		  </div>
			<!-- SINISTRA -->

			
		</section>

		<!-- Sezione LINKS  -->
		<section class="">
		
			<div class="container text-center text-md-start mt-5">
		  
				<!-- Grid row -->
				<div class="row mt-3">
			
					<!-- Grid column -->
					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
			  
						<!-- Content -->
						<h6 class="text-uppercase fw-bold">Team Panda</h6>
						<hr class="mb-4 mt-0 d-inline-block mx-auto hr-footer">
						<p> Presto.it, per vendere le tue cianfrusaglie al piu' presto.</p>
						 <div class="d-flex column-reverse ">{{__('ui.language')}} 
							 <x-_locale  lang='it' nation='it'/> 
							 <x-_locale lang='en' nation='gb'/>
							<x-_locale lang='es' nation='es'/>
						</div> 
					</div>

					<!-- Grid column -->
					<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
					
						<!-- Links -->
						<h6 class="text-uppercase fw-bold">{{__('ui.categories')}}:</h6>
						<hr class="mb-4 mt-0 d-inline-block mx-auto hr-footer">
						<p><a href="#!" class="text-white">{{__('ui.cars')}}</a></p>
						<p><a href="#!" class="text-white">{{__('ui.tech')}}</a></p>
						<p><a href="#!" class="text-white">{{__('ui.proprieties')}}</a></p>
						 <p><a href="#!" class="text-white">{{__('ui.film')}}</a></p> 
						
					</div>

					<!-- Grid column -->
					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
					
						<!-- Links -->
						<h6 class="text-uppercase fw-bold">Link {{__('ui.link')}}:</h6>
						<hr class="mb-4 mt-0 d-inline-block mx-auto hr-footer">
						<p><a href="#!" class="text-white">Account</a></p>
						<p><a href="#!" class="text-white">{{__('ui.categories')}}</a></p>
					
					
					</div>


					<!-- Grid column -->
					<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
					
						<!-- Links -->
						<h6 class="text-uppercase fw-bold">{{__('ui.contacts')}}:</h6>
						<hr class="mb-4 mt-0 d-inline-block mx-auto hr-footer">
						<p><i class="fas fa-home mr-3"></i> Aulab, Strada S. Giorgio M. 2D, Bari</p>
						<p><i class="fas fa-envelope mr-3"></i> Presto.it </p>
						<p><i class="fas fa-phone mr-3"></i> Inserire Numero </p>
						{{-- <p><i class="fas fa-print mr-3"></i> Inserire Fax</p> --}}
					
					</div>

				</div>
			
			</div>
		  
		</section>

		<!-- Copyright -->
		<div class="text-center p-3 end-footer">
			© Presto.it | Team Panda | 2022
		</div>

  </footer>
