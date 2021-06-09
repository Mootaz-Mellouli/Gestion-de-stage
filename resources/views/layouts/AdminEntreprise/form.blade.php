@csrf
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="nom">Firstname</label>
            <input type="text" name="nom" value="{{ $entreprise->nom ?? old('nom') }}" id="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="nom">
            @error('nom')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="prenom">Lastname</label>
            <input type="text" name="prenom" value="{{ $entreprise->prenom ?? old('prenom') }}" id="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="prenom">
            @error('prenom')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $entreprise->email ?? old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="person@example.com">
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
</div>
<div class="row">
     <div class="col">
        <div class="form-group">
            <label for="nomEntreprise">Name Entreprise</label>
            <input type="text" name="nomEntreprise" value="{{ $entreprise->nomEntreprise ?? old('nomEntreprise') }}" id="nomEntreprise" class="form-control @error('nomEntreprise') is-invalid @enderror" placeholder="nomEntreprise">
            @error('nomEntreprise')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="emailEntreprise">Email Entreprise</label>
            <input type="emailEntreprise" name="emailEntreprise" value="{{ $entreprise->emailEntreprise ?? old('emailEntreprise') }}" id="emailEntreprise" class="form-control @error('emailEntreprise') is-invalid @enderror" placeholder="person@example.com">
            @error('emailEntreprise')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
</div>

<div class="row">
    <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button></div>

    <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button></div>
</div>

