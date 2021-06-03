@csrf
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" value="{{ $employe->first_name ?? old('firstname') }}" id="firstname" class="form-control @error('firstname') is-invalid @enderror" placeholder="Firstname">
            @error('firstname')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" value="{{ $employe->last_name ?? old('lastname') }}" id="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="Lastname">
            @error('lastname')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{ $employe->phone_number ?? old('phone') }}" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="+21612345678">
            @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $employe->email ?? old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="person@example.com">
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="salaire">Salaire</label>
            <input type="text" name="salaire" value="{{ $employe->salaire ?? old('salaire') }}" id="salaire" class="form-control @error('salaire') is-invalid @enderror" placeholder="TND">
            @error('salaire')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
</div>

<div class="row">
    <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button></div>
    <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button></div>
</div>