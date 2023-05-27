@extends('admin.layouts')

@section('admin.content')
<div class="container">
    <div class=" text-center mt-5 ">
        <h3 style="color: royalblue;" >Add User</h3>
    </div>


<div class="row ">
  <div class="col-lg-7 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">

        <div class = "container">
        <form id="contact-form" role="form" action="{{url('/user-store')}}" method="POST">
            @csrf
        <div class="controls">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">User Name</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter user name..." required="required" data-error="Firstname is required.">

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">User email</label>
                        <input id="form_name" type="email" name="email" class="form-control" placeholder="Please enter email..." required="required" data-error="Firstname is required.">

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">User Password</label>
                        <input id="form_name" type="password" name="password" class="form-control" placeholder="Please enter password..." required="required" data-error="Firstname is required.">

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">User Role</label>
                        <select name="roles"  class="form-control" >
                            <option value="">Select role</option>
                            @foreach ($roles as $role)
                              <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach

                        </select>


                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-info">Submit</button>


    </div>
     </form>
    </div>
        </div>


</div>
    <!-- /.8 -->

</div>
<!-- /.row-->

</div>
</div>


@endsection
