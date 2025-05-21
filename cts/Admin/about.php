<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 30px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
<div class="about-section">
  <h1>About Us </h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center; background-color:#CCFF33;">MY Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../photo/IMG_20230516_212340_041.jpg" alt="GOPU" style="width:100%"/>
      <div class="container" style="width:100%;">
        <h2>Brijesh Maurya</h2>
        <p class="title">CEO & Full StackDeveloper</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
		<p>+91 7317066622</p>
        <p>GOPU@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../photo/WhatsApp Image 2023-07-18 at 3.13.35 AM.jpeg" alt="GOPU" style="width:100%; height:406px;"/>
      <div class="container" style="width:100%;">
        <h2>Dharmander</h2>
        <p class="title">Full StackDeveloper</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
		<p>+91 7317066622</p>
        <p>GOPU@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="../photo/WhatsApp Image 2023-07-18 at 3.15.44 AM.jpeg" alt="GOPU" style="width:100%; height:406px;"/>
      <div class="container" style="width:100%;">
        <h2>Vivak Gupta</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
		<p>+91 7317066622</p>
        <p>GOPU@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
