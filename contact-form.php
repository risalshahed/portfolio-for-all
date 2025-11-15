<div class="contact-form">
    <div id="form-messages" class="error"></div>

    <?php if (isset($_GET['form_status']) && $_GET['form_status'] === 'success') : ?>
        <div style="color: green; margin-bottom: 15px; font-weight: 600;">
            Your message has been sent successfully!
        </div>
    <?php endif; ?>


    <form class="tmp-dynamic-form no-ajax" id="contact-form" method="POST" action="<?php echo admin_url('admin-post.php'); ?>">
        <div class="contact-form-wrapper row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input class="input-field" name="name" id="contact-name" placeholder="Your Name" type="text" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group mt-4 mt-lg-0">
                    <input
                        class="input-field"
                        id="contact-phone"
                        name="phone"
                        placeholder="Phone Number" type="number"
                        required
                    >
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group mb-0 mt-4 mb-lg-4">
                    <input class="input-field" id="contact-email" name="email" placeholder="Your Email" type="email" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group my-4">
                    <input class="input-field" type="text" id="subject" name="subject" placeholder="Subject">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group mb-4">
                    <textarea class="input-field" placeholder="Your Message" name="message" id="contact-message" required></textarea>
                </div>
            </div>

            <div>
                <input type="hidden" name="action" value="send_contact_form">
            </div>

            <div class="col-lg-12">
                <div class="tmp-button-here">
                    <button class="tmp-btn hover-icon-reverse radius-round w-100" name="submit" type="submit" id="submit">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Appointment Now</span>
                            <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                            <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>