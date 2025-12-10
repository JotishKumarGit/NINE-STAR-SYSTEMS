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
            <h2>Led Garden Light</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Led Garden Light </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- products details -->
    <section class="py-4">
        <div class="container">
            <div class="row align-items-center">

                <!-- Product Image -->
                <div class="col-md-5 mb-4">
                    <img src="assets/images/20_watt_led_garden_light.jpeg"
                        alt="LED Garden Light 20 Watt"
                        class="img-fluid rounded shadow">
                </div>

                <!-- Product Description -->
                <div class="col-md-7">
                    <h2 class="fw-bold mb-3">LED Garden Light (20 Watt)</h2>

                    <p class="text-muted">
                        This 20 Watt LED Garden Light is perfect for outdoor illumination of gardens,
                        pathways, parks, and patios. It provides bright, energy-efficient, and uniform
                        lighting with low power consumption. Durable and weather-resistant, it is designed
                        to withstand outdoor conditions while adding aesthetic appeal to your garden or landscape.
                    </p>

                    <h5 class="fw-bold mt-4">Keywords:</h5>

                    <!-- Rounded multi-color keyword buttons -->
                    <div class="mb-4">
                        <span class="badge rounded-pill bg-primary me-2 mb-2">20 Watt</span>
                        <span class="badge rounded-pill bg-success me-2 mb-2">Energy Efficient</span>
                        <span class="badge rounded-pill bg-danger me-2 mb-2">Outdoor Lighting</span>
                        <span class="badge rounded-pill bg-warning text-dark me-2 mb-2">Weather Resistant</span>
                        <span class="badge rounded-pill bg-info text-dark me-2 mb-2">Durable Build</span>
                        <span class="badge rounded-pill bg-dark me-2 mb-2">Bright Illumination</span>
                    </div>

                    <!-- Enquiry Button -->
                    <button class="btn btn-success btn-lg px-4" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Enquiry Now
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>