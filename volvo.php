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
  height: 1100px;
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
    <img src="image/volvo.jpg">
  </div>
  <div class="product-details">
    <h2 class="product-title">Volvo XC90 2022</h2>
    <p class="product-description">
For the 2023 model year, the XC90 receives updated engines and an improved infotainment system. Volvo has introduced its 48-volt mild hybrid engines to some of its models, and now it's the XC90's turn. The T5 and T6 engines get mild hybrid systems and a name change to B5 and B6. Volvo also updated the Recharge T8 plug-in hybrid midway through last year. The latest model has a larger battery that extends its electric-only range to 32 miles. Finally, the 2023  XC90 receives a new Google-based infotainment system that includes Google Assistant, Google Maps and Google Play. Over-the-air (OTA) software updates will now be possible with the new infotainment system.

The 2023 updates make the Volvo XC90 an even more attractive choice, but there are other impressive three-row luxury SUVs to consider. The Acura MDX and Infiniti QX60 were just redesigned for the 2022 model year, and the Mercedes-Benz GLE is currently our highest-rated midsize luxury SUV. The XC90 hasn't been redesigned since 2016, yet its design has aged well and it still has a lot to offer.</p>
    <p class="product-price">79,900$</p>
    <a href="pay.php" class="button2 button">Add to card</a>
  </div>
</div>
</body>
</html>