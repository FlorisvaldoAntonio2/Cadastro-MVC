<?php

require_once 'HTML/Header.php';

?>

    <form action="/cadastrar" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php

require_once 'HTML/Footer.php';

?>