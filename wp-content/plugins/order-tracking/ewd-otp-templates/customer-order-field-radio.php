<?php $options = explode( ',', $this->custom_field->options ); ?>

<div class='ewd-otp-customer-order-form-field'>

	<div class='ewd-otp-customer-order-form-label'>
		<?php echo esc_html( $this->custom_field->name ); ?>:
	</div>
	
	<div class='ewd-otp-customer-order-form-value'>
		
		<?php foreach ( $options as $option ) { ?>
			<input name='ewd_otp_custom_field_<?php echo $this->custom_field->id; ?>' type='radio' value='<?php echo esc_attr( $option ); ?>' <?php echo ( $this->custom_field->required ? 'required' : '' ); ?> /><?php echo esc_html( $option ); ?>
		<?php } ?>
		
	</div>
	
</div>