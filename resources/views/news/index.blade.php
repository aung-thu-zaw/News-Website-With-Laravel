<x-app-layout>

    <x-header-section :posts="$latestNewsPosts" />


    <x-home-top-advertisement />


    <x-search-news-section :subcategories="$subCategories" />


    <x-news-section :subcategories="$subCategories" />


    <x-home-middle-advertisement />

    <x-video-news-section :posts="$videoNewsPosts" />


    <x-home-bottom-advertisement />


    <x-trending-videos-section :trendingvideos="$trendingVideos" />

</x-app-layout>