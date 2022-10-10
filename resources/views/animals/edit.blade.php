<x-app title="Animals |">
    <div class="container">
        <div class="col-md-5">
            <h1>Ketik Peliharaanmu</h1>
            <form class="d-flex gap-2" action="{{ route('animals.update', $animals->id) }}" method="post">
                @csrf
                @method('PUT')
                <input class="form-control @error('name')
                    is-invalid
                @enderror"
                    type="text" name="name" value="{{ old('name') ?? $animals->name }}"
                    placeholder="isi hewan kesukaanmu">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            @foreach ($errors->all() as $error)
                <span class="text-danger">{{ $error }}</span>
            @endforeach
        </div>
    </div>
</x-app>
