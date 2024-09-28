<?php
require_once 'config.php';

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $userinfo = [
    'email' => $google_account_info['email'],
    'first_name' => $google_account_info['givenName'],
    'last_name' => $google_account_info['familyName'],
    'gender' => $google_account_info['gender'],
    'full_name' => $google_account_info['name'],
    'picture' => $google_account_info['picture'],
    'verifiedEmail' => $google_account_info['verifiedEmail'],
    'token' => $google_account_info['id'],
  ];

  // checking if user is already exists in database
  $sql = "SELECT * FROM users WHERE email ='{$userinfo['email']}'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // user is exists
    $userinfo = mysqli_fetch_assoc($result);
    $token = $userinfo['token'];
  } else {
    // user is not exists
    $sql = "INSERT INTO users (email, first_name, last_name, gender, full_name, picture, verifiedEmail, token) VALUES ('{$userinfo['email']}', '{$userinfo['first_name']}', '{$userinfo['last_name']}', '{$userinfo['gender']}', '{$userinfo['full_name']}', '{$userinfo['picture']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $token = $userinfo['token'];
    } else {
      echo "User is not created";
      die();
    }
  }

  // save user data into session
  $_SESSION['user_token'] = $token;
} else {
  if (!isset($_SESSION['user_token'])) {
    header("Location: https://chat.placementguido.com/Result.php");
    die();
  }

  // checking if user is already exists in database
  $sql = "SELECT * FROM users WHERE token ='{$_SESSION['user_token']}'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // user is exists
    $userinfo = mysqli_fetch_assoc($result);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Landing Page With Light/Dark Mode</title>
   
    
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

.light {
  --mainColor: #ac46e3ff;
  --hoverColor: #ac46e3ff;
  --backgroundColor: #000000;
  --darkOne: #ac46e3ff;
  --darkTwo:#000000 ;
  --lightOne: #080808;
  --lightTwo: #e7e3e3;
}



*,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
}


.he h3{
    font-size: 32px;
    font-family: 700;
    padding-bottom: 30px;
    color: rgb(2, 2, 2);
}

    .he h3 span {
        color: #ac46e3;
    }
.right img{
animation: floatImage 7s ease-in-out infinite;
}
@keyframes floatImage{
    0%{
        transform: translateY(0);
    }
    50%{
        transform: translateX(-1.4rem);

    }
    100%{
        transform: translateY(0);
    }}
    
.li h1 {
    color:#fff;
}
a {
  text-decoration: none;
}
img  {
    width: 5%;
    height: 5%;
    margin-left: 5rem;
    border-radius: 250px;
}
.big-wrapper {
  position: relative;
  padding: 1.7rem 0 2rem;
  width: 100%;
  min-height: 100vh;
  overflow: hidden;
  background-color: #050038;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.container12 {
  position: relative;
  max-width: 81rem;
  width: 100%;
  margin: 0 auto;
  padding: 0 3rem;
  z-index: 10;
  
}
@keyframes slideRight{
    0%{
        transform: translateX(-300px);
       
    }
100%{
    transform: translateX(0);
    
}
}

@keyframes slideLeft{
    0%{
        transform: translateX(-300px);
       
    }
100%{
    transform: translateX(0);
    
}
}
.btn {
  display: inline-block;
  padding: 0.9rem 1.9rem;
  color: black !important;
  font-size: 50px;
  background-color: yellow;
  border-radius: 16px;
  text-transform: capitalize;
  transition: 0.3s;
}

.btn:hover {
  background-color: rgb(255, 255, 255);
  transform: scale(1) !important;
}


.showcase-area .container12 {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  align-items: center;
  justify-content: center;
}

.big-title {
  font-size: 1.4rem;
  color: yellow;
  text-transform: capitalize;
  line-height: 1.4;
  animation: slideRight 3s ease forwards;
  margin-top: 100px;
}

.text {
  color: white;
  font-size: 1.1rem;
  margin: 1.9rem 0 2.5rem;
  max-width: 600px;
  line-height: 2.3;
}

.showcase-area .btn {
  box-shadow: 0 0 40px 2px rgba(0, 0, 0, 0.05);
}

.person {
  width: 100%;
  transform: translate(15%, 25px);
}

.toggle-btn {
  display: inline-block;
  border: none;
  background: var(--darkTwo);
  color: var(--backgroundColor);
  outline: none;
  cursor: pointer;
  height: 39px;
  width: 39px;
  border-radius: 50%;
  font-size: 1.1rem;
  transition: 0.3s;
}

.toggle-btn i {
  line-height: 39px;
}

.toggle-btn:hover {
  background: var(--mainColor);
}

.big-wrapper.light .toggle-btn i:last-child {
  display: none;
}

.big-wrapper.light .toggle-btn i:first-child {
  display: block;
}

.big-wrapper.dark .toggle-btn i:last-child {
  display: block;
}
.left{
    animation: slideRight 3s ease forwards;
}
.big-wrapper.dark .toggle-btn i:first-child {
  display: none;
}



.shape {
  position: absolute;
  z-index: 0;
  width: 500px;
  bottom: -180px;
  left: -15px;
  opacity: 0.1;
}

.copy {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  animation: appear 1s 1 both;
}

@keyframes appear {
  0% {
    clip-path: circle(30% at -25% -25%);
  }
  100% {
    clip-path: circle(150% at 0 0);
  }
}

@media screen and (max-width: 870px) {
  .hamburger-menu {
    display: flex;
  }
  .he h3{
    font-size: 20px;
    font-family: 700;
    padding-bottom: 20px;}

  .links {
    position: fixed;
    top: 0;
    right: 0;
    max-width: 450px;
    width: 100%;
    height: 100%;
    background-color: var(--mainColor);
    z-index: 95;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translateX(100%);
    transition: 0.5s;
  }

  .links ul {
    flex-direction: column;
  }

  .links a {
    color: #fff;
    margin-left: 0;
    padding: 2rem 0;
  }

  .links .btn {
    background: none;
  }

  .overlay {
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    opacity: 0;
    pointer-events: none;
    transition: 0.5s;
  }

  .big-wrapper.active .links {
    transform: translateX(0);
    box-shadow: 0 0 50px 2px rgba(0, 0, 0, 0.4);
  }

  .big-wrapper.active .overlay {
    pointer-events: all;
    opacity: 1;
  }

  .showcase-area {
    
    max-width: 700px;
    margin: 0 auto;
  }

  .showcase-area .container12 {
    grid-template-columns: 1fr;
    justify-content: center;
    grid-gap: 2rem;
  }

  .big-title {
    font-size: 1.1rem;
  }

  .text {
    font-size: 0.95rem;
    margin: 1.4rem 0 1.5rem;
  }

  .person {
    width: 100%;
    transform: none;
  }

  .logo h3 {
    font-size: 1.25rem;
  }

  .shape {
    bottom: -180px;
    left: -150px;
  }
  img {
      width: 20%;
    height: 20%;
    margin-left: 2rem;
    border-radius: 50px;
}
}

@media screen and (max-width: 470px) {
  .container12 {
    padding: 0 1.5rem;
  }

  .big-title {
    font-size: 0.9rem;
  }

  .text {
    margin: 1.1rem 0 1.5rem;
  }

  .showcase-area .btn {
    font-size: 0.8rem;
  }
  .big-wrapper {
  position: relative;
  padding: 1.7rem 0 2rem;
  width: 100%;
  min-height: 100vh;
  overflow: hidden;
  background-color: #050038;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
}

    </style>
  </head>
  <body>
     
    <main>
      <div class="big-wrapper light">
        <div class="showcase-area">
              <img src="<?= $userinfo['picture'] ?>" alt="" width="2px" height="20px">
    <h2 style='color:white;margin-left:2rem;'>Full Name: <?= $userinfo['full_name'] ?></h2>
          <div class="container12">
            <div class="left">
              <div class="big-title">
                <h1>Place Guru</h1>
              </div>
              <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Delectus eius distinctio odit, magni magnam qui ex perferendis
                vitae!
            </p>
                
              
              <div class="cta">
                <a href="https://chat.placementguido.com/Result.php" class="btn">Goto Website</a>
              </div>
            </div>

            <div class="right">
              <img src="https://wedevops.in/web.svg" alt="Person Image" class="person" />
            </div>
          </div>
        </div>

        
      </div>

    

    </a>

    
    </main>
  </body>
</html>