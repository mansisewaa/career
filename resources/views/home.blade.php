@extends('layouts.app')
@section('css')

<style>

    body {
        padding-top: 56px;
    }

    #main {
        margin-top: 56px;
    }
/*--------------------------------------------------------------
# Tabs
--------------------------------------------------------------*/
.tabs .nav-tabs {
  border: 0;
}

.tabs .nav-link {
  border: 1px solid #b9b9b9;
  padding: 15px;
  transition: 0.3s;
  color: #111111;
  border-radius: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.tabs .nav-link i {
  padding-right: 15px;
  font-size: 48px;
}

.tabs .nav-link h4 {
  font-size: 18px;
  font-weight: 600;
  margin: 0;
}

.tabs .nav-link:hover {
  color: #e03a3c;
}

.tabs .nav-link.active {
  background: #e03a3c !important;
  color: #fff  !important;
  border-color: #e03a3c  !important;
}

@media (max-width: 768px) {
  .tabs .nav-link i {
    padding: 0;
    line-height: 1;
    font-size: 36px;
  }
}

@media (max-width: 575px) {
  .tabs .nav-link {
    padding: 15px;
  }

  .tabs .nav-link i {
    font-size: 24px;
  }
}

.tabs .tab-content {
  margin-top: 30px;
}

.tabs .tab-pane h3 {
  font-weight: 600;
  font-size: 26px;
}

.tabs .tab-pane ul {
  list-style: none;
  padding: 0;
}

.tabs .tab-pane ul li {
  padding-bottom: 10px;
}

.tabs .tab-pane ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #e03a3c;
}

.tabs .tab-pane p:last-child {
  margin-bottom: 0;
}

.testimonials .testimonial-item {
  box-sizing: content-box;
  min-height: 200px;
  position: relative;
  margin: 30px;
}

.testimonials .testimonial-item .testimonial-img {
  width: 90px;
  height: 90px;
  border-radius: 50px;
  border: 6px solid var(--background-color);
  margin-right: 10px;
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 0;
}

.testimonials .testimonial-item h4 {
  color: rgba(var(--default-color-rgb), 0.5);
  font-size: 14px;
  margin: 0;
}

.testimonials .testimonial-item .stars {
  margin: 10px 0;
}

.testimonials .testimonial-item .stars i {
  color: #ffc107;
  margin: 0 1px;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
  color: rgba(var(--primary-color-rgb), 0.4);
  font-size: 26px;
  line-height: 0;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  transform: scale(-1, -1);
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 15px auto 15px auto;
}

.testimonials .swiper-wrapper {
  height: auto;
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  margin-bottom: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 10px;
  height: 10px;
  background-color: rgba(var(--default-color-rgb), 0.15);
  opacity: 1;
  border: none;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--primary-color);
}

@media (max-width: 767px) {

  .testimonials .testimonials-carousel,
  .testimonials .testimonials-slider {
    overflow: hidden;
  }

  .testimonials .testimonial-item {
    margin: 15px;
  }
}
</style>
@endsection
@section('content')
<main id="main">
    <section id="tabs" class="tabs">
        <div class="container aos-init aos-animate" data-aos="fade-up">
  
          <ul class="nav nav-tabs row d-flex" role="tablist">
            <li class="nav-item col-4" role="presentation">
              <a class="nav-link show active" data-bs-toggle="tab" data-bs-target="#tab-1" aria-selected="true" role="tab">
                <i class="ri-gps-line"></i>
                <h4 class="d-none d-lg-block">Book an appointment directly</h4>
              </a>
            </li>
            <li class="nav-item col-4" role="presentation">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2" aria-selected="false" role="tab" tabindex="-1">
                <i class="ri-body-scan-line"></i>
                <h4 class="d-none d-lg-block">Take Assessment</h4>
              </a>
            </li>
          </ul>
  
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1" role="tabpanel">
              <div class="row">
                <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                  <p>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</p>
                  <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="d-flex">
                          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                          <div>
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                          </div>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                </div>
                </div>
               
              </div>
            </div>
            <div class="tab-pane" id="tab-2" role="tabpanel">
              <div class="row">
                <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
                  <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </p>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3" role="tabpanel">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                  <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </p>
                  <ul>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  </ul>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4" role="tabpanel">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                  <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </p>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="assets/img/tabs-4.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section>

    
</main><!-- End #main -->
@endsection

@section('js')

    <script>
        // Function to handle the submission of selected points
        function submitPoints() {
            // Get the form data
            var formData = $("#pointsForm").serializeArray();

            // You can perform additional actions with the form data, such as sending it to the server

            // Close the modal
            $("#myModal").modal("hide");
        }

        function closeModal() {
        $('#myModal').modal('hide');
        }

        // Open the modal on page load
        $(document).ready(function () {
            $("#myModal").modal("show");
        });
    </script>
@endsection
