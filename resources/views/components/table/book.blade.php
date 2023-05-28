@component('components.breadcrumbs', [
    'name' => 'All book',
])
@endcomponent

<section class="card">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Indexing</th>
                <th scope="col">User Name</th>
                <th scope="col">Title</th>
                <th scope="col">ISBN</th>
                <th scope="col">Author</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $book->user->name }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->ISBN }}</td>
                    <td>{{ $book->author }}</td>
                    <td><img src="{{ asset($book->image) }}" height="80px" width="80px" alt=""> </td>
                    <td>

                        @if ($book->status == 1)
                            <a class="btn btn-info btn-sm" href="{{ url('admin/book/status', $book->id) }}">Active</a>
                        @else
                            <a class="btn btn-danger btn-sm"
                                href="{{ url('admin/book/status', $book->id) }}">Inactive</a>
                        @endif
                    </td>
                    <td>
                        <a href="@route('admin.book.edit', $book->id)" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{ url('admin/book/view', $book->id) }}" class="btn btn-sm btn-success">View</a>
                        <a href="{{ url('admin/book/delete', $book->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
