<div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-circle"></i></span> Edit Profile
            </p>
        </header>
        <div class="card-content">
            <form>
                <div class="field">
                    <label class="label">Avatar</label>
                    <div class="field-body">
                        <div class="field file">
                            <label class="upload control">
                                <a class="button blue text-white">
                                Upload
                                </a>
                                <input type="file">
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="field">
                    <label class="label">Name</label>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input type="text" autocomplete="on" name="name" value="John Doe" class="input" required>
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
                                <input type="email" autocomplete="on" name="email" value="user@example.com" class="input" required>
                            </div>
                            <p class="help">Required. Your e-mail</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button green">
                        Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account"></i></span> Profile
            </p>
        </header>
        <div class="card-content">
            <div class="image w-48 h-48 mx-auto">
                <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
            </div>
            <hr>
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input type="text" readonly value="John Doe" class="input is-static">
                </div>
            </div>
            <hr>
            <div class="field">
                <label class="label">E-mail</label>
                <div class="control">
                    <input type="text" readonly value="user@example.com" class="input is-static">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-lock"></i></span> Change Password
        </p>
    </header>
    <div class="card-content">
        <form>
            <div class="field">
                <label class="label">Current password</label>
                <div class="control">
                    <input type="password" name="password_current" autocomplete="current-password" class="input" required>
                </div>
                <p class="help">Required. Your current password</p>
            </div>
            <hr>
            <div class="field">
                <label class="label">New password</label>
                <div class="control">
                    <input type="password" autocomplete="new-password" name="password" class="input" required>
                </div>
                <p class="help">Required. New password</p>
            </div>
            <div class="field">
                <label class="label">Confirm password</label>
                <div class="control">
                    <input type="password" autocomplete="new-password" name="password_confirmation" class="input" required>
                </div>
                <p class="help">Required. New password one more time</p>
            </div>
            <hr>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button green">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>