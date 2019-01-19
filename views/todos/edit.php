<?php if ( ! empty($this->todo)) : ?>
    <form action="<?= BASE_URL . "todos/edit"; ?>" method="post">
        <input type="hidden" name="id" value="<?= $this->todo['id']; ?>">
        <div class="form-group">
            <label for="name">Todo Name</label>
            <input class="form-control" type="text" name="name" id="name" value="<?= $this->todo['name']; ?>" placeholder="Enter Todo Name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"><?= $this->todo['description']; ?></textarea>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit Todo">
    </form>
<?php else : ?>
    <p class="alert alert-warning" role="alert">No todo selected for editing</p>
<?php endif; ?>