<main>
    <div>
        <img class="fill" src="{{ Vite::asset('/public/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="btn">
            <h3>CURRENT SERIES</h3>
        </div>
        <div class="cards">
            <AppThumbs v-for="(thumb, i) in thumbs" :key="i" :details="thumb" />
        </div>
        <div class="btn load_more">
            <a href="#">LOAD MORE</a>
        </div>
    </div>
</main>