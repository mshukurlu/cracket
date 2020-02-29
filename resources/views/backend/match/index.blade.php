@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List of Matches</div>

                    <div class="card-body">
                        @if (session('info'))
                            <div class="alert alert-success" role="alert">
                                {{ session('info') }}
                            </div>
                        @endif

                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Batsman team</th>
                                    <th scope="col">Bowler Team</th>
                                </tr>
                                </thead>
                                <tbody>
                        @foreach($matches as $match)
                            <tr>
                                <td>{{$match->batsman_team->name}}</td>
                                <td>{{$match->bowler_team->name}} </td>
                                <td><a href="{{route('backend.score.edit',['id'=>$match->id])}}">Edit scores</a></td>
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
