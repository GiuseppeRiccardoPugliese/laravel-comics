<section>

    <ul class="container">
        @foreach($merchs as $merch)
        <li>
            <a href="#">
                <div>
                    <img src="{{Vite::asset($merch['src'])}}" alt="">
                </div>

                <span>
                    {{ $merch['text'] }}
                </span>
            </a>
        </li>
        @endforeach
    </ul>

</section>