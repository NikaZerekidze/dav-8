@extends('layouts.app')
@section('content')
	<div class="container">
		<form action="{{ route('newsStore') }}" method='POST' enctype="multipart/form-data">
			@csrf
			<input type="text" name="title" placeholder="title" class="form-control mt-2  @error('title') is-invalid @enderror">
		

                 @error('title')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                 @enderror
            
                            

			<textarea type="text" name="description" placeholder="description" class="form-control mt-2  @error('description') is-invalid @enderror"></textarea>

                 @error('description')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                 @enderror

			<input type="text" name="short_descritpion" placeholder="short descritpion" class="form-control mt-2  @error('short_descritpion') is-invalid @enderror "></input>


                 @error('short_descritpion')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                 @enderror

			<input type="date" name="time" placeholder="upload time" class="form-control mt-2  @error('time') is-invalid @enderror "></input>

                 @error('time')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                 @enderror


			<input type="file" name="image" placeholder="image" class="form-control mt-2  @error('image') is-invalid @enderror"></input>


                 @error('image')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                 @enderror

			<button class="btn btn-primary mt-2">save</button>

		</form>

	</div>
	
@endsection