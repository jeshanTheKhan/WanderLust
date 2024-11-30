@extends('layouts.shop.backend')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Form Elements</h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <div id="datatable_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                  
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable"
                                                class="table table-striped table-bordered dataTable no-footer"
                                                style="width: 100%;" role="grid"
                                                aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="datatable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 193px;">Serial Number</th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="datatable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 193px;">Full Name</th>

                                                        <th class="sorting" tabindex="0" aria-controls="datatable"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 298px;">E-mail</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="datatable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Start date: activate to sort column ascending"
                                                            style="width: 140px;">Date</th>
                                                            <th class="sorting" tabindex="0"
                                                            aria-controls="datatable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Start date: activate to sort column ascending"
                                                            style="width: 140px;">Number Of Days</th>
                                                            <th class="sorting" tabindex="0"
                                                            aria-controls="datatable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Start date: activate to sort column ascending"
                                                            style="width: 140px;">Number Of Person</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="datatable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending"
                                                            style="width: 116px;">Action</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    @php($sl=1)
                                                    @foreach ($data as $data)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{ $sl++ }}</td>
                                                        <td class="sorting_1">{{ $data->name }}</td>
                                                        <td>{{ $data->email }}</td>
                                                        <td>{{ $data->date }}</td>
                                                        <td>{{ $data->day }}</td>
                                                        <td>{{ $data->person }}</td>
                                                        <td>
                                                          @if($data->status == 0)
                                                          <form action="{{ route('shop.book.updatestatus', $data->booking_id) }}" method="POST">
                                                              @csrf
                                                              <input type="hidden" name="status" value="1"> <!-- Change status to "1" for Check In -->
                                                              <button type="submit" class="btn btn-success">Pending</button>
                                                          </form>
                                                      @elseif($data->status == 1)
                                                          <form action="{{ route('shop.book.updatestatus', $data->booking_id) }}" method="POST">
                                                              @csrf
                                                              <input type="hidden" name="status" value="2"> <!-- Change status to "2" for Check Out -->
                                                              <button type="submit" class="btn btn-danger">Check In</button>
                                                          </form>
                                                      @else
                                                          <form action="{{ route('shop.book.updatestatus', $data->booking_id) }}" method="POST">
                                                              @csrf
                                                              <input type="hidden" name="status" value="0"> <!-- Reset status to "0" -->
                                                              <button type="submit" class="btn btn-warning">Check Out</button>
                                                          </form>
                                                      @endif
                                                           
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
            </div>
        </div>


    </div>
</div>
</div>
@endsection