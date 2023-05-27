@extends('admin.layouts')

@section('admin.content')
    <div class="table-responsive pt-3">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th style="width: 5%;" scope="col">ID</th>
                    <th style="width: 20%;"scope="col">Category Name</th>
                    <th style="width: 50%;"scope="col">Description</th>
                    <th style="width: 25%;"scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>


                    <td style="text-align:center;">
                        @can('edit-category')
                            <a href="" class="btn btn-info update_productform">
                                <i class="las la-edit"></i>


                            </a>
                        @endcan
                        <br>


                        @can('delete-category')
                        <form action="" method="POST">
                            @csrf
                            {{-- @if ($category->id != '1') --}}

                            <button type="submit" href="" class="btn btn-danger delete_product">
                                <i class="las la-trash-alt"></i>
                            </button>

                            {{-- @endif --}}
                        </form>
                        @endcan

                    </td>
                </tr>


            </tbody>
        </table>
    </div>
@endsection
