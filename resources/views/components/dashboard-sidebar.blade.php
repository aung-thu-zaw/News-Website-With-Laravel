<div id="mySidenav" class="sidenav d-flex flex-column justify-content-between">
    <div class="border-3 border-bottom py-3 px-3">
        <h5 class="text-center text-white">
            Global News
            </h4>
    </div>
    @can("admin")
    <div class="h-100">
        <div class="my-2">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-gauge-high me-2"></i>
                <span class="dashboard-nav-item">
                    Dashboard
                </span>
            </a>
        </div>

        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" data-bs-target=".collapseOne" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample" onclick="toggleDownArrowOne()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-rectangle-ad me-2"></i>
                        <span class="me-5 dashboard-nav-item">Advertisements</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon-1" id="down-icon-1"></i>
                    </div>
                </a>
            </div>
            <div class="collapse collapseOne" id="collapseExample" style="background: rgb(32, 33, 33)">
                <a href="{{ route('admin.home-advertisement.edit') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Home Advertisement</span>
                </a>
                <a href="{{ route('admin.sidebar-advertisement.edit') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Sidebar Advertisement</span>
                </a>
            </div>
        </div>


        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" data-bs-target=".collapseTwo" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample" onclick="toggleDownArrowTwo()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-laptop me-2"></i>
                        <span class="me-5 dashboard-nav-item">Categories</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon-2" id="down-icon-2"></i>
                    </div>
                </a>
            </div>
            <div class="collapse collapseTwo" id="collapseExample" style="background: rgb(32, 33, 33)">
                <a href="{{ route('admin.categories.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Category</span>
                </a>
                <a href="{{ route('admin.sub-categories.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">SubCategory</span>
                </a>
            </div>
        </div>

        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" data-bs-target=".collapseThree" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample" onclick="toggleDownArrowThree()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-newspaper me-2"></i>
                        <span class="me-5 dashboard-nav-item">Posts</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon-3" id="down-icon-3"></i>
                    </div>
                </a>
            </div>
            <div class="collapse collapseThree" id="collapseExample" style="background: rgb(32, 33, 33)">
                <a href="{{ route('admin.news-posts.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">News Posts</span>
                </a>
                <a href="{{ route('admin.video-news-posts.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Video News Posts</span>
                </a>
                <a href="{{ route('admin.trending-videos.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Trending Videos</span>
                </a>
            </div>
        </div>

        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" data-bs-target=".collapseFour" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample" onclick="toggleDownArrowFour()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-photo-film me-2"></i>
                        <span class="me-5 dashboard-nav-item">Gallery</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon-4" id="down-icon-4"></i>
                    </div>
                </a>
            </div>
            <div class="collapse collapseFour" id="collapseExample" style="background: rgb(32, 33, 33)">
                <a href="{{ route('admin.photo-gallery.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Photo Gallery</span>
                </a>
                <a href="{{ route('admin.video-gallery.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Video Gallery</span>
                </a>
            </div>
        </div>

        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" data-bs-target=".collapseFive" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample" onclick="toggleDownArrowFive()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-file-lines me-2"></i>
                        <span class="me-5 dashboard-nav-item">Pages</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon-5" id="down-icon-5"></i>
                    </div>
                </a>
            </div>
            <div class="collapse collapseFive" id="collapseExample" style="background: rgb(32, 33, 33)">
                <a href="{{ route('admin.about-us.edit') }}" class="">
                    <span class="ms-5 dashboard-nav-item">About Us</span>
                </a>
                <a href="{{ route('admin.faq.edit') }}" class="">
                    <span class="ms-5 dashboard-nav-item">FAQ</span>
                </a>
                <a href="{{ route('admin.faq-accordion.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">FAQ (Accordion)</span>
                </a>
                <a href="{{ route('admin.contact-us.edit') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Contact Us</span>
                </a>
                <a href="{{ route('admin.terms-and-conditions.edit') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Terms And Conditions</span>
                </a>
                <a href="{{ route('admin.privacy-and-policy.edit') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Privacy And Policy</span>
                </a>
                <a href="{{ route('admin.disclaimer.edit') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Disclaimer</span>
                </a>
            </div>
        </div>


        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" data-bs-target=".collapseSix" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample" onclick="toggleDownArrowSix()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-users me-2"></i>
                        <span class="me-5 dashboard-nav-item">User Lists</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon-6" id="down-icon-6"></i>
                    </div>
                </a>
            </div>
            <div class="collapse collapseSix" id="collapseExample" style="background: rgb(32, 33, 33)">
                <a href="{{ route('admin.noraml-user-lists.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Normal User Lists</span>
                </a>
                <a href="{{ route('admin.permission-users.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Permission User Lists</span>
                </a>
            </div>
        </div>

        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" data-bs-target=".collapseSeven" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample" onclick="toggleDownArrowSeven()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-pen me-2"></i>
                        <span class="me-5 dashboard-nav-item">Author Posts</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon-7" id="down-icon-7"></i>
                    </div>
                </a>
            </div>
            <div class="collapse collapseSeven" id="collapseExample" style="background: rgb(32, 33, 33)">
                <a href="{{ route('admin.author-news-posts.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">News Posts</span>
                </a>
                <a href="{{ route('admin.author-video-news-posts.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Video News Posts</span>
                </a>
            </div>
        </div>

        <div class="my-2">
            <a href="{{ route('admin.live-videos.index') }}">
                <i class="fa-solid fa-video me-2"></i>
                <span class="dashboard-nav-item">
                    Live Videos
                </span>
            </a>
        </div>

        <div class="my-2">
            <a href="{{ route('admin.setting.edit') }}">
                <i class="fa-solid fa-gear me-2"></i>
                <span class="dashboard-nav-item">
                    Setting
                </span>
            </a>
        </div>

    </div>
    @endcan


    @can("editor")
    <div class="h-100">
        <div class="my-2">
            <a href="{{ route('editor.dashboard') }}">
                <i class="fa-solid fa-gauge-high me-2"></i>
                <span class="dashboard-nav-item">
                    Dashboard
                </span>
            </a>
        </div>

        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" data-bs-target=".collapseTwo" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample" onclick="toggleDownArrowTwo()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-laptop me-2"></i>
                        <span class="me-5 dashboard-nav-item">Categories</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon-2" id="down-icon-2"></i>
                    </div>
                </a>
            </div>
            <div class="collapse collapseTwo" id="collapseExample" style="background: rgb(32, 33, 33)">
                <a href="{{ route('editor.categories.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Category</span>
                </a>
                <a href="{{ route('editor.sub-categories.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">SubCategory</span>
                </a>
            </div>
        </div>

        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" data-bs-target=".collapseThree" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample" onclick="toggleDownArrowThree()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-newspaper me-2"></i>
                        <span class="me-5 dashboard-nav-item">Posts</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon-3" id="down-icon-3"></i>
                    </div>
                </a>
            </div>
            <div class="collapse collapseThree" id="collapseExample" style="background: rgb(32, 33, 33)">
                <a href="{{ route('editor.news-posts.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">News Posts</span>
                </a>
                <a href="{{ route('editor.video-news-posts.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Video News Posts</span>
                </a>
                <a href="{{ route('editor.trending-videos.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Trending Videos</span>
                </a>
            </div>
        </div>

        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" data-bs-target=".collapseFour" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample" onclick="toggleDownArrowFour()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-photo-film me-2"></i>
                        <span class="me-5 dashboard-nav-item">Gallery</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon-4" id="down-icon-4"></i>
                    </div>
                </a>
            </div>
            <div class="collapse collapseFour" id="collapseExample" style="background: rgb(32, 33, 33)">
                <a href="{{ route('editor.photo-gallery.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Photo Gallery</span>
                </a>
                <a href="{{ route('editor.video-gallery.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Video Gallery</span>
                </a>
            </div>
        </div>
    </div>
    @endcan



    @can("writer")
    <div class="h-100">
        <div class="my-2">
            <a href="{{ route('writer.dashboard') }}">
                <i class="fa-solid fa-gauge-high me-2"></i>
                <span class="dashboard-nav-item">
                    Dashboard
                </span>
            </a>
        </div>


        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" data-bs-target=".collapseThree" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample" onclick="toggleDownArrowThree()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-newspaper me-2"></i>
                        <span class="me-5 dashboard-nav-item">Posts</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon-3" id="down-icon-3"></i>
                    </div>
                </a>
            </div>
            <div class="collapse collapseThree" id="collapseExample" style="background: rgb(32, 33, 33)">
                <a href="{{ route('writer.news-posts.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">News Posts</span>
                </a>
                <a href="{{ route('writer.video-news-posts.index') }}" class="">
                    <span class="ms-5 dashboard-nav-item">Video News Posts</span>
                </a>
            </div>
        </div>
    </div>

    @endcan

    <div class="border-3 border-top py-2 px-3 d-flex align-items-center justify-content-center">
        <div class="me-3">
            <img src="{{ asset('storage/avatars/'.auth()->user()->avatar) }}" alt="" class="border rounded-circle"
                style="width: 50px; height: 50px; object-fit: cover">
        </div>

        <div class="btn-group dropup">
            <div type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="text-white">
                    {{ auth()->user()->name }}
                </span>
            </div>
            <ul class="dropdown-menu bg-dark text-white-50">
                <li><a class="dropdown-item" href="{{ route('news.index') }}">Home</a></li>
                <li>
                    <hr class="dropdown-divider text-white">
                </li>
                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                <li>
                    <hr class="dropdown-divider text-white">
                </li>
                <li style="cursor: pointer;">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn text-white">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
