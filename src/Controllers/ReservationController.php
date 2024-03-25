<?php

require_once __DIR__ . '/../Services/Response.php';

class ReservationController
{

    use Response;


    public function index()
    {

        $Reservation= new ReservationRepository();
        $Reservation = $Reservation->getAll();

        $viewData = [
            'reservation' => $Reservation
        ];

        $this->render('ReservationPageTemplate', $viewData);
    }
}
