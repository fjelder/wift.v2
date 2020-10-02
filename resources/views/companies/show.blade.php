<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Companies') }}
		</h2>
	</x-slot>

	<div>
		<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>{{ $company->name }}</h5>
						<span class="d-block m-t-5">dane szczegółowe</span>
					</div>
					<div class="card-block table-border-style">
						<p>{{ $company-> short_name }}</p>
						<p>{{ $company-> street }}</p>
						<p>{{ $company-> city }}, {{ $company-> post_code }}</p>
						<p>Numer telefonu: {{ $company-> phone_number_1 }}</p>
						<p>Numer telefonu: {{ $company-> phone_number_2 }}</p>
						<p>Utworzono: {{ $company-> created_at->format('d.m.Y') }}r.</p>
						<p>Aktualizacja: {{ $company-> updated_at->format('d.m.Y') }}r.</p>
						<p>Osoby kontatkowe:</p>
						@foreach($company->people as $person)
						{{ $loop->iteration }}.
						{{ $person->first_name }}
						{{ $person->last_name }}
					    </br>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>




	</div>
</x-app-layout>