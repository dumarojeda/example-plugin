<div class="example-meta">
    <?php wp_nonce_field('meta_example_nonce', 'example_nonce'); ?>
    <label for="example_meta">Example Meta:</label>
    <input type="text" name="example_meta" id="example_meta" value="<?= $value ?>" />
</div>