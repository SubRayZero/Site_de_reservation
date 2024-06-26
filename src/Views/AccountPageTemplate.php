<?php

session_start();

require_once __DIR__ . '/../Controllers/WeaponController.php';
require_once __DIR__ . '/../Controllers/ReservationController.php';
require_once __DIR__ . '/../Controllers/DeleteController.php';

$WeaponRepository = new WeaponRepository();
$weapon = $WeaponRepository->getAll();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Components/index.css">
    <link rel="stylesheet" href="../Components/form.css">
    <link rel="stylesheet" href="../Components/formprofiles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container_header">
            <a href="http://projet6/Site_de_reservation/public/">
                <div class="inscription">Déconnexion</div>
            </a>
        </div>
    </header>
    <section class="section_card">
        <form method="POST" action="ReservationPageTemplate.php" onsubmit="return check_form_validity()">
            <div class="container_card">
                <?php $counter = 1; ?>
                <?php foreach ($weapon as $weapon) : ?>
                    <div class="card_size">
                        <div class="container_image_<?php echo $counter; ?>"></div>
                            <button class="button_reservation" type="submit" name="id_weapon" value="<?= $weapon->getId_weapon(); ?>">Réservez maintenant</button>
                    </div>
                    <?php $counter++; ?>
                <?php endforeach; ?>
            </div>
        </form>
    </section>

    <section class="form">
        <div class="container_form">
            <form method="POST" action="" onsubmit="return check_form_validity()">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Change Surname</label>
                    <input type="texte" class="form-control input" name="surname" id="surname" minlength="3" maxlength="50" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Change Firstname</label>
                    <input type="texte" class="form-control" name="firstname" id="firstname" minlength="3" maxlength="50">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Change Adresse mail</label>
                    <input type="email" class="form-control" name="email" id="email" minlength="3" maxlength="80" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Change Password</label>
                    <input type="password" class="form-control" name="password" id="password" minlength="7" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Change Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" minlength="7" required>
                </div>
                <input type="submit" value="Confirmer les changements" id="inscription" class="button_validation" />
            </form>
        </div>
    </section>

    <section class="form_reservation">
        <div class="container_form_reservation">
            <form>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Reservation</label>
                    <input type="texte" value="<?= isset($_SESSION['reserved_person_id']) ? $_SESSION['reserved_person_id'] : ''; ?>" class="form-control input" name="surname" id="surname" minlength="3" maxlength="50" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Weapon</label>
                    <input type="text" value="<?= isset($_SESSION['reserved_weapon_name']) ? $_SESSION['reserved_weapon_name'] : ''; ?>" class="form-control" name="firstname" id="firstname" minlength="3" maxlength="50">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input type="date" value="<?= isset($_SESSION['reserved_date']) ? $_SESSION['reserved_date'] : ''; ?>" class="form-control" name="date" id="date" minlength="3" maxlength="80" required>
                </div>
            </form>

        </div>
    </section>

    <section class="form_delete">
        <div class="container_form_delete">
            <form method="POST" action="/Site_de_reservation/public/delete" onsubmit="return check_form_validity()">

                <input type="hidden" name="user_id" value="<?= isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">
                <input type="submit" class="button_validation_delete" value="Supprimer le compte">
            </form>
        </div>
    </section>

</body>