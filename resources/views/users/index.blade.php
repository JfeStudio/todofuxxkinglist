<x-app title="Users |">
    <div class="container">
        <div class="col-md-5">
            <form class="d-flex gap-2" action="{{ route('users.store') }}" method="post">
                @csrf
                <input type="text" class="form-control" name="name" placeholder="isi deh nama lu!">
                {{-- <input type="text" class="form-control" name="username" placeholder="isi deh username lu!"> --}}
                <button class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="col-md-5 mt-5">
            <h1>list users</h1>
            <ul style="list-style: none" class="p-0">
                @foreach ($users as $index => $user)
                    <li class="d-flex align-items-center gap-3 mt-2">{{ $index + 1 }}.
                        <a href="{{ route('users.show', $user->username) }}">{{ $user->name }}</a>
                        <div class="d-flex align-items-center gap-2">
                            <a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
