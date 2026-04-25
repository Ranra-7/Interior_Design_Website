<?php include "./database.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Form</title>

  <link rel="stylesheet" href="form.css" />
  <link rel="stylesheet" href="./font-awesome/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet" />
</head>
<body>

<div id="form">
  <form action="./formaction/formaction.php" method="POST">
    <h1>Get In Touch</h1>

    
    <div class="form-row-two">
      <div class="form-group">
        <label for="name">Full Name*</label>
        <input type="text" id="name" name="name" required />
      </div>
      <div class="form-group">
        <label for="email">Email Address*</label>
        <input type="email" id="email" name="email" required />
      </div>
    </div>

   
    <div class="form-row">
      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" />
    </div>

   
    <div class="form-row">
      <label for="address">Project Address*</label>
      <input type="text" id="address" name="address" required />
    </div>

    
    <div class="form-row">
      <label for="contact-method">Preferred Contact Method</label>
      <select id="contact-method" name="contact-method">
        <option value="email">Email</option>
        <option value="phone">Phone</option>
        <option value="whatsapp">WhatsApp</option>
      </select>
    </div>

    
    <div class="form-row">
      <label for="project-type">Type of Project</label>
      <select id="project-type" name="project-type">
        <option value="home">Home</option>
        <option value="office">Office</option>
        <option value="restaurant">Restaurant</option>
        <option value="wellness">Wellness Center</option>
      </select>
    </div>

    
    <div class="form-row-two">
      <div class="form-group">
        <label for="style">Preferred Design Style</label>
        <select id="style" name="style">
          <option value="">-- Select --</option>
          <option value="modern">Modern</option>
          <option value="traditional">Traditional</option>
          <option value="minimalist">Minimalist</option>
          <option value="industrial">Industrial</option>
          <option value="boho">Boho</option>
          <option value="scandinavian">Scandinavian</option>
          <option value="not sure">Not sure</option>
        </select>
      </div>

      <div class="form-group">
        <label for="budget">Budget Range</label>
        <select id="budget" name="budget">
          <option value="">-- Select --</option>
          <option value="under5k">Under 5,000</option>
          <option value="5k-15k">5,000–15,000</option>
          <option value="15k-30k">15,000–30,000</option>
          <option value="30k+">30,000+</option>
        </select>
      </div>
    </div>

    <button type="submit">Book Us</button>
  </form>
</div>

</body>
</html>