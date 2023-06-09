<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Index</th>
            <th scope="col">Location Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($locations as $item)
            <tr>
                <th scope="row">{{ $loop->index }}</th>
                <td>{{ $item->name }}</td>
                <td class="d-flex flex-row float-right gap-3">
                    {{-- edit   --}}
                    <a class="btn btn-sm btn-success mr-2" href="@route('admin.location.edit', $item->id)"><span
                            class="material-symbols-outlined">
                            edit_square
                        </span></a>
                    {{-- delete --}}
                    <form action="@route('admin.location.update', $item->id)" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"><span class="material-symbols-outlined">
                                delete
                            </span></button>
                    </form>
                </td>
            </tr>
        @empty
            <span class="text-danger">Data not available</span>
        @endforelse
    </tbody>
</table>
