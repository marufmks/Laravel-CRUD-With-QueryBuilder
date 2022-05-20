<x-layout>
    <x-slot name="body">

        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-5">
                    <form action="" method="post">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="dept">Dept</label>
                            <input type="text" class="form-control" name="dept" id="dept">
                        </div>
                        <div class="mb-3">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                    </form>
                    @if (session()->has('status'))
                    <div>
                        {{session('status')}}
                    </div>            
                    @endif
                </div>
                <div class="col-7" >
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Dept</th>
                            <th scope="col">City</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $stu)
                                
                            
                          <tr>
                            <th scope="row">{{$stu->id}}</th>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->email}}</td>
                            <td>{{$stu->dept}}</td>
                            <td>{{$stu->city}}</td>
                            <td>
                                <a href="{{url('/edit',$stu->id)}}" class="btn btn-info btn-sm" role="button">Edit</a>
                                <a href="{{url('/destroy',$stu->id)}}" class="btn btn-danger btn-sm" role="button">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>