<?php
/**
 * Contains all the user Functions
 */

/**
 * gets the user role based on the database
 * @return array
 */
function get_all_roles()
{
    // SQL query
    $sql = 'SELECT email FROM users';

    // execute query and collect results
    $statement = $connection->query($sql);
    $user = $statement->fetchAll();
    return [
        'admin' => 'admin',
        '$user' => 'user',
    ];
}

/**
 * Checks if the current user is an admin
 * @param $username
 * @return bool
 */
function is_admin_user($username)
{
    $roles = get_all_roles();

    if(isset($roles[$username])){
        $role = $roles[$username];

        if('admin' == $role){
            return true;
        }
    }

    return false;

}