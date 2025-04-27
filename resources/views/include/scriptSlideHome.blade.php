@isset($imgslide)
    @if ($imgslide->image1)
        <script>
            easy_background("#home", {
                slide: [
                    "{{ asset('storage/' . $imgslide->image1) }}",
                    "{{ asset('storage/' . $imgslide->image2) }}",
                    "{{ asset('storage/' . $imgslide->image3) }}",
                ],
                delay: [4000, 4000, 4000]
            });
        </script>
    @else
        Aucune image disponible
    @endif
@endisset
