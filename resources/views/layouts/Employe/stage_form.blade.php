@csrf
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="nom">Nom du societe</label>
            <input type="text" name="nom_entre" value="{{ $stages->nom_societe ?? old('nom_entre') }}" id="nom_entre" class="form-control @error('nom_entre') is-invalid @enderror" placeholder="Nom d'entreprise de stage">
            @error('nom_entre')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="duree">Duree</label>
            <input type="text" name="duree_stage" value="{{ $stages->duree ?? old('duree_stage') }}" id="duree_stage" class="form-control @error('duree_stage') is-invalid @enderror" placeholder="Duree de stage">
            @error('duree_stage')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group" id="typeContainer">
            <label for="type">Type de Stage</label>
            <select name="type_stage" id="type" class="form-control typeStage">
                <option>Choose...</option>
                <option value="initiation" {{ old('type_stage', $stages->type_stage) == "initiation" ? 'selected' : '' }}>Initiation</option>
                <option value="perfectionnement" {{ old('type_stage', $stages->type_stage) == "perfectionnement" ? 'selected' : '' }}>Perfectionnement</option>
                <option value="pfe" {{ old('type_stage', $stages->type_stage) == "pfe" ? 'selected' : '' }}>PFE</option>
            </select>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="coordoonnes">Coordoonnées</label>
            <input type="coordoonnes" name="coordoonees" value="{{ $stages->coordoonees ?? old('coordoonees') }}" id="coordoonees" class="form-control @error('coordoonees') is-invalid @enderror" placeholder="Coordonnee de entreprise">
            @error('coordoonnes')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
    <div class="col" id="sujetField" style="display:none">
        <div class="form-group">
            <label for="sujet">Sujet</label>
            <input type="text" name="sujet" value="{{ $stages->sujet ?? old('sujet') }}" id="sujet" class="form-control @error('sujet') is-invalid @enderror" placeholder="Sujet PFE">
            @error('sujet')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
    </div>
</div>

<div class="row">
    <div class="col"><button type="submit" class="btn btn-block btn-outline-success"><i class="fas fa-save"></i> Save</button></div>
    <div class="col"><button type="reset" class="btn btn-block btn-outline-danger"><i class="fas fa-window-close"></i> Cancel</button></div>
</div>