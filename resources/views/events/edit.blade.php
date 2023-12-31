@extends('base')

@section('content')
<div class="text-end">
    <a href="{{ route('events.index') }}" class="btn btn-primary mr-5 mt-2">Back</a>
</div>
<div class="container p-4 sm:p-6 max-w-xl bg-blue-800">
    <div class="bg-white rounded-lg shadow-xl p-6">
        <form action="{{ route('events.update', $event->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="flex flex-wrap">
                <div class="">
                    <label for="location" class="block text-gray-700 text-sm font-semibold">Event</label>
                    <div class="p-2 bg-gray-100 rounded-md">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $event->name }}" required>
                    </div>
                </div>

                <div class="ml-5">
                    <label for="guest" class="block text-gray-700 text-sm font-semibold">Date</label>
                    <div class="p-2 bg-gray-100 rounded-md">
                        <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}" required>
                    </div>
                </div>

            </div>

            <div>
                <label for="location" class="block text-gray-700 text-sm font-semibold">Location</label>
                <div class="p-2 bg-gray-100 rounded-md">
                    <input type="text" class="form-control" id="location" name="location" value="{{ $event->location }}" required>
                </div>
            </div>

            <div>
                <label for="guest" class="block text-gray-700 text-sm font-semibold">Guest</label>
                <div class="p-2 bg-gray-100 rounded-md">
                    <input type="text" class="form-control" id="guest" name="guest" value="{{ $event->guest }}" required>
                </div>
            </div>

            <div>
                <label for="type" class="block text-gray-700 text-sm font-semibold">Type</label>
                <div class="p-2 bg-gray-100 rounded-md">
                    <input type="text" class="form-control" id="type" name="type" value="{{ $event->type }}" required>
                </div>
            </div>

            <div>
                <label for="description" class="block text-gray-700 text-sm font-semibold">Description</label>
                <div class="p-2 bg-gray-100 rounded-md">
                    <input type="text" class="form-control" id="description" name="description" value="{{ $event->description }}" required>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-md">Update Event</button>
            </div>
        </form>
    </div>
</div>
@endsection
