



@extends('admin.admin_master')
@section('admin')


                                                <!----------------------------------
                                                        *  Manage Users    *
                                                ------------------------------------>
                                                <div class="container my-3">
                                                        <div class="table-wrapper">
                                                                <div class="table-title">
                                                                        <div class="row">
                                                                                <div class="col-sm-6">
                                                                                        <h5>All <b>Users</b></h5>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-end">
                                                                                        <a href="#"  class="btn btn-success mx-2" target="_blank"><i class="fas fa-plus-circle"></i><span>Add</span></a>
                                                                                        <a href="#"  class="btn btn-danger delete-all"><i class="fas fa-minus-circle"></i><span>Delete All</span></a>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <table class="table table-striped table-hover">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th>
                                                                                                <span class="custom-checkboxes">
                                                                                                        <input type="checkbox" id="select-all">
                                                                                                        <label for="select-all"></label>
                                                                                                </span>
                                                                                        </th>
                                                                                        <th>Name</th>
                                                                                        <th>Email</th>
                                                                                        <th>Roles</th>
                                                                                        <th>Action</th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr>
                                                                                        <td>
                                                                                                        <input type="checkbox" id="select">
                                                                                                        <label for="select"></label>
                                                                                        </td>
                                                                                        <td>Khun Tun</td>
                                                                                        <td>Justin@0077.gmail.com</td>
                                                                                        <td>Admin</td>
                                                                                        <td class="d-flex justify-content-end">
                                                                                                <a href="#" class="btn btn-warning" target="_blank"><i class="fas fa-edit"></i></a>
                                                                                                <a href="#" class="btn btn-primary mx-1"><i class="fas fa-eye"></i></a>
                                                                                                <a href="#"  class="btn btn-danger delete-all"><i class="fas fa-trash"></i></a>
                                                                                        </td>
                                                                                </tr>
                                                                        </tbody>
                                                                </table>
                                                                <div class="clearfix">
                                                                        <div class="text-hint">Showing <b>6</b> out of <b>over 150</b> entries</div>
                                                                        <ul class="pagination">
                                                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>


                                                <!----------------------------------
                                                        *  Delete Modal    *
                                                ------------------------------------>
                                                        <div id="my-modal" class="modal">
                                                                <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                                <form action="/" method="/">
                                                                                        <div class="modal-header">
                                                                                                <h5 class="modal-title">Delete Users</h5>
                                                                                                <span class="close">&times;</span>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                                <p>Are you sure you want to delete it?</p>
                                                                                                <p class="text-warning"><small>This action cannot be found any more !!!</small></p>
                                                                                        </div>
                                                                                        <div class="modal-footer justify-content-center">
                                                                                                <button type="button" class="btn btn-primary close">Cancel</button>
                                                                                                <button type="submit" class="btn btn-danger close">Delete</button>
                                                                                        </div>
                                                                                </form>
                                                                        </div>
                                                                </div>
                                                        </div>

@endsection























