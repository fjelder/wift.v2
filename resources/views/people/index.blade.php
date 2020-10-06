<x-app-layout>
	<x-slot name="header">
		{{ __('Dane osobowe') }}
	</x-slot>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Lista osób w systemie</h5>
				</div>
				<div class="card-body">
					
				<table class="table table-inverse table-hover table-responsive-sm">
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
								<a href="{{ route('people.show', $person->id) }}"><i class="feather icon-clipboard"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
</div>	
</div>

</x-app-layout>