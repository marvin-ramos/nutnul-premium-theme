<?php 
    /*
        Template Name: Page Email
        @package nutnull-premium-theme
    */
?>

<?php get_header() ?>

<!-- ======= Hero Section ======= -->
<div id="hero" class="d-flex align-items-center" style="background: url(<?php header_image(); ?>) top center;width: 100%;height: 100vh;background-size: cover;position: relative;">
	<div class="container position-relative" data-aos-delay="500">
	<h1><?php bloginfo('name'); ?></h1>
	<h2><?php bloginfo('description'); ?></h2>
	<a href="#about" class="btn-get-started scrollto">Get Started</a>
	</div>
</div>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs job-hiring-nav">
        <div class="container">
            <ol>
            <li><a href="index.html">Home</a></li>
            <li>Job Hiring</li>
            </ol>
            <h2>Job Hiring</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <section class="job-offer-container container" id="job-offered-section">
        <?php
            require_once(__DIR__ . '/../vendor/autoload.php');

            $credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
            $apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);

            $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
                'subject' => 'from the PHP SDK!',
                'sender' => ['name' => 'Sendinblue', 'email' => 'ramosmarvin50@gmail.com'],
                'replyTo' => ['name' => 'Sendinblue', 'email' => 'ramosmarvin50@gmail.com'],
                'to' => [[ 'name' => 'Max Mustermann', 'email' => 'marvinramos.nutnull@gmail.com']],
                'htmlContent' => '<html><body><h1>This is a transactional email {{params.bodyMessage}}</h1></body></html>',
                'params' => ['bodyMessage' => 'made just for you!']
            ]);

            try {
                $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
                print_r($result);
            } catch (Exception $e) {
                echo $e->getMessage(),PHP_EOL;
            }
        ?>
    </section>

</main><!-- End #main -->

<?php get_footer(); ?>