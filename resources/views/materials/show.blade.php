<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $material->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold">{{ $material->title }}</h1>
                    <br>
                    <p class="text-gray-600">{{ $material->sub_title }}</p>
                    <br>
                    <p class="text-gray-600">{!! $material->content !!}</p>
                   

                    <img src="{{ $material->image_url }}" alt="" class="my-4 object-cover w-full">
                    <p></p>
                    <p class="text-gray-600">project: </p>
                    {{-- @foreach ($projects as $project)
                    <li class="mb-2">
                        {{ $project->name }}
                        <form action="{{ route('projects.detachproject', ['material' => $material->id, 'project' => $project->id]) }}" method="post">
                            @method('delete')
                            @csrf
                            <div class="flex items-center">
                                <input type="hidden" name="projectId" value="{{ $project->id }}">
                                <button type="submit" class="ml-3">
                                    <i class="fas fa-trash text-red-500"></i>
                                    <!-- Font Awesome trash can icon -->
                                </button>
                            </div>
                        </form>
                    </li>
                    @endforeach --}}

                    {{-- <form action="{{ route('projects.detachAllprojects', ['material' => $material->id]) }}"
                        method="post"
                        onsubmit="return confirm('Weet je zeker dat je alle projects wilt verwijderen?');">
                        @method('delete')
                        @csrf --}}

                        <button class="ml-3 bg-red-500 hover:bg-red-800">
                            Verwijder alle auteurs
                        </button>

        </form>
                  

       

                    <p class="text-gray-600">Publication Date: {{ $material->publication_date }}</p>
                    <div class="mt-4">
                        <a href="{{ route('materials.edit', $material->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="{{ route('materials.destroy', $material->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>