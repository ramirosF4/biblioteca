<?php include 'header.php';  ?>
    <div class = "container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Sistema de multas de biblioteca</h1>
                <p class="text-dange">
                    Restraso en libros  
                </p>
                <hr>
                <form action="multas.php" method="post" >
                    <p class="">¿ Cuantos dias de retraso tienes?</p>
                    <label for="dias"></label>
                    <input type="number" class = "form-control" id= "dias" name="dias" required>
                    <p class = "">¿Cuantos libros retrasados tienes?</p>
                    <label for="libros"></label>
                    <input type="libros" class = "form-control" id= "libros" name="libros" required>
                    <p> ¿Vas a entregar todos los libros? </p>
                    <select name="entregar" id="entregar" required>
                        <option value=""></option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                    <br>
                    <button class="btn btn-primary mt-3">Calcular multa</button>
                    <button type="reset" class="btn btn-danger mt-3 align">Limpiar</button>
                </form>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php';  ?>
    