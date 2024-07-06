@extends('layouts.private.index')

@section('container')

<section class="py-5">
    <a href="/dashboard/contacts" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Back To Home Setting</a>
    <div class="container px-5">
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondaryy text-white mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Get in touch</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="form-floating mb-3">
                            <input class="form-control pt-0 pb-0" id="name" type="text" value="{{ $contact->name }}" readonly/> 
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control pt-0 pb-0" id="email" type="email" value="{{ $contact->email }}" readonly/>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control pt-0 pb-0" id="phone" type="tel" value="{{ $contact->phonenumber }}" readonly />
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message_user" placeholder="{{ $contact->message }}" style="height: 10rem" readonly></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
