<x-dashboard-layout>
    <div class="row">
        <div class="col-12 p-5">
            <form action="" method="POST" class="border p-5">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Ad Photo</label>
                    <input type="file" class="form-control" name="" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Url</label>
                    <input type="text" class="form-control" name="" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Location</label>
                    <select class="form-select" name="" id="">
                        <option selected>Select one</option>
                        <option value="">New Delhi</option>
                        <option value="">Istanbul</option>
                        <option value="">Jakarta</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <select class="form-select" name="" id="">
                        <option selected>Select one</option>
                        <option value="">Show</option>
                        <option value="">Hide</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
