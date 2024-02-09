<section id="merch_sec">
    <div class="container">
        <ul class="container">
            @foreach($merchs as $merch)
                <li>
                    <a href="#">
                        <div class="merch_imgwrapper">
                            <img src="{{Vite::asset($merch['src'])}}" alt="">
                        </div>

                        <span>
                            {{ $merch['text'] }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>