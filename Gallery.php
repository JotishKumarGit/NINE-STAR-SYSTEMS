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
            <h2>Gallery</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Gallery -->
    <section class="py-5 services-section text-white" id="collections">
        <div class="container text-center">

            <h2 class="mb-4 section-title" data-aos="fade-up">Our Gallery</h2>
            <p class="mb-5 section-subtitle" data-aos="fade-up" data-aos-delay="100">
                Explore our premium range of energy-efficient LED products, solar solutions, and outdoor lighting.
            </p>

            <div class="row g-4 justify-content-center">

                <!-- Collection Item -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card h-100">
                        <img src="assets/images/collection_4.jpeg" class="collection-img" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card h-100">
                        <img src="assets/images/collection_5.jpeg" class="collection-img" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card h-100">
                        <img src="assets/images/collections_1.jpeg" class="collection-img" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card h-100">
                        <img src="assets/images/collections_2.jpeg" class="collection-img" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card h-100">
                        <img src="assets/images/collections_3.jpeg" class="collection-img" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card h-100">
                        <img src="assets/images/collections_4.jpeg" class="collection-img" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-card h-100">
                        <img src="assets/images/collections_6.jpeg" class="collection-img" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="service-card h-100">
                        <img src="assets/images/Garden_light.jpeg" class="collection-img" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="service-card h-100">
                        <img src="assets/images/led_light_new.jpeg" class="collection-img" alt="">
                    </div>
                </div>


                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="service-card h-100">
                        <img src="assets/images/850_1250_va_solar_Mppt_invertor.jpeg" class="collection-img" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="service-card h-100">
                        <img src="assets/images/500_lpd_Solar_water_heater.jpeg" class="collection-img" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="service-card h-100">
                        <img src="assets/images/200_lpd_solar_water_heater.jpeg" class="collection-img" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="service-card h-100">
                        <img src="assets/images/20_watt_mono_solar_panel.jpeg" class="collection-img" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="service-card h-100">
                        <img src="assets/images/10kva_voltage_stabilize_150v_ac_to_290v_ac.jpeg" class="collection-img" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="service-card h-100">
                        <img src="assets/images/solarChargeController.jpeg" class="collection-img" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="service-card h-100">
                        <img src="assets/images/KVA _SOLAR_INVERTOR.jpeg" class="collection-img" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="service-card h-100">
                        <img src="assets/images/AC_BATTERY_CHARGER.jpeg" class="collection-img" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- gallery end -->

    <!-- footer -->
    <?php include('footer.php') ?>