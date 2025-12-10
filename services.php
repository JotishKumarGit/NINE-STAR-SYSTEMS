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
            <h2>Services</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </section>


    <!-- services start -->
    <section class="py-5 services-section text-white" id="services">
        <div class="container text-center">
            <h2 class="mb-4 section-title" data-aos="fade-up">Our Services</h2>
            <p class="mb-5 section-subtitle" data-aos="fade-up" data-aos-delay="100">
                At <strong>NINE STAR SYSTEMS</strong>, we don’t just sell products — we deliver complete solar and
                energy-efficient solutions to power your future.
            </p>

            <div class="row g-4 justify-content-center">

                <!-- Service 1 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card h-100">
                        <div class="icon-box text-success"><i class="bi bi-lightbulb-fill"></i></div>
                        <h5 class="service-title">LED Lighting Consultation</h5>
                        <p class="service-desc">We help residential and commercial clients select the right LED lighting systems for
                            energy savings and optimal brightness.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card h-100">
                        <div class="icon-box text-warning"><i class="bi bi-sun-fill"></i></div>
                        <h5 class="service-title">Solar Installation Support</h5>
                        <p class="service-desc">From rooftop setups to solar street lighting, our team ensures proper installation
                            for long-term performance and efficiency.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card h-100">
                        <div class="icon-box text-info"><i class="bi bi-tools"></i></div>
                        <h5 class="service-title">Product Customization</h5>
                        <p class="service-desc">Need something specific? We offer OEM customization for LED lights, Zatka machines,
                            and solar water heaters.</p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card h-100">
                        <div class="icon-box text-primary"><i class="bi bi-globe2"></i></div>
                        <h5 class="service-title">Pan-India Distribution</h5>
                        <p class="service-desc">We supply across India with fast dispatch, secure packaging, and full support for
                            dealers, retailers, and resellers.</p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card h-100">
                        <div class="icon-box text-danger"><i class="bi bi-lightning-fill"></i></div>
                        <h5 class="service-title">Zatka System Setup</h5>
                        <p class="service-desc">We offer end-to-end Zatka (solar fencing) setup for farms, warehouses, and
                            security-sensitive areas.</p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card h-100">
                        <div class="icon-box text-secondary"><i class="bi bi-battery-charging"></i></div>
                        <h5 class="service-title">After-Sales Support</h5>
                        <p class="service-desc">Our job doesn’t end at sale — we provide technical support, replacements, and
                            servicing whenever you need.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end services -->

    <!-- FAQ Section -->
    <section class="faq-section-dark py-5" id="faq" data-aos="fade-up">
        <div class="container">
            <div class="faq-header text-center mb-4">
                <h2 class="faq-title">Frequently Asked Questions</h2>
                <p class="faq-subtitle">Have questions about our solar and LED products? We've got answers.</p>
            </div>

            <div class="accordion" id="faqAccordion">

                <!-- FAQ 1 -->
                <div class="accordion-item-dark" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="accordion-header" id="faqOne">
                        <button class="accordion-button-dark collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne">
                            Are your LED lights energy efficient?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body-dark">
                            Yes, our LED lights consume up to 80% less energy than traditional bulbs and have a longer lifespan,
                            reducing both cost and maintenance.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item-dark" data-aos="fade-up" data-aos-delay="150">
                    <h2 class="accordion-header" id="faqTwo">
                        <button class="accordion-button-dark collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">
                            Do solar street lights work during cloudy days?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body-dark">
                            Absolutely. Our solar street lights are equipped with high-capacity batteries that store solar energy,
                            ensuring consistent lighting even on cloudy days.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item-dark" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="accordion-header" id="faqThree">
                        <button class="accordion-button-dark collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">
                            What is the warranty on your solar water heaters?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body-dark">
                            Our solar water heaters come with a standard 5-year warranty covering tank leakage, vacuum tubes, and
                            heating efficiency.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item-dark" data-aos="fade-up" data-aos-delay="250">
                    <h2 class="accordion-header" id="faqFour">
                        <button class="accordion-button-dark collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour">
                            Is installation included with the solar Zatka machine?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body-dark">
                            Yes, we provide installation support for all our solar Zatka machines along with user training for safe
                            and effective usage.
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="accordion-item-dark" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="accordion-header" id="faqFive">
                        <button class="accordion-button-dark collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive">
                            Are your products made in India?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body-dark">
                            Yes. All our products are proudly manufactured in India under ISO and BIS-certified facilities, ensuring
                            premium quality and local support.
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="accordion-item-dark" data-aos="fade-up" data-aos-delay="350">
                    <h2 class="accordion-header" id="faqSix">
                        <button class="accordion-button-dark collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix">
                            Can solar products be customized for farms or factories?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body-dark">
                            Yes, we offer tailored solar solutions for agriculture and industrial needs — including solar fencing,
                            lights, and water heaters.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end faq -->

    <!-- footer -->
    <?php include('footer.php') ?>