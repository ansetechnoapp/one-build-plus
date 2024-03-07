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
        /* border-collapse: separate; */
        border-spacing: 1px;
        text-align: left;
        table-layout: fixed;
        /* table-layout: auto; */

        @media (max-width: 1280px) {
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
        border-bottom: none;
        border-left: none;
        border-right: none;

        @media (max-width: 640px) {
            display: block;
            max-height: 125px;
            overflow-y: auto;
        }
    }
</style>

@props(['header'])

<div class="table_component" role="region" tabindex="0">


    <table>
        {{-- <caption>Table 1</caption> --}}
        <thead>
            <tr>
                @foreach ($header as $headers)
                    {!! $headers !!}
                @endforeach
                <!-- Nouvelle colonne -->
            </tr>
        </thead>
        <tbody>
            {{ $slot }} 
        </tbody>

    </table>

</div>
