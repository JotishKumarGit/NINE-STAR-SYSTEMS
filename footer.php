<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content"
            style="border-radius:15px; background: #1c1c1c; color: #ffffff;">
            <div class="modal-header" style="border-bottom:none;">
                <h5 class="modal-title" id="enquiryModalLabel" style="color:#ffffff;">Send Your Enquiry</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="enquiryForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="enqName" placeholder="Your Name" required
                                style="border-radius:10px; border:1px solid #ffffff; background:#2c2c2c; color:white;">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="enqEmail" placeholder="Your Email" required
                                style="border-radius:10px; border:1px solid #ffffff; background:#2c2c2c; color:white;">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" id="enqPhone" placeholder="Phone Number" required
                                style="border-radius:10px; border:1px solid #ffffff; background:#2c2c2c; color:white;">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="enqSubject" placeholder="Subject" required
                                style="border-radius:10px; border:1px solid #ffffff; background:#2c2c2c; color:white;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="enqMessage" rows="5" placeholder="Your Message"
                                required style="border-radius:10px; border:1px solid #ffffff; background:#2c2c2c; color:white;"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn"
                                style="background: #ffffff; color:#1c1c1c; border-radius:50px; padding:10px 30px;">
                                Send Enquiry
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Placeholder Color Update */
    #enquiryModal input::placeholder,
    #enquiryModal textarea::placeholder {
        color: #dcdcdc !important;
        opacity: 1 !important;
    }
</style>

<!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-4" data-aos="fade-up" data-aos-delay="100">
    <div class="container text-center text-md-start">

        <div class="row text-center text-md-start">

            <!-- Company Info -->
            <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
                <h5 class="text-uppercase fw-bold mb-4">NINE STAR SYSTEMS</h5>
                <p>
                    We deliver smart and sustainable solutions — from energy-efficient LED lights to eco-friendly solar water
                    heaters and more, blending modern technology with everyday convenience.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="#about" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="#products" class="text-white text-decoration-none">Products</a></li>
                    <li><a href="#services" class="text-white text-decoration-none">Services</a></li>
                    <li><a href="#faq" class="text-white text-decoration-none">FAQ</a></li>
                    <li><a href="#contact" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info + Newsletter -->
            <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">
                <!-- Contact Info -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="bi bi-house-door-fill me-2"></i> B-62, G.I.D.C ELECTRONICS ESTATE, NEAR ARMY STORE, Gandhinagar, GUJRAT</p>
                <p><i class="bi bi-envelope-fill me-2"></i> Sales.ninestarsystems@gmail.com</p>
                <p><i class="bi bi-telephone-fill me-2"></i> +91 8320898933</p>

                <!-- Newsletter -->
                <div class="mt-4">
                    <h6 class="text-uppercase fw-bold mb-2">Subscribe to our Newsletter</h6>
                    <p>Get updates on new products, offers, and solar & LED solutions directly to your inbox.</p>
                    <form class="d-flex justify-content-start flex-wrap">
                        <input type="email" class="form-control me-2 mb-2" placeholder="Enter your email" style="max-width: 300px;">
                        <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                    </form>
                </div>
            </div>

        </div>

        <!-- Divider -->
        <hr class="my-4">

        <!-- Social Media + Copyright -->
        <div class="row align-items-center text-center">
            <div class="col-md-6">
                <p class="mb-0 text-center">© 2025 NINE STAR SYSTEMS. All Rights Reserved.</p>
                <span>Design By <a href="https://trade4export.com/">Trade4Export</a></span>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center justify-content-md-end gap-3">
                    <a href="#" class="text-white"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-whatsapp fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-linkedin fs-5"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="assets/js/script.js"></script>
<!-- bootstrap js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>