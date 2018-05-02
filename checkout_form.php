<html>


<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="checkout_form.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <style>
  body {
    font-size: 16px;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #666666;
    position: -webkit-sticky; /*safari*/
    position: sticky;
    top: 0;
  }
  li {
    float: left;
  }
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  li a:hover {
    background-color: #2E8B57;
  }
  .active {
    background-color: #2E8B57;
  }
  * {
    box-sizing: border-box;
  }
  .row{
    display: flex;
  }
  .column {
    flex: 50px;
    padding: 10px;
    height: 300px;
  }
  * {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #e5e5e5;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #2E8B57;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #3CB371;
}

a {
  color: #2E8B57;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: blue;
}

  </style>
</head>
<body>
  <div class="header">
    <h1>Hot Drinks And Snack Ltd</h1>
    <p>
      Providing the best drink machines on the market
    </p>
  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="admin_page.php">Admin</a></li>
  </ul>
  <h2>Thank You for your order</h2><br /><h3>Please enter you card details </h3>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="#action_page.php">

        <div class="row">
          <div class="col-50">
            <h5>Billing Address</h5>
            <label for="fullname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fullname" name="firstname">
            <label for="email address"><i class="fa fa-envelope"></i> Email Address</label>
            <input type="text" id="email address" name="email" />
            <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="address" name="address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city">

            <div class="row">
              <div class="col-50">
                <label for="County">County</label>
                <input type="text" id="County" name="County">
              </div>
              <div class="col-50">
                <label for="Post Code">Post Code</label>
                <input type="text" id="Post Code" name="Post Code">
              </div>
            </div>
          </div>
          <div class="col-50">
            <h6>Payment Method</h6>
            <label for="fullname">Accepted Card Types</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="holdersname">Cardholders Name</label>
            <input type="text" id="holdersname" name="CardHolders Name">
            <label for="CardNum">Card Number</label>
            <input type="text" id="CardNum" name="Card Number">

            <label for="expierymomth">Expiary Month</label>
            <input type="text" id="expierymomth" name="expierymomth">
            <div class="row">
              <div class="col-50">
                <label for="expiaryyear">Expiary Year</label>
                <input type="text" id="expiaryyear" name="expiaryyear">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv">
              </div>
            </div>
          </div>

        </div>
      <label>
        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing address
      </label>
      <a href="order_number.php" class="btn">Continue</a>
    </form>
  </div>
</div>
<div class="col-25">
</div>
</div>


</body>

</html
