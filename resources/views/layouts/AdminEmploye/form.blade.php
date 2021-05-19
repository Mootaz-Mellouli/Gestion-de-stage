@csrf
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" value="{{ $employe->first_name ?? old('first_name') }}" id="firstname" class="form-control @error('firstname') is-invalid @enderror @error('lastname') is-invalid @enderror" placeholder="Firstname goes here">
            @error('first_name')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" value="{{ $employe->last_name ?? old('last_name') }}" id="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="Lastname goes here">
            @error('lastname')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{ $emp->phone_number ?? old('phone') }}" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="+21612345678">
            @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $emp->email ?? old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="person@example.com">
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
</div>

<div class="row">
    <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button></div>
    <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button></div>
</div>