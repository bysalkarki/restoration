@props(['name', 'value'])

{!! Form::open(['url' => route($name, $value),'id'=>'deleteForm']) !!}
@csrf
<button type="submit" class="">Submit</button>
{!! Form::submit('<i class="fas fa-trash"></i>', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@push('scripts')
    <script>
        $('deleteForm').on('submit',function(){
            return confirm('Are you sure??')
        })
    </script>
@endpush
