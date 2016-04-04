<!doctype	html>
<html	lang="en">
<head>
<meta	charset="utf-8"	/>
</head>
<body>
<form action="/story/store" method="POST">
<label>Title</label>
<input type="text" name="title" />
<label>Locations</label>
<select name="location_id">
	@foreach ($locations as $location)
	<option value="{{ $location->id }}">{{$location->value }}</option>
	@endforeach
 </select>
 <label>Story</label>
<input type="text" name="story" />
<label>Published?</label>
<select name="published">
 	<option value="1">Yes</option>
 	<option value="0">No</option>
 </select>
 <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
<input type="submit" name="submit" />
</form>

</body>
</html>