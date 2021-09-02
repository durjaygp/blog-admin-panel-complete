@extends('layouts.website')
@section('content')
    
<!-- **************** MAIN CONTENT START **************** -->
<main>
    <!-- =======================
    Main hero START -->
    <section class="pt-4 pb-0 card-grid">
        <div class="container">
            <div class="row g-4">
                <!-- Left big card -->
                <div class="col-lg-6">
                    <div class="card card-overlay-bottom card-grid-lg card-bg-scale" style="background-image:url({{asset('website')}}/images/blog/1by1/01.jpg); background-position: center left; background-size: cover;">
                        <!-- Card featured -->
                        <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                        <!-- Card Image overlay -->
              <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
                <div class="w-100 mt-auto">
                    <!-- Card category -->
                    <a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                    <!-- Card title -->
                  <h2 class="text-white h1"><a href="post-single-4.html" class="btn-link stretched-link text-reset">Ten tell-tale signs you need to get a new startup.</a></h2>
                  <p class="text-white">No visited raising gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case. </p>
                  <!-- Card info -->
                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                        <li class="nav-item">
                        <div class="nav-link">
                            <div class="d-flex align-items-center text-white position-relative">
                                <div class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="{{asset('website')}}/images/avatar/11.jpg" alt="avatar">
                                    </div>
                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Louis</a></span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">Nov 15, 2021</li>
                        <li class="nav-item">5 min read</li>
                    </ul>
                </div>
              </div>
                    </div>
                </div>
                <!-- Right small cards -->
                <div class="col-lg-6">
                    <div class="row g-4">
                        <!-- Card item START -->
                        <div class="col-12">
                            <div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url({{asset('website')}}/images/blog/1by1/02.jpg); background-position: center left; background-size: cover;">
                                <!-- Card Image -->
                                <!-- Card Image overlay -->
                      <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
                        <div class="w-100 mt-auto">
                            <!-- Card category -->
                            <a href="#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                            <!-- Card title -->
                          <h4 class="text-white"><a href="post-single-4.html" class="btn-link stretched-link text-reset">Best Pinterest boards for learning about business</a></h4>
                          <!-- Card info -->
                            <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                <li class="nav-item position-relative">
                                <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a>
                                    </div>
                                </li>
                                <li class="nav-item">Aug 18, 2021</li>
                            </ul>
                        </div>
                      </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-md-6">
                            <div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url({{asset('website')}}/images/blog/1by1/03.jpg); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                      <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
                        <div class="w-100 mt-auto">
                            <!-- Card category -->
                            <a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a>
                            <!-- Card title -->
                          <h4 class="text-white"><a href="post-single-4.html" class="btn-link stretched-link text-reset">Five intermediate guide to business</a></h4>
                          <!-- Card info -->
                            <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                <li class="nav-item position-relative">
                                <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Joan</a>
                                    </div>
                                </li>
                                <li class="nav-item">Jun 03, 2021</li>
                            </ul>
                        </div>
                      </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-md-6">
                            <div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url({{asset('website')}}/images/blog/1by1/04.jpg); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                      <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
                        <div class="w-100 mt-auto">
                            <!-- Card category -->
                            <a href="#" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                            <!-- Card title -->
                          <h4 class="text-white"><a href="post-single-4.html" class="btn-link stretched-link text-reset">15 reasons to choose startup</a></h4>
                          <!-- Card info -->
                            <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                <li class="nav-item position-relative">
                                <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Amanda</a>
                                    </div>
                                </li>
                                <li class="nav-item">Jan 28, 2021</li>
                            </ul>
                        </div>
                      </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main hero END -->
    <!-- =======================
    Main content START -->
    <section class="position-relative">
        <div class="container" data-sticky-container>
            <div class="row">
                <!-- Main Post START -->
                <div class="col-lg-12">
                    <!-- Title -->
                    <div class="mb-4">
                        <h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
                        <p>Latest breaking news, pictures, videos, and special reports</p>
                    </div>
                    <div class="row gy-4">
                        <!-- Card item START -->
                        <div class="col-sm-4">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{asset('website')}}/images/blog/4by3/01.jpg" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h4>
                                    <p class="card-text">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="{{asset('website')}}/images/avatar/01.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Jan 22, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-sm-4">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{asset('website')}}/images/blog/4by3/06.jpg" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay Top -->
                                        <div class="w-100 mb-auto d-flex justify-content-end">
                                            <div class="text-end ms-auto">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-white-soft bg-blur text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                            </div>
                                        </div>
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">Dirty little secrets about the business industry</a></h4>
                                    <p class="card-text">Place voice no arises along to. Parlors waiting so against me no. Wishing calling is warrant settled was lucky. Express besides it present if at an opinion visitor.</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="{{asset('website')}}/images/avatar/02.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Mar 07, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-sm-4">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{asset('website')}}/images/blog/4by3/03.jpg" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Gadgets</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">Bad habits that people in the industry need to quit</a></h4>
                                    <p class="card-text">For who thoroughly her boy estimating conviction. Removed demands expense account in outward tedious do. Particular way thoroughly unaffected</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="{{asset('website')}}/images/avatar/03.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Jun 17, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-sm-4">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{asset('website')}}/images/blog/4by3/04.jpg" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">Around the web: 20 fabulous infographics about business</a></h4>
                                    <p class="card-text">Projection favorable Mrs can be projecting own. Thirty it matter enable become admire in giving. See resolved goodness felicity shy civility domestic had but.</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <div class="avatar-img rounded-circle bg-success">
                                                            <span class="text-white position-absolute top-50 start-50 translate-middle fw-bold small">SL</span>
                                                        </div>
                                                    </div>
                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Billy</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Dec 29, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-sm-4">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{asset('website')}}/images/blog/4by3/05.jpg" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay Top -->
                                        <div class="w-100 mb-auto d-flex justify-content-end">
                                            <div class="text-end ms-auto">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-white-soft bg-blur text-white rounded-circle" title="This post has audio"><i class="fas fa-volume-up"></i></div>
                                            </div>
                                        </div>
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h4>
                                    <p class="card-text">Drawings offended yet answered Jennings perceive laughing six did far. Rooms oh fully taken by worse do. Points afraid but may end law lasted. </p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="{{asset('website')}}/images/avatar/05.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Jacqueline</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Nov 11, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-sm-4">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{asset('website')}}/images/blog/4by3/12.jpg" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">5 investment doubts you should clarify</a></h4>
                                    <p class="card-text">Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack highest enabled. Tried law yet style child. The bore of true of no be deal.</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="{{asset('website')}}/images/avatar/06.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Carolyn</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Sep 01, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Load more START -->
                        <div class="col-12 text-center mt-5">
                            <button type="button" class="btn btn-primary-soft">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
                        </div>
                        <!-- Load more END -->
                    </div>
                </div>
                <!-- Main Post END -->
                
            </div> <!-- Row end -->
        </div>
    </section>
    <!-- =======================
    Main content END -->
    
    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
