<!-- General CSS Files -->
@php
    $logo=asset(Storage::url('uploads/logo/'));
$company_favicon=Utility::getValByName('company_favicon');
@endphp
<!DOCTYPE html>
<html dir="rtl" lang="ar">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>{{(Utility::getValByName('title_text')) ? Utility::getValByName('title_text') : config('app.name', 'PartTime')}} - @yield('page-title')</title>
        <link rel="icon" href="{{$logo.'/'.(isset($company_favicon) && !empty($company_favicon)?$company_favicon:'logo.png')}}" type="image" sizes="16x16">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/web/css/bootstrap-rtl.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/web/css/animate.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/web/fontawesome5.10.2/css/all.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/web/plugins/owlslider/assets/owl.carousel.min.css')}}">		
		<link rel="stylesheet" type="text/css" href="{{asset('assets/web/css/style.css')}}">
	</head>
	<body>

		<!-- Side Menu -->
    <aside class="side-menu">
        <div class="text-left">
            <button class="bg-transparent border-0 btn text-muted btn-lg" id="closeMenu">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="scroll-menu">
            <nav>
               	<ul>
                	<li class="active">
                      <a href="#">الرئيسية</a>
                  </li>
                  <li>
                      <a href="#">عن بارتايم</a>
                  </li>
                  <li >
                      <a href="#">اتصل بنا</a>
                  </li>                             
                </ul>
               	<div class="btns">
                	<a href="https://partime.typeform.com/to/zPyfQS" tareget="_blank" class="btn btn-deep-blue new-user mb-2 d-block">مستخدم جديد شركات</a>
                	<a href="/login" class="btn btn-blue-light login mb-2 d-block">تسجيل دخول </a>
                	<a href="" class="btn btn-pink login mb-2 d-block">مهتم وترغب المزيد من المعلومات</a>
                </div>
            </nav>
        </div> 
    </aside>
    <div class="side-overlay"></div>
    <!-- Side Menu -->

    <div class="header-wrapper">
			<header id="header" class="main-header wow1 slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
				<div class="container">
	        <nav class="navbar navbar-expand-lg">
	        	<button type="button" class="navbar-toggler btn btn-outline-light " id="openMenu">
	            <i class="fa fa-align-right fa-fw"></i>
	          </button>
	            <a class="navbar-brand" href="#">
	                <img src="{{asset('assets/web/images/logo.png')}}" class="img-fluid d-none d-lg-inline">
	                <img src="{{asset('assets/web/images/white-logo.png')}}" class="img-fluid d-lg-none d-xl-none">
	            </a>
	            <div class="collapse navbar-collapse" id="main_menu">
	                <ul class="navbar-nav mr-2 main-menu">
	                    <li class="nav-item active">
	                        <a class="nav-link" href="#">الرئيسية</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">عن بارتايم</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">اتصل بنا</a>
	                    </li>                    
	                </ul>
	                <div class="auth-action ml-auto">
	                	<a href="https://partime.typeform.com/to/zPyfQS" target="_blank" class="btn btn-deep-blue new-user ml-md-2">مستخدم جديد</a>
	                	<a href="/login" class="btn btn-blue-light login">تسجيل دخول</a>
	                </div>
	            </div>  
	        </nav>
	      </div>
			</header><!-- /header -->
		</div><!-- /header-wrapper  -->

		<!-- main-hero-section -->
		<section class="main-hero-section">
			<div class="container">				
				<div class="row align-items-center">
					<div class="col-lg-6 order-lg-last">
						<div class="details">
							<div class="join-us d-none d-lg-block wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
								<div class="row no-gutters mb-3 align-items-center">
									<div class="col-3">
										<img src="{{asset('assets/web/images/statistices.png')}}" class="img-fluid" alt="">
									</div>
									<div class="col-9 pr-3">
										<h3>مرحلة بارتايم الاستثمارية</h3>
										<h4>Seed Funding Round</h4>
									</div>
								</div>		
								<div class="text-center">
									<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-deep-blue">انضم كمستثمر لرحلتنا العالمية </a>
								</div>						
							</div>
							<h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">تواجهك صعوبة بتوظيف المهنيين المحترفين ؟</h2>
							<h1 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">بارتايم هو الحل</h1>
						</div>
					</div>
					<div class="col-lg-6 text-center">
						<div class="video-wraper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
							<video class=""  autoplay="autoplay" loop="loop"  height="auto" width="100%" muted playsinline>
								<source src="{{asset('assets/web/media/video.mp4')}}" type="video/mp4" />
              </video>
						</div>
						<div class="h-apps-links  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
							<p>Soon</p>
							<a href="#" onclick="return false;" target="_blank">
								<img src="{{asset('assets/web/images/icon-google.png')}}" class="img-fluid" alt="">
							</a>
							<a href="#" onclick="return false;"  target="_blank">
								<img src="{{asset('assets/web/images/icon-apple.png')}}" class="img-fluid" alt="">
							</a>
						</div>
					</div>					
				</div>
				<!-- display on tablet and mobile -->
				<div class="details mt-5 d-lg-none d-xl-none">					
					<div class="join-us wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
						<div class="row no-gutters mb-3 align-items-center">
							<div class="col-3">
								<img src="{{asset('assets/web/images/statistices.png')}}" class="img-fluid" alt="">
							</div>
							<div class="col-9 pr-3">
								<h3>مرحلة بارتايم الاستثمارية</h3>
								<h4>Seed Funding Round</h4>
							</div>
						</div>		
						<div class="text-center">
							<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-deep-blue">انضم كمستثمر لرحلتنا العالمية </a>
						</div>						
					</div>
				</div>
			</div>
		</section><!-- /main-hero-section -->

		<!-- recruitment-solutions -->
		<section class="recruitment-solutions">
			<div class="container">
				<div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
					<h2><span>نقدم حلول توظيف بارتايم</span></h2>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="img wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<img src="{{asset('assets/web/images/recruitment-solutions.png')}}" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-md-8">
						<div class="info mt-3">
							<div class="content  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
								<p>منصة بارتايم ربط المنشآت مع المهنيين الباحثين عن العمل الجزئي والمرن لزيادة الانتاجية والدخل ورفع مستوى الامتثال والشفافية</p>
							</div>
							<div class="actions wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink ml-md-2">للباحثين عن فرص عمل بارتايم</a>
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light">للمنشأت</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- /recruitment-solutions -->

		<!-- features for companies -->
		<section class="features-section">
			<div class="container">
				<div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
					<h2><span>للمنشآت</span></h2>
				</div>
				<div class="main-features-img text-center py-3 my-5  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
					<img src="{{asset('assets/web/images/companies-feautres-image.png')}}" class="img-fluid" alt="">
				</div>
				<div class="features-list">
					<div class="row">
						<div class="col-sm-4">
							<article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
								<div class="img">
									<img src="{{asset('assets/web/images/company-feature-1.png')}}" class="img-fluid mx-auto" alt="">
								</div>
								<h3>نسهل لك العثور على مرشحين رائعين للعمل</h3>
							</article>
						</div>
						<div class="col-sm-4">
							<article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
								<div class="img">
									<img src="{{asset('assets/web/images/company-feature-2.png')}}" class="img-fluid mx-auto" alt="">
								</div>
								<h3>نوفر وقتك بتوحيد وسيلة التواصل مع المرشحين عبر المنصة</h3>
							</article>
						</div>
						<div class="col-sm-4">
							<article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
								<div class="img">
									<img src="{{asset('assets/web/images/company-feature-3.png')}}" class="img-fluid mx-auto" alt="">
								</div>
								<h3>نقلل المدة الزمنية لاختيار المرشح المثالي  للوظيفة</h3>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section><!-- /features-section -->

		<!-- available jobs now -->
		{{-- <div class="container">			
			<div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
				<h2><span>مهن المرشحين البارتايم المتاحين</span></h2>
				<p>لعرض الوظائف قم بتحديد  الدولة والمدينة التي ترغب بالتوظيف بها او تبحث عن وظيفة بها</p>
			</div>
		</div>
		<section class="available_jobs_section">
			<div class="container">		
				<div class="h_available_job_search">
					<div class="search_wrap">
						<form>
							<div class="row">
								<div class="col-sm-4">
									<div class="cs-select">										
										<select class="form-control" placeholder="تحديد الدولة">
											<option hidden>تحديد الدولة</option>
											<option value="">السعودية</option>
											<option value="">فلسطين</option>
										</select>
										<i class="fas fa-angle-down"></i>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="cs-select">										
										<select class="form-control" placeholder="تحديد المدينة">
											<option اhidden>تحديد المدينة</option>
											<option value="">الرياض</option>
											<option value="">جدة</option>
										</select>
										<i class="fas fa-angle-down"></i>
									</div>
								</div>
								<div class="col-sm-4">
									<button type="submit" class="btn btn-block btn-blue-light">عرض</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="available_jobs_list">
					<div class="row justify-content-md-center">
							<div class="col-lg-3 col-md-4 col-6">
								<div class="available_job_item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
									<div class="front">
										<div class="job_count d-flex justify-content-center align-items-center flex-column">
											<span>250</span>
											<p>مرشح بارتايم</p>
										</div>
										<div class="title d-flex justify-content-center align-items-center">
											<h3>Quality and compliance officer</h3>
										</div>
									</div>
									<div class="overlay d-flex justify-content-center align-items-center flex-column">
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink w-100 mb-2">وظف بارتايم</a>
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light w-100">أنضم بارتايم</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<div class="available_job_item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
									<div class="front">
										<div class="job_count d-flex justify-content-center align-items-center flex-column">
											<span>250</span>
											<p>مرشح بارتايم</p>
										</div>
										<div class="title d-flex justify-content-center align-items-center">
											<h3>CEO</h3>
										</div>
									</div>
									<div class="overlay d-flex justify-content-center align-items-center flex-column">
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink w-100 mb-2">وظف بارتايم</a>
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light w-100">أنضم بارتايم</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<div class="available_job_item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
									<div class="front">
										<div class="job_count d-flex justify-content-center align-items-center flex-column">
											<span>250</span>
											<p>مرشح بارتايم</p>
										</div>
										<div class="title d-flex justify-content-center align-items-center">
											<h3>CTO</h3>
										</div>
									</div>
									<div class="overlay d-flex justify-content-center align-items-center flex-column">
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink w-100 mb-2">وظف بارتايم</a>
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light w-100">أنضم بارتايم</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<div class="available_job_item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
									<div class="front">
										<div class="job_count d-flex justify-content-center align-items-center flex-column">
											<span>250</span>
											<p>مرشح بارتايم</p>
										</div>
										<div class="title d-flex justify-content-center align-items-center">
											<h3>CFO</h3>
										</div>
									</div>
									<div class="overlay d-flex justify-content-center align-items-center flex-column">
										<a href="" class="btn btn-pink w-100 mb-2">وظف بارتايم</a>
										<a href="" class="btn btn-blue-light w-100">أنضم بارتايم</a>
									</div>
								</div>
							</div>
						
							<div class="col-lg-3 col-md-4 col-6">
								<div class="available_job_item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
									<div class="front">
										<div class="job_count d-flex justify-content-center align-items-center flex-column">
											<span>250</span>
											<p>مرشح بارتايم</p>
										</div>
										<div class="title d-flex justify-content-center align-items-center">
											<h3>HR manager</h3>
										</div>
									</div>
									<div class="overlay d-flex justify-content-center align-items-center flex-column">
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink w-100 mb-2">وظف بارتايم</a>
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light w-100">أنضم بارتايم</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<div class="available_job_item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
									<div class="front">
										<div class="job_count d-flex justify-content-center align-items-center flex-column">
											<span>250</span>
											<p>مرشح بارتايم</p>
										</div>
										<div class="title d-flex justify-content-center align-items-center">
											<h3>project manager</h3>
										</div>
									</div>
									<div class="overlay d-flex justify-content-center align-items-center flex-column">
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink w-100 mb-2">وظف بارتايم</a>
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light w-100">أنضم بارتايم</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<div class="available_job_item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
									<div class="front">
										<div class="job_count d-flex justify-content-center align-items-center flex-column">
											<span>250</span>
											<p>مرشح بارتايم</p>
										</div>
										<div class="title d-flex justify-content-center align-items-center">
											<h3>financial analyst</h3>
										</div>
									</div>
									<div class="overlay d-flex justify-content-center align-items-center flex-column">
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink w-100 mb-2">وظف بارتايم</a>
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light w-100">أنضم بارتايم</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<div class="available_job_item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
									<div class="front">
										<div class="job_count d-flex justify-content-center align-items-center flex-column">
											<span>250</span>
											<p>مرشح بارتايم</p>
										</div>
										<div class="title d-flex justify-content-center align-items-center">
											<h3>accountant</h3>
										</div>
									</div>
									<div class="overlay d-flex justify-content-center align-items-center flex-column">
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink w-100 mb-2">وظف بارتايم</a>
										<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light w-100">أنضم بارتايم</a>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</section>
		<div class="text-center view-jobs-btn">
			<a href="" class="btn btn-pink">عرض جميع المهن <i class="fas fa-angle-double-left"></i></a>
		</div>		 --}}
		<!-- features for employee -->
		<section class="features-section">
			<div class="container">
				<div class="section-title  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
					<h2><span>للمهنين الباحثين عن عمل بارتايم</span></h2>
				</div>
				<div class="main-features-img text-center py-3 my-5 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
					<img src="{{asset('assets/web/images/employees-feautres-image.png')}}" class="img-fluid mx-auto" alt="">
				</div>
				<div class="features-list">
					<div class="row">
						<div class="col-sm-4">
							<article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
								<div class="img">
									<img src="{{asset('assets/web/images/employee-feature-1.png')}}" class="img-fluid mx-auto" alt="">
								</div>
								<h3>إٍستغل خبراتك ومواهبك في المكان والوقت المناسب لك</h3>
							</article>
						</div>
						<div class="col-sm-4">
							<article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
								<div class="img">
									<img src="{{asset('assets/web/images/employee-feature-2.png')}}" class="img-fluid mx-auto" alt="">
								</div>
								<h3>بسهولة أنشئ سيرتك الذاتية واظهر بشكل احترافي</h3>
							</article>
						</div>
						<div class="col-sm-4">
							<article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
								<div class="img">
									<img src="{{asset('assets/web/images/employee-feature-3.png')}}" class="img-fluid mx-auto" alt="">
								</div>
								<h3>بضغطة وحدة قدّم على وظائف</h3>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section><!-- /features-section -->

		<!-- our-projects-section -->
		<section class="our-projects-section">
			<div class="container">
				<div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
					<h2><span>مشاريع نوظف حاليا بها</span></h2>
					<p>شاهد أماكن العمل وسجل في المكان الذي تود العمل به</p>
				</div>
			</div>
			<div class="projects_slider owl-carousel">
				<div class="item">
					<div class="project-item">
						<img src="{{asset('assets/web/images/projects/1.png')}}" class="img-fluid" alt="">
						<div class="overlay d-flex justify-content-center flex-column">
							<h3 class="title">برج المملكة</h3>
							<p class="city">الرياض</p>
							<p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
							<div class="links">
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink btn-sm">وظف بارتايم</a>
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="project-item">
							<img src="{{asset('assets/web/images/projects/2.png')}}" class="img-fluid" alt="">
						<div class="overlay d-flex justify-content-center flex-column">
							<h3 class="title">البوابة الاقتصادية</h3>
							<p class="city">الرياض</p>
							<p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
							<div class="links">
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink btn-sm">وظف بارتايم</a>
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="project-item">
							<img src="{{asset('assets/web/images/projects/3.png')}}" class="img-fluid" alt="">
						<div class="overlay d-flex justify-content-center flex-column">
							<h3 class="title">برج العنود</h3>
							<p class="city">الرياض</p>
							<p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
							<div class="links">
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink btn-sm">وظف بارتايم</a>
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="project-item">
							<img src="{{asset('assets/web/images/projects/4.png')}}" class="img-fluid" alt="">
						<div class="overlay d-flex justify-content-center flex-column">
							<h3 class="title">برج الفصيلة</h3>
							<p class="city">الرياض</p>
							<p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
							<div class="links">
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink btn-sm">وظف بارتايم</a>
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="project-item">
							<img src="{{asset('assets/web/images/projects/5.png')}}" class="img-fluid" alt="">
						<div class="overlay d-flex justify-content-center flex-column">
							<h3 class="title">واجهة الرياض</h3>
							<p class="city">الرياض</p>
							<p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
							<div class="links">
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink btn-sm">وظف بارتايم</a>
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="project-item">
							<img src="{{asset('assets/web/images/projects/6.png')}}" class="img-fluid" alt="">
						<div class="overlay d-flex justify-content-center flex-column">
							<h3 class="title">مدينة الملك عبدالله المالية</h3>
							<p class="city">الرياض</p>
							<p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
							<div class="links">
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink btn-sm">وظف بارتايم</a>
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="project-item">
							<img src="{{asset('assets/web/images/projects/7.png')}}" class="img-fluid" alt="">
						<div class="overlay d-flex justify-content-center flex-column">
							<h3 class="title">برج حمد</h3>
							<p class="city">الرياض</p>
							<p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
							<div class="links">
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink btn-sm">وظف بارتايم</a>
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="project-item">
							<img src="{{asset('assets/web/images/projects/8.png')}}" class="img-fluid" alt="">
						<div class="overlay d-flex justify-content-center flex-column">
							<h3 class="title">برج المجدول</h3>
							<p class="city">الرياض</p>
							<p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
							<div class="links">
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-pink btn-sm">وظف بارتايم</a>
								<a href="https://partatime.typeform.com/to/zPyfQS" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- /our-projects-section -->

		<!-- experiences-section -->
		<section class="experiences-section">
			<div class="container">
				<div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
					<p class="top_subheader">+1000</p>
					<h2><span>موظفينا خبرات بأهم الشركات العالمية</span></h2>
				</div>
				<div class="experiences-list">
					<div class="d-flex justify-content-center align-items-center flex-wrap">
						<div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<a href="">
								<img src="{{asset('assets/web/images/experiences/1.png')}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<a href="">
								<img src="{{asset('assets/web/images/experiences/2.png')}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<a href="">
								<img src="{{asset('assets/web/images/experiences/3.png')}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<a href="">
								<img src="{{asset('assets/web/images/experiences/4.png')}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<a href="">
								<img src="{{asset('assets/web/images/experiences/5.png')}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<a href="">
								<img src="{{asset('assets/web/images/experiences/6.png')}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<a href="">
								<img src="{{asset('assets/web/images/experiences/7.png')}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<a href="">
								<img src="{{asset('assets/web/images/experiences/8.png')}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<a href="">
								<img src="{{asset('assets/web/images/experiences/9.png')}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<a href="">
								<img src="{{asset('assets/web/images/experiences/10.png')}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<a href="">
								<img src="{{asset('assets/web/images/experiences/11.png')}}" class="img-fluid" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section><!-- /experiences-section -->

		<!-- our-team-section -->
		<!-- <section class="our-team-section">
			<div class="container">
				<div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
					<h2><span>فريقنا</span></h2>
				</div>
			</div>
			<div class="team_slider owl-carousel wow fadeInUp mt-5" data-wow-duration="1.5s" data-wow-delay=".3s">
				<div class="item">
					<div class="team-item">
						<div class="img">
							<img src="{{asset('assets/web/images/team/walled.png')}}" class="img-fluid" alt="">
						</div>
						<h3>Waleed Alhazmi</h3>
						<p>Founder</p>
						<div class="social-team  text-center">
							<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="team-item">
						<div class="img">
							<img src="{{asset('assets/web/images/team/alaa.png')}}" class="img-fluid" alt="">
						</div>
						<h3>Aladdin Faisal</h3>
						<p>Operation</p>
						<div class="social-team  text-center">
							<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="team-item">
						<div class="img">
							<img src="{{asset('assets/web/images/team/mohanad.png')}}" class="img-fluid" alt="">
						</div>
						<h3>Mohanad Hilles</h3>
						<p>IT Technology</p>
						<div class="social-team  text-center">
							<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="team-item">
						<div class="img">
							<img src="{{asset('assets/web/images/team/hanady.png')}}" class="img-fluid" alt="">
						</div>
						<h3>Hanady Al Saqqa</h3>
						<p>Compliance</p>
						<div class="social-team  text-center">
							<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="team-item">
						<div class="img">
							<img src="{{asset('assets/web/images/team/women.png')}}" class="img-fluid" alt="">
						</div>
						<h3>Rahaf Al Amri</h3>
						<p>Finance</p>
						<div class="social-team  text-center">
							<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="team-item">
						<div class="img">
							<img src="{{asset('assets/web/images/team/hani.png')}}" class="img-fluid" alt="">
						</div>
						<h3>Hani yousif</h3>
						<p>IT technology</p>
						<div class="social-team  text-center">
							<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="team-item">
						<div class="img">
							<img src="{{asset('assets/web/images/team/abeer.png')}}" class="img-fluid" alt="">
						</div>
						<h3>Abeer Abu Zarifa</h3>
						<p>Customer Care</p>
						<div class="social-team  text-center">
							<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="team-item">
						<div class="img">
							<img src="{{asset('assets/web/images/team/women.png')}}" class="img-fluid" alt="">
						</div>
						<h3>Fitoon Alshayie</h3>
						<p>Marketing</p>
						<div class="social-team  text-center">
							<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="team-item">
						<div class="img">
							<img src="{{asset('assets/web/images/team/suzan.png')}}" class="img-fluid" alt="">
						</div>
						<h3>Suzan Salem</h3>
						<p>Social media</p>
						<div class="social-team  text-center">
							<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				
				<div class="item">
					<div class="team-item">
						<div class="img">
							<img src="{{asset('assets/web/images/team/ramy.png')}}" class="img-fluid" alt="">
						</div>
						<h3>Ramy Alshaer</h3>
						<p>UXUI Design</p>
						<div class="social-team  text-center">
							<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				
				<div class="item">
					<div class="team-item">
						<div class="img">
							<img src="{{asset('assets/web/images/team/women.png')}}" class="img-fluid" alt="">
						</div>
						<h3>NEMAH NASER </h3>
						<p>Talent Acquisition</p>
						<div class="social-team  text-center">
							<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- /our-team-section -->


		<footer id="footer" class="main-footer">
			<div class="container">				
				<div class="top">
					<div class="row align-items-center">
						<div class="col-lg-4  col-md-6">
							<div class="w-about">
								<div class="f-logo">
									<a href="">
										<img src="{{asset('assets/web/images/footer-logo.png')}}" class="img-fluid" alt="">
									</a>
								</div>
								<p><i class="fas fa-map-marker-alt"></i> مركز منشأت - واجهة الرياض - مجمع  ريادة الأعمال  الرياض - المملكة العربية السعودية </p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6">
							<div class="w-apps">
								<p>التطبيق  قريبا ًمتاح علي منصات</p>
								<div class="apps-links">
									<a href="" onclick="return false;" target="_blank" title="">
										<img src="{{asset('assets/web/images/icon-google.png')}}" alt="">
									</a>
									<a href="" onclick="return false;" target="_blank" title="">
										<img src="{{asset('assets/web/images/icon-apple.png')}}" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="social text-center">
								<a href="https://twitter.com/part_time_ksa?s=09" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.linkedin.com/company/par-time" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://www.Instagram.com/part_time_ksa" target="_blank"><i class="fab fa-instagram"></i></a>
								<a href="https://www.snapchat.com/add/partime.ksa" target="_blank"><i class="fab fa-snapchat-ghost"></i></a>
							</div>
							<div class="f-links">
								<a href="">سياسية الخصوصية</a>
								<a href="">شروط والأحكام</a>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom d-flex justify-content-between">
					<p class="copyright">جميع الحقوق محفوظة لصالح تطبيق بارتايم</p>
					<a href="" class="site">www.partatime.com</a>
				</div>
				<a href="" class="scrollToTop">
					<i class="fas fa-angle-up"></i>
				</a>
			</div>
		</footer><!-- /footer -->





		
		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script  src="{{asset('assets/web/js/jquery-3.4.1.min.js')}}"></script>
    <script  src="{{asset('assets/web/js/popper.min.js')}}"></script>
    <script  src="{{asset('assets/web/js/wow.min.js')}}"></script>
    <script  src="{{asset('assets/web/js/bootstrap.min.js')}}"></script>    
	<script  src="{{asset('assets/web/plugins/owlslider/owl.carousel.min.js')}}"></script>
    <script  src="{{asset('assets/web/js/main.js')}}"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e0db55e27773e0d832b7e13/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168595512-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168595512-1');
</script>


<!--End of Tawk.to Script-->
    <script type="text/javascript">
    	$('.projects_slider').owlCarousel({
            // center: true,
            items: 4,
            loop: true,
            rtl: true,
            nav:false,
            navText: ["<i class='fas fa-arrow-right' title='السابق'></i>","<i class='fas fa-arrow-left' title='التالي'></i>"],      
            dots:false,
            autoplay: true,
            navSpeed: 2000,
            autoplaySpeed: 1500,
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            margin:10,
            smartSpeed:450,
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items:1.25,
                    center: true,
                },
                // breakpoint from 480 up
                480 : {
                    items:2,
                },
                // breakpoint from 768 up
                768 : {
                    items:3,
                },
                // breakpoint from 768 up
                992 : {
                    items:4,
                }
            }
        });
    	$('.team_slider').owlCarousel({
            // center: true,
            items: 4,
            loop: true,
            rtl: true,
            nav:false,
            navText: ["<i class='fas fa-arrow-right' title='السابق'></i>","<i class='fas fa-arrow-left' title='التالي'></i>"],      
            dots:false,
            autoplay: true,
            navSpeed: 2000,
            autoplaySpeed: 1500,
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            margin:10,
            smartSpeed:450,
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items:1.25,
                    center: true,
                },
                // breakpoint from 480 up
                480 : {
                    items:2,
                },
                // breakpoint from 768 up
                768 : {
                    items:3,
                },
                // breakpoint from 768 up
                992 : {
                    items:4,
                }
            }
        });


	

			$(document).ready(function () {

				//Check to see if the window is top if not then display button
				$(window).scroll(function () {
					if ($(this).scrollTop() > 5) {
						$('.scrollToTop').fadeIn();
					} else {
						$('.scrollToTop').fadeOut();
					}
				});

				//Click event to scroll to top
				$('.scrollToTop').click(function () {
					$('html, body').animate({ scrollTop: 0 }, 800);
					return false;
				});

			});

			window.onscroll = function() {
			    myFunction();
			};

			var navbar = document.querySelector('.header-wrapper');
			var sticky = navbar.offsetTop + 1;

			function myFunction() {
			    console.log(sticky)
			    if (window.pageYOffset >= sticky) {
			        navbar.classList.add("fixed-top")
			    } else {
			        navbar.classList.remove("fixed-top");
			    }
			}


	
    </script>
	</body>
</html>