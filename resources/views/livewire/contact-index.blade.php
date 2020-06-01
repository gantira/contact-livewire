<div>
    <ul>
        @foreach ($contacts as $row)
        <li>{{ $row->name }}</li>
        @endforeach
    </ul>
</div>
