<x-dashboard-layout>
    @section("title", "FAQ Accordion Edit")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.faq-accordion.index') }}" class="btn btn-primary">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.faq-accordion.update',$faqAccordion->id) }}" method="POST"
                class="border p-5">
                @csrf
                @method("PATCH")
                <input type="hidden" name="page" value="{{$page}}">


                <x-form.input type="text" name="question" value="{{ $faqAccordion->question }}">
                    <x-form.label name="Question *" />
                </x-form.input>


                <x-form.textarea name="answer" value="{{ $faqAccordion->answer }}">
                    <x-form.label name="Answer *" />
                </x-form.textarea>

                <x-form.input-button name="Update" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
