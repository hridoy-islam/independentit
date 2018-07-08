<?php 

class admin{
    private $db_connect;
    public function __construct() {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'eshopper';
    $this->db_connect = mysqli_connect($host, $user, $password, $database);

    if (!$this->db_connect) {

    die("Connection Fail".mysqli_error($this->db_connect));
        }
    }
    
    public function admin_login_check($data){
        $email_address = $data['email_address'];
        $password = md5($data['password']);
        
        
        
        $sql = "SELECT * FROM tbl_admin WHERE admin_address='$email_address' AND admin_password='$password'";
        
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            $admin_info = mysqli_fetch_assoc($query_result);
            if ($admin_info) {
                session_start();
                $_SESSION['admin_name'] = $admin_info['admin_name'];
                $_SESSION['admin_id'] = $admin_info['admin_id'];
                
                header("location: admin_master.php");
            }
            else {
                $message = "You have entered Wrong Email or Password";
                return $message;
            }
        }
         
    }
    
    
    public function save_catagory($data){
        $sql = "INSERT INTO tbl_catagory (catagory_title, catagory_desc, publication_status) VALUES ('$data[catagory_title]','$data[catagory_desc]', '$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Catagory Info crated sucessfully";
            return $message;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function select_all_catagory_info() {
        $sql = "SELECT * FROM tbl_catagory";
        if (mysqli_query($this->db_connect, $sql)) {
           $query_result = mysqli_query($this->db_connect, $sql);
           return $query_result;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    
    public function unpublished_catagory_info($catagory_id){
        $sql = "UPDATE tbl_catagory SET publication_status=0 WHERE catagory_id='$catagory_id'";
        if (mysqli_query($this->db_connect, $sql)) {
           $message = "Catagory Unpublished Sucessfully";
           return $message;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function published_catagory_info($catagory_id){
        $sql = "UPDATE tbl_catagory SET publication_status=1 WHERE catagory_id='$catagory_id'";
        if (mysqli_query($this->db_connect, $sql)) {
           $message = "Catagory Published Sucessfully";
           return $message;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function select_catagory_by_id($cat_id) {
        $sql = "SELECT * FROM tbl_catagory WHERE catagory_id='$cat_id'";
        if (mysqli_query($this->db_connect, $sql)) {
           $query_result = mysqli_query($this->db_connect, $sql);
           return $query_result;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    
    public function update_catagory_info($data){
        $sql = "UPDATE tbl_catagory SET catagory_title='$data[catagory_title]', catagory_desc='$data[catagory_desc]', publication_status='$data[publication_status]' WHERE catagory_id='$data[catagory_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            $_SESSION['message'] = 'Catagory Info Update Sucessfully';
            header('location: managecatagory.php');
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function delete_catagory_info($catagory_id) {
        $sql="DELETE FROM tbl_catagory WHERE catagory_id='$catagory_id'" ;
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Catagory DELETE Sucessfully';
            return $message;
            
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    
    
    
    
    public function save_menufecture($data){
        $sql = "INSERT INTO tbl_menufecture (menufecture_name, menufecture_desc, publication_status) VALUES ('$data[menufecture_name]','$data[menufecture_desc]', '$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Menufecture Info crated sucessfully";
            return $message;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    
    public function select_all_menufecture_info() {
        $sql = "SELECT * FROM tbl_menufecture";
        if (mysqli_query($this->db_connect, $sql)) {
           $query_result = mysqli_query($this->db_connect, $sql);
           return $query_result;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    
     public function unpublished_menufecture_info($menufecture_id){
        $sql = "UPDATE tbl_menufecture SET publication_status=0 WHERE menufecture_id='$menufecture_id'";
        if (mysqli_query($this->db_connect, $sql)) {
           $message = "Menufecture Unpublished Sucessfully";
           return $message;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function published_menufecture_info($menufecture_id){
        $sql = "UPDATE tbl_menufecture SET publication_status=1 WHERE menufecture_id='$menufecture_id'";
        if (mysqli_query($this->db_connect, $sql)) {
           $message = "Menufecture Published Sucessfully";
           return $message;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function select_menufecture_by_id($men_id) {
        $sql = "SELECT * FROM tbl_menufecture WHERE menufecture_id='$men_id'";
        if (mysqli_query($this->db_connect, $sql)) {
           $query_result = mysqli_query($this->db_connect, $sql);
           return $query_result;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function update_menufecture_info($data){
        $sql = "UPDATE tbl_menufecture SET menufecture_name='$data[menufecture_name]', menufecture_desc='$data[menufecture_desc]', publication_status='$data[publication_status]' WHERE menufecture_id='$data[menufecture_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            $_SESSION['message'] = 'Menufecture Info Update Sucessfully';
            header('location: managemenufecture.php');
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function delete_menufecture_info($menufecture_id) {
        $sql="DELETE FROM tbl_menufecture WHERE menufecture_id='$menufecture_id'" ;
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Menufecture DELETE Sucessfully';
            return $message;
            
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function save_product_info($data) {
        
        $directory = '../asset/product/';
        $target_file = $directory.$_FILES['product_image']['name'];
        $filetype = pathinfo($target_file, PATHINFO_EXTENSION);
        $filesize = $_FILES['product_image']['size'];
        $image = getimagesize($_FILES['product_image']['tmp_name']);
        if($image){
            if(file_exists($target_file)){
                die("Image Exist");
            }
            else {
                if($filesize>5242880){
                    die ("File To Large");
                }
                else{
                    if ($filetype != 'jpg' && $filetype != 'png') {
                        die ("File Type Not valid");
                    }
                    else{
                        
                        $sql = "INSERT INTO tbl_product (product_name,catagory_id,menufecture_id,product_price,stock_amount,min_stock_amount,product_short_desc,product_long_desc,product_image,publication_status) VALUES ('$data[product_name]','$data[catagory_id]','$data[menufecture_id]','$data[product_price]','$data[stock_amount]','$data[min_stock_amount]','$data[product_short_desc]','$data[product_long_desc]', '$target_file', '$data[publication_status]' )";
                        if(mysqli_query($this->db_connect, $sql)){
                            move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file);
                            $message = "Product Added Sucessfully";
                            return $message;
                        }
                        else{
                            die("Query Error".mysqli_error($this->db_connect));
                        }
                        
                    }
                }
            }
        }
        
        
    }
    public function select_all_product_info() {
        $sql = "SELECT p.product_id, p.product_name, p.product_price,p.stock_amount,p.product_short_desc,p.product_image,p.publication_status, c.catagory_title, m.menufecture_name FROM tbl_product as p, tbl_catagory as c, tbl_menufecture as m WHERE p.catagory_id=c.catagory_id AND p.menufecture_id=m.menufecture_id";
        if (mysqli_query($this->db_connect, $sql)) {
           $query_result = mysqli_query($this->db_connect, $sql);
           return $query_result;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function select_product_by_id($product_id) {
        $sql = "SELECT p.*, c.catagory_title, m.menufecture_name FROM tbl_product as p, tbl_catagory as c, tbl_menufecture as m WHERE p.catagory_id=c.catagory_id AND p.menufecture_id=m.menufecture_id AND p.product_id='$product_id'";
        if (mysqli_query($this->db_connect, $sql)) {
           $query_result = mysqli_query($this->db_connect, $sql);
           return $query_result;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    
    
    public function unpublished_product_info($product_id){
        $sql = "UPDATE tbl_product SET publication_status=0 WHERE product_id='$product_id'";
        if (mysqli_query($this->db_connect, $sql)) {
           $message = "Product Unpublished Sucessfully";
           return $message;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function published_product_info($product_id){
        $sql = "UPDATE tbl_product SET publication_status=1 WHERE product_id='$product_id'";
        if (mysqli_query($this->db_connect, $sql)) {
           $message = "Product Published Sucessfully";
           return $message;
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    public function delete_product_info($product_id) {
        $sql="DELETE FROM tbl_product WHERE product_id='$product_id'" ;
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Product DELETED Sucessfully';
            return $message;
            
        }
        else {
            die("Query Error".mysqli_error($this->db_connect));
        }
    }
    
    
    public function admin_logout(){ 
        unset($_SESSION['admin_name']);
        unset($_SESSION['admin_id']);
        header("location: index.php");
    }
    
    
    
    
}
