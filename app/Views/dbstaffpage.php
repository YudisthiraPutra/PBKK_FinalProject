<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grand Celestia hotel</title>

    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel&family=Courgette&family=Poppins:ital,wght@0,200;0,400;1,300&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;1,8..60,400&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container adb">
      <div class="heading">
        <h1 class="adb-title">Dashboard</h1>
        <a href="admindashboard">Back</a>
      </div>
      <div class="content">
        <table>
          <thead>
            <tr>
              <th style="text-decoration: underline" colspan="1">NIK</th>
              <th style="text-decoration: underline" colspan="1">Full Name</th>
              <th style="text-decoration: underline" colspan="1">
                Phone Number
              </th>
              <th style="text-decoration: underline" colspan="1">Email</th>
              <th style="text-decoration: underline" colspan="1">Position</th>
            </tr>
          </thead>
          <tbody>
            <?php if($Pegawai): ?>
            <?php foreach($Pegawai as $item): ?>
            <tr>
              <td><?php echo $item['NIK_Pegawai']; ?></td>
              <td><?php echo $item['Nama_Pegawai']; ?></td>
              <td><?php echo $item['Telp_Pegawai']; ?></td>
              <td><?php echo $item['Email_Pegawai']; ?></td>
              <td><?php echo $item['Posisi']; ?></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
