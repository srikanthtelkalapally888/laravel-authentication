<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <style>
        *:focus {
    outline: none;
  }
  
  body {
    margin: 0;
    padding: 0;
    background: #DDD;
    font-size: 16px;
    color: #222;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
  }
  
  #login-box {
    position: relative;
    margin: 5% auto;
    width: 600px;
    height: 400px;
    background: #FFF;
    border-radius: 2px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  }
  
  .left {
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;
  }
  
  h1 {
    margin: 0 0 20px 0;
    font-weight: 300;
    font-size: 28px;
  }
  
  input[type="text"],
  input[type="password"] {
    display: block;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 4px;
    width: 220px;
    height: 32px;
    border: none;
    border-bottom: 1px solid #AAA;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    font-size: 15px;
    transition: 0.2s ease;
  }
  
  input[type="text"]:focus,
  input[type="password"]:focus {
    border-bottom: 2px solid #16a085;
    color: #16a085;
    transition: 0.2s ease;
  }
  
  input[type="submit"] {
    margin-top: 28px;
    width: 120px;
    height: 32px;
    background: #16a085;
    border: none;
    border-radius: 2px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.1s ease;
    cursor: pointer;
  }
  
  input[type="submit"]:hover,
  input[type="submit"]:focus {
    opacity: 0.8;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    transition: 0.1s ease;
  }
  
  input[type="submit"]:active {
    opacity: 1;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    transition: 0.1s ease;
  }
  
  .or {
    position: absolute;
    top: 180px;
    left: 280px;
    width: 40px;
    height: 40px;
    background: #DDD;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    line-height: 40px;
    text-align: center;
  }
  
  .right {
    position: absolute;
    top: 0;
    right: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;
    background: url('https://goo.gl/YbktSj');
    background-size: cover;
    background-position: center;
    border-radius: 0 2px 2px 0;
  }
  
  .right .loginwith {
    display: block;
    margin-bottom: 40px;
    font-size: 28px;
    color: #FFF;
    text-align: center;
  }
  
  button.social-signin {
    margin-bottom: 20px;
    width: 220px;
    height: 36px;
    border: none;
    border-radius: 2px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    transition: 0.2s ease;
    cursor: pointer;
  }
  
  button.social-signin:hover,
  button.social-signin:focus {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    transition: 0.2s ease;
  }
  
  button.social-signin:active {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    transition: 0.2s ease;
  }
  
  button.social-signin.facebook {
    background: #32508E;
  }
  
  button.social-signin.twitter {
    background: #55ACEE;
  }
  
  button.social-signin.google {
    background: #DD4B39;
  }
    </style>
</head>
<body>
<div id="login-box">
        <div class="left">
            <h1>Sign Up</h1>

            <input type="text" id="username" name="username" placeholder="name" />
            <input type="text" id="email" name="email" placeholder="Email" />
            <input type="password" id="password" placeholder="password" />

            <input type="submit" id="signUp" name="signup_submit" value="submit" />



        </div>
        <div class="right">
            <span class="social-sign facebook">Login With Facebook</span>

            <button class="social-signin facebook">Login With Facebook</button>
            <button class="social-signin twitter">Login With Twitter</button>
            <button class="social-signin google">Login With Google</button>
            
        </div>

    </div>
</body>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
    // import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-analytics.js";
    import { getDatabase,set,ref } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-database.js";
    import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-auth.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyBwDlDm0eVlsDGbIMvRJpmiHLQv1tJdtaI",
      authDomain: "airloo-auth.firebaseapp.com",
      databaseURL: "https://airloo-auth-default-rtdb.firebaseio.com",
      projectId: "airloo-auth",
      storageBucket: "airloo-auth.appspot.com",
      messagingSenderId: "889998437796",
      appId: "1:889998437796:web:e328b64735c465bc32e531",
      measurementId: "G-SR1JJQF05P"
    };
  
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    // const analytics = getAnalytics(app);
    const database = getDatabase(app);
    const auth = getAuth();
    
    signUp.addEventListener("click",(e)=>{
       var email = document.getElementById("email").value;
       var password = document.getElementById("password").value;
       var username = document.getElementById("username").value;


        createUserWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed in 
    const user = userCredential.user;
    // ...
    // window.location = "http://www.location.com/login.html";

    set(ref(database , 'users/'+ user.uid),{
        username: username,
        email:email,
    })



    alert('user added')
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    alert(errorMessage);
    // ..
  });
    })

  </script>
</html>