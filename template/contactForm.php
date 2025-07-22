<!--Formulaire de contact-->
<div id="contact" class="contact-form">
<h2 class="contact-title text-primary">
    <i class="bi bi-envelope-paper-heart me-2"></i>Contactez SunDev Agency</h2>

<form action="send_message.php" method="post">

<div class="form-floating mb-3" position-relative">
<i class="bi bi-person form-icon"></i>
<input type="text" class="form-control" id="nom" name="nom" placeholder="nom" required>

<label for="nom">Nom</label>

</div>

<div class="form-floating mb-3">
<i class="bi bi-envelope form-icon"></i>
<input type="email" class="form-control" id="email" name="email" placeholer="Email" required>
<label for="email">Email</label>

</div>

<div class="form-floating mb-3">
  <textarea class="form-control" id="message" name="message" placeholder="message" style="height: 150px" required></textarea>
  <label for="message">Message</label>
  <i class="bi bi-pencil form-icon"></i>
</div>

<div class="text-center">
<button type="submit" class="btn btn-primary btn-lg px-4 me-md-2">
<i class="bi bi-send-fill me-2"></i>Envoyer
</button>
</div>
</form>
</div>