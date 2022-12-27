@if (session()->get("success"))
<script>
    iziToast.success({
    title: 'Completed',
    position:"topRight",
    message: '{{ session("success") }}',
});
</script>
@endif


@if (session()->get("error"))
<script>
    iziToast.error({
    title: 'Error',
    position:"topRight",
    message: '{{ session("error") }}',
});
</script>
@endif


@if (session()->get("info"))
<script>
    iziToast.info({
    title: 'Deleted',
    position:"topRight",
    message: '{{ session("info") }}',
});
</script>
@endif
