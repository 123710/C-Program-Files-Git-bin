@extends('layouts.app')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
 <h1 class="display-3">Company aanpassen</h1>
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
<li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 <br />
 @endif
 <form method="post"
action="{{ route('companies.update', $company->id) }}">
 @method('PUT')
 @csrf

 <div class="form-group">
 <label for="Bedrijfsnaam">Bedrijfsnaam:</label>
 <input type="text" class="form-control" name="Bedrijfsnaam"
value={{ $company->Bedrijfsnaam }} />

<label for="Plaats">Plaats:</label>
<input type="text" class="form-control" name="Plaats"
value={{ $company->Plaats }} />

<label for="Telefoonnummer">Telefoonnummer:</label>
<input type="text" class="form-control" name="Telefoonnummer"
value={{ $company->Telefoonnummer }} />
 </div>
 <button type="submit" class="btn btn-primary">Aanpassen</button>
 </form>
 </div>
</div>
