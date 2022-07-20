<?php 
session_start();

class Users
{
	
	private $con;

	function __construct()
	{
		include_once("config.php");
		$db = new Database();
		$this->con = $db->connect();
	}

    public function getUsers(){
        $q = $this->con->query("SELECT * FROM users");
        $ar = [];
        if ($q->num_rows > 0) {
            while ($row = $q->fetch_assoc()) {
                $ar[] = $row;
            }
        }
        return ['status'=> 202, 'message'=> $ar];
    }

    public function deleteUsers($cid = null){
		if ($cid != null) {
			$q = $this->con->query("DELETE FROM users WHERE id = '$id'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Category removed'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid cattegory id'];
		}

	}

    public function updateUsers($post = null){
		extract($post);
		if (!empty($id) && !empty($username)) {
			$q = $this->con->query("UPDATE users SET id = '$id' WHERE id = '$id'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Category updated'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid id'];
		}

	}

    if (isset($_POST['GET_USERS'])) {
        $p = new Users();
        echo json_encode($p->getUsers());
        exit();
        
    }

    if (isset($_POST['delete_users'])) {
        if (!empty($_POST['id'])) {
            $p = new Users();
            echo json_encode($p->deleteUsers($_POST['cd']));
            exit();
        }else{
            echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
            exit();
        }
    }
    
    if (isset($_POST['edit_users'])) {
        if (!empty($_POST['id'])) {
            $p = new Users();
            echo json_encode($p->updateUsers($_POST));
            exit();
        }else{
            echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
            exit();
        }
    }
}
