<?php

require ('partials/header.php');
require ('partials/nav.php');
require ('partials/db.php');

?>


    <div class="container-fluid py-4 m-4 h-100">
        <div class="row">
            <div class="card">
                <div class="card-body h-100">
                    <ul style="height: 70vh;" class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active">Domů</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Třídy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Žáci</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<?
require ('partials/footer.php');