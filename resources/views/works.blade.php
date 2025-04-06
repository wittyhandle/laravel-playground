<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Works</title>
    @livewireStyles
</head>
<body>
    <h1>Works Go Here</h1>
    
    <section>
        @foreach ($works as $w)
        <div style="margin-top: 10px">
            <div>{{$w}}</div>
        </div>    
        @endforeach
    </section>
    <section>
        <livewire:counter />
    </section>
@livewireScripts
</body>
</html>