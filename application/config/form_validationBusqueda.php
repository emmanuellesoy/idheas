<?php $config = array(
			'login'=>array(
               array(
                     'field'   => 'usuario', 
                     'label'   => 'usuario', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'contrasenia', 
                     'label'   => 'contrasenia', 
                     'rules'   => 'required'
                  )
            ),
            
            'menu'=>$config = array(
               array(
                     'field'   => 'username', 
                     'label'   => 'Username', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'password', 
                     'label'   => 'Password', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'passconf', 
                     'label'   => 'Password Confirmation', 
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'email', 
                     'label'   => 'Email', 
                     'rules'   => 'required'
                  )
            )
            
            
     );
     
?>
