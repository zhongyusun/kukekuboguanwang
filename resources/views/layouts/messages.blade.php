{{--//表单验证错误处理--}}

{{--//    打印所有 session 可看到我们闪存的 succes 和 danger--}}
{{--//dump(session()->all())--}}

@if ($errors->any())
    <script>
        {{--//console.log("@foreach ($errors->all() as $error) {{ $error }}\r\n @endforeach")--}}

        layui.use('layer', function () {
            var $ = layui.jquery, layer = layui.layer;
            layer.msg(`@foreach ($errors->all() as $error) {{ $error }}<br> @endforeach`, {
                time: 3000,
            })
        })
    </script>
@endif
@if (session()->has('success'))
    <script>
        layui.use('layer', function () {
            var $ = layui.jquery, layer = layui.layer;
            layer.msg("{{session()->get('success')}}", {
                time: 3000,
            })
        })
    </script>
@endif
@if (session()->has('danger'))
    <script>
        layui.use('layer', function () {
            var $ = layui.jquery, layer = layui.layer;
            layer.msg("{{session()->get('danger')}}", {
                time: 3000,
            })
        })
    </script>
@endif
