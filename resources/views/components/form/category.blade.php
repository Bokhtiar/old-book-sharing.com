<div>
    @if (@$edit)
        <form action="@route('admin.category.update', @$edit->id)" method="POST">
            @method('PUT')
            @csrf
        @else
            <form action="@route('admin.category.store')" method="POST">
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
