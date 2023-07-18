<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://upiapi.in/assets/dist/js/jquery-3.2.1.min.js"></script>
    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world!</h1>





    <!-- Code by w3codegenerator.com -->
    <form class="generated-form" method="post" action="https://upiapi.in/order/create/" target="_self">
        <fieldset>
            <legend> Payment:: </legend>
            <label for="token">Token:</label><br>
            <input type="text" id="token" name="token" value="162c53-877199-0a471a-2773b5-8d594d"><br>
            <label for="orderId">orderId:</label><br>
            <input type="text" id="orderId" name="orderId" value="<?= rand(9999999999, 000000000); ?>"><br>
            <label for="txnAmount">txnAmount:</label><br>
            <input type="number" id="txnAmount" name="txnAmount" value="1"><br>
            <label for="txnNote">txnNote:</label><br>
            <input type="text" id="txnNote" name="txnNote" value="test"><br>
            <label for="customerName">customerName:</label><br>
            <input type="text" id="customerName" name="customerName" value="test"><br>
            <label for="customerEmail">customerEmail:</label><br>
            <input type="email" id="customerEmail" name="customerEmail" value="test@gmail.com"><br>
            <label for="customerMobile">customerMobile:</label><br>
            <input type="text" id="customerMobile" name="customerMobile" value="9768327053"><br>
            <input type="url" id="callbackUrl" name="callbackUrl" value="https://sprsinfotech.com/"><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>


    <button id="button" type="button">sssssssssssss </button>





    <script>
    $(function() {
        $("#button").click(function() {
            var data = `{
    "token": "07cabf-fcd6ab-0d06d5-ec0974-b3a736",
    "orderId": "ORDS073319032034",
    "txnAmount": 1,
    "txnNote": "test",
    "customerName": "Serf SEKH",
    "customerEmail": "customer@gmail.com",
    "customerMobile": "9000000000",
    "callbackUrl": "https://sprsinfotech.com/"
}`;
            var url = "https://upiapi.in/order/create";
            $.post(url, {
                    myData: data
                }, // data to be submit
                function(data, status, xhr) { // success callback function
                    console.log('status: ' + status + ', data: ' + data.responseData);
                },
                'json'); // response data format
        });
    });
    </script>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>