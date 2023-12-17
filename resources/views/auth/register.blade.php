@extends('base')

@section('content')


    <div class="min-w-screen min-h-screen bg-gray-50 flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
            <div class="md:flex w-full">
                <div class="w-full md:w-1/2 flex justify-center items-center bg-green-500">
                    <img src="https://i.pinimg.com/736x/ba/dc/1f/badc1fb3d1a0b06ec5e3e62da0150ed4.jpg">
                </div>
                <div class="card-body p-4">
                    <form action="{{ url('/register') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="card-header text-center  text-light">
                            <h1 class="font-bold text-3xl text-blue-900">REGISTER</h1>
                        </div>
                        <div class="form-group mb-3">
                            <label for="name" class="mb-1">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="mb-1">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="mb-1">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password_confirmation" class="mb-1">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <button type="submit" class="block w-full max-w-xs mx-auto bg-blue-500 hover:bg-blue-700 focus:bg-blue-700 text-white rounded-lg px-3 py-3 font-semibold" type="submit">Create Account</button>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="{{ url('/') }}" class="inline-flex  items-center font-bold text-blue-500 hover:text-blue-700 text-xs text-center">Already Registered?</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

<style scoped>

</style>
