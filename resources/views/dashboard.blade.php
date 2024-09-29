<x-app-layout>


    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('article.list') }}" class="m-4 " style="color:#0096FF;">Articles</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}
                <h1 class="text-start m-3 fs-3">User List Page</h1>

                <table class="table m-4">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userList as $l)
                            <tr>
                                <td>{{ $l->id }}</td>
                                <td>{{ $l->name }}</td>
                                <td>{{ $l->email }}</td>
                                <td>USA</td>
                                <td>
                                    <a href="" class="btn btn-outline-primary">Edit</a>
                                    <a href="" class="btn btn-outline-warning">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
