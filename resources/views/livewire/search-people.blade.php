<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>

    <ul>
        @foreach($people as $person)
            <li>{{ $person->first_name }}</li>
        @endforeach
    </ul>
</div>