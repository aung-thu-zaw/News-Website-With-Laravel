<div>
    <div class="px-3 mb-3 d-flex align-items-center border-bottom border-3">
        <h6><i class="fa-solid fa-video fs-6 text-danger me-3 live-icon"></i>{{ LIVE_VIDEO }} - {{$liveVideo->title}}
        </h6>
    </div>

    <div class="live-channel mb-4">
        <div class="video-box border" style="height: 300px;">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $liveVideo->video_id }}"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>
