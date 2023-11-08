<?php
include "db_connection.php";
session_start();
// session_destroy();

// --- PRODUCT DETAILS PAGE & CART PAGE --- //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Add_to_cart button action.
    if (isset($_POST['add_via_js'])) {
        
        if (isset($_SESSION['cart'])) {

            if (count($_SESSION['cart']) > 0) {
                $added_items = array_column($_SESSION['cart'], 'title');
                if (in_array($_POST['title'], $added_items)) {
                    echo "already";
                }
                else {
                    $itemCount = count($_SESSION['cart']);

                    $_SESSION['cart'][$itemCount] = array('brand'=>$_POST['brand'], 'title'=>$_POST['title'], 'price'=>$_POST['price'], 'filename'=>$_POST['filename'], 'imagepath'=>$_POST['imagepath']);
    
                    echo "added";
                }
            }
            else {
                $_SESSION['cart'][0] = array('brand'=>$_POST['brand'], 'title'=>$_POST['title'], 'price'=>$_POST['price'], 'filename'=>$_POST['filename'], 'imagepath'=>$_POST['imagepath']);
    
                echo "added";
            }
        }
        else {
            $_SESSION['cart'][0] = array('brand'=>$_POST['brand'], 'title'=>$_POST['title'], 'price'=>$_POST['price'], 'filename'=>$_POST['filename'], 'imagepath'=>$_POST['imagepath']);
    
            echo "added";
        }
    }


    // Remove Button Action
    if (isset ($_POST['line_title'])) {
        foreach ($_SESSION['cart'] as $key=>$value) {
            if ($value['title'] == $_POST['line_title']) {
                unset ($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                if (count($_SESSION['cart']) == 0) {
                    echo "nothing";
                }
            }
        }
    }

    // Final Checkout Button
    if (isset($_POST['alldone'])) {
        foreach ($_SESSION['cart'] as $key=>$value) {
            unset ($_SESSION['cart'][$key]);
            if (count($_SESSION['cart']) == 0) {
                echo "cleared";
            }
        }
    }
}



// ------------ ADMIN PAGE ------------- //
    // delete row
    if (isset($_POST['this_table']) && isset($_POST['primary_key'])) {
        $this_table = $_POST['this_table'];
        $primary_key = $_POST['primary_key'];
        
        if ($this_table == 'tbl_users') {
            mysqli_query($conn, "DELETE FROM $this_table WHERE id='$primary_key'");
        }
        else {
            mysqli_query($conn, "DELETE FROM $this_table WHERE serial='$primary_key'");
        }

        echo "deleted";
    }

    // edit row
    if (isset($_POST['check_item']) || isset($_POST['check_user'])) {
        if (isset($_POST['check_item'])) {
            $check = json_decode($_POST['check_item'], JSON_UNESCAPED_SLASHES);
            $this_serial = $_POST['serial'];
            $what = 'serial';
        }
        elseif (isset($_POST['check_user'])) {
            $check = json_decode($_POST['check_user'], JSON_UNESCAPED_SLASHES);
            $this_serial = $_POST['id_pk'];
            $what = 'id';
        }
        
        $this_table = $_POST['table'];
        $changed = array();

        foreach ($check as $key => $value) {
            // true: unchanged; false = changed.
            if ($value) {
                mysqli_query($conn, "UPDATE $this_table SET $key='$value' WHERE $what='$this_serial'");
                array_push($changed, $key);
            }
        }

        if (count($changed) == 0) {
            echo "0";
        }
        else {
            echo json_encode($changed);
        }

    }