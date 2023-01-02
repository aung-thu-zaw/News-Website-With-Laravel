<x-app-layout>

    <x-header-section :posts="$breakingNewsPosts" />


    <x-home-top-advertisement />


    <x-search-news-section />


    <x-news-section :subcategories="$subCategories" />


    <x-home-middle-advertisement />


    <x-home-bottom-advertisement />


    <x-trending-videos-section :trendingvideos="$trendingVideos" />

</x-app-layout>
