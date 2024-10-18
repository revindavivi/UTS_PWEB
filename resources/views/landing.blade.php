@extends('components.template')
@section('title', 'Landing Page')

@section('content')
    <div class="min-h-screen bg-gradient-to-r from-blue-100 to-blue-300 flex flex-col justify-center items-center">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-900 mb-4 animate-bounce">Welcome to Contact App</h1>
            <p class="text-xl text-gray-700 mb-6">Manage your contacts efficiently and with ease.</p>
            <a href=/login class="bg-blue-500 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-blue-600 transition duration-300">Login to Get Started</a>
        </div>



        <footer class="bg-gray-200 w-full mt-12 p-4 text-center">
            <p class="text-gray-600">&copy; {{ date('Y') }} Contact App. All Rights Reserved.</p>
        </footer>
    </div>
@endsection
