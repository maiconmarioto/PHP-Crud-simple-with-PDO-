<br><br>
<div class="row">
    <form class="col s12" method="POST" action="/">
        <input type="hidden" value="create" name="action">
        <div class="row">
            <div class="input-field col s6">
                <input name="first_name" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" name="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" name="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" name="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
        <p>

        </p>
        <button type="submit" class="btn waves-effect waves-light" > Submit <i class="material-icons right">send</i> </button>
    </form>
</div>