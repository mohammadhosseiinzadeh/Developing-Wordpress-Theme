<?php
// comment form fields re-defined:
    add_filter( 'comment_form_default_fields', 'mo_comment_fields_custom_html' );
    function mo_comment_fields_custom_html( $fields ) {
        // first unset the existing fields:
        unset( $fields['comment_field'] );
        unset( $fields['author'] );
        unset( $fields['email'] );
        unset( $fields['url'] );
        // then re-define them as needed:
        $fields = [
            'author' => '<p class="form-group col-md-4">'.
                '<input placeholder="نام شما ( الزامی )" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></p>',
            'email'  => '<p class="form-group col-md-4">'.
                '<input placeholder="ایمیل (الزامی)" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',
            'url'    => '<p class="form-group col-md-4">'.
                '<input placeholder="وب سایت" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p>',
            'comment_field' => '<p class="form-group col-md-12">' .
            '<textarea placeholder="نظر شما ..." id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>',    
        ];
        // done customizing, now return the fields:
        return $fields;
    }
    // remove default comment form so it won't appear twice
    add_filter( 'comment_form_defaults', 'mo_remove_default_comment_field', 10, 1 ); 
    function mo_remove_default_comment_field( $defaults ) { if ( isset( $defaults[ 'comment_field' ] ) ) { $defaults[ 'comment_field' ] = ''; } return $defaults; }
?>