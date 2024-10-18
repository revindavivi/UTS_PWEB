@extends('components.template')
@section('title', 'Homepage')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-6">Selamat Datang di Contact App</h1>
        <p class="text-center text-gray-600 mb-8">Atur kontakmu dengan mudah dan cepat melalui platform yang simpel ini.</p>

        <div class="flex justify-center">
            <table class="min-w-full bg-white border border-gray-300 shadow-lg rounded-lg overflow-hidden">
                <thead class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white">
                    <tr>
                        <th class="px-6 py-4 border-b border-gray-200">No.</th>
                        <th class="px-6 py-4 border-b border-gray-200">Name</th>
                        <th class="px-6 py-4 border-b border-gray-200">Email</th>
                        <th class="px-6 py-4 border-b border-gray-200">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="hover:bg-gray-100 transition ease-in-out duration-200">
                            <td class="px-6 py-4 border-b border-gray-300 text-center">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 border-b border-gray-300">{{ $contact['name'] }}</td>
                            <td class="px-6 py-4 border-b border-gray-300">{{ $contact['email'] }}</td>
                            <td class="px-6 py-4 border-b border-gray-300">{{ $contact['phone'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    
    </div>
@endsection
