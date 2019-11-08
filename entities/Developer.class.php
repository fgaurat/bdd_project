<?php


class Developer
{


    private $id;
    private $name;
    private $firstName;
    private $project;

	public function __construct($name='',$firstName='',$project=null,$id=0){
        $this->id=$id;
        $this->name=$name;
        $this->firstName=$firstName;
        $this->project=$project;
	}


	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getFirstName(){
		return $this->firstName;
	}

	public function setFirstName($firstName){
		$this->firstName = $firstName;
	}

	public function getProject(){
		return $this->project;
	}

	public function setProject($project){
		$this->project = $project;
	}

    public function __toString()
    {
        return $this->name.' '.$this->firstName;
    }

}