@extends('admin.masterAdmin')
@section('content')

<!-- BEGIN: Page content-->
<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="box-title">Order List</h5>
                    {{-- <button type="button" class="btn btn-primary btn-sm mb-10 UserAddButton">Category Add</button> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group mb-4">
                                <label for="exampleInputEmail1"> Order Date </label>
                                <input class="form-control updateTable" type="date" name="order_date" id="order_date">
                                @error('order_date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-lg-3">
                            <div class="form-group mb-4">
                                <label for="exampleInputEmail1">Type <span class="text-danger">*</span></label>
                                <select class="form-control updateTable" name="type" id="type" style="width:100%;">
                                    <option value="">Select Type</option>
                                    <option value="Office Visit Appointment">Office Visit Appointment</option>
                                    <option value="Country Admin Appointment">Country Admin Appointment</option>
                                </select>
                                @error('type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> --}}
                    </div>
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
        <form id="UserAddUpdate" action="{{ route('category.insert') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="hidden-id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Category Add/Update</h5>
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
                                        <label for="exampleInputEmail1">Category Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" placeholder="Category Name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="exampleInputEmail1">Image <span class="text-danger">*</span></label>
                                        <input class="form-control" type="file" name="image">
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
                url: "{{ route('order-list.Data') }}"
                , type: 'GET'
                , cache: false
                , data: function(d) {
                    d.order_date = $("#order_date").val();
                    d.status = "Processing";

                }
            }
            , columns: [{
                    title: 'SL'
                    , data: 'id'
                    , name: 'id'
                },
                {
                    title: 'Code'
                    , data: 'code'
                    , name: 'code'
                },
                {
                    title: 'Name'
                    , data: 'customer'
                    , name: 'customer'
                },
                //{
                    //title: 'Mobile'
                    //, data: 'mobile'
                    //, name: 'mobile'
                //},
                //{
                   // title: 'Address'
                   // , data: 'address'
                  //  , name: 'address'
                //},
                {
                    title: 'Order Note'
                    , data: 'order_note'
                    , name: 'order_note'
                },
                {
                    title: 'Shipping Charge'
                    , data: 'shipping_charge'
                    , name: 'shipping_charge'
                },
                {
                    title: 'Total'
                    , data: 'total'
                    , name: 'total'
                },
                {
                    title: 'Status'
                    , data: 'status'
                    , name: 'status'
                },
                {
                    title: 'Action'
                    , data: 'action'
                    , name: 'action'
                }
            ]
        });

        $(document).on('change','.updateTable',function () {
			$('#dt-scroll-horizonal').DataTable().draw(true);
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
                        , url: "{{ route('order-delete') }}"
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

        $(document).on('click', '.updateOrderStatus', function () {
            let Id = $(this).data('id');
            let Status = $(this).data('status');
            $(this).ajaxSubmit({
                error: formError,
                data: {
                    "id": Id,
                    "status": Status
                },
                method: 'POST',
                dataType: 'json',
                url: "{{route('processing_order.update')}}",
                success: function (responseText) {

                    swal("Congratulations!", responseText.message, "success");
                    $('#dt-scroll-horizonal').DataTable().draw(true);
                }
            });
        });


    });

</script>
@endsection
