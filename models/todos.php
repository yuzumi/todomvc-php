<?php

    class TodosModel extends Model {
        public function addTodo($todo) {
            ksort($todo);

            $columns = implode(', ', array_keys($todo));
            $values = ':' . implode(', :', array_keys($todo));

            $stmt = $this->db->prepare("INSERT INTO todos ($columns) VALUES ($values);");

            foreach ($todo as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }

            $stmt->execute();

            return $this->db->lastInsertId();
        }

        public function getTodo($id) {
            $stmt = $this->db->prepare("SELECT * FROM todos WHERE id = :id;");
            
            $stmt->bindValue(":id", $id);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function editTodo($todo) {
            $stmt = $this->db->prepare("UPDATE todos SET name = :name, description = :description WHERE id = :id;");

            $stmt->execute($todo);
        }

        public function completeTodo($id) {
            $stmt = $this->db->prepare("UPDATE todos SET status = :status WHERE id = :id;");

            $stmt->bindValue(":status", 1);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
        }

        public function deleteTodo($id) {
            $stmt = $this->db->prepare("DELETE FROM todos WHERE id = :id;");
            
            $stmt->bindValue(":id", $id);
            $stmt->execute();
        }

        public function getTodos() {
            return $this->db
                ->query("SELECT * FROM todos;")
                ->fetchAll(PDO::FETCH_ASSOC);
        }
    };