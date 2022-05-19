<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Mark Destribution </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('markdestribution.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Mark Destribution <a class="btn btn-sm btn-info" href="{{ route('markdestribution.index') }}">List</a>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('markdestribution.update', ['markdestribution' => $single_markdestribution->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <x-backend.form.input name="mark_distribution_name" type="text" :value="$single_markdestribution->mark_distribution_name"/>

                
                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>