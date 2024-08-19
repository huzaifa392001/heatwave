<?php include "../includes/header.php" ?>
<?php include "../includes/menu.php" ?>
    <main data-barba="container" data-barba-namespace="join">
        <style>
            .pageWrapper {
                position: unset;
                transform: none;
            }
        </style>
        <div class="pageWrapper join active page">

            <section class="mainSec">
                <figure class="bgImg">
                    <img src="/assets/images/joinBg.jpg" alt="">
                </figure>
                <div class="content">
                    <h1>
                        “THIS IS MY FAVORITE GYM, <br> IT REALLY FEELS MORE LIKE A FAMILY"
                    </h1>
                </div>
                <img src="/assets/images/joinBottom.png" alt="" class="bottomImg">
                <a href="/" class="badgeBtn">
                    <span>
                        Back to home
                    </span>
                </a>
            </section>

            <section class="joinNowSec">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="secHeading">
                                claim your free session on today
                            </h2>
                        </div>
                        <div class="col-12">
                            <form action="">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="inputCont">
                                                <input type="text" placeholder="Enter Your Name" name="fullName">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="inputCont">
                                                <input type="email" placeholder="Enter Your Email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="inputCont">
                                                <input type="tel" placeholder="Enter Your Phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="inputCont">
                                                <input type="text" placeholder="Enter Your Subject" name="subject">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="inputCont">
                                                <textarea name="msg" id="" placeholder="Enter Message"
                                                          rows="10"></textarea>
                                            </div>
                                            <button class="submitBtn">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="logo">
                                    <img src="/assets/images/logo.png" alt="">
                                </div>
                                <ul class="socialList">
                                    <li>
                                        <a href="">
                                            <svg viewBox="0 0 11 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 11.5H9.5L10.5 7.5H7V5.5C7 4.47 7 3.5 9 3.5H10.5V0.14C10.174 0.0970001 8.943 0 7.643 0C4.928 0 3 1.657 3 4.7V7.5H0V11.5H3V20H7V11.5Z"
                                                      fill="#FD5806"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <svg viewBox="0 0 21 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.3 0H14.7C17.9 0 20.5 2.6 20.5 5.8V14.2C20.5 15.7383 19.8889 17.2135 18.8012 18.3012C17.7135 19.3889 16.2383 20 14.7 20H6.3C3.1 20 0.5 17.4 0.5 14.2V5.8C0.5 4.26174 1.11107 2.78649 2.19878 1.69878C3.28649 0.61107 4.76174 0 6.3 0ZM6.1 2C5.14522 2 4.22955 2.37928 3.55442 3.05442C2.87928 3.72955 2.5 4.64522 2.5 5.6V14.4C2.5 16.39 4.11 18 6.1 18H14.9C15.8548 18 16.7705 17.6207 17.4456 16.9456C18.1207 16.2705 18.5 15.3548 18.5 14.4V5.6C18.5 3.61 16.89 2 14.9 2H6.1ZM15.75 3.5C16.0815 3.5 16.3995 3.6317 16.6339 3.86612C16.8683 4.10054 17 4.41848 17 4.75C17 5.08152 16.8683 5.39946 16.6339 5.63388C16.3995 5.8683 16.0815 6 15.75 6C15.4185 6 15.1005 5.8683 14.8661 5.63388C14.6317 5.39946 14.5 5.08152 14.5 4.75C14.5 4.41848 14.6317 4.10054 14.8661 3.86612C15.1005 3.6317 15.4185 3.5 15.75 3.5ZM10.5 5C11.8261 5 13.0979 5.52678 14.0355 6.46447C14.9732 7.40215 15.5 8.67392 15.5 10C15.5 11.3261 14.9732 12.5979 14.0355 13.5355C13.0979 14.4732 11.8261 15 10.5 15C9.17392 15 7.90215 14.4732 6.96447 13.5355C6.02678 12.5979 5.5 11.3261 5.5 10C5.5 8.67392 6.02678 7.40215 6.96447 6.46447C7.90215 5.52678 9.17392 5 10.5 5ZM10.5 7C9.70435 7 8.94129 7.31607 8.37868 7.87868C7.81607 8.44129 7.5 9.20435 7.5 10C7.5 10.7956 7.81607 11.5587 8.37868 12.1213C8.94129 12.6839 9.70435 13 10.5 13C11.2956 13 12.0587 12.6839 12.6213 12.1213C13.1839 11.5587 13.5 10.7956 13.5 10C13.5 9.20435 13.1839 8.44129 12.6213 7.87868C12.0587 7.31607 11.2956 7 10.5 7Z"
                                                      fill="#FD5806"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <svg viewBox="0 0 17 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.1939 3.13333C12.4965 2.26614 12.1121 1.15267 12.1122 0H8.95918V13.7778C8.93537 14.5235 8.64645 15.2301 8.15337 15.7483C7.6603 16.2666 7.00163 16.556 6.31633 16.5556C4.86735 16.5556 3.66327 15.2667 3.66327 13.6667C3.66327 11.7556 5.35714 10.3222 7.10204 10.9111V7.4C3.58163 6.88889 0.5 9.86667 0.5 13.6667C0.5 17.3667 3.31633 20 6.30612 20C9.5102 20 12.1122 17.1667 12.1122 13.6667V6.67778C13.3908 7.67761 14.9259 8.21405 16.5 8.21111V4.77778C16.5 4.77778 14.5816 4.87778 13.1939 3.13333Z"
                                                      fill="#FD5806"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <h3>Contact</h3>
                                <ul class="list">
                                    <li>
                                        <a href="">
                                            <i class="fas fa-map-pin"></i>
                                            1324 N Shepherd Dr Ste 240 Houston Tx 77008
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:+12816546324">
                                            <i class="fas fa-phone-alt"></i>
                                            +1 (281) 654-6324
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <h3>Timing</h3>
                                <ul>
                                    <li>
                                        <span>Monday:</span>
                                        05:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <span>Tuesday:</span>
                                        05:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <span>Wednesday:</span>
                                        05:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <span>Thursday:</span>
                                        05:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <span>Friday:</span>
                                        05:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <span>Saturday:</span>
                                        05:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <span>Sunday:</span>
                                        05:00 AM - 10:00 PM
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </section>

        </div>
    </main>
<?php include "../includes/footer.php" ?>