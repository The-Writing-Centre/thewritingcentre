<?php

require('../Settings/db_class.php');

//inheriting the methods from connection

class Product extends db_connection {

//brand
    
//add brand
    // function add_product_brand($brandname){
    //     //returns true or false
    //     return $this->db_query("INSERT into brands(brand_name) values('$brandname')");
    // }

    // function select_all_brands(){
    //     //returns true or false
    //     return $this->db_fetch_all("select * from brands");
    // }

    // function update_one_brand($id, $brandname){
    //     // return true or false
    //     return $this->db_query("update brands set brand_name='$brandname' where brand_id = '$id'");
    
    // }

    // function select_one_brand($id){
    //     //returns true or false
    //     return $this->db_fetch_one("select * from brands where brand_id = '$id'");
    // }

//Category

    // function add_category($categoryname){
    //     //returns true or false
    //     return $this->db_query("INSERT into categories(cat_name) values('$categoryname')");
    // }

    // function select_all_categories(){
    //     //returns true or false
    //     return $this->db_fetch_all("select * from categories");
    // }


    // function select_one_category($id){
    //     //returns true or false
    //     return $this->db_fetch_one("select * from categories where cat_id = '$id'");
    // }

    // function update_one_category($id, $categoryname){
    //     // return true or false
    //     return $this->db_query("update categories set cat_name='$categoryname' where cat_id = '$id'");
    
    // }


// products

// add product
    function add_product(/*$product_cat,*/ /*$product_brand,*/ $product_title, $product_desc, $product_price,  /*$product_image*/$product_keywords){
        //return $this->db_query("INSERT into products(product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')");
        // return $this->db_query("INSERT into products(product_title, product_price, product_desc, product_image, product_keywords) values ('$product_title','$product_price','$product_desc','$product_image','$product_keywords')");
        return $this->db_query("INSERT into service (service_name, service_desc, service_price, service_keywords) values ('$product_title','$product_desc','$product_price','$product_keywords')");

    }


// update one product
    // function update_one_product ($id, /*$product_cat,*/ $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords) {
        function update_one_product ($id, $product_title, $product_desc, $product_price, $product_keywords) {

        // return true or false
        //return $this->db_query("update products set product_cat = '$product_cat', product_brand = '$product_brand', product_title = '$product_title', product_price = '$product_price', product_desc = '$product_desc', product_image = '$product_image', product_keywords = '$product_keywords' where product_id = '$id'");
        return $this->db_query ("service_name = '$product_title', service_desc = '$product_desc', service_price = '$product_price', service_image = '$product_keywords' where product_id = '$id'");

    }

//select all products and inner joins the product_brand on the brand_id in the brands table, same for categories.
    function select_all_products (){
        //returns true or false
        // return $this->db_fetch_all("select * from products inner join brands on product_brand = brand_id inner join categories on product_cat = cat_id");
        return $this->db_fetch_all("select * from service ");

    }

//select one row from the products column inner join brand table and category table.

    function select_one_product($id){
        //return $this->db_fetch_one("select * from products inner join brands on product_brand = brand_id inner join categories on product_cat = cat_id where product_id = '$id'");
        return $this->db_fetch_one("select * from service where service_id = '$id'");

    }

   
    
}
