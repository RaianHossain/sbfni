<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Grade </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('grade.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Grade <a class="btn btn-sm btn-info" href="{{ route('grade.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('grade.store') }}" enctype="multipart/form-data" method="post">
                @csrf

               
                <x-backend.form.input name="grade_name" type="text"/>

                <x-backend.form.input name="point" type="number"/>

                <x-backend.form.input name="point_from" type="number"/>

                <x-backend.form.input name="point_to" type="number"/>

                <x-backend.form.input name="mark_from" type="number"/>

                <x-backend.form.input name="mark_upto" type="number"/>

                <x-backend.form.input name="comment" type="text"/>

                <select name="grade_category_id" class="form-control">
                    <option value="">Select Grade Category</option>
                    @foreach($gradeCategories as $gradeCategory)
                        <option value="{{ $gradeCategory->id }}">{{ $gradeCategory->grade_category_name }}</option>
                    @endforeach
                </select>
                <br>

                
                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>