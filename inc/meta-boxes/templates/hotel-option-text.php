<label for="<?php echo esc_html( $args['id'] ); ?>">
	<?php echo esc_html( $args['title'] . ': ' ); ?>
</label>
<input type="text" name="<?php echo esc_html( $args['name'] ); ?>" id="<?php echo esc_html( $args['id'] ); ?>" value="<?php echo esc_html( $args['value'] ); ?>" style="margin: 5px 0; width: 100%">