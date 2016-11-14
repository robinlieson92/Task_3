<div class="grid">
	<div class="grid-sizer">

@foreach($galleries as $gallery)
	<div class="grid-item">
	<img src="{{ asset('/upload_image/'.$gallery->id.'/'.$gallery->thumbnail) }}"/>
	</div>
@endforeach
	</div>
</div>