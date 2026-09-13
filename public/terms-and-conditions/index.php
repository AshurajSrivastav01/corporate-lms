<?php
// Corporate Learning Hub - Terms and Conditions

require(__DIR__ . '/../config.php');

$context = context_system::instance();

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/terms/'));
$PAGE->set_pagelayout('standard');
$PAGE->set_title('Terms and Conditions');
$PAGE->set_heading('Terms and Conditions');

echo $OUTPUT->header();
?>

<style>
.clh-terms {
    max-width: 1050px;
    margin: 0 auto;
    padding: 60px 20px 80px;
}

.clh-terms-hero {
    padding: 65px 25px;
    margin-bottom: 50px;
    border-radius: 18px;
    background: linear-gradient(135deg, #082b72 0%, #0b4da2 100%);
    text-align: center;
}

.clh-terms-hero .eyebrow {
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

.clh-terms-hero h1 {
    margin: 0 0 15px;
    color: #fff;
    font-size: 42px;
    line-height: 1.2;
}

.clh-terms-hero p {
    max-width: 700px;
    margin: 0 auto;
    color: rgba(255,255,255,.85);
    font-size: 16px;
    line-height: 1.7;
}

.clh-terms-content {
    color: #475467;
    font-size: 15px;
    line-height: 1.8;
}

.clh-terms-section {
    margin-bottom: 38px;
}

.clh-terms-section h2 {
    margin: 0 0 14px;
    color: #082b72;
    font-size: 25px;
    line-height: 1.3;
}

.clh-terms-section h3 {
    margin: 22px 0 10px;
    color: #172b4d;
    font-size: 18px;
}

.clh-terms-section p {
    margin: 0 0 14px;
}

.clh-terms-section ul,
.clh-terms-section ol {
    margin: 10px 0 15px;
    padding-left: 26px;
}

.clh-terms-section li {
    margin-bottom: 7px;
}

.clh-terms-note {
    margin-top: 45px;
    padding: 25px;
    border-left: 4px solid #0969c7;
    border-radius: 8px;
    background: #f5f8fc;
}

.clh-terms-note strong {
    color: #082b72;
}

.clh-terms-cta {
    margin-top: 55px;
    padding: 40px 25px;
    border-radius: 16px;
    background: #082b72;
    text-align: center;
}

.clh-terms-cta h2 {
    margin: 0 0 10px;
    color: #fff;
    font-size: 27px;
}

.clh-terms-cta p {
    max-width: 650px;
    margin: 0 auto 22px;
    color: rgba(255,255,255,.82);
}

.clh-terms-button {
    display: inline-block;
    padding: 12px 25px;
    border-radius: 7px;
    background: #fff;
    color: #082b72 !important;
    font-weight: 700;
    text-decoration: none !important;
}

.clh-terms-button:hover {
    background: #eef5ff;
}

@media (max-width: 600px) {

    .clh-terms {
        padding: 40px 16px 55px;
    }

    .clh-terms-hero {
        padding: 48px 20px;
    }

    .clh-terms-hero h1 {
        font-size: 31px;
    }

    .clh-terms-hero p {
        font-size: 14px;
    }

    .clh-terms-section h2 {
        font-size: 22px;
    }
}
</style>


<div class="clh-terms">

    <!-- HERO -->
    <section class="clh-terms-hero">

        <div class="eyebrow">
            Platform Guidelines
        </div>

        <h1>
            Terms and Conditions
        </h1>

        <p>
            These terms describe the general rules and conditions for using
            Corporate Learning Hub and its learning services.
        </p>

    </section>


    <div class="clh-terms-content">

        <!-- INTRODUCTION -->
        <section class="clh-terms-section">

            <h2>1. Introduction</h2>

            <p>
                Welcome to Corporate Learning Hub. These Terms and Conditions
                describe the general rules that apply to your access to and
                use of the learning platform.
            </p>

            <p>
                By accessing or using Corporate Learning Hub, you acknowledge
                that you have read and understood these terms and agree to
                comply with the applicable rules, policies, and instructions
                associated with the platform.
            </p>

        </section>


        <!-- PLATFORM USE -->
        <section class="clh-terms-section">

            <h2>2. Use of the Platform</h2>

            <p>
                Corporate Learning Hub is intended to provide online learning,
                training, professional development, compliance education, and
                related learning resources.
            </p>

            <p>
                Users agree to use the platform responsibly and only for
                legitimate learning, training, and organizational purposes.
            </p>

            <ul>
                <li>Use the platform in accordance with applicable laws.</li>
                <li>Follow organizational policies and learning requirements.</li>
                <li>Use learning resources only for permitted purposes.</li>
                <li>Do not interfere with the operation or security of the platform.</li>
                <li>Do not attempt to gain unauthorized access to accounts or systems.</li>
            </ul>

        </section>


        <!-- USER ACCOUNTS -->
        <section class="clh-terms-section">

            <h2>3. User Accounts</h2>

            <p>
                Some areas of Corporate Learning Hub require users to have
                an account.
            </p>

            <p>
                Users are responsible for maintaining the confidentiality
                of their login credentials and should take reasonable steps
                to prevent unauthorized access to their account.
            </p>

            <p>
                Users should notify the platform administrator if they
                believe their account has been compromised or used without
                authorization.
            </p>

        </section>


        <!-- LEARNING CONTENT -->
        <section class="clh-terms-section">

            <h2>4. Learning Content</h2>

            <p>
                Courses, lessons, documents, videos, assessments, graphics,
                and other learning resources available through Corporate
                Learning Hub may be provided by the organization operating
                the platform or by authorized content providers.
            </p>

            <p>
                Users must not reproduce, distribute, modify, publish, or
                commercially exploit protected learning content without
                appropriate authorization.
            </p>

        </section>


        <!-- COURSE PARTICIPATION -->
        <section class="clh-terms-section">

            <h2>5. Course Participation and Completion</h2>

            <p>
                Course requirements may vary depending on the training
                program. Some courses may require users to complete specific
                activities, assessments, or other learning requirements.
            </p>

            <p>
                Completion status, certificates, and other learning records
                are determined according to the configuration and requirements
                of the applicable course.
            </p>

        </section>


        <!-- ACCEPTABLE BEHAVIOR -->
        <section class="clh-terms-section">

            <h2>6. Acceptable Use</h2>

            <p>
                Users must not use Corporate Learning Hub to:
            </p>

            <ul>
                <li>Attempt unauthorized access to the platform.</li>
                <li>Upload malicious or harmful software or content.</li>
                <li>Interfere with platform availability or performance.</li>
                <li>Impersonate another user or administrator.</li>
                <li>Access information they are not authorized to access.</li>
                <li>Use the platform for unlawful or abusive activities.</li>
            </ul>

        </section>


        <!-- INTELLECTUAL PROPERTY -->
        <section class="clh-terms-section">

            <h2>7. Intellectual Property</h2>

            <p>
                Unless otherwise stated, the platform design, branding,
                original materials, learning resources, and other content
                provided by the platform operator may be protected by
                applicable intellectual property laws.
            </p>

            <p>
                Nothing in these Terms and Conditions grants users ownership
                of intellectual property belonging to the platform operator,
                organization, or third-party content providers.
            </p>

        </section>


        <!-- PRIVACY -->
        <section class="clh-terms-section">

            <h2>8. Privacy</h2>

            <p>
                The handling of personal information through Corporate
                Learning Hub is described in the platform's
                <a href="<?php echo new moodle_url('/privacy-policy/'); ?>">
                    Privacy Policy
                </a>.
            </p>

            <p>
                Users should review the Privacy Policy to understand how
                information associated with their account and learning
                activities may be handled.
            </p>

        </section>


        <!-- AVAILABILITY -->
        <section class="clh-terms-section">

            <h2>9. Platform Availability</h2>

            <p>
                We aim to keep Corporate Learning Hub available and reliable,
                but uninterrupted access cannot be guaranteed.
            </p>

            <p>
                The platform may occasionally be unavailable because of
                maintenance, upgrades, technical issues, security measures,
                or circumstances outside the reasonable control of the
                platform operator.
            </p>

        </section>


        <!-- THIRD PARTY -->
        <section class="clh-terms-section">

            <h2>10. Third-Party Services</h2>

            <p>
                Corporate Learning Hub may integrate with external services,
                tools, or platforms. Such services may be governed by their
                own terms and policies.
            </p>

            <p>
                Users should review the applicable terms of third-party
                services when interacting with them through the platform.
            </p>

        </section>


        <!-- SUSPENSION -->
        <section class="clh-terms-section">

            <h2>11. Account Suspension or Termination</h2>

            <p>
                Access to an account or specific platform features may be
                restricted, suspended, or terminated where necessary to
                protect the platform, enforce organizational policies,
                address misuse, or comply with applicable requirements.
            </p>

        </section>


        <!-- DISCLAIMER -->
        <section class="clh-terms-section">

            <h2>12. Disclaimer</h2>

            <p>
                Corporate Learning Hub is provided as a learning platform.
                Training materials and educational resources are intended
                to support learning and development and should not be
                considered a substitute for professional, legal, medical,
                financial, or other specialized advice where such advice
                is required.
            </p>

        </section>


        <!-- LIMITATION -->
        <section class="clh-terms-section">

            <h2>13. Limitation of Liability</h2>

            <p>
                To the extent permitted by applicable law, the platform
                operator should not be responsible for losses arising from
                unauthorized use, interruptions, technical failures, or
                reliance on information provided through the platform.
            </p>

            <p>
                Specific liability provisions may vary depending on the
                organization operating the platform and the applicable
                contractual or legal requirements.
            </p>

        </section>


        <!-- CHANGES -->
        <section class="clh-terms-section">

            <h2>14. Changes to These Terms</h2>

            <p>
                These Terms and Conditions may be updated from time to time
                to reflect changes in the platform, organizational practices,
                services, or applicable requirements.
            </p>

            <p>
                Updated terms should be made available through the platform
                when changes are introduced.
            </p>

        </section>


        <!-- CONTACT -->
        <section class="clh-terms-section">

            <h2>15. Contact</h2>

            <p>
                If you have questions about these Terms and Conditions,
                please contact the platform administrator or the designated
                contact for the organization operating Corporate Learning Hub.
            </p>

        </section>


        <!-- DEMO NOTICE -->
        <div class="clh-terms-note">

            <strong>Demo Platform Notice:</strong>

            This Corporate Learning Hub environment is a demonstration LMS
            created to showcase corporate learning and Moodle-based training
            functionality. These terms are provided as sample website
            content and should be reviewed and customized by the organization
            operating a production deployment.
            
        </div>


        <!-- CTA -->
        <section class="clh-terms-cta">

            <h2>
                Ready to Explore the Platform?
            </h2>

            <p>
                Discover training programs and learning opportunities
                available through Corporate Learning Hub.
            </p>

            <a class="clh-terms-button"
               href="<?php echo new moodle_url('/course/'); ?>">
                Explore Training
            </a>

        </section>

    </div>

</div>


<?php
echo $OUTPUT->footer();
?>