<?php
$contacts = [];

function addContact(array &$contacts, string $name, string $email, string $phone) {
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}

function displayContacts(array $contacts): void {
    if (empty($contacts)) {
        echo "No contacts available.\n";
    } else {
        echo "\n----- Contact List -----\n";
        foreach ($contacts as $contact) {
            echo "Name: {$contact['name']}\n";
            echo "Email: {$contact['email']}\n";
            echo "Phone: {$contact['phone']}\n";
            echo "----------------------\n";
        }
    }
}

while (true) {
    echo "\nContact Management App:\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";

    $choice = (int) readline("Choose an option: ");

    if ($choice === 1) {
        $name = readline("Enter Your Name: ");
        $email = readline("Enter Your Email: ");
        $phone = readline("Enter Your Phone: ");
        addContact($contacts, $name, $email, $phone);
        echo "Contact added successfully!\n";
    } elseif ($choice === 2) {
        displayContacts($contacts);
    } elseif ($choice === 3) {
        echo "Exiting...\n";
        break;
    } else {
        echo "Invalid choice. Please try again.\n";
    }
}
?>
