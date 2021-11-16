<div id="alert" class="alert alert-success lead ml-5 p-2" role="alert">
    <span id="res-icon"></span>
    <span id="res-message"></span>
</div>
<div class="row">
        <div class="col-3 p-0 card">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span> Create Account
                </p>
            </header>
            <div class="card-content">
                <form id="sh-owner-assign-task-form">
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" autocomplete="on" name="name_assign_role" id="name_assign_role" class="input" required>
                                </div>
                                <p class="help">Required. Your name</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">E-mail</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="email" autocomplete="on" name="email_assign_role" id="email_assign_role" class="input" required>
                                </div>
                                <p class="help">Required. Your e-mail</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Role Type</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" autocomplete="on" name="role_type_assign_role" id="role_type_assign_role" class="input" required>
                                </div>
                                <p class="help">Required. The role type</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <textarea name="description_assign_role" id="description_assign_role" class="input" cols="40" rows="30" required></textarea>
                                </div>
                                <p class="help">Required. The role description</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Username</label>
                        <div class="control">
                            <input type="text" autocomplete="new-password" name="username_assign_role" id="username_assign_role" class="input" required>
                        </div>
                        <p class="help">Required. New password</p>
                    </div>
                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input type="password" autocomplete="new-password" name="password_assign_role" id="password_assign_role" class="input" required>
                        </div>
                        <p class="help">Required. New password</p>
                    </div>
                    <div class="field">
                        <label class="label">Confirm password</label>
                        <div class="control">
                            <input type="password" autocomplete="new-password" name="password_confirmation_assign_role" id="password_confirmation_assign_role" class="input" required>
                        </div>
                        <p class="help">Required. Confirm password one more time</p>
                    </div>
                    <hr>
                    <div class="field">
                        <div class="control">
                            <button type="submit" name="sh-owner-create-acc-button" id="sh-owner-create-acc-button" class="button green">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-9 p-0 card">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account"></i></span> Role Details List
                </p>
            </header>
            <div class="card-content p-0">
                <div class="card has-table border-0">
                    <div class="card-content ">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Description</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="image-cell ">
                                        <div class="image ">
                                            <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg " class="rounded-full ">
                                        </div>
                                    </td>
                                    <td data-label="Name ">Rebecca Bauch</td>
                                    <td data-label="Company ">Daugherty-Daniel</td>
                                    <td data-label="City ">South Cory</td>
                                    <td data-label="Progress " class="progress-cell ">
                                        <progress max="100 " value="79 ">79</progress>
                                    </td>
                                    <td data-label="Created ">
                                        <small class="text-gray-500 " title="Oct 25, 2021 ">Oct 25, 2021</small>
                                    </td>
                                    <td class="actions-cell ">
                                        <div class="buttons right nowrap ">
                                            <button class="button small green --jb-modal " data-target="sample-modal-2 " type="button ">
                                        <span class="icon "><i class="mdi mdi-lead-pencil"></i></span>
                                    </button>
                                            <button class="button small red --jb-modal " data-target="sample-modal " type="button ">
                                        <span class="icon "><i class="mdi mdi-trash-can "></i></span>
                                    </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="table-pagination ">
                            <div class="flex items-center justify-between ">
                                <div class="buttons ">
                                    <button type="button " class="button active ">1</button>
                                    <button type="button " class="button ">2</button>
                                    <button type="button " class="button ">3</button>
                                </div>
                                <small>Page 1 of 3</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   