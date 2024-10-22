<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandingPgae</title>
</head>
<body>
<header>
        <nav class="navbar section-content">
            <a href="#" class="nav-logo">
                <h2 class="logo-text">☕ Coffee</h2>
            </a>
            <ul class="nav-menu">
                <button id="menu-close-button" class="fas fa-times"></button>

                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#About" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#menu" class="nav-link">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials" class="nav-link">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>

            <button id="menu-open-button" class="fas fa-bars"></button>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">Best Coffee</h2>
                    <h3 class="subtitle">Mulai harimu dengan kopi yang special!</h3>
                    <p class="description">Selamat datang di Coffe kita,
                        disini kita memberi banyak pilihan menu loh</p>

                    <div class="buttons">
                        <a href="#" class="button order-now">Order Now</a>
                        <a href="#" class="button contact-us">Contact Us</a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src="{{ asset('asset/coffee-hero-section.png') }}" alt="Hero" alt="hero-image">
                </div>
            </div>
        </section>

        <section class="abouts-section" id="About">
            <div class="section-content">
                <div class="about-image-wrapper">
                    <img src="{{ asset('asset/about-image.jpg') }}" alt="about" alt="about-image">
                </div>
                <div class="about-details">
                    <h2 class="section-title">About us</h2>
                    <p class="text">Kami telah melayani selama 5 tahun belakangan ini dan kami akan selalu,
                        memberikan cita rasa coffe yang nikmat untuk di minum serta pelayanan yang akan selalu,
                        membantu anda. Coffe kami juga merupakan dari biji coffee pilihan yang di petik langsung
                        di tempatnya, semoga eksperience kalian menyenangkan terimakasih
                    </p>
                    <div class="social-link-list">
                        <a href="#" class="social-link">
                            <i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="social-link">
                            <i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social-link">
                            <i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu-section" id="menu">
            <h2 class="section-title">Our Menu</h2>
            <div class="section content">
                <ul class="menu-list">
                    <li class="menu-item">
                        <img src="{{ asset('asset/hot-beverages.png') }}" alt="Hot beverages" alt="menu-image">
                         <h3 class="name">Kopi panas</h3>
                         <p class="Text">Berbagai macam kopi panas yang mengepul membuat Anda segar dan ringan.
                        </p>
                    </li>
                    <li class="menu-item">
                    <img src="{{ asset('asset/cold-beverages.png') }}" alt="Cold beverages" alt="menu-image">
                         <h3 class="name">Minuman Dingin</h3>
                         <p class="Text">Kopi dingin yang creamy dan berbusa membuat Anda sejuk.</p>
                    </li>
                    <li class="menu-item">
                    <img src="{{ asset('asset/refreshment.png') }}" alt="refreshment" alt="menu-image">
                         <h3 class="name">Minuman penyegar</h3>
                         <p class="Text">Buah-buahan dan minuman dingin yang menyegarkan membuat terasa segar.
                        </p>
                    </li>
                    <li class="menu-item">
                    <img src="{{ asset('asset/special-combo.png') }}" alt="Special combo" alt="menu-image">
                         <h3 class="name">Special Combo</h3>
                         <p class="Text">Kombinasi makan dan minuman favorit Anda.
                        </p>
                    </li>
                    <li class="menu-item">
                    <img src="{{ asset('asset/desserts.png') }}" alt="Desserts" alt="menu-image">
                         <h3 class="name">Desserts</h3>
                         <p class="Text">Puaskan piring Anda dan bawakan Anda suguhan kuliner
                        </p>
                    </li>
                    <li class="menu-item">
                    <img src="{{ asset('asset/burger-frenchfries.png') }}" alt="Burger & Frenchfries" alt="menu-image">
                         <h3 class="name">Burger & Frenchfries</h3>
                         <p class="Text">Gigitan cepat untuk memuaskan rasa lapar ukuran kecil Anda</p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="testimonials-section" id="testimonials">
            <h2 class="section-title">Testimonials</h2>
            <div class="section-content">
                <div class="slider-container swiper">
                    <div class="slider-wrapper">
                        <ul class="testimonials-list swiper-wrapper">
                          <li class="testimonial swiper-slide">
                          <img src="{{ asset('asset/jiwo1.jpg') }}" alt="user" alt="user-image">
                            <h3 class="name">Jiwo(1)</h3>
                            <i class="feedback">"Gokilll enak bangett menu menu disini
                            ga nyesel si aku"</i>
                        </li>
                        <li class="testimonial swiper-slide">
                        <img src="{{ asset('asset/jiwo2.jpg') }}" alt="user" alt="user-image">
                            <h3 class="name">Jiwo(2)</h3>
                            <i class="feedback">"Desserts disini si ga main main
                            nomor satu pokoknya deh!"</i>
                        </li>
                        <li class="testimonial swiper-slide">
                        <img src="{{ asset('asset/jiwo3.jpg') }}" alt="user" alt="user-image">
                            <h3 class="name">Jiwo(3)</h3>
                            <i class="feedback">"Kopi nya ngetop bangettt
                            pelayanan nya juga baguss top!"</i>
                        </li>
                        <li class="testimonial swiper-slide">
                            <img src="images/jiwo4.jpg" alt="User" class="user-image">
                            <h3 class="name">Jiwo(4)</h3>
                            <i class="feedback">"Buah buahnya si segerr bangett
                            Terjamin deh aku recomended banget"</i>
                        </li>
                        <li class="testimonial swiper-slide">
                            <img src="images/jiwo5.jpg" alt="User" class="user-image">
                            <h3 class="name">Jiwo(5)</h3>
                            <i class="feedback">"Burgernya cruncyh sii
                            apalagi yang cheese burger beuhhh"</i>
                        </li>
                        </ul>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-slide-button-swiper-button-prev"></div>
                        <div class="swiper-slide-button-swiper-button-next"></div>                      
                    </div>
                </div>
            </div>
       
        </section>

        <section class="gallery-section" id="gallery">
            <h2 class="section-title">Gallery</h2>
            <div class="section-conten">
                <ul class="gallery-list">
                     <li class="gallery-item">
                        <img src="images/gallery-1.jpg" alt="Gallery" 
                        class="gallery-image">
                     </li>
                     <li class="gallery-item">
                        <img src="images/gallery-2.jpg" alt="Gallery" 
                        class="gallery-image">
                     </li>
                     <li class="gallery-item">
                        <img src="images/gallery-3.jpg" alt="Gallery" 
                        class="gallery-image">
                     </li>
                     <li class="gallery-item">
                        <img src="images/gallery-4.jpg" alt="Gallery" 
                        class="gallery-image">
                     </li>
                     <li class="gallery-item">
                        <img src="images/gallery-5.jpg" alt="Gallery" 
                        class="gallery-image">
                     </li>
                     <li class="gallery-item">
                        <img src="images/gallery-6.jpg" alt="Gallery" 
                        class="gallery-image">
                     </li>
                </ul>
            </div>
        </section>

        <section class="contact-section" id="contact">
            <h2 class="section-title">Contact Us</h2>
            <div class="section-content">
                <ul class="contact-info-list">
                    <li class="contact-info">
                        <i class="fa-regular fa-location-crosshairs"></i>
                        <p>123 Jalan tol terbang skibidi</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-envelope"></i>
                        <p>info@jiwowok.com</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-phone"></i>
                        <p>(123) - 456 - 78909</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular faclock">
                        <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Sunday: closed</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-globe"></i>
                        <p>www.jiwowok.com</p>
                    </li>
                </ul>
                <form action="#" class="contact-form">
                    <input type="text" placeholder="Your name" class="form-input" 
                    required>
                    <input type="email" placeholder="Your email" class="form-input" 
                    required>
                    <textarea placeholder="Your messages" class="form-input" 
                    required></textarea>
                    <button class="submit-button">Submit</button>
                </form>
            </div>
        </section>
            </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>