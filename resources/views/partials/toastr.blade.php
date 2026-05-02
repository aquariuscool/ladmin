@if(Session::has('toastr'))
    @php
        $toastr     = Session::pull('toastr');
        $type       = \Illuminate\Support\Arr::get($toastr, 'type', 'success');
        $message    = \Illuminate\Support\Arr::get($toastr, 'message', '');
        $options    = json_encode(\Illuminate\Support\Arr::get($toastr, 'options', []));
    @endphp
    <script>
        $(function () {
            toastr.{{$type}}('{!!  $message  !!}', null, {!! $options !!});
        });
    </script>
@endif