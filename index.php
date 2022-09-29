<!DOCTYPE html>
<html>
  <head>
    <title>OTP Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

  </head>
  <body>
    <form action="verification.php">
      <h1>OTP Verification</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Phone Number</strong></label>
        <input type="text" id="number" placeholder="Enter Phone Number (+91)" name="uname" required>
      </div>
      <div id="recaptcha-container"></div>
      <button type="button" onclick="phoneAuth();">Send OTP</button>
    
    </form>

    <form>
    
    <div class="formcontainer">
    
    <div class="container">
    <input type="text" id="verificationCode" placeholder="Enter Verification Code">

    </div>
    <button type="button" onclick="codeverify();">Verify Code</button>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    </form>  

    <script>
    const firebaseConfig = {
    apiKey: "AIzaSyAQ-vDy8a1ORyi6SMPKmwI_SoQ0FSIp7pY",
    authDomain: "otp1-a0a4d.firebaseapp.com",
    projectId: "otp1-a0a4d",
    storageBucket: "otp1-a0a4d.appspot.com",
    messagingSenderId: "80267592789",
    appId: "1:80267592789:web:19ca7d86d07187b87000dc",
    measurementId: "G-4QBKC4Y32Y"
  };
     firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="firebase.js" type="text/javascript"></script>
  </body>
</html>
