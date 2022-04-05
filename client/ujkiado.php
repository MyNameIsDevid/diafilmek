<div class="container">
    <h2 class="text-center mb-5">Új kiadó hozzáadása</h2>

    <form>
        <div class="form-group">
            <input type="text" name="" id="bev" class="form-control mb-2" placeholder="Kiadó neve">
            <input type="button" value="Hozzáadás" class="btn btn-success mb-2" onclick="Hozzaad();">
            <p id="status"></p>
        </div>
    </form>

    <script>
        function Hozzaad(){
            let x = document.getElementById("bev").value;
            if(x.length != 0){
                fetch(`http://localhost/diafilmek/server/setKiadok.php?kiado=${x}`)
                .then(res => res.json())
                .then(data => {
                    if(data > 0){
                        document.getElementById("status").innerHTML = "Sikeres beillesztés";
                    }else{
                        document.getElementById("status").innerHTML = "Sikertelen beillesztés";
                    }
                })
                .catch(err => console.log(err));
            }
        }
    </script>

</div>