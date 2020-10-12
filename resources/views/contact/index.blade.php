<x-app-layout>
    <x-slot name="header">
        <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('contacts.index') }}">Kontakty</a></li>
        </ol>
    </x-slot>

    <div class="box">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('companies.index') }}" class="nav-link">Podmioty</a>
            <a href="{{ route('people.index') }}" class="nav-link">Osoby</a>
        </div>
    </div>
</div>
</x-app-layout>