<?php

    session_start();

    $_SESSION['negara'] = "Indonesia";
    $_SESSION['ibukota'] = "Jakarta";

    echo $_SESSION['negara'];
    echo "<br />";
    echo $_SESSION['ibukota'];