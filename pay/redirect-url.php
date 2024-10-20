<?php
$key = 'afa891a9-4004-4f68-8edb-cb86140c88e0';
$key_index = 1;
$response = $_POST;
$string = "/pg/v1/status/".$response['merchantId']."/".$response['transactionId'].$key;
$final_x_header = hash('sha256', $string).'###'.$key_index;
$url = "https://api.phonepe.com/apis/hermes/pg/v1/status/".$response['merchantId']."/".$response['transactionId'];

$headers = array(
    "Content-Type: application/json",
    "accept: application/json",
    "X-VERIFY: ".$final_x_header,
    "X-MERCHANT-ID: ".$response['merchantId']
);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$resp = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$responsePayment = json_decode($resp, true);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Receipt</title>
</head>
<style>

  .container {
    width: fit-content;
    margin: auto;
    background-color: aliceblue;
    padding-bottom: 25px;
    margin-top: 50px;
    font-size: 15px;
  }

  th {
    text-align: left;
  }

  table {
    width: 100%;
  }

  th,
  td {
    width: 50%;
  }
  td{
      text-align: right;
  }

  .borderAnimated {
    border-radius: 4px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
  }
  .div2{
    background-color: #05ad54;
    padding-left: 10px;
  }
  .div2 p{
    padding: 0;
    margin: 0;
    color: aliceblue;
    font-weight: 700;
  }
  .div2 p:last-child{
    font-size: 14px;
  }
  h1, th, td{
    padding: 5px 10px;
  }
</style>

<body>
    <div id="printableArea" class="container borderAnimated">
      <div class="div2" style="marrgin:0;">
        <p>
          <?php echo "   ".$responsePayment['message'];
          echo "</p><p>";
          echo date("h:i a \o\\n j F Y");
          ?>
        </p>
      </div>
      <div style="width:fit-content;margin:auto;">
          <h1 style="width: fit-content;margin: auto;">Mihu Infotech</h1>
      <ul style="width: fit-content;margin: auto;">
        <li>Pune Maharashtra</li>
        <li>TEL: +91 7972247649</li>
        <li>https://www.mihusystems.in</li>
        <li>GST NO: 27AHUPL7986R1ZQ</li>
      </ul>
      </div>
      <table>
        <tr>
          <th>Payors Name</th>
          <td>---</td>
        </tr>
        <tr>
          <th>Charge Description</th>
          <td>Logic Software Renewal</td>
        </tr>
        <tr>
          <th>Amount [Including GST]</th>
          <td><b>&#x20B9; <?php echo $responsePayment['data']['amount']/100; ?></b></td>
        </tr>
        <tr>
          <th>Merchant Transaction Id</th>
          <td><?php echo $responsePayment['data']['merchantTransactionId']; ?></td>
        </tr>
        <tr>
          <th>Transaction Id</th>
          <td><?php echo $responsePayment['data']['transactionId']; ?></td>
        </tr>
        <tr>
          <th>Transaction Mode</th>
          <td><?php echo $responsePayment['data']['paymentInstrument']['type']; ?></td>
        </tr>
        <tr>
          <th>UTR</th>
          <td><?php echo $responsePayment['data']['paymentInstrument']['utr']; ?></td>
        </tr>
      </table>
    </div>
    <div id="print" style="width: 100%;text-align: center;margin-top: 25px;"><input style="cursor: pointer;"
        type="button" onclick="printDiv('printableArea')" value="Print Receipt" /></div>

  <script>
    function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;

      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;

      window.print();

      document.body.innerHTML = originalContents;
    }
  </script>
</body>

</html>
<?php
}
?>