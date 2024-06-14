<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Order Invoice</title>
    <base href="/" />
    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-size: 11px;
            font-family: -apple-system, system-ui, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;
        }

        header {
            padding: 10px 0;
            margin-bottom: 0px;
        }

        #logo {
            text-align: center;
            margin-bottom: 10px;
        }

        #logo img {
            width: 90px;
        }

        h1 {
            /* border-top: 1px solid #5D6975;
            border-bottom: 1px solid #5D6975; */
            color: black;
            font-size: 1.8em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            /* background: url({{ asset('dimension.png') }}); */
        }

        #project {
            float: left;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            width: 52px;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #project div,
        #company div {
            white-space: nowrap;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            /* background: #F5F5F5; */
        }


        table td {
            text-align: center;
            font-size: 13px;
        }

        table th {
            padding: 5px 20px;
            color: #000;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;
            font-weight: normal;
            text-align: center;
            font-size: 15px;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 8px 20px;
            text-align: right;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 15px;
        }

        table td.grand {
            border-top: 1px solid #5D6975;
        }

        #notices .notice {
            color: black;
            font-size: 1.1em;
        }

        footer {
            color: black;
            /* background-color: #ecebeb; */
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 100px;
            /* border-top: 1px solid #C1CED9; */
            padding: 8px 0;
            text-align: center;
        }

        /* signature section start */
        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
            text-align: center;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .card {
            /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .signature_section {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 100px;
            padding: 8px 0;
            text-align: center;
        }

        /* signature section end */
    </style>

    {{-- fixed header footer css start --}}
    <style>
        @page {
            /* margin: 20mm; */
            size: A4;
            margin: 0;
        }

        @media print {
            thead {
                display: table-header-group;
            }

            tfoot {
                display: table-footer-group;
            }

            button {
                display: none;
            }

            body {
                margin-left: 50px;
                margin-right: 0;
                margin-top: 0;
                margin-bottom: 0;
            }

            .pageSize {
                height: 100px;
            }
        }

        table {
            width: 100%;
        }

        table.print-content {
            font-size: 11px;
            border: 1px solid #dee2e6;
            border-collapse: collapse !important;
        }

        table.print-content th,
        table.print-content td {
            padding: .2rem .4rem;
            text-align: left;
            vertical-align: top;
            /* border-top: 1px solid #dee2e6; */
            border: 1px solid black;
        }

        @media print {
            .print-footer {
                /* margin-bottom: 55px; */
                position: fixed;
                bottom: 87px;
                left: 0;

            }

            .no-print {
                display: none
            }
        }

        .p-1 {
            padding: 0.1rem !important;
        }

        #logo img {
            width: 150px;
        }
    </style>
    {{-- fixed header footer css end --}}

    <script>
        window.print();
    </script>
</head>

<body style="height: 100%;">
    <table>
        {{-- <!-- Start Header --> --}}
        <thead>
            <tr>
                <td>
                    <header class="clearfix" style="margin-top:96px;">

                        <h1 style="font-weight: bold;font-size: 24px;">INVOICE</h1>
                        {{-- From --}}
                        <div id="company" class="clearfix" style="font-size: 13px;">
                            <div>
                                
                            </div>
                            <div style="font-weight:bold;font-size: 18px;">Invoice/Bill</div>
                            <div style="font-size: 16px;">Invoice No: {{ $saleInvoice->code }}</div>
                            <div style="font-size: 16px;">Date:
                                {{ \Carbon\Carbon::parse($saleInvoice->sale_date)->format('d-M-Y') }}</div>
                            <div style="font-size: 18px;">Status:
                                <span style="color:black;font-weight:bold;">Due</span>
                            </div>
                            <div style="font-size: 16px;">Order By: Pranto Saha</div>
                        </div>
                        {{-- To --}}
                        <div style="font-size: 18px; text-align:left;">
                            <div style="padding-bottom:2px;"><span><b>Bill To</b></span>
                            </div>
                            {{-- @if ($ContactLists)
                                @if ($ContactLists->company)
                                    <div><span>Company</span> {{ $ContactLists->company }}</div>
                                @endif
                            @endif --}}
                            <div style="padding-bottom:2px;font-weight: bold;"><span
                                    style="font-weight: bold;">Name : </span>
                                @if ($saleInvoice)
                                    {{ $saleInvoice->name }}
                                @endif
                            </div>
                            <div style="padding-bottom:2px;"><span
                                    style="font-weight: bold;">Mobile : </span>
                                @if ($saleInvoice)
                                    {{ $saleInvoice->mobile }}
                                @endif
                            </div>
                            <div style="padding-bottom:2px;"><span
                                    style="font-weight: bold;">Address: </span>
                                @if ($saleInvoice)
                                    {{ $saleInvoice->address }}
                                @endif
                            </div>
                            {{-- <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
                            <div><span>DATE</span> August 17, 2015</div>
                            <div><span>DUE DATE</span> September 17, 2015</div> --}}
                        </div>
                    </header>
                </td>
            </tr>
        </thead>
        {{-- <!-- End Header --> --}}

        <tr>
            <td>
                {{-- <!-- Start Print Content --> --}}
                <main>
                    <table class="print-content">
                        <thead>
                            <tr style="background-color: #fff;color:#000; ">
                                <th style=" text-transform: capitalize; width:15px;font-weight:bold;" width="1%">
                                    SL</th>

                                    <th style=" text-align: left; text-transform: capitalize; max-width: 150px;font-weight:bold; "
                                        width="60%">
                                        Products
                                    </th>
                                    <th style=" text-align: left; text-transform: capitalize; max-width: 150px;font-weight:bold; "
                                        width="60%">
                                        Model
                                    </th>
                                    <th style=" text-align:center; text-transform: capitalize; width:125px;font-weight:bold;"
                                        width="10%">
                                        Brand
                                    </th>
                                    <th style=" text-align:center; text-transform: capitalize; width:125px;font-weight:bold;"
                                        width="5%">
                                        Quantity
                                    </th>
                                    <th style=" text-align:center; text-transform: capitalize; width:125px;font-weight:bold;"
                                        width="10%">
                                        Unit Price
                                    </th>
                                    <th style=" text-align:center; text-transform: capitalize; width:125px;font-weight:bold;"
                                        colspan="2" width="6%">
                                        Discount
                                    </th>

                                {{--  <th style=" text-align:center; text-transform: capitalize; width:125px;font-weight:bold;" colspan="2">{{ __('messages.Discount') }}</th>  --}}

                                    <th style=" text-align:center; text-transform: capitalize; width:112px;font-weight:bold;"
                                        width="13%">
                                        Total

                                    </th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=0;
                            @endphp
                            @if ($stockManagerList)

                                @foreach ($stockManagerList as $stockManager)

                                    <tr>
                                        <td class=""
                                            style="text-align: center; border:1px solid #000;font-size: 15px;">
                                            {{ $i++ }}</td>

                                        <td class=""
                                            style="text-align: left; max-width: 150px; border:1px solid #000; color:black;font-size: 15px;">
                                            {{ $stockManager->Product->name }}

                                        </td>
                                        <td class=""
                                            style="text-align: left; max-width: 150px; border:1px solid #000; color:black;font-size: 15px;">
                                            {{ $stockManager->Size->name }}

                                        </td>

                                            <td class="" width="12%"
                                                style="text-align: center; border:1px solid #000; color:black;font-size: 15px;">
                                                @if ($stockManager->Product->Brand)
                                                    {{ $stockManager->Product->Brand->name }}
                                                @endif
                                            </td>


                                            <td class=""
                                                style="text-align: center; border:1px solid #000; color:black;font-size: 15px;">
                                                {{ $stockManager->quantity }}
                                                @if ($stockManager->Unit)
                                                    {{ $stockManager->Unit->name }}
                                                @endif
                                            </td>


                                            <td class=""
                                                style="text-align: right; border:1px solid #000; color:black;font-size: 15px;">
                                                {{ number_format($stockManager->sale_price, 2) }}
                                            </td>



                                            {{-- <td class="" style="text-align: right; border:1px solid rgb(166, 159, 159); color:black">
                                            {{ $stockManager->discount_value }}
                                        </td> --}}
                                            <td class="" colspan="2"
                                                style="text-align: right; border:1px solid#000; font-size: 15px;; color:black">
                                                {{ number_format($stockManager->discount, 2) }}
                                            </td>

                                        {{--  <td class="" style="text-align: center;width:50px; border:1px solid rgb(166, 159, 159); color:black">
                                            {{ $stockManager->discount_value }}
                                        </td>
                                        <td class="" style="text-align: center;width:75px; border:1px solid rgb(166, 159, 159); color:black">
                                            {{ number_format($stockManager->discount, 2) }}
                                        </td>  --}}

                                            <td class=""
                                                style="text-align: right; border:1px solid #000; color:black;font-size: 15px;">
                                                {{ number_format($stockManager->subtotal, 2) }}
                                            </td>

                                    </tr>
                                @endforeach
                            @endif

                            @if ($saleInvoice->subtotal)
                                <tr style="border: 1px solid #000;">
                                    <td colspan="8"
                                        style="text-align: right;border:#dee2e6;color:#030303;" class="total ">
                                        <b>Sub Total :</b>
                                    </td>
                                    {{--  <td colspan="2" class="total" style="text-align: right;border:#dee2e6;color:#030303;">
                                        {{ number_format($stockManagerList->sum('discount'), 2) }}</td>  --}}
                                    <td class="total" style="text-align: right;border:#dee2e6;">
                                        {{ number_format($stockManagerList->sum('subtotal'), 2) }}</td>
                                </tr>
                            @endif


                            @if ($saleInvoice->shipping_charge)
                                <tr style="border: 1px solid #000;">
                                    <td colspan="8"style="text-align: right;border:#dee2e6;color:#030303;"
                                        class="total "><b>(+)
                                            @if ($saleInvoice)

                                                Shipping Charge:

                                            @endif
                                        </b>
                                    </td>
                                    <td class="total" style="text-align: right;border:#dee2e6;">
                                        {{ number_format($saleInvoice->shipping_charge, 2) }}
                                    </td>
                                </tr>
                            @endif

                            <tr style="border: 1px solid #000;">
                                <td colspan="8"style="text-align: right;border:#dee2e6;color:#030303;"
                                    class="total ">
                                    <b>Net Payable :</b>
                                </td>
                                <td class="total" style="text-align: right;border:#dee2e6;">
                                    {{ number_format($saleInvoice->subtotal+$saleInvoice->shipping_charge, 2) }}
                                </td>
                            </tr>





                            {{-- <tr style="">
                            <td colspan="4">Net Payable :</td>
                            <td class="total">{{ $saleInvoice->amount_to_pay }}</td>
                        </tr> --}}




                        </tbody>
                    </table>
                </main>
                <!-- End Print Content -->
            </td>
        </tr>

        <tr>
            <td>
                <div id="notices" style="text-align: left;margin-top:25px;margin-left: 20px;">
                    @php
                        use Illuminate\Support\Str;
                    @endphp
                    <div class="notice"> <span style="text-transform: capitalize;font-size:16px;"><b>In Word:</b></span>
                        <b> <span style="text-transform: capitalize;font-size:16px;">

                            {{ $numberToWordView }} {{ 'taka only.' }}

                            </span></b>
                    </div>
                </div>
            </td>
        </tr>

        <!-- Start Space For Footer -->
        {{-- <tfoot>
            <tr>
                <td style="height: 1cm">
                    <!-- Leave this empty and don't remove it. This space is where footer placed on print -->
                </td>
            </tr>
        </tfoot> --}}
        <!-- End Space For Footer -->
    </table>

    <!-- Start Footer -->
    <div class="print-footer" style="width: 100%;">
        {{-- signature section --}}
        {{-- <div class="row signature_section">
            <div class="column">
                <div class="card">
                    <div class="container">
                        <p style="margin-top:30px; margin-bottom:-15px; color:#000;">
                            <b>.....................................................</b>
                        </p>
                        <p style="font-size:16px; font-weight: bold;color:#000; margin-bottom:25px;">
                            {{ __('messages.Received By') }}</p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="container">
                        <p style="margin-top:30px; margin-bottom:-15px; color:#000;">
                            <b>.....................................................</b>
                        </p>
                        <p style="font-size:16px;font-weight: bold;color:#000; margin-bottom:25px; ">
                            {{ __('messages.Delivered By') }}</p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card ">
                    <div class="container">
                        @if ($AccountSetting->is_auto_signature == 1 && $UserSetting->signature)
                            <span style="margin-top:-27px;"><img height=40px; width=130px;
                                    src="{{ $UserSetting->signature }}" alt=""
                                    style="margin-top:-28px;"></span>

                            <p style="margin-top:14px; color:#000;">
                                <b>.....................................................</b>
                            </p>
                            <p
                                style="font-size:16px;font-weight: bold;color:#000;margin-top:-11px;  margin-bottom:24px;">
                                {{ __('messages.Authorized By') }}</p>
                        @elseif($AccountSetting->signature)
                            <span style="margin-top:-27px;"><img height=40px; style="margin-top:-28px;" width=130px;
                                    src="{{ $AccountSetting->signature }}" alt=""></span>

                            <p style="margin-top:14px; color:#000;">
                                <b>.....................................................</b>
                            </p>
                            <p
                                style="font-size:16px;font-weight: bold;color:#000;margin-top:-11px;  margin-bottom:24px;">
                                {{ __('messages.Authorized By') }}</p>
                        @else
                            <p style="margin-top:30px; margin-bottom:-15px; color:#000;">
                                <b>.....................................................</b>
                            </p>
                            <p style="font-size:16px;font-weight: bold;color:#000; margin-bottom:25px; ">
                                {{ __('messages.Authorized By') }}</p>
                        @endif

                    </div>
                </div>
            </div>
        </div> --}}
        <footer>
            <span><b>Phone:</b></span>
            <span><b>Email:</b></span>
            <span><b>Powered by:</b> Sparse IT Solutions</span>
        </footer>
    </div>
    <!-- End Footer -->

</body>

</html>
