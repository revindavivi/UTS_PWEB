@extends('components.template')
@section('title', 'Daftar')

@section('content')
    <div class="flex justify-center items-center h-screen bg-gradient-to-r from-green-100 to-blue-200">
        <div class="w-full max-w-md bg-white rounded-lg shadow-xl p-8 transform hover:scale-105 transition duration-300">
            <h2 class="text-3xl font-bold text-center text-indigo-600 mb-6">Daftar Akun Baru</h2>
            <p class="text-center text-gray-500 mb-8">Isi data berikut untuk membuat akun.</p>

            <form method="POST" action="{{ route('processRegister') }}">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 font-semibold mb-2">Nama Pengguna</label>
                    <input type="text" id="username" name="username"
                        class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nama pengguna" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan email" required>
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Kata Sandi</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan kata sandi" required>
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:from-indigo-600 hover:to-blue-600 transform hover:translate-y-1 transition duration-300">
                        Daftar
                    </button>
                </div>
            </form>

            <p class="text-center mt-4 text-gray-600">Sudah punya akun? <a href="/login" class="text-blue-600 underline hover:text-blue-800 transition duration-300">Masuk disini</a></p>
        </div>
    </div>
@endsection
