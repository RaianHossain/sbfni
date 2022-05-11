<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Grade Category
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Grade Category </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('gradecategory.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Grade Category</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:fit-content">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Grade Category

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('gradecategory.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :message="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('gradecategory.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Grade Category Name</th>
                        <th>Mark</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($gradecategorys as $gradecategory)
                    <tr>
                        <td>{{ ++$sl }}</td>
                       
                        <td>{{ $gradecategory->gradecategory_name }}</td> 

                        <td>{{ $gradecategory->mark}}</td>
                        
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('gradecategory.show', ['gradecategory' => $gradecategory->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('gradecategory.edit', ['gradecategory' => $gradecategory->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('gradecategory.destroy', ['gradecategory' => $gradecategory->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('gradecategory.destroy', ['gradecategory' => $gradecategory->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $gradecategorys->links() }}
        </div>
    </div>

</x-backend.layouts.master>