<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Message Input </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('message.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Message Input Details <a class="btn btn-sm btn-info" href="{{ route('message.index') }}">List</a>
        </div>
        <div class="card-body">
                 <p><h4>Messager Name  : </h4>{{ $show_message->name }}.{{ $show_message->last_name }}</p> 
                <p><h4>E-mail  : </h4>{{ $show_message->email }}</p>
                <p><h4>Course Name  : </h4>{{ $show_message->phone }}</p>
                <p><h4>Exam Mark Distribution Type  : </h4>{{ $show_message->message }}</p>
                

        </div>
    </div>

</x-backend.layouts.master>