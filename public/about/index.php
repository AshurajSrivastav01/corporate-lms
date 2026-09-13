<?php
// Corporate Learning Hub - About Page

require(__DIR__ . '/../config.php');

$context = context_system::instance();

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/about/'));
$PAGE->set_pagelayout('standard');
$PAGE->set_title('About Corporate Learning Hub');
$PAGE->set_heading('About Corporate Learning Hub');

echo $OUTPUT->header();
?>

<style>
.clh-about {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 20px 70px;
}

/* Hero */
.clh-about-hero {
    margin: 0 -20px 70px;
    padding: 90px 30px;
    background: linear-gradient(135deg, #082b72 0%, #0b4da2 100%);
    text-align: center;
    color: #ffffff;
}

.clh-about-hero-inner {
    max-width: 850px;
    margin: 0 auto;
}

.clh-about-eyebrow {
    display: inline-block;
    margin-bottom: 18px;
    padding: 7px 15px;
    border-radius: 30px;
    background: rgba(255,255,255,0.12);
    color: #ffffff;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.clh-about-hero h1 {
    margin: 0 0 20px;
    color: #ffffff;
    font-size: 44px;
    line-height: 1.15;
    font-weight: 700;
}

.clh-about-hero p {
    max-width: 720px;
    margin: 0 auto;
    color: rgba(255,255,255,0.88);
    font-size: 18px;
    line-height: 1.7;
}

/* Intro */
.clh-about-intro {
    max-width: 900px;
    margin: 0 auto 75px;
    text-align: center;
}

.clh-about-intro h2 {
    margin: 0 0 18px;
    color: #082b72;
    font-size: 34px;
}

.clh-about-intro p {
    margin: 0;
    color: #667085;
    font-size: 16px;
    line-height: 1.8;
}

/* Feature cards */
.clh-about-features {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
    margin-bottom: 80px;
}

.clh-about-card {
    padding: 30px 24px;
    background: #ffffff;
    border: 1px solid #e5eaf1;
    border-radius: 14px;
    text-align: center;
    box-shadow: 0 5px 22px rgba(8,43,114,0.06);
    transition: transform .25s ease, box-shadow .25s ease;
}

.clh-about-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 12px 30px rgba(8,43,114,0.12);
}

.clh-about-icon {
    width: 58px;
    height: 58px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    background: #eef5ff;
    color: #0969c7;
}

.clh-about-icon svg {
    width: 29px;
    height: 29px;
}

.clh-about-card h3 {
    margin: 0 0 12px;
    color: #172b4d;
    font-size: 18px;
}

.clh-about-card p {
    margin: 0;
    color: #667085;
    font-size: 14px;
    line-height: 1.7;
}

/* Learning section */
.clh-about-learning {
    margin-bottom: 75px;
    padding: 60px 50px;
    border-radius: 18px;
    background: #f5f8fc;
}

.clh-about-learning-heading {
    max-width: 760px;
    margin: 0 auto 40px;
    text-align: center;
}

.clh-about-learning-heading h2 {
    margin: 0 0 15px;
    color: #082b72;
    font-size: 32px;
}

.clh-about-learning-heading p {
    margin: 0;
    color: #667085;
    line-height: 1.7;
}

.clh-about-learning-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
}

.clh-about-learning-item {
    padding: 22px;
    border-radius: 12px;
    background: #ffffff;
    border: 1px solid #e4e9f0;
}

.clh-about-learning-item h3 {
    margin: 0 0 9px;
    color: #172b4d;
    font-size: 17px;
}

.clh-about-learning-item p {
    margin: 0;
    color: #667085;
    font-size: 14px;
    line-height: 1.65;
}

/* CTA */
.clh-about-cta {
    padding: 50px 30px;
    border-radius: 18px;
    background: #082b72;
    text-align: center;
}

.clh-about-cta h2 {
    margin: 0 0 12px;
    color: #ffffff;
    font-size: 30px;
}

.clh-about-cta p {
    max-width: 650px;
    margin: 0 auto 25px;
    color: rgba(255,255,255,0.82);
    line-height: 1.7;
}

.clh-about-button {
    display: inline-block;
    padding: 13px 28px;
    border-radius: 7px;
    background: #ffffff;
    color: #082b72 !important;
    font-weight: 700;
    text-decoration: none !important;
    transition: transform .25s ease, background .25s ease;
}

.clh-about-button:hover {
    background: #eef5ff;
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 900px) {

    .clh-about-features {
        grid-template-columns: repeat(2, 1fr);
    }

    .clh-about-learning-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .clh-about-hero h1 {
        font-size: 38px;
    }
}

@media (max-width: 600px) {

    .clh-about {
        padding: 0 15px 50px;
    }

    .clh-about-hero {
        margin-left: -15px;
        margin-right: -15px;
        padding: 65px 20px;
    }

    .clh-about-hero h1 {
        font-size: 31px;
    }

    .clh-about-hero p {
        font-size: 15px;
    }

    .clh-about-intro h2,
    .clh-about-learning-heading h2 {
        font-size: 27px;
    }

    .clh-about-features,
    .clh-about-learning-grid {
        grid-template-columns: 1fr;
    }

    .clh-about-learning {
        padding: 40px 20px;
    }

    .clh-about-cta h2 {
        font-size: 26px;
    }
}
</style>


<div class="clh-about">

    <!-- HERO -->
    <section class="clh-about-hero">

        <div class="clh-about-hero-inner">

            <div class="clh-about-eyebrow">
                Corporate Learning Platform
            </div>

            <h1>
                About Corporate Learning Hub
            </h1>

            <p>
                A modern learning environment designed to help organizations
                deliver meaningful training, develop employee skills, and
                support continuous professional growth.
            </p>

        </div>

    </section>


    <!-- INTRODUCTION -->
    <section class="clh-about-intro">

        <h2>
            A Smarter Approach to Workforce Learning
        </h2>

        <p>
            Corporate Learning Hub is a centralized learning environment
            designed for modern organizations and their employees. It brings
            training, professional development, compliance learning, and
            continuous skill development together in one organized platform.
        </p>

        <br>

        <p>
            Built on Moodle, the platform provides a flexible foundation for
            delivering online courses, managing learning activities, tracking
            progress, and maintaining completion records. Organizations can
            create structured learning experiences that support employees
            throughout their professional journey.
        </p>

    </section>


    <!-- FEATURES -->
    <section class="clh-about-features">

        <!-- Card 1 -->
        <div class="clh-about-card">

            <div class="clh-about-icon">
                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <rect x="5" y="3" width="14" height="18" rx="2"/>
                    <path d="M9 7h6M9 11h6M9 15h4"/>
                </svg>
            </div>

            <h3>
                Structured Learning
            </h3>

            <p>
                Organize employee training into clear courses, learning paths,
                and development programs.
            </p>

        </div>


        <!-- Card 2 -->
        <div class="clh-about-card">

            <div class="clh-about-icon">
                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="8" r="3"/>
                    <path d="M5 20c.7-4 2.9-6 7-6s6.3 2 7 6"/>
                </svg>
            </div>

            <h3>
                Employee Development
            </h3>

            <p>
                Help employees strengthen professional, technical, and
                leadership skills through continuous learning.
            </p>

        </div>


        <!-- Card 3 -->
        <div class="clh-about-card">

            <div class="clh-about-icon">
                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <path d="M4 19V9"/>
                    <path d="M10 19V5"/>
                    <path d="M16 19v-7"/>
                    <path d="M22 19V3"/>
                </svg>
            </div>

            <h3>
                Progress Tracking
            </h3>

            <p>
                Track learning progress, activity completion, assessments,
                and required employee training.
            </p>

        </div>


        <!-- Card 4 -->
        <div class="clh-about-card">

            <div class="clh-about-icon">
                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <path d="M12 3v18"/>
                    <path d="M3 12h18"/>
                    <circle cx="12" cy="12" r="9"/>
                </svg>
            </div>

            <h3>
                Continuous Growth
            </h3>

            <p>
                Create an environment where employees can continue learning
                and developing throughout their careers.
            </p>

        </div>

    </section>


    <!-- LEARNING AREAS -->
    <section class="clh-about-learning">

        <div class="clh-about-learning-heading">

            <h2>
                Supporting Every Stage of Learning
            </h2>

            <p>
                Corporate Learning Hub can support a wide range of workforce
                learning needs, from an employee's first day to long-term
                professional development.
            </p>

        </div>


        <div class="clh-about-learning-grid">

            <div class="clh-about-learning-item">
                <h3>Employee Onboarding</h3>
                <p>
                    Help new employees understand workplace expectations,
                    policies, procedures, and essential responsibilities.
                </p>
            </div>

            <div class="clh-about-learning-item">
                <h3>Compliance & Safety</h3>
                <p>
                    Deliver consistent training around workplace standards,
                    safety practices, compliance, and organizational policies.
                </p>
            </div>

            <div class="clh-about-learning-item">
                <h3>Professional Development</h3>
                <p>
                    Strengthen communication, collaboration, productivity, and
                    other essential professional capabilities.
                </p>
            </div>

            <div class="clh-about-learning-item">
                <h3>Technical Training</h3>
                <p>
                    Provide structured technical learning that helps employees
                    develop practical technology and digital skills.
                </p>
            </div>

            <div class="clh-about-learning-item">
                <h3>Leadership & Management</h3>
                <p>
                    Support managers and emerging leaders with learning focused
                    on leadership, decision-making, and team development.
                </p>
            </div>

            <div class="clh-about-learning-item">
                <h3>Continuous Learning</h3>
                <p>
                    Encourage employees to continuously improve their knowledge,
                    skills, and professional capabilities.
                </p>
            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="clh-about-cta">

        <h2>
            Ready to Start Learning?
        </h2>

        <p>
            Explore the training catalog and discover learning opportunities
            designed to help employees build skills and grow professionally.
        </p>

        <a class="clh-about-button"
           href="<?php echo new moodle_url('/course/'); ?>">
            Explore Training
        </a>

    </section>

</div>


<?php
echo $OUTPUT->footer();
?>
