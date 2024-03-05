<!-- Billing history table-->
<div class="table-responsive table-billing-history">
    <table class="table mb-0">
        <thead>
            <tr>
                <th class="border-gray-200" scope="col">N</th>
                <th class="border-gray-200" scope="col">propriétaire</th>
                <th class="border-gray-200" scope="col">addresse</th>
                <th class="border-gray-200" scope="col">département</th>
                <th class="border-gray-200" scope="col">commune</th>
                <th class="border-gray-200" scope="col">arrondissement</th>
                <th class="border-gray-200" scope="col">superficie</th>
                <th class="border-gray-200" scope="col">prix</th>
                <th class="border-gray-200" scope="col">prix promo</th>
                <th class="border-gray-200" scope="col">type de terre</th>
                <th class="border-gray-200" scope="col">voir</th>
                <th class="border-gray-200" scope="col">Modifier</th>
            </tr>
        </thead>
        <tbody>
            @isset($allprod)
                @foreach ($allprod as $post) 
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->landOwner_propertyName }}</td>
                        <td>{{ $post->address }}</td>
                        <td>{{ $post->department }}</td>
                        <td>{{ $post->communes }}</td>
                        <td>{{ $post->borough }}</td>
                        <td>{{ $post->area }}</td>
                        <td>{{ $post->price }}</td>
                        <td>{{ $post->price_min }}</td>
                        <td>{{ $post->ground_type }}</td>
                        <td><a href="{{ route('property_detail', ['id' => $post->id, 'price' => $post->price]) }}"
                                class="badge text-dark"
                                style="background-color: rgb(14 165 233)">Afficher</a></td>
                        <td><a href="{{ route('view.prod.update', ['id' => $post->id]) }}"
                                class="badge text-dark"
                                style="background-color: rgb(14 165 233)">Modifier</a></td>
                    </tr>
                @endforeach

            @endisset

        </tbody>
    </table>
</div>