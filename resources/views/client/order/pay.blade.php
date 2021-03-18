@extends('layouts.client')

@section('content')
<!-- ==================== 
	     Page Title
	========================= -->
<div class="page-title bg-light">
    <div class="container">
        <h3 class="title">Checkout Payment Page</h3>

    </div>
</div>

<div class="small-spacer">
    <div class="container">
        <div id="paypal-button"></div>
    </div>
</div>


@endsection

@push('custom-js')
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    paypal.Button.render({
        // Configure environment
        env: 'sandbox',
        client: {
            sandbox: 'AZBwqi_60wJtfwVJe0CXeo5Rs1Gr3SkJFyBrsp0FxqbnmXqoq859IbSn5QwO6J_V9uzTqV1eAFZdVFGj',
            production: 'demo_production_client_id'
        },
        // Customize button (optional)
        locale: 'en_US',
        style: {
            size: 'small',
            color: 'gold',
            shape: 'pill',
        },

        

        // Enable Pay Now checkout flow (optional)
        commit: true,

        // Set up a payment
        payment: function (data, actions) {
            return actions.payment.create({
                
                redirect_urls: {
                    return_url: 'http://127.0.0.1:8000/checkout/pay/confirm',
                    // return_url: "{{url(env('APP_URL').'/checkout/pay/confirm')}}",
                },

                transactions: [{
                    amount: {
                        total: {{$orders_total_price}},
                        // total: '0.01',
                        currency: 'USD'
                    }
                }]
            });
        },
        // Execute the payment
        onAuthorize: function (data, actions) {

            console.log(data)
            document.cookie= 'payer_id='+data.payerID;
            document.cookie= 'payment_id='+data.paymentID;
            document.cookie= 'order_id='+data.orderID;

            actions.payment.execute().then(function () {
                window.alert('Payment Successfull');
               
            });

            return actions.redirect();

        }
    }, '#paypal-button');

</script>
@endpush
