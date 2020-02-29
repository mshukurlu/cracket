@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a team</div>

                    <div class="card-body">
                        @if (session('info'))
                            <div class="alert alert-success" role="alert">
                                {{ session('info') }}
                            </div>
                        @endif

                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach

                        <form action="{{route('backend.match.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Batsman team</label>

                                <select name="batsman_team_id">
                                    <option value="0">---</option>
                                    @foreach($teams as $team)

                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Bowler team</label>
                                <select name="bowler_team_id">
                                    <option value="0">---</option>
                                @foreach($teams as $team)

                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="form-group">

                                <button class="btn btn-primary" type="submit">Create</button>

                                <a href="{{route('backend.match.index')}}">Lisf of Matches</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
