<?php
echo "Menu\n";
echo "1 = Add\n";
echo "2 = Edit\n";
echo "3 = Delete\n";

$choice = (int) readline("Choose option: ");

switch ($choice) {
    case 1:
        echo "Add selected";
        break;
    case 2:
        echo "Edit selected";
        break;
    case 3:
        echo "Delete selected";
        break;
    default:
        echo "Invalid choice";
}
?>