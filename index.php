<?php
require_once 'Model/User.php';

$data = [
     'id' => 1,
     'email' => 'john.doe@example.com',
     'password' => 'password123',
     'firstName' => 'John',
     'lastName' => 'Doe',
     'address' => '123 Main St',
     'postalCode' => '12345',
     'city' => 'ExampleCity',
     'admin' => true
];

$user = new User();
$user->hydrate($data);

echo "ID: " . $user->getId() . "<br/>";
echo "Email: " . $user->getEmail() . "<br/>";
echo "Mot de passe: " . $user->getPassword() . "<br/>";
echo "Prénom: " . $user->getFirstName() . "<br/>";
echo "Nom: " . $user->getLastName() . "<br/>";
echo "Adresse: " . $user->getAddress() . "<br/>";
echo "Code postal: " . $user->getPostalCode() . "<br/>";
echo "Ville: " . $user->getCity() . "<br/>";
echo "Admin: " . ($user->getAdmin() ? "Oui" : "Non") . "<br/>";


