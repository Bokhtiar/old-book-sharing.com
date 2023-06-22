  @extends('layouts.admin.app')
  @section('admin_container')
      @component('components.breadcrumbs', [
          'name' => 'All users',
      ])
      @endcomponent

      <section class="row">
          {{-- table --}}
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <div class="card">
                  <div class="card-body">
                      @component('components.table.user', [
                          'users' => @$users,
                      ])
                      @endcomponent
                  </div>
              </div>
          </div>
      </section>
  @endsection
