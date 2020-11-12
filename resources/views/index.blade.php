<!DOCTYPE html>
<html >

<head>

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
<link rel="stylesheet"  href="{{ asset('/css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/dark.css') }}"  />
<link rel="stylesheet" href="{{ asset('/css/font-icons.css') }}"/>
<link rel="stylesheet" href="{{ asset('/css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}"/>
<link rel="stylesheet" href="{{ asset('/css/responsive.css') }}"/>
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>project</title>
</head>
<body class="stretched">


<section id="page-title">
<div class="container clearfix">
<h1>Home</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">project</li>
</ol>
</div>
</section>

<section id="content">
<div class="content-wrap">
<div class="container clearfix">

<div id="posts" class="post-grid grid-container grid-2 clearfix" data-layout="fitRows">
 
    @foreach ($projects as $project)
    <div class="entry clearfix">
        <div class="entry-image">
           <a data-lightbox="image"><img class="image_fade" src="{{ asset("img/background.png") }}" alt="Standard Post with Image"></a>
        </div>

        <div class="entry-title">
        <h2> {{ $project->name }}</h2>
        </div>

        <div class="entry-content">
        <p>{{ $project->description }}</p>
        <a href="{{route('step',$project->id) }}" class="primary-btn1">show</a>
    </div>
    </div>
    @endforeach

</div>


</div>
</div>
</section>

<div id="gotoTop" class="icon-angle-up"></div>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('/js/plugins.js') }}"></script>
<script src="{{ asset('/js/functions.js') }}"></script>
</body>

</html> 