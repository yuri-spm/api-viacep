<?php

function is_email($mail)
{
    return filter_var($mail, FILTER_VALIDATE_EMAIL);

}
