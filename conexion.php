

<?php
// Datos de la conexión a la base de datos
$servername = "localhost"; // o la dirección de tu servidor de base de datos
$username = "root"; // tu usuario de base de datos
$password = ""; // tu contraseña
$dbname = "alumnos"; // el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Realizar la consulta para obtener 5 registros
$sql = "SELECT Id_alumno, Nombre_completo, Edad, Nombre_carrera FROM alumnos LIMIT 5";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Iniciar la tabla HTML
    echo "<table border='1'>
            <tr>
                <th>Id_alumno</th>
                <th>Nombre_completo</th>
                <th>Edad</th>
                <th>Nombre_carrera</th>
            </tr>";

    // Mostrar los resultados de la consulta
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['01'] . "</td>
                <td>" . $row['EDGAR JESUS ZAPATA ACOSTA '] . "</td>
                <td>" . $row['41'] . "</td>
                <td>" . $row['ING. DE DESARROLLO DE SOFTWARE'] . "</td>
              </tr>";
    }
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>" . $row['02'] . "</td>
              <td>" . $row['EMILIANO JUAREZ '] . "</td>
              <td>" . $row['50'] . "</td>
              <td>" . $row['ING DE ROBÓTICA'] . "</td>
            </tr>";
  }
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['03'] . "</td>
            <td>" . $row['SOFIA ZAPATA '] . "</td>
            <td>" . $row['30'] . "</td>
            <td>" . $row['VETERINARIA'] . "</td>
          </tr>";
}
while ($row = $result->fetch_assoc()) {
  echo "<tr>
          <td>" . $row['04'] . "</td>
          <td>" . $row['FERNANDO '] . "</td>
          <td>" . $row['35'] . "</td>
          <td>" . $row['DOCTOR GENERAL'] . "</td>
        </tr>";
}
while ($row = $result->fetch_assoc()) {
  echo "<tr>
          <td>" . $row['05'] . "</td>
          <td>" . $row['SERGIO BOLLAS '] . "</td>
          <td>" . $row['40'] . "</td>
          <td>" . $row['ING. INDUSTRIAL'] . "</td>
        </tr>";
}
    // Cerrar la tabla HTML
    echo "</table>";
} else {
    echo "No hay registros disponibles.";
}

// Cerrar la conexión
$conn->close();
?>