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
          <form class="form invoice-repeater" action="{{ route('formItem.store') }}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-3 col-12">
                  <div class="mb-1">
                    <label class="form-label" for="name"> Name</label>
                    <input type="hidden"  class="form-control"  name="form_id" value="{{ Request::route('id') }}">
                    <input type="text" id="name" class="form-control" placeholder="Name" name="name" required>
                  </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="type"> Type</label>
                     <select name="type" class="form-control" id="type">
                      <option disabled hidden selected>Select One Item</option>
                      <option value="text">text</option>
                      <option value="select">select</option>
                      <option value="number">number</option>
                      <option value="url">url</option>
                      <option value="email">email</option>
                      <option value="file">file</option>
                      <option value="password">password</option>
                      <option value="checkbox">checkbox</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="class"> Class</label>
                      <input type="text" id="class" class="form-control" placeholder="class" name="class" required>
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="id"> Id</label>
                      <input type="text" id="id" class="form-control" placeholder="id" name="id" required>
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="placeholder"> Placeholder</label>
                      <input type="text" id="placeholder" class="form-control" placeholder="placeholder" name="placeholder" required>
                    </div>
                  </div>

                  <div class="row  d-none" id="select-option">
                    <!-- Invoice repeater -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Option</h4>
                            </div>
                            <div class="card-body">
                                <div data-repeater-list="select">
                                        <div data-repeater-item>
                                            <div class="row d-flex align-items-end">
                                                <div class="col-md-4 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="itemname">Item Name</label>
                                                        <input type="text" class="form-control" id="itemname[]" aria-describedby="itemname" placeholder="Name" />
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-12">
                                                  <div class="mb-1">
                                                      <label class="form-label" for="itemvalue">Item Value</label>
                                                      <input type="text" class="form-control" id="itemvalue[]" aria-describedby="itemvalue" placeholder="Value" />
                                                  </div>
                                              </div>

                                                <div class="col-md-2 col-12 mb-50">
                                                    <div class="mb-1">
                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                            <i data-feather="x" class="me-25"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                                <i data-feather="plus" class="me-25"></i>
                                                <span>Add New</span>
                                            </button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Invoice repeater -->
                </div>



                  <hr>
                  <legend class="text-primary">Attribute</legend>
                  <div class="row">
                    <div class="col-md-2">
                    <div class="mb-1">
                      <label class="form-check-label mb-50" for="disabled">disabled</label>
                          <div class="form-check form-check-success form-switch">
                              <input type="checkbox"  id="disabled" name="disabled" class="form-check-input" value="1"/> 
                          </div>
                    </div>
                  </div>
                      <div class="col-md-2">
                        <div class="mb-1">
                          <label class="form-check-label mb-50" for="readonly">readonly</label>
                              <div class="form-check form-check-success form-switch">
                                  <input type="checkbox"  id="readonly" name="readonly" class="form-check-input" value="1"/> 
                              </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="mb-1">
                          <label class="form-check-label mb-50" for="autocomplete">autocomplete</label>
                              <div class="form-check form-check-success form-switch">
                                  <input type="checkbox"  id="autocomplete" name="autocomplete" class="form-check-input" value="1"/> 
                              </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="mb-1">
                          <label class="form-check-label mb-50" for="autofocus">autofocus</label>
                              <div class="form-check form-check-success form-switch">
                                  <input type="checkbox"  id="autofocus" name="autofocus" class="form-check-input" value="1"/> 
                              </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="mb-1">
                          <label class="form-check-label mb-50" for="required">required</label>
                              <div class="form-check form-check-success form-switch">
                                  <input type="checkbox"  id="required" name="required" class="form-check-input" value="1"/> 
                              </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="mb-1">
                          <label class="form-check-label mb-50" for="multiple">multiple</label>
                              <div class="form-check form-check-success form-switch">
                                  <input type="checkbox"  id="multiple" name="multiple" class="form-check-input" value="1"/> 
                              </div>
                        </div>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-2">
                      <div class="mb-1">
                        <label class="form-label" for="max"> Max</label>
                        <input type="number"  id="max" name="max" class="form-control" /> 
                      </div>
                    </div>
                        <div class="col-md-2">
                          <div class="mb-1">
                            <label class="form-label" for="min"> Min</label>
                            <input type="number"  id="min" name="min" class="form-control" /> 
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="mb-1">
                            <label class="form-label" for="width"> Width</label>
                            <input type="number"  id="width" name="width" class="form-control" /> 
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="mb-1">
                            <label class="form-label" for="height"> Height</label>
                            <input type="number"  id="height" name="height" class="form-control" /> 
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="mb-1">
                            <label class="form-label" for="size"> Size</label>
                            <input type="number"  id="size" name="size" class="form-control" /> 
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="mb-1">
                            <label class="form-label" for="maxlength"> Maxlength</label>
                            <input type="number"  id="maxlength" name="maxlength" class="form-control" /> 
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="mb-1">
                            <label class="form-label" for="pattern"> pattern</label>
                            <input type="text"  id="pattern" name="pattern" class="form-control" /> 
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="mb-1">
                            <label class="form-label" for="title"> title</label>
                            <input type="text"  id="title" name="title" class="form-control" /> 
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="mb-1">
                            <label class="form-label" for="step"> Step</label>
                            <input type="number"  id="step" name="step" class="form-control" /> 
                          </div>
                        </div>
                  </div>
              <div class="row">
                <div class="col-6">
                    <a href="{{ route('form') }}" class="btn btn-primary">
                        Back
                      </a>
                  <button type="submit" class="btn btn-success">Create</button>
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
@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset('assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
  <script src="{{ asset('assets/js/scripts/forms/form-repeater.js') }}"></script>
  <script>
    $('#type').change(()=>{
      if($('#type').val() == 'select')
      {
       
        $('#select-option').removeClass('d-none');
      }
      else{
        $('#select-option').addClass('d-none');
      }
      
    })

</script>
@endsection
