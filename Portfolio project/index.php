<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hugo Winkel portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/78abc389d1.js" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./js/AOS.js"></script>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container flex-lg-column">
        <a class="navbar-brand mx-lg-auto mb-lg-4" href="#home">
            <span class="h3 fw-bold d-block d-lg-none">Hugo Winkel</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                <img src="./images/hugo.png" class="foto-nav d-lg-block rounded-circle" alt="Hugo">
            
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#certificates">Certificates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- //NAVBAR -->


    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">

        <!-- HOME -->
        <section id="home" class="full-height px-lg-5">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="display-4 fw-bold" data-aos="fade-up">MY NAME IS <span class="text-brand">HUGO 
                            WINKEL</span></h1>
                        <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">I am a student in the field of Software Development, with a focus on education. 
                            My primary expertise lies in the creation of frontend applications. 
                            However, I aspire to become a Software Developer teacher after gaining a lot of experience in the future. 
                            In addition, I am currently working on this portfolio website to showcase and share my work and skills.
                            If you're interested in my resume, you can <a href="#contact" class="here">contact</a> me and explain why. If it's reasonable, I'll share the information needed
                            to log in on my website.</p>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <a href="#projects" class="btn btn-brand me-3">Explore My Work</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- //HOME -->
         <!-- ABOUT -->
<section id="about" class="full-height px-lg-5">
    <div class="container">
        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <h6 class="text-brand">ABOUT</h6>
                <h1>Who am I?</h1>
            </div>
        </div>

        <section data-aos="fade-up">
            <div class="accordion accordion-flush accordion-personal" id="accordionCertificates">
                <!-- Start Accordion -->
                <div class="accordion-item mb-3">
                    <!-- Personal Item -->
                    <h2 class="accordion-header" id="personal-item">
                        <button class="accordion-button collapsed bg-dark text-light border border-white" style="color: #fff;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-personal-item" aria-expanded="false" aria-controls="collapse-personal-item">
                            Personal
                        </button>
                    </h2>
                    <div id="collapse-personal-item" class="accordion-collapse collapse" aria-labelledby="personal-item" data-bs-parent="#accordionCertificates">
                        <div class="accordion-body bg-dark text-light border border-white">
                            <div class="row">
                                <div class="col">
                                    <h3>Personal</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <p data-aos="fade-up" data-aos-delay="600">My name is Hugo Winkel, a 17-year-old second-year student in Software Development at ROC van Twente. 
                                        I am proficient in collaboration, stress-resistant, creative, and empathetic.
                                         I thoroughly enjoy spending time with friends, playing games, and have a great fondness for listening to music.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <!-- Music Item -->
                    <h2 class="accordion-header" id="music-item">
                        <button class="accordion-button collapsed bg-dark text-light border border-white" style="color: #fff;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-music-item" aria-expanded="false" aria-controls="collapse-music-item">
                            Music Taste
                        </button>
                    </h2>
                    <div id="collapse-music-item" class="accordion-collapse collapse" aria-labelledby="music-item" data-bs-parent="#accordionCertificates">
                        <div class="accordion-body bg-dark text-light border border-white">
                            <div class="row">
                                <div class="col">
                                    <h3>Music Taste</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                <p>I have a diverse taste in music that spans across various genres, reflecting the vibrant spectrum of sounds that resonate with me. At the core of my preferences lies a deep appreciation for pop music, where infectious melodies and catchy rhythms captivate my senses. 
                                    I find myself drawn to the avant-garde world of art pop, where unconventional and experimental elements add an exciting twist to the familiar pop landscape.
                                    Rap has a special place in my heart, as the rhythmic poetry and storytelling in this genre speak to me on a profound level. 
                                    The raw and authentic expression found in hip hop resonates with my love for lyrical prowess and social commentary.
                                    In addition to the mainstream, I also have a soft spot for alternative pop rock. 
                                    The fusion of alternative elements with the accessibility of pop creates a dynamic and engaging musical experience. 
                                    This genre allows me to explore different sonic textures while still enjoying the familiarity of pop sensibilities.
                                    My music journey is a tapestry woven with the threads of pop, art pop, rap,
                                    alternative pop rock, and hip hop, creating a rich and eclectic musical landscape that mirrors the diversity of my tastes.
                                    if interested, you can check out my spotify playlist right <a href="https://open.spotify.com/playlist/4Fm3Vx1lm44FacVeXId8KT?si=181c077f0bb04c69"target="_blank" class="here">here.</a>
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <!-- Professional Item -->
                    <h2 class="accordion-header" id="professional-item">
                        <button class="accordion-button collapsed bg-dark text-light border border-white" style="color: #fff;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-professional-item" aria-expanded="false" aria-controls="collapse-professional-item">
                            Professional
                        </button>
                    </h2>
                    <div id="collapse-professional-item" class="accordion-collapse collapse" aria-labelledby="professional-item" data-bs-parent="#accordionCertificates">
                        <div class="accordion-body bg-dark text-light border border-white">
                            <div class="row">
                                <div class="col">
                                    <h3>Professional</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <p>My preference lies in front-end development, which I find very enjoyable. After obtaining my MBO diploma, I aim to work immediately with a web development company. Additionally, I aspire to become a teacher in MBO for the Software Developer program. Exploring back-end development also intrigues me, as I find it equally fascinating.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Accordion -->
            </div>
        </section>
    </div>

<!-- ABOUT -->

        
        <div class="container">
        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <h1>Personality</h1>
                <h4>My personality is <span data-toggle="tooltip" data-placement="top" title="Logicians are innovative inventors with an insatiable thirst for knowledge."><u>Logician</u></span></h4>
            </div>
        </div>
        
        <div class="row gy-4">

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">Introvert</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 53%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">53%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">Intuitive</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 52%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">52%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">Rational</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 64%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">64%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">Searching</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 51%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">51%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">Turbulent</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 76%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">76%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">Extravert</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 47%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">47%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">Realistic</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">65%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">Emotional</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 36%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">36%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">Planning</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 49%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">49%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">Assertive</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 24%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">24%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
        </section>
</section>

    <!-- //ABOUT -->



<!-- PROJECTS -->
<section id="projects" class="full-height px-lg-5">
    <div class="container">
        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <h6 class="text-brand">Projects</h6>
                <h1>My Recent Projects</h1>
            </div>
        </div>

        <div class="row gy-4">

            <div class="col-md-6" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                        <img class="rounded-4" src="./images/projects/wolfram.png" alt="Wolfram Alpha">
                    </div>
                    <div class="card-custom-content p-4">
                        <h4></h4>
                        <p></p>
                        <a href="https://www.wolframalpha.com/" class="link-custom">Recreation of wolfram Alpha Website</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                        <img class="rounded-4" src="./images/projects/ownweb.png" alt="Website for a group project">
                    </div>
                    <div class="card-custom-content p-4">
                        <h4></h4>
                        <p></p>
                        <a class="link-custom">Flight ticket website (group project)</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                        <img class="rounded-4" src="./images/projects/portfolio.png" alt="this website">
                    </div>
                    <div class="card-custom-content p-4">
                        <h4></h4>
                        <p></p>
                        <a href="#" class="link-custom">This website</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                        <img class="rounded-4" src="./images/projects/first_portfolio.png" alt="my first portfolio website">
                    </div>
                    <div class="card-custom-content p-4">
                        <h4></h4>
                        <p></p>
                        <a class="link-custom">My first portfolio website</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- PROJECTS -->

<!-- CERTIFICATES -->
        <section id="certificates" class="full-height px-lg-5">
    <div class="container">
        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <h6 class="text-brand">certificates</h6>
                <h1>My certificates</h1>
            </div>
        </div>

        <div class="row gy-4">

            <div class="col-md-6" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                        <img class="rounded-4" src="./images/certificates/bootstrap.png" alt="Bootstrap certificate">
                    </div>
                    <div class="card-custom-content p-4">
                        <h4></h4>
                        <p></p>
                        <a class="link-custom">Bootstrap certificate</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                        <img class="rounded-4" src="./images/certificates/htmlpro.png" alt="HTML pro certificate">
                    </div>
                    <div class="card-custom-content p-4">
                        <h4></h4>
                        <p></p>
                        <a class="link-custom">HTML certificate</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                        <img class="rounded-4" src="./images/certificates/csspro.png" alt="css pro certificate">
                    </div>
                    <div class="card-custom-content p-4">
                        <h4></h4>
                        <p></p>
                        <a class="link-custom">css pro certificate</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                        <img class="rounded-4" src="./images/certificates/js.png" alt="JavaScript certificate">
                    </div>
                    <div class="card-custom-content p-4">
                        <h4></h4>
                        <p></p>
                        <a class="link-custom">JavaScript certificate</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- CERTIFICATES -->

      
<!-- SKILLS -->
<section id="skills" class="full-height px-lg-5">
    <div class="container">

        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <h6 class="text-brand">Skills</h6>
                <h1>My Skills</h1>
                <h3>These percentages represent the knowledge I have acquired thus far in my education. </h3>
            </div>
        </div>
        
        <div class="row gy-4">

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">HTML</p>
                        <h5 class="mb-4">Progress</h5>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">CSS</p>
                        <h5 class="mb-4">Progress</h5>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">JavaScript</p>
                        <h5 class="mb-4">Progress</h5>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">GIT</p>
                        <h5 class="mb-4">Progress</h5>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">Bootstrap</p>
                        <h5 class="mb-4">Progress</h5>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">PHP</p>
                        <h5 class="mb-4">Progress</h5>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">SQL</p>
                        <h5 class="mb-4">Progress</h5>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">65%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">C#</p>
                        <h5 class="mb-4">Progress</h5>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2">JSON</p>
                        <h5 class="mb-4">Progress</h5>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- //SKILLS -->



<!-- CONTACT -->
<section id="contact" class="full-height px-lg-5" data-aos="fade-up">

<div class="container">
    <div class="row pb-4" data-aos="fade-up">
        <div class="col-lg-8">
            <h6 class="text-brand">Contact</h6>
            <h1>Contact me</h1>
            <p>If you have any questions, please contact me right here!</p>
        </div>
   

    <div class="row contact-content-con" data-aos="fade-up">
        <div class="col-lg-4 left-contact">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Location</span>
                    </div>
                    <p>Hengelo</p>
                </div>
                <div class="contact-item">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                        <span>Email</span>
                    </div>
                    <p>
                        <span>hugowinkel96@gmail.com</span>
                    </p>
                </div>
                <div class="contact-item">
                    <div class="icon">
                        <i class="fas fa-user-graduate"></i>
                        <span>School phone number</span>
                    </div>
                    <p>
                        <a class="link-custom">Call: 088 - 178 48 88</a>
                    </p>
                </div>
                <div class="contact-item">
                    <div class="icon">
                        <i class="fas fa-globe-africa"></i>
                        <span>Languages</span>
                    </div>
                    <p>
                        <span>English, Dutch</span>
                    </p>
                </div>
            </div>
        </div> 
  
        <div class="col-lg-8 right-contact" data-aos="fade-up">
            <form action="https://formsubmit.co/hugowinkel96@gmail.com" class="contact-form" method="POST">
                <div class="input-control">
                    <input type="text" name="naam" required placeholder="YOUR NAME">
                    <input type="email" name="email" required placeholder="YOUR EMAIL">
                </div>
                <div class="input-control">
                    <input type="text" name="text" required placeholder="ENTER SUBJECT">
                </div>
                <div class="input-control">
                    <textarea name="bericht" id="" cols="15" rows="8" required
                        placeholder="Message Here..."></textarea>
                </div>
                <div class="submit-btn">
                    <button type="submit" class="btn btn-brand me-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

</section>
<!-- //CONTACT -->


<!-- FOOTER -->
<section id="media">
    <footer class="py-5 px-lg-5">
        <div class="container">
            <div class="row gy-4 justify-content-between">
                <div class="col-auto">
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/hugo-winkel-8b4b45251/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://github.com/HugoWinkel" target="_blank"><i class="fa-brands fa-github"></i></a>
                        <a href="https://open.spotify.com/playlist/4Fm3Vx1lm44FacVeXId8KT?si=181c077f0bb04c69"target="_blank"><i class="fa-brands fa-spotify"></i></a>
                    </div>
                </div>
                <div class="col-auto">
                    <p id="currentDate"></p>
                </div>
            </div>
        </div>
    </footer>
</section>
<script>
    // JavaScript om de huidige datum in te vullen
    document.getElementById("currentDate").innerHTML = new Date().toLocaleDateString();
</script>

<!-- //FOOTER -->


    </div>
    <!-- //CONTENT WRAPPER -->

</body>

</html>