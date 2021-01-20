@extends('layouts.app')
@section('content')
<body style="margin-left:20%;max-width:800px;margin-right:25%;min-width:800px;">

<div  class="row">
<div  class="col-sm-12">
 <h1 class="display-3" >Contacten</h1>
 <table  class="table table-striped">
   <!-- style="min-width:800px;padding:10px;box-shadow: 1px 1px 10px 1px black;" -->
 <thead>
 <tr>
 <td>ID &nbsp; </td>
 <td>Naam &nbsp; </td>
  <td>Bedrijf</td>
 <td>Achternaam &nbsp; </td>
 <td>Email </td>

 <!-- hier stond meer -->
 <td colspan = 2>Actions</td>
 </tr>
 </thead>
 <tbody>
 @foreach($contacts as $contact)
 <tr>
 <td>{{$contact->id}}</td>
 <td>{{$contact->first_name}}&nbsp;</td>
  <td>{{$contact->company->Bedrijfsnaam}}</td>
 <td> {{$contact->last_name}}&nbsp;</td>
 <td> {{$contact->email}}&nbsp;</td>
 <!-- hier stond meer -->
 <td>
 <button type="submit"><a href="{{ route('contacts.edit',$contact->id)}}"
class="btn btn-primary">Aanpassen</a> </button>
 </td>
 <td>
 <form action="{{ route('contacts.destroy', $contact->id)}}"
 method="post">
 @csrf
 @method('DELETE')
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
