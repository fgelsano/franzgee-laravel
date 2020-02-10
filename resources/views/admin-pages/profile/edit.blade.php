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
                <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
                <a href="{{ url('/dashboard/profile/save') }}"
                    class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm px-5">
                    <i class="fas fa-save fa-sm text-white-50"></i>
                    Save
                </a>
            </div>
            <form action="" method="POST" enctype='multipart/form-data'>
                <div class="row">
                    <div class="col-lg-4 mb-4">

                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Profile Picture</h6>
                            </div>
                            <div class="card-body">
                                <input type="file" name="iamge" class="dropify"
                                    data-default-file="/storage/images/{{ $editProfile->profile_pic_url }}"
                                    data-height="200" />
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 mb-4">

                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Autobiography</h6>
                            </div>
                            <div class="card-body">
                                <textarea name="profileBioEditor" id="profileBioEditor" cols="30" rows="10"
                                    class="form-control textEditor">
                                {!! $editProfile->bio !!}
                            </textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
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

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop a photo here to upload',
                'replace': 'Drag and drop or click to replace',
                'remove':  'Remove',
                'error':   'Ooops, something wrong happended.'
            }
        });
    };)
</script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'profileBioEditor', {
        filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endpush