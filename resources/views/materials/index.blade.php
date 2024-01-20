<x-app-layout>


    @if (session('success'))
    <script>
        .success('{{ session('success') }}', 'Event');
    </script>
    @endif
    @if (session('error'))
    <script>
        toastr.error('{{ session('error') }}', 'Event');
    </script>
    @endif
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Materials
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex justify-between items-center p-6 bg-white border-b border-gray-200">
                        <h1 class="text-2xl font-bold">Materials</h1>
                        <a href="{{ route('materials.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="text-left">Name</th>
                                    <th class="text-left">Avaibility</th>
                                    <th class="text-left">Location</th>
                                    <th class="text-left">Cost per unit Date</th>
                                    <th class="text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($materials as $material)
                                    <tr>
                                        <td>{{ $material->title }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($material->name, 50) }}</td>
                                      
                                            <td>
                                                {{-- @if ($projects->project)
                                                @foreach ($project->materials as $material)
                                                {{ $material->name }}
                                            @endforeach     
                                                @endif --}}
                                            </td>
                                            
                                      
                                      
                                        <td>{{ $material->cost_per_unit }}</td>
                                        <td class="flex py-10">
                                            <a href="{{ route('materials.show', $material->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                <i class=" text-white fa-solid fa-eye fa-xl"></i>
                                            
                                            </a>
                                            <a href="{{ route('materials.edit', $material->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                                <i class=" text-white fa-solid fa-pen-to-square fa-xl"></i>
                                            </a>
                                            <form action="{{ route('materials.destroy', $material->id) }}" onsubmit="return confirm('Weet je zeker dat je het artikel wilt verwijderen? U verwijderd ook de bijbehorende authors en categoriën:');" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                    <i class="text-white fa-xl fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
    </x-app-layout>