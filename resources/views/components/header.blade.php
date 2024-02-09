<div class="w-100 bg-primary d-flex justify-content-evenly">
    <a class="text-decoration-none text-white" href="#"><span class="text-white">DC POWER VISA</span></a>
    <a class="text-decoration-none text-white" href="#"><span class="text-white">ADDITIONAL DC SITES</span></a>
</div>

<header>
    <!-- Logo principale -->
    <a href="#">
        <img src="{{ Vite::asset('/public/dc-logo.png') }}" alt="">
    </a>

    <nav class="d-flex">
        <ul class="m-0 list-unstyled d-flex justify-content-center align-items-center">
            @foreach($links as $link)
            <li>
                <a href="{{$link['url']}}" class="{{$link['current'] ? 'active' : ''}}">{{$link['text']}}</a>
            </li>
            @endforeach
        </ul>

        <div class="input-group align-items-center">
            <input type="search" class="form-control" placeholder="Search...🔍" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Search</button>
            </div>
        </div>
    </nav>
</header>