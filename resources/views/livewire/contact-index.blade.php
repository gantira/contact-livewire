<div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @if($statusUpdate)
    <livewire:contact-update></livewire:contact-update>
    @else
    <livewire:contact-create></livewire:contact-create>
    @endif
    <hr>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $key => $row)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->phone }}</td>
                <td>
                    <button wire:click="getContact({{ $row->id }})" class="btn btn-sm btn-info text-white">Edit</button>
                    <button wire:click="destroy({{ $row->id }})" class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
</div>