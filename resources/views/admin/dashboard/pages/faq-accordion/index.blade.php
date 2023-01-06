<x-dashboard-layout>
    @section("title", "FAQ Accordion")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.faq-accordion.create') }}" class="btn btn-primary">Create
                    <i class="fa-solid fa-plus"></i></a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Question</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($faqAccordions as $faqAccordion)
                    <tr>
                        <th scope="row">{{ $faqAccordion->id }}</th>
                        <td>
                            {{ $faqAccordion->question }}
                        </td>
                        <td>
                            {!! $faqAccordion->answer !!}
                        </td>
                        <td>
                            <div class="d-flex align-items-center">

                                <form action="{{ route('admin.faq-accordion.edit',$faqAccordion->id) }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $faqAccordions->currentPage() }}">
                                    <button type="submit" class="btn btn-info me-3">
                                        Edit
                                    </button>
                                </form>

                                <form action="{{ route('admin.faq-accordion.destroy',$faqAccordion->id) }}"
                                    method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="page" value="{{ $faqAccordions->currentPage() }}">
                                    <button type="submit" class="btn btn-danger me-3"
                                        onclick="return confirm('Are you sure want to delete?');">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $faqAccordions->links() }}
    </div>
</x-dashboard-layout>
