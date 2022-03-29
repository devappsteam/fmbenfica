<?php
$programacao = get_post_meta($post->ID, '_programacao', true);

?>
<div class="fmbenfica"><label for="fname">Nome do Apresentador:</label>
    <input type="text" id="programing_author" name="programing_author" placeholder="Nome do Apresentador" value="<?php echo ($programacao['programing_author']) ? $programacao['programing_author'] : ''; ?>">
    <br>
    <label for="lname">Apresentado às:</label>
    <input type="text" id="programing_datetime" name="programing_datetime" placeholder="Segundas e sextas-feiras, das 12h às 13h" value="<?php echo ($programacao['programing_datetime']) ? $programacao['programing_datetime'] : ''; ?>">
    <br>
    <label for="lname">Imagem do Apresentador</label>
    <input type="hidden" name="programing_image" id="programing_image" value="<?php echo ($programacao['programing_image']) ? $programacao['programing_image'] : ''; ?>">
    <img src="<?php echo ($programacao['programing_image']) ? $programacao['programing_image'] : ''; ?>" id="programing_image_preview">
    <button type="button" id="btn_select_image">Selecionar Imagem</button>
</div>