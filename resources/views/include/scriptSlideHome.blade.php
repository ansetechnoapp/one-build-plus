@isset($imgslide)
    @if ($imgslide->img1)
        <script>
            easy_background("#home", {
                slide: [
                    "{{ asset('storage/' . $imgslide->img1) }}",
                    "{{ asset('storage/' . $imgslide->img2) }}",
                    "{{ asset('storage/' . $imgslide->img3) }}",
                ],
                delay: [4000, 4000, 4000]
            });
        </script>
    @else
        Aucune image disponible
    @endif
@endisset