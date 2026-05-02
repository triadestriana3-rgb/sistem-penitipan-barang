let total = 0;

function tambahData() {
  let nama = document.getElementById("nama").value;
  let prodi = document.getElementById("prodi").value;
  let email = document.getElementById("email").value;
  let tingkat = document.getElementById("tingkat").value;
  let hp = document.getElementById("hp").value;
  let barang = document.getElementById("barang").value;

  if(nama === "" || hp === "" || barang === "") {
    alert("Isi data dulu!");
    return;
  }

  let table = document.getElementById("dataTable");

  let row = `
    <tr>
      <td>${nama}</td>
      <td>${prodi}</td>
      <td>${email}</td>
      <td>${tingkat}</td>
      <td>${hp}</td>
      <td>${barang}</td>
      <td style="color:green;">Disimpan</td>
    </tr>
  `;

  table.innerHTML += row;
}