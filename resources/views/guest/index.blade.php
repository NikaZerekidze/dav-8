@foreach($news as $news)

		<div class="card">
			<div class="card-body">
				<img src="{{asset('image')."/".$news->image }} ">
			</div>
			
		</div>

@endforeach