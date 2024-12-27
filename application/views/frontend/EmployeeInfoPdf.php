<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            font-weight: 800;
        }

        .invoice {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 100vh;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .invoice-header-left {
            flex: 1;
        }

        .invoice-header-right {
            flex: 1;
            text-align: right;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20%;
        }

        .invoice-table th,
        .invoice-table td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        .invoice-table th {
            background-color: #E64A19;
            color: #fff;
            font-weight: bold;
            text-align: center;
        }

        .invoice-total {
            float: right;
        }
    </style>
</head>

<body>
    HTML CSSResult Skip Results Iframe
    <div class="invoice">
        <div class="invoice-header">
            <div class="invoice-header-left">
                <img src="https://img.icons8.com/?size=256&id=FJJcVgL6wWOP&format=png" alt="Company Logo" width="150">
                <h1>Company Name - কম্পানির নাম</h1>
                <p>Email: info@company.com</p>
                <p>বিষস্ত</p>
                <p>Phone: +1 234-567-8901</p>
            </div>
            <div class="invoice-header-right">
                <h2>Invoice</h2>
                <p>Invoice Number: #123456</p>
                <p>Date: 2023-12-03</p>
            </div>
        </div>

        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Item 1</td>
                    <td>2</td>
                    <td>$1.99</td>
                    <td>$3.98</td>
                </tr>
                <tr>
                    <td>Item 2</td>
                    <td>1</td>
                    <td>$2.50</td>
                    <td>$2.50</td>
                </tr>
                <tr>
                    <td>Item 2</td>
                    <td>1</td>
                    <td>$2.50</td>
                    <td>$2.50</td>
                </tr>

                <tr>
                    <td>Item 2</td>
                    <td>1</td>
                    <td>$2.50</td>
                    <td>$2.50</td>
                </tr>
                <tr>
                    <td>Item 2</td>
                    <td>1</td>
                    <td>$2.50</td>
                    <td>$2.50</td>
                </tr>
                <!-- Add more items as needed -->
            </tbody>
        </table>

        <div class="invoice-total">
            <p>Subtotal: $6.48</p>
            <p>Tax (8%): $0.52</p>
            <p>Total: $7.00</p>
        </div>

        <div class="invoice-footer">
            <div class="text-center mt-3">
                <p>Thank you for your support</p>
                <script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="ecodedesign" data-color="#FFDD00" data-emoji="" data-font="Cookie" data-text="Buy me a coffee" data-outline-color="#000000" data-font-color="#000000" data-coffee-color="#ffffff"></script>
            </div>
        </div>
    </div>



</body>

</html>