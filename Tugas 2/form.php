<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulir Pendaftaran Registrasi</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Leckerli+One&family=Lilita+One&family=Quicksand:wght@400;700&display=swap');

  body {
    font-family: 'Quicksand', sans-serif;
    margin: 0.5%;
    padding: auto;
    background-color: #00acfc;
    scroll-behavior: smooth;
  }

  h2 {
    text-align: center;
    text-decoration: underline;
  }

  /* styling form */
  form {
    width: 50%;
    margin: 30px auto auto auto;
    padding: 30px;

    border: 1.5px black;
    border-radius: 10px;
    background-color: rgb(255, 255, 255);
    font-size: 15px;
  }

  input[type='text'],
  input[type='email'],
  input[type='date'] {
    font-family: 'Quicksand', sans-serif;
    width: 60%;
  }

  textarea,
  select {
    font-family: 'Quicksand', sans-serif;
    width: 70%;
  }

  #simpan {
    background: rgb(0, 149, 255);
    color: rgb(255, 255, 255);
  }

  #batal {
    background: rgb(255, 0, 0);
    color: rgb(255, 255, 255);
  }
</style>

<body>
  <div>
    <form method="POST" action="output.php">
      <h2>Formulir Pendaftaran Registrasi</h2>
      <table>
        <tr>
          <td>Nama:</td>
          <td><input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required /></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="email" id="email" placeholder="Masukkan Email" required /></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td><input type="date" name="date" id="date" placeholder="Masukkan Tanggal Lahir" required /></td>
        </tr>
        <tr>
          <td>Jenis Kelamin:</td>
          <td>
            <input type="radio" name="jenis_kelamin" value="laki-laki" id="laki-laki" required />
            <label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="perempuan" id="perempuan" />
            <label for="perempuan">Perempuan</label>
          </td>
        </tr>
        <tr>
          <td>Hobi:</td>
          <td>
            <input type="checkbox" name="hobi1" value="berenang" id="berenang" />
            <label for="berenang">Berenang</label>
            <input type="checkbox" name="hobi2" value="futsal" id="futsal" />
            <label for="futsal">Membaca</label>
            <input type="checkbox" name="hobi3" value="ngoding" id="ngoding" />
            <label for="ngoding">Ngoding</label>
            <br />
            <input type="checkbox" name="hobi4" value="lainnya" id="lainnya" />
            <label for="lainnya">Lainnya</label>
          </td>
        </tr>
        <tr>
          <td>Pendidikan Terakhir:</td>
          <td>
            <select name="pendidikan" id="pendidikan" required>
              <option value="">-- Pilih --</option>
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
              <option value="Diploma">Diploma</option>
              <option value="Sarjana">Sarjana</option>
              <option value="Magister">Magister</option>
              <option value="Doktor">Doktor</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Alamat:</td>
          <td>
            <textarea name="alamat" id="alamat" rows="5"></textarea>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit" id="simpan" value="Simpan" /> <input type="reset" name="reset" id="batal" value="Batal" /></td>
        </tr>
        <!-- <tr>
          <td><input type="button" value="Kirim"></td>
        </tr> -->
      </table>
    </form>
  </div>
</body>

</html>