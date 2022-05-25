<x-backend.layouts.master>
    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Year Input </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('year.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Year Input</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <table class="table">
        <thead>
            <tr>
                <th>Sl#</th>
                <th>Student Name</th>
                <th>Year</th>
                <th>Course Year</th>
                <th>Section</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $sl=0 @endphp
            @foreach ($yearwisestudents as $yearwisestudent)
            <tr>
                <td>{{ ++$sl }}</td>

                <td>{{ $yearwisestudent->user->name }}</td>
                <td>{{ $yearwisestudent->year }}</td>
                <td>{{ $yearwisestudent->course_year }}</td>
                <td>{{ $yearwisestudent->section }}</td>


                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="clicked('<?php echo $yearwisestudent->course_year ?>', '<?php echo $yearwisestudent->year ?>', '<?php echo $yearwisestudent->user->id ?>')">Upload Result</button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{--modal--}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Courses</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal_body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })

        function clicked(course_year, year, student_id) {

            fetch(`http://127.0.0.1/api/admin/get-courses/${course_year}/${year}/${student_id}`)
                .then(response => response.json())
                .then((data) => {
                    const parent = document.getElementById('modal_body');
                    inside = '<span>' + data[0].course_name + '</span><br>';
                    if (data.length > 1) {
                        for (i = 1; i < data.length; i++) {
                            inside += '<span>' + data[i].course_name + '</span><br>';
                        }
                    }
                    parent.innerHTML = inside;
                })
        }
    </script>
</x-backend.layouts.master>