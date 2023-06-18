<div>
    @if (@$edit)
        <form action="@route('admin.category.update', @$edit->id)" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
        @else
            <form action="@route('admin.category.store')" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
    @endif
    @component('components.input', [
        'label' => 'Category name',
        'name' => 'name',
        'placeholder' => 'type here category name',
        'value' => @$edit ? @$edit->name : '',
        'required' => true,
    ])
    @endcomponent 

    @component('components.input', [
        'label' => 'Category image',
        'name' => 'image',
        'placeholder' => '',
        'type' => 'file',
        'value' => @$edit ? @$edit->name : '',
        'required' => true,
    ])
    @endcomponent 

    <div class="form-group my-2">
        <label for="">Placement</label>
        <select name="status" class="form-control" id="">
            <option value="normle">Normale category</option>
            <option value="home">Home category</option>
            <option value="exam">Exam category</option>
        </select>
       
    </div>

    {{-- button --}}
    @if (@$edit)
        @component('components.primary-button', [
            'name' => 'Category update',
        ])
        @endcomponent
    @else
        @component('components.primary-button', [
            'name' => 'Category Save',
        ])
        @endcomponent
    @endif

    </form>

</div>
