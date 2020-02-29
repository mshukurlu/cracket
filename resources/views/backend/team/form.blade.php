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

                        <form action="{{route('backend.team.store')}}" method="POST" enctype="multipart/form-data">
                           {{csrf_field()}}
                            <div class="form-group">
                                <label>Team</label>
                                <input type="text" name="name" class="form-control"  placeholder="Team name">
                            </div>
                            <div class="form-group">
                                <label>Icon</label>
                                <input name="icon" type="text" class="form-control">
                            </div>

                            <div class="form-group">

                                <button class="btn btn-primary" type="submit">Create</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
