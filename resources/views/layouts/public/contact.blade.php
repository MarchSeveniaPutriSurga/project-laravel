@extends('layouts.public.app')

@section('content')
    <section class="py-5">
        <div class="container px-5">
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
            {{ session('success') }}
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
            <!-- Contact form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5" data-aos="fade-tada" data-aos-delay="200" data-aos-duration="1000">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Get in touch</h1>
                    <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                </div>
                <div class="row gx-5 justify-content-center" data-aos="fade-tada" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-lg-8 col-xl-6">
                        <form method="POST" action="{{ route('contactsend') }}">
                            @csrf
                            {{-- <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control pt-0 pb-0" id="name" type="text" value="{{ $contacts->name }}" readonly/> 
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control pt-0 pb-0" id="email" type="email" value="{{ $contacts->email }}" readonly/>
                                
                                <!-- <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control pt-0 pb-0" id="phone" type="tel" value="{{ $contacts->phonenumber }}" readonly />
                            </div> --}}

                            <div class="form-floating mb-3">
                                <input name="name" class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input name="email" class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input name="phonenumber" class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message_user" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>
@endsection