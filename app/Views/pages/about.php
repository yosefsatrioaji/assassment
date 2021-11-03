<?= $this->extend("layout/template") ?>

<?= $this->section("content") ?>
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        </ul>
    </nav>

</header>
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1>Yosef Satrio Aji</h1>
        <p>I'm <span class="typed" data-typed-items="Developer, Freelancer, Student"></span></p>
        <div class="social-links">
            <a href="https://github.com/yosefsatrioaji" class="github"><i class="bx bxl-github"></i></a>
            <a href="https://www.instagram.com/yosefsatrio26/" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="mailto:yosefsatrioa@gmail.com" class="envelope"><i class='bx bxs-envelope' ></i></i></a>
            <a href="https://www.linkedin.com/in/yosefsatrioaji/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</section>

<main id="main">
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
                <p>I am Yosef Satrio Aji, a third-year student of computer engineering at Diponegoro University. Have skilled in the field of web development especially on the backend side. I also have an interest in cloud platforms like AWS, Google Cloud, etc.</p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img src="/img/profile-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <h3>Student &amp; Freelance.</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>26 May 2001</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.yosefsa.my.id</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>0877 86422 087</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bekasi, Indonesia</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Undergraduate</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>yosefsatrioa@gmail.com</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="skills" class="skills section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Skills</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row skills-content">

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CSS <i class="val">70%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">65%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">PHP <i class="val">60%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Laravel <i class="val">50%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Photoshop <i class="val">50%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <section id="resume" class="resume">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Resume</h2>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>Yosef Satrio Aji</h4>
                        <p>Newbie backend web developer, Energic, Fast learner, I like watching action movies</p>
                        <ul>
                            <li>Pondok Melati,Bekasi, ID</li>
                            <li>0877 86422 087</li>
                            <li>yosefsatrioa@gmail.com</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                        <h4>Computer Engineering</h4>
                        <h5>2019 - Present</h5>
                        <p><em>Universitas Diponegoro, Semarang, ID</em></p>
                    </div>
                    <div class="resume-item">
                        <h4>Natural Science</h4>
                        <h5>2016 - 2019</h5>
                        <p><em>SMA Negeri 48 Jakarta, ID</em></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Experience</h3>
                    <div class="resume-item">
                        <h4>Software Developer</h4>
                        <h5>2019 - Present</h5>
                        <p><em>Okanemo, Jakarta, ID </em></p>
                    </div>
                    <div class="resume-item">
                        <h4>Head of Research Division</h4>
                        <h5>2020 - Present</h5>
                        <p><em>Himpunan Mahasiswa Teknik Komputer</em></p>
                    </div>
                    <div class="resume-item">
                        <h4>Reporter</h4>
                        <h5>2019 - Present</h5>
                        <p><em>Channel Campus Undip</em></p>
                    </div>
                    <div class="resume-item">
                        <h4>Member</h4>
                        <h5>2020 - Present</h5>
                        <p><em>Computer Engineering Research Club</em></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?= $this->endSection() ?>
