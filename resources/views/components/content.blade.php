<main>
    <div>
        <img class="fill" src="{{ Vite::asset('/public/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="btn">
            <h3 class="m-0">CURRENT SERIES</h3>
        </div>
        <div class="cards">
            @foreach($comics as $comic)
            <div class="thumb-card">
                <a href="#">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['type']}}">
                    <h3>{{$comic['title']}}</h3>
                </a>
            </div>
            @endforeach
        </div>
        <div class="btn load_more">
            <a href="#">LOAD MORE</a>
        </div>
    </div>
</main>