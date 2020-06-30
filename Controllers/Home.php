<?php

    class Home extends Controllers{//extends es para eredar de Controllers

        public function __construct()
        {
            parent::__contruct();
        }

        public function home($params){
            
            $data['page_id'] = 1;
            $data['tag_page'] = "Home";
            $data['page_title'] = "Pagina principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa dolore atque obcaecati, accusamus molestias debitis suscipit officia laborum accusantium corrupti ut, numquam perferendis repellat tenetur, earum beatae possimus laboriosam. Ad?";
            $this->views->getView($this,"home",$data);
        }

    }

?>