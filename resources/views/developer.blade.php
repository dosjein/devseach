@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Developer Preview (<a href="">Back</a>)</div>
                <div class="panel-body">

                  <table class="table">
                    <thead>
                      <tr>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>BitBucket</th>
			<th>Skills</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($developers as $dev)
                        <tr>
                          <td>{{$dev->full_name}}</td>
                          <td>{{$dev->email}}</td>
                          <td><a target="_blank" href="https://bitbucket.org/{{$dev->bitbucket->username}}">{{$dev->bitbucket->username}}</a></td>
			 <td>

				<?php $repList = json_decode($dev->bitbucket->repozitories , true); $langList = array(); ?>

				@if (is_array($repList))
					@foreach($repList as $rep)
						<?php $langList[$rep['language']] = $rep['language'] ; ?>
					@endforeach

					{{implode($langList , ',')}}
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
@endsection
