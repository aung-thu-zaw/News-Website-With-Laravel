<x-dashboard-layout>
    @section("title", "Dashboard")

    <div class="mx-auto row  mt-5" style="width:90%;">
        <div class="col-lg-4 mb-3">
            <div class="shadow-lg d-flex align-items-center text-white">
                <div class="bg-primary d-flex align-items-center justify-content-center p-5"
                    style="width: 100px; height:100px">
                    <i class="fa-solid fa-users fs-3"></i>
                </div>
                <div class="bg-secondary d-flex flex-column align-items-center justify-content-center p-5"
                    style="width: 100%; height:100px">
                    <h4>Total Users</h4>
                    <span>{{ $userCount }}</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="shadow-lg d-flex align-items-center text-white">
                <div class="bg-warning d-flex align-items-center justify-content-center p-5"
                    style="width: 100px; height:100px">
                    <i class="fa-solid fa-newspaper fs-3"></i>
                </div>
                <div class="bg-secondary d-flex flex-column align-items-center justify-content-center p-5"
                    style="width: 100%; height:100px">
                    <h4>Total News Posts</h4>
                    <span>{{ $newsPostCount }}</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="shadow-lg d-flex align-items-center text-white">
                <div class="bg-danger d-flex align-items-center justify-content-center p-5"
                    style="width: 100px; height:100px">
                    <i class="fa-solid fa-video fs-3"></i>
                </div>
                <div class="bg-secondary d-flex flex-column align-items-center justify-content-center p-5"
                    style="width: 100%; height:100px">
                    <h4>Total Video News Posts</h4>
                    <span>{{ $videoNewsPostCount }}</span>
                </div>
            </div>
        </div>

        <div class="col-12 my-5">
            <canvas id="myChart" height="100px"></canvas>
        </div>

    </div>


    @push('scripts')
    <script>
        const data = {
            labels: @json($data->map(fn ($data) => $data->date)),
            datasets: [{
                label: 'Registered users in last 30 days',
                backgroundColor: 'rgb(255, 99, 132, 0.3)',
                borderColor: 'rgb(255, 99, 132)',
                data: @json($data->map(fn ($data) => $data->aggregate)),
            }]
        };

        const config = {
            type: 'bar',
            data: data
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
    @endpush


</x-dashboard-layout>
