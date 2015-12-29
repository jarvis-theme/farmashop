<div id="flexslider" class="flexslider">
    <ul class="slides span12">
        @foreach (slideshow() as $val)
        <li>
        	@if($val->text=='')
        	<a href="#">
        	@else
        	<a href="{{filter_link_url($val->text)}}" target="_blank">
        	@endif
            	<img alt="{{ $val->text }}" src="{{url(slide_image_url($val->gambar))}}" alt="Slide" />
        	</a>
        </li>
        @endforeach
    </ul>
</div>