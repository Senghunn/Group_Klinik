
@extends('master')
@section('content')
    


{{-- =================================================================================== --}}



@include('partials.banner')







<!-- Service Start -->
@include('partials.services')
<!-- Service End -->



<!-- Appointment Start -->
@include('partials.appointment')
<!-- Appointment End -->


<!-- Testimonial Start -->
@include('partials.testimonial')
<!-- Testimonial End -->



{{-- ================================================================================================= --}}

@endsection