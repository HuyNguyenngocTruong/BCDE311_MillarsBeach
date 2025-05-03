<?php
require_once 'framework/htmlTemplate.php';
require_once 'siteFunctions/commonFunctions.php';

class MasterPage {

    var $db;
    var $title;
    var $userID;
    var $userName;
    var $role;
    var $content;
    var $userModel;
    var $UserRoleModel;
    
    public function __construct() {
        $this->title = 'Untitled';
        $this->userID = null;
        $this->userName = null;
        $this->role = null;
        $this->content = "<p>Content not yet specified</p>";
        $this->db = getDatabase();
        $this->init();
    }
    
    private function init() {
        session_save_path('.\sessions');
        session_start();  

        // Check if user ID is stored in session
        if (isset($_SESSION['UserID'])) {
            $this->userID = $_SESSION['UserID'];    
        }

    }
      
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setContent($content) {
        $this->content = $content;
    }

    public function getDB() {
        return $this->db;
    }
    
    public function getHtml() {       
        $pg = new HtmlTemplate('index.html');
        return $pg->getHtml(array(
            'pagename' => $this->title,
            'login' => $this->getLoginPanel(),
            'content' => $this->content
        ));
    }

    public function getUser() {
		return $this->userName;
	}
    
    public function logout() {
        $this->userID = null;
        $this->userName = null;
        session_destroy();
    }
    
    private function getLoginPanel() {
        if ($this->userID == null) {
            return '<a href="login.php" class="text-green-900 hover:text-green-600 duration-300">Login</a>';
        }

        // Generate role-specific login information
        $html = '<span class="login">Logged in as <em>' . $this->userName . '</em></span>';
        
        $html .= '<a href="logout.php" class="text-green-900 hover:text-green-600 duration-300">Log out</a>';
        $html .= '<a href="CreatePost.html" class="text-green-900 hover:text-green-600 duration-300">Create a post</a>';
        $html .= '</span>';
        
        return $html;
    }
}


