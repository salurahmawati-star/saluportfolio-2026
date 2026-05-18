<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
</head>
<body style="margin:0; padding:40px; font-family:Arial; background:#0f172a; color:white;">

<h1>My Portfolio</h1>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px;">

@foreach($portfolios as $portfolio)

    <div style="background:#111827; padding:15px; border-radius:10px;">

        @if($portfolio->image)
            <img src="{{ Storage::url($portfolio->image) }}"
                 style="width:100%; height:180px; object-fit:cover; border-radius:10px;">
        @endif

        <h3>{{ $portfolio->title }}</h3>

        <a href="{{ route('portfolio.show', $portfolio->slug) }}"
           style="color:cyan;">
            Lihat Detail
        </a>

    </div>

@endforeach

</div>

</body>
</html>