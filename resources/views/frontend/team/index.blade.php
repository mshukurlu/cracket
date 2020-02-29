@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Teams</div>

                    <div class="card-body">
                        <ul>
                         @foreach($teams as $team)
                            <li>
                               <img src="{{$team->icon}}" /> <a href="{{route('backend.team.create')}}">{{$team->name}}</a></li>
                         @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
