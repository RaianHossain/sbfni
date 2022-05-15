<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Grade
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Grade </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('grade.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Grade</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:fit-content">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Grade

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('grade.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('grade.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Grade Name</th>
                        <th>Point</th>
                        <th>Point From</th>
                        <th>Point To</th>
                        <th>Mark From</th>
                        <th>Mark Upto</th>
                        <th>Comment</th>
                        <th>Grade Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($grades as $grade)
                    <tr>
                        <td>{{ ++$sl }}</td>
                       
                        <td>{{ $grade->grade_name }}</td> 
                        
                        <td>{{ $grade->point }}</td>

                        <td>{{ $grade->point_from }}</td>

                        <td>{{ $grade->point_to }}</td>

                        <td>{{ $grade->mark_from }}</td>

                        <td>{{ $grade->mark_upto }}</td>

                        <td>{{ $grade->comment }}</td>

                        <td>{{ $grade->grade_category->grade_category_name }}</td>
                        
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('grade.show', ['grade' => $grade->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('grade.edit', ['grade' => $grade->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('grade.destroy', ['grade' => $grade->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('grade.destroy', ['grade' => $grade->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $grades->links() }}
        </div>
    </div>

</x-backend.layouts.master>