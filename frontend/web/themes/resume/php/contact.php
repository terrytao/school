<?php

define('MAIL_SMTP', true); // Use SMTP, if "false" use "mail" and it settings
define('MAIL_SMTP_HOST', 'smtp.gmail.com'); // (Only if you use "MAIL_SMTP == true") SMTP server
define('MAIL_SMTP_PORT', 465); // (ТOnly if you use "MAIL_SMTP == true")  port
define('MAIL_SMTP_USERNAME', 'test@gmail.com'); // (Only if you use "MAIL_SMTP == true")  user
define('MAIL_SMTP_PASSWORD', 'secret'); // (Only if you use "MAIL_SMTP == true")  password
define('MAIL_ENCODING', 'UTF-8');

//define('MAIL_SUBJECT', 'Your subject'); // Mail Subject
define('MAIL_TO_EMAIL', 'test@gmail.com'); // on which mail must be send mail

define('MAIL_MESSAGE_SUCCESS', 'Thank you for message!'); // Message from contact form when mail is succesfull send.
define('MAIL_MESSAGE_ERROR', 'There is some problem, try to send your message later.');  // Message from contact form when mail is not send when send is failed.

if (!defined('__DIR__')) {
    define('__DIR__', dirname(__FILE__));
}

require_once __DIR__ . '/libs/Swift/lib/swift_required.php';

/**
 * Parse mail template
 *
 * @param string $name
 * @param string $email
 * @param string $subject
 * @param string $message
 * @param string $type
 * @return string
 */
function mail_content_layout ($name, $email, $subject, $message, $type = 'html') {
    ob_start();
    require_once __DIR__.'/mail/template.' . $type;
    $output = ob_get_contents();
    ob_end_clean();
    return str_replace(array('{{name}}', '{{email}}','{{subject}}', '{{message}}'), array($name, $email, $subject, nl2br($message)), $output);
}

/**
 * @param string $name
 * @param mix $default
 */
function post_param($name, $default = null) {
    return isset($_POST[$name]) ? $_POST[$name] : $default;
}

if ($_POST) {
    if (defined('ENT_HTML401')) {
      $htmlentities_flags = ENT_COMPAT | ENT_HTML401;
    } else {
      $htmlentities_flags = ENT_COMPAT;
    }

    $name = htmlentities(strip_tags(post_param('name', '')), $htmlentities_flags, MAIL_ENCODING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlentities(strip_tags(post_param('subject', '')), $htmlentities_flags, MAIL_ENCODING);
    $message = htmlentities(strip_tags(post_param('message', '')), $htmlentities_flags, MAIL_ENCODING);
    $errors = array();

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email address';
    }

    if (empty($name)) {
        $errors['name'] = 'Name cannot be empty.';
    }

    if (empty($subject)) {
        $errors['subject'] = 'Subject cannot be empty.';
    }

    if (empty($message)) {
        $errors['message'] = 'Message cannot be empty.';
    }

    if (count($errors) === 0) {
        if (MAIL_SMTP) {
            $transport = Swift_SmtpTransport::newInstance(MAIL_SMTP_HOST, MAIL_SMTP_PORT, 'ssl')
                ->setUsername(MAIL_SMTP_USERNAME)
                ->setPassword(MAIL_SMTP_PASSWORD);
            $mailer = Swift_Mailer::newInstance($transport);
        } else {
            $transport = Swift_MailTransport::newInstance();
            $mailer = Swift_Mailer::newInstance($transport);
        }

        try {
          $message = Swift_Message::newInstance($subject)
              ->setFrom(array($email => $name))
              ->setTo(array(MAIL_TO_EMAIL))
              ->setBody(mail_content_layout($name, $email, $subject, $message), 'text/html')
              ->setBody(mail_content_layout($name, $email, $subject, $message, 'txt'), 'text/plain');

          $result = $mailer->send($message);

          if ($result) {
              echo json_encode(array(
                  'success' => MAIL_MESSAGE_SUCCESS
              ));
          } else {
              echo json_encode(array(
                  'error' => MAIL_MESSAGE_ERROR
              ));
          }
        } catch(Swift_TransportException $e) {
            echo json_encode(array(
                'error' => $e->getMessage()
            ));
        } catch(Exception $e) {
            echo json_encode(array(
                'error' => $e->getMessage()
            ));
        }
    } else {
        echo json_encode(compact('errors'));
    }
} else {
    header('HTTP/1.0 400 Bad Request', true, 400);
}

?>
