<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
	$applicant_email = esc_attr( get_post_meta( $post->ID, 'awsm_applicant_email', true ) );

	/**
	 * Initialize applicant meta box.
	 *
	 * @since 1.6.0
	 */
	do_action( 'awsm_job_applicant_mb_init', $post->ID );
?>

<div class="awsm-application-container clearfix">
	<div class="awsm-applicant-image-container">
		<?php
			/**
			 * Fires before applicant photo content.
			 *
			 * @since 1.6.0
			 */
			do_action( 'before_awsm_job_applicant_mb_photo', $post->ID );

			$avatar = apply_filters( 'awsm_applicant_photo', get_avatar( $applicant_email, 130 ) );
			echo '<div class="awsm-applicant-image">' . $avatar . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			$attachment_id  = get_post_meta( $post->ID, 'awsm_attachment_id', true );
			$resume_details = $this->get_attached_file_details( $attachment_id );
		if ( ! empty( $resume_details ) ) :
			$file_size_display = ! empty( $resume_details['file_size']['display'] ) ? '(' . $resume_details['file_size']['display'] . ')' : '';
			?>
				<a href="<?php echo $this->get_attached_file_download_url( $attachment_id ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" class="button awsm-applicant-resume-btn" rel="nofollow"><strong><?php esc_html_e( 'Download Resume', 'wp-job-openings' ); ?></strong><span><?php echo esc_html( $resume_details['file_type']['ext'] . $file_size_display ); ?></span></a>
			<?php
		endif;

			/**
			 * Fires after applicant photo content.
			 *
			 * @since 1.6.0
			 */
			do_action( 'after_awsm_job_applicant_mb_photo', $post->ID );
		?>
	</div><!-- .awsm-applicant-image-container -->

	<div class="awsm-applicant-details">
		<?php
			/**
			 * Fires before applicant details list.
			 *
			 * @since 1.6.0
			 */
			do_action( 'before_awsm_job_applicant_mb_details_list', $post->ID );
		?>
		<ul class="awsm-applicant-details-list">
			<?php echo $this->get_applicant_meta_details_list( $post->ID, array( 'awsm_applicant_email' => $applicant_email ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</ul>
		<?php
			/**
			 * Fires after applicant details list.
			 *
			 * @since 1.6.0
			 */
			do_action( 'after_awsm_job_applicant_mb_details_list', $post->ID );
		?>
	</div><!-- .awsm-applicant-details -->
</div><!-- .awsm-application-container -->

<div class="submitbox awsm-application-submitbox">
	<div id="major-publishing-actions" class="awsm-application-major-actions clearfix">
		<?php
			/**
			 * Fires before applicant meta box actions.
			 *
			 * @since 1.6.0
			 */
			do_action( 'before_awsm_job_applicant_mb_actions', $post->ID );
		?>
		<div id="delete-action">
			<?php
			if ( current_user_can( 'delete_post', $post->ID ) ) {
				if ( ! EMPTY_TRASH_DAYS ) {
					$delete_text = __( 'Delete Permanently', 'default' );
				} else {
					$delete_text = __( 'Move to Trash', 'default' );
				}
				printf( '<a class="submitdelete deletion" href="%2$s">%1$s</a>', esc_html( $delete_text ), esc_url( get_delete_post_link( $post->ID ) ) );
			}
			?>
		</div>
		<?php
			/**
			 * Fires after applicant meta box actions.
			 *
			 * @since 1.6.0
			 */
			do_action( 'after_awsm_job_applicant_mb_actions', $post->ID );
		?>
	</div><!-- #major-publishing-actions -->
</div><!-- .awsm-application-submitbox -->
