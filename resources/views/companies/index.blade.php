<x-app-layout>
	<x-slot name="header">
		<ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">Kontakty</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('companies.index') }}">Podmioty</a></li>
		</ol>
	</x-slot>

	<div class="box">
		<div class="card">
			<div class="table-responsive">
				<table class="table table-vcenter card-table">
					<thead>
						<tr>
							<th  class="w-1">#</th>
							<th>Nazwa</th>
							<th>Nazwa skrócona</th>
							<th class="w-1"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($companies as $company)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td><a href="{{ route('companies.show', $company->id)}}">{{ $company->name }}</a></td>
							<td class="text-muted">{{ $company->short_name }}</td>
							<td class="text-muted"><a href="{{ route('companies.edit', $company->id)}}">edit</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</x-app-layout>