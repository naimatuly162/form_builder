
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>FormBuilder</title>
</head>
<body>

<div id="app">

{{--    @php( $users = DB::table('form_names')->get())--}}
{{--    <div class="container">--}}
{{--       <h2>{{$users->name}} </h2>--}}
{{--    </div>--}}

    <div class="container">
        <router-view></router-view>
    </div>

</div>

</body>
<script src="{{asset('js/app.js')}}"></script>
<script>

</script>
</html>
