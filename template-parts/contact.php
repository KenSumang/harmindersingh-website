<section class="contact bg-[#eef0f4] py-16 md:py-20">
    <div class="container mx-auto px-4 sm:px-6 max-w-[1200px]">

        <!-- White Card -->
        <div class="bg-white px-8 sm:px-12 py-12 sm:py-16">

            <!-- Header -->
            <div class="text-center mb-10 md:mb-14">

                <h2 class="text-[#2b3f5c] font-Playfair font-normal text-3xl sm:text-5xl mb-2">
                    Get in touch
                </h2>

                <p class="text-[#6b7280] text-base font-Montserrat sm:text-2xl">
                    We are here for you! How can we help?
                </p>

            </div>

            <!-- Success Popup -->
            <div id="success-popup"
                class="fixed inset-0 z-[200] flex items-center justify-center px-4 <?php echo (isset($_GET['success']) && $_GET['success'] === 'true') ? '' : 'hidden'; ?>">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-[#0d1b2e]/70 backdrop-blur-sm"
                    onclick="document.getElementById('success-popup').classList.add('hidden')">
                </div>

                <!-- Modal -->
                <div class="relative bg-white px-8 sm:px-12 py-10 max-w-md w-full z-10 flex flex-col items-center text-center gap-6">

                    <!-- Gold check icon -->
                    <div class="w-16 h-16 rounded-full bg-gold-accent/10 border border-gold-accent flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gold-accent" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>

                    <!-- Message -->
                    <div>
                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-2xl mb-2">
                            Message Sent
                        </h3>
                        <p class="text-[#4a5568] font-DMSans text-sm leading-relaxed">
                            Thank you for reaching out. Harminder will review your enquiry and be in touch shortly.
                        </p>
                    </div>

                    <!-- Divider -->
                    <div class="w-full h-px bg-[#e5e7eb]"></div>

                    <!-- Close button -->
                    <button onclick="document.getElementById('success-popup').classList.add('hidden')"
                            class="bg-gold-accent hover:bg-[#a7884c] text-white font-DMSans uppercase tracking-widest text-xs font-semibold px-10 py-3 transition-colors duration-200 cursor-pointer">
                        Close
                    </button>

                </div>
            </div>

            <!-- Form -->
            <form action="https://api.web3forms.com/submit" method="POST">

                <!-- WEB3 access key -->
                <input type="hidden" name="access_key" value="ba4d4f96-581f-49c2-b632-ea27a750d9c5">

                <!-- Custom Subject -->
                <input type="hidden" name="subject" value="New Enquiry from Harminder Singh Website">
                
                <!-- Redirect after success -->
                <input type="hidden" name="redirect" value="<?php echo home_url('/contact-us?success=true'); ?>">

                <div class="flex flex-col gap-6 max-w-[850px] mx-auto">

                    <!-- Full Name -->
                    <div class="flex flex-col gap-1">

                        <label class="font-DMSans text-[#374151] text-sm">
                            Full Name <span class="text-gold-accent">*</span>
                        </label>

                        <input
                            type="text"
                            name="name"
                            placeholder="Name"
                            required
                            class="w-full border border-[#d1d5db] font-DMSans px-4 py-3 text-sm text-[#374151] placeholder-[#9ca3af] focus:outline-none focus:border-gold-accent transition-colors duration-200"/>
                    
                    </div>

                    <!-- Email Address -->
                    <div class="flex flex-col gap-1">

                        <label class="font-DMSans text-[#374151] text-sm">
                            Email Address <span class="text-gold-accent">*</span>
                        </label>

                        <input
                            type="email"
                            name="email"
                            placeholder="Email"
                            required
                            class="w-full border border-[#d1d5db] font-DMSans px-4 py-3 text-sm text-[#374151] placeholder-[#9ca3af] focus:outline-none focus:border-gold-accent transition-colors duration-200"/>
                    
                    </div>

                    <!-- Contact Number -->
                    <div class="flex flex-col gap-1">

                        <label class="font-DMSans text-[#374151] text-sm">
                            Contact Number <span class="text-gold-accent">*</span>
                        </label>

                        <input
                            type="tel"
                            name="phone"
                            placeholder="Phone Number"
                            required
                            value="<?php echo isset($_POST['contact_phone']) ? esc_attr($_POST['contact_phone']) : ''; ?>"
                            class="w-full border border-[#d1d5db] font-DMSans px-4 py-3 text-sm text-[#374151] placeholder-[#9ca3af] focus:outline-none focus:border-gold-accent transition-colors duration-200"/>
                    
                    </div>

                    <!-- Message -->
                    <div class="flex flex-col gap-1 mb-4 lg:mb-10">

                        <label class="font-DMSans text-[#374151] text-sm">
                            Message <span class="text-gold-accent">*</span>
                        </label>

                        <textarea
                            name="message"
                            placeholder="Message"
                            rows="8"
                            required
                            class="w-full border border-[#d1d5db] font-DMSans px-4 py-3 text-sm text-[#374151] placeholder-[#9ca3af] focus:outline-none focus:border-gold-accent transition-colors duration-200"><?php echo isset($_POST['contact_message']) ? esc_textarea($_POST['contact_message']) : ''; ?></textarea>
                    
                    </div>

                    <!-- Honeypot spam protection -->
                    <input type="checkbox" name="botcheck" style="display:none">

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full bg-gold-accent hover:bg-[#a7884c] text-white font-DMSans uppercase tracking-widest text-xs sm:text-sm font-semibold py-4 mb-4 md:mb-10 transition-colors duration-300 cursor-pointer">
                        Submit
                    </button>

                </div>
            </form>

            <!-- Success / Error Message -->
            <?php if (isset($_GET['success']) && $_GET['success'] === 'true') : ?>
                <div class="bg-green-50 border border-green-300 text-green-700 px-4 py-3 text-sm flex"
                    style="font-family: 'Source Serif 4', serif;">
                    <p class="mx-auto">Your message has been sent successfully. Harminder will be in touch shortly.</p>
                </div>
            <?php elseif (isset($_GET['success']) && $_GET['success'] === 'false') : ?>
                <div class="bg-red-50 border border-red-300 text-red-700 px-4 py-3 text-sm flex"
                    style="font-family: 'Source Serif 4', serif;">
                    <p class="mx-auto">Something went wrong. Please try again or email us directly.</p>
                </div>
            <?php endif; ?>
            
            <!-- Confidentiality Box -->
            <div class="bg-[#1e3050] px-6 sm:px-8 py-6 mt-10 max-w-[700px] mx-auto mb-16 slide-up">
                
                <h4 class="text-gold-accent font-semibold text-base sm:text-lg mb-3"
                    style="font-family: 'Playfair Display', serif; font-style: italic;">
                    Confidentiality
                </h4>
                
                <p class="font-DMSans text-white/80 text-sm leading-relaxed">
                    Your information is treated with absolute discretion. We do not share or store personal data without explicit client engagement. This form initiates a confidential review only.
                </p>
                
            </div>
        </div>
    </div>
</section>