<table class="table table-striped">
  <thead>
      <tr>
          <th scope="col">Index</th>
          <th scope="col">Category Name</th>
          <th scope="col">Category status</th>
          <th scope="col">Category Image</th>
          <th scope="col">Action</th>
      </tr>
  </thead>
  <tbody>
      @forelse ($categories as $item)
          <tr>
              <th scope="row">{{ $loop->index }}</th>
              <td>{{ $item->name }}</td>
              <td>{{ $item->status }}</td>
              <td><img src="{{ asset($item->image) }}" height="64px" width="48px" alt=""></td>
              <td class="d-flex flex-row float-right gap-3">
                  {{-- edit   --}}
                  <a class="btn btn-sm btn-success mr-2" href="@route('admin.category.edit', $item->id)"><span
                          class="material-symbols-outlined">
                          edit_square
                      </span></a>
                  {{-- delete --}}
                  <form action="@route('admin.category.update', $item->id)" method="POST">
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