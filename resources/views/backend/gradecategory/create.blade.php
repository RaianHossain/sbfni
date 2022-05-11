<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Grade Category </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('gradecategory.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Grade Category <a class="btn btn-sm btn-info" href="{{ route('gradecategory.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('gradecategory.store') }}" enctype="multipart/form-data" method="post">
                @csrf

               
                <select name="gradecategory_name" class="form-control">
                    <option value="">Select Grade Category</option>
                    <option value="A+">A<sup>+</sup></option>
                    <option value="A">A</option>
                    <option value="A-">A<sup>-</sup></option>
                    <option value="B+">B<sup>+</sup></option>
                    <option value="B">B</option>
                    <option value="B-">B<sup>-</sup></option>
                    <option value="C+">C<sup>+</sup></option>
                    <option value="C">C</option>
                    <option value="C-">C<sup>-</sup></option>
                    <option value="D+">D<sup>+</sup></option>
                    <option value="D">D</option>
                    <option value="D-">D<sup>-</sup></option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
                <br>
                <select name="gradecategory_mark" class="form-control">
                    <option value="">Select Grade Category Mark</option>
                    <option value="5">5</option>
                    <option value="4.75">4.75</option>
                    <option value="4.5">4.5</option>
                    <option value="4.25">4.25</option>
                    <option value="4">4</option>
                    <option value="3.75">3.75</option>
                    <option value="3.5">3.5</option>
                    <option value="3.25">3.25</option>
                    <option value="3">3</option>
                    <option value="2.75">2.75</option>
                    <option value="2.5">2.5</option>
                    <option value="2.25">2.25</option>
                    <option value="2">2</option>
                    <option value="1.75">1.75</option>
                    <option value="1.5">1.5</option>
                    <option value="1.25">1.25</option>
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>
                <br>

                
                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>