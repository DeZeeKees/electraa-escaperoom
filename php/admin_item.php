<?php function renderAdminItem($number) { ?>
    <div class="tableRow" id="tableItem<?= $number['id'] ?>">
        <div class="col Name"><?= $number['name'] ?></div>
        <div class="col Number"><?= $number['number'] ?></div>
        <div class="col Active"><a class="videoLink" href="/static/img/uploads/<?= $number['image']?>" target="_blank"><?= $number['image']?></a></div>
        <div class="col Action">

            <form hx-post="../php/edit_admin_item.php" hx-target="#tableItem<?= $number['id'] ?>">
                <input type="text" name="id" class="nodisplay" value="<?= $number['id'] ?>">
                <input type="text" name="action" class="nodisplay" value="toggle">
                <button type="submit" class="toggle">
                    <span class="material-symbols-outlined <?= $number['active'] ? "green" : "red" ?>">
                        <?= $number['active'] ? "toggle_off" : "toggle_on" ?>
                    </span>
                </button>
            </form>

            <button class="edit" onclick="openEditPopup(<?= $number['id'] ?>, '<?= $number['name'] ?>', <?= $number['number'] ?>, '')">
                <span class="material-symbols-outlined">
                    edit
                </span>
            </button>

            <form hx-post="../php/edit_admin_item.php" hx-target="#tableItem<?= $number['id'] ?>" hx-swap="outerHTML">
                <input type="hidden" name="id" value="<?= $number['id'] ?>">
                <input type="hidden" name="action" value="delete">
                <button type="submit" class="delete red">
                    <span class="material-symbols-outlined">
                        delete
                    </span>
                </button>
            </form>
        </div>
    </div>
<?php } ?>