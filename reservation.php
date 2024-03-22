
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Components/index.css">
    <link rel="stylesheet" href="Components/form.css">
    <link rel="stylesheet" href="Components/formLogin.css">
    <link rel="stylesheet" href="Components/formReservation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>


<body>

    <?php
    require 'Components/headerLogIn.php';
    ?>


    <section class="form">
        <div class="container_form">
            <form method="POST" action="" onsubmit="check_form_validity_first()">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Surname *</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Firstname *</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date *</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="autoSizingSelect">Choisissez un skin</label>
                    <select class="form-select" id="autoSizingSelect">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                </div>
                <input type="submit" value="Confirmez la réservation" id="inscription" class="button_validation" />
            </form>
        </div>
    </section>

</body>