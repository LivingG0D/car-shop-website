<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.body{
    background-color:#5689c0;
}
.product {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  height: 1200px;
  margin: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  overflow: hidden;
}

.product-image {
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.product-image img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

.product-details {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 20px;
  width: 100%;
  background-color: #5689c0;
}

.product-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.product-description {
  font-size: 16px;
  margin-bottom: 10px;
}

.product-price {
  font-size: 18px;
  font-weight: bold;
  color: #eaeded;
}
.button {
  background-color: #75e2ff;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 8px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
    </style>
</head>
<body>
<div class="product">
  <div class="product-image">
    <img src="image/supra1.jpg">
  </div>
  <div class="product-details">
    <h2 class="product-title">Toyota GR Supra 2023</h2>
    <p class="product-description">Unless someone told you the Toyota GR Supra coupe and the BMW Z4 roadster are related, you might never guess it. But you can spot the evidence within the GR Supra's cabin and sense the shared engineering when you drive it. However, Toyota has styled, tuned and outfitted the GR Supra to distance it from the BMW, to the point that drawing comparisons between the two sports cars is somewhat pointless.</p>

    <p class="product-price">58,345$</p>
    <a href="pay.php" class="button2 button">Add to card</a>
  </div>
</div>
</body>
</html>