<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Fuel Station</title>

    <style>
        .main-containt {
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            width: fit-content;
            margin: auto;
        }

        .invoice-box {
            /* max-width: 272px; */
            max-width: fit-content;
            margin: auto;
            padding: 0;
            font-size: 12px;
            line-height: 20px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: black;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            /* padding-right: 5px; */
            vertical-align: top;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .info-tbl {
            margin-bottom: 15px;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .main-heading {
            width: fit-content;
            margin: auto;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .company-info {
            width: 200px;
            margin: auto;
            margin-bottom: 10px;
        }

        .company-info p {
            text-align: center;
            margin: 0;
        }

        .company-name {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <h2 class="main-heading">Receipt</h2>
    <div class="main-containt">
        <div id="receipt" class="invoice-box">
            <div class="company-info">
                <p class="company-name"><b>XYZ Fuel Station</b></p>
                <p>No. 225, 9th Cross, AMC Road, Banglore</p>
            </div>
            <table cellpadding="1" cellspacing="0">
                <tr class="information">
                    <td style="vertical-align: top;padding-right: 5px;" colspan="5">
                        <table class="info-tbl">
                            <tr>
                                <td style="vertical-align: top;padding-right: 5px;width: 50%;"><b>Bill No.:</b> <?= $order->vch_no ?></td>
                                <td style="vertical-align: top;padding-right: 5px;width: 50%;"><b>Time:</b> <?= date("h:i", strtotime($order->delivery_time)) ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;padding-right: 5px;width: 50%;"><b>Date:</b> <?= date("d:m:y", strtotime($order->delivery_time)) ?></td>
                                <td style="vertical-align: top;padding-right: 5px;width: 50%;"><b>User:</b> <?= $order->username ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;padding-right: 5px;width: 50%;"><b>Address:</b> <?= $order->company_address ?></td>
                                <td style="vertical-align: top; padding-right: 5px;width: 50%;"><b>Party:</b> <?= $order->company_name ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="heading">
                    <td style="vertical-align: top;padding-right: 5px;border-top: 1px solid black;border-bottom: 1px solid black;">Sr.No.</td>
                    <td style="vertical-align: top;padding-right: 5px;border-top: 1px solid black;border-bottom: 1px solid black;text-align:right;">Item</td>
                    <td style="vertical-align: top;padding-right: 5px;border-top: 1px solid black;border-bottom: 1px solid black;text-align:right;">Qty</td>
                    <td style="vertical-align: top;padding-right: 5px;border-top: 1px solid black;border-bottom: 1px solid black;text-align:right;">Rate(₹)</td>
                    <td style="vertical-align: top;padding-right: 5px;border-top: 1px solid black;border-bottom: 1px solid black;text-align:right;">Amount(₹)</td>
                </tr>

                <?php
                $total = 00;
                $i = 0;
                foreach (json_decode($order->orders, true) as $myorder) {
                    $total += $myorder['amt'];
                    $i++;
                    echo '
                        <tr class="item">
                            <td style="vertical-align: top;padding-right: 5px;">' . $i . '</td>
                            <td style="vertical-align: top;padding-right: 5px;text-align:right;">' . $myorder["item_name"] . '</td>
                            <td style="vertical-align: top;padding-right: 5px;text-align:right;">' . $myorder["qty"] . ' ' . $myorder["unit"] . '</td>
                            <td style="vertical-align: top;padding-right: 5px;text-align:right;">' . $myorder["price"] . '</td>
                            <td style="vertical-align: top;padding-right: 5px;text-align:right;">' . $myorder["amt"] . '</td>
                        </tr>';
                }
                echo '<tr class="total">
                    <td style="vertical-align: top;padding-right: 5px;border-top: 1px solid black;border-bottom: 1px solid black;"><b>Total</b></td>
                    <td style="vertical-align: top;padding-right: 5px;border-top: 1px solid black;border-bottom: 1px solid black;"></td>
                    <td style="vertical-align: top;padding-right: 5px;border-top: 1px solid black;border-bottom: 1px solid black;"></td>
                    <td style="vertical-align: top;padding-right: 5px;border-top: 1px solid black;border-bottom: 1px solid black;"></td>
                    <td style="vertical-align: top;padding-right: 5px;border-top: 1px solid black;border-bottom: 1px solid black;text-align:right;">₹' . $total . '</td>
                </tr>';
                ?>
            </table>
            <br>
            <hr>
            <div style="width: fit-content;margin: auto;">
                <b>Thank You<br>
                    Visit Again</b>
            </div>
        </div>
    </div>

    <center><a id="back" style="font-size: 18px;margin:5px;" href="order">Back</a><button onclick="printReceipt()" id="print" style="font-size: 18px;margin:5px;">Print</button></center>
    <script>
        function printReceipt() {
            var printContents = document.getElementById("receipt").innerHTML;

            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
</body>

</html>