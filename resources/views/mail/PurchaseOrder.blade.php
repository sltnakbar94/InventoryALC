<!DOCTYPE html>
<html>
<head>
    <title>Pemberitahuan Purchase Order</title>
</head>
<body>
    <h1>Your purchase order document has been {{ $emailData->status }} </h1>
    <br>
    <p>With PO Number {{ $emailData->form_number }} </p>
    <br>
    <p>Please check your Anomali.Inventory Account</p>
   
    <p>Thank you</p>
</body>
</html>     