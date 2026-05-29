<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} - Salu Portfolio</title>

    <link rel="stylesheet" href="{{ asset('assets/template/css/tooplate-titan-style.css') }}">

    <style>
        .project-progress{
            margin-top:20px;
        }

        .progress-info{
            display:flex;
            justify-content:space-between;
            margin-bottom:10px;
            font-weight:600;
        }

        .progress-bar{
            width:100%;
            height:12px;
            background:#e5e7eb;
            border-radius:999px;
            overflow:hidden;
        }

        .progress-fill{
            height:100%;
            background:#2563eb;
            border-radius:999px;
        }
        .project-container{
            max-width:1200px;
            margin:auto;
            padding:40px 20px;
        }

        .back-btn{
            display:inline-block;
            margin-bottom:30px;
            text-decoration:none;
            padding:10px 18px;
            border-radius:10px;
            background:#1f2937;
            color:white;
        }

        .project-header{
            margin-bottom:40px;
        }

        .project-title{
            font-size:42px;
            font-weight:700;
            margin-bottom:15px;
        }

        .project-description{
            font-size:18px;
            opacity:.8;
        }

        .project-image{
            text-align:center;
            margin-bottom:40px;
        }

        .project-image img{
            max-width:700px;
            width:100%;
            height:auto;
            border-radius:15px;
            display:inline-block;
        }

        .project-image img{
            width:100%;
            display:block;
        }

        .project-section{
            margin-bottom:40px;
        }

        .project-section h2{
            margin-bottom:15px;
            font-size:28px;
        }

        .tech-stack{
            display:flex;
            flex-wrap:wrap;
            gap:10px;
        }

        .tech-badge{
            padding:10px 15px;
            border-radius:999px;
            background:#eef2ff;
            color:#111827;
            font-size:14px;
        }

        .pdf-btn{
            display:inline-block;
            margin-top:20px;
            padding:12px 20px;
            border-radius:10px;
            background:#2563eb;
            color:white;
            text-decoration:none;
        }
    </style>
</head>
<body>

<div class="project-container">

    <a href="{{ url('/') }}" class="back-btn">
        ← Kembali ke Home
    </a>

    <div class="project-header">

        <h1 class="project-title">
            {{ $project->title }}
        </h1>
        <div class="project-progress">
            <div class="progress-info">
                <span>Progress Project</span>
                <span>{{ $project->progress }}%</span>
            </div>

            <div class="progress-bar">
                <div
                    class="progress-fill"
                    style="width: {{ $project->progress }}%;"
                ></div>
            </div>
        </div>

        <p class="project-description">
            {{ $project->short_description }}
        </p>

    </div>

    @if($project->diagram)
        <div class="project-image">
            <img
                src="{{ asset('storage/' . $project->diagram) }}"
                alt="{{ $project->title }}"
            >
        </div>
    @endif

    <div class="project-section">
        <h2>Analisis Masalah</h2>

        {!! $project->problem_analysis !!}
    </div>

    <div class="project-section">
        <h2>Solusi & Perancangan</h2>

        {!! $project->solution !!}
        @if($project->features)
            <h2>Fitur Utama</h2>
            {!! $project->features !!}
        @endif

        @if($project->implementation_result)
            <h2>Hasil Implementasi</h2>
            {!! $project->implementation_result !!}
        @endif
    </div>
    

    <div class="project-section">

        <h2>Tech Stack</h2>

        <div class="tech-stack">

            @foreach(explode(',', $project->tech_stack) as $tech)
                <span class="tech-badge">
                    {{ trim($tech) }}
                </span>
            @endforeach

        </div>

    </div>

    @if($project->pdf_report)

        <div class="project-section">

            <h2>Laporan Project</h2>

            <a
                href="{{ asset('storage/' . $project->pdf_report) }}"
                target="_blank"
                class="pdf-btn"
            >
                📄 Lihat Laporan PDF
            </a>

        </div>

    @endif

</div>

</body>
</html>