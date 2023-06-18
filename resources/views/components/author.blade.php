<div class="col-12 col-md-3 col-lg-3 my-3">
    <div class="card" style="width: 18rem;">
        <img class="mx-auto mt-3 rounded-circle" height="150px" width="150px"  src="{{ asset($image) }}" alt="">
        <div class="card-body">
            <div class="card-title">
                {{ $name }}
            </div>
          <p class="card-text text-muted">{{ $body }}.</p>
        </div>
      </div>
</div>