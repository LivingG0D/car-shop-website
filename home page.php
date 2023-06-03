<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Divar Site</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:  #5689c0;
    }
    header {
      background-color: #333;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 36px;
    }
    section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 20px;
    }
    .card {
      background-color: #eaeded;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: 10px;
      width: 300px;
      overflow: hidden;
    }
    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .card h2 {
      margin: 10px;
      font-size: 24px;
    }
    .card p {
      margin: 10px;
      font-size: 18px;
    }
    .button {
      background-color:#75e2ff;
      border: none;
      color: white;
      padding: 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 5px;
      margin: 10px;
      cursor: pointer;
    }
    .button:hover {
      background-color: #5689c0;
    }
    .s{
      background-color:#244d61;
      border: none;
      color: #75e2ff;
      padding: 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 5px;
      margin: 10px;
      cursor: pointer;
    }
    .s:hover{
      background-color: #eaebed;
    }
  </style>
</head>
<body>
  <header>
    
    <h1> car divar Site</h1>
  </header>
  <section>
    
    <div class="card">
      <img src="image/me.jpg">
      <h2>Mercedes-Benz E-Class </h2>
      <p>The Mercedes-Benz E-Class got a refresh for 2021, helping it maintain its status as the class benchmark. The E-Class doesn't feel like a totally different car, but that's hardly a bad thing. The premium interior, smooth ride and excellent driver aids all come together in a handsome, well-crafted package.</p>
      <a href="eclass.php" class="button">Learn More</a>
    </div>
    <div class="card">
      <img src="Image/mglc.jpg">
      <h2>Mercedes-Benz GLC </h2>
      <p>The Mercedes-Benz GLC is all about smoothness and refinement. It treats you with serene comfort, a high-quality cabin, and impressive technology and safety features. In a group of small luxury all-stars such as the Audi Q5, BMW X3, Porsche Macan and Volvo XC60, the Mercedes-Benz GLC remains a benchmark</p>
      <a href="gle.php" class="button">Learn More</a>
    </div>
    <div class="card">
      <img src="image/volvo.jpg">
      <h2>Volvo XC90 2022</h2>
      <p>The 2022 Volvo XC90 is the largest and most expensive model in the automaker's lineup. We looked at this three-row SUV in a new light after substantial improvements for the 2020 model year. The plug-in hybrid version, in particular, changed from a hard pass to a must-have seemingly overnight. With top-notch interior materials, a pleasant ride and intriguing selection of powertrains, the Volvo XC90 should make the to-consider list of anyone looking at a midsize three-row luxury SUV.</p>
      <a href="volvo.php" class="button">Learn More</a>
    </div>
    <div class="card">
      <img src="image/gtr1.jpg">
      <h2>Nissan GT-R</h2>
      <p>The Nissan GT-R has been one of the fastest performance cars in the world for more than a decade. However, it's also been pretty much the same that whole time; it debuted for the 2009 model year and hasn't received a full redesign since. Nissan has done its best to make updates at least. The only notable differences for 2021 is the elimination of the Track edition model and the return of the iconic Bayside Blue paint color made famous on the R34-generation Nissan Skyline GT-R from the late 1990s (a car that unfortunately was never sold new in America).</p>
      <a href="nissan.php" class="button">Learn More</a>
    </div>
    <div class="card">
      <img src="image/bmw1.jpg">
      <h2>2023 BMW 5 Series</h2>
      <p>The BMW 5 Series lives up to the expectations set by its forebears. There's an engine for nearly every taste, and the car's handling capabilities are fundamentally sound.</p>
      <a href="bmw.php" class="button">Learn More</a>
    </div>
    <div class="card">
      <img src="Image/ford.jpg">
      <h2>ford mustang 2022</h2>
      <p>From a base EcoBoost all the way up to a decked-out V8-powered GT, the Ford Mustang provides ample amounts of style and performance</p>
      <a href="ford.php" class="button">Learn More</a>
    </div>
    <div class="card">
      <img src="image/ghost.jpg">
      <h2>Rolls-Royce Ghost 2022 </h2>
      <p>There's probably no greater display of wealth than a Rolls-Royce in your driveway. Even the entry-level 2022 Rolls-Royce Ghost will set you back more than $330,000 to start. The previous-generation Ghost that debuted in 2010 received some criticism for being built on a shared platform with parent company's BMW 7 Series, but the current generation that was introduced last year isn't saddled with that burden. It's now built on a platform shared by its larger Phantom and Cullinan SUV stablemates.</p>
      <a href="ghost.php" class="button">Learn More</a>
    </div>
    <div class="card">
      <img src="image/supra1.jpg">
      <h2>Toyota GR Supra 2023 </h2>
      <p>Toyota made a prudent business decision and partnered with BMW to engineer the GR Supra. This two-seater devours curves as much as it loves a wide open road. The GR Supra's value proposition — offering comparable performance to a Porsche Cayman for a considerably lower price — is certain to appeal to typical car fanatics. It's definitely worth considering if you're in the market for a sports car.</p>
      <a href="supr.php" class="button">Learn More</a>
    </div>
       <div class="card">
       <h2 class="header">You do not have an account ?</h2>
       <div align="center">
       <a href="login.php" class="s s:hover">yes</a>
       <a href="sign in.php" class="s s:hover">No</a>
    </div>
  </section>
</body>
</html>