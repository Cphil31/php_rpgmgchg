	<?php 

	class User{
		private $id;
		private $email;
		private $createdAt;


		public function __construct($id,$email,$createdAt){
			$this->setId($id);
			$this->setEmail($email);
			$this->setCreatedAt($createdAt);
		}

//Getters recuperer les valeurs
		public function getId(){
			return $this->id;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getCreatedAt(){
			return $this->createdAt;
		}
  // Setters
		public function setId($id){
			$this->id = $id;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function setCreatedAt($createdAt){
			$this->createdAt = $createdAt;
		}

	};


	?>
