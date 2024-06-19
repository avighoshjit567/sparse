@extends('admin.masterAdmin')
@section('content')

<!-- BEGIN: Page content-->
<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="box-title">Product</h5>
                    <button type="button" class="btn btn-primary btn-sm mb-10" onclick="window.location.href='{{route('product')}}'">Product List</button>
                </div>
                <div class="card-body">
                    <form id="UserAddUpdate" action="{{ route('product.insert') }}" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    @if($query)
                                        <input type="hidden" name="id" id="hidden-id" value="@if($query) {{ $query->id }} @endif">
                                    @endif
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Category <span class="text-danger">*</span></label>
                                            <select name="category_id" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach ($Categories as $Category)
                                                    <option value="{{ $Category->id }}" @if($query && $query->category_id == $Category->id) selected @endif>{{ $Category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Brand <span class="text-danger">*</span></label>
                                            <select name="brand_id" class="form-control">
                                                <option value="">Select Brand</option>
                                                @foreach ($Brands as $Brand)
                                                    <option value="{{ $Brand->id }}" @if($query && $query->brand_id == $Brand->id) selected @endif>{{ $Brand->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('brand_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Size </label>
                                            <select class="form-control" name="size_id[]" id="size_id" style="width:100%;" multiple="">
                                                <option value="">Select Size</option>
                                                @foreach ($Sizes as $Size)
                                                    <option value="{{ $Size->id }}" @if($query && $query->size) {{ in_array($Size->id, $selectedSizes) ? 'selected' : '' }} @endif>{{ $Size->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('size_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Color </label>
                                            <select class="form-control" name="color_id[]" id="color_id" style="width:100%;" multiple="">
                                                <option value="">Select Color</option>
                                                @foreach ($Colors as $Color)
                                                    <option value="{{ $Color->id }}" @if($query && $query->color) {{ in_array($Color->id, $selectedColors) ? 'selected' : '' }} @endif>{{ $Color->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('color_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Unit <span class="text-danger">*</span></label>
                                            <select name="unit_id" class="form-control">
                                                <option value="">Select Unit</option>
                                                @foreach ($Units as $Unit)
                                                    <option value="{{ $Unit->id }}" @if($query && $query->unit_id == $Unit->id) selected @endif>{{ $Unit->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('unit_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Product Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="name" placeholder="Product Name" value="@if($query) {{ $query->name }} @endif">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Purchase Price <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="purchase_price" placeholder="Purchase Price" value="@if($query) {{ $query->purchase_price }} @endif">
                                            @error('purchase_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Sale Price <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="sale_price" placeholder="Sale Price" value="@if($query) {{ $query->sale_price }} @endif">
                                            @error('sale_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Discount Amount </label>
                                            <input class="form-control" type="text" name="discount_amount" placeholder="Discount Amount" value="@if($query) {{ $query->discount_amount }} @endif">
                                            @error('discount_amount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Images <span class="text-danger">*</span></label>
                                            <input class="form-control" type="file" name="images[]" multiple>
                                            @error('images')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Short Description </label>
                                            <textarea class="form-control" name="short_description" placeholder="Short Description" row="2">@if($query) {{ $query->short_description }} @endif</textarea>
                                            @error('short_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Long Description </label>
                                            <textarea class="summernote" name="long_description" placeholder="Long Description">@if($query) {{ $query->long_description }} @endif</textarea>
                                            @error('long_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Additional Information </label>
                                            <textarea class="summernote" name="additional_info" placeholder="Additional Information">@if($query) {{ $query->additional_info }} @endif</textarea>
                                            @error('additional_info')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-4">
                                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div><!-- END: Page content-->



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
        $("#color_id").select2({
            placeholder: "Select Color",
        });

        $('#UserAddUpdate').ajaxForm({
            error: formError,
            success: function(responseText, statusText, xhr, $form) {
                formSuccess(responseText, statusText, xhr, $form);
                $('#dt-scroll-horizonal').DataTable().draw(true);
                window.location.replace(responseText.list_url);
                $("#long_description").summernote('code', '');
                $("#additional_info").summernote('code', '');
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
                url: "{{ route('product.data') }}"
                , type: 'GET'
                , cache: false
                , data: function(d) {


                }
            }
            , columns: [{
                    title: 'SL'
                    , data: 'id'
                    , name: 'id'
                },
                {
                    title: 'Category'
                    , data: 'category_id'
                    , name: 'category_id'
                },
                {
                    title: 'Brand'
                    , data: 'brand_id'
                    , name: 'brand_id'
                },
                {
                    title: 'Unit'
                    , data: 'unit_id'
                    , name: 'unit_id'
                },
                {
                    title: 'Name'
                    , data: 'name'
                    , name: 'name'
                },
                {
                    title: 'Image'
                    , data: 'image'
                    , name: 'image'
                },
                {
                    title: 'P.Price'
                    , data: 'purchase_price'
                    , name: 'purchase_price'
                },
                {
                    title: 'S.Price'
                    , data: 'sale_price'
                    , name: 'sale_price'
                },
                {
                    title: 'Discount'
                    , data: 'discount_amount'
                    , name: 'discount_amount'
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
                        , url: "{{ route('product.insert') }}"
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
                , url: "{{ route('product.edit') }}"
                , success: function(responseText) {
                    console.log(responseText.data.long_description);
                    $('input[name^="name"]').val(responseText.data.name);
                    $('select[name^="category_id"]').val(responseText.data.category_id);
                    $('select[name^="brand_id"]').val(responseText.data.brand_id);
                    $('select[name^="unit_id"]').val(responseText.data.unit_id);
                    $('input[name^="purchase_price"]').val(responseText.data.purchase_price);
                    $('input[name^="sale_price"]').val(responseText.data.sale_price);
                    $('input[name^="discount_amount"]').val(responseText.data.discount_amount);
                    $('textarea[name^="short_description"]').val(responseText.data.short_description);
                    $("#long_description").summernote('code', responseText.data.long_description);
                    $("#additional_info").summernote('code', responseText.data.additional_info);
                    $("#UserAdd").modal('show');
                }
            });
        });




    });

</script>
@endsection
