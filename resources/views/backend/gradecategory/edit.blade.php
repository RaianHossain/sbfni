<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Grade Category </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('gradecategory.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Grade Category <a class="btn btn-sm btn-info" href="{{ route('gradecategory.index') }}">List</a>
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

            <form action="{{ route('gradecategory.update', ['gradecategory' => $single_gradecategory->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

              <select name="gradecategory_name" class="form-control">
                    <option value="">Select Grade Category</option>
                    @foreach($gradeCategories as $gradeCategory)
                        <option value="{{ $gradeCategory->id }}" {{ $single_gradecategory->gradecategory_name == $gradeCategory->gradecategory_name ? 'selected' : '' }}>{{ $gradeCategory->gradecategory_name }}</option>
                    @endforeach 
                </select>

                <select name="gradecategory_mark" class="form-control">
                    <option value="">Select Grade Category</option>
                    @foreach($gradeCategories as $gradeCategory)
                        <option value="{{ $gradeCategory->id }}" {{ $single_gradecategory->gradecategory_mark == $gradeCategory->gradecategory_mark ? 'selected' : '' }}>{{ $gradeCategory->gradecategory_mark }}</option>
                    @endforeach
                </select>

                <br>
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>