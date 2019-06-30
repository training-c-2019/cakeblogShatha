

<?php
 class CommentController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }

    public function add() {
$this->autoRender=false;
    if ($this->request->is('post')) {
       $ID = $this->request->data['Comment']['post_id'];
        if ($this->Comment->save($this->request->data)) {
            $this->Flash->success(__('Your comment has been saved.'));
           
            return $this->redirect(array('controller' => 'posts','action' => 'view',$ID));
            
            
        }
    }
}
}
?>