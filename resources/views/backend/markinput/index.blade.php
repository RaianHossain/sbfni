<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Mark Input
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Mark Input </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('markinput.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Mark Input</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:fit-content">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Mark Input

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('markinput.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('markinput.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Exam Name</th>
                        <th>Section</th>
                        <th>Year</th>     
                        <th>Course Name</th>
                        <th>Student Reg No</th>
                        @forelse ($markdistributions as $markdistribution )
                            <th>{{ $markdistributions->mark_distribution_name }}</th>
                        @empty
                            <th>No Mark Input</th>
                        @endforelse
                        

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($markinputs as $markinput)
                    <tr>
                        <td>{{ ++$sl }}</td>
                       
                        <td>{{ $markinput->exam_name }}</td> 
                        
                        <td>{{ $markinput->section_id }}</td>

                        <td>{{ $markinput->year }}</td>

                        <td>{{ $markinput->course_name }}</td>

                        <td>{{ $markinput->student_reg_no }}</td>

                        @forelse ($markdistributions as $markdistribution )
                            <td>{{ $markinput->$markdistribution->mark_distribution_id }}</td>
                        @empty
                            <td>No Mark Input</td>
                        @endforelse
                        
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('markinput.show', ['markinput' => $markinput->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('markinput.edit', ['markinput' => $markinput->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('markinput.destroy', ['markinput' => $markinput->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('markinput.destroy', ['markinput' => $markinput->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $markinputs->links() }}
        </div>
    </div>

</x-backend.layouts.master>