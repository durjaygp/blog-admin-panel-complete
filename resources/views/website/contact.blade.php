@extends('layouts.website')
@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section>
	<div class="container">
		<div class="row">
      <div class="col-md-9 mx-auto text-center">
        <h1 class="display-4">Contact us</h1>
        <!-- breadcrumb -->
        <nav class="d-flex justify-content-center" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dots mb-0">
            <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house me-1"></i> Home</a></li>
            <li class="breadcrumb-item active">Contact us</li>
          </ol>
        </nav>      
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Contact info START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-xl-9 mx-auto">
        
        
        
        <hr class="my-5">
        
        <div class="row">
          <div class="col-12">
          <h2>Contact us</h2>
          <p>Please fill in the form below and we will contact you very soon. Your email address will not be published.</p>
          <!-- Form START -->
          <form class="contact-form" id="contact-form" name="contactform" method="POST">
            <!-- Main form -->
            <div class="row">
              <div class="col-md-6">
                <!-- name -->
                <div class="mb-3">
                  <input required id="con-name" name="name" type="text" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="col-md-6">
                <!-- email -->
                <div class="mb-3">
                  <input required id="con-email" name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
              </div>
              <div class="col-md-12">
                <!-- Subject -->
                <div class="mb-3">
                  <input required id="con-subject" name="subject" type="text" class="form-control" placeholder="Subject">
                </div>
              </div>
              <div class="col-md-12">
                <!-- Message -->
                <div class="mb-3">
                  <textarea required id="con-message" name="message" cols="40" rows="6" class="form-control" placeholder="Message"></textarea>
                </div>
              </div>
              <!-- submit button -->
              <div class="col-md-12 text-start"><button class="btn btn-primary w-100" type="submit">Send Message</button></div>
            </div>
          </form>
			  	<!-- Form END -->
          </div>
        </div>
      </div>  <!-- Col END -->
     </div>
  </div>
</section>
<!-- =======================
Contact info END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
@endsection