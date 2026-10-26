<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', 'Chirayu Bhatt - Software Architect | Agentic AI, RAG & PHP');
$this->assign('description', 'Chirayu Bhatt is a software architect with 26+ years in PHP and LAMP web applications, now building Agentic AI, RAG and LLM-powered solutions. Vadodara, India.');
?>
<section class="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <?= $this->Html->image('/images/banner1.jpg', ['alt' => '']) ?>
                <div class="carousel-caption">
                    <p class="hero-title">There are no traffic jams along the extra mile <small>– said Roger Staubach.</small></p>
                    <div class="rule"></div>
                    <p>And I run full throttle on this course of extra mile, for excellence in everything I do and pursue is my mantra for life.</p>
                </div>
            </div>
            <div class="carousel-item">
                <?= $this->Html->image('/images/banner1.jpg', ['alt' => '']) ?>
                <div class="carousel-caption">
                    <p class="hero-title">Chirayu Bhatt</p>
                    <div class="rule"></div>
                    <p>Internet Software Professional</p>
                </div>
            </div>
            <div class="carousel-item">
                <?= $this->Html->image('/images/banner-2.jpg', ['alt' => '']) ?>
                <div class="carousel-caption">
                    <p class="hero-title">Expertise in Service Oriented Architectures</p>
                    <div class="rule"></div>
                    <p>Well-versed with PHP based B2B and B2C kind of software designs in most business domains</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="section-title">Chirayu Bhatt <span class="title-sub">Software Architect · Agentic AI &amp; RAG · PHP</span></h1>
                <div class="lead-quote mt-4">
                    <p>There are no traffic jams along the extra mile <cite>– said Roger Staubach.</cite></p>
                </div>
                <p>And I run full throttle on this course of extra mile, for excellence in everything I do and pursue is my mantra for life.</p>
                <p>Am Chirayu Bhatt, an enthusiastic and pro-active Internet Software Professional with over 26 years of experience in IT domain. I specialize in custom applications development for LAMP platform, using open source technologies and tools. Business-to-Business as well as Business-to-Consumer web applications that I develop are put to use for multiple verticals including Real Estate, Job Portals, Automotive, Social network, Product classifieds, Auctions, Travel and Hospitality.</p>
                <p>I am a Post Graduate Diploma holder in Computer Applications from The Maharaja Sayajirao University of Baroda, Vadodara. I have done my Bachelors in Science with Statistics from the same university.</p>
            </div>
            <div class="col-lg-5">
                <div class="d-grid gap-3">
                    <div class="trait">
                        <i class="fa fa-bolt"></i>
                        <div><strong>PASSIONATE</strong> about internet technologies</div>
                    </div>
                    <div class="trait">
                        <i class="fa fa-bullseye"></i>
                        <div><strong>SELF-DRIVEN</strong> to beat the goals I set for myself and projects I work on.</div>
                    </div>
                    <div class="text-center mt-2">
                        <?= $this->Html->link('View Profile Summary', '/profilesummary', ['class' => 'btn btn-accent btn-lg w-100']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-ai" id="ai-expertise" aria-labelledby="ai-expertise-title">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" id="ai-expertise-title">AI Expertise: Agentic AI, RAG &amp; LLM Integration</h2>
            <p class="section-lead mx-auto mt-3">I am also experienced with Artificial Intelligence. I design and build <strong>Agentic AI</strong> solutions, where AI agents plan and carry out multi-step tasks; <strong>Retrieval-Augmented Generation (RAG)</strong> systems that ground answers in a business's own documents and data using vector databases; and integrations of large language models (LLMs) into new and existing web applications through APIs and the Model Context Protocol (MCP).</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <article class="ai-card">
                    <i class="fa fa-robot" aria-hidden="true"></i>
                    <h3>Agentic AI</h3>
                    <p>AI agents that plan, use tools and complete multi-step business tasks, with human review where it matters.</p>
                </article>
            </div>
            <div class="col-md-6 col-lg-3">
                <article class="ai-card">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <h3>Retrieval-Augmented Generation (RAG)</h3>
                    <p>Answers grounded in your own documents and data, using embeddings and vector databases for accurate retrieval.</p>
                </article>
            </div>
            <div class="col-md-6 col-lg-3">
                <article class="ai-card">
                    <i class="fa fa-plug" aria-hidden="true"></i>
                    <h3>LLM Integration</h3>
                    <p>Large language models connected to new and existing PHP and web applications through APIs, with prompt engineering for reliable results.</p>
                </article>
            </div>
            <div class="col-md-6 col-lg-3">
                <article class="ai-card">
                    <i class="fa fa-project-diagram" aria-hidden="true"></i>
                    <h3>Model Context Protocol (MCP)</h3>
                    <p>Secure connections between AI assistants and business systems, so AI can work with live data and services.</p>
                </article>
            </div>
        </div>
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
                        <li>Relational Database Management Systems</li>
                        <li>NoSQL / No Schema database - MongoDB</li>
                        <li>Cloud hosted Software as a Services(SaaS)</li>
                        <li>Service Oriented Architectures</li>
                        <li>Hosting platform: Windows and Linux</li>
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
                        <li>Thorough execution of SDLC (software development lifecycle), right from defining project statement, gathering requirements, analysis and resource allocation, to its design, development, deployment, and SEO enhancements.</li>
                        <li>Project Management through estimating, budgeting, liaising and tracking</li>
                        <li>Coordinating with cross functional project teams</li>
                        <li>Managing project progress and adapt workable changes as required</li>
                        <li>Resolution of conflicts and stress bearing skills</li>
                        <li>Designing risk mitigation plans and fast decision making</li>
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
    ['fa fa-chalkboard-teacher', 'Corporate Training', 'Do you need your employees to undergo specific training for a particular IT skill set? With ample experience of corporate training.'],
    ['fa fa-laptop-code', 'Projects & Tech Talk', 'Am a GEEK! Do you want to discuss a project with me? Or just want to discuss any IT jargon you recently read somewhere? Am all ears.'],
]]) ?>
