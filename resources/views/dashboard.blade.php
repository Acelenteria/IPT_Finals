@extends('base')

@section('content')
<div class="bg-gray-50 flex items-center justify-center">
    <div class="container flex flex-col md:flex-row items-center justify-between px-5 text-gray-700">
        <div class="w-full lg:w-1/2 mx-8">
            <div class="text-7xl text-blue-500 font-dark font-extrabold mb-8">Event IT Solutions</div>
            <p class="text-2xl md:text-3xl font-light leading-normal mb-8">
                "Empowering Excellence through Event IT Solutions: Where Innovation Meets Impeccable Execution."
            </p>
            {{-- <a href="/login" class="px-5 inline py-3 text-sm font-medium leading-5 shadow-2xl text-white transition-all duration-400 border border-transparent rounded-lg focus:outline-none bg-green-600 active:bg-green-700 hover:bg-green-800">Get Started</a> --}}
        </div>
        <div class="w-full h-full lg:flex lg:justify-end lg:w-1/2 mx-5 my-12">
            <img src="https://i.pinimg.com/564x/8c/38/77/8c3877b931b1667e0f94438a7cf252fe.jpg" class="float-right" alt="Image">
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header bg-primary text-dark">
                    <a href="{{ route('events.index') }}" class="text-white text-3xl text-blue-500 font-dark font-extrabold mb-8" style="text-decoration: none;">EVENTS</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title font-bold ">Total number of Events</h5>
                    <p class="card-text">{{ $eventCount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
