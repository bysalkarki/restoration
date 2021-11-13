@if (session('success'))
    <script>
        $(document).ready(function() {
            toastr.success("{{ session('success') }}");
        })
    </script>
@endif

@if (session('error'))
    <script>
        $(document).ready(function() {
            toastr.success("{{ session('error') }}");
        })
    </script>
@endif

@if ($errors->any())
    @foreach ($errors as $error)
        <script>
            toastr.error("{{ $error }}");
        </script>
    @endforeach
@endif
