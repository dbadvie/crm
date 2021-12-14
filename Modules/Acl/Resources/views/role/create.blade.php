@extends('layouts.contentLayoutMaster')
 @section('title', $title)
@section('content')
<!-- Basic Tables start -->
<section id="multiple-column-form">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">{{ $title }}</h4>
          </div>
          <div class="card-body">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                 @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                 @endforeach
              </ul>
            </div>
          @endif
          <form class="form" action="{{ route('role.store') }}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-4 col-12">
                  <div class="mb-1">
                    <label class="form-label" for="first-name-column"> Name</label>
                    <input type="text" id="first-name-column" class="form-control" placeholder="Name" name="name" required>
                  </div>
                </div>
              </div>
              <hr>
              <legend class="text-primary">Permission</legend>
              <div class="row">
                <div class="mb-1">
                  <label class="form-check-label mb-50" for="select-all">Select All</label>
                      <div class="form-check form-check-success form-switch">
                          <input type="checkbox"  id="select-all" class="form-check-input"/> 
                      </div>
                </div>
                @foreach($permission as $item)
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-check-label mb-50" for="{{ $item->name }}">{{ $item->name }}</label>
                        <div class="form-check form-check-success form-switch">
                          <input name="permission[]" value="{{ $item->id }}" type="checkbox"  class="form-check-input" id="{{ $item->name }}">
                        </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="row">
                <div class="col-6">
                    <a href="{{ route('role') }}" class="btn btn-primary btn-prev waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left align-middle me-sm-25 me-0"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                        <span class="align-middle d-sm-inline-block d-none">Back</span>
                      </a>
                  <button type="submit" class="btn btn-success btn-submit waves-effect waves-float waves-light">Create</button>
                </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Basic Tables end -->
@endsection
@section('page-script')
<script>
$('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
});
</script>
@endsection
