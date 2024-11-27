<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMARTEDU</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <!-- custom css link -->
    <link href="{{ asset('css/uploadfinpro.css') }}" rel="stylesheet" />

<body>
    <div class="container">
        <div class="content">
            <div class="form-container">
                <h2>Upload Tugas</h2>

                <form>
                    <div class="form-group">
                        <label for="attachment">Attachment</label>
                        <input id="attachment" name="attachment" type="file" />
                    </div>

                    <div class="form-group">
                        <label for="nama-tugas">Nama Tugas</label>
                        <input id="nama-tugas" name="nama-tugas" placeholder="Upload file" type="text" />
                    </div>

                    <div class="form-group">
                        <label for="deskripsi-tugas">Deskripsi Tugas</label>
                        <textarea id="deskripsi-tugas" name="deskripsi-tugas" placeholder="Deskripsi Tugas"></textarea>
                    </div>

                    <div class="button-container">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>