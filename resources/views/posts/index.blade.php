@extends('layouts.app')

@section('content')
  
<div class="container">
        <div class="row justify-content-center">
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="col-md-8">
                        <div class="card">
                        <div class="card-header">{{$post->title}}</div>
            
                            <div class="card-body">
                                <div class="form-group row">
                                {{$post->body}}
                                </div>
                            </div>
                        </div>
                    </div>
                {{$posts->links()}}

                @endforeach
            @else
                <h1>No Posts Found</h1>
            @endif
                        
        </div>
    </div>
@endsection