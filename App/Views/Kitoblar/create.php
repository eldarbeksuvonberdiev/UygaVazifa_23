<form action="/kcreate" method="post" enctype="multipart/form-data" style="margin-bottom: 50px;">
    <h2>Yangi Kitob</h2>
    <div class="mb-3">
        <label for="title" class="form-label">Sarlavahasi</label>
        <input type="text" class="form-control" id="title" placeholder="Sarlavahasi">
    </div>
    <div class="mb-3">
        <label for="desc" class="form-label">Ta'rifi</label>
        <input type="text" class="form-control" id="desc" placeholder="Qisqacha ta'rifi">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Matni</label>
        <textarea name="text" id="text" style="width: 100%;" placeholder="Matn"></textarea>
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Rasmi</label>
        <input type="file" class="form-control" id="img">
    </div><br>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select><br><br>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select><br><br>
    <button type="submit" name="ok" class="btn btn-success">Qo'shish</button>
</form>