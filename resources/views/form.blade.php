<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>

    <style type="text/css">
        input, textarea {
            width: 300px;
            padding: 5px;
            border: 1px solid #ccc;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        /* Gaya untuk kelas "alert-success" */
        .alert.alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('submit-form') }}" enctype="multipart/form-data">
        @csrf
    
        <!-- Field 1 -->
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" required>
        <br>
    
        <!-- Field 2 -->
        <label for="email">Email:</label><br>
        <input type="email" name="email" required>
        <br>

        <!-- Field 3 -->
        <label for="alamat">Alamat:</label><br>
        <textarea name="alamat" required></textarea>
        <br>

        <!-- Field 4 (string) -->
        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <input type="text" name="jenis_kelamin" required>
        <br>

        <!-- Field 5 (Double) -->
        <label for="nilai">Nilai (2.50 - 99.99):</label><br>
        <input type="number" name="nilai" step="0.01" min="2.50" max="99.99" required>
        <br>

        <!-- Field 6 (Upload Gambar) -->
        <label for="gambar">Unggah Gambar (jpg/jpeg/png, maks. 2MB):</label><br>
        <input type="file" name="gambar" accept=".jpg, .jpeg, .png" required>
        <br><br>

        <button type="submit">Kirim</button>
        <br>
        
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

    </form>
    
</body>
</html>