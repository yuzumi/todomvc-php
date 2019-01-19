<?php if ( ! empty($this->id)) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Added new todo</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<form action="add" method="post">
    <div class="form-group">
        <label for="name">Todo Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Enter Todo Name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Add Todo">
</form>