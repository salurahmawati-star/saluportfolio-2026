<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $portfolio->title }}</title>
</head>
<body style="margin:0; padding:40px; font-family:Arial; background:#0f172a; color:white;">

<div style="max-width:900px; margin:auto;">

    <h1>{{ $portfolio->title }}</h1>

    @if($portfolio->image)
        <img src="{{ Storage::url($portfolio->image) }}"
             style="width:100%; border-radius:10px; margin:20px 0;">
    @endif

    <div style="line-height:1.8; color:#cbd5e1;">
        {!! $portfolio->description !!}
    </div>

   <br><br>

    <a href="/" style="color:cyan;">
        ← Kembali ke Home
    </a>

</div>

</body>
</html>