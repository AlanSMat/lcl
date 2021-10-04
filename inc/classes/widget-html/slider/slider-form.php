<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:' ); ?></label> <br />
  <input type="text" id="<?php $this->get_field_id( 'title' )?>"
    name="<?php echo esc_attr( $this->get_field_name( 'title' ) );?>" value="<?php echo $instance['title']; ?>" />
</p>
<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'details' ) ); ?>"><?php esc_attr_e( 'Details:' ); ?></label>
  <br />
  <textarea id="<?php $this->get_field_id( 'details' )?>"
    name="<?php echo esc_attr( $this->get_field_name( 'details' ) );?>" rows="4"
    cols="80"><?php echo $instance['details']; ?></textarea>
</p>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'linktext' ) ); ?>"><?php esc_attr_e( 'Link Text:' ); ?></label> <br />
    <input type="text" id="<?php $this->get_field_id( 'linktext' )?>" name="<?php echo esc_attr( $this->get_field_name( 'linktext' ) );?>" value="<?php echo $instance['linktext']; ?>" />
</p>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'linkuri' ) ); ?>"><?php esc_attr_e( 'Link URI:' ); ?></label> <br />
    <input type="text" id="<?php $this->get_field_id( 'linkuri' )?>" name="<?php echo esc_attr( $this->get_field_name( 'linkuri' ) );?>" value="<?php echo $instance['linkuri']; ?>" />
</p>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'imageuri' ) ); ?>"><?php esc_attr_e( 'Image URI:' ); ?></label> <br />
    <input type="text" id="<?php $this->get_field_id( 'imageuri' )?>" name="<?php echo esc_attr( $this->get_field_name( 'imageuri' ) );?>" value="<?php echo $instance['imageuri']; ?>" /><br />
    (To find this go to the Media library, choose an image then click "Copy Link")
</p>