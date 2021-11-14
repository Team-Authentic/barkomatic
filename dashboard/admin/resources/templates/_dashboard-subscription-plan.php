<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <span class="icon"><i class="mdi mdi-arrow-left"></i></span>
            <li class="help" style="font-weight:normal;color:rgb(59, 130, 246);font-size:1.275rem;"><small><a href="index.php?page=dashboard">Back to Dashboard</a></small></li>
        </ul>
        <a href="https://justboil.me/" onclick="alert('Coming soon'); return false" target="_blank" class="button blue">
            <span class="icon"><i class="mdi mdi-card-plus-outline"></i></span>
            <span>ADD SUBSCRIPTION</span>
        </a>
    </div>
</section>

<div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
    <div class="card" style="height:542px;overflow:scroll;overflow-x: hidden;">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-clipboard-list-outline"></i></span> Subscription Plan
            </p>
        </header>
        <div class="card-content" id="card-content-i">
            <form>
                <div class="field">
                    <div class="control" style="text-align:right;">
                        <span style="padding-top:1px;padding-bottom:1px;background:#000;color:white;padding-left: 8px;padding-right: 8px;font-size: 0.775rem;border-radius:2px;font-weight:bolder;">Draft</span>
                    </div>
                </div>
                <div class="field">
                    <label class="">High</label>
                    <p class="plan-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A exercitationem culpa, distinctio dicta molestiae quibusdam minus quisquam iste blanditiis neque eligendi unde. Harum qui neque assumenda, nobis commodi molestias voluptate!</p>
                </div>
                <div class="field">
                    <p class="plan-frequency">Per Month</p>
                    <p class="plan-price">₱2,000</p>
                </div>
                <div class="field">
                    <div class="control" style="text-align:right;">
                        <button type="submit" class="button blue" style="padding-top: 2px;padding-bottom: 2px;">Delete</button>
                        <button type="submit" class="button blue" style="padding-top: 2px;padding-bottom: 2px;">Activate</button>
                        <button type="submit" class="button blue" style="padding-top: 2px;padding-bottom: 2px;">Edit</button>
                    </div>
                </div>
            </form>
        </div>
        <hr>
        <div class="card-content" id="card-content-i">
            <form>
                <div class="field">
                    <div class="control" style="text-align:right;">
                        <span style="padding-top:1px;padding-bottom:1px;background:yellowgreen;color:white;padding-left:8px;padding-right:8px;font-size:0.775rem;border-radius:2px;font-weight:bolder;">Active</span>
                    </div>
                </div>
                <div class="field">
                    <label class="">Medium</label>
                    <p class="plan-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A exercitationem culpa, distinctio dicta molestiae quibusdam minus quisquam iste blanditiis neque eligendi unde. Harum qui neque assumenda, nobis commodi molestias voluptate!</p>
                </div>
                <div class="field">
                    <p class="plan-frequency">Per Month</p>
                    <p class="plan-price">₱1,500</p>
                </div>
                <div class="field">
                    <div class="control" style="text-align:right;">
                        <button type="submit" class="button blue" style="padding-top: 2px;padding-bottom: 2px;">Cancel Plan</button>
                        <button type="submit" class="button blue" style="padding-top: 2px;padding-bottom: 2px;">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-folder-edit-outline"></i></span> Edit Subscription Plan
            </p>
        </header>
        <div class="card-content">
            <div class="field">
                <label class="label">Plan Type</label>
                <div class="control">
                    <input type="text"  value="" class="input is-static is-small">
                </div>
            </div>
            <hr>
            <div class="field">
                <label class="label">Description</label>
                <div class="control">
                    <textarea name="" id="" cols="30" rows="10" class="input is-static"></textarea>
                </div>
            </div>
            <hr>
            <div class="field">
                <label class="label">Frequency</label>
                <div class="control">
                    <input type="text"  value="" class="input is-static">
                </div>
            </div>
            <hr>
            <div class="field">
                <label class="label">Price</label>
                <div class="control">
                    <input type="text"  value="" class="input is-static">
                </div>
            </div>
            <div class="field">
                <div class="control" style="text-align:left;">
                    <button type="submit" class="button blue" style="padding-top: 2px;padding-bottom: 2px;">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>