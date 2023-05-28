@component('components.breadcrumbs',[
    'name'=> "All books"
])
@endcomponent

    <section class="card">
        <div class="row">

            {{-- title --}}
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                @component('components.input', [
                    'label' => 'Book name',
                    'name' => 'title',
                    'placeholder' => 'Book title type here',
                    'value' => @$edit ? @$edit->title : '',
                ])
                @endcomponent
            </div>

            {{-- price --}}
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                @component('components.input', [
                    'label' => 'Book price',
                    'name' => 'price',
                    'placeholder' => 'Book price type here',
                    'value' => @$edit ? @$edit->price : '',
                ])
                @endcomponent
            </div>

            {{-- Category --}}
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                @component('components.select', [
                    'id' => 'id',
                    'name' => 'category_id',
                    'resource' => $categories,
                    'field_id' => 'id',
                    'label' => 'Select category',
                    'field_name' => 'name',
                    'value' => @$edit ? @$edit->id : '',
                ])
                @endcomponent
            </div>

            {{-- location --}}
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                @component('components.select', [
                    'id' => 'id',
                    'name' => 'location_id',
                    'resource' => $locations,
                    'field_id' => 'id',
                    'label' => 'Select category',
                    'field_name' => 'name',
                    'value' => @$edit ? @$edit->id : '',
                ])
                @endcomponent
            </div>


            {{-- ISBN --}}
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                @component('components.input', [
                    'label' => 'Book ISBN',
                    'name' => 'ISBN',
                    'placeholder' => 'Book ISBN type here',
                    'value' => @$edit ? @$edit->ISBN : '',
                ])
                @endcomponent
            </div>


            {{-- price --}}
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                @component('components.input', [
                    'label' => 'Book author',
                    'name' => 'author',
                    'placeholder' => 'Book author type here',
                    'value' => @$edit ? @$edit->author : '',
                ])
                @endcomponent
            </div>

            {{-- image --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Book image',
                    'name' => 'image',
                    'type' => 'file',
                    'placeholder' => '',
                    'value' => @$edit ? @$edit->image : '',
                ])
                @endcomponent
            </div>


            {{-- description --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.textarea', [
                    'label' => 'Book description',
                    'name' => 'description',
                    'placeholder' => 'type here book description. ',
                    'value' => @$edit->description,
                ])
                @endcomponent
            </div>

            {{-- button --}}
            @component('components.primary-button',[
                'name' => 'Book save'
            ]); 
            @endcomponent

        </div>
    </section>