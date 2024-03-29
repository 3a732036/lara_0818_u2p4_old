<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.blade.php">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route('posts.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.show')}}">Sample Post</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
