@isset($slide)
    @if ($slide->img1)
        <script>
            easy_background("#home", {
                slide: [
                    "{{ asset('storage/' . $slide->img1) }}",
                    "{{ asset('storage/' . $slide->img2) }}",
                    "{{ asset('storage/' . $slide->img3) }}",
                ],
                delay: [4000, 4000, 4000]
            });
        </script>
    @else
        Aucune image disponible
    @endif
@endisset