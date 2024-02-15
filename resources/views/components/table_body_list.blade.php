<style>
    ::-webkit-scrollbar {
        width: 10px;
        /* largeur de la barre de défilement */
    }

    ::-webkit-scrollbar-thumb {
        background-color: #888;
        /* couleur de la poignée de défilement */
        border-radius: 6px;
        /* bordure arrondie de la poignée */
    }

    ::-webkit-scrollbar-thumb {
        background-color: #888;
        /* couleur de la poignée de défilement */
        border-radius: 6px;
        /* bordure arrondie de la poignée */
    }

    .table_component {
        overflow: auto;
        width: 100%;

        @media (max-width: 640px) {
            display: block;
            overflow: auto;
        }

        ::-webkit-scrollbar {
            width: 6px;
            /* largeur de la barre de défilement */
        }
    }

    .table_component table {
        border: 1px solid #7EA8F8;
        height: 100%;
        width: 100%;
        border-collapse: separate;
        border-spacing: 1px;
        text-align: left;
        table-layout: fixed;
        /* table-layout: auto; */

        @media (max-width: 640px) {
            table-layout: auto;
        }
    }

    .table_component caption {
        caption-side: top;
        text-align: center;
    }

    .table_component th {
        border: 1px solid #7EA8F8;
        background-color: #7EA8F8;
        color: #000000;
        padding: 5px;
    }

    .table_component td {
        border: 1px solid #7EA8F8;
        background-color: #ffffff;
        color: #000000;
        padding: 5px;
        word-wrap: break-word;
    }

    .table_component .description-column {
        display: block;
        max-height: 250px;
        overflow-y: auto;
        height: auto;

        @media (max-width: 640px) {
            display: block;
            max-height: 125px;
            overflow-y: auto;
        }
    }
</style>
<style>
    /* * {
  outline: none;
}

html,
body {
  height: 100%;
  min-height: 100%;
}

body {
  margin: 0;
  background-color: #ffd8d8;
}
 */
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
        /* position: absolute; */
        /* top: 50%;
  left: 0;
  right: 0; */
        /* width: 550px;
        padding: 35px;
        height: 2rem; */
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

    button {
        /* position: relative; */
        /* display: block;
  width: 84px;
  height: 96px;
  cursor: pointer; */
    }

    /* #s-circle {
        position: relative;
        top: -8px;
        left: 0;
        width: 43px;
        height: 43px;
        margin-top: 0;
        border-width: 15px;
        border: 15px solid #fff;
        background-color: transparent;
        border-radius: 50%;
        transition: 0.5s ease all;
    } */

    /* button span {
        position: absolute;
        top: 68px;
        left: 43px;
        display: block;
        width: 45px;
        height: 15px;
        background-color: transparent;
        border-radius: 10px;
        transform: rotateZ(52deg);
        transition: 0.5s ease all;
    } */

    /* button span:before,
    button span:after {
        content: "";
        position: absolute;
        bottom: 0;
        right: 0;
        width: 45px;
        height: 15px;
        background-color: #fff;
        border-radius: 10px;
        transform: rotateZ(0);
        transition: 0.5s ease all;
    } */

    /* #s-cover:hover #s-circle {
        top: -1px;
        width: 67px;
        height: 15px;
        border-width: 0;
        background-color: #fff;
        border-radius: 20px;
    }

    #s-cover:hover span {
        top: 50%;
        left: 56px;
        width: 25px;
        margin-top: -9px;
        transform: rotateZ(0);
    } */

    /* #s-cover:hover button span:before {
        bottom: 11px;
        transform: rotateZ(52deg);
    }

    #s-cover:hover button span:after {
        bottom: -11px;
        transform: rotateZ(-52deg);
    }

    #s-cover:hover button span:before,
    #s-cover:hover button span:after {
        right: -6px;
        width: 40px;
        background-color: #fff;
    } */

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
<div class="table_component" role="region" tabindex="0">
    <div class="container-search">
        <div id="cover">
            <form method="get" action="">
                <div class="tb">
                    <div class="td"><input type="text" placeholder="recherche" required></div>
                    <div class="vcenter">
                        <button type="submit">
                            {{-- <div id="s-circle"></div> --}}
                            <img src="assets/icons8-search-150.png" alt="search" width="60" height="60">
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <button class="btn-act1">tout les produits</button>
        </div>

    </div>

    <table>
        {{-- <caption>Table 1</caption> --}}
        <thead>
            <tr>
                @foreach ($header as $headers)
                    <th>{{ $headers }}</th>
                @endforeach
                <!-- Nouvelle colonne -->
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>

    </table>

</div>
