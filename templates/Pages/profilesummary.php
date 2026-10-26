<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', 'Profile Summary of Chirayu Bhatt - Technology Head');
$this->assign('description', 'Career profile of Chirayu Bhatt: Technology Head at CBbytes with 26+ years in software development, service oriented architectures, Agentic AI and RAG.');

$experience = [
    [
        'role' => 'Technology Head',
        'company' => 'CBbytes',
        'period' => 'August, 2022 - On going',
        'location' => 'Vadodara, GJ, India',
        'points' => [
            'End-to-end project monitoring throughout the life cycle of software development. Working closely with development, SEO and QA teams',
            'Driving sprint based schedules from system design to releases',
            'Anticipating bottlenecks and preparing resolution plans',
            'Cloud based APIs development to support service oriented architectures',
            'Estimation and budgeting technical efforts and escalating to stakeholders',
        ],
    ],
    [
        'role' => 'Technology Lead',
        'company' => 'Avista Web Technologies pvt ltd',
        'period' => 'June, 2009 - August, 2022',
        'location' => 'Vadodara, GJ, India',
        'points' => [
            'End-to-end project monitoring throughout the life cycle of software development. Working closely with development, SEO and QA teams',
            'Driving sprint based schedules from system design to releases',
            'Anticipating bottlenecks and preparing resolution plans',
            'Cloud based APIs development to support service oriented architectures',
        ],
    ],
    [
        'role' => 'Sr. Software Engineer',
        'company' => 'Rishabh software pvt ltd',
        'period' => 'Feb, 2007 - June, 2009',
        'location' => 'Vadodara, GJ, India',
        'points' => [
            'Creating / customizing frameworks under MVC architecture as per the application design requirements',
            'Assigning development tasks to team and reporting status to concerned designated',
            'Troubleshooting at complex development issues with the development team',
            'Utilizing various webservices with XML and JSON',
            'Scrum based development under agile methodology',
            'Monitoring development status and analyzing resource requirements to match sprint deadlines',
        ],
    ],
    [
        'role' => 'Sr. Programmer Analyst',
        'company' => 'V2 Solutions pvt ltd',
        'period' => 'Oct, 2005 - Feb, 2007',
        'location' => 'Mumbai, MH, India',
        'points' => [
            'Participating fully in Software Development Life Cycle',
            'Development of enterprise level web products',
            'Implementing software engineering process guides in product development',
            'Task distribution to other team members and day to day reports accordingly',
            'Communicating with overseas clients team throughout the development process',
        ],
    ],
    [
        'role' => 'Software Engineer',
        'company' => 'Vigorsoft pvt ltd',
        'period' => 'Oct, 2004 - June, 2005',
        'location' => 'Vadodara, GJ, India',
        'points' => [
            'Participating fully in Software Development Life Cycle',
            'Development of enterprise level web products',
            'Implementing software engineering process guides in product development',
            'Communicating with overseas clients team throughout the development process',
        ],
    ],
    [
        'role' => 'Trainee Software Programmer',
        'company' => 'Computer center, M S University, Vadodara',
        'period' => 'Apr, 2002 - Oct, 2004',
        'location' => 'Vadodara, GJ, India',
        'points' => [
            'Got expertise in style of Object Oriented Programming and class designs',
            'Web application development under MVC architectures and frameworks',
            'Understanding scope and role of various third party tools like payment gateways and email services in customised web applications',
            'Uses of SQL triggers and stored procedures in MySQL',
        ],
    ],
];

$proudOf = [
    ['fa fa-shield-alt', 'Courageous', 'Took charge of development and IT operations of the company in the most critical situation.'],
    ['fa fa-lightbulb', 'Innovative', 'Created out of the box software architectures even for complex business processes.'],
    ['fa fa-book-reader', 'Self learner', 'Fast learning skills and passionate about internet technologies. Able to transfer knowledge to development and software QA teams.'],
    ['fa fa-hands-helping', 'Educator - Giving back to society', 'Providing conceptual knowledge of software development and documentation to IT students. Making them confident to crack interviews.'],
];

$strengths = ['Self starter', 'Team motivator', 'Fast decision making', 'Stress bearing'];
?>
<section class="page-banner pb-5">
    <div class="container pb-5">
        <h1>Profile Summary</h1>
        <p class="tagline">Collaborate, Communicate &amp; Connect</p>
    </div>
</section>

<div class="container">
    <div class="profile-card">
        <div class="row align-items-center g-4">
            <div class="col-lg-auto text-center">
                <?= $this->Html->image('profile-photo.png', ['class' => 'photo', 'alt' => 'Chirayu Bhatt']) ?>
            </div>
            <div class="col-lg">
                <h2>Chirayu Bhatt</h2>
                <div class="role">Internet software professional</div>
                <ul class="contact-list">
                    <li><a href="mailto:contact@chirayu.im"><i class="fa fa-envelope"></i> contact@chirayu.im</a></li>
                    <li><a href="http://chirayu.im/"><i class="fa fa-link"></i> http://chirayu.im/</a></li>
                    <li><i class="fa fa-map-marker-alt"></i> Vadodara, GJ, India</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <h2 class="section-title mb-4">Experience</h2>
                <div class="timeline">
                    <?php foreach ($experience as $i => $job) : ?>
                    <div class="timeline-item<?= $i === 0 ? ' current' : '' ?>">
                        <h3><?= h($job['role']) ?></h3>
                        <div class="company"><?= h($job['company']) ?></div>
                        <div class="meta">
                            <span><i class="far fa-calendar-alt"></i><?= h($job['period']) ?></span>
                            <span><i class="fa fa-map-marker-alt"></i><?= h($job['location']) ?></span>
                        </div>
                        <ul>
                            <?php foreach ($job['points'] as $point) : ?>
                            <li><?= h($point) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="side-box">
                    <h3>Life Philosophy</h3>
                    <div class="philosophy">
                        <i class="fa fa-quote-left"></i>
                        Share successes at least to those who has provided opportunities to prove yourself.
                    </div>
                </div>
                <div class="side-box panel-card">
                    <h3>Most Proud Of</h3>
                    <?php foreach ($proudOf as [$icon, $title, $text]) : ?>
                    <div class="proud-item">
                        <i class="<?= h($icon) ?>"></i>
                        <div>
                            <h4><?= h($title) ?></h4>
                            <p><?= h($text) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="side-box">
                    <h3>Strengths</h3>
                    <?php foreach ($strengths as $strength) : ?>
                    <span class="strength"><?= h($strength) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-title">Ease With</h2>
        </div>
        <?= $this->element('tech_strip') ?>
    </div>
</section>
