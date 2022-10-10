<x-app title="Home |">
    <div class="container">
        <div class="col-md-5">
            <h2>Todolist Edit</h2>
            <form action="{{ route('tasks.update', $tasks->id) }}" method="post">
                @method('put')
                @csrf
                <input type="text" name="list" class="form-control" value="{{ $tasks->list }}"
                    placeholder="Coba lu tulis apa aja deh!">
                <button class="btn btn-primary mt-2" type="submit">Update</button>
            </form>
        </div>
    </div>
</x-app>
