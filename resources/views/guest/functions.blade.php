@php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "finalproject");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!')
                </script>";
        return false;
    }
    // cek inputan form register
    // Mendefinisikan variabel dan mengembalikan ke isi kosong
    $usernameErr = $emailErr = $passwordErr = $password2 = "";
    $username = $email = $password = $password2 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        return false
            } else {    
            $email = test_input($_POST["email"]);
            // Periksa format email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                return false
                }
            }
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
            return false
            } else {
                $username = test_input($_POST["username"]);
                // periksa apakah nama hanya huruf dan spasi
                if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
                    $usernameErr = "Only letters and white space allowed";
                    return false
                    }
            }
        if (empty($POST["password"])) {
            $passwordErr = "Password is required";
            return false
        } else {
            $password = test_input($_POST["password"]);
            // periksa apakah password memiliki minimum 8 karakter
            if (!strlen($password) >= 8) {
                $passwordErr = "Password must be at least 8 characters.";
                return false
            }
        if (empty($POST["password2"])) {
            $password2Err = "Confirmation password is required";
            return false
        // } else {
        //     // periksa apakah konfirmasi password benar
        //     if( $password !== $password2 ) {
        //         $passwordErr = "Password confirmation does not match!"
        //         return false
        //     }
        }
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$email','$username', '$password')");

    return mysqli_affected_rows($conn);
    }
}
@endphp