<x-app title="Details Users |">
    <div class="container">
        <div class="col-md-7 mt-5">
            <h1>Details User</h1>
            <ul style="list-style: none" class="p-0">
                <h2 class="text-danger">- {{ $user->name }} - <small
                        class="text-secondary">{{ $user->username }}</small>
                </h2>

            </ul>
        </div>
    </div>
</x-app>
