@extends('layouts.app')

@section('content')
    
    @include('admin.includes.errors')
        

    <div class="panel panel-default">
        
        <div class="panel panel-heading">
            Create a new tag
        </div>

        <div class="panel panel-body">
            <form action="{{ route('tag.store') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Tag Name</label>
                    <input type="text" name="tag" class="form-control">
                </div>

               <div class="text-center">
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">
                             Store Tag
                        </button> 
                    </div> 
               </div>

            </form>
        </div>
    </div>

@endsection