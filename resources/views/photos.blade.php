<x-header />
<div class="row">
    @isset($photos)
    <div id="gallery">
        @foreach ($photos as $photo)
        <a href="{{asset('/storage/'.$photo->filename)}}" width="100%" height="auto" data-fancybox>
            <img src="{{asset('/storage/'.$photo->filename)}}" width="33%" height="auto"/>
        </a>
        @endforeach
        @endisset
    </div>
    <x-footer />
