<?php  $this->view("includes/header"); ?>


<div class="container-fluid">
    <div class="mx-auto shadow div-login">

        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" id="btn-sub">Entrar</button>

            <div class="mb-3 form-check div-lk-criar-conta">
                <a href="#" class="btn btn-outline-dark" id="lk-criar-conta">Criar conta</a>
            </div>

    </form>


    </div>
</div>

<?php   $this->view("includes/footer"); ?>