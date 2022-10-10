<x-app title="Animals |">
    <div class="container">
        <div class="col-md-5">
            <h1>Ketik Peliharaanmu</h1>
            {{-- {{ print_r($errors->all()) }} --}}
            <form class="d-flex gap-2" action="{{ route('animals.store') }}" method="post">
                @csrf
                <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text"
                    name="name" placeholder="isi hewan kesukaanmu">
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <h1 class="mt-4">list Animals</h1>
        <ul style="list-style: none">
            @foreach ($animals as $index => $animal)
                <li class="mb-3">{{ $index + 1 }}. {{ $animal->name }}
                    <div class="d-flex gap-2">
                        <a class="btn btn-warning" href="{{ route('animals.edit', $animal->id) }}">Edit</a>
                        <form action="{{ route('animals.destroy', $animal->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app>
