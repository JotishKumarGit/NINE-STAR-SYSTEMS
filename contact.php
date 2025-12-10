<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NINE STAR SYSTEMS</title>
    <!-- bootstrap icnos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .product-img {
            height: 250px;
            object-fit: cover;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s ease;
        }

        footer a:hover {
            color: #0dcaf0 !important;
            /* Bootstrap info color */
            transition: 0.3s ease;
        }
    </style>

    <style>
        .collection-img {
            width: 100%;
            height: 250px;
            /* fixed height */
            object-fit: cover;
            border-radius: 8px;
        }
    </style>

    <style>
        .contact-section-dark {
            background: #0c0f14;
        }

        .contact-glass-box {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(0, 255, 100, 0.2);
            backdrop-filter: blur(10px);
            transition: 0.3s ease;
        }

        .contact-glass-box:hover {
            border-color: rgba(0, 255, 100, 0.4);
            box-shadow: 0px 0px 20px rgba(0, 255, 100, 0.2);
        }

        .neon-input {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(0, 255, 100, 0.2);
            color: #fff;
            padding: 12px 15px;
            border-radius: 8px;
            transition: 0.3s ease;
        }

        .neon-input::placeholder {
            color: #bbb;
        }

        .neon-input:focus {
            background: rgba(255, 255, 255, 0.12);
            border-color: #0f0;
            box-shadow: 0 0 8px rgba(0, 255, 100, 0.5);
            color: #fff;
        }
    </style>

</head>

<body>

    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section">
        <div class="breadcrumb-content">
            <h2>Contact Us</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- contact us  -->
    <section class="contact-section-dark py-5" id="contact">
        <div class="container">

            <!-- Title -->
            <div class="text-center mb-5">
                <h2 class="mb-3 text-white" data-aos="fade-up">Contact Us</h2>
                <p class="text-white-50" data-aos="fade-up" data-aos-delay="100">
                    Have a question or business inquiry? We’re always happy to assist you.
                </p>
            </div>

            <div class="row g-5 align-items-center">

                <!-- Map -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="rounded-4 overflow-hidden shadow-lg map-wrapper border border-success border-opacity-50">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58665.50568677931!2d72.60209906976766!3d23.22145836203851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sB-62%20%2C%20G.I.D.C%20ELECTRONICES%20ESTATE%20%2CNEAR%20ARMY%20STORE%2CGandhinagar%2CGUJRAT!5e0!3m2!1sen!2sin!4v1765358744315!5m2!1sen!2sin"
                            width="100%" height="420" style="border:0;" loading="lazy" allowfullscreen
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-glass-box p-4 p-md-5 shadow-lg rounded-4">

                        <h4 class="mb-4 text-center text-white">We’d love to hear from you</h4>

                        <form id="contactForm" onsubmit="return sendToWhatsApp();">
                            <div class="row g-3">

                                <div class="col-12">
                                    <input type="text" class="form-control neon-input" id="name" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control neon-input" id="email" placeholder="Email Address" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="tel" class="form-control neon-input" id="phone" placeholder="Phone Number" required>
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control neon-input" id="message" rows="4" placeholder="Your Message"
                                        required></textarea>
                                </div>

                                <div class="text-center mt-2">
                                    <button type="submit" class="btn btn-success px-4 py-2 btn-lg shadow">
                                        <i class="bi bi-whatsapp"></i> Send via WhatsApp
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>