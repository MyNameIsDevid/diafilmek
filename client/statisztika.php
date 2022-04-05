<div class="container">
    <h2 class="text-center mb-5">Eggyes években kiadott filmek száma</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Év</th>
                <th>Darab</th>
            </tr>
        </thead>
        <tbody id="tb">

        </tbody>
    </table>

    <script>
        fetch("http://localhost/diafilmek/server/getStatisztika.php")
        .then(res => res.json())
        .then(data => {
            let html = "";

            data.forEach(x => {
                html += `<tr><td>${x["kiadasiev"]}</td><td>${x["db"]}</td></tr>`;
            });
            document.getElementById("tb").innerHTML = html;
        })
        .catch(err => console.log(err));
    </script>

</div>