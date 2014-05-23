<?php
\Security::clean_input();
$code = \Input::get('code');

if (!empty($code)) {
    //@TODO => Log the user with the getOAuthToken with the code.
} else {
    // check whether an error occurred
    $error = \Input::get('error');
    $error_description = \Input::get('error_description');
    if (!empty($error)) {
        echo 'An error occurred: ' . $error_description;
    }
}
exit();