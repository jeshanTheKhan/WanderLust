@extends('layouts.user.backend')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pending Booking Details</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  Serial Number
                </th>
                <th>
                  Full Name
                </th>
                <th>
                  Date
                </th>
                <th>
                  Number Of Day
                </th>
                <th>
                  Status
                </th>
                <th>
                    Number Of Person
                  </th>
                
              </tr>
            </thead>
            <tbody>
              @php ($sl=1)
              @foreach ($data as $data)
              <tr>
                <td class="py-1">
                  {{ $sl++ }}
                </td>
                <td>
                  {{ $data->name }}
                </td>
                <td>
                     {{ $data->date }}
                  </td>
                  <td>
                    {{ $data->day }}
                 </td>
                 
                <td>
                 @if ($data->status == 0)
                  
                 <button class="btn btn-danger">Pending</button>   

                 @elseif ($data->status == 1) 
                 <button class="btn btn-success">Check in</button>

                 @else
                 <button class="btn btn-success">Check Out</button>

                 @endif
                <td>
                  {{ $data->person }}
                </td>
              </tr> 
              @endforeach
              

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
      </div>
    </div>
</div>
@endsection