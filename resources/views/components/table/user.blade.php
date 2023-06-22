<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Index</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $item)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
            </tr>
        @empty
            <span class="text-danger">Data not available</span>
        @endforelse
    </tbody>
</table>
