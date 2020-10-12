<x-app-layout>
	<x-slot name="header">
		<ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('contacts.index') }}">Kontakty</a></li>
		</ol>
	</x-slot>
	<div class="box">
		<div class="card">
			<div class="table-responsive">
				<table class="table table-vcenter card-table">
					<thead>
						<tr>
							<th style="max-width: 10px;">#</th>
							<th>Imię i nazwisko</th>
							<th>Firma</th>
							<th>Stanowisko</th>
							<th>Telefon</th>
							<th>Email</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						@foreach($people as $person)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td><a href="{{ route('contacts.show', $person->id) }}">{{ $person->first_name }} {{ $person->last_name }}</a></td>
							<td>{{ $person->company->name }}</td>
							<td>{{ $person->workstand }}</td>
							<td>{{ $person->phone_number_1 }}</td>
							<td>{{ $person->email }}</td>
							<td>
								<a href="{{ route('contacts.edit', $person->id) }}">
									<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"></path><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"></path><line x1="16" y1="5" x2="19" y2="8"></line></svg>
								</a>
								
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- @livewire('search-people')	 -->
</x-app-layout>