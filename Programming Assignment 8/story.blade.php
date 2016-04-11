<html>
   <body>
    @extends('layouts.master')
    @section('content')
 	@foreach ($stories as $story)
 	  <p>{{ $story->title }}</p>
 	  <p> {{ $story->story }} </p>
 	  <p> {{ $story->published }} </p>
 	
 	@endforeach
	 @endsection
    </body>
 </html>