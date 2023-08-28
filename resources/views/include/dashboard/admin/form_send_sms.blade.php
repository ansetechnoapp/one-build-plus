<form {{-- action="#" method="POST" --}} enctype="multipart/form-data">
    @csrf
    <div class="mb-3">


        <label class="small mb-1" for="inputaddress">Titre</label>
        <input class="form-control" id="inputaddress" type="text"
            placeholder="entrer l'addresse de la propiété" name="address" required>
        @if ($errors->has('address'))
            <div class="alert alert-danger">{{ $errors->first('address') }}</div>
        @endif
    </div>
    <div class="row gx-3">
        <div class="mb-3 col-md-6">
            <label class="small mb-1" for="inputland_owner">Sujet</label>
            <input class="form-control" id="inputland_owner" type="text" placeholder="Enter your first name"
                value="xora Valerie" name="land_owner" required>
            @if ($errors->has('land_owner'))
                <div class="alert alert-danger">{{ $errors->first('land_owner') }}</div>
            @endif
        </div>
    </div>
    <div class="mb-3">
        <label class="small mb-1" for="inputdescription">Message</label>
        <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="message" required></textarea>
        @if ($errors->has('description'))
            <div class="alert alert-danger">{{ $errors->first('description') }}</div>
        @endif
    </div>
    <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="submit" disabled>Envoyer</button>
    </div>
</form>