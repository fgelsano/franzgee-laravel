@extends('layouts.admin.admin-layout')

@section('content')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @include('layouts.admin-partials._topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Social Media</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm px-5">
                    <i class="fas fa-edit fa-sm text-white-50"></i>
                    Add New
                </a>
            </div>
            <div class="row">

                <div class="col-lg-12 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Social Media List</h6>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>Platform Name</th>
                                    <th>Profile URL</th>
                                    <th width="10%">Actions</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">Facebook</a></td>
                                        <td>http://facebook.com/profile/</td>
                                        <td>
                                            <a href="#"><span class="fas fa-edit fa-sm text-red-50 mr-2"></span></a>
                                            <a href="#"><span class="fas fa-trash fa-sm text-danger"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Facebook</a></td>
                                        <td>http://facebook.com/profile/</td>
                                        <td>
                                            <a href="#"><span class="fas fa-edit fa-sm text-red-50 mr-2"></span></a>
                                            <a href="#"><span class="fas fa-trash fa-sm text-danger"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Facebook</a></td>
                                        <td>http://facebook.com/profile/</td>
                                        <td>
                                            <a href="#"><span class="fas fa-edit fa-sm text-red-50 mr-2"></span></a>
                                            <a href="#"><span class="fas fa-trash fa-sm text-danger"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Facebook</a></td>
                                        <td>http://facebook.com/profile/</td>
                                        <td>
                                            <a href="#"><span class="fas fa-edit fa-sm text-red-50 mr-2"></span></a>
                                            <a href="#"><span class="fas fa-trash fa-sm text-danger"></span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        @include('layouts.admin-partials._sticky-footer')

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@endsection