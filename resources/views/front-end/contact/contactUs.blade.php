@extends('front-end.master')

@section('title')
    Contact Us
@endsection

@section('body')
    <!-- contact -->
    <div class="contact py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>C</span>ontact
                <span>U</span>s
            </h3>
            <!-- //tittle heading -->
            <div class="row contact-grids agile-1 mb-5">
                <div class="col-sm-4 contact-grid agileinfo-6 mt-sm-0 mt-2">
                    <div class="contact-grid1 text-center">
                        <div class="con-ic">
                            <i class="fas fa-map-marker-alt rounded-circle"></i>
                        </div>
                        <h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Address</h4>
                        <p>Sector#11, Uttara; Dhaka-1230
                            <label>Bangladesh.</label>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 contact-grid agileinfo-6 my-sm-0 my-4">
                    <div class="contact-grid1 text-center">
                        <div class="con-ic">
                            <i class="fas fa-phone rounded-circle"></i>
                        </div>
                        <h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Call Us</h4>
                        <p>+880 1686313821
                            <label>+880 17575433575</label>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 contact-grid agileinfo-6">
                    <div class="contact-grid1 text-center">
                        <div class="con-ic">
                            <i class="fas fa-envelope-open rounded-circle"></i>
                        </div>
                        <h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
                        <p>
                            <a href="mailto:info@example.com">rafiqislam319@gmail.com</a>
                            <label>
                                <a href="mailto:info@example.com">saddam@gmail.com</a>
                            </label>
                        </p>
                    </div>
                </div>
            </div>
            <!-- form -->
            <form action="#" method="post">
                <div class="contact-grids1 w3agile-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 contact-form1 form-group">
                            <label class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="Name" placeholder="" required="">
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form1 form-group">
                            <label class="col-form-label">E-mail</label>
                            <input type="email" class="form-control" name="Email" placeholder="" required="">
                        </div>
                    </div>
                    <div class="contact-me animated wow slideInUp form-group">
                        <label class="col-form-label">Message</label>
                        <textarea name="Message" class="form-control" placeholder="" required=""> </textarea>
                    </div>
                    <div class="contact-form">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
            <!-- //form -->
        </div>
    </div>
    <!-- //contact -->

    <!-- map -->
    <div class="map mt-sm-0 mt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805196.5077734194!2d144.49270863101745!3d-37.97015423820711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1474020956974"
                allowfullscreen></iframe>
    </div>
    <!-- //map -->
@endsection
