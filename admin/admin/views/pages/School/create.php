


<div class="card">
    <div class="card-body">
        <form method="post" action="<?php echo $base_url?>/school/save">
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" name="name" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text"  name="email" class="form-control" id="email">
            </div>
             <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text"  name="phone" class="form-control" id="phone">
            </div>
            
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text"  name="address" class="form-control" id="address">
            </div>
            <input type="submit"   name="btn_submit" class="btn btn-primary" >
        </form>
    </div>
</div>