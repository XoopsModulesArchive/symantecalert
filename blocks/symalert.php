<?php
// Symantec Module Alert Box
// dev by Jakob Heuser
// please see the GPL provided with Xoops
// for terms and conditions involving this
// module
function b_symantecalert_show_alertblock($options)
{
    global $xoopsConfig, $xoopsModule;

    // assign variables from Xoops Config Option

    $block = [];

    $block['symLmax'] = $options[0];

    $block['symRmax'] = $options[2];

    $block['symAmax'] = $options[1];

    $block['symTshow'] = $options[3];

    $block['symSshow'] = $options[4];

    // apply language settings

    $block['lang_latestthreats'] = _MB_SYMANTECALERT_LATEST;

    $block['lang_topthreats'] = _MB_SYMANTECALERT_TOP;

    $block['lang_removal'] = _MB_SYMANTECALERT_REMOVAL;

    $block['lang_security'] = _MB_SYMANTECALERT_SECURITY;

    $block['lang_searchsarc'] = _MB_SYMANTECALERT_SEARCH;

    $block['lang_usefeed'] = _MB_SYMANTECALERT_USE;

    $block['lang_more'] = _MB_SYMANTECALERT_MORE;

    $block['lang_submit'] = _MB_SYMANTECALERT_SUBMIT;

    return $block;
}

function b_symantecalert_edit_alertblock($options)
{
    $form = '' . '<table>';

    $form .= '<tr><td><B>' . _MB_SYMANTECALERT_O1 . "</B></td><td><input type='text' name='options[]' value='" . $options[0] . "'></td></tr>";

    $form .= '<tr><td><B>' . _MB_SYMANTECALERT_O2 . "</B></td><td><input type='text' name='options[]' value='" . $options[1] . "'></td></tr>";

    $form .= '<tr><td><B>' . _MB_SYMANTECALERT_O3 . "</B></td><td><input type='text' name='options[]' value='" . $options[2] . "'></td></tr>";

    $form .= '<tr><td><B>' . _MB_SYMANTECALERT_O4 . "</B></td><td><select name='options[]'>";

    if (1 == $options[3]) {
        $form .= '<option SELECTED value=1>Yes';

        $form .= '<option value=0>No';
    } else {
        $form .= '<option value=1>Yes';

        $form .= '<option SELECTED value=0>No';
    }

    $form .= '</select></td></tr>';

    $form .= '<tr><td><B>' . _MB_SYMANTECALERT_O5 . "</B></td><td><select name='options[]'>";

    if (1 == $options[4]) {
        $form .= '<option SELECTED value=1>Yes';

        $form .= '<option value=0>No';
    } else {
        $form .= '<option value=1>Yes';

        $form .= '<option SELECTED value=0>No';
    }

    $form .= '</select></td></tr></table>';

    return $form;
}
