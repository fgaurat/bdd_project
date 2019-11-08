<?php
    include_once('../includes/const.php');
    include_once('../entities/Project.class.php');
    class ProjectRepository
    {

        private $pdo;

        public function __construct()
        {
            $this->pdo = new PDO(
                'mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB,
                MYSQL_USER,
                MYSQL_PASSW);
        }


        public function findAll()
        {
            
            $query = 'SELECT id,name FROM projects';
            $resultSet = $this->pdo->query($query);
            
            $list = [];
            foreach($resultSet as $row){
                $p = new Project($row['name'],[],$row['id']);
                $list[]=$p;
            }
            return $list;
        }

        public function findById($id){
            $resultUser = $this->pdo->query("SELECT id,name FROM projects WHERE id=$id");
            $u = $resultUser->fetch();
            $p = new Project($u['name'],[],$u['id']);
            return $p;
        }

        public function deleteOne($id){
            $count = $this->pdo->exec("DELETE FROM projects WHERE id = $id");
            return $count;
        }

        public function deleteMany($arr_id){
            $delete = implode(',',$arr_id);
            $count = $this->pdo->exec("DELETE FROM projects WHERE id IN ($delete)");
            return $count;
        }
        
        public function save($project){
            
            $name = $project->getName();
            $id = $project->getId();

            if($id==0){
                $this->pdo->exec("INSERT INTO projects(name) VALUES('$name')");
            }
            else{
                $this->pdo->exec("UPDATE projects SET name = '$name' WHERE id = $id");
            }

        }
    }

    