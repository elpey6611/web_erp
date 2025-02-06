<?php
function cerrardb($dbname)
{
    mysqli_close($dbname);
}