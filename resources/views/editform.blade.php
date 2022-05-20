<x-layout>
    <x-slot name="body">
        <div class="container" style="margin-top: 20px">
            <div class="row">
        <form action="" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$student->name}}">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{$student->email}}">
            </div>
            <div class="mb-3">
                <label for="dept">Dept</label>
                <input type="text" class="form-control" name="dept" id="dept" value="{{$student->dept}}">
            </div>
            <div class="mb-3">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" id="city" value="{{$student->city}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            
        </form>
        @if (session()->has('status'))
        <div>
            {{session('status')}}
        </div>            
        @endif
    </div>
</div>
    </x-slot>
</x-layout>