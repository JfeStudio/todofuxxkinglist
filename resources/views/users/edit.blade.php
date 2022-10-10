<x-app title="Users |">
    <div class="container">
        <div class="col-md-5 mt-5">
            <h1>Edit users</h1>
            <div class="d-flex align-items-center gap-2">
                <form action="{{ route('users.update', $users->id) }}" method="post">
                    @csrf
                    @method('put')
                    <input type="text" class="form-control" name="name" value="{{ $users->name }}">
                    <button class="btn btn-danger" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app>
