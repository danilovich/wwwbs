{{-- Let's grab the master layout --}}
@extends ('layouts.master')

{{-- Here's what the content of booking.blade.php is gonna be --}}
@section ('content')

    <main role="main">

        <form>
			Brief Description: <br>
		 	<input type="text" style="width: 95%;font-size: 20px;padding: .4em;line-height: 1.4em;"><br>
		 	<p></p>
		 	Full Description: (optional)<br>
		 	<textarea name="Description" rows="10" cols="40" style="margin: 0px 24.2188px 0px 0px; height: 108px; width: 1208px; font-size: 20px"></textarea>
		 
		 	<input type="submit" value="Save" class="button">
		</form>

    </main>

@endsection