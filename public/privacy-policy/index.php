<?php
// Corporate Learning Hub - Privacy Policy

require(__DIR__ . '/../config.php');

$context = context_system::instance();

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/privacy-policy/'));
$PAGE->set_pagelayout('standard');
$PAGE->set_title('Privacy Policy');
$PAGE->set_heading('Privacy Policy');

echo $OUTPUT->header();
?>

<style>
.clh-policy {
    max-width: 1050px;
    margin: 0 auto;
    padding: 60px 20px 80px;
}

.clh-policy-hero {
    padding: 65px 25px;
    margin-bottom: 50px;
    border-radius: 18px;
    background: linear-gradient(135deg, #082b72 0%, #0b4da2 100%);
    text-align: center;
}

.clh-policy-hero .eyebrow {
    display: inline-block;
    margin-bottom: 15px;
    padding: 7px 15px;
    border-radius: 30px;
    background: rgba(255,255,255,.12);
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.clh-policy-hero h1 {
    margin: 0 0 15px;
    color: #fff;
    font-size: 42px;
    line-height: 1.2;
}

.clh-policy-hero p {
    max-width: 700px;
    margin: 0 auto;
    color: rgba(255,255,255,.85);
    font-size: 16px;
    line-height: 1.7;
}

.clh-policy-content {
    color: #475467;
    font-size: 15px;
    line-height: 1.8;
}

.clh-policy-section {
    margin-bottom: 38px;
}

.clh-policy-section h2 {
    margin: 0 0 14px;
    color: #082b72;
    font-size: 25px;
    line-height: 1.3;
}

.clh-policy-section h3 {
    margin: 22px 0 10px;
    color: #172b4d;
    font-size: 18px;
}

.clh-policy-section p {
    margin: 0 0 14px;
}

.clh-policy-section ul {
    margin: 10px 0 15px;
    padding-left: 25px;
}

.clh-policy-section li {
    margin-bottom: 7px;
}

.clh-policy-note {
    margin-top: 45px;
    padding: 25px;
    border-left: 4px solid #0969c7;
    border-radius: 8px;
    background: #f5f8fc;
}

.clh-policy-note strong {
    color: #082b72;
}

.clh-policy-cta {
    margin-top: 55px;
    padding: 40px 25px;
    border-radius: 16px;
    background: #082b72;
    text-align: center;
}

.clh-policy-cta h2 {
    margin: 0 0 10px;
    color: #fff;
    font-size: 27px;
}

.clh-policy-cta p {
    max-width: 650px;
    margin: 0 auto 22px;
    color: rgba(255,255,255,.82);
}

.clh-policy-button {
    display: inline-block;
    padding: 12px 25px;
    border-radius: 7px;
    background: #fff;
    color: #082b72 !important;
    font-weight: 700;
    text-decoration: none !important;
}

.clh-policy-button:hover {
    background: #eef5ff;
}

@media (max-width: 600px) {

    .clh-policy {
        padding: 40px 16px 55px;
    }

    .clh-policy-hero {
        padding: 48px 20px;
    }

    .clh-policy-hero h1 {
        font-size: 31px;
    }

    .clh-policy-hero p {
        font-size: 14px;
    }

    .clh-policy-section h2 {
        font-size: 22px;
    }
}
</style>


<div class="clh-policy">

    <!-- HERO -->
    <section class="clh-policy-hero">

        <div class="eyebrow">
            Your Privacy Matters
        </div>

        <h1>
            Privacy Policy
        </h1>

        <p>
            This policy explains how Corporate Learning Hub handles
            information associated with users and learning activities.
        </p>

    </section>


    <div class="clh-policy-content">

        <!-- INTRODUCTION -->
        <section class="clh-policy-section">

            <h2>1. Introduction</h2>

            <p>
                Corporate Learning Hub is a corporate learning platform
                designed to support employee training, professional
                development, compliance learning, and continuous education.
            </p>

            <p>
                We respect user privacy and aim to handle personal information
                responsibly. This Privacy Policy explains the types of
                information that may be collected through the platform,
                how that information may be used, and the choices available
                to users.
            </p>

        </section>


        <!-- INFORMATION -->
        <section class="clh-policy-section">

            <h2>2. Information We May Collect</h2>

            <p>
                Depending on how the platform is configured and used,
                Corporate Learning Hub may process information such as:
            </p>

            <ul>
                <li>Name and basic profile information</li>
                <li>Email address and contact information</li>
                <li>Account credentials and authentication information</li>
                <li>Courses and training programs accessed by the user</li>
                <li>Course progress and activity completion</li>
                <li>Quiz, assessment, and learning results</li>
                <li>Certificates and training completion records</li>
                <li>Technical information required to operate the platform</li>
            </ul>

        </section>


        <!-- USE -->
        <section class="clh-policy-section">

            <h2>3. How Information Is Used</h2>

            <p>
                Information processed through Corporate Learning Hub may be
                used to:
            </p>

            <ul>
                <li>Provide and manage user accounts</li>
                <li>Deliver online courses and learning resources</li>
                <li>Track training progress and completion</li>
                <li>Support assessments and learning activities</li>
                <li>Maintain training and certification records</li>
                <li>Improve the learning experience</li>
                <li>Maintain platform security and reliability</li>
                <li>Provide appropriate administrative support</li>
            </ul>

        </section>


        <!-- LEARNING DATA -->
        <section class="clh-policy-section">

            <h2>4. Learning and Training Data</h2>

            <p>
                Corporate learning platforms may process information about
                an employee's participation in training. This can include
                course enrollment, progress, activity completion, assessment
                results, and certificates.
            </p>

            <p>
                Where the platform is operated by an organization for its
                employees, authorized administrators may have access to
                relevant learning records for legitimate training,
                compliance, and reporting purposes.
            </p>

        </section>


        <!-- COOKIES -->
        <section class="clh-policy-section">

            <h2>5. Cookies and Session Information</h2>

            <p>
                Corporate Learning Hub may use cookies and session information
                required for authentication, navigation, security, and
                platform functionality.
            </p>

            <p>
                Some cookies may be essential for keeping users signed in and
                maintaining a secure learning session.
            </p>

        </section>


        <!-- SECURITY -->
        <section class="clh-policy-section">

            <h2>6. Data Security</h2>

            <p>
                Reasonable technical and organizational measures should be
                used to protect information processed through the platform
                against unauthorized access, alteration, disclosure, or
                destruction.
            </p>

            <p>
                However, no internet-based system can guarantee absolute
                security. Users should also take appropriate steps to protect
                their account credentials and maintain the confidentiality
                of their passwords.
            </p>

        </section>


        <!-- SHARING -->
        <section class="clh-policy-section">

            <h2>7. Sharing of Information</h2>

            <p>
                Personal information should only be shared with authorized
                individuals, administrators, service providers, or other
                parties where there is a legitimate operational, legal,
                security, or organizational reason to do so.
            </p>

            <p>
                Personal information is not intended to be sold as part of
                the normal operation of Corporate Learning Hub.
            </p>

        </section>


        <!-- RETENTION -->
        <section class="clh-policy-section">

            <h2>8. Data Retention</h2>

            <p>
                Information may be retained for as long as reasonably
                necessary to provide the learning service, maintain training
                records, meet organizational requirements, resolve disputes,
                or comply with applicable obligations.
            </p>

        </section>


        <!-- USER RIGHTS -->
        <section class="clh-policy-section">

            <h2>9. Your Privacy Choices</h2>

            <p>
                Depending on the organization operating the platform and
                applicable laws, users may have rights relating to their
                personal information, including requesting access,
                correction, or other appropriate actions.
            </p>

            <p>
                Users should contact their organization's LMS administrator
                or the designated privacy contact for requests relating to
                their account or personal information.
            </p>

        </section>


        <!-- THIRD PARTY -->
        <section class="clh-policy-section">

            <h2>10. Third-Party Services</h2>

            <p>
                Corporate Learning Hub may integrate with third-party
                services or platforms to provide specific functionality.
                Those services may process information according to their
                own privacy policies and terms.
            </p>

        </section>


        <!-- CHANGES -->
        <section class="clh-policy-section">

            <h2>11. Changes to This Policy</h2>

            <p>
                This Privacy Policy may be updated periodically to reflect
                changes in the platform, organizational practices, technology,
                or applicable requirements.
            </p>

            <p>
                When significant changes are made, the updated version should
                be made available through the platform.
            </p>

        </section>


        <!-- CONTACT -->
        <section class="clh-policy-section">

            <h2>12. Contact</h2>

            <p>
                If you have questions about this Privacy Policy or how
                information is handled on Corporate Learning Hub, please
                contact the platform administrator or your organization's
                designated privacy contact.
            </p>

        </section>


        <div class="clh-policy-note">

            <strong>Demo Platform Notice:</strong>

            This Corporate Learning Hub environment is a demonstration LMS
            created to showcase corporate learning and Moodle-based training
            functionality. For a production deployment, this policy should
            be reviewed and customized by the organization operating the
            platform and, where appropriate, its legal or privacy advisors.

        </div>


        <!-- CTA -->
        <section class="clh-policy-cta">

            <h2>
                Continue Exploring Corporate Learning Hub
            </h2>

            <p>
                Discover training programs and learning opportunities
                available through the platform.
            </p>

            <a class="clh-policy-button"
               href="<?php echo new moodle_url('/course/'); ?>">
                Explore Training
            </a>

        </section>

    </div>

</div>


<?php
echo $OUTPUT->footer();
?>