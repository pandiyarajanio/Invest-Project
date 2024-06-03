<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/admin/css/invoice.css">
</head>

<body>

    <div class="wrapper">
        <div class="invoice_wrapper">
            <div class="header">
                <div class="logo_invoice_wrap">
                    <div class="logo_sec">
                        <img src="http://127.0.0.1:8000/assets/admin/css/codingboss.png" alt="code logo">
                        <div class="title_wrap">
                            <p class="title bold">Stockz Buddy</p>
                            <p class="sub_title">YouTube Channel</p>
                        </div>
                    </div>
                    <div class="invoice_sec">
                        <p class="date">
                            <span class="bold">Date</span>
                            <span>

                                @if(isset($userTransitions) && $userTransitions->count() > 0)

                                <ul style="list-style-type: none;"> 
                                    @foreach($userTransitions as $transition)
                                    <li>
                                        {{ $transition->created_at->format('Y-m-d') }}
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                <p>No transitions found</p>
                                @endif
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="main_table">
                    <div class="table_header">
                        <div class="row">

                            <div class="col col_des"> DESCRIPTION</div>
                            <div class="col col_price">Details</div>
                            <div class="col col_qty">&nbsp;</div>
                            <div class="col col_total">PRICE</div>
                        </div>
                    </div>
                    <div class="table_body">
                        <div class="row {{ isset($userTransitions) && !empty($userTransitions) && $userTransitions[0]->off_holdername !== null ? '' : 'hidden' }}">
                            <div class="col col_des">
                                <p class="bold">Name</p>
                            </div>
                            <div class="col col_price">
                                {{ $userTransitions[0]->off_holdername }}
                            </div>
                            <div class="col col_qty">
                                <p></p>
                            </div>
                            <div class="col col_total">
                                <p></p>
                            </div>
                        </div>
                    </div>


                    <div class="table_body">
                        <div class="row {{ isset($userTransitions) && !empty($userTransitions) && $userTransitions[0]->off_modeofpayment !== null ? '' : 'hidden' }}">
                            <div class="col col_des">
                                <p class="bold">Mode of Payment</p>
                            </div>
                            <div class="col col_price">
                                <p>{{ $userTransitions[0]->off_modeofpayment }}</p>
                            </div>
                            <div class="col col_qty">
                                <p></p>
                            </div>
                            <div class="col col_total">
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="table_body">
                        <div class="row {{ isset($userTransitions) && !empty($userTransitions) && $userTransitions[0]->off_amount !== null ? '' : 'hidden' }}">
                            <div class="col col_des">
                                <p class="bold">Amount</p>

                            </div>
                            <div class="col col_price">
                                <p></p>
                            </div>
                            <div class="col col_qty">
                                
                            </div>
                            <div class="col col_total">
                                <p>{{ $userTransitions[0]->off_amount }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="table_body">
                        <div class="row {{ isset($userTransitions) && !empty($userTransitions) && $userTransitions[0]->off_upi !== null ? '' : 'hidden' }}">
                            <div class="col col_des">
                                <p class="bold">UPI Mobile Number / UPI ID</p>
                            </div>
                            <div class="col col_price">
                                <p>{{ $userTransitions[0]->off_upi }}</p>
                            </div>
                            <div class="col col_qty">
                                <p></p>
                            </div>
                            <div class="col col_total">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="table_body">
                        <div class="row {{ isset($userTransitions) && !empty($userTransitions) && $userTransitions[0]->off_typeofaccount !== null ? '' : 'hidden' }}">
                            <div class="col col_des">
                                <p class="bold">Type of Account</p>
                            </div>
                            <div class="col col_price">
                                <p>{{ $userTransitions[0]->off_typeofaccount }}</p>
                            </div>
                            <div class="col col_qty">
                                <p></p>
                            </div>
                            <div class="col col_total">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="table_body">
                        <div class="row {{ isset($userTransitions) && !empty($userTransitions) && $userTransitions[0]->off_bankname !== null ? '' : 'hidden' }}">
                            <div class="col col_des">
                                <p class="bold">Bank Name</p>
                            </div>
                            <div class="col col_price">
                                <p>{{ $userTransitions[0]->off_bankname ?? '' }}</p>
                            </div>
                            <div class="col col_qty">
                                <p></p>
                            </div>
                            <div class="col col_total">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    
                    <style>
                        .hidden {
                            display: none !important; 
                        }
                    </style>
                    

                    <div class="table_body">
                        <div class="row {{ isset($userTransitions) && !empty($userTransitions) && $userTransitions[0]->off_accountnumber !== null ? '' : 'hidden' }}">
                            <div class="col col_des">
                                <p class="bold">Account Number</p>
                            </div>
                            <div class="col col_price">
                                <p> {{ $userTransitions[0]->off_accountnumber }}</p>
                            </div>
                            <div class="col col_qty">
                                <p></p>
                            </div>
                            <div class="col col_total">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="table_body">
                        <div class="row {{ isset($userTransitions) && !empty($userTransitions) && $userTransitions[0]->off_branchname !== null ? '' : 'hidden' }}">
                            <div class="col col_des">
                                <p class="bold">Branch Name</p>
                            </div>
                            <div class="col col_price">
                                <p>{{ $userTransitions[0]->off_branchname }}</p>
                            </div>
                            <div class="col col_qty">
                                <p></p>
                            </div>
                            <div class="col col_total">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="table_body">
                        <div class="row {{ isset($userTransitions) && !empty($userTransitions) && $userTransitions[0]->off_city !== null ? '' : 'hidden' }}">
                            <div class="col col_des">
                                <p class="bold">City</p>
                            </div>
                            <div class="col col_price">
                                <p> {{ $userTransitions[0]->off_city }}</p>
                            </div>
                            <div class="col col_qty">
                                <p></p>
                            </div>
                            <div class="col col_total">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="table_body">
                        <div class="row {{ isset($userTransitions) && !empty($userTransitions) && $userTransitions[0]->off_ifsc !== null ? '' : 'hidden' }}">
                            <div class="col col_des">
                                <p class="bold"> IFSC Number</p>
                            </div>
                            <div class="col col_price">
                                <p>{{ $userTransitions[0]->off_ifsc }}</p>
                            </div>
                            <div class="col col_qty">
                                <p></p>
                            </div>
                            <div class="col col_total">
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="paymethod_grandtotal_wrap">
        <div class="grandtotal_sec">
            <p class="bold">
            <p>remove it content</p>
            </p>
        </div>
    </div>

    <div class="footer">
        <p>Thank you and Best Wishes</p>
        <div class="terms">
            <p class="tc bold">Terms & Coditions</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non praesentium doloribus. Quaerat
                vero iure itaque odio numquam, debitis illo quasi consequuntur velit, explicabo esse nesciunt
                error aliquid quis eius!</p>
        </div>
    </div>
    </div>
    </div>


</body>

</html>