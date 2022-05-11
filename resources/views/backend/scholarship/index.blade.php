<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Scholarship
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Scholarship </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('scholarship.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Scholarship</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:fit-content">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Scholarship

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('scholarship.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :message="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('scholarship.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Student Reg. No</th>
                        <th>Scholarship Name</th>
                        <th>Scholarship Amount</th>
                        <th>Scholarship Duration</th>
                        <th>Scholarship Description</th>
                        <th>Scholarship Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($scholarships as $scholarship)
                    <tr>
                        <td>{{ ++$sl }}</td>

                        <td>{{ $scholarship->student_reg_no }}</td>
                       
                        <td>{{ $scholarship->scholarship_name }}</td>
                        
                        <td>{{ $scholarship->scholarship_amount }}</td>

                        <td>{{ $scholarship->scholarship_duration }}</td>

                        <td>{{ $scholarship->scholarship_description }}</td>

                        <td>{{ $scholarship->scholarship_status == 1 ? 'Active' : 'Inactive' }}</td>
                        
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('scholarship.show', ['scholarship' => $scholarship->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('scholarship.edit', ['scholarship' => $scholarship->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('scholarship.destroy', ['scholarship' => $scholarship->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('scholarship.destroy', ['scholarship' => $scholarship->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $scholarships->links() }}
        </div>
    </div>

</x-backend.layouts.master>