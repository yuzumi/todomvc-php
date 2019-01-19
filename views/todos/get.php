<?php if (count($this->todos) === 0) : ?>
    <div class="alert alert-warning" role="alert">
        Todo list is empty
    </div>
    <a class="btn btn-primary" href="<?= BASE_URL . 'todos/add'; ?>">Add Todo</a>
<?php else : ?>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Todo Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->todos as $todo) : ?>
                    <?php 
                        $todo_status_int = intval($todo['status']);
                        $todo_status_str = $todo_status_int === 1 ? 'Completed' : 'In process'; 
                        
                        $complete_link_classname = "btn btn-primary";

                        if ($todo_status_int === 1) {
                            $complete_link_classname .= " disabled";
                        }

                        $todo_name = $todo['name'] ?? 'No name';
                        $todo_description = $todo['description'] ?? 'No description';
                    ?>
                    <tr>
                        <td><?= $todo['id']; ?></td>
                        <td><?= $todo_name; ?></td>
                        <td><?= $todo_description; ?></td>
                        <td><?= $todo_status_str; ?></td>
                        <th>
                            <a class="<?= $complete_link_classname; ?>" href="<?= "complete/" . $todo['id']; ?>">Complete</a>
                        </th>
                        <td>
                            <a class="btn btn-success" href="<?= "update/" . $todo['id']; ?>">Update</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="<?= "delete/" . $todo['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>