<x-app-layout>
	<x-slot name="header">
		{{ __('Osoby') }}
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
							<th>Szczegóły</th>
						</tr>
					</thead>
					<tbody>
						@foreach($people as $person)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $person->first_name }} {{ $person->last_name }}</td>
							<td>{{ $person->company->name }}</td>
							<td>
								<a href="{{ route('people.show', $person->id) }}">edit</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>	
</x-app-layout>