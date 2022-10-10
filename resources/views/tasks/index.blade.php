<x-app title="Tasks |">
    <div class="container">
        <div class="col-md-5">
            <h2>Todolist</h2>
            <form action="{{ route('tasks.store') }}" method="post">
                @csrf
                <input type="text" name="list" class="form-control" placeholder="Coba lu tulis apa aja deh!">
                <button class="btn btn-primary mt-2" type="submit">Add</button>
            </form>
        </div>
        <div class="col-md-5 mt-5">
            <ul style="list-style: none" class="p-0">
                @foreach ($tasks as $index => $task)
                    <li class="d-flex align-items-center gap-3">{{ $index + 1 }}.<a href="#">
                            {{ $task->list }}</a>
                        <div class="d-flex gap-2">
                            <a class="btn btn-warning" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app>
