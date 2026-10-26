<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', 'About Chirayu Bhatt - PHP, Agentic AI & RAG Expert');
$this->assign('description', 'About Chirayu Bhatt: PHP, Apache, SaaS and service oriented architecture skills, plus Agentic AI, RAG and LLM integration. Training and guidance for teams and students.');
?>
<?= $this->element('page_banner', ['heading' => 'About']) ?>

<section class="section">
    <div class="container">
        <div class="lead-quote">
            <p>There are no traffic jams along the extra mile <cite>– said Roger Staubach.</cite></p>
        </div>
        <p>And I run full throttle on this course of extra mile, for excellence in everything I do and pursue is my mantra for life.</p>
        <div class="row g-3 my-3">
            <div class="col-md-6">
                <div class="trait">
                    <i class="fa fa-bolt"></i>
                    <div><strong>PASSIONATE</strong> about internet technologies</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="trait">
                    <i class="fa fa-bullseye"></i>
                    <div><strong>SELF-DRIVEN</strong> to beat the goals I set for myself and projects I work on.</div>
                </div>
            </div>
        </div>
        <p>Am Chirayu Bhatt, an enthusiastic and pro-active Internet Software Professional with over 26 years of experience in IT domain. I specialize in custom applications development for LAMP platform, using open source technologies and tools. Business-to-Business as well as Business-to-Consumer web applications that I develop are put to use for multiple verticals including Real Estate, Job Portals, Automotive, Social network, Product classifieds, Auctions, Travel and Hospitality.</p>
        <p>I am also experienced with Artificial Intelligence. I design and build <strong>Agentic AI</strong> solutions, where AI agents plan and carry out multi-step tasks; <strong>Retrieval-Augmented Generation (RAG)</strong> systems that ground answers in a business's own documents and data using vector databases; and integrations of large language models (LLMs) into new and existing web applications through APIs and the Model Context Protocol (MCP).</p>
        <p class="mb-0">I am a Post Graduate Diploma holder in Computer Applications from The Maharaja Sayajirao University of Baroda, Vadodara. I have done my Bachelors in Science with Statistics from the same university.</p>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="panel-card">
                    <h2 class="section-title h3">Technical Skill Set</h2>
                    <ul class="check-list mt-3">
                        <li>PHP development language</li>
                        <li>Apache Web Server</li>
                        <li>Software as a Services(SaaS)</li>
                        <li>Service Oriented Architecture</li>
                        <li>Hosting platform: Windows and Linux</li>
                        <li>Hadoop Platform and Application Framework</li>
                        <li>Big Data Analytics and Machine Learning</li>
                        <li>Well versed with Online payment gateways and CRM applications</li>
                        <li>Agentic AI: AI agents and multi-step automation workflows</li>
                        <li>Retrieval-Augmented Generation (RAG) with vector databases</li>
                        <li>Generative AI, LLM integration and prompt engineering</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="panel-card">
                    <h2 class="section-title h3">Competencies</h2>
                    <ul class="check-list mt-3">
                        <li>Thorough execution of SDLC (software development lifecycle), right from defining project statement, gathering requirements, analysis and resource allocation, to its design, development, deployment, and SEO enhancement.</li>
                        <li>Project Management through tracking, liaising, and coordinating with multiple project teams</li>
                        <li>Communication with multiple cross-functional teams based the globe over</li>
                        <li>Research and Development in technological trends for assigned business domain</li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="mt-4 mb-0">Excellent strategic planning abilities, coupled with strong communication and interpersonal skills, enable me to not only manage multi-faceted complex projects, but also deliver and share my knowledge through corporate training sessions. I also assist IT students with their academic projects, guiding them through software architecture, frameworks, and documentation, as well as honing their troubleshooting skills.</p>
    </div>
</section>

<?= $this->element('services', ['cards' => [
    ['fa fa-user-graduate', 'Students', 'Are you a student, seeking consultation and guidance in IT sector or with a project? I will be pleased to help you with the best of my ability.'],
    ['fa fa-chalkboard-teacher', 'Corporate Training', 'Do you need your employees to undergo specific training for a particular IT skill set? With ample experience of corporate training,'],
    ['fa fa-laptop-code', 'Projects & Tech Talk', 'Am a GEEK! Do you want to discuss a project with me? Or just want to discuss any IT jargon you recently read somewhere? Am all ears.'],
]]) ?>
