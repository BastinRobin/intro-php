<?php

$tasks = array(
    array("id" => 1, "body" => "I am really excited to code", "is_completed" => false, "is_deleted" => false),
    array("id" => 2, "body" => "I am going to gym", "is_completed" => true, "is_deleted" => false),
    array("id" => 3, "body" => "I like to play sudoku", "is_completed" => false, "is_deleted" => false),
    array("id" => 4, "body" => "Homeworks need to be complete", "is_completed" => true, "is_deleted" => false),
    array("id" => 5, "body" => "Have to attend the social class", "is_completed" => true, "is_deleted" => false),
    array("id" => 6, "body" => "Have a scrum call with the team", "is_completed" => false, "is_deleted" => false),
    array("id" => 7, "body" => "I am really going for a trip", "is_completed" => false, "is_deleted" => false)
);

// GET - Return list of all items in the array /
function index() {
    return $GLOBALS["tasks"];
} 

// GET - Return a single object inside array matching the id 
function get_task($id) {
    // Loop through the array and find the matching item in index
    foreach ($GLOBALS["tasks"] as $task) {
        if($task["id"] == $id) {
            return $task;
        }
    }
} 

// POST - Insert a new item into the array
function insert() {}

// PUT - Updating any one property of an item inside the array
function update($id, $body) {
    foreach ($GLOBALS["tasks"] as $task) {
        if ($task["id"] == $id) {
            $task["body"] = $body;
            return $task;
        }
    }
}

// DELETE - Remove the item matching the ID 
function delete($id) {
    $result = [];
    foreach($GLOBALS["tasks"] as $task) {
        if ($task["id"] != $id) {
            array_push($result, $task);
        }   
    }
    return $result;
}



switch ($_GET["action"]) {
    case 'index':
        echo json_encode(index());
        break;
    case 'fetch':
        echo json_encode(get_task((int) $_GET["id"]));
        break;

    case 'update':
        echo json_encode(update((int) $_GET["id"], $_GET["body"]));
        break;

    case 'delete':
        echo json_encode(delete((int) $_GET["id"]));
        break;
    default:
        
        break;
}




?>


