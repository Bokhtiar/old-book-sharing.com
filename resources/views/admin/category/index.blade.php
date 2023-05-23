@extends('layouts.admin.app')
@section('admin_container')
    <section class="">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->name }}</td>
                        <td class="d-flex flex-row float-right gap-3">
                            {{-- edit   --}}
                            <a class="btn btn-sm btn-success mr-2" href="@route('admin.category.edit', $item->id)"><span class="material-symbols-outlined">
                                    edit_square
                                </span></a>
                            {{-- delete --}}
                            <form action="">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-sm btn-danger"><span class="material-symbols-outlined">
                                delete
                                </span></button>
                            </form>

                            {{-- <div class="d-flex flex-row">
                              <div class="p-2">Flex item 1</div>
                              <div class="p-2">Flex item 2</div>
                              <div class="p-2">Flex item 3</div>
                            </div> --}}

                        </td>

                    </tr>
                @empty
                    <span class="text-danger">Data not available</span>
                @endforelse
            </tbody>
        </table>
    </section>
@endsection
