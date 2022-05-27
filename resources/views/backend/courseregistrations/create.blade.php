<x-backend.layouts.master>
    @php $date = date('Y'); @endphp
    
    

    <x-slot name="pageTitle">
        Current Courses
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Course Registration </x-slot>

            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Course Registration</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="row ps-2 pe-2">
            <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Course Teacher</th>
                    <th scope="col">Year</th>
                    <th scope="col">Course Year</th>
                    </tr>
                </thead>
                <tbody id="tableD">
                    @php $i = 1; @endphp
                    @foreach($courses as $course)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{ $course->mycurrentcourse->course->course_name }}</td>
                    <td>{{ $course->mycurrentcourse->teacher->name }}</td>
                    <td>{{ $course->year }}</td>
                    <td>{{ $course->course_year }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="col-md-4">
            <div class="input-group mb-3">

            
            <select name="year" id="year" class="form-select form-select-lg mb-3">
                <option value="">Select Year</option>
                <option value="{{ $date }}">{{ $date }}</option>
                @for($i = 1; $i <= 5; $i++)
                    <option value="{{ $date - $i }}">{{ $date - $i }}</option>
                @endfor
            </select>  
            </div> 
            {{-- <div class="d-flex justify-content-between"> --}}
            <div class="input-group mb-3">
            <select class="form-select form-select-lg mb-3" id ="course_year">
                <option selected>Choose Course Year</option>
                <option value="1st">1st year</option>
                <option value="2nd">2nd year</option>
                <option value="3rd">3rd year</option>
                <option value="4th">4th year</option>
            </select>
            
            </div>
                {{-- </div> --}}
            <ul class="list-group">
                
                @foreach($currentcourseslist as $currentcourse)
                        
                        <li class="list-group-item"><div class="d-flex justify-content-between"><div>{{ $currentcourse->course->course_name }} (Teacher: {{ $currentcourse->teacher->name }})</div> <button onclick="hello('<?php echo $currentcourse->id?>', '<?php echo auth()->user()->id ?>')" class="btn btn-primary">ADD</button></div></li>
                        
                    
                
                @endforeach
                
                
            </ul>
            </div>
        </div>

        
            <script>
                // function check(value)
                // {
                //     alert(value);
                // }
                function hello(course_id, student_id) {
                    var tableHeaderRowCount = 1;
                        var table = document.getElementById('tableD');
                        var rowCount = table.rows.length;
                        for (var i = tableHeaderRowCount; i < rowCount; i++) {
                            table.deleteRow(tableHeaderRowCount);
                        }
                   
                    const year = document.getElementById('year').value;
                    const course_year = document.getElementById('course_year').value;
                    fetch(`http://127.0.0.1/api/admin/course_registration/store/${course_id}/${student_id}/${year}/${course_year}`)
                    .then(response => response.json())
                    .then(data => {
                        // console.log(data);
                    })

                    fetch(`http://127.0.0.1/api/admin/course_registration/courses/${student_id}/${year}/${course_year}`)
                    .then(response => response.json())
                    .then(data => {
                       
                        console.log(data[2]);
                        document.getElementById('tableD').innerHTML = "";
                        for(var i = 0; i < data[0].length; i++)
                        {
                            document.getElementById('tableD').innerHTML += `<tr><th scope="row">${i+1}</th><td>${data[1][i].course_name}</td><td>${data[2][i].name}</td><td>${data[0][i].year}</td><td>${data[0][i].course_year}</td></tr>`;
                        }
                    });
                }
            </script>
       <script>
        $(document).ready(function(){
          $("#year").datepicker({
             format: "yyyy",
             viewMode: "years", 
             minViewMode: "years",
             autoclose:true
          });   
        })
        
        
        </script>
</x-backend.layouts.master>