<?php
$title = "Kontakt";
include '../header.php';
?>

    <main class="contact">
        <div class="container">
            <h1>Kontaktirajte nas</h1>
            <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11123.580292478879!2d15.982498367773008!3d45.813359752033456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d7ab690d94f3%3A0x6d219e004f2ee5c9!2sRog%20Joma!5e0!3m2!1shr!2shr!4v1718284406376!5m2!1shr!2shr" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <form class="smpl-form" action="/misc/mailContact.php" id="contact_form" name="contact_form" method="POST">
                <label for="fname">Ime *</label>
                <input type="text" id="fname" name="firstname" placeholder="Ime" required="">
                <label for="lname">Prezime *</label>
                <input type="text" id="lname" name="lastname" placeholder="Prezime" required="">
                <label for="email">e-mail *</label>
                <input type="email" id="email" name="email" placeholder="e-mail" required="">
                <label for="country">Država</label>
                <select id="country" name="country">
                    <option value="">Odaberite</option>
                    <option value="BE">Belgija</option>
                    <option value="HR" selected="">Hrvatska</option>
                    <option value="LU">Luksemburg</option>
                    <option value="HU">Mađarska</option>
                </select>
                <label for="subject">Subjekt</label>
                <textarea id="subject" name="subject" placeholder="Subjekt" style="height:200px"></textarea>
                <input type="submit" value="Pošalji">
            </form>
        </div>
<?php include '../footer.php' ?>
