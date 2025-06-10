<?php
$role = "Admin";
$output = match ($role) {
    'Admin' => 'Sono un Admin',
    'Moderatore ' => 'Sono un Moderatore',
    default => 'Altro'
};