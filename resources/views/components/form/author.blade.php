<div>
    @if (@$edit)
        <form action="@route('admin.author.update', @$edit->id)" method="POST" enctype="multipart/form-data">
            @method('PUT')
           
        @else
            <form action="@route('admin.author.store')" method="POST" enctype="multipart/form-data">
                @method('POST')
            
    @endif
    @csrf
    @component('components.input', [
        'label' => 'Author name',
        'name' => 'name',
        'placeholder' => 'type here category name',
        'value' => @$edit ? @$edit->name : '',
        'required' => true,
    ])
    @endcomponent

      {{-- image --}}
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        @component('components.input', [
            'label' => 'Author image',
            'name' => 'image',
            'type' => 'file',
            'placeholder' => '',
            'value' => @$edit ? @$edit->image : '',
        ])
        @endcomponent
    </div>

    @component('components.input', [
        'label' => 'Author body',
        'name' => 'body',
        'placeholder' => 'type here author body',
        'value' => @$edit ? @$edit->body : '',
        'required' => true,
    ])
    @endcomponent

    {{-- button --}}
    @if (@$edit)
        @component('components.primary-button', [
            'name' => 'Author update',
        ])
        @endcomponent
    @else
        @component('components.primary-button', [
            'name' => 'Author Save',
        ])
        @endcomponent
    @endif
    </form>
</div>
