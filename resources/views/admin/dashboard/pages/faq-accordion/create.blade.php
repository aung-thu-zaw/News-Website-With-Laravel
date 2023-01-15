<x-dashboard-layout>
    @section("title", "FAQ Accordion Create")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.faq-accordion.index') }}" class="btn btn-primary text-decoration-none">
                    View
                    <i class="fa-solid fa-eye"></i>
                </a>
            </div>
            <form action="{{ route('admin.faq-accordion.store') }}" method="POST" class="border p-5">
                @csrf

                <x-form.input type="text" name="question" required="required">
                    <x-form.label name="Question *" />
                </x-form.input>


                <x-form.textarea name="answer" required="required">
                    <x-form.label name="Answer *" />
                </x-form.textarea>


                <x-form.input-button name="Create" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
