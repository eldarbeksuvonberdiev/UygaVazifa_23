<h1>Kitoblarni ichidamiz</h1>
<form action="kcreate" method="post">
    <button type="submit" class="btn btn-success" style="margin-top: 15px;margin-bottom:20px;">Yangi Kitob</button>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Sarlavha</th>
            <th scope="col">Muallifi</th>
            <th scope="col">Janri</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($models as $model) { ?>
            <tr>
                <th scope="row"><?= $model->id ?></th>
                <td><?= $model->name ?></td>
                <td>Otto</td>
                <td>
                    <form action="/jedit">
                        <input type="hidden" name="id" value="<?=$model->id?>">
                        <button type="submit" class="btn btn-danger"><i class="bi bi-pencil-fill"></i></button>
                    </form>
                </td>
                <td>
                    <form action="/jdelete">
                        <input type="hidden" name="id" value="<?=$model->id?>">
                        <button type="button" class="btn btn-warning"><i class="bi bi-trash3"></i></button>
                    </form>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>