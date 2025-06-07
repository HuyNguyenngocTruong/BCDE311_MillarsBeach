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
        if (isset($_SESSION['userID'])) {
            $this->userID = $_SESSION['userID'];  
            $this->userName = $_SESSION['userName'] ?? null;
 
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
            return '<button type="submit" class="px-4 py-2 text-sm rounded-sm font-extrabold text-[#228B22] border hover:bg-[#222222] hover:text-white">
                <a href="login.php" class="text-green-900 hover:text-green-600 duration-300">Login</a>
            </button>';
        }

        // Generate role-specific login information
        return '
        <span class="text-[black] font-bold hidden sm:block">Hello, ' . $this->userName . '</span>
        <form action="logout.php" method="post" style="display:inline;">
            <button type="submit" class="px-4 py-2 text-sm rounded-sm font-extrabold text-[#228B22] border hover:bg-[#222222] hover:text-white">
                Log Out
            </button>
        </form>
    ';
    }
}


