<?php
/*
    @package nutnull-premium-theme

    =========================================================    
                    Used for ajax functions      
    =========================================================
*/

function nutnull_save_contact() {
	
	$title = wp_strip_all_tags($_POST["subject"]);
	$message = wp_strip_all_tags($_POST["message"]);
	$fullname = wp_strip_all_tags($_POST["fullname"]);
	$email = wp_strip_all_tags($_POST["email"]);
	$companyName = esc_attr(get_option('company_name'));
	$companyEmail = esc_attr(get_option('company_email'));

	$subject = 'Nutnull Contact Details Feedback - '.$fullname;
	$message = $message;

	$args = array(
		'post_title' => $title,
		'post_content' => $message,
		'post_author' => 1,
		'post_status' => 'publish',
		'post_type' => 'nutnull-contact',
		'meta_input' => array(
			'_contact_email_value_key' => $email,
			'_contact_fullname_value_key' => $fullname
		)
	);

	$postID = wp_insert_post( $args, $wp_error );

	if(0 !== $postID) {
		require_once(__DIR__ . '/../vendor/autoload.php');
		$credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
		$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);
		$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([

			// 'subject' => 'from the PHP SDK!',
			// 'sender' => ['name' => 'Sendinblue', 'email' => 'ramosmarvin50@gmail.com'],
			// 'replyTo' => ['name' => 'Sendinblue', 'email' => 'ramosmarvin50@gmail.com'],
			// 'to' => [[ 'name' => 'Max Mustermann', 'email' => 'marvinramos.nutnull@gmail.com']],
			// 'htmlContent' => '<html><body><h1>This is a transactional email {{params.bodyMessage}}</h1></body></html>',
			// 'params' => ['bodyMessage' => 'made just for you!']

			'subject' => $title,
			'sender' => ['name' => $fullname, 'email' => $email],
			'replyTo' => ['name' => $fullname, 'email' => $email],
			'to' => [[ 'name' => $companyName, 'email' => $companyEmail]],
			'htmlContent' => '<html><body><h1>This is a transactional email</h1><br><p>{{params.bodyMessage}}</p></body></html>',
			'params' => ['bodyMessage' => $message]
		]);
		try {
			$result = $apiInstance->sendTransacEmail($sendSmtpEmail);
		} catch (Exception $e) {
			echo $e->getMessage(),PHP_EOL;
		}
		print_r($result);
		echo $postID;
	} else {
		echo 0;
	}
	die();	
}

// for saving our data input values
add_action( 'wp_ajax_nopriv_nutnull_save_user_contact_form', 'nutnull_save_contact' );
add_action( 'wp_ajax_nutnull_save_user_contact_form', 'nutnull_save_contact' );



