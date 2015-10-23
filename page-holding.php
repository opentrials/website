<?php
/*
Template Name: Holding Page
*/

get_header(); ?>

    <nav id="site-navigation" class="main-navigation" role="navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>

    <header class="intro">
        <div class="news">
            <a href="#contribute">We are looking for: <strong>data partners</strong>, <strong>funding partners</strong>, <strong>community partners</strong>, <strong>individual partners</strong> &amp; <strong>users</strong>.</a>
            <a href="#board">We are delighted to present the <strong>Open Trials advisory board</strong>.</a>
        </div>
        
        <div>
            <div class="logo horizontal">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon.png" alt="">
                <h1>
                    <?php bloginfo( 'name' ); ?>
                </h1>
                <span class="tagline"><?php bloginfo( 'description' ); ?></span>
            </div>

            <div class="content">
                <div class="text">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; // end of the loop. ?>
                    
                    <div class="cta">
                        <a href="#register" class="updates">Join the Discussion</a> &nbsp; 
                        <a href="#contribute" class="contribute">Contribute to OpenTrials</a>
                    </div>
                </div>

                <div class="video">
                    <div class="videoWrapper">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RKmxL8VYy0M?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            
        </div>
    </header>

    <section id="register">
        <div><h2>Join the Discussion</h2>
            <article>

                <a href="https://twitter.com/opentrials" rel="external" class="twitter">
                    <h3>Follow</h3>
                    <span>@opentrials</span>
                </a>

                <a href="https://discuss.okfn.org/c/projects/open-trials" rel="external" class="discuss">
                    <h3>Discuss</h3>
                    <span>in our forum</span>
                </a>

                <a class="subscribe" href="#signup-form" id="signup-button">
                    <h3>Subscribe</h3>
                    <span>to our mailing list</span>
                </a>

            </article>
        </div>

    </section>
    <!-- Begin MailChimp Signup Form -->
    <form action="http://okfn.us10.list-manage1.com/subscribe/post" method="POST" id="signup-form" target="_blank">
        <input type="hidden" name="u" value="e39c0e42eb3478fb22b423e4e">
        <input type="hidden" name="id" value="34516c152f">

        <div class="field-group">
          <label for="MERGE1">First Name</label>
          <input type="text" name="MERGE1" id="MERGE1" size="25" value="">
        </div>

        <div class="field-group">
          <label for="MERGE2">Last Name</label>
          <input type="text" name="MERGE2" id="MERGE2" size="25" value="">
        </div>

        <div class="field-group">
          <label for="MERGE0">Email Address <span class="req asterisk">*</span></label>
          <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">
        </div>

        <div class="field-group">
          <label for="MERGE3">Organisation</label>
          <input type="text" name="MERGE3" id="MERGE3" size="25" value="">
        </div>

        <!--
        <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-4">
        <label for="MERGE4">Twitter Username</label>
        <div class="field-group">
            <input type="text" name="MERGE4" id="MERGE4" size="25" value="">
        </div>
        </div>
        -->

        <!-- real people should not fill this in and expect good things -->
        <div class="hidden"><input type="text" name="b_e39c0e42eb3478fb22b423e4e_34516c152f" tabindex="-1" value=""></div>
        <div class="submit_container clear">
        <input type="submit" class="button" name="submit" value="Register">
        </div>
    </form>
    <!--End mc_embed_signup-->

    <section id="contribute">
        <div>
            <article>
                <h2>Contribute to OpenTrials</h2>
                <p>Want to contribute to OpenTrials? We are looking for:</p>
                <ul class="inline">
                    <li><a href="#data-partners">data partners</a></li>
                    <li><a href="#funding-partners">funding partners</a></li>
                    <li><a href="#community-partners">community partners</a></li>
                    <li><a href="#individual-partners">individual partners</a></li>
                    <li><a href="#users">users (academic, patients, payers)</a></li>
                </ul>
                <section>
                    <h3 id="data-partners">Data partners: <small>people with data about trials</small ></h3>
                    <p>All data donors get full credit and recognition for their data, and citations from researchers downloading and re-using it through OpenTrials, as well as the knowledge that their existing data - perhaps from old projects - is being used and doing good. Some examples of data that the community can re-use:</p>
                    <ul class="long">
                        <li>Have you done a study on publication bias? If so you will have data matching a registry entry, or ethics committee paperwork, onto published papers, and perhaps onto other documents too. These linkages are valuable to improve the quality and availability of data on trials for everyone.</li>
                        <li>Have you done a systematic review? if so, you will have structured data about clinical trials included in your review, that we can import and put to good use.</li>
                        <li>Have you mapped one dictionary of medical terms, or drug names, onto another? If so this can help us clean up our data and make it more useful to users.</li>
                    </ul>
                    <a href="#contribute-form">Get in touch</a>
                </section>
                <section>
                    <h3 id="funding-partners">Funding partners: <small>people who can contribute money, or other resources</small></h3>
                    <p>As a funding partner you will have a stake in an important and groundbreaking data project, producing much needed infrastructure for medicine.  There are also opportunities to prioritize a particular drug or disease area to work on.</p>
                    <ul class="long">
                        <li>Would you like to see the trial data and documents for a particular drug or disease area made available, and discoverable, on the Open Trials platform as a priority?</li>
                        <li>Do you have access to funding that will accelerate progress at OpenTrials?</li>
                        <li>Are you able to contribute significant in-kind resources to widen the scope and ambition of the Open Trials project?</li>
                    </ul>
                    <a href="#contribute-form">Get in touch</a>
                </section>
                <section>
                    <h3 id="community-partners">Community partners: <small>people with networks, and knowledge</small></h3>
                    <p>We always want to meet with more patient groups, trial sponsors, and any other organisations who will use, generate, or contribute data. You will receive updates, invitations to events, and the opportunity to help shape the project.</p>
                    <ul class="long">
                        <li>Are you interested in open data and/or health, and want to be involved in the Open Trials community?</li>
                        <li>Can you contribute your knowledge, needs, and network to Open Trials?</li>
                        <li>Are you interested in accessing the community around Open Trials, and also in contributing your knowledge about patient groups, trials sponsors and other organisations who generate or contribute data?</li>
                    </ul>
                    <a href="#contribute-form">Get in touch</a>
                </section>
                <section>
                    <h3 id="individual-partners">Individual partners: <small>people who want to contribute time to the project</small></h3>
                    <p>As an individual partner, you can play a key role in helping to find data, clean data, understand it, develop the project, and help get others involved.</p>
                    <ul class="long">
                        <li>Are you someone who is interested in contributing your time as a volunteer to the Open Trials project?</li>
                        <li>Can you identify new sources of data to add to our <a href="https://discuss.okfn.org/t/list-of-data-sources/1343" target="_blank">list of data sources</a>?</li>
                        <li>Are you wanting to see Open Trials reach its ambitions and provide more data to the public? You can help us find data, clean data, identify new datasets, develop the project and help others get involved.</li>
                        <li>Perhaps you are someone working in health/a patient/a citizen/a data journalist/a student who wants to work on this pioneering project?</li>
                    </ul>
                    <a href="#contribute-form">Get in touch</a>
                </section>
                <section>
                    <h3 id="users">Users: <small>patients, researchers, healthcare professionals, funders</small></h3>
                    <p>As a pre-launch user you can get early access to the data, and the opportunity to help shape the project. You can contribute with user testing of the Open Trials platform. You can also give us new user stories, feature requests, and validation of the project.</p>
                    <ul class="long">
                        <li>Are you someone who wants to belong to the official ‘user’ group for Open Trials, so that you can get early access to data?</li>
                        <li>Are you willing to be involved in user testing, whether you are a patient, researcher, healthcare professional or funder?</li>
                        <li>Can you provide us with new user stories, feature requests or validate the project as it progresses?</li>
                    </ul>
                    <a href="#contribute-form">Get in touch</a>
                </section>
                <!-- Begin MailChimp Signup Form -->
                <form novalidate="" target="_blank" class="validate" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form" method="post" action="//okfn.us10.list-manage.com/subscribe/post?u=e39c0e42eb3478fb22b423e4e&amp;id=35965ded3a">
    <div id="mc_embed_signup_scroll">
      <h3 id="contribute-form">Contribute to OpenTrials</h3>

      <div class="field-group">
        <label for="mce-FNAME">First Name </label>
        <input type="text" id="mce-FNAME" class="" name="FNAME" value="">
      </div>
      <div class="field-group">
        <label for="mce-LNAME">Last Name </label>
        <input type="text" id="mce-LNAME" class="" name="LNAME" value="">
      </div>
      <div class="field-group">
        <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
        </label>
        <input type="email" id="mce-EMAIL" class="required email" name="EMAIL" value="">
      </div>
      <div class="field-group">
        <label for="mce-MMERGE3">Organisation </label>
        <input type="text" id="mce-MMERGE3" class="" name="MMERGE3" value="">
      </div>

      <label for="mce-MMERGE4">Additional Information </label>
<input type="text" id="mce-MMERGE4" class="" name="MMERGE4" value="">

      <div class="mc-field-group input-group clearfix">
        I'm interested in becoming
<ul><li><input type="checkbox" value="1" name="group[7201][1]" id="mce-group[7201]-7201-0"><label for="mce-group[7201]-7201-0">a data partner</label></li>
<li><input type="checkbox" value="2" name="group[7201][2]" id="mce-group[7201]-7201-1"><label for="mce-group[7201]-7201-1">a funding partner</label></li>
<li><input type="checkbox" value="4" name="group[7201][4]" id="mce-group[7201]-7201-2"><label for="mce-group[7201]-7201-2">a community partner</label></li>
<li><input type="checkbox" value="16" name="group[7201][16]" id="mce-group[7201]-7201-3"><label for="mce-group[7201]-7201-3">an individual partner</label></li>
<li><input type="checkbox" value="8" name="group[7201][8]" id="mce-group[7201]-7201-4"><label for="mce-group[7201]-7201-4">a user</label></li>
</ul>
</div>

      <div class="clear" id="mce-responses">
        <div style="display:none" id="mce-error-response" class="response"></div>
        <div style="display:none" id="mce-success-response" class="response"></div>
      </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;"><input type="text" value="" tabindex="-1" name="b_e39c0e42eb3478fb22b423e4e_35965ded3a"></div>
      <div class="clear"><input type="submit" class="button" id="mc-embedded-subscribe" name="subscribe" value="Send"></div>
      </div>

    </form>
<!--End mc_embed_signup-->
            </article>
        </div>
    </section>

    <section id="board">
        <h3>Advisory Board</h3>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/clive_adams.jpg" alt="">
            <figcaption>
                <h4>Dr Clive Adams</h4>
                <p>Dr Clive Adams is based at the Institute of Mental Health, at the University of Nottingham. He has expertise in the evaluation of the care of people living with schizophrenia - synthesis of trial data into systematic reviews, and randomised trials.. Clive Adams is interested in medical informatics and has experience of biomedical search. He undertakes research in London, Oxford, Leeds, Nottingham, UK but trials are undertaken with collaborators in Australia, Brazil, China, India, reviews with people in 21 different countries. Co-ordinating Editor of the Cochrane Schizophrenia Group, interested in registers of trials, study-based registers, making data available to everyone, and tailored, auto-generation of best evidence of the effects of treatments.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/doug_altman.jpg" alt="">
            <figcaption>
                <h4>Prof. Doug Altman</h4>
                <p>Doug Altman is director of the Centre for Statistics in Medicine in Oxford and co-director of the Oxford Clinical Trials Research Unit. He has published over 700 peer reviewed articles, many aimed at clarifying statistical ideas for medical researchers. He is senior statistics editor at the BMJ and co-editor-in-chief of Trials.</p>

                <p>He is a member of several executive groups developing guidelines for reporting research, including those for CONSORT, STROBE, PRISMA, ARRIVE, SPIRIT, REMARK, and TRIPOD. In 2006 he founded the EQUATOR Network which seeks to improve the quality of scientific publications by promoting transparent and accurate reporting of health research. He received the BMJ’s Lifetime Achievement Award in 2015.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/barbara_bierer.jpg" alt="">
            <figcaption>
                <h4>Prof. Barbara Bierer</h4>
                <p>Barbara E. Bierer is a hematologist-oncologist, is a Professor of Medicine at Harvard Medical School and the Brigham and Women’s Hospital. Dr. Bierer co-founded and now leads, as faculty co-director, the Multi-Regional Clinical Trials (MRCT) Center of BWH and Harvard, a University-wide and collaborative effort to improve standards for the planning and conduct of clinical trials in the developing world. She is the Program Director of the Regulatory Foundations, Law and Ethics Program of the Harvard Catalyst, the Harvard Clinical and Translational Science Award.</p>

                <p>She has authored or co-authored over 180 publications and is on the editorial boards of a number of journals including Current Protocols of Immunology.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/geoffrey_bilder.jpg" alt="">
            <figcaption>
                <h4>Geoffrey Bilder</h4>
                <p>Geoffrey Bilder is Director of Strategic Initiatives at CrossRef, where he has led the development and launch of a number of industry initiatives including CrossCheck, CrossMark, ORCID and FundRef. He co-founded Brown University’s Scholarly Technology Group in 1993, providing the Brown academic community with advanced technology consulting in support of their research, teaching and scholarly communication. He was subsequently head of IT R&amp;D at Monitor Group, a global management consulting firm. From 2002 to 2005, Geoffrey was Chief Technology Officer of scholarly publishing firm Ingenta, and just prior to joining CrossRef, he was a Publishing Technology Consultant at Scholarly Information Strategies.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/tracey_brown.jpg" alt="">
            <figcaption>
                <h4>Tracey Brown</h4>
                <p>Tracey has been the Director of Sense About Science since 2002. Tracey has led campaigns for sound science and evidence in public life and has written many public guides to scientific research. She writes about scientific evidence, policy and the public, for national media, periodicals and books. She was a Commissioner on the UK Drug Policy Commission 2009-2012. Her recent book with Michael Hanlon, In the Interests of Safety, is an exploration of safety and security rules that have no basis in evidence, and a manifesto for changing them.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/simon_denegri.jpg" alt="">
            <figcaption>
                <h4>Simon Denegri</h4>
                <p>Simon Denegri is National Director for Patients and the Public at the National Institute for Health Research (NIHR), and Chair of INVOLVE – the national advisory group for the promotion and support of public involvement in research funded by NIHR. He was Chief Executive of the Association of Medical Research Charities (AMRC) from 2006 until 2011 and, prior to this, Director of Corporate Communications at the Royal College of Physicians from 2003.  He also worked in corporate communications for Procter &amp; Gamble in the United States from 1997 to 2000.  He is a member of the NIHR Advisory and Strategy Boards, and a Board member of the UK Clinical Research Collaboration (UKCRC), Farr Institute and care.data programme respectively. </p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/rob_frost.jpg" alt="">
            <figcaption>
                <h4>Dr Rob Frost</h4>
                <p>Dr Rob Frost is Policy Director within GlaxoSmithKline’s Office for the Chief Medical Officer (CMO).</p>

                <p>The CMO is the ‘voice of the patient’ within GSK, leading the culture and governance framework to place the interests of the patient at the centre of research, development and commercialisation of medicines. As part of the Medical Policy group, Rob helps to develop internal policies and GSK external positions in areas of medical governance, including the ethical conduct and disclosure of research.</p>

                <p>Since joining GSK in 2011, Rob has supported the development of new transparency commitments around disclosure of clinical trial information, such as the <a href="https://clinicalstudydatarequest.com/" target="b
                    ">clinicalstudydatarequest.com</a> initiative to provide external researchers with access to anonymised patient level trial data. He has also worked closely on topics relating to data privacy and ethics, including ongoing revisions to European data protection legislation.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/paul_glasziou.jpg" alt="">
            <figcaption>
                <h4>Prof. Paul Glasziou</h4>
                <p>Paul Glasziou FRACGP, PhD is Professor of Evidence-Based Medicine at Bond University. Paul Glasziou was a part-time General Practitioner for many years, and the Director of the Centre for Evidence-Based Medicine in Oxford from 2003-2010 and is an international leader in evidence-based medicine. His research focuses on improving the clinical impact of publications by reducing the more than $85 Billion annual loss from unpublished and unusable research (Chalmers, Glasziou, Lancet 2009). As a family practitioner this work has particularly focused on the applicability and usability of published trials and reviews (Glasziou, BMJ 2007, 2010).</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/trish_groves.jpg" alt="">
            <figcaption>
                <h4>Trish Groves</h4>
                <p>Trish Groves is deputy editor and head of research at The BMJ and editor-in-chief of BMJ Open. She is also an honorary research fellow at the School for Public Policy, UCL; has contributed to European Science Foundation proposals for revising the EU Clinical Trials Directive; served on the council of the Committee on Publication Ethics and the steering groups of the EQUATOR Network on transparent health research, the AllTrials campaign, and the BOLDER (Better Outcomes through Learning from Data and Engaging in Research) Initiative. She has helped to develop research reporting statements including CONSORT 2010 for trials, SPIRIT 2013 for trial protocols, and PRISMA extensions for systematic reviews.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/iain_hrynaszkiewicz.jpg" alt="">
            <figcaption>
                <h4>Iain Hrynaszkiewicz</h4>
                <p>Iain Hrynaszkiewicz is Head of Data and HSS Publishing at Nature Publishing Group and Palgrave Macmillan, where his responsibilities include developing new areas of open research publishing and data policy. He is publisher of the journal Scientific Data, and responsible for developing open access book publishing. He has led various initiatives, and published several articles, related to data sharing, open access, open data and the role of publishers in reproducible research. These include guidelines for sharing clinical research data, published in the BMJ in 2010, and a new project in Scientific Data in 2015.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/harlan_krumholz.jpg" alt="">
            <figcaption>
                <h4>Dr. Harlan Krumholz</h4>
                <p>Harlan Krumholz is a cardiologist, health care scientist, and health care improvement expert at Yale University where he is the Harold H. Hines, Jr. Professor of Medicine. He is Director of the Yale-New Haven Hospital Center for Outcomes Research and Evaluation (CORE) and Co- Director of the Robert Wood Johnson Foundation Clinical Scholars Program at Yale. He has published more than 800 academic papers and his research interests focus on improving the quality and outcomes of clinical decisions and health care delivery, eliminating disparities, and avoiding wasteful practices.</p>

                <p>Dr. Krumholz is a Distinguished Scientist of the American Heart Association. He is on the Board of Governors of the Patient-Centered Outcomes Research Institute, and the Advisory Committee to the Director of the National Institutes of Health.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/richard_lehman.jpg" alt="">
            <figcaption>
                <h4>Dr Richard Lehman</h4>
                <p>Richard Lehman was a full-time general practitioner in Banbury for 32 years. For the last 17 years he has also written a weekly summary of the principal medical journals which is posted on the BMJ website. Since 2010 he has worked on studies of the patient experience, and has spent a year at Yale working with the Yale University Open Data Access (YODA) project and remains a consultant to the group. His main interest in ways to develop better informed dialogue with patients and he is on the steering committees of the NICE shared decision making initiative and Academy of Medical Royal Colleges Choosing Wisely group. He is Senior Advisory Fellow in General Practice at the UK Cochrane Centre.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/chris_mavergames.jpg" alt="">
            <figcaption>
                <h4>Chris Mavergames</h4>
                <p>Chris Mavergames is Head of Informatics and Knowledge Management for The Cochrane Collaboration, a global health research organization working in the synthesis of health evidence for decision-making. My job is to lead Cochrane’s technology and knowledge management (people, process + technology) infrastructure and to provide vision and leadership for Cochrane’s emerging technology strategy to 2020, which will accompany the overall ‘Strategy to 2020’. Our infrastructure includes software, tools, and data stores for extracted clinical trial data and the production of systematic reviews and meta-analyses, the management of a network of more than 120 multilingual websites, as well as other technology and knowledge management initiatives including the Cochrane Linked Data Project.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/martin_mckee.jpg" alt="">
            <figcaption>
                <h4>Prof. Martin McKee</h4>
                <p>Martin McKee is Professor of European Public Health at the London School of Hygiene and Tropical Medicine where he founded the European Centre on Health of Societies in Transition (ECOHOST), a WHO Collaborating Centre. He is also Research Director of the European Observatory on Health Systems and Policies and President of the European Public Health Association. He trained in medicine and public health and has written extensively on health and health policy, with a particular focus on countries undergoing political and social transition. In 2005 was made a Commander of the Order of the British Empire (CBE).</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/peter_murray-rust.jpg" alt="">
            <figcaption>
                <h4>Peter Murray-Rust</h4>
                <p>Dr. Murray-Rust leads a research group in the Department of Chemistry at Cambridge University. As well as his work in chemistry Murray-Rust is also known for his support of open access and open data. Co-creator of the Chemical Markup Language (CML), he has long been a pioneer of data exchange and information-mining in the chemical sciences. Firmly committed to promoting openness and data availability throughout the discipline, he recently started the world-wide molecular matrix, the largest open online repository of molecular information in the world. He is also an Advisory Council Member for Open Knowledge.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/daniel_shanahan.jpg" alt="">
            <figcaption>
                <h4>Daniel Shanahan</h4>
                <p>Daniel Shanahan joined BioMed Central in 2013 as Associate Publisher, driving open science and research transparency strategies and initiatives across the company.</p>

                <p>He is a member of the CONSORT Group and has helped develop a number of research reporting statements, including CONSORT extensions for pilot and feasibility studies, and embedded recruitment trials. Daniel is Chair of the Threaded Publications (Linked Reports of Clinical Trials) working group, a member of the working group for the Trial Forge initiative to improve the efficiency of clinical trials, and is also participating in strategic efforts to encourage the wider adoption of reporting guidelines, and to improve policies to combat publication bias and selective reporting, among others.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/erick_turner.jpg" alt="">
            <figcaption>
                <h4>Dr. Erick Turner</h4>
                <p>Erick Turner, previously worked at the US Food and Drug Administration (FDA), acting as gatekeeper for new psychotropic drugs seeking to enter the US market and saw how vast amounts of data relevant to drug efficacy and safety never see publication. Since leaving the FDA for Oregon Health &amp; Science University, he has written several papers drawing attention to the Drugs@FDA website as a valuable source of unbiased clinical trial data. He has published papers demonstrating the degree to which selective publication exaggerates the efficacy of drugs used to treat depression, schizophrenia, and anxiety disorders. He has published a how-to paper in the BMJ5 in order to demystify Drugs@FDA and encourage other researchers to make use this trove of clinical trial data.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/matt_westmore.jpg" alt="">
            <figcaption>
                <h4>Matthew Westmore</h4>
                <p>Matt Westmore is based at the University of Southampton where he is Director of Finance and Strategy for the NIHR Evaluation, Trials and Studies Co-ordinating Centre (NETSCC - www.nets.nihr.ac.uk).  Within
NETSCC, Matt is responsible for work around the NIHR <a href="http://nets.nihr.ac.uk/about/adding-value-in-research">Adding Value in Research Framework</a>. Matt is also responsible for the <a href="http://www.southampton.ac.uk/netscc/research/index.page">‘Research on Research’ programme</a>; a research programme aimed at understanding research identification, funding, delivery and publication and how avoidable waste can be reduced through our work. He is also Director of the Wessex Institute, Enterprise and Partnerships, University of Southampton.</p>
            </figcaption>
        </figure>

        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/board/deborah_zarin.jpg" alt="">
            <figcaption>
                <h4>Dr Deborah Zarin</h4>
                <p>Deborah A. Zarin, M.D. is the Director, ClinicalTrials.gov in the National Library of Medicine. In this capacity, Dr. Zarin oversees the development and operation of an international registry and results reporting system for clinical trials, and the corresponding implementation of legal and other trial reporting policies.</p>

                <p>Dr Zarin’s recent research has been on the quality of trial reporting, as well as issues in the design and analysis of clinical trials. Previous positions held by Dr. Zarin include the Director, Technology Assessment Program, at the Agency for Healthcare Research and Quality, and the Director of the Practice Guidelines program at the American Psychiatric Association.</p>
            </figcaption>
        </figure>
    </section>
  

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
