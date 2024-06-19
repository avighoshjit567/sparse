@extends('admin.masterAdmin')
@section('content')

<!-- BEGIN: Page content-->
<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="box-title">Company Setting</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="UserAddUpdate" action="{{ route('company.add.update') }}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="@if($Query) {{ $Query->id }} @endif">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Business Name<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="business_name" value="@if($Query) {{ $Query->business_name }} @endif">
                                            @error('business_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Mobile<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="mobile" value="@if($Query) {{ $Query->mobile }} @endif">
                                            @error('mobile')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Hotline<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="hotline" value="@if($Query) {{ $Query->hotline }} @endif">
                                            @error('hotline')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">E-mail<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="email" value="@if($Query) {{ $Query->email }} @endif">
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Address<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="address" value="@if($Query) {{ $Query->address }} @endif">
                                            @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Logo (132*40) <span class="text-danger">*</span></label>
                                            @if($Query->logo)
                                                <img src="{{ $Query->logo }}" alt="Logo" style="height:50px;width:50px;">
                                            @endif
                                            <input class="form-control" type="file" name="logo">
                                            @error('logo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Footer Logo (132*40) </label>
                                            @if($Query->logo)
                                                <img src="{{ $Query->footer_logo }}" alt="Footer Logo" style="height:50px;width:50px;">
                                            @endif
                                            <input class="form-control" type="file" name="footer_logo">
                                            @error('footer_logo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Footer Text </label>
                                            <textarea name="footer_about_us" class="form-control" rows="3" value="@if($Query) {{ $Query->footer_about_us }} @endif" row="2"></textarea>
                                            @error('footer_about_us')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Facebook</label>
                                            <input class="form-control" type="text" name="facebook" value="@if($Query) {{ $Query->facebook }} @endif">
                                            @error('facebook')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Instagram</label>
                                            <input class="form-control" type="text" name="instagram" value="@if($Query) {{ $Query->instagram }} @endif">
                                            @error('instagram')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Twitter</label>
                                            <input class="form-control" type="text" name="twitter" value="@if($Query) {{ $Query->twitter }} @endif">
                                            @error('twitter')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Whatsapp</label>
                                            <input class="form-control" type="text" name="whatsapp" value="@if($Query) {{ $Query->whatsapp }} @endif">
                                            @error('whatsapp')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="col-lg-8">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Google Map Link</label>
                                            <textarea name="google_map_link" id="google_map_link" class="form-control" rows="5">@if($Query) {{ $Query->google_map_link }} @endif</textarea>
                                            @error('google_map_link')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    

                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Terms & Conditions Text</label>
                                            <textarea name="terms_conditions" id="terms_conditions" class="summernote" row="2">@if($Query) {{ $Query->terms_conditions }} @endif</textarea>
                                            @error('terms_conditions')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-4">
                                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div><!-- END: Page content-->


@endsection
@section('script')
<script>
    $(function() {

        $('#UserAddUpdate').ajaxForm({
            error: formError,
            success: function(responseText, statusText, xhr, $form) {
                formSuccess(responseText, statusText, xhr, $form);
                setTimeout(function(){
                    window.location.reload();
                }, 2000);
            }
            // , clearForm: true
            // , resetForm: true
        });

        $('#UserAdd').on('hidden.bs.modal', function() {
            $("#UserAddUpdate").trigger("reset");
        });


    });

</script>
@endsection
