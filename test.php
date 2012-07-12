<?php

session_start();

echo $_SESSION['userName'];

unset($_SESSION['userName'];


