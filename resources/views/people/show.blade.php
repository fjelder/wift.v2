<x-app-layout>
	<x-slot name="header">
		


		<ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">Kontakty</a></li>
			<li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">Osoby</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="#">{{ $person->first_name }} {{ $person->last_name }}</a></li>
		</ol>


	</x-slot>
	<div class="box">
		<div class="card">
			<div class="card-body">
				<p>{{ $person->first_name }} {{ $person->last_name }}</p>
				<p>{{ $person->workstand }}</p>
				<p>{{ $person->phone_number_1 }}</p>
				<p>{{ $person->phone_number_2 }}</p>
				<p>{{ $person->email }}</p>
				<p>{{ $person->company->name }}</p>
				<textarea class="form-control" rows="15" readonly="">{{$person->description}}</textarea>
				<p>{{ $person->created_at }}</p>
				<p>{{ $person->updated_at }}</p>
			</div>
			
		</div>
	</div>
</x-app-layout>