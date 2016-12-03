<?php

/**
 * This PHP file contains all the database functions
 */

/**
 * Connects to the database with database name, username and password as parameters
 * @return null|PDO
 */
function connect_to_db()
{
    // DSN - the Data Source Name - requred by the PDO to connect
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

    // attempt to create a connection to the database
    try {
        $connection = new \PDO($dsn, DB_USER, DB_PASS);
    } catch (\PDOException $e) {
        // deal with connection error
        print 'ERROR - there was a problem trying to create DB connection' . PHP_EOL;
        return null;
    }

    return $connection;
}

/**
 * Gets all the items from the database and returns them
 * @param $connection
 * @return mixed
 */
function get_all_items($connection)
{
    // SQL query
    $sql = 'SELECT * FROM items';

    // execute query and collect results
    $statement = $connection->query($sql);
    $items = $statement->fetchAll();

    return $items;
}

/**
 * Gets one item and returns it
 * @param $connection
 * @param $id
 * @return null
 */
function get_one_item($connection, $id)
{
    $sql = "SELECT * FROM items WHERE itemID=$id";
    $statement = $connection->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}

/**
 * Deletes item from the database
 * @param $connection
 * @param $id
 * @return bool
 */
function delete_item($connection, $id)
{
    $sql = "DELETE FROM items WHERE itemID=$id";

    $numRowsAffected = $connection->exec($sql);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}

/**
 * Stores the parameters as a new item on the database
 * @param $connection
 * @param $itemName
 * @param $imageSrc
 * @param $price
 * @param $description
 * @param $category
 * @return bool
 */
function create_product($connection, $itemName, $imageSrc, $price, $description, $category)
{
    $sql = "INSERT into items (itemName, imageSrc, price, description, category) VALUES ('$itemName', '$imageSrc', $price, '$description', '$category')";

    $numRowsAffected = $connection->exec($sql);

    // can set Boolean variable in a single statement
    // 	$queryWasSuccessful = ($numRowsAffected > 0);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}


/**
 * Updates the existing item on the database
 * @param $connection
 * @param $itemID
 * @param $itemName
 * @param $imageSrc
 * @param $price
 * @param $description
 * @param $category
 * @return bool
 */
function update_item($connection, $itemID, $itemName, $imageSrc, $price, $description, $category)
{
    $sql = "UPDATE items SET itemName = '$itemName', imageSrc= '$imageSrc', price = $price, description = '$description', category = '$category'
    WHERE itemID=$itemID";

    $numRowsAffected = $connection->exec($sql);

    // can set Boolean variable in a single statement
    // 	$queryWasSuccessful = ($numRowsAffected > 0);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}

/**
 * Creates a new user and stores it in the databse
 *
 * @param $connection
 * @param $email
 * @param $hashedPassword
 * @param $pictureSrc
 * @return bool
 */
function create_user($connection, $email, $hashedPassword, $pictureSrc) {

    $sql = "INSERT into users (email, role, password, user_image) VALUES ('$email', 'user', '$hashedPassword', '$pictureSrc')";
    $numRowsAffected = $connection->exec($sql);

    // can set Boolean variable in a single statement
    // 	$queryWasSuccessful = ($numRowsAffected > 0);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}

/**
 * sets the picture of an user on the databse
 * @param $connection
 * @param $username
 * @param $pictureSrc
 * @return bool
 */
function set_picture($connection, $username, $pictureSrc) {

    $sql = "UPDATE users SET user_image='$pictureSrc' WHERE email = '$username'";

    $numRowsAffected = $connection->exec($sql);

    // can set Boolean variable in a single statement
    // 	$queryWasSuccessful = ($numRowsAffected > 0);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}
//----------------------------------------------

/**
 * Gets the user based on the username
 * @param $connection
 * @param $username
 * @return null
 */
function get_one_user_by_username($connection, $username)
{
    // SQL query
    $sql = "SELECT email FROM users WHERE email='$username'";

    // execute query and collect results
    $statement = $connection->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}

/**
 * Gets the user based on the password
 * @param $connection
 * @param $username
 * @return null
 */
function get_one_user_by_password($connection, $username)
{


    // SQL query
    $sql = "SELECT password FROM users WHERE email = '$username'";

    // execute query and collect results
    $statement = $connection->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}

/**
 * gets the user based on the picture
 * @param $username
 * @return mixed|null
 */
function get_one_user_by_image($username)
{
    $connection = connect_to_db();

    // SQL query
    $sql = "SELECT user_image FROM users WHERE email = '$username'";

    // execute query and collect results
    $statement = $connection->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }

}

/**
 * Checks the username and password if it matches on the database
 * @param $username
 * @param $password
 * @return bool
 */
function authenticate($username, $password)
{
    $connection = connect_to_db();

    $user = get_one_user_by_username($connection, $username);

    if (null== $user) {
        return false;
    }else {
        $pass = get_one_user_by_password($connection, $username);
        if (null==$pass) {
            return false;
        } else {
            $hashedCorrectPassword = password_hash($pass[0], PASSWORD_DEFAULT);
            if(password_verify($password, $pass[0])){
                return true;
            }
        }
    }
    return false;
}

/**
 * Gets the user role
 * @param $username
 * @return mixed|null
 */
function get_user_role($username)
{
    $connection = connect_to_db();

    // SQL query
    $sql = "SELECT role FROM users WHERE email = '$username'";

    // execute query and collect results
    $statement = $connection->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}

/**
 * Checks if the user is an Admin
 * @param $username
 * @return bool
 */
function is_user_admin($username){

    $role = get_user_role($username);

    if ($role[0] == 'admin') {
        return true;
    } else {
        return false;
    }
}


