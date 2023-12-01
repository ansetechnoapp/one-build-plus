<form action="{{route('update.slideimage')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="small mb-1" for="inputimage">Inserer une image 1</label>
        <input type="file" name="img1">
        @if ($errors->has('img1'))
            <div class="alert alert-danger">{{ $errors->first('img1') }}</div>
        @endif
    </div>

    <div class="mb-3">
        <label class="small mb-1" for="inputimage">Inserer une image 2</label>
        <input type="file" name="img2">
        @if ($errors->has('img2'))
            <div class="alert alert-danger">{{ $errors->first('img2') }}</div>
        @endif
    </div>

    <div class="mb-3">
        <label class="small mb-1" for="inputimage">Inserer une image 3</label>
        <input type="file" name="img3">
        @if ($errors->has('img3'))
            <div class="alert alert-danger">{{ $errors->first('img3') }}</div>
        @endif
    </div>
    <hr class="my-4">
    <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="submit" id="submitBtn">Valider</button>
    </div>
</form>