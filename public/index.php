<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
//-------------------------------------
// get value from ‘action’ parameter
//-------------------------------------
require_once __DIR__ . '/../src/main_controller.php';

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

switch ($action){
    //-------------------------------------
    // IF ‘about’ THEN show about page
    //-------------------------------------
    case 'gallery':
        gallery_action();
        break;
    case 'contact_us':
        contact_us_action();
        break;

    case 'shop':
        shopAction();
        break;

    case 'sitemap':

        sitemap_action();
        break;

    // CRUD features

    case 'detail':
        show_one_item_action();
        break;

    case 'delete':
        delete_item_action();
        break;

    case 'showNewProductForm':
        show_new_item_form_action();
        break;

    case 'createNewProduct':
        create_item_action();
        break;

    case 'showUpdateProductForm':
        show_update_item_form_action();
        break;

    case 'updateProduct':
        update_item_action();
        break;

    // User Settings

    case 'showNewUserForm':
        show_new_user_form();
        break;

    case 'createNewUser':
        create_user_action();
        break;

    case 'showUserSettings':
        show_user_settings();
        break;

    case 'changePicture':
        change_picture();
        break;

    // Login sessions

    case 'logout':
        logout_action();
        break;

    case 'processLogin':
        process_login_action();
        break;

    case 'login':
        login_action();
        kill_session();
        break;

    case 'admin_crud';
        adminCrud();
        break;

    // Preference session
    case 'setBackgroundColorBlue':
        changeBackgroundColor('#123752');
        break;

    case 'setBackgroundColorBlack':
        changeBackgroundColor('#0d0d0d');
        break;

    case 'sizeOnePointFive':
        changeSize(1.5);
        break;

    case 'sizeTwo':
        changeSize(2);
        break;

    // Shopping Cart
    case 'showShoppingCart':
        show_cart();
        break;

    case 'addToCart':
        addToCart();
        break;

    case 'removeFromCart':
        removeFromCart();
        break;
    //----------------------
    // ELSE show home page
    //-------------------------------------
    case 'index':
    default:
        index_action();
}
