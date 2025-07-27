</section>


<!-- Formulaire de contact moderne -->
<section id="contact" class="contact-section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-10">
        <div class="contact-card shadow-lg rounded-4 p-4 p-md-5 bg-white">
          <h2 class="mb-4 text-center fw-bold text-primary">
            <i class="bi bi-envelope-paper-heart me-2"></i>Contactez SunDev Agency
          </h2>
          <form action="send_message.php" method="post" autocomplete="off">
            <div class="row g-3 mb-3">
              <div class="col-12 col-md-6 ">
                <label for="nom" class="form-label text-black fw-semibold">Nom<span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                  <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <label for="email" class="form-label text-black fw-semibold">Email <span class="  text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label text-black fw-semibold">Message <span class=" text-danger">*</span></label>
              <div class="input-group">
                <span class="input-group-text bg-light align-items-start"><i class="bi bi-chat-text"></i></span>
                <textarea class="form-control" id="message" name="message" placeholder="Votre message..." rows="5" required></textarea>
              </div>
            </div>
            <div class="d-grid gap-2 mt-4">
              <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                <i class="bi bi-send-fill me-2"></i>Envoyer
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>