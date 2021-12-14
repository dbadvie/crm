

@extends('layouts.contentLayoutMaster')
 @section('title', $title)
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/extensions/toastr.min.css') }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/extensions/ext-component-toastr.min.css') }}">
  @endsection
 @section('content')
<!-- Basic Tables start -->
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $title }}</h4>
            </div>
            <div class="card-body">
                <p class="card-text">
                    {{ $description }}
                </p>
                <a
                    type="button"
                    class="btn btn-success waves-effect waves-float waves-light" href="{{ route('form.create') }}">
                    <i data-feather="plus"></i>Add</a>
            </div>
            <div class="table">
                <table class="table ">
                    <thead>
                        <tr>
                            <th># No</th>
                            <th>Name</th>
                            <th>Method</th>
                            <th>Action</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($forms as $key => $form)
                        <tr>
                            <td># {{ $form->id }}</td>
                            <td>{{ $form->name }}</td>
                            <td>{{ $form->method }}</td>
                            <td>
                                {{ $form->action }}
                            </td>
                            <td>
                                {{ $form->slug }}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="dropdown-item btn-success btn-sm mb-1" href="{{ route('form.createItem',$form->id) }}">
                                        <i data-feather="edit-2" class="me-50"></i>
                                        <span>Add Field</span>
                                    </a>
                                    <form id="delete-form-{{ $form->id }}" action="{{ route('form.destroy',$form->id) }}" method="POST" class="d-none">
                                        @csrf
                                        </form>
                                       <a class="dropdown-item btn-danger btn-sm"  href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $form->id }}').submit();"><i data-feather="trash" class="me-50"></i>Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {!! $forms->render() !!}
    </div>
</div>
<!-- Basic Tables end -->
@endsection
@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset('assets/vendors/js/extensions/toastr.min.js') }}"></script>
@endsection
@section('page-script')
@if ($message = Session::get('success'))
<script>
    $(function () {
    'use strict';
    var isRtl = $('html').attr('data-textdirection') === 'rtl';
    toastr['success']( '👋{{ $message }} ', 'Good Job',
     {
      closeButton: true,
      tapToDismiss: false,
      progressBar: true,
      rtl: isRtl
    });
    });
</script>
@endif
@endsection








