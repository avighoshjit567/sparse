<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <form id="permission_update_form" action="{{ route('user_restictions.update') }}" method="post"
            class="form-horizontal">
            @csrf
            @if ($user)
                <input type="hidden" name="id" value="{{ $user->id }}">
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Module Name</th>
                            <th>Restictions <input type="checkbox" onclick="checkAll(this)">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissionCategorys as $key => $value)
                            <tr
                                style="background-color:#6C8BEF; color:white;text-align:center;text-transform:capitalize;font-weight:bolder;">
                                <td colspan="3">{{ $key }}</td>
                            </tr>
                            @foreach ($value as $permissionCategory)
                                <tr>
                                    <td>{{ $permissionCategory->id }}</td>
                                    <td>{{ $permissionCategory->title }}</td>
                                    <td>
                                        <input type="checkbox" name="permission[]" value="view {{ $permissionCategory->name }}" @if (in_array("view $permissionCategory->name", $permissions)) checked @endif>
                                        <span>View</span>
                                        <input type="checkbox" name="permission[]" value="edit {{ $permissionCategory->name }}" @if (in_array("view $permissionCategory->name", $permissions)) checked @endif>
                                        <span>Edit</span>
                                        <input type="checkbox" name="permission[]" value="delete {{ $permissionCategory->name }}" @if (in_array("view $permissionCategory->name", $permissions)) checked @endif>
                                        <span>Delete</span>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            <center>
                <button type="submit" class="btn btn-success ">
                    Update
                </button>
            </center>
        </form>
    </div>

</body>

</html>
