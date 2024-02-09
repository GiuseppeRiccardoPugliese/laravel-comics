<main>
    <div>
        <img class="fill" src="{{ Vite::asset('/public/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="btn rounded-0">
            <h3 class="m-0">CURRENT SERIES</h3>
        </div>
        <div class="cards">
            @foreach($comics as $comic)
            <div class="thumb-card">
                <a href="#">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['type']}}">
                    <h3 class="fs-5">{{$comic['title']}}</h3>
                </a>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-center">
            <div class="btn load_more rounded-0">
                <a href="#">LOAD MORE</a>
            </div>
        </div>

    </div>
</main>