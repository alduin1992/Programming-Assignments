<html>
   <body>
    @extends('layouts.master')
    @section('content')
    	@foreach ($locations as $location)
    	  <p>{{$location->value}}</p>
    	@endforeach
    @endsection
   </body>
</html>