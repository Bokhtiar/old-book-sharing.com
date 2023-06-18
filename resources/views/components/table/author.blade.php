<section class="card">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Indexing</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Body</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $author->name }}</td>
                    <td><img src="{{ asset($author->image) }}" height="80px" width="80px" alt=""> </td>
                    <td>{{ $author->body }}</td>
                    
                    <td class="d-flex flex-row float-right gap-3">
                        {{-- edit   --}}
                        <a class="btn btn-sm btn-success mr-2" href="@route('admin.author.edit', $author->id)"><span
                                class="material-symbols-outlined">
                                edit_square
                            </span></a>

                        {{-- view --}}
                        <a href="@route('admin.author.show', $author->id)" class="btn btn-sm btn-success mr-2"><span class="material-symbols-outlined">
                            visibility
                            </span></a>
                        {{-- delete --}}
                        <form action="@route('admin.author.destroy', $author->id)" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"><span class="material-symbols-outlined">
                                    delete
                                </span></button>
                        </form>
                    </td>

                     </tr>
            @endforeach
        </tbody>
    </table>
</section>
