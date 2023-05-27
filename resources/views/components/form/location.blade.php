<div>
    @if (@$edit)
        <form action="@route('admin.location.update', @$edit->id)" method="POST">
            @method('PUT')
            @csrf
        @else
            <form action="@route('admin.location.store')" method="POST">
                @method('POST')
                @csrf
    @endif
    @component('components.input', [
        'label' => 'Location name',
        'name' => 'name',
        'placeholder' => 'type here Location name',
        'value' => @$edit ? @$edit->name : '',
        'required' => true,
    ])
    @endcomponent

    {{-- button --}}
    @if (@$edit)
        @component('components.primary-button', [
            'name' => 'Location update',
        ])
        @endcomponent
    @else
        @component('components.primary-button', [
            'name' => 'Location Save',
        ])
        @endcomponent
    @endif

    </form>

</div>
