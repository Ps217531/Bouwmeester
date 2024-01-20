<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create material
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between items-center p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold">Create material</h1>
                    <a href="{{ route('materials.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('materials.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">name:</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="avaibility" class="block text-gray-700 text-sm font-bold mb-2">avaibility:</label>
                            <input type="number" name="avaibility" id="avaibility" value="{{ old('avaibility') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('avaibility')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="location" class="block text-gray-700 text-sm font-bold mb-2">location:</label>
                            <input name="location" id="location" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('location') }}</textarea>
                            @error('location')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="cost_per_unit" class="block text-gray-700 text-sm font-bold mb-2">cost per unit:</label>
                            <input type="text" name="cost_per_unit" id="cost_per_unit" value="{{ old('cost_per_unit') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('cost_per_unit')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    

                        {{-- <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author:</label>
                        <select name="author" id="author" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}" {{ old('author') == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                            @endforeach
                        </select>

                        <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                        <select name="category" id="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select> --}}
                        <div class="flex items-center justify-end">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
                        </div>
                        {{-- author and category --}}
                        <div class="mb-4">
                 
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>