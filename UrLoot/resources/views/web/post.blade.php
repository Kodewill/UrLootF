@extends('layouts.app')

@section('content')

<div class='container'>
    <div class = "col-md-8 col-md-offset-2">
        <h1>Examenes</h1>

        @foreach($professorNames as $prof)
        <div class="panel panel-default">
            <div class="panel-heading">
                {{$prof->professorName}}
            </div>
            <div class="panel-body">
                <a href="#" class="pull-right">----</a>
            </div>
            

        </div>
        @endforeach
        
    </div>
</div>
@endsection