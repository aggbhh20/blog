<?php
$title = "Contact";
require_once("app/header.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $email = $_POST["email"];
  $ad_soyad = $_POST["name"];
  $telefon = $_POST["phone"];
  $mesaj = $_POST["message"];
  $db->query("INSERT INTO iletisim (email, ad_soyad, telefon, mesaj) VALUES ('$email', '$ad_soyad', '$telefon', '$mesaj')");
  echo("done!");
}
?>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

  <div class="container my-3">
    <div class="row">
      <div class="col-6">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d955.5986494489075!2d50.51572125030744!3d36.33078655163129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8c8f00248bb0fb%3A0x4257e8a93902ef6d!2sEben%20Ambalaj!5e0!3m2!1str!2str!4v1720004558367!5m2!1str!2str"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-6">
        <form action="" method="post">
          <div class="mb-3">
            <h2>İletişim</h2>
            <label for="exampleFormControlInput1" class="form-label">E-mail:</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ad-Soyad:</label>
            <input type="name" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Ad Soyad Giriniz...">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Telefon Numarası:</label>
            <input type="phone" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="0511 111 1111">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mesajınızı Giriniz:</label>
            <textarea type="message"class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Mesajınız..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>

    </div>
  </div>

  <div class="container">

  </div>
  <?php
  require_once("app/footer.php");
  ?>