@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1>Add City</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
              <label for="" class="form-label">City Name</label>
              <input type="text"
                class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mt-4 mb-4">Save</button>
        </div>
    </div>
</div>

{{-- list --}}

<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between">
              <h1 class="h3 mb-0 text-gray-800">List City</h1>
            </div>
          </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
        </div>
    </div>
</div>
@endsection
