<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'contactHero',
          'breadcrumb' => [
              ['label' => 'Home', 'url' => home_url('/')],
              ['label' => 'Contact'],
          ],
          'eyebrow' => 'Contact',
          'title'   => 'Get in <em>touch.</em>',
          'sub'     => 'We welcome enquiries from individuals and businesses at any stage &mdash; whether you are looking for a new accountant, have a specific tax question, or need advice on a particular matter.',
          'bg_image' => 'https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1800&q=80',
      ]);
      ?>


      <section class="py-7 py-md-8" id="contactBody">
        <div class="container">
          <div class="row gy-6">

            <div class="col-lg-5">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Direct Contact</div>
              <h2 class="mb-4">Speak to <em>the practice.</em></h2>
              <p class="font-secondary mb-5">For new client enquiries, fee quotes or specific tax questions, send us a note via the form &mdash; or reach out directly using the details below. We respond to all enquiries within one working day.</p>

              <div class="font-secondary">
                <div class="mb-4">
                  <div class="ls text-uppercase fw-bold fs-10 text-body-secondary mb-1">Email</div>
                  <a class="text-body fs-7" href="mailto:info@razzaqco.co.uk">info@razzaqco.co.uk</a>
                </div>
                <div class="mb-4">
                  <div class="ls text-uppercase fw-bold fs-10 text-body-secondary mb-1">Telephone</div>
                  <a class="text-body fs-7" href="tel:+441234567890">+44 (0) 1234 567 890</a>
                </div>
                <div class="mb-4">
                  <div class="ls text-uppercase fw-bold fs-10 text-body-secondary mb-1">Opening Hours</div>
                  <p class="text-body mb-0 fs-8">Monday &ndash; Friday<br />9:00 am &ndash; 6:00 pm</p>
                </div>
                <div class="mb-0">
                  <div class="ls text-uppercase fw-bold fs-10 text-body-secondary mb-1">Clients</div>
                  <p class="text-body mb-0 fs-8">Throughout the United Kingdom</p>
                </div>
              </div>
            </div>

            <div class="col-lg-7">
              <div class="bg-black p-4 p-md-5">
                <div class="ls text-uppercase fw-bold fs-10 text-danger mb-3">Enquiry Form</div>
                <h3 class="text-white mb-4">Tell us about <em>your position.</em></h3>

                <form class="font-secondary" action="#" method="post">
                  <div class="row gy-4">
                    <div class="col-md-6">
                      <label class="text-light text-opacity-75 fw-bold ls fs-10 mb-2">First Name</label>
                      <input class="fs-9 form-control border-secondary bg-transparent text-white" type="text" name="first_name" required="required" />
                    </div>
                    <div class="col-md-6">
                      <label class="text-light text-opacity-75 fw-bold ls fs-10 mb-2">Last Name</label>
                      <input class="fs-9 form-control border-secondary bg-transparent text-white" type="text" name="last_name" required="required" />
                    </div>
                    <div class="col-12">
                      <label class="text-light text-opacity-75 fw-bold ls fs-10 mb-2">Email Address</label>
                      <input class="fs-9 form-control border-secondary bg-transparent text-white" type="email" name="email" required="required" />
                    </div>
                    <div class="col-12">
                      <label class="text-light text-opacity-75 fw-bold ls fs-10 mb-2">Telephone (Optional)</label>
                      <input class="fs-9 form-control border-secondary bg-transparent text-white" type="tel" name="phone" />
                    </div>
                    <div class="col-12">
                      <label class="text-light text-opacity-75 fw-bold ls fs-10 mb-2">Nature of Enquiry</label>
                      <select class="form-select fs-9 border-secondary bg-transparent text-white" name="enquiry_type" required="required">
                        <option value="" disabled selected>Please select</option>
                        <option>Self Assessment</option>
                        <option>Limited Company</option>
                        <option>PAYE &amp; Payroll</option>
                        <option>VAT</option>
                        <option>Tax Advisory</option>
                        <option>Property Tax</option>
                        <option>Healthcare &amp; Medical</option>
                        <option>Construction &amp; Contractors</option>
                        <option>General Enquiry</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label class="text-light text-opacity-75 fw-bold ls fs-10 mb-2">Message</label>
                      <textarea class="fs-9 form-control border-secondary bg-transparent text-white" name="message" rows="6" required="required"></textarea>
                    </div>
                    <div class="col-12">
                      <input class="btn btn-danger" type="submit" value="Submit Enquiry" />
                    </div>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </section>


      <section class="border-top bg-light py-7 py-md-8" id="contactFAQ">
        <div class="container">
          <div class="row justify-content-center text-center mb-6">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Before You Get in Touch</div>
              <h2>What to expect</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <?php
              $faqs = [
                  ['q' => 'How quickly will you respond?', 'a' => 'All enquiries receive a response within one working day. For new client onboarding, we usually arrange a discovery call within the same week.'],
                  ['q' => 'Is the discovery call free?',    'a' => 'Yes. The initial conversation is a no-obligation call to understand your position, tax history and objectives &mdash; and to confirm whether we are the right fit. There is no charge.'],
                  ['q' => 'Do you offer fixed fees?',       'a' => 'Yes. For compliance work &mdash; accounts, returns, payroll &mdash; we quote a fixed annual fee. Advisory work is quoted on a project basis. We do not bill by the hour for routine compliance.'],
                  ['q' => 'Do you act for clients outside London?', 'a' => 'Yes. We act for clients throughout the United Kingdom. The vast majority of our communication is digital, and meetings take place by video call where in-person is not practical.'],
              ];
              foreach ($faqs as $faq) : ?>
                <details class="bg-white border p-4 mb-3">
                  <summary class="fw-bold font-primary fs-7" style="cursor:pointer; list-style: none;"><?php echo esc_html($faq['q']); ?></summary>
                  <p class="font-secondary mt-3 mb-0"><?php echo wp_kses_post($faq['a']); ?></p>
                </details>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>


    </main>

<?php get_footer();
