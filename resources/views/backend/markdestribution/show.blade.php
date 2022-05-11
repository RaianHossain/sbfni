<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Mark Destribution </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('markdestribution.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Mark Destribution Details <a class="btn btn-sm btn-info" href="{{ route('markdestribution.index') }}">List</a>
        </div>
        <div class="card-body">
                <p><h4>Mark Destribution Name  : </h4>{{ $show_markdestribution->mark_distribution_name }}</p>

        </div>
    </div>

</x-backend.layouts.master>