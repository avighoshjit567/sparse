@extends('admin.masterAdmin')
@section('content')

<!-- BEGIN: Page content-->
<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="box-title">Product Images</h5>
                    {{-- <button type="button" class="btn btn-primary btn-sm mb-10 UserAddButton">Product Add</button> --}}
                    <input type="hidden" name="id" id="product_id" value="{{$product_id}}">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered w-100 nowrap" id="dt-scroll-horizonal" style="width:100%">

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div><!-- END: Page content-->

<div class="modal fade" id="UserAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="UserAddUpdate" action="{{ route('product.images.update') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="hidden-id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Image Update</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="exampleInputEmail1">Image <span class="text-danger">*</span></label>
                                        <input class="form-control" type="file" name="image">
                                        <input class="form-control" type="text" name="product_id">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
@section('script')
<script>
    $(function() {


        $(document).on('click', '.UserAddButton', function() {
            $('#hidden-id').attr("disabled", "true");
            $("#UserAdd").modal('show');
        });

        $("#size_id").select2({
            placeholder: "Select Size",
        });

        $('#UserAddUpdate').ajaxForm({
            error: formError,
            success: function(responseText, statusText, xhr, $form) {
                formSuccess(responseText, statusText, xhr, $form);
                $('#dt-scroll-horizonal').DataTable().draw(true);
                $("#UserAdd").modal('hide');
                $('#hidden-id').setAttribute("disabled");
            }
            , clearForm: true
            , resetForm: true
        });

        $('#dt-scroll-horizonal').DataTable({
            processing: true
            , responsive: true
            , serverSide: true
            , destroy: true
            , scrollX: true
            , ajax: {
                url: "{{ route('product.images.data') }}"
                , type: 'GET'
                , cache: false
                , data: function(d) {
                    d.product_id = $('#product_id').val();
                }
            }
            , columns: [{
                    title: 'SL'
                    , data: 'id'
                    , name: 'id'
                },
                {
                    title: 'Images'
                    , data: 'image'
                    , name: 'image'
                },
                {
                    title: 'Action'
                    , data: 'action'
                    , name: 'action'
                }
            ]
        });

        $(document).on('click', '.tableDelete', function() {
            swal({
                title: 'Are you sure?'
                , text: "You won't be able to revert this!"
                , type: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    let Id = $(this).data('id');
                    $(this).ajaxSubmit({
                        data: {
                            "delete": Id
                        }
                        , method: 'POST'
                        , dataType: 'json'
                        , url: "{{ route('product.images.delete') }}"
                        , success: function(responseText) {
                            // formSuccess(responseText, statusText, xhr, $form);
                            swal("Congratulations!", responseText.message, "success");
                            $('#dt-scroll-horizonal').DataTable().draw(true);
                        }
                    });
                    // swal("Congratulations!", responseText.message, "success");
                } else {
                    swal("Congratulations!", "Your imaginary file is safe!", "success");
                }
            });

        });

        $('#UserAdd').on('hidden.bs.modal', function() {
            $("#UserAddUpdate").trigger("reset");
        });

        $(document).on('click', '.tableEdit', function() {
            let Id = $(this).data('id');
            $('#hidden-id').removeAttr("disabled");
            $('#hidden-id').val(Id);
            $(this).ajaxSubmit({
                data: {
                    "id": Id
                }
                , dataType: 'json'
                , method: 'GET'
                , url: "{{ route('product.images.edit') }}"
                , success: function(responseText) {
                    console.log(responseText.data);
                    $('input[name^="product_id"]').val(responseText.data.product_id);
                    $("#UserAdd").modal('show');
                }
            });
        });




    });

</script>
@endsection
