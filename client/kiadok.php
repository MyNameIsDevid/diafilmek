<div class="container">
    
    <h2 class="text-center mb-5">Kiadók által kiadott diafilmek</h2>

    <form>
        <div class="form-group">
            <select name="" id="select" class="form-control"></select>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Cím</th>
                <th>Kiadás éve</th>
                <th>Kockák száma</th>
            </tr>
        </thead>
        <tbody id="tb">

        </tbody>
    </table>

    <script>
        fetch(`http://localhost/diafilmek/server/getKiadok.php?cmd=get`)
        .then(res => res.json())
        .then(data => {
            let html = "";

            data.forEach(x => {
                html += `<option value="${x["id"]}">${x["nev"]}</option>`;
            });

            document.getElementById("select").innerHTML = html;

        })
        .catch(err => console.log(err));

        document.getElementById("select").addEventListener("change", (evt) => {
            fetch(`http://localhost/diafilmek/server/getKiadok.php?cmd=${evt.target.value}`)
            .then(res => res.json())
            .then(data => {
                let html = "";

                data.forEach(x => {
                    html += `<tr><td>${x["cim"]}</td><td>${x["kiadas"]}</td><td>${x["kocka"]}</td></tr>`;
                });

                document.getElementById("tb").innerHTML = html;

            })
            .catch(err => console.log(err));
        }, false);

    </script>
</div>