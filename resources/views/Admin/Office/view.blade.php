@extends('layouts.back.backend')
@section('content')
<div class="right_col" role="main">
    <div class="panel-body">
        <h3 class="green"><i class="fa fa-paint-brush"></i> Office Details</h3>
<br>



        <br>
        <h1>Information :</h1>
        <br>
        <ul class="list-unstyled project_files">
         
          <li><h3 ><i class="fa fa-home"></i> {{ $data->office_address }}</a>
          </li>
          <li><h3 ><i class="fa fa-mail-forward"></i>{{ $data->office_email }} </h3a>
          </li>
          <li><h3 ><i class="fa fa-phone"></i> {{ $data->office_phonenumber }}</a>
          </li>
          <li><h3 ><i class="fa fa-phone"></i> {{ $data->office_telephone }}</h3>
          </li>
          <li><h3 ><i class="fa fa-facebook"></i> {{ $data->fb }}</h3>
          </li>
          <li><h3 ><i class="fa fa-instagram"></i> {{ $data->instagram }}</h3>
          </li>
          <li><h3 ><i class="fa fa-linkedin"></i> {{ $data->linkdln }}</h3>
          </li>
        </ul>
        <br>

        
      </div>
</div>

@endsection