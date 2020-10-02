@foreach($people as $person)
{{ $person->first_name }}
{{ $person->last_name }} :::: 
{{ $person->company->name }}
</br>
@endforeach