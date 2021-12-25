<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUsers">
    <i class="fas fa-user-plus"></i>
    Add User
</button>

<div class="modal fade" id="addUsers" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="addUsersLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUsersLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/user" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fname">First name</label>
                            <input type="text" class="form-control" name="fname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">Last name</label>
                            <input type="text" class="form-control" name="lname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="role_as">Role_as</label>
                        <select class="custom-select" name="role_as">
                            <option selected value="">Choose</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
