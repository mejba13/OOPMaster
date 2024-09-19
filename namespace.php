<?php
// Define a namespace for utilities
namespace App\Utilities;

class Formatter {
    public static function formatText($text) {
        return strtoupper($text);
    }
}

// Define a namespace for user management
namespace App\User;

class User {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Use the namespaces
namespace Main;

use App\Utilities\Formatter;
use App\User\User;

$user = new User("John Doe");
echo "User Name: " . $user->getName() . "\n";

$formattedName = Formatter::formatText($user->getName());
echo "Formatted Name: " . $formattedName;
