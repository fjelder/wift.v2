<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Companies') }}
		</h2>
	</x-slot>

	<div>
		<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

			<div class="col-xl-12">
				<div class="card">
					<div class="card-header">
						<h5>Lista firma współpracujących</h5>
						<span class="d-block m-t-5">wybierz <code>firmę</code>, żeby zobaczyć szczegóły</span>
					</div>
					<div class="card-block table-border-style">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Nazwa pełna</th>
									<th>Nazwa skrócona</th>
								</tr>
							</thead>
							<tbody>
								@foreach($companies as $company)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td><a href="{{ route('companies.show', $company->id)}}">{{ $company->name }}</a></td>
									<td>{{ $company->short_name }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>

			@livewire('show-posts')
		</div>
	</div>




	</div>
</x-app-layout>