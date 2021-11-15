@props(['route', 'value'])

{!! Form::open(['url' => route($route, $value), 'class' => 'deleteForm']) !!}
@csrf
@method('DELETE')
{{ Form::button('<i class="fas fa-trash"></i>', ['class' => 'btn btn-danger btn-sm mr-2', 'type' => 'submit', 'onClick' => 'deleteForm()']) }}
{!! Form::close() !!}

@push('scripts')
    <script>
        function deleteForm() {
            return confirm('Are you sure??')
        }
    </script>
@endpush
