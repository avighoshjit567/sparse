<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
</head>
<body>

    <table id="Sale_table" class="table table-striped table-bordered" style="width:100%">

    </table>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script>
        // new DataTable('#example');
        $('#Sale_table').DataTable({
            processing: true,
            responsive: true,
            serverSide: true,
            destroy: true,
            ajax: {
                url: "{{ route('datatable.data') }}",
                type: 'GET',
                cache: false,
                data: function(d) {


                }
            },
            columns: [{
                    title: '{{ __('messages.SL') }}',
                    data: 'id',
                    name: 'id'
                },
                {
                    title: 'Name',
                    data: 'name',
                    name: 'name'
                },
                {
                    title: 'E-mail',
                    data: 'email',
                    name: 'email'
                },
                {
                    title: '{{ __('messages.Action') }}',
                    data: 'action',
                    name: 'action'
                }
            ]
        });
    </script>
</body>
</html>
