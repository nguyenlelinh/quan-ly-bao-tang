<!-- Mainly scripts -->
{{--<script src="backend/js/bootstrap.min.js"></script>--}}
{{--<link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">--}}
<script src="{{URL::asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('backend/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{URL::asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::asset('backend/plugins/jquery-ui.js')}}"></script>
<script src="{{URL::asset('backend/library/library.js')}}"></script>
<script src="{{URL::asset('backend/js/inspinia.js')}}"></script>


{{-- <script src="backend/js/plugins/pace/pace.min.js"></script> --}}
<!-- jQuery UI -->

@if(isset($config['js']) && is_array($config['js']))
    @foreach($config['js'] as $key => $val)
        {!! '<script src="'.$val.'"></script>' !!}
    @endforeach
@endif
