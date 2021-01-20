@extends('layouts.app')
@section('content')
<body style="margin-left:20%;max-width:800px;margin-right:25%;min-width:800px;">

<div  class="row">
<div  class="col-sm-12">
 <h1 class="display-3" >Bedrijven</h1>
 <table  class="table table-striped">
 <thead>
 <tr>
 <td>ID &nbsp; </td>
 <td>Bedrijfsnaam &nbsp; </td>
 <td>Plaats &nbsp; </td>
 <td>Telefoonnummer </td>

 <!-- hier stond meer -->
 <td colspan = 2>Actions</td>
 </tr>
 </thead>
 <tbody>
 @foreach($companies as $company)
 <tr>
 <td>{{$company->id}}</td>
 <td>{{$company->Bedrijfsnaam}}&nbsp;</td>
 <td> {{$company->Plaats}}&nbsp;</td>
 <td> {{$company->Telefoonnummer}}&nbsp;</td>
 <!-- hier stond meer -->
 <td>
 <button type="submit"><a href="{{ route('companies.edit',$company->id)}}"
class="btn btn-primary">Aanpassen</a> </button>
 </td>
 <td>
 <form action="{{ route('companies.destroy', $company->id)}}"
 method="post">
 @method('DELETE')
 @csrf
 &nbsp;
 <button class="btn btn-danger" type="submit">Verwijderen</button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>

<div>
</div>
</body>

@endsection
