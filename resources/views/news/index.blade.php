<x-app-layout>

    <x-header-section :posts="$latestNewsPosts" />


    <x-home-top-advertisement />


    <x-search-news-section />


    <x-news-section :subcategories="$subCategories" />


    <x-home-middle-advertisement />


    <x-home-bottom-advertisement />

    
    <x-video-news-section :posts="$newsVideoPosts" />


    <x-trending-videos-section :trendingvideos="$trendingVideos" />

</x-app-layout>
