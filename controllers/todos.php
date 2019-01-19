<?php

    class Todos extends Controller {
        public function __construct() {
            parent::__construct();

            $this->loadModel('todos');
        }

        public function add() {
            if (isset($_POST['submit'])) {
                unset($_POST['submit']);

                $this->view->id = $this->model->addTodo($_POST);
            }

            $this->view->render('todos/add');
        }

        public function update($id) {
            $this->view->todo = $this->model->getTodo($id);
            $this->view->render('todos/edit');
        }

        public function edit() {
            if (isset($_POST['submit'])) {
                unset($_POST['submit']);

                $this->model->editTodo($_POST);
            }

            $this->redirectTo('todos/get');
        }

        public function get() {
            $this->view->todos = $this->model->getTodos();
            $this->view->render('todos/get');
        } 

        public function complete($id) {
            $this->model->completeTodo($id);
            $this->redirectTo('todos/get');
        }

        public function delete($id) {
            $this->model->deleteTodo($id);
            $this->redirectTo('todos/get');
        }
    }