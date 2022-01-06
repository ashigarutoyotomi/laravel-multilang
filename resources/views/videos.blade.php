<x-header />
@isset($videos)
<div class="my-2 videos d-flex flex-wrap justify-space-around">
    @foreach ($videos as $video)
    <video id="my-video" class="video-js vjs-theme-city vjs-big-play-centered" controls preload="false" data-setup="{}">
        <source src="{{asset('/storage/'.$video->filename)}}" type="video/mp4" />
        <source src="{{asset('/storage/'.$video->filename)}}" type="video/webm" />
        {{$video->description}}
    </video>
    @endforeach
</div>
@endisset
<x-footer />
