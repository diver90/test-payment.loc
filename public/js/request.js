jQuery(document).ready(function($){

    var sendRequest = (data) => {
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var requestData = data;
        var type = "POST";
        var ajaxurl = 'callback';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: requestData,
            dataType: 'json',
            success: function (response) {
                window.location = response
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    $("#btn-success").click(function (e) {
        e.preventDefault();
        var requestData = {
            "pay_form": {
                "token": "xxx",
                "design_name": "des1"
            },
            "transactions": {
                "12345-7891234567": {
                    "id": "12345-7891234567",
                    "operation": "pay",
                    "status": "success",
                    "descriptor": "FAKE_PSP",
                    "amount": 2345,
                    "currency": "USD",
                    "fee": {
                        "amount": 0,
                        "currency": "USD"
                    },
                    "card": {
                        "bank": "CITIZENS STATE BANK",
                    }
                }
            },
            "order": {
                "order_id": "12345-7891234567",
                "status": "paid",
                "amount": 2345,
                "refunded_amount": 0,
                "currency": "USD",
                "marketing_amount": 2345,
                "marketing_currency": "USD",
                "processing_amount": 2345,
                "processing_currency": "USD",
                "descriptor": "FAKE_PSP",
                "fraudulent": false,
                "total_fee_amount": 0,
                "fee_currency": "USD"
            },
            "transaction": {
                "id": "12345-7891234567",
                "operation": "pay",
                "status": "success"
            }
        };
        sendRequest(requestData);

    });

    $("#btn-fail").click(function (e) {
        e.preventDefault();
        var requestData = {
            "pay_form": {
                "token": "xxx",
                "design_name": "des1"
            },
            "transactions": {
                "12345-7891234567": {
                    "id": "12345-7891234567",
                    "operation": "pay",
                    "status": "fail",
                    "descriptor": "FAKE_PSP",
                    "amount": 2345,
                    "currency": "USD",
                    "fee": {
                        "amount": 0,
                        "currency": "USD"
                    },
                    "card": {
                        "bank": "CITIZENS STATE BANK",
                    }
                }
            },
            "error": {
                "code": "6.01",
                "messages": [
                    "Unknown decline code"
                ],
                "recommended_message_for_user": "Unknown decline code"
            },
            "order": {
                "order_id": "12345-7891234567",
                "status": "declined",
                "amount": 2345,
                "refunded_amount": 0,
                "currency": "USD",
                "marketing_amount": 2345,
                "marketing_currency": "USD",
                "processing_amount": 2345,
                "processing_currency": "USD",
                "descriptor": "FAKE_PSP",
                "fraudulent": false,
                "total_fee_amount": 0,
                "fee_currency": "USD"
            },
            "transaction": {
                "id": "12345-7891234567",
                "operation": "pay",
                "status": "fail"
            }
        };
       sendRequest(requestData);
    });

});
