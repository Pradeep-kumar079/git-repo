<?php 
  require('connect.php'); 
  session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="styl.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <script type="text/javascript" src="app.js" defer></script>
</head>
<body>
  <nav id="sidebar">
    <ul>
      <li>
        <span class="logo">EduHub</span>
        <button onclick=toggleSidebar() id="toggle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/></svg>
        </button>
      </li>
      <li class="active">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-200h120v-200q0-17 11.5-28.5T400-440h160q17 0 28.5 11.5T600-400v200h120v-360L480-740 240-560v360Zm-80 0v-360q0-19 8.5-36t23.5-28l240-180q21-16 48-16t48 16l240 180q15 11 23.5 28t8.5 36v360q0 33-23.5 56.5T720-120H560q-17 0-28.5-11.5T520-160v-200h-80v200q0 17-11.5 28.5T400-120H240q-33 0-56.5-23.5T160-200Zm320-270Z"/></svg>
          <span>Home</span>
        </a>
      </li>
      <li>
        <a href="https://chat.placementguido.com/fileuploaddownload/index.php">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M520-640v-160q0-17 11.5-28.5T560-840h240q17 0 28.5 11.5T840-800v160q0 17-11.5 28.5T800-600H560q-17 0-28.5-11.5T520-640ZM120-480v-320q0-17 11.5-28.5T160-840h240q17 0 28.5 11.5T440-800v320q0 17-11.5 28.5T400-440H160q-17 0-28.5-11.5T120-480Zm400 320v-320q0-17 11.5-28.5T560-520h240q17 0 28.5 11.5T840-480v320q0 17-11.5 28.5T800-120H560q-17 0-28.5-11.5T520-160Zm-400 0v-160q0-17 11.5-28.5T160-360h240q17 0 28.5 11.5T440-320v160q0 17-11.5 28.5T400-120H160q-17 0-28.5-11.5T120-160Zm80-360h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"/></svg>
          <span>Scan And Upload</span>
        </a>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
        <i class="fa-solid fa-book"></i>
          <span>Resources</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="https://chat.placementguido.com/ser/sear.html">Study Materials</a></li>
            <li><a href="https://chat.placementguido.com/ser/sear.html">Cheat Sheet</a></li>
            <li><a href="https://chat.placementguido.com/ser/sear.html">Notes</a></li>
            <li><a href="https://chat.placementguido.com/ser/sear.html">Vedios</a></li>
            <li><a href="https://chat.placementguido.com/ser/sear.html">Modal QP</a></li>
          </div>
        </ul>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m221-313 142-142q12-12 28-11.5t28 12.5q11 12 11 28t-11 28L250-228q-12 12-28 12t-28-12l-86-86q-11-11-11-28t11-28q11-11 28-11t28 11l57 57Zm0-320 142-142q12-12 28-11.5t28 12.5q11 12 11 28t-11 28L250-548q-12 12-28 12t-28-12l-86-86q-11-11-11-28t11-28q11-11 28-11t28 11l57 57Zm339 353q-17 0-28.5-11.5T520-320q0-17 11.5-28.5T560-360h280q17 0 28.5 11.5T880-320q0 17-11.5 28.5T840-280H560Zm0-320q-17 0-28.5-11.5T520-640q0-17 11.5-28.5T560-680h280q17 0 28.5 11.5T880-640q0 17-11.5 28.5T840-600H560Z"/></svg>
          <span>Quiz</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="https://chat.placementguido.com/Quiz/quiz.html">Technical</a></li>
            <li><a href="https://chat.placementguido.com/Quiz/quiz.html">Non Technical</a></li>
          </div>
        </ul>
      </li>
      <li>
        <a href="https://chat.placementguido.com/room/rooms/login.php">
        <i class="fa-solid fa-video"></i>
          <span>Virtual Connect</span>
        </a>
      </li>
      <li>
        <a href="https://chat.placementguido.com/DigitalLibrary/index.html">
        <i class="fa-solid fa-book-open-reader"></i>
          <span>Digital Library</span>
        </a>
      </li>
      <li>
        <a href="https://chat.placementguido.com/Gemini/gemini/index.html">
        <i class="fa-solid fa-robot"></i>
          <span>AI</span>
        </a>
      </li>
    </ul>
     <?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
      echo"
        <div class='usersss' >
         $_SESSION[name]-<a href='logout.php' style='color: white';>LOGOUT</a>
         </div>
      ";
    }
    else
    {
      echo"
      <div class='usersss' style='margin-top:1rem;'>
     <?= $userinfo[full_name]?>-<a href='index.php' style='color: white';>LOGOUT</a>
   </div>
     ";
   }
  ?>
  </nav>
  <main>
    
    <header class="header__container">
      <div class="header__image">
        <img src="https://www.chat.placementguido.com/img/fr.svg" alt="header" />
      </div>
      <div class="header__content">
        <h2>Edu<span>Hub</span></h2>
        <h1>Single Platform For All Your <span>Learning</span> Needs.</h1>
        <p>
          Whether you're seeking to enhance your professional skills, explore
          new hobbies, or pursue academic interests, our comprehensive platform
          offers diverse courses and resources tailored to support your lifelong
          learning journey.
        </p>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
          
                <div class="wrapper">
                   <div class="button">
                      <div class="icon">
                         <i class="fab fa-facebook-f"></i>
                      </div>
                      <span>Facebook</span>
                   </div>
                   <div class="button">
                      <div class="icon">
                         <i class="fab fa-twitter"></i>
                      </div>
                      <span>Twitter</span>
                   </div>
                   <div class="button">
                      <div class="icon">
                         <i class="fab fa-instagram"></i>
                      </div>
                      <span>Instagram</span>
                   </div>
                   <div class="button">
                      <div class="icon">
                         <i class="fab fa-github"></i>
                      </div>
                      <span>Github</span>
                   </div>
                   <div class="button">
                      <div class="icon">
                         <i class="fab fa-whatsapp"></i>
                      </div>
                      <span>Whatsapp</span>
                   </div>
                </div>
        </div>
    </section>
        <form action="/">
          <div class="input__row">
            <div class="input__group">
              <span><i class="ri-search-line"></i></span>
              <input type="text" placeholder="Search for Course" />
            </div>
            <div class="input__group">
              <span><i class="ri-arrow-down-s-line"></i></span>
              <input type="text" placeholder="Categories" />
            </div>
          </div>
          <button type="submit">Search Now</button>
        </form>
      </div>
    </header>

    <div class="about-sec">
		<div class="about-img">
			<img src="https://www.chat.placementguido.com/img/at.svg">
		</div>
		<div class="about-intro">
			<h3>About Us<span style="color: #8800ff;"> !</h3>
			<p>we believe in making high-quality education accessible to everyone, everywhere. Whether you're a student, educator, or lifelong learner, we provide the resources you need to excel in your studies and achieve your academic goals. Our platform is designed to bridge the gap between students and effective study materials, offering a wide range of resources across various subjects and academic levels.</p>
		</div>
	</div>


  <section class="esp">
        <div class="explore__header">
          <h6 class="ser">EXPLORE OUR RESOURCES</h6>
          <div class="explore__nav">
            
          </div>
        </div>
        <div class="explore__grid">
          <div class="explore__card">
            <img src="https://www.chat.placementguido.com/img/notes.svg" >
            <h4>Lecture's Notes</h4>
            <p>
            Lecture notes are a vital tool for students and educators alike. They serve as a concise record of key concepts, ideas, and discussions presented during a lecture or class session. 
            </p>
            <a href="#" style="text-decoration: none;color:black;">ReadMore <i class="ri-arrow-right-line"></i></a>
          </div>
          <div class="explore__card">
          <img src="https://www.chat.placementguido.com/img/vi.svg" >
            <h4>Videous</h4>
            <p>
            Lecture videos have become a pivotal component of modern education, blending traditional teaching methods with digital technology. 
            </p>
            <a href="#" style="text-decoration: none;color:black;">ReadMore <i class="ri-arrow-right-line"></i></a>
          </div>
          <div class="explore__card">
          <img src="https://www.chat.placementguido.com/img/bo.svg" >
            <h4>Study Materials</h4>
            <p>
            Study materials are essential resources that support learning and comprehension across various subjects. 
            </p>
            <a href="#" style="text-decoration: none;color:black;">ReadMore <i class="ri-arrow-right-line"></i></a>
          </div>
          <div class="explore__card">
          <img src="https://www.chat.placementguido.com/img/qp.svg" >
            <h4>Question Papers</h4>
            <p>
            Question papers are essential assessment tools in educational settings, designed to evaluate students' understanding, knowledge, and critical thinking skills across various subjects. 
            </p>
            <a href="#" style="text-decoration: none;color:black;">ReadMore <i class="ri-arrow-right-line"></i></a>
          </div>
          <div class="explore__card">
          <img src="https://www.chat.placementguido.com/img/cs.svg" >
            <h4>Cheat Sheet</h4>
            <p>
            Cheat sheets are concise, condensed resources that summarize key information, concepts, and formulas in a format that is easy to reference. 
            </p>
            <a href="#" style="text-decoration: none;color:black;">ReadMore <i class="ri-arrow-right-line"></i></a>
          </div>
          
      
          <div class="explore__card">
          <img src="https://www.chat.placementguido.com/img/si.svg" >
            <h4>Question Bank</h4>
            <p>
            A question bank is a comprehensive repository of questions designed to support educational assessment and learning. It serves as a valuable resource for educators and students
            </p>
            <a href="#" style="text-decoration: none; color:black;">ReadMore <i class="ri-arrow-right-line"></i></a>
          </div>
        </div>
      </section>


      <section id="ba">
        <section class="github-section">
            <div class="profile-header">
                <img src="https://avatars.githubusercontent.com/u/9919?s=280&v=4" alt="GitHub Logo" class="profile-pic">
                <h1>EduHub</h1>
                <p>@EduHub</p>
                <a href="https://github.com/Pradeep-kumar079" target="_blank" class="github-link">Visit GitHub Profile</a>
            </div>
    
            <div class="repositories">
                <h2>Repositories</h2>
                <div class="repo-container" id="repo-container">
                    <!-- Repositories will be inserted here via JavaScript -->
                </div>
            </div>
        
        <script >
          
document.addEventListener('DOMContentLoaded', () => {
    const repositories = [
        {
            name: 'Repo 1',
            description: 'Lectures Notes',
            url: 'https://github.com/Pradeep-kumar079'
        },
        {
            name: 'Repo 2',
            description: 'Study Materials',
            url: 'https://github.com/Pradeep-kumar079'
        },
        {
            name: 'Repo 3',
            description: 'Cheat Sheet',
            url: 'https://github.com/Pradeep-kumar079'
        },
        {
            name: 'Repo 4',
            description: 'Question Papers',
            url: 'https://github.com/Pradeep-kumar079'
        }
        ,
        {
            name: 'Repo 5',
            description: 'Question Bank',
            url: 'https://github.com/Pradeep-kumar079'
        }
        ,
        {
            name: 'Repo 6',
            description: 'Videous',
            url: 'https://github.com/Pradeep-kumar079'
        }
    ];
    const repoContainer = document.getElementById('repo-container');

    repositories.forEach(repo => {
        const repoCard = document.createElement('div');
        repoCard.classList.add('repo-card');

        repoCard.innerHTML = `
            <h3>${repo.name}</h3>
            <p>${repo.description}</p>
            <a href="${repo.url}" target="_blank">View Repository</a>
        `;

        repoContainer.appendChild(repoCard);
    });
});

        </script>
        </section>
        </section>


          <div class="banner">
         <img src="https://www.chat.placementguido.com/img/lib.png" alt="Higher Education Trends Report Cover" class="report-cover">
         <div class="banner-content">
            <i> <h1>Explore More Desired Book Via Digital Library</h1>
             </i>
     <div class="read-now">
             <a href="https://chat.placementguido.com/DigitalLibrary/index.html" class="download-btn" style="color: red; font-size:25px;text-decoration: none;margin-left:20px;">Find Books
             <i class="fa-solid fa-book"></i><i class="ri-arrow-right-line"></i></a>
             </a>
             </div>
         </div>
     
         </div>
<section id="apn">
         <section class="courses">
        <div class="section-title">
            <h2>Explore Popular Courses</h2>
        </div>
        <div class="courses-container">
            <!-- Course 1 -->
            <div class="course-card">
                <img src="https://www.chat.placementguido.com/img/int.png" alt="Course 1 Image">
                <div class="course-content">
                    <span class="price">Intellipat</span>
                    <h3>Web Development</h3>
                    <p>6 Months</p>
                    <div class="rating">
                        <span>★★★★★</span>
                        <p>{5 Reviews}</p>
                    </div>
                    <button class="bu">Explore</button>
                </div>
            </div>




            






            <div class="course-card">
                <img src="https://www.chat.placementguido.com/img/gig.png" alt="Course 1 Image">
                <div class="course-content">
                    <span class="price">Geek for greeks</span>
                    <h3>DSA</h3>
                    <p>6 Months</p>
                    <div class="rating">
                        <span>★★★★★</span>
                        <p>{5 Reviews}</p><br>
                        
                    </div>
                    <button class="bu">Explore</button>
                </div>
            </div>

            <div class="course-card">
                <img src="https://www.chat.placementguido.com/img/cor.png" alt="Course 1 Image">
                <div class="course-content">
                    <span class="price">Coursera</span>
                    <h3>Java</h3>
                    <p>6 Months</p>
                    <div class="rating">
                        <span>★★★★★</span>
                        <p>{5 Reviews}</p>
                    </div>
                    <button class="bu">Explore</button>
                </div>
            </div>


            <div class="course-card">
                <img src="https://www.chat.placementguido.com/img/ap.jpeg" alt="Course 1 Image">
                <div class="course-content">
                    <span class="price">Apna College</span>
                    <h3>Web Development</h3>
                    <p>6 Months</p>
                    <div class="rating">
                        <span>★★★★★</span>
                        <p>{5 Reviews}</p>
                    </div>
                    <button class="bu">Explore</button>
                </div>
            </div>
            <!-- Course 2 -->
            <div class="course-card">
                <img src="https://www.chat.placementguido.com/img/ud.jpg" alt="Course 2 Image">
                <div class="course-content">
                    <span class="price">Udemy</span>
                    <h3>App Development</h3>
                    <p>6 Months</p>
                    <div class="rating">
                        <span>★★★★★</span>
                        <p>{5 Reviews}</p>
                    </div>
                    <button class="bu">Explore</button>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="course-card">
                <img src="https://www.chat.placementguido.com/img/ch.jpg" alt="Course 3 Image">
                <div class="course-content">
                    <span class="price">Code With Harry</span>
                    <h3>Web Development</h3>
                    <p>6 Months</p>
                    <div class="rating">
                        <span>★★★★★</span>
                        <p>{5 Reviews}</p>
                    </div>
                    <button class="bu">Explore</button>
                </div>
            </div>
        </div>
    </section>
    </section>

    <h1 class="qh" >Quiz Section</h1>
    <section id="qz">
      
     <div class="card-container">
      <div class="card">
          <h3>Technical Quiz</h3>
          <ul>
            <p style="color:black;">programming language is a set of instructions that allow a programmer to write computer programs. Programming languages are used to create software for many purposes, including:
            </p>
              <li>Java Language</li>
              <li>Python Language</li>
              <li>C Language</li>
              <li>C++ Language</li>
              <li>JavaScript Language</li>
              <li>PHP Language</li>
              <li>C# Language</li>
          </ul>
          <a href="#" class="btn3">Take a Test</a>
      </div>
  
      <div class="card">
          <h3>Non Technical Quiz</h3>
          <ul>
          <p style="color:black;">Non-technical courses can include general education courses, basic courses, and other related courses. Some examples of non-technical courses include:</p>
              <li>Database Management system</li>
              <li>Operating System</li>
              <li>Computer Network</li>
              <li>Computer Fundementals</li>
              <li>Data Structure</li>
              <li>Chemical</li>
              <li>Project Management</li>
              <li>MicroController</li>

          </ul>
          <a href="#" class="btn3">Take a Test</a>
      </div>
  </div>
</section>




<section id="chr">
    <div class="chat-container">
        <!-- Chat Header -->
        <div class="chat-header">
            <h2>Virtual Room</h2>
        </div>

        <!-- Chat Messages Section -->
        <div class="chat-messages">
            <img src="https://www.chat.placementguido.com/img/rmm.svg">
            <div class="message received">
                <p>Chat Room</p>
                <span class="time">10:00 AM</span>
            </div>
            <div class="message sent">
                <p>Video Call</p>
                <span class="time">10:02 AM</span>
            </div>
        </div>

        <!-- Chat Input Section -->
        <div class="chat-input">
            <input type="text" placeholder="To Enter Click on Button" />
            <button><a href="https://chat.placementguido.com/room/rooms/login.php">Connect</a></button>
        </div>
    </div>
</section>

<section class="contribute-section">
        
        <div class="content">
            <div class="imc">
                <img src="https://www.chat.placementguido.com/img/fr.svg">
            </div>
            <div>
            <h1>Contribute &  Win</h1>
            <p>By Sharing Documents you can get Rewards .Each contribution counts as an entry into our monthly giveaway! Win awesome prizes while making an impact.</p>
            <a href="#" class="cta-button">Start Contributing</a>
        </div>
    </div>
    </section>



    
  
  <section id="catbo" >

<footer>
   <div class="catcont">
       <div class="catrow">
             <div class="catcol" id="company">
             <a href="#" class="nav__logo" style="color:white;">
         <img src="img/logo.jpg" style="width: 55px;height: 55px;border-radius:50px"><br>EduHub
     </a>
                 <p>
                 Whether you're seeking to enhance your professional skills, explore new hobbies, or pursue academic interests, our comprehensive platform offers diverse courses and resources tailored to support your lifelong learning journey.
                 </p>
                 <div class="catsocial">
                   <a href="#"><i class="fab fa-facebook"></i></a>
                   <a href="#"><i class="fab fa-instagram"></i></a>
                   <a href="#"><i class="fab fa-youtube"></i></a>
                   <a href="#"><i class="fab fa-twitter"></i></a>
                   <a href="#"><i class="fab fa-linkedin"></i></a>
                 </div>
             </div>


             <div class="catcol" id="services">
                <h3>Resources</h3>
                <div class="catlinks">
                   <a href="https://chat.placementguido.com/ser/sear.html">Lecture's Notes</a>
                   <a href="https://chat.placementguido.com/ser/sear.html">Study Materials</a>
                   <a href="https://chat.placementguido.com/ser/sear.html">cheat Sheet</a>
                   <a href="https://chat.placementguido.com/ser/sear.html">Videos</a>
                   <a href="https://chat.placementguido.com/ser/sear.html">Quation papers</a>
                </div>
             </div>
             <div class="catcol" id="services">
                <h3>Usefull links</h3>
                <div class="catlinks">
                   <a href="https://chat.placementguido.com/room/rooms/index.php">Virtual Room</a>
                   <a href="https://chat.placementguido.com/Gemini/gemini/index.html">AI</a>
                   <a href="https://chat.placementguido.com/Quiz/quiz.html">Quiz</a>
                   <a href="https://chat.placementguido.com/DigitalLibrary/index.html">Digital Library</a>
                   <a href="https://chat.placementguido.com/fileuploaddownload/index.php">Contribute & Win</a>
                </div>
             </div>

             
             <div class="catcol" id="useful-links">
                <h3>Quick Links</h3>
                <div class="catlinks">
                <a href="#">Home</a>
                   <a href="#">About Us</a>
                  
                   <a href="#"> OUR RESOURCES</a>
                   <a href="#"> Popular Courses</a>
                   <a href="#">Contribute & Win</a>
                </div>
             </div>
             

       </div>
                  

   </div>
   
                  
</footer>
</section>
  </main>
</body>
</html>