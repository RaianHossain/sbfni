<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Mark Destribution
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Mark Destribution </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('markdestribution.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Mark Destribution</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:fit-content">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Mark Destribution

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('markdestribution.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :message="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('markdestribution.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Mark Destribution Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($markdestributions as $markdestribution)
                    <tr>
                        <td>{{ ++$sl }}</td>
                       
                        <td>{{ $markdestribution->mark_distribution_name }}</td>                    
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('markdestribution.show', ['markdestribution' => $markdestribution->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('markdestribution.edit', ['markdestribution' => $markdestribution->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('markdestribution.destroy', ['markdestribution' => $markdestribution->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('markdestribution.destroy', ['markdestribution' => $markdestribution->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $markdestributions->links() }}
        </div>
    </div>

</x-backend.layouts.master>