<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Year Input
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Year Input </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('year.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Year Input</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:fit-content">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Year Input

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('year.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :message="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('year.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Year</th>
                        <th>Course</th>
                        <th>Exam Mark Distribution</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($years as $year)
                    <tr>
                        <td>{{ ++$sl }}</td>
                       
                        <td>{{ $year->year_name }}</td> 
                        <td>{{   $year->course_name}}</td>  
                        {{-- <td>{{ $year->mark_distribution_id }}</td>   --}}
                        <td>@foreach(explode(',', $year->mark_distribution_id) as $info) 
                            <option>{{$info}}</option>
                          @endforeach
                        </td>

                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('year.show', ['year' => $year->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('year.edit', ['year' => $year->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('year.destroy', ['year' => $year->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('year.destroy', ['year' => $year->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $years->links() }}
        </div>
    </div>

</x-backend.layouts.master>