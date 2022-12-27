<x-app-layout>
    <x-header-section :posts="$latestNewsPosts" />


    <x-home-top-advertisement :ad="$homeAdvertisement" />


    <x-search-news-section />


    <x-news-section />


    <x-home-middle-advertisement :ad="$homeAdvertisement" />


    <x-your-choice-news-section />


    <x-home-bottom-advertisement :ad="$homeAdvertisement" />


    <x-trending-videos-section />

</x-app-layout>
