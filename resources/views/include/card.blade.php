@isset($allprod)
    @foreach ($allprod as $data)
        <div class="card-container">
            @if ($data->img)
                <a class="hero-image-container"
                    href="{{ route('property_detail', ['id' => $data->id, 'price' => $data->price]) }}"><img
                        class="hero-image" src="storage/{{ $data->img->main_image }}" alt="Image du produit"></a>
            @else
                <a class="hero-image-container"
                    href="{{ route('property_detail', ['id' => $data->id, 'price' => $data->price]) }}"><img
                        class="hero-image" src="https://i.postimg.cc/NfR2yhNs/image-equilibrium.jpg"
                        alt="Image du produit"></a>
            @endif
            <main class="main-content">
                <h1><a
                        href="{{ route('property_detail', ['id' => $data->id, 'price' => $data->price]) }}">{{ $data->address }}</a>
                </h1>
                <div class="flex-row">
                    <div class="row-card">
                        <p><span>propriétaire:</span> {{ $data->landOwner_propertyName }}</p>
                    </div>
                    <div class="row-card">
                        <p><span>arrondissement:</span> {{ $data->borough }}</p>
                    </div>

                    <div class="flex-column">
                        <p><span>département:</span> {{ $data->department }}</p>

                        <p><span>prix:</span> {{ $data->price }}</p>
                        <p><span>type de terre:</span> {{ $data->ground_type }}</p>
                    </div>
                    <div class="flex-column">
                        <p><span>commune:</span> {{ $data->communes }}</p>
                        <p><span>superficie:</span> {{ $data->area }}</p>
                        <p><span>prix promo:</span> {{ $data->price_min }}</p>

                    </div>
                </div>

            </main>
            <div class="card-attribute">
                <a href="{{ route('view.prod.update', ['id' => $data->id]) }}">Modifier</a>
            </div>
        </div>
    @endforeach
@endisset


<style>
    .row-card {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 0.5em;
        font-weight: bold;
        color: #d99904;
        font-family: "Source Sans Pro", sans-serif;
        font-style: italic;
    }

    .flex-row {
        display: flex;
        flex-wrap: wrap;
    }

    .flex-column {
        width: 50%;
        display: flex;
        flex-direction: column;
        gap: 0.5em;
        margin-top: 0.5em;
        margin-bottom: 1em;
        /* align-items: center;
        justify-content: space-between; */
    }

    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap');

    :root {

        font-size: 15px;

        /* Primary */
        --var-soft-blue: #00bcd4;
        --var-cyan: hsl(178, 100%, 50%);
        /* Neutral */
        --var-main-darkest: hsl(217, 54%, 11%);
        --var-card-dark: #282c34;
        --var-line-dark: hsl(215, 32%, 27%);
        --var-lightest: white;

        /* Fonts */

        --var-heading: normal normal 600 1.5em/1.6em 'Outfit', sans-serif;

        --var-small-heading: normal normal 400 1em/1em 'Outfit', sans-serif;

        --var-para: normal normal 300 1em/1.55em 'Outfit', sans-serif;
    }

    @media (min-width:600px) {
        body {
            font-size: 18px;
        }
    }

    img {
        width: 100%;
        border-radius: 15px;
        display: block;
    }

    a {
        color: inherit;
    }

    .card-container h1 {
        font: var(--var-heading);
        color: var(--var-card-dark);
        padding: 1em 0 0.5em 0;
        font-size: large;
        text-transform: uppercase;
    }


    p {
        font: var(--var-para);
        color: var(--var-card-dark);
    }

    p span {
        text-transform: uppercase;
        color: var(--var-soft-blue);
        margin-right: 0.3rem;
    }

    span {
        color: var(--var-card-dark);
    }

    .card-container {
        width: 100%;
        /* max-width: 400px; */
        height: fit-content;
        margin: 0.5em auto;
        background: #00000005;
        border-radius: 15px;
        margin-bottom: 1rem;
        padding: 2rem 2rem 0rem 2rem;
        border: rgb(229, 62, 62, 1) solid;
    }

    .card-attribute {
        display: flex;
        align-items: center;
        padding: 1em 0;
        justify-content: center;
        margin-top: 0.8rem;
        text-align: center
    }

    .card-attribute {
        padding-bottom: 1em;
        border-top: 2px solid var(--var-line-dark);
    }

    a.hero-image-container {
        position: relative;
        display: block;
    }

    img.eye {
        position: absolute;
        width: 100%;
        max-width: 2em;
        top: 44%;
        left: 43%;
    }

    @media (min-width:400px) {
        img.eye {
            max-width: 3em;
        }
    }

    .hero-image-container::after {
        content: '';
        background-image: url("https://i.postimg.cc/9MtT4GZY/view.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 5rem;
        background-color: hsla(178, 100%, 50%, 0.3);
        width: 100%;
        height: 100%;
        border-radius: 1rem;
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        z-index: 2;
        opacity: 0;
        transition: opacity 0.3s ease-out;
    }

    .hero-image-container:hover::after {
        opacity: 1;
    }

    .card-attribute a {
        font-family: "Source Sans Pro", sans-serif;
        width: 100%;
        color: var(--var-card-dark);
        font-size: 1.5rem;
        font-weight: bold;
        text-shadow: 0 -1px #000000;
        /* background-image: linear-gradient(#ffe46e 0%, #ffd936 30% 80%, #ffcd19 100%); */
        padding: 1.4rem;
        /* border: solid 1px #ffffff; */
        outline: none;
        border-radius: 2.5rem / 50%;
        transition: filter 500ms ease-out;
        background-color: rgb(229, 62, 62, 1);
    }

    .card-attribute a:hover {
        background-color: rgb(22 163 74 / var(--tw-text-opacity));
        filter: brightness(90%);
    }

    .card-attribute a:active {
        filter: brightness(80%);
    }
</style>
