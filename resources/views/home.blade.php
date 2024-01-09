@extends('layouts.app')
@section('css')

<style>

    body {
        padding-top: 56px;
    }

    #main {
        margin-top: 56px;
    }

</style>
@endsection
@section('content')
<main id="main">
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2></h2>
                <p>Steps for a complete understanding of your career</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Personalized Career Assessments</a></h4>
                        <p>In-depth assessments to identify your skills, interests, and values, laying the foundation
                            for targeted career exploration.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">One-on-One Counseling Sessions</a></h4>
                        <p>Individualized sessions with experienced career counselors to address your specific needs,
                            challenges, and aspirations.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Resume Building Assistance</a></h4>
                        <p>Expert guidance in crafting a compelling and professional resume that highlights your
                            strengths and accomplishments.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">Interview Preparation</a></h4>
                        <p>Comprehensive preparation for job interviews, including mock interviews, feedback, and
                            strategies to enhance your confidence.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Job Search Strategies</a></h4>
                        <p>Proven strategies and techniques to optimize your job search, including effective use of
                            online platforms and networking.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Holistic Career Roadmap</a></h4>
                        <p>Development of a personalized career roadmap considering your skills, interests, and
                            long-term goals for a sustainable and fulfilling career.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- Add this modal code within your HTML body -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel"  style="font-weight: 600; color: darkblue;">Hi {{auth()->user()->name}},</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div >
                        <h3 style="display:flex; justify-content:center;">Why are you here ?</h3>
                        <p style="display:flex; justify-content:center;">Help us to personalize your journey by understanding you better.</p>
                    </div>
                    <form id="pointsForm">
                        <label>
                            <input type="checkbox" name="point1" value="Point 1"> Point 1
                        </label>
                        <br>
                        <!-- Add more checkboxes or other input elements as needed -->
                    </form>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="button" class="btn btn-primary btn-sm" onclick="submitPoints()">Submit</button>
                </div>
            </div>
        </div>
    </div>

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
