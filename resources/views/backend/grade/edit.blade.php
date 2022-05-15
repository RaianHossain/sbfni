<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Grade </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('grade.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Grade <a class="btn btn-sm btn-info" href="{{ route('grade.index') }}">List</a>
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

            <form action="{{ route('grade.update', ['grade' => $single_grade->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <x-backend.form.input name="grade_name" type="text" :value="$single_grade->mark"/>

                <x-backend.form.input name="point" type="number" :value="$single_grade->point"/>

                <x-backend.form.input name="point_from" type="number" :value="$single_grade->point_from"/>

                <x-backend.form.input name="point_to" type="number" :value="$single_grade->point_to"/>

                <x-backend.form.input name="mark_from" type="number" :value="$single_grade->mark_from"/>

                <x-backend.form.input name="mark_upto" type="number" :value="$single_grade->mark_upto"/>

                <x-backend.form.input name="comment" type="text" :value="$single_grade->comment"/>

                <select name="grade_category_id" class="form-control">
                    <option value="">Select Grade Category</option>
                    @foreach($gradeCategories as $gradeCategory)
                        <option value="{{ $gradeCategory->id }}" {{ $single_grade->grade_category_id == $gradeCategory->id ? 'selected' : '' }}>{{ $gradeCategory->grade_category_name }}</option>
                    @endforeach
                </select>
                <br>
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>