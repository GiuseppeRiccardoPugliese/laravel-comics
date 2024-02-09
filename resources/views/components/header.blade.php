<div class="w-100 bg-primary d-flex justify-content-evenly">
    <span class="text-white">DC POWER VISA</span>
    <span class="text-white">ADDITIONAL DC SITES</span>
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
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
    </nav>
</header>