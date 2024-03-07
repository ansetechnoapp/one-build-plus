<style>
    .tb {
        display: table;
        width: 100%;
    }

    .td {
        display: table-cell;
        vertical-align: middle;
    }

    input,
    button {
        color: #fff;
        font-family: Nunito;
        padding: 0;
        margin: 0;
        border: 0;
        background-color: transparent;
    }

    #cover {
        margin: 10px auto 10px 0;
        border-radius: 20px;
        box-shadow: 0 10px 40px #fd151969, 0 0 0 20px #ffffffeb;
        transform: scale(0.6);
    }


    input[type="text"] {
        width: 100%;
        font-size: 3rem;
        line-height: 1;
    }

    input[type="text"]::placeholder {
        color: #070606;
    }

    #s-cover {
        width: 1px;
        padding-left: 35px;
    }

    .container-search {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Koulen&family=Lato&family=Nunito&family=Playfair+Display:ital@1&family=Prata&family=Raleway:ital,wght@1,100&family=Roboto&family=Roboto+Condensed&family=Teko&display=swap');

    .btn-act1 {

        font-family: Roboto, sans-serif;
        font-weight: 0;
        font-size: 14px;
        color: #fff;
        background: linear-gradient(90deg, #0066CC 0%, #c500cc 100%);
        padding: 10px 30px;
        border: 2px solid #0066cc;
        box-shadow: rgb(0, 0, 0) 0px 0px 0px 0px;
        border-radius: 50px;
        transition: 1000ms;
        transform: translateY(0);
        display: flex;
        flex-direction: row;
        align-items: center;
        cursor: pointer;
    }

    .btn-act1:hover {

        transition: 1000ms;
        padding: 10px 50px;
        transform: translateY(-0px);
        background: linear-gradient(90deg, #0066CC 0%, #c500cc 100%);
        color: #0066cc;
        border: solid 2px #0066cc;
    }
</style>
<div id="cover">
    <form method="POST" action="{{ route('admin.search.prod.admin') }}">
        @csrf
        <div class="tb">
            <div style="display: flex">
                <select name="ground_type">
                    <option value>sélectionnez un type de terrain</option>
                    @isset($ground_type)
                        @foreach ($ground_type as $result)
                            <option name="{{ $result->ground_type }}">{{ $result->ground_type }}</option>
                        @endforeach
                    @endisset
                </select>

                <select class="" name="communes">
                    <option value>selectionnez une commune</option>
                    @isset($communes)
                        @foreach ($communes as $result)
                            <option name="{{ $result->communes }}">{{ $result->communes }}</option>
                        @endforeach
                    @endisset
                </select>
                <input type="text" name="price_min" placeholder="prix minimal">
                <input type="text" name="price_max" placeholder="prix maximal">
            </div>
            <div class="vcenter">
                <button type="submit">
                    {{-- <div id="s-circle"></div> --}}
                    <img src="assets/icons8-search-150.png" alt="search" width="60" height="60">
                </button>
            </div>
        </div>
    </form>
</div>
