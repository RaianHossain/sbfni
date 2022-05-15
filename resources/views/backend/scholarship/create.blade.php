<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Scholarship </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('scholarship.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Scholarship <a class="btn btn-sm btn-info" href="{{ route('scholarship.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('scholarship.store') }}" enctype="multipart/form-data" method="post">
                @csrf

                <x-backend.form.input name="student_reg_no" type="number"/>

                <x-backend.form.input name="scholarship_name" type="text"/>

                <x-backend.form.input name="scholarship_amount" type="number"/> 
                
                <x-backend.form.input name="scholarship_duration" type="text"/>

                <x-backend.form.input name="scholarship_description" type="textarea"/>

                <select name="scholarship_status" id="scholarship_status">
                    <option value="">Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>

               


                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>