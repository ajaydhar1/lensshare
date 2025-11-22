<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />    	
    	<meta name="description" content="1000+ key professional skills organized by executive and managerial roles."> 
        <meta name="author" content="LensShare" />
        
        <!-- Page title -->
        <title>Management Index – LensShare</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Management Skills - LensShare" />
        <meta name="twitter:description" content="1000+ key professional skills organized by executive and managerial roles." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/work/management-index.jpg" />
        
        <meta property="og:url" content="https://lensshare.co/management-index.php" />
        <meta property="og:title" content="Management Skills - LensShare" />
        <meta property="og:description" content="1000+ key professional skills organized by executive and managerial roles." />
        <meta property="og:image" content="https://lensshare.co/assets/img/work/management-index.jpg" />    
        <meta property="og:site_name" content="LensShare" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
        
        <!-- Stylesheets & Fonts -->
    	<link href="css/management/custom.css" rel="stylesheet">

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <style>
          body {
            background: #050816; /* deep, calm navy-ish */
            color: #e5e7eb;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
          }

          header.masthead {
            background: radial-gradient(circle at top, rgba(56, 189, 248, 0.25), transparent 55%);
            min-height: 420px;
            padding-top: 7rem;
            display: flex;
            align-items: center;
          }

          .container {
            background: transparent;
          }

          hr.divider {
            height: 3px;
            border: 0;
            border-radius: 999px;
            background: linear-gradient(to right, #22d3ee, #a855f7);
            margin: 1.5rem auto;
            width: 80px;
          }

          /* Hide the old animated webcam GIF noise */
          img.hi {
            display: none;
          }

          /* Headline / subhead */
          #masthead-text h1 {
            font-weight: 700;
            letter-spacing: 0.04em;
          }

          #masthead-text p {
            color: #cbd5f5;
            max-width: 32rem;
            margin-left: auto;
            margin-right: auto;
          }

          /* “Start Learning” button */
          .btn.btn-light.btn-xl {
            border-radius: 999px;
            padding: 0.8rem 1.8rem;
            font-weight: 600;
            border: 1px solid rgba(248, 250, 252, 0.24);
          }

          .btn.btn-light.btn-xl:hover {
            background: #e5e7eb;
            color: #020617;
          }

          /* Platform toggle (YouTube / Google) */
          .basement_title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 3rem;
            margin-bottom: 1rem;
          }

          #sm-tags {
            font-size: 1.35rem;
            font-weight: 600;
          }

          #hash-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.4);
            margin-left: 0.5rem;
            background: rgba(15, 23, 42, 0.8);
          }

          #hash-icons a:hover {
            background: rgba(30, 64, 175, 0.9);
          }

          /* Tag cloud container */
          #tag-cloud-ul {
            margin-top: 1.5rem;
            padding: 1.5rem 1.25rem 2.5rem;
            border-radius: 1.25rem;
            background: rgba(15, 23, 42, 0.9);
            border: 1px solid rgba(148, 163, 184, 0.35);
          }

          #tag-cloud-ul h1,
          #tag-cloud-ul h2,
          #tag-cloud-ul h3,
          #tag-cloud-ul h4 {
            color: #e5e7eb;
          }

          #tag-cloud-ul h1 {
            font-size: 1.7rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
          }

          #tag-cloud-ul h2.blog-h2 {
            margin-top: 3rem;
            margin-bottom: 1rem;
            font-size: 1.4rem;
          }

          #tag-cloud-ul h3 {
            font-size: 1.15rem;
            margin-top: 1.25rem;
            margin-bottom: 0.5rem;
          }

          /* Softer “hashtag” pills */
          .hashtag {
            display: inline-block;
            margin: 0.25rem 0.3rem;
            padding: 0.4rem 0.8rem;
            border-radius: 999px;
            background: rgba(148, 163, 184, 0.12);
            border: 1px solid rgba(148, 163, 184, 0.35);
            font-size: 0.85rem;
            white-space: nowrap;
          }

          .hashtag a {
            color: #e5e7eb;
            text-decoration: none;
          }

          .hashtag:hover {
            background: rgba(56, 189, 248, 0.18);
            border-color: rgba(56, 189, 248, 0.75);
          }

          .body-inner a {
            text-decoration: none;
          }

          .body-inner .content li {
            margin-bottom: 0.8rem;
          }

          #tag-cloud-ul #google-tags h1,
          #tag-cloud-ul #youtube-tags h1 {
            margin-bottom: 1.5rem;
          }

          /* Reference section */
          .content h3.mt-5 {
            margin-top: 3rem !important;
          }

          .content p {
            color: #cbd5f5;
          }

          .content a {
            color: #38bdf8;
          }

          .content a:hover {
            color: #e0f2fe;
          }

          h3 {
            scroll-margin-top: 90px;
          }


        </style>


    </head>

    <body class="wide side-panel side-panel-static">
        <div class="blur">
        <!-- Body Inner -->
        <div class="body-inner">

            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg fixed-top py-3" id="mainNav">
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand text-secondary" href="index.php">LensShare</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto my-2 my-lg-0">
                            <li class="nav-item my-auto"><a class="nav-link" style="margin-right: 0.65rem;" href="work.php">Work Rooms</a></li>
                            <li class="nav-item"><a class="btn btn-primary text-white" style="" href="https://video-lensshare.com/Happy%20Hour#config.disableDeepLinking=true">Happy Hour</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Masthead-->
            <header class="masthead">
                    <div class="container px-4 px-lg-5">
                        <div id="masthead-text" class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center" style="">
                            <div class="col-lg-8 align-self-end">
                                <h1 class="text-light font-weight-bold"><strong>Management Skills</strong></h1>
                                <hr class="divider" />
                            </div>
                            <div class="col-lg-8 align-self-baseline">
                                <p class="text-white-75 mb-3">1000+ key professional skills organized by executive and managerial roles.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <img class="hi" src="assets/img/all/webcam7.gif">
                                <img class="hi" src="assets/img/all/webcam2.gif">
                                <img class="hi" src="assets/img/all/webcam4.gif">
                                <img class="hi" src="assets/img/all/webcam6.gif">
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="col-lg-4 text-center">
                                <a class="btn btn-light btn-xl" href="#platform-selector">Start Learning</a>
                            </div>
                        </div>
                    </div>

            </header>
    		
    		<!-- start: Content -->
    		<div class="container content mb-5">
    			
                <?php /*
    			<div class="row">
    				<div class="col-2"></div>
    				<div class="col-8">
    					<img src="assets/img/work/management.jpg" class="img-fluid rounded mt-5 mb-5 animated visible flipInY" data-animate="flipInY"></img>
    				</div>
    			</div>
    			*/ ?>

        		<div id="platform-selector" class="basement_title text-white mb-3">
                  <span class="h1" id="sm-tags">Management Skills Library</span>
                  <span class="d-block mt-2" style="font-size:0.95rem; color:#cbd5f5;">
                    Click any skill below to search for related videos on YouTube.
                  </span>
                </div>
             <div id="tag-cloud-ul">

<div id="youtube-tags" class="tag-cloud-sidebar basement_content card-content" style="">
<h1 style="text-align: center; font-size: 40px;"><strong>SKILLS INVENTORY</strong></h1>

<div class="row">

<div class="col-md-6">

<ul class="outline">

    <li><h3>Leaders &amp; Executive Managers</h3>

        <ul>

<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id64">CEO (99 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id65">Executive Leadership (111 Skills)</a></h4></li>
        </ul>

    </li>

    <li><h3>Management</h3>

        <ul>

<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id66">Management (100 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id67">Change Management (40 Skills)</a></h4></li>
        </ul>

    </li>

    <li><h3>Project Management</h3>

        <ul>

<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id68">Program Management (98 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id69">Project Management (125 Skills)</a></h4></li>
        </ul>

    </li>

    <li><h3>Business Professionals</h3>

        <ul>

<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id70">Sales (95 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id71">Marketing (111 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id72">Entrepreneurs (90 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id73">MBA (110 Skills)</a></h4></li>
        </ul>

    </li>

</ul>



</div>

<div class="col-md-6">



<ul>

    <li><h3>Soft Skills</h3>

        <ul>

            <ul>

<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id74">Soft Skills (87 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id75">Leadership (59 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id76">Public Speaking (89 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id77">Presentations (22 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id78">Time Management (34 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id79">Interpersonal (80 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id80">Emotional Intelligence (42 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id81">Communication (90 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id82">Visual Communication (83 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id83">Negotiation (103 Skills)</a></h4></li>
<li><h4 style="margin: 0px; font-weight: normal !important;"><a href="#id84">Innovation (60 Skills)</a></h4></li>
        </ul>

    

</ul>



</li></ul></div>

</div>





<hr>





<h2 class="blog-h2">1. Leaders &amp; Executive Managers</h2>



<h3 id="id64">1.1 CEO (99 Skills)</h3>


<h4>Core Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Defining%20Mission%2C%20Vision%20and%20Values" target="_blank">1. Defining Mission, Vision and Values</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communicating%20Values" target="_blank">2. Communicating Values</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Championing%20a%20Vision" target="_blank">3. Championing a Vision</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">4. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategy%20Formulation" target="_blank">5. Strategy Formulation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategy%20Execution" target="_blank">6. Strategy Execution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Financial%20Management" target="_blank">7. Corporate Financial Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mergers%2C%20Acquisitions%20and%20Divestiture" target="_blank">8. Mergers, Acquisitions and Divestiture</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Governance" target="_blank">9. Corporate Governance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Protecting%20and%20Growing%20a%20Firm%27s%20Assets" target="_blank">10. Protecting and Growing a Firm's Assets</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Preserving%20and%20Enhancing%20a%20Firm%27s%20Reputation" target="_blank">11. Preserving and Enhancing a Firm's Reputation</a></div>


<h4>Strategy</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Competitive%20Strategy" target="_blank">12. Competitive Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Management%20of%20Innovation" target="_blank">13. Strategic Management of Innovation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Strategic%20Business%20Models" target="_blank">14. Developing Strategic Business Models</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Succession%20Planning" target="_blank">15. Succession Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Hiring" target="_blank">16. Strategic Hiring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Top%20Talent" target="_blank">17. Managing Top Talent</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sustainability" target="_blank">18. Sustainability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Social%20Responsibility" target="_blank">19. Corporate Social Responsibility</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Entrepreneurship" target="_blank">20. Corporate Entrepreneurship</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identification%20and%20Evaluation%20of%20Market%20Opportunities" target="_blank">21. Identification and Evaluation of Market Opportunities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Commercializing%20Business%20Capabilities" target="_blank">22. Commercializing Business Capabilities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20and%20Operations%20Planning" target="_blank">23. Sales and Operations Planning</a></div>


<h4>Executive Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Communications%20to%20the%20Board%20of%20Directors" target="_blank">24. Managing Communications to the Board of Directors</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Relationships%20with%20the%20Board%20of%20Directors" target="_blank">25. Managing Relationships with the Board of Directors</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Ensuring%20Corporate%20Transparency" target="_blank">26. Ensuring Corporate Transparency</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Raising%20Capital" target="_blank">27. Raising Capital</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Prioritization%20and%20Resource%20Allocation" target="_blank">28. Prioritization and Resource Allocation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quality%20Management" target="_blank">29. Quality Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organizational%20Design" target="_blank">30. Organizational Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Strategic%20Objectives" target="_blank">31. Managing Strategic Objectives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Strategic%20Alliances" target="_blank">32. Developing Strategic Alliances</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market%20and%20Business%20Forecasting" target="_blank">33. Market and Business Forecasting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Continuous%20Business%20Improvement" target="_blank">34. Continuous Business Improvement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Holding%20Leaders%20Accountable%20for%20Results" target="_blank">35. Holding Leaders Accountable for Results</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Global%20Operations" target="_blank">36. Managing Global Operations</a></div>


<h4>Leadership</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leading%20an%20Organization" target="_blank">37. Leading an Organization</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leading%20Extended%20Enterprises%20%28Multi-Firm%20Structures%29" target="_blank">38. Leading Extended Enterprises (Multi-Firm Structures)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creating%20a%20High%20Performance%20Culture" target="_blank">39. Creating a High Performance Culture</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20High%20Potential%20Talent" target="_blank">40. Developing High Potential Talent</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Negotiations" target="_blank">41. Business Negotiations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Partnerships%20and%20Alliances" target="_blank">42. Establishing Partnerships and Alliances</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leadership%20Assessment%20%26%20Development" target="_blank">43. Leadership Assessment &amp; Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Removing%20Obstacles%20for%20High%20Priority%20Programs%20and%20Initiatives" target="_blank">44. Removing Obstacles for High Priority Programs and Initiatives</a></div>


<h4>Decision Making</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Analysis%20for%20Corporate%20Decisions" target="_blank">45. Financial Analysis for Corporate Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Solutions%20to%20Multidimensional%20Problems" target="_blank">46. Developing Solutions to Multidimensional Problems</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Modeling%20Business%20Decisions" target="_blank">47. Modeling Business Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Social%20Dilemmas" target="_blank">48. Managing Social Dilemmas</a></div>


<h4>Legal, Risk &amp; Compliance</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Regulatory%20Compliance" target="_blank">49. Regulatory Compliance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Liability" target="_blank">50. Managing Liability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organizing%20a%20Company%20%28Legal%20Structure%29" target="_blank">51. Organizing a Company (Legal Structure)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Management" target="_blank">52. Risk Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Counterparty%20Risk%20Management" target="_blank">53. Counterparty Risk Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Operational%20%26%20Financial%20Risk%20Oversight" target="_blank">54. Operational &amp; Financial Risk Oversight</a></div>


<h4>Technology</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Management%20of%20Technology" target="_blank">55. Strategic Management of Technology</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Digital%20Business%20Strategy" target="_blank">56. Digital Business Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=IT%20Governance" target="_blank">57. IT Governance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20a%20Portfolio%20of%20IT%20Investments" target="_blank">58. Managing a Portfolio of IT Investments</a></div>


<h4>Soft Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Aligning%20Others%20Around%20Short%20Term%20and%20Long%20Range%20Plans" target="_blank">59. Aligning Others Around Short Term and Long Range Plans</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomacy" target="_blank">60. Diplomacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Endurance" target="_blank">61. Endurance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Charisma" target="_blank">62. Charisma</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Results%20Focus" target="_blank">63. Results Focus</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Action%20Focus" target="_blank">64. Action Focus</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creative%20Questioning" target="_blank">65. Creative Questioning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Trust%20%26%20Verify" target="_blank">66. Trust &amp; Verify</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intelligent%20and%20Curious" target="_blank">67. Intelligent and Curious</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Passion%20for%20Pursuing%20Goals" target="_blank">68. Passion for Pursuing Goals</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Breakthrough%20Thinking" target="_blank">69. Breakthrough Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dealing%20with%20Ambiguity" target="_blank">70. Dealing with Ambiguity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Commercial%20Perspective" target="_blank">71. Commercial Perspective</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Innovation" target="_blank">72. Innovation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cross-Cultural%20Leadership" target="_blank">73. Cross-Cultural Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Finding%20Order%20in%20Chaos" target="_blank">74. Finding Order in Chaos</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Networking%20With%20External%20Executive%20Leaders" target="_blank">75. Networking With External Executive Leaders</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influence%20Over%20External%20Power%20Structures%20%28e.g.%20Industry%20Influence%29" target="_blank">76. Influence Over External Power Structures (e.g. Industry Influence)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Entrepreneurial%20Thinking" target="_blank">77. Entrepreneurial Thinking</a></div>


<h4>Mergers, Acquisitions &amp; Divestiture</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Business%20Development" target="_blank">78. Strategic Business Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Decisions%20to%20Acquire%2C%20Merge%20or%20Divest" target="_blank">79. Strategic Decisions to Acquire, Merge or Divest</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Transitional%20Strategies" target="_blank">80. Transitional Strategies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=M%26A%20Economics" target="_blank">81. M&amp;A Economics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Structuring%20Acquisitions" target="_blank">82. Structuring Acquisitions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Acquisition%20Valuation" target="_blank">83. Acquisition Valuation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=M%26A%20Law" target="_blank">84. M&amp;A Law</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Restructuring%20%26%20Corporate%20Governance" target="_blank">85. Restructuring &amp; Corporate Governance</a></div>


<h4>Marketing &amp; Sales</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market-Focused%20Sales%20Strategy" target="_blank">86. Market-Focused Sales Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Multinational%20Marketing%20Strategy" target="_blank">87. Multinational Marketing Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Market%20Measurement" target="_blank">88. Strategic Market Measurement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=R%26D%20Management" target="_blank">89. R&amp;D Management</a></div>


<h4>Finance</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dividend%20Policy" target="_blank">90. Dividend Policy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Cost%20Management" target="_blank">91. Strategic Cost Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Management%20in%20a%20Dynamic%20Regulatory%20Environment" target="_blank">92. Financial Management in a Dynamic Regulatory Environment</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Budgets%20and%20Financial%20Statements" target="_blank">93. Corporate Budgets and Financial Statements</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Multi-National%20Tax%20Strategy" target="_blank">94. Corporate Multi-National Tax Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Revenue%20Management" target="_blank">95. Revenue Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Capital%20Structure" target="_blank">96. Corporate Capital Structure</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financing%20Operations%20%26%20Investment" target="_blank">97. Financing Operations &amp; Investment</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Maintaining%20Internal%20Auditing%20Standards" target="_blank">98. Maintaining Internal Auditing Standards</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Regulation%20Awareness" target="_blank">99. Financial Regulation Awareness</a></div>








<h3 id="id65">1.2 Executive Leadership (111 Skills)</h3>


<h4>Core Executive Leadership Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Governance" target="_blank">1. Corporate Governance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Defining%20Mission%2C%20Vision%20and%20Values" target="_blank">2. Defining Mission, Vision and Values</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Championing%20a%20Vision" target="_blank">3. Championing a Vision</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategy%20Formulation" target="_blank">4. Strategy Formulation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategy%20Execution" target="_blank">5. Strategy Execution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Innovation" target="_blank">6. Corporate Innovation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Management%20of%20Technology" target="_blank">7. Strategic Management of Technology</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organization%20Design" target="_blank">8. Organization Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Competitive%20Strategy" target="_blank">9. Competitive Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Commercialization%20of%20Business%20Capabilities" target="_blank">10. Commercialization of Business Capabilities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identification%20and%20Evaluation%20of%20Market%20Opportunities" target="_blank">11. Identification and Evaluation of Market Opportunities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">12. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiating" target="_blank">13. Negotiating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leading%20Business%20Transformation" target="_blank">14. Leading Business Transformation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Radical%20Change" target="_blank">15. Managing Radical Change</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creating%20and%20Maintaining%20a%20High%20Performance%20Culture" target="_blank">16. Creating and Maintaining a High Performance Culture</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creating%20a%20Sense%20of%20Urgency%20and%20Ownership" target="_blank">17. Creating a Sense of Urgency and Ownership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20High%20Potential%20Talent" target="_blank">18. Developing High Potential Talent</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Strategic%20Objectives" target="_blank">19. Managing Strategic Objectives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Strategic%20Alliances" target="_blank">20. Developing Strategic Alliances</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Strategic%20Profit%20Models" target="_blank">21. Developing Strategic Profit Models</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sustainability%20and%20Corporate%20Social%20Responsibility" target="_blank">22. Sustainability and Corporate Social Responsibility</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Measuring%20Organizational%20Performance" target="_blank">23. Measuring Organizational Performance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Management" target="_blank">24. Risk Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quality%20Strategy" target="_blank">25. Quality Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quality%20Management" target="_blank">26. Quality Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Audit%20Compliance" target="_blank">27. Audit Compliance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Management" target="_blank">28. Program Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leadership%20Assessment%20%26%20Development" target="_blank">29. Leadership Assessment &amp; Development</a></div>


<h4>Finance</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Governance" target="_blank">30. Financial Governance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Financial%20Risk" target="_blank">31. Managing Financial Risk</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Cost%20Management" target="_blank">32. Strategic Cost Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Venture%20Capital" target="_blank">33. Venture Capital</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financing" target="_blank">34. Financing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managerial%20Accounting" target="_blank">35. Managerial Accounting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Audit%20Regulation%20Awareness" target="_blank">36. Audit Regulation Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Tax%20Planning" target="_blank">37. Strategic Tax Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Risk-Return" target="_blank">38. Managing Risk-Return</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Performance%20Assessment" target="_blank">39. Financial Performance Assessment</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Policy%20Decisions" target="_blank">40. Financial Policy Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Budgets" target="_blank">41. Managing Budgets</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Short-Term%20Financial%20Management" target="_blank">42. Short-Term Financial Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Long-Term%20Financial%20Management" target="_blank">43. Long-Term Financial Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Forecasting" target="_blank">44. Business Forecasting</a></div>


<h4>Human Resources</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Human%20Resource%20Management" target="_blank">45. Strategic Human Resource Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Succession%20Planning" target="_blank">46. Succession Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Hiring" target="_blank">47. Strategic Hiring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Recognizing%20Employee%20Performance" target="_blank">48. Recognizing Employee Performance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Incentives" target="_blank">49. Managing Incentives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dispute%20Resolution" target="_blank">50. Dispute Resolution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Retention%20Strategy" target="_blank">51. Retention Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Work%20Force%20Diversity" target="_blank">52. Work Force Diversity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Compensation%20and%20Benefits" target="_blank">53. Compensation and Benefits</a></div>


<h4>Marketing</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Global%20Marketing%20Strategy" target="_blank">54. Global Marketing Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Relations" target="_blank">55. Public Relations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Development" target="_blank">56. Product Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Competitive%20Strategy" target="_blank">57. Competitive Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Market%20Measurement" target="_blank">58. Strategic Market Measurement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Advertising%20Strategy%20and%20Management" target="_blank">59. Advertising Strategy and Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Brand%20Asset%20Management" target="_blank">60. Brand Asset Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Price%20Strategy" target="_blank">61. Price Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Reputation%20Management" target="_blank">62. Reputation Management</a></div>


<h4>Sales</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Strategy" target="_blank">63. Sales Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Tactics" target="_blank">64. Sales Tactics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Organization%20Design" target="_blank">65. Sales Organization Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Force%20Management" target="_blank">66. Sales Force Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Performance%20Management" target="_blank">67. Sales Performance Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Manage%20Sales%20Partners" target="_blank">68. Manage Sales Partners</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Retention%20Strategy" target="_blank">69. Customer Retention Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Setting%20Sales%20Targets%2C%20Quotas%20and%20Incentives" target="_blank">70. Setting Sales Targets, Quotas and Incentives</a></div>


<h4>Operations</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Global%20Operations%20Strategy" target="_blank">71. Global Operations Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Global%20Operations" target="_blank">72. Managing Global Operations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Enterprise%20Resource%20Planning" target="_blank">73. Enterprise Resource Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Process%20Improvement" target="_blank">74. Business Process Improvement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Operations%20Financing" target="_blank">75. Operations Financing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Supply%20Chain%20Management" target="_blank">76. Supply Chain Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Procurement" target="_blank">77. Strategic Procurement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Logistics" target="_blank">78. Logistics</a></div>


<h4>Industry Knowledge</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market%20Knowledge" target="_blank">79. Market Knowledge</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Trend%20Awareness" target="_blank">80. Business Trend Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Technology%20Trend%20Awareness" target="_blank">81. Technology Trend Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Competitive%20Analysis" target="_blank">82. Competitive Analysis</a></div>


<h4>Business Law</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intellectual%20Property%20Law" target="_blank">83. Intellectual Property Law</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Employment%20Law" target="_blank">84. Employment Law</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Liability" target="_blank">85. Managing Liability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Environmental%20Regulations" target="_blank">86. Environmental Regulations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Contract%20Law" target="_blank">87. Contract Law</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Fair%20Competition" target="_blank">88. Fair Competition</a></div>


<h4>M&amp;A</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mergers%2C%20Acquisitions%20and%20Divestiture" target="_blank">89. Mergers, Acquisitions and Divestiture</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Structuring%20Acquisitions" target="_blank">90. Structuring Acquisitions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Restructuring" target="_blank">91. Corporate Restructuring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financing%20Mergers%20and%20Acquisitions" target="_blank">92. Financing Mergers and Acquisitions</a></div>


<h4>Decision Making</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Decision-Making" target="_blank">93. Strategic Decision-Making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Applying%20Data%20to%20Decision%20Making" target="_blank">94. Applying Data to Decision Making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20Making%20by%20Formalizing%20Trade-offs" target="_blank">95. Decision Making by Formalizing Trade-offs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Modeling%20Business%20Decisions" target="_blank">96. Modeling Business Decisions</a></div>


<h4>Soft Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Willingness%20to%20Lead" target="_blank">97. Willingness to Lead</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Willingness%20To%20Take%20Responsibility" target="_blank">98. Willingness To Take Responsibility</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Short%20Term%20and%20Long%20Term%20Focus" target="_blank">99. Short Term and Long Term Focus</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cross-Cultural%20Leadership" target="_blank">100. Cross-Cultural Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Charisma" target="_blank">101. Charisma</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Competitive%20Focus" target="_blank">102. Competitive Focus</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Results%20Focus" target="_blank">103. Results Focus</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Political%20Savvy" target="_blank">104. Political Savvy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Delegation" target="_blank">105. Delegation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creative%20Questioning" target="_blank">106. Creative Questioning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Innovative%20Thinking" target="_blank">107. Innovative Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Speaking" target="_blank">108. Public Speaking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomacy" target="_blank">109. Diplomacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Endurance" target="_blank">110. Endurance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing%20Skills" target="_blank">111. Influencing Skills</a></div>






<h2 class="blog-h2">2. Management</h2>



<h3 id="id66">2.1 Management (100 Skills)</h3>


<h4>Core Management Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategy" target="_blank">1. Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Championing%20Initiatives" target="_blank">2. Championing Initiatives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Planning%20%26%20Scheduling" target="_blank">3. Planning &amp; Scheduling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decisions%20Making" target="_blank">4. Decisions Making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Teams" target="_blank">5. Managing Teams</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Reporting%20%26%20Communication" target="_blank">6. Reporting &amp; Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Quality" target="_blank">7. Managing Quality</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Risk" target="_blank">8. Managing Risk</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Change" target="_blank">9. Managing Change</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Compliance" target="_blank">10. Compliance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Ethics" target="_blank">11. Ethics</a></div>


<h4>Management Focus Areas</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Operations%20Management" target="_blank">12. Operations Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Management" target="_blank">13. Sales Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Relationship%20Management" target="_blank">14. Customer Relationship Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Management" target="_blank">15. Marketing Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Management" target="_blank">16. Financial Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Technology%20Management" target="_blank">17. Technology Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Human%20Resource%20Management" target="_blank">18. Human Resource Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Knowledge%20Management" target="_blank">19. Knowledge Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Innovation" target="_blank">20. Innovation</a></div>


<h4>Strategy</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Analysis" target="_blank">21. Strategic Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategy%20Formulation" target="_blank">22. Strategy Formulation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identifying%20Critical%20Success%20Factors" target="_blank">23. Identifying Critical Success Factors</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Prioritization" target="_blank">24. Prioritization</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Gap%20Identification" target="_blank">25. Gap Identification</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Evaluation%20of%20Commercial%20Opportunities" target="_blank">26. Evaluation of Commercial Opportunities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Conducting%20Feasibility%20Studies" target="_blank">27. Conducting Feasibility Studies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Prototyping" target="_blank">28. Prototyping</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Forecasting" target="_blank">29. Forecasting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=What-if%20Analysis" target="_blank">30. What-if Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=SWOT%20Analysis" target="_blank">31. SWOT Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategy%20Execution" target="_blank">32. Strategy Execution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Hiring" target="_blank">33. Strategic Hiring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Sourcing%20%28e.g.%20Outsourcing%29" target="_blank">34. Strategic Sourcing (e.g. Outsourcing)</a></div>


<h4>Decision Making</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Providing%20Clear%20Direction" target="_blank">35. Providing Clear Direction</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Analysis%20for%20Decisions" target="_blank">36. Financial Analysis for Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Problem%20Solving" target="_blank">37. Problem Solving</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Resource%20Allocation" target="_blank">38. Resource Allocation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Information%20Analysis" target="_blank">39. Information Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Applying%20Data%20to%20Decisions" target="_blank">40. Applying Data to Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20Frameworks" target="_blank">41. Decision Frameworks</a></div>


<h4>Business Execution</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identifying%20Constraints" target="_blank">42. Identifying Constraints</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Raising%20Capital" target="_blank">43. Raising Capital</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sponsoring%20Projects%20and%20Programs" target="_blank">44. Sponsoring Projects and Programs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Finding%20and%20Leveraging%20Quick%20Wins%20%28Tactical%20Business%20Execution%29" target="_blank">45. Finding and Leveraging Quick Wins (Tactical Business Execution)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Monitoring%20Results" target="_blank">46. Monitoring Results</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Management" target="_blank">47. Project Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Management" target="_blank">48. Program Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20%26%20Program%20Governance" target="_blank">49. Project &amp; Program Governance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Protecting%20and%20Growing%20Assets" target="_blank">50. Protecting and Growing Assets</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Preserving%20and%20Enhancing%20Reputation" target="_blank">51. Preserving and Enhancing Reputation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identifying%20and%20Seizing%20Fast%20Breaking%20Opportunities" target="_blank">52. Identifying and Seizing Fast Breaking Opportunities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Procurement" target="_blank">53. Procurement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Vendor%20Management" target="_blank">54. Vendor Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Process%20Management" target="_blank">55. Business Process Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Continuous%20Improvement" target="_blank">56. Continuous Improvement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Promoting%20Improved%20Methods" target="_blank">57. Promoting Improved Methods</a></div>


<h4>Managing Teams</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leading%20Teams" target="_blank">58. Leading Teams</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Employment%20Law%20Awareness" target="_blank">59. Employment Law Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Delegation%20of%20Responsibilities" target="_blank">60. Delegation of Responsibilities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Recruiting" target="_blank">61. Recruiting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Management%20by%20Objectives" target="_blank">62. Management by Objectives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Providing%20Feedback" target="_blank">63. Providing Feedback</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Performance%20Appraisal" target="_blank">64. Performance Appraisal</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Compensation%20and%20Benefits" target="_blank">65. Compensation and Benefits</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Team%20Building" target="_blank">66. Team Building</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Removing%20Obstacles%20for%20Teams" target="_blank">67. Removing Obstacles for Teams</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Team%20Dynamics" target="_blank">68. Managing Team Dynamics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mentoring%20%26%20Coaching" target="_blank">69. Mentoring &amp; Coaching</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Provide%20Direction%20%26%20Focus" target="_blank">70. Provide Direction &amp; Focus</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Job%20Planning" target="_blank">71. Job Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Task%20Planning" target="_blank">72. Task Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Diversity" target="_blank">73. Managing Diversity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dispute%20Resolution" target="_blank">74. Dispute Resolution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Supervision" target="_blank">75. Supervision</a></div>


<h4>Managerial Finance</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20and%20Managing%20Budgets" target="_blank">76. Developing and Managing Budgets</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Budget%20Control" target="_blank">77. Budget Control</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Budget%20Variance%20Analysis" target="_blank">78. Budget Variance Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managerial%20Accounting" target="_blank">79. Managerial Accounting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cost/Benefit%20Analysis" target="_blank">80. Cost/Benefit Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Revenue%20Management" target="_blank">81. Revenue Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Revenue%20Forecasting" target="_blank">82. Revenue Forecasting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Expense%20Management" target="_blank">83. Expense Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Estimating%20and%20Cost%20Forecasting" target="_blank">84. Estimating and Cost Forecasting</a></div>


<h4>Legal &amp; Compliance</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Awareness%20of%20Applicable%20Laws" target="_blank">85. Awareness of Applicable Laws</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Liability" target="_blank">86. Managing Liability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Regulatory%20Reporting" target="_blank">87. Regulatory Reporting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Regulatory%20Compliance" target="_blank">88. Regulatory Compliance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Implementing%20and%20Maintaining%20Standards%20%26%20Best%20Practices" target="_blank">89. Implementing and Maintaining Standards &amp; Best Practices</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Contract%20Management" target="_blank">90. Contract Management</a></div>


<h4>Soft Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Difficult%20People" target="_blank">91. Managing Difficult People</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Presentation%20Skills%20%26%20Public%20Speaking" target="_blank">92. Presentation Skills &amp; Public Speaking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">93. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiating" target="_blank">94. Negotiating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Willingness%20To%20Take%20Responsibility" target="_blank">95. Willingness To Take Responsibility</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Politics" target="_blank">96. Politics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing" target="_blank">97. Influencing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dealing%20with%20Ambiguity" target="_blank">98. Dealing with Ambiguity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20%26%20Industry%20Knowledge" target="_blank">99. Business &amp; Industry Knowledge</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Commercial%20Perspective" target="_blank">100. Commercial Perspective</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interviewing" target="_blank">101. Interviewing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Training" target="_blank">102. Training</a></div>


<h4>Reporting &amp; Communication</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Benchmarking" target="_blank">103. Benchmarking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Preparing%20Executive%20Summaries" target="_blank">104. Preparing Executive Summaries</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20and%20Reporting%20Metrics%20and%20KPIs" target="_blank">105. Developing and Reporting Metrics and KPIs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Multi-channel%20Communications" target="_blank">106. Multi-channel Communications</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Balanced%20Scorecard" target="_blank">107. Balanced Scorecard</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communications%20to%20Executive%20Leadership" target="_blank">108. Communications to Executive Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communications%20to%20Customers" target="_blank">109. Communications to Customers</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communications%20to%20Stakeholders" target="_blank">110. Communications to Stakeholders</a></div>








<h3 id="id67">2.2 Change Management (40 Skills)</h3>


<h4>Change Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Change%20Impact%20Analysis" target="_blank">1. Change Impact Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Current%20State%20Analysis" target="_blank">2. Current State Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Gap%20Analysis" target="_blank">3. Gap Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Change" target="_blank">4. Marketing Change</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communicating%20Change" target="_blank">5. Communicating Change</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Setting%20Objectives" target="_blank">6. Setting Objectives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Planning" target="_blank">7. Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Scheduling" target="_blank">8. Scheduling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Change%20Processes" target="_blank">9. Managing Change Processes</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Stakeholder%20Expectations" target="_blank">10. Managing Stakeholder Expectations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Training" target="_blank">11. Managing Training</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cost-Benefit%20Analysis" target="_blank">12. Cost-Benefit Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Assessments" target="_blank">13. Risk Assessments</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Risk" target="_blank">14. Managing Risk</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quality%20Planning" target="_blank">15. Quality Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Management" target="_blank">16. Project Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Business%20Plans%20%26%20Estimates" target="_blank">17. Developing Business Plans &amp; Estimates</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Requirements" target="_blank">18. Developing Requirements</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Assumption%20%26%20Risk%20Based%20Project%20Plans" target="_blank">19. Developing Assumption &amp; Risk Based Project Plans</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Analysis" target="_blank">20. Business Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Operational%20Analysis" target="_blank">21. Operational Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Integrated%20Teams" target="_blank">22. Managing Integrated Teams</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Removing%20Obstacles%20for%20Teams" target="_blank">23. Removing Obstacles for Teams</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20Change%20Management%20Tools" target="_blank">24. Using Change Management Tools</a></div>


<h4>Related Standards and Best Practices</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=ITIL%20%26%20ITSM" target="_blank">25. ITIL &amp; ITSM</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=ISO/IEC%2020000" target="_blank">26. ISO/IEC 20000</a></div>


<h4>Soft Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leading%20Change" target="_blank">27. Leading Change</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Uncertainty%20%26%20Ambiguity" target="_blank">28. Managing Uncertainty &amp; Ambiguity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Collaborating" target="_blank">29. Collaborating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Resistance%20to%20Change" target="_blank">30. Managing Resistance to Change</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing" target="_blank">31. Influencing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">32. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Verbal%20%26%20Visual%20Communication" target="_blank">33. Verbal &amp; Visual Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Speaking" target="_blank">34. Public Speaking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Office%20Politics" target="_blank">35. Office Politics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomacy" target="_blank">36. Diplomacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interpersonal%20Skills" target="_blank">37. Interpersonal Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20making" target="_blank">38. Decision making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Problem%20Solving" target="_blank">39. Problem Solving</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Prioritization" target="_blank">40. Prioritization</a></div>






<h2 class="blog-h2">3. Project Management</h2>



<h3 id="id68">3.1 Program Management (98 Skills)</h3>


<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Program%20Management" target="_blank">1. Strategic Program Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Lifecycle" target="_blank">2. Program Lifecycle</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Benefits%20Management" target="_blank">3. Benefits Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Stakeholder%20Management" target="_blank">4. Stakeholder Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Governance" target="_blank">5. Governance</a></div>


<h4>Strategic Program Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Mission%20and%20Vision" target="_blank">6. Program Mission and Vision</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Planning%20and%20Analysis" target="_blank">7. Strategic Planning and Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Assessments" target="_blank">8. Program Assessments</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Strategy%20%26%20Objectives" target="_blank">9. Program Strategy &amp; Objectives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Strategy%20Alignment" target="_blank">10. Program Strategy Alignment</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Priorities" target="_blank">11. Program Priorities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Program%20Road%20Maps" target="_blank">12. Developing Program Road Maps</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Funding%20Models" target="_blank">13. Funding Models</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cost-Benefit%20Analysis" target="_blank">14. Cost-Benefit Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Forecasting" target="_blank">15. Forecasting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Feasibility%20Analysis" target="_blank">16. Feasibility Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Metrics" target="_blank">17. Financial Metrics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Budgeting" target="_blank">18. Program Budgeting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leadership%20Approvals%20%26%20Financial%20Authorizations" target="_blank">19. Leadership Approvals &amp; Financial Authorizations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Regulatory%20and%20Legal%20Constraints" target="_blank">20. Regulatory and Legal Constraints</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intellectual%20Property%20Laws%20and%20Guidelines" target="_blank">21. Intellectual Property Laws and Guidelines</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Information%20Privacy" target="_blank">22. Information Privacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Human%20Resource%20Requirements" target="_blank">23. Human Resource Requirements</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market%20Analysis" target="_blank">24. Market Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing" target="_blank">25. Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Development" target="_blank">26. Product Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Portfolio%20Management" target="_blank">27. Portfolio Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Scenario%20Analysis" target="_blank">28. Scenario Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Trend%20Analysis" target="_blank">29. Trend Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sustainability" target="_blank">30. Sustainability</a></div>


<h4>Program Lifecycle</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Initiation" target="_blank">31. Program Initiation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Charters" target="_blank">32. Program Charters</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organizational%20Planning" target="_blank">33. Organizational Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Standards" target="_blank">34. Program Standards</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Schedule%20Management" target="_blank">35. Program Schedule Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Scope" target="_blank">36. Program Scope</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Management%20Plans" target="_blank">37. Program Management Plans</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Work%20Breakdown%20Structures%20%28WBS%29" target="_blank">38. Work Breakdown Structures (WBS)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Direction" target="_blank">39. Program Direction</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Accountability%20Matrices" target="_blank">40. Accountability Matrices</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Monitoring%20%26%20Controlling%20Projects" target="_blank">41. Monitoring &amp; Controlling Projects</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Variance%20Forecasting" target="_blank">42. Variance Forecasting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Variance%20Monitoring" target="_blank">43. Variance Monitoring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Resource%20Leveling" target="_blank">44. Resource Leveling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identifying%20Project%20Synergies" target="_blank">45. Identifying Project Synergies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Management%20Information%20Systems" target="_blank">46. Project Management Information Systems</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Project%20Issues" target="_blank">47. Managing Project Issues</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Root%20Cause%20Analysis" target="_blank">48. Root Cause Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Contract%20Negotiation" target="_blank">49. Contract Negotiation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiation%20Strategy" target="_blank">50. Negotiation Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Contracts" target="_blank">51. Managing Contracts</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Reporting" target="_blank">52. Financial Reporting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Statistical%20Analysis" target="_blank">53. Statistical Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Benchmarking" target="_blank">54. Benchmarking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Team%20Management" target="_blank">55. Team Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Procurement%20Management" target="_blank">56. Procurement Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Logistics%20Management" target="_blank">57. Logistics Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Management" target="_blank">58. Risk Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cost%20Management" target="_blank">59. Cost Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Management" target="_blank">60. Time Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Change%20Management" target="_blank">61. Change Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quality%20Control" target="_blank">62. Quality Control</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Service%20Level%20Agreements" target="_blank">63. Service Level Agreements</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Modeling%20Business%20Decisions" target="_blank">64. Modeling Business Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20%26%20Project%20Issue%20Management" target="_blank">65. Program &amp; Project Issue Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Impact%20Assessments" target="_blank">66. Impact Assessments</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Performance%20Analysis" target="_blank">67. Program Performance Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Knowledge%20Management" target="_blank">68. Knowledge Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Closure" target="_blank">69. Project Closure</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Lessons%20Learned" target="_blank">70. Lessons Learned</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Closure%20Processes" target="_blank">71. Financial Closure Processes</a></div>


<h4>Benefits Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Benefits%20Analysis" target="_blank">72. Benefits Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Value%20Measurement" target="_blank">73. Business Value Measurement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Gate%20Reviews" target="_blank">74. Project Gate Reviews</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Earned%20Value%20Management" target="_blank">75. Earned Value Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20%26%20Project%20Audits" target="_blank">76. Program &amp; Project Audits</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Performance%20%26%20Quality%20Metrics" target="_blank">77. Program Performance &amp; Quality Metrics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Transition%20Plans" target="_blank">78. Transition Plans</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Integration" target="_blank">79. Project Integration</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Benefit%20Optimization" target="_blank">80. Benefit Optimization</a></div>


<h4>Stakeholder Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communication%20Plans" target="_blank">81. Communication Plans</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Executive%20Stakeholders" target="_blank">82. Managing Executive Stakeholders</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing%20%26%20Motivation%20Techniques" target="_blank">83. Influencing &amp; Motivation Techniques</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Communications" target="_blank">84. Program Communications</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Analysis%20for%20Program%20Decisions" target="_blank">85. Financial Analysis for Program Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=KPIs" target="_blank">86. KPIs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Performance%20Management%20%28Talent%20Management%29" target="_blank">87. Performance Management (Talent Management)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Training%2C%20Coaching%20%26%20Mentoring" target="_blank">88. Training, Coaching &amp; Mentoring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Approvals%20Management" target="_blank">89. Approvals Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20Tree%20Analysis" target="_blank">90. Decision Tree Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Relationship%20Management" target="_blank">91. Customer Relationship Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Expectation%20Management" target="_blank">92. Expectation Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Speaking" target="_blank">93. Public Speaking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Relations" target="_blank">94. Public Relations</a></div>


<h4>Governance</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Governance%20Models" target="_blank">95. Governance Models</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Governance%20Processes%20and%20Procedures" target="_blank">96. Governance Processes and Procedures</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Contingency%20Planning" target="_blank">97. Contingency Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Ethics" target="_blank">98. Business Ethics</a></div>






<h3 id="id69">3.2 Project Management (125 Skills)</h3>


<h4>Core Project Management Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Scope%20Management" target="_blank">1. Scope Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Management" target="_blank">2. Time Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cost%20Management" target="_blank">3. Cost Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quality%20Management" target="_blank">4. Quality Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Integration%20Management" target="_blank">5. Integration Management</a></div>


<h4>Facilitation Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communications" target="_blank">6. Communications</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Human%20Resource%20Management" target="_blank">7. Human Resource Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Management" target="_blank">8. Risk Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Procurement%20Management" target="_blank">9. Procurement Management</a></div>


<h4>Scope Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Requirements" target="_blank">10. Developing Requirements</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Business%20Analysis" target="_blank">11. Managing Business Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Business%20Architecture" target="_blank">12. Managing Business Architecture</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Modeling%20Business%20Decisions" target="_blank">13. Modeling Business Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Scope%20Development" target="_blank">14. Scope Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Work%20Breakdown%20Structures" target="_blank">15. Developing Work Breakdown Structures</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Scope%20Control%20and%20Verification" target="_blank">16. Scope Control and Verification</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Scope%20Creep%20Management" target="_blank">17. Scope Creep Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Technology%20Scope%20Creep%20Management%20%28Feature%20Creep%29" target="_blank">18. Technology Scope Creep Management (Feature Creep)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Earned%20Value%20Management" target="_blank">19. Earned Value Management</a></div>


<h4>Time Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Defining%20Activities" target="_blank">20. Defining Activities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Estimates" target="_blank">21. Managing Estimates</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Activity%20Sequencing" target="_blank">22. Activity Sequencing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Schedules" target="_blank">23. Developing Schedules</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Schedule%20Control" target="_blank">24. Schedule Control</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Priorities" target="_blank">25. Managing Priorities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=ABC%20Analysis" target="_blank">26. ABC Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Pareto%20Analysis%20%2880-20%20Rule%29" target="_blank">27. Pareto Analysis (80-20 Rule)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20Time%20Management%20Tools" target="_blank">28. Using Time Management Tools</a></div>


<h4>Cost Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Cost%20Estimates" target="_blank">29. Developing Cost Estimates</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Budget%20Development" target="_blank">30. Project Budget Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Budget%20Administration" target="_blank">31. Budget Administration</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Budget%20Control" target="_blank">32. Budget Control</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20Accounting%20Tools" target="_blank">33. Using Accounting Tools</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cost%20Forecasting" target="_blank">34. Cost Forecasting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Metrics" target="_blank">35. Financial Metrics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cost-Benefit%20Analysis" target="_blank">36. Cost-Benefit Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Reporting" target="_blank">37. Financial Reporting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Analysis%20for%20Project%20Decisions" target="_blank">38. Financial Analysis for Project Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Resource%20Leveling" target="_blank">39. Resource Leveling</a></div>


<h4>Quality Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Quality%20Plans" target="_blank">40. Developing Quality Plans</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quality%20Assurance" target="_blank">41. Quality Assurance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quality%20Control" target="_blank">42. Quality Control</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Management%20Best%20Practices" target="_blank">43. Project Management Best Practices</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quality%20Standards%20%26%20Best%20Practices" target="_blank">44. Quality Standards &amp; Best Practices</a></div>


<h4>Integration Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Project%20Charters" target="_blank">45. Developing Project Charters</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identifying%20Project%20Constraints" target="_blank">46. Identifying Project Constraints</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Project%20Management%20Plans" target="_blank">47. Developing Project Management Plans</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Project%20Execution" target="_blank">48. Managing Project Execution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Work%20Control" target="_blank">49. Project Work Control</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Change%20Control%20Management" target="_blank">50. Change Control Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Project%20Closure" target="_blank">51. Managing Project Closure</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Audits" target="_blank">52. Project Audits</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20Project%20Management%20Tools" target="_blank">53. Using Project Management Tools</a></div>


<h4>Communications</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Stakeholder%20Analysis" target="_blank">54. Stakeholder Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Communication%20Plans" target="_blank">55. Developing Communication Plans</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Stakeholder%20Expectations" target="_blank">56. Managing Stakeholder Expectations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Client%20and%20Stakeholder%20Relationship%20Management" target="_blank">57. Client and Stakeholder Relationship Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Status%20Communications" target="_blank">58. Project Status Communications</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Metric%20Development%20and%20Communications" target="_blank">59. Project Metric Development and Communications</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Meeting%20Management" target="_blank">60. Meeting Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Verbal%20Communication" target="_blank">61. Verbal Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Listening%20Skills" target="_blank">62. Listening Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing%20Without%20Authority" target="_blank">63. Influencing Without Authority</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiation" target="_blank">64. Negotiation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interpersonal%20Skills" target="_blank">65. Interpersonal Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Presentation%20Skills" target="_blank">66. Presentation Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Presentations%20to%20Hostile%20Audiences" target="_blank">67. Presentations to Hostile Audiences</a></div>


<h4>Human Resources Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Project%20Resource%20Plans" target="_blank">68. Developing Project Resource Plans</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organizational%20Planning%20for%20Projects" target="_blank">69. Organizational Planning for Projects</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Team%20Acquisition" target="_blank">70. Project Team Acquisition</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Team%20Onboarding" target="_blank">71. Project Team Onboarding</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Team%20Development" target="_blank">72. Project Team Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Training" target="_blank">73. Managing Training</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Team%20Building" target="_blank">74. Team Building</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">75. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Conflict%20Management" target="_blank">76. Conflict Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Logistics%20%28e.g.%20Establishing%20a%20PMO%20Office%29" target="_blank">77. Project Logistics (e.g. Establishing a PMO Office)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Distributed%20Team%20Management%20%28Geographically%20Distributed%20Project%20Teams%29" target="_blank">78. Distributed Team Management (Geographically Distributed Project Teams)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Performance%20Feedback" target="_blank">79. Performance Feedback</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Performance%20Evaluation" target="_blank">80. Performance Evaluation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cultural%20Competence" target="_blank">81. Cultural Competence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diversity%20Awareness" target="_blank">82. Diversity Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leadership" target="_blank">83. Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cross-Cultural%20Leadership" target="_blank">84. Cross-Cultural Leadership</a></div>


<h4>Risk Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Identification" target="_blank">85. Risk Identification</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Probability%20Analysis" target="_blank">86. Risk Probability Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Impact%20Analysis" target="_blank">87. Risk Impact Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Prioritization" target="_blank">88. Risk Prioritization</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Response%20Planning" target="_blank">89. Risk Response Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Monitoring%20and%20Control" target="_blank">90. Risk Monitoring and Control</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Reporting" target="_blank">91. Risk Reporting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Management%20Tools%20%28e.g.%20Risk%20Databases%29" target="_blank">92. Risk Management Tools (e.g. Risk Databases)</a></div>


<h4>Procurement Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Procurement%20Planning" target="_blank">93. Procurement Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Conducting%20Procurement" target="_blank">94. Conducting Procurement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20RFIs%20and%20RFPs" target="_blank">95. Developing RFIs and RFPs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Supplier%20Communication" target="_blank">96. Supplier Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Procurement%20Negotiations" target="_blank">97. Procurement Negotiations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Procurement%20Logistics" target="_blank">98. Procurement Logistics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Contract%20Management" target="_blank">99. Contract Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Vendor%20Relationship%20Management" target="_blank">100. Vendor Relationship Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Procurement%20Issue%20Management" target="_blank">101. Procurement Issue Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Procurement%20Closure%20Activities" target="_blank">102. Managing Procurement Closure Activities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Awareness%20of%20Procurement%20Laws%20%26%20Regulations" target="_blank">103. Awareness of Procurement Laws &amp; Regulations</a></div>


<h4>Technology (For IT Project Management)</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Software%20Development%20Methodologies" target="_blank">104. Software Development Methodologies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Software%20Development%20Lifecycle" target="_blank">105. Software Development Lifecycle</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=IT%20Standards%20%26%20Best%20Practices%20%28e.g.%20ITIL%29" target="_blank">106. IT Standards &amp; Best Practices (e.g. ITIL)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Architecture%20Management" target="_blank">107. Architecture Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=IT%20Governance" target="_blank">108. IT Governance</a></div>


<h4>Soft Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Professional%20Ethics" target="_blank">109. Professional Ethics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Flexibility" target="_blank">110. Flexibility</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organizational%20Awareness" target="_blank">111. Organizational Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Savvy" target="_blank">112. Business Savvy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Technology%20Savvy" target="_blank">113. Technology Savvy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Politics%20%26%20Diplomacy" target="_blank">114. Politics &amp; Diplomacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mentoring%20%26%20Coaching" target="_blank">115. Mentoring &amp; Coaching</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20Making" target="_blank">116. Decision Making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Problem%20Solving" target="_blank">117. Problem Solving</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Delegation" target="_blank">118. Delegation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creative%20Questioning" target="_blank">119. Creative Questioning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Openness" target="_blank">120. Openness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dealing%20with%20Ambiguity" target="_blank">121. Dealing with Ambiguity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Big%20Picture%20Thinking" target="_blank">122. Big Picture Thinking</a></div>


<h4>Qualifications</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Master%20of%20Project%20Management%20%28MSPM%29" target="_blank">123. Master of Project Management (MSPM)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Management%20Professional%20%28PMP%29" target="_blank">124. Project Management Professional (PMP)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=PRINCE2%20Practitioner" target="_blank">125. PRINCE2 Practitioner</a></div>




<h2 class="blog-h2">4. Business Professionals</h2>



<h3 id="id70">4.1 Sales (95 Skills)</h3>


<h4>Selling Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Prospecting" target="_blank">1. Prospecting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identifying%20Leads" target="_blank">2. Identifying Leads</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Qualifying%20Leads" target="_blank">3. Qualifying Leads</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Rapport%20With%20Clients" target="_blank">4. Establishing Rapport With Clients</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20a%20Client%20Engagement" target="_blank">5. Managing a Client Engagement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Contacts" target="_blank">6. Managing Contacts</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Appointments" target="_blank">7. Managing Appointments</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Questioning%20Clients%20%26%20Identifying%20Customer%20Requirements" target="_blank">8. Questioning Clients &amp; Identifying Customer Requirements</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Analyzing%20RFPs" target="_blank">9. Analyzing RFPs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Proposals" target="_blank">10. Developing Proposals</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Pitching" target="_blank">11. Sales Pitching</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Answering%20Customer%20Questions" target="_blank">12. Answering Customer Questions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Relationship%20Management" target="_blank">13. Customer Relationship Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20SFA%20%26%20CRM%20Tools" target="_blank">14. Using SFA &amp; CRM Tools</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Knowledge" target="_blank">15. Product Knowledge</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Selling%20Product%20Benefits" target="_blank">16. Selling Product Benefits</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Need%20Creation" target="_blank">17. Need Creation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Analysis%20of%20Customer%20Buy%20Cycles" target="_blank">18. Analysis of Customer Buy Cycles</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Analysis%20of%20Customer-side%20Politics" target="_blank">19. Analysis of Customer-side Politics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Closing%20Deals" target="_blank">20. Closing Deals</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Upselling" target="_blank">21. Upselling</a></div>


<h4>Negotiating</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiating%20Techniques%20and%20Strategy" target="_blank">22. Negotiating Techniques and Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influence%20to%20Negotiate" target="_blank">23. Influence to Negotiate</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Demonstrating%20Empathy%20%26%20Understanding%20of%20Customer%20Problems" target="_blank">24. Demonstrating Empathy &amp; Understanding of Customer Problems</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Common%20Ground" target="_blank">25. Establishing Common Ground</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Foot-in-the-door%20Techniques" target="_blank">26. Foot-in-the-door Techniques</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Door-in-the-face%20Techniques" target="_blank">27. Door-in-the-face Techniques</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Nibble%20Techniques" target="_blank">28. Nibble Techniques</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomacy%20Techniques" target="_blank">29. Diplomacy Techniques</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Getting%20To%20Yes" target="_blank">30. Getting To Yes</a></div>


<h4>Sales Operations</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Strategy" target="_blank">31. Sales Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Planning" target="_blank">32. Sales Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Reporting" target="_blank">33. Sales Reporting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Metrics%20%26%20KPI" target="_blank">34. Sales Metrics &amp; KPI</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Benchmarking" target="_blank">35. Sales Benchmarking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Margin%20Management" target="_blank">36. Sales Margin Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Deal%20Approvals" target="_blank">37. Sales Deal Approvals</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Payment%20of%20Sales%20Commissions%20%26%20Incentives" target="_blank">38. Payment of Sales Commissions &amp; Incentives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Running%20Sales%20Contests" target="_blank">39. Running Sales Contests</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Manage%20Customer%20Relationship%20Management%20%28CRM%29%20Information" target="_blank">40. Manage Customer Relationship Management (CRM) Information</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Plan%20Sales%20Training%20%26%20Development" target="_blank">41. Plan Sales Training &amp; Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Communications" target="_blank">42. Sales Communications</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Segmentation" target="_blank">43. Customer Segmentation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Liaison%20With%20Finance%20%26%20Marketing" target="_blank">44. Liaison With Finance &amp; Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Sales%20Collaterals" target="_blank">45. Developing Sales Collaterals</a></div>


<h4>Sales Strategy</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Program%20Formulation" target="_blank">46. Sales Program Formulation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Pricing%20Strategy" target="_blank">47. Pricing Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Partner%20Strategy" target="_blank">48. Sales Partner Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Promotions" target="_blank">49. Sales Promotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Setting%20Sales%20Targets%2C%20Quotas%20and%20Incentives" target="_blank">50. Setting Sales Targets, Quotas and Incentives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Motivation%20%26%20Sales%20Contests" target="_blank">51. Sales Motivation &amp; Sales Contests</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Retention%20Strategy" target="_blank">52. Customer Retention Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Go-to-Market%20Strategies" target="_blank">53. Go-to-Market Strategies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales-Marketing%20Alignment" target="_blank">54. Sales-Marketing Alignment</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Information%20%26%20Technology%20Strategy" target="_blank">55. Sales Information &amp; Technology Strategy</a></div>


<h4>Sales Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Management%20by%20Objectives" target="_blank">56. Management by Objectives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Sales%20Quotas%20%26%20Incentives" target="_blank">57. Managing Sales Quotas &amp; Incentives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Organization%20Design" target="_blank">58. Sales Organization Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating%20Salespeople" target="_blank">59. Motivating Salespeople</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Force%20Deployment" target="_blank">60. Sales Force Deployment</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Recruiting" target="_blank">61. Sales Recruiting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Team%20Performance%20Management" target="_blank">62. Sales Team Performance Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Management%20of%20Sales%20Training%20and%20Development%20Programs" target="_blank">63. Management of Sales Training and Development Programs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Large%20Accounts" target="_blank">64. Managing Large Accounts</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Force%20Supervision" target="_blank">65. Sales Force Supervision</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Territory%20Management" target="_blank">66. Sales Territory Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Sales%20Productivity" target="_blank">67. Managing Sales Productivity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Selling%20Costs" target="_blank">68. Managing Selling Costs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mentoring%20Sales%20Teams" target="_blank">69. Mentoring Sales Teams</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Sales%20Partners" target="_blank">70. Managing Sales Partners</a></div>


<h4>Sales Pipeline Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Opportunity%20Management" target="_blank">71. Opportunity Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Call%20Management" target="_blank">72. Call Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quote%20Management" target="_blank">73. Quote Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Order%20Management" target="_blank">74. Order Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Order%20Fulfillment%20Management" target="_blank">75. Order Fulfillment Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Account%20Management" target="_blank">76. Account Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Retention%20Management" target="_blank">77. Customer Retention Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Upsell%20Activities" target="_blank">78. Managing Upsell Activities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Forecasting" target="_blank">79. Sales Forecasting</a></div>


<h4>Soft Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Results-focus" target="_blank">80. Results-focus</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Action-oriented" target="_blank">81. Action-oriented</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Endurance%20%26%20Persistence" target="_blank">82. Endurance &amp; Persistence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Persuasion" target="_blank">83. Persuasion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomacy" target="_blank">84. Diplomacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Politics" target="_blank">85. Politics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Speaking%20%26%20Presentations" target="_blank">86. Public Speaking &amp; Presentations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communication%20Skills" target="_blank">87. Communication Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Active%20Listening" target="_blank">88. Active Listening</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=First%20Impressions" target="_blank">89. First Impressions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Rapport" target="_blank">90. Establishing Rapport</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Building%20Trust" target="_blank">91. Building Trust</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Networking" target="_blank">92. Networking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Management" target="_blank">93. Time Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Meeting%20Management" target="_blank">94. Meeting Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Acumen" target="_blank">95. Business Acumen</a></div>






<h3 id="id71">4.2 Marketing (111 Skills)</h3>


<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Strategy%20%26%20Planning" target="_blank">1. Marketing Strategy &amp; Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market%20Research" target="_blank">2. Market Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20%26%20Product%20Development" target="_blank">3. Business &amp; Product Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Promotion" target="_blank">4. Promotion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Brand%20Management" target="_blank">5. Brand Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales" target="_blank">6. Sales</a></div>


<h4>Marketing Strategy &amp; Planning</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Vision%20%26%20Mission" target="_blank">7. Marketing Vision &amp; Mission</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Growth%20Strategy" target="_blank">8. Growth Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Strategy" target="_blank">9. Product Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Brand%20Strategy" target="_blank">10. Brand Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Category%20Strategy" target="_blank">11. Category Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Price%20Strategy" target="_blank">12. Price Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Price%20Models" target="_blank">13. Price Models</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Promotion%20Strategy" target="_blank">14. Promotion Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Distribution%20Strategy" target="_blank">15. Distribution Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Channel%20Strategy" target="_blank">16. Channel Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Service%20Strategy" target="_blank">17. Service Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Retail%20Strategy" target="_blank">18. Retail Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Location%20Strategy" target="_blank">19. Location Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Digital%20Strategy" target="_blank">20. Digital Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Mix" target="_blank">21. Marketing Mix</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Differentiation" target="_blank">22. Product Differentiation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cost%20Leadership" target="_blank">23. Cost Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market%20Segmentation" target="_blank">24. Market Segmentation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Innovation%20Strategy" target="_blank">25. Innovation Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Horizontal%20Integration" target="_blank">26. Horizontal Integration</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Vertical%20Integration" target="_blank">27. Vertical Integration</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diversification" target="_blank">28. Diversification</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intensification" target="_blank">29. Intensification</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Warfare%20Strategies" target="_blank">30. Marketing Warfare Strategies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Go%20to%20Market%20Strategy" target="_blank">31. Go to Market Strategy</a></div>


<h4>Market Research</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Intelligence%20Management" target="_blank">32. Marketing Intelligence Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Trend%20Awareness" target="_blank">33. Trend Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Analysis" target="_blank">34. Customer Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Consumer%20Insights" target="_blank">35. Consumer Insights</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Competitor%20Analysis" target="_blank">36. Competitor Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Target%20Market%20Analysis" target="_blank">37. Target Market Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Social%20and%20Opinion%20Research" target="_blank">38. Social and Opinion Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sampling%20%28Statistics%29" target="_blank">39. Sampling (Statistics)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Choice%20Modeling" target="_blank">40. Choice Modeling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Analysis" target="_blank">41. Risk Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Research" target="_blank">42. Product Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market%20Segmentation%20Analysis" target="_blank">43. Market Segmentation Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Focus%20Groups" target="_blank">44. Focus Groups</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Mix%20Modeling" target="_blank">45. Marketing Mix Modeling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Simulation" target="_blank">46. Marketing Simulation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Test%20Marketing" target="_blank">47. Test Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Brand%20Audit" target="_blank">48. Brand Audit</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Measurement%20%28Metrics%20%26%20KPI%29" target="_blank">49. Marketing Measurement (Metrics &amp; KPI)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Benchmarking" target="_blank">50. Benchmarking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Prototyping" target="_blank">51. Prototyping</a></div>


<h4>Business &amp; Product Development</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Model%20Development" target="_blank">52. Business Model Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=New%20Product%20Development" target="_blank">53. New Product Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Concept%20Design" target="_blank">54. Product Concept Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Branding" target="_blank">55. Branding</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Positioning" target="_blank">56. Positioning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Licensing%20%28Intellectual%20Property%29" target="_blank">57. Licensing (Intellectual Property)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Law%20%28e.%20g.%20Product%20Liability%29" target="_blank">58. Marketing Law (e. g. Product Liability)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=SWOT%20Analysis" target="_blank">59. SWOT Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Analysis" target="_blank">60. Business Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market%20Assessments" target="_blank">61. Market Assessments</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Research%20%26%20Development" target="_blank">62. Research &amp; Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Technical%20Assessments" target="_blank">63. Technical Assessments</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Logistics%20Assessments" target="_blank">64. Logistics Assessments</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Concept%20Testing" target="_blank">65. Product Concept Testing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Analysis" target="_blank">66. Financial Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Launch" target="_blank">67. Product Launch</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=New%20Product%20Acceptance" target="_blank">68. New Product Acceptance</a></div>


<h4>Promotion</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Image" target="_blank">69. Corporate Image</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Advertising" target="_blank">70. Advertising</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Media%20Selection%20and%20Planning" target="_blank">71. Media Selection and Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Measurement%20of%20Ad%20Effectiveness" target="_blank">72. Measurement of Ad Effectiveness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Display%20Advertising" target="_blank">73. Display Advertising</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Integrated%20Marketing%20Communications" target="_blank">74. Integrated Marketing Communications</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Targeted%20Communications" target="_blank">75. Targeted Communications</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Reputation%20Management" target="_blank">76. Reputation Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Publicity" target="_blank">77. Publicity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Premiums" target="_blank">78. Premiums</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Rewards%20%26%20Loyalty%20Programs" target="_blank">79. Rewards &amp; Loyalty Programs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Event%20Management" target="_blank">80. Event Management</a></div>


<h4>Brand Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Brand%20Management" target="_blank">81. Brand Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Brand%20Measurement%20and%20Reporting" target="_blank">82. Brand Measurement and Reporting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Crafting%20a%20Brand" target="_blank">83. Crafting a Brand</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Defending%20a%20Brand" target="_blank">84. Defending a Brand</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leveraging%20a%20Brand" target="_blank">85. Leveraging a Brand</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sustaining%20a%20Brand" target="_blank">86. Sustaining a Brand</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Promoting%20Brand%20Knowledge" target="_blank">87. Promoting Brand Knowledge</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Promoting%20Brand%20Awareness" target="_blank">88. Promoting Brand Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creating%20Brand%20Ambassadors" target="_blank">89. Creating Brand Ambassadors</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Category%20Management" target="_blank">90. Category Management</a></div>


<h4>Marketing Operations &amp; Sales</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Life%20Cycle%20Management" target="_blank">91. Product Life Cycle Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Portfolio%20Management" target="_blank">92. Product Portfolio Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Operations%20Management" target="_blank">93. Marketing Operations Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Channel%20Management" target="_blank">94. Channel Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Promotion" target="_blank">95. Sales Promotion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Collaterals" target="_blank">96. Sales Collaterals</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Account-based%20Marketing" target="_blank">97. Account-based Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Demonstration" target="_blank">98. Product Demonstration</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Promotional%20Merchandise" target="_blank">99. Promotional Merchandise</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Relationship%20Management" target="_blank">100. Customer Relationship Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Experience%20Management" target="_blank">101. Customer Experience Management</a></div>


<h4>Marketing Approaches</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Niche%20Marketing" target="_blank">102. Niche Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Guerrilla%20Marketing" target="_blank">103. Guerrilla Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mobile%20Marketing" target="_blank">104. Mobile Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Social%20Media%20Marketing" target="_blank">105. Social Media Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Direct%20Marketing" target="_blank">106. Direct Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Franchising" target="_blank">107. Franchising</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=International%20Marketing" target="_blank">108. International Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=b2b%20Marketing" target="_blank">109. b2b Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Content%20Marketing" target="_blank">110. Content Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Loyalty%20Marketing" target="_blank">111. Loyalty Marketing</a></div>






<h3 id="id72">4.3 Entrepreneurs (90 Skills)</h3>


<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Development" target="_blank">1. Business Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales" target="_blank">2. Sales</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing" target="_blank">3. Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Management" target="_blank">4. Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leadership" target="_blank">5. Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiation" target="_blank">6. Negotiation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communication" target="_blank">7. Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Innovation" target="_blank">8. Innovation</a></div>


<h4>Business Development</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Research" target="_blank">9. Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Planning" target="_blank">10. Business Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategy%20Planning" target="_blank">11. Strategy Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Analysis" target="_blank">12. Business Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Forecasting" target="_blank">13. Forecasting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Competitive%20Analysis" target="_blank">14. Competitive Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Industry%20Knowledge" target="_blank">15. Industry Knowledge</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market%20Knowledge" target="_blank">16. Market Knowledge</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Business%20Plans" target="_blank">17. Developing Business Plans</a></div>


<h4>Sales</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Strategy" target="_blank">18. Sales Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Pipeline%20Management" target="_blank">19. Sales Pipeline Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Prospecting" target="_blank">20. Prospecting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Sales%20Proposals" target="_blank">21. Developing Sales Proposals</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Pitching" target="_blank">22. Sales Pitching</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Relationship%20Management" target="_blank">23. Customer Relationship Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Closing%20Deals" target="_blank">24. Closing Deals</a></div>




<h4>Marketing</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Strategy" target="_blank">25. Marketing Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market%20Research" target="_blank">26. Market Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=New%20Product%20Development" target="_blank">27. New Product Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Promotion" target="_blank">28. Promotion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Positioning" target="_blank">29. Product Positioning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Pricing" target="_blank">30. Pricing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Brand%20Management" target="_blank">31. Brand Management</a></div>




<h4>Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Management" target="_blank">32. Risk Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quality%20Management" target="_blank">33. Quality Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Management" target="_blank">34. Project Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Budgets" target="_blank">35. Managing Budgets</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cost%20Control" target="_blank">36. Cost Control</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Supply%20Chain%20Management" target="_blank">37. Supply Chain Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intellectual%20Property%20Law" target="_blank">38. Intellectual Property Law</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Regulatory%20Compliance" target="_blank">39. Regulatory Compliance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Contract%20Law" target="_blank">40. Contract Law</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Job%20Planning" target="_blank">41. Job Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Teams" target="_blank">42. Managing Teams</a></div>




<h4>Executive Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Planning" target="_blank">43. Strategic Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organization%20Design" target="_blank">44. Organization Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20a%20Corporate%20Culture" target="_blank">45. Establishing a Corporate Culture</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Financing" target="_blank">46. Business Financing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Tax%20Planning" target="_blank">47. Strategic Tax Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Hiring" target="_blank">48. Strategic Hiring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Compensation%20and%20Benefits" target="_blank">49. Compensation and Benefits</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Reputation%20Management" target="_blank">50. Reputation Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Global%20Operations" target="_blank">51. Managing Global Operations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Financing" target="_blank">52. Business Financing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Investor%20Relations" target="_blank">53. Investor Relations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Relations" target="_blank">54. Public Relations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sustainability" target="_blank">55. Sustainability</a></div>




<h4>Leadership</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20Making" target="_blank">56. Decision Making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Rapport%20%26%20Trust" target="_blank">57. Establishing Rapport &amp; Trust</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing" target="_blank">58. Influencing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">59. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Coaching%20%26%20Mentoring" target="_blank">60. Coaching &amp; Mentoring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Delegating" target="_blank">61. Delegating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dispute%20Resolution" target="_blank">62. Dispute Resolution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Difficult%20Conversations" target="_blank">63. Managing Difficult Conversations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Crisis%20Management" target="_blank">64. Crisis Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Personal%20Branding" target="_blank">65. Personal Branding</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Group%20Dynamics" target="_blank">66. Managing Group Dynamics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intercultural%20Competence" target="_blank">67. Intercultural Competence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Ethics" target="_blank">68. Ethics</a></div>




<h4>Negotiation</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Win-Win%20Thinking" target="_blank">69. Win-Win Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Applying%20Negotiation%20Strategy" target="_blank">70. Applying Negotiation Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Persuasion" target="_blank">71. Persuasion</a></div>




<h4>Communication</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Verbal%20Communication" target="_blank">72. Verbal Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Storytelling" target="_blank">73. Storytelling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Active%20Listening" target="_blank">74. Active Listening</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Targeted%20Communication" target="_blank">75. Targeted Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strong%20Eye%20Contact" target="_blank">76. Strong Eye Contact</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Communication" target="_blank">77. Visual Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Speaking" target="_blank">78. Public Speaking</a></div>




<h4>Interpersonal Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=First%20Impressions" target="_blank">79. First Impressions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotional%20Intelligence" target="_blank">80. Emotional Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Networking" target="_blank">81. Networking</a></div>




<h4>Innovation</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creative%20Thinking" target="_blank">82. Creative Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Design%20Sense" target="_blank">83. Design Sense</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Problem%20Solving" target="_blank">84. Problem Solving</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Applying%20Innovation%20Techniques" target="_blank">85. Applying Innovation Techniques</a></div>




<h4>Soft Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Competitive%20Focus" target="_blank">86. Competitive Focus</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Endurance" target="_blank">87. Endurance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Assertiveness" target="_blank">88. Assertiveness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Tolerance%20of%20Change%20and%20Uncertainty" target="_blank">89. Tolerance of Change and Uncertainty</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Taking%20Criticism" target="_blank">90. Taking Criticism</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Adaptability%20%26%20Resilience" target="_blank">91. Adaptability &amp; Resilience</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Critical%20Thinking" target="_blank">92. Critical Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Management" target="_blank">93. Time Management</a></div>






<h3 id="id73">4.4 MBA (110 Skills)</h3>


<h4>Core MBA Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Management" target="_blank">1. Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Finance" target="_blank">2. Finance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=International%20Business" target="_blank">3. International Business</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing" target="_blank">4. Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organizational%20Behavior" target="_blank">5. Organizational Behavior</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategy" target="_blank">6. Strategy</a></div>




<h4>Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Management" target="_blank">7. Sales Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Operations%20Management" target="_blank">8. Operations Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Enterprise%20Resource%20Management" target="_blank">9. Enterprise Resource Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Human%20Resource%20Management" target="_blank">10. Human Resource Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Supply%20Chain%20Management" target="_blank">11. Supply Chain Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Logistics" target="_blank">12. Logistics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Management" target="_blank">13. Project Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Program%20Management" target="_blank">14. Program Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Real%20Estate%20Management" target="_blank">15. Real Estate Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Crisis%20Management" target="_blank">16. Crisis Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Accounting%20Management" target="_blank">17. Accounting Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Knowledge%20Management" target="_blank">18. Knowledge Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Technology%20Management" target="_blank">19. Technology Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Innovation%20Management" target="_blank">20. Innovation Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managerial%20Statistics" target="_blank">21. Managerial Statistics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cross-Cultural%20Management" target="_blank">22. Cross-Cultural Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Joint%20Ventures" target="_blank">23. Managing Joint Ventures</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Productivity" target="_blank">24. Managing Productivity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Forecasting" target="_blank">25. Forecasting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Planning" target="_blank">26. Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sourcing" target="_blank">27. Sourcing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Scheduling" target="_blank">28. Scheduling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organizing" target="_blank">29. Organizing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Benchmarking" target="_blank">30. Benchmarking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Risk%20Management" target="_blank">31. Risk Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quality%20Management" target="_blank">32. Quality Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Social%20Responsibility" target="_blank">33. Corporate Social Responsibility</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sustainability" target="_blank">34. Sustainability</a></div>




<h4>Finance</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Raising%20Capital" target="_blank">35. Raising Capital</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=M%26A%20Finance" target="_blank">36. M&amp;A Finance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Capital%20Structure" target="_blank">37. Corporate Capital Structure</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Analysis%20for%20Corporate%20Decisions" target="_blank">38. Financial Analysis for Corporate Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Analysis%20of%20Accounting%20Information" target="_blank">39. Strategic Analysis of Accounting Information</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market%20Economics" target="_blank">40. Market Economics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Applying%20Economic%20Models" target="_blank">41. Applying Economic Models</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managerial%20Accounting" target="_blank">42. Managerial Accounting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Statements" target="_blank">43. Financial Statements</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Tax%20Strategy" target="_blank">44. Tax Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Forecasting" target="_blank">45. Financial Forecasting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Asset%20Management" target="_blank">46. Asset Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Real%20Estate%20Financial%20Analysis" target="_blank">47. Real Estate Financial Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Risk-Return" target="_blank">48. Managing Risk-Return</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Audit" target="_blank">49. Financial Audit</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Financial%20Risk" target="_blank">50. Managing Financial Risk</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Liability%20Valuation" target="_blank">51. Liability Valuation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Working%20Capital%20Efficiency" target="_blank">52. Working Capital Efficiency</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cost%20Management" target="_blank">53. Cost Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Revenue%20Management" target="_blank">54. Revenue Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Modeling" target="_blank">55. Financial Modeling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Behavioral%20Finance" target="_blank">56. Behavioral Finance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dividend%20Policy" target="_blank">57. Dividend Policy</a></div>




<h4>International Business</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Transnational%20Market%20Strategies" target="_blank">58. Transnational Market Strategies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Governance" target="_blank">59. Corporate Governance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mergers%2C%20Acquisitions%20and%20Divestiture" target="_blank">60. Mergers, Acquisitions and Divestiture</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Restructuring" target="_blank">61. Corporate Restructuring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Models" target="_blank">62. Business Models</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Law" target="_blank">63. Business Law</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Regulatory%20Compliance" target="_blank">64. Regulatory Compliance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Disputes" target="_blank">65. Business Disputes</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Liability%20Risks" target="_blank">66. Liability Risks</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Entrepreneurship" target="_blank">67. Corporate Entrepreneurship</a></div>




<h4>Marketing</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Planning%20and%20Execution" target="_blank">68. Marketing Planning and Execution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=International%20Marketing" target="_blank">69. International Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=B2B%20Marketing" target="_blank">70. B2B Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Development" target="_blank">71. Product Development</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Communications" target="_blank">72. Marketing Communications</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Advertising%20Management" target="_blank">73. Advertising Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Channels%20Management" target="_blank">74. Channels Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Pricing%20Management" target="_blank">75. Pricing Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Relations" target="_blank">76. Public Relations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Market%20Research" target="_blank">77. Market Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Positioning" target="_blank">78. Strategic Positioning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Benchmarking" target="_blank">79. Product Benchmarking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=R%26D%20Management" target="_blank">80. R&amp;D Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Launch%20Marketing" target="_blank">81. Launch Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Product%20Life%20Cycle%20Management" target="_blank">82. Product Life Cycle Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Brand%20Management" target="_blank">83. Brand Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Category%20Management" target="_blank">84. Category Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Digital%20Marketing" target="_blank">85. Digital Marketing</a></div>




<h4>Organizational Behavior</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organization%20Design" target="_blank">86. Organization Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leadership" target="_blank">87. Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cross-Cultural%20Leadership" target="_blank">88. Cross-Cultural Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiating" target="_blank">89. Negotiating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">90. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomacy" target="_blank">91. Diplomacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Ethics" target="_blank">92. Business Ethics</a></div>




<h4>Strategy</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Competitive%20Strategy" target="_blank">93. Competitive Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Management" target="_blank">94. Strategic Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Management%20of%20Technology" target="_blank">95. Strategic Management of Technology</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Situation%20Analysis" target="_blank">96. Situation Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Game%20Theory%20and%20Business%20Strategy" target="_blank">97. Game Theory and Business Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Strategic%20Objectives" target="_blank">98. Managing Strategic Objectives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Strategic%20Alliances" target="_blank">99. Developing Strategic Alliances</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Transitional%20Strategies" target="_blank">100. Transitional Strategies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Gap%20Identification" target="_blank">101. Gap Identification</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Applying%20Patterns%20of%20Market%20Change" target="_blank">102. Applying Patterns of Market Change</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Digital%20Business%20Strategy" target="_blank">103. Digital Business Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Real%20Estate%20Strategy" target="_blank">104. Real Estate Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Strategy%20%26%20Tactics" target="_blank">105. Sales Strategy &amp; Tactics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Operations%20Strategy" target="_blank">106. Operations Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Venture%20Capital" target="_blank">107. Venture Capital</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Cost%20Management" target="_blank">108. Strategic Cost Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Hiring" target="_blank">109. Strategic Hiring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Succession%20Planning" target="_blank">110. Succession Planning</a></div>






<h2 class="blog-h2">5. Soft Skills</h2>



<h3 id="id74">5.1 Soft Skills (87 Skills)</h3>




<h4>Communication Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Verbal%20Communication" target="_blank">1. Verbal Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Body%20Language" target="_blank">2. Body Language</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Physical%20Communication" target="_blank">3. Physical Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Writing" target="_blank">4. Writing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Storytelling" target="_blank">5. Storytelling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Communication" target="_blank">6. Visual Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Humor" target="_blank">7. Humor</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quick-wittedness" target="_blank">8. Quick-wittedness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Listening" target="_blank">9. Listening</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Presentation%20Skills" target="_blank">10. Presentation Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Speaking" target="_blank">11. Public Speaking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interviewing" target="_blank">12. Interviewing</a></div>


<h4>Leadership</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Team%20Building" target="_blank">13. Team Building</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Planning" target="_blank">14. Strategic Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Coaching" target="_blank">15. Coaching</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mentoring" target="_blank">16. Mentoring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Delegation" target="_blank">17. Delegation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dispute%20Resolution" target="_blank">18. Dispute Resolution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomacy" target="_blank">19. Diplomacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Giving%20Feedback" target="_blank">20. Giving Feedback</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Difficult%20Conversations" target="_blank">21. Managing Difficult Conversations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20Making" target="_blank">22. Decision Making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Performance%20Management" target="_blank">23. Performance Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Supervising" target="_blank">24. Supervising</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing" target="_blank">25. Managing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Manager%20Management" target="_blank">26. Manager Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Talent%20Management" target="_blank">27. Talent Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Remote%20Teams" target="_blank">28. Managing Remote Teams</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Virtual%20Teams" target="_blank">29. Managing Virtual Teams</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Crisis%20Management" target="_blank">30. Crisis Management</a></div>


<h4>Influencing</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Facilitation" target="_blank">31. Facilitation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Selling" target="_blank">32. Selling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Inspiring" target="_blank">33. Inspiring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Persuasion" target="_blank">34. Persuasion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiation" target="_blank">35. Negotiation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">36. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Collaborating" target="_blank">37. Collaborating</a></div>


<h4>Interpersonal Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Networking" target="_blank">38. Networking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interpersonal%20Relationships" target="_blank">39. Interpersonal Relationships</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dealing%20with%20Difficult%20People" target="_blank">40. Dealing with Difficult People</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Conflict%20Resolution" target="_blank">41. Conflict Resolution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Personal%20Branding" target="_blank">42. Personal Branding</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Office%20Politics" target="_blank">43. Office Politics</a></div>


<h4>Personal Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotional%20Intelligence" target="_blank">44. Emotional Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Awareness" target="_blank">45. Self Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotion%20Management" target="_blank">46. Emotion Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Stress%20Management" target="_blank">47. Stress Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Tolerance%20of%20Change%20and%20Uncertainty" target="_blank">48. Tolerance of Change and Uncertainty</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Taking%20Criticism" target="_blank">49. Taking Criticism</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Confidence" target="_blank">50. Self Confidence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Adaptability" target="_blank">51. Adaptability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Resilience" target="_blank">52. Resilience</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Assertiveness" target="_blank">53. Assertiveness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Competitiveness" target="_blank">54. Competitiveness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Leadership" target="_blank">55. Self Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Assessment" target="_blank">56. Self Assessment</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Work-Life%20Balance" target="_blank">57. Work-Life Balance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Friendliness" target="_blank">58. Friendliness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Enthusiasm" target="_blank">59. Enthusiasm</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Empathy" target="_blank">60. Empathy</a></div>


<h4>Creativity</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Problem%20Solving" target="_blank">61. Problem Solving</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Critical%20Thinking" target="_blank">62. Critical Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Innovation" target="_blank">63. Innovation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Troubleshooting" target="_blank">64. Troubleshooting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Design%20Sense" target="_blank">65. Design Sense</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Artistic%20Sense" target="_blank">66. Artistic Sense</a></div>


<h4>Professional Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organization" target="_blank">67. Organization</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Planning" target="_blank">68. Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Scheduling" target="_blank">69. Scheduling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Management" target="_blank">70. Time Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Meeting%20Management" target="_blank">71. Meeting Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Technology%20Savvy" target="_blank">72. Technology Savvy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Technology%20Trend%20Awareness" target="_blank">73. Technology Trend Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Trend%20Awareness" target="_blank">74. Business Trend Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Research" target="_blank">75. Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Etiquette" target="_blank">76. Business Etiquette</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Ethics" target="_blank">77. Business Ethics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diversity%20Awareness" target="_blank">78. Diversity Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Disability%20Awareness" target="_blank">79. Disability Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intercultural%20Competence" target="_blank">80. Intercultural Competence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Training" target="_blank">81. Training</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Train%20the%20Trainer" target="_blank">82. Train the Trainer</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Process%20Improvement" target="_blank">83. Process Improvement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Knowledge%20Management" target="_blank">84. Knowledge Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Writing%20Reports%20and%20Proposals" target="_blank">85. Writing Reports and Proposals</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Service" target="_blank">86. Customer Service</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Entrepreneurial%20Thinking" target="_blank">87. Entrepreneurial Thinking</a></div>






<h3 id="id75">5.2 Leadership (59 Skills)</h3>


<h4>Basic Leadership Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20Making" target="_blank">1. Decision Making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Professional%20Ethics" target="_blank">2. Professional Ethics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing" target="_blank">3. Influencing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Facilitation" target="_blank">4. Facilitation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Selling" target="_blank">5. Selling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Inspiring" target="_blank">6. Inspiring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Persuasion" target="_blank">7. Persuasion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiation" target="_blank">8. Negotiation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">9. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Collaborating" target="_blank">10. Collaborating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Team%20Building" target="_blank">11. Team Building</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Coaching%20%26%20Mentoring" target="_blank">12. Coaching &amp; Mentoring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategy%20Planning" target="_blank">13. Strategy Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Delegating" target="_blank">14. Delegating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dispute%20Resolution" target="_blank">15. Dispute Resolution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomacy" target="_blank">16. Diplomacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20People" target="_blank">17. Managing People</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Performance%20Management" target="_blank">18. Performance Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Difficult%20Conversations" target="_blank">19. Managing Difficult Conversations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Crisis%20Management" target="_blank">20. Crisis Management</a></div>


<h4>Communication Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Verbal%20Communication" target="_blank">21. Verbal Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Storytelling" target="_blank">22. Storytelling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Physical%20Communication%20%26%20Body%20Language" target="_blank">23. Physical Communication &amp; Body Language</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Writing" target="_blank">24. Writing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Communication" target="_blank">25. Visual Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Humor%20%26%20Quick-wittedness" target="_blank">26. Humor &amp; Quick-wittedness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Active%20Listening" target="_blank">27. Active Listening</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Speaking%20%26%20Presentation%20Skills" target="_blank">28. Public Speaking &amp; Presentation Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Targeted%20Communication" target="_blank">29. Targeted Communication</a></div>


<h4>Interpersonal Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Networking" target="_blank">30. Networking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interpersonal%20Relationships" target="_blank">31. Interpersonal Relationships</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dealing%20with%20Difficult%20People" target="_blank">32. Dealing with Difficult People</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Personal%20Branding" target="_blank">33. Personal Branding</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Office%20Politics" target="_blank">34. Office Politics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Group%20Dynamics" target="_blank">35. Managing Group Dynamics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intercultural%20Competence" target="_blank">36. Intercultural Competence</a></div>


<h4>Personal Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Assertiveness" target="_blank">37. Assertiveness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotional%20Intelligence" target="_blank">38. Emotional Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Awareness" target="_blank">39. Self Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotion%20Management" target="_blank">40. Emotion Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Tolerance%20of%20Change%20and%20Uncertainty" target="_blank">41. Tolerance of Change and Uncertainty</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Taking%20Criticism" target="_blank">42. Taking Criticism</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Confidence" target="_blank">43. Self Confidence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Adaptability%20%26%20Resilience" target="_blank">44. Adaptability &amp; Resilience</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Leadership" target="_blank">45. Self Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Enthusiasm" target="_blank">46. Enthusiasm</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leading%20by%20Example" target="_blank">47. Leading by Example</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Trust" target="_blank">48. Establishing Trust</a></div>


<h4>Creative Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Innovation" target="_blank">49. Innovation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Problem%20Solving" target="_blank">50. Problem Solving</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Critical%20Thinking" target="_blank">51. Critical Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Entrepreneurial%20Thinking" target="_blank">52. Entrepreneurial Thinking</a></div>


<h4>Professional Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Budgeting%20%26%20Financial%20Management" target="_blank">53. Budgeting &amp; Financial Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Planning%20%26%20Scheduling" target="_blank">54. Planning &amp; Scheduling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organization" target="_blank">55. Organization</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Management" target="_blank">56. Time Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Trend%20Awareness" target="_blank">57. Trend Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Research" target="_blank">58. Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Etiquette" target="_blank">59. Business Etiquette</a></div>






<h3 id="id76">5.3 Public Speaking (89 Skills)</h3>


<h4>Core Public Speaking Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Persuasion" target="_blank">1. Persuasion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Speaking%20Skills" target="_blank">2. Speaking Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Delivery" target="_blank">3. Delivery</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Communication" target="_blank">4. Visual Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interpersonal%20Skills" target="_blank">5. Interpersonal Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Personal%20Skills" target="_blank">6. Personal Skills</a></div>


<h4>Persuasion</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing" target="_blank">7. Influencing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">8. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Networking%20%28Before%20and%20After%20Speaking%29" target="_blank">9. Networking (Before and After Speaking)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Authority" target="_blank">10. Establishing Authority</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Being%20Interesting" target="_blank">11. Being Interesting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Inspiring%20An%20Audience" target="_blank">12. Inspiring An Audience</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20Emotions" target="_blank">13. Using Emotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Informing" target="_blank">14. Informing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Humor" target="_blank">15. Humor</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Eloquence" target="_blank">16. Eloquence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20a%20Relationship%20With%20An%20Audience" target="_blank">17. Developing a Relationship With An Audience</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Building%20Rapport%20With%20An%20Audience" target="_blank">18. Building Rapport With An Audience</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Empathizing" target="_blank">19. Empathizing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Debate" target="_blank">20. Debate</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Listening" target="_blank">21. Listening</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Answering%20Questions" target="_blank">22. Answering Questions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Crowd%20Psychology" target="_blank">23. Crowd Psychology</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Propaganda" target="_blank">24. Propaganda</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Appealing%20to%20Group%20Narcissism%20%28e.g.%20Chicago%20is%20my%20favorite%20town%21%29" target="_blank">25. Appealing to Group Narcissism (e.g. Chicago is my favorite town!)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Delivering%20a%20Call%20to%20Action" target="_blank">26. Delivering a Call to Action</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Building%20An%20Effective%20Argument" target="_blank">27. Building An Effective Argument</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Drilling%20a%20Message" target="_blank">28. Drilling a Message</a></div>


<h4>Speaking Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Vocabulary" target="_blank">29. Vocabulary</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Effective%20Word%20Choice" target="_blank">30. Effective Word Choice</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Plain%20Speaking" target="_blank">31. Plain Speaking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Speechwriting" target="_blank">32. Speechwriting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Storytelling" target="_blank">33. Storytelling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Analogies" target="_blank">34. Analogies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Slogans" target="_blank">35. Slogans</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Language%20Proficiency" target="_blank">36. Language Proficiency</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20a%20Vision" target="_blank">37. Developing a Vision</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Effective%20Argument" target="_blank">38. Effective Argument</a></div>


<h4>Delivery</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Fashion%20and%20Look" target="_blank">39. Fashion and Look</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Inflection%20of%20the%20Voice" target="_blank">40. Inflection of the Voice</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intonation" target="_blank">41. Intonation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Body%20Language" target="_blank">42. Body Language</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Facial%20Expressions" target="_blank">43. Facial Expressions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Eye%20Contact" target="_blank">44. Eye Contact</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Stage%20Presence" target="_blank">45. Stage Presence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Effect%20Use%20of%203D%20space%20%28e.g.%20walking%20around%29" target="_blank">46. Effect Use of 3D space (e.g. walking around)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Use%20of%20Props" target="_blank">47. Use of Props</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Capturing%20and%20Maintaining%20Attention" target="_blank">48. Capturing and Maintaining Attention</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Building%20Tension%20and%20Suspense" target="_blank">49. Building Tension and Suspense</a></div>


<h4>Visual Communication</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Design%20Sense" target="_blank">50. Design Sense</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Presentations" target="_blank">51. Developing Presentations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Designing%20Graphics" target="_blank">52. Designing Graphics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Drawing" target="_blank">53. Drawing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Effective%20Use%20of%20a%20Whiteboard" target="_blank">54. Effective Use of a Whiteboard</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Simplifying%20Complex%20Ideas%20With%20Visual%20Representations" target="_blank">55. Simplifying Complex Ideas With Visual Representations</a></div>


<h4>Technical Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Effective%20Use%20of%20Microphone%20and%20Sound%20System" target="_blank">56. Effective Use of Microphone and Sound System</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20Visual%20Display%20Technologies" target="_blank">57. Using Visual Display Technologies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Management" target="_blank">58. Time Management</a></div>


<h4>Interpersonal Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Reading%20Mood%20and%20Emotions" target="_blank">59. Reading Mood and Emotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dealing%20with%20Difficult%20People" target="_blank">60. Dealing with Difficult People</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Resolving%20Conflict" target="_blank">61. Resolving Conflict</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Facilitating%20Conversations" target="_blank">62. Facilitating Conversations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Making%20Good%20First%20Impressions" target="_blank">63. Making Good First Impressions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Building%20Relationships%20of%20Trust" target="_blank">64. Building Relationships of Trust</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Greetings" target="_blank">65. Greetings</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Politics" target="_blank">66. Politics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomacy" target="_blank">67. Diplomacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cultural%20Competence" target="_blank">68. Cultural Competence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Attunement%20to%20Social%20Norms" target="_blank">69. Attunement to Social Norms</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Collaborating" target="_blank">70. Collaborating</a></div>


<h4>Personal Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Personal%20Courage" target="_blank">71. Personal Courage</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intelligence" target="_blank">72. Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotional%20Intelligence" target="_blank">73. Emotional Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Stress" target="_blank">74. Managing Stress</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Taking%20Criticism" target="_blank">75. Taking Criticism</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Awareness" target="_blank">76. Self Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Control" target="_blank">77. Self Control</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Adaptability" target="_blank">78. Adaptability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Assertiveness" target="_blank">79. Assertiveness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Resilience" target="_blank">80. Resilience</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Assessment" target="_blank">81. Self Assessment</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Friendliness" target="_blank">82. Friendliness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Enthusiasm" target="_blank">83. Enthusiasm</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Willingness%20to%20Stand%20Out%20From%20a%20Crowd" target="_blank">84. Willingness to Stand Out From a Crowd</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Charisma" target="_blank">85. Charisma</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quick-wittedness" target="_blank">86. Quick-wittedness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Ethics" target="_blank">87. Ethics</a></div>


<h4>Related Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leadership" target="_blank">88. Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Personal%20Branding" target="_blank">89. Personal Branding</a></div>






<h3 id="id77">5.4 Presentations (22 Skills)</h3>


<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Verbal%20Communication" target="_blank">1. Verbal Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Delivery" target="_blank">2. Delivery</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leadership" target="_blank">3. Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Selling%20/%20Persuasion" target="_blank">4. Selling / Persuasion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Humor" target="_blank">5. Humor</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Storytelling" target="_blank">6. Storytelling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Written%20and%20Visual%20Communication" target="_blank">7. Written and Visual Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Awareness" target="_blank">8. Self Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotion%20Management" target="_blank">9. Emotion Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Adaptability" target="_blank">10. Adaptability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Listening" target="_blank">11. Listening</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Facilitating" target="_blank">12. Facilitating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Networking%20Skills" target="_blank">13. Networking Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interpersonal%20Relationships" target="_blank">14. Interpersonal Relationships</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dealing%20with%20Difficult%20Personalities" target="_blank">15. Dealing with Difficult Personalities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Stress%20Management" target="_blank">16. Stress Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Taking%20Criticism%20/%20Resilience" target="_blank">17. Taking Criticism / Resilience</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Problem%20Solving" target="_blank">18. Problem Solving</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Research" target="_blank">19. Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organization%20and%20Time%20Management" target="_blank">20. Organization and Time Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Gestures%20/%20Using%203d%20Space" target="_blank">21. Gestures / Using 3d Space</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Showmanship" target="_blank">22. Showmanship</a></div>






<h3 id="id78">5.5 Time Management (34 Skills)</h3>


<h4>Core Time Management</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Personal%20Time%20Management" target="_blank">1. Personal Time Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Task%20Planning" target="_blank">2. Task Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Task%20Tracking" target="_blank">3. Task Tracking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Allocating%20Resources" target="_blank">4. Allocating Resources</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Setting%20Goals" target="_blank">5. Setting Goals</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Delegation" target="_blank">6. Delegation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Accounting" target="_blank">7. Time Accounting</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Analysis" target="_blank">8. Time Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Monitoring" target="_blank">9. Monitoring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organizing" target="_blank">10. Organizing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Scheduling" target="_blank">11. Scheduling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Setting%20Priorities" target="_blank">12. Setting Priorities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Management%20Strategy" target="_blank">13. Time Management Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Management%20Leadership" target="_blank">14. Time Management Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Clearing%20Roadblocks" target="_blank">15. Clearing Roadblocks</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Continual%20Improvement" target="_blank">16. Continual Improvement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Reporting%20Task%20Status" target="_blank">17. Reporting Task Status</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20to%20Schedule" target="_blank">18. Managing to Schedule</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Escalating%20Schedule%20Issues" target="_blank">19. Escalating Schedule Issues</a></div>


<h4>Projects</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Planning" target="_blank">20. Project Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Work%20Breakdown%20Structure" target="_blank">21. Work Breakdown Structure</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Project%20Scheduling" target="_blank">22. Project Scheduling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Schedule%20Buy-in" target="_blank">23. Schedule Buy-in</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Status%20Communication" target="_blank">24. Status Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Issue%20Escalation" target="_blank">25. Issue Escalation</a></div>


<h4>Interpersonal</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Protecting%20Your%20Time" target="_blank">26. Protecting Your Time</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Burglar%20Defense%20Tactics" target="_blank">27. Time Burglar Defense Tactics</a></div>


<h4>Soft Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Goal%20Focus" target="_blank">28. Goal Focus</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Awareness" target="_blank">29. Time Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sense%20of%20Urgency" target="_blank">30. Sense of Urgency</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Work-Life%20Balance" target="_blank">31. Work-Life Balance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Streamlining" target="_blank">32. Streamlining</a></div>


<h4>Time Management Methods</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=ABC%20Analysis" target="_blank">33. ABC Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Pareto%20Analysis%20%2880/20%20Rule%29" target="_blank">34. Pareto Analysis (80/20 Rule)</a></div>






<h3 id="id79">5.6 Interpersonal (80 Skills)</h3>


<h4>Core Interpersonal Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communication%20Skills" target="_blank">1. Communication Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing" target="_blank">2. Influencing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiation%20%26%20Conflict%20Resolution" target="_blank">3. Negotiation &amp; Conflict Resolution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotional%20Intelligence" target="_blank">4. Emotional Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Networking" target="_blank">5. Networking</a></div>


<h4>Communication</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Verbal%20Communication" target="_blank">6. Verbal Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Presentation%20Skills" target="_blank">7. Presentation Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Speaking" target="_blank">8. Public Speaking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Communication" target="_blank">9. Visual Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Body%20Language" target="_blank">10. Body Language</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Facial%20Expressions" target="_blank">11. Facial Expressions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Eye%20Contact" target="_blank">12. Eye Contact</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Humor" target="_blank">13. Humor</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quick-wittedness" target="_blank">14. Quick-wittedness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Listening" target="_blank">15. Listening</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creative%20Questioning" target="_blank">16. Creative Questioning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Storytelling" target="_blank">17. Storytelling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interviewing" target="_blank">18. Interviewing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Effective%20Word%20Choice" target="_blank">19. Effective Word Choice</a></div>


<h4>Professional Communication</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Selling" target="_blank">20. Selling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing" target="_blank">21. Marketing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Corporate%20Communication" target="_blank">22. Corporate Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Community%20Engagement" target="_blank">23. Community Engagement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Reputation%20Management" target="_blank">24. Reputation Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Effective%20Meetings" target="_blank">25. Effective Meetings</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Writing%20%28e.g.%20reports%2C%20emails%29" target="_blank">26. Business Writing (e.g. reports, emails)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Coaching" target="_blank">27. Coaching</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mentoring" target="_blank">28. Mentoring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Training" target="_blank">29. Training</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Service" target="_blank">30. Customer Service</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interviewing" target="_blank">31. Interviewing</a></div>




<h4>Influencing</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Facilitation" target="_blank">32. Facilitation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Inspiring" target="_blank">33. Inspiring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Persuasion" target="_blank">34. Persuasion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">35. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Collaborating" target="_blank">36. Collaborating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Debating" target="_blank">37. Debating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Personal%20Branding" target="_blank">38. Personal Branding</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Office%20Politics" target="_blank">39. Office Politics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Team%20Building" target="_blank">40. Team Building</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Giving%20Feedback" target="_blank">41. Giving Feedback</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Difficult%20Conversations" target="_blank">42. Managing Difficult Conversations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Engaging%20Employees" target="_blank">43. Engaging Employees</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Empowering%20Others" target="_blank">44. Empowering Others</a></div>


<h4>Negotiation</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomacy" target="_blank">45. Diplomacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Partnerships%20and%20Alliances" target="_blank">46. Establishing Partnerships and Alliances</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Multi-party%20Negotiations" target="_blank">47. Multi-party Negotiations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=International%20Business%20Negotiations%20%28e.g.%20Inter-cultural%29" target="_blank">48. International Business Negotiations (e.g. Inter-cultural)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiating%20Across%20Organizational%20Boundaries" target="_blank">49. Negotiating Across Organizational Boundaries</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mediation" target="_blank">50. Mediation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Arbitration" target="_blank">51. Arbitration</a></div>




<h4>Conflict Resolution</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identifying%20Underlying%20Conflict" target="_blank">52. Identifying Underlying Conflict</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Bringing%20Conflict%20Into%20The%20Open" target="_blank">53. Bringing Conflict Into The Open</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Resolving%20Conflict" target="_blank">54. Resolving Conflict</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dealing%20with%20Difficult%20People" target="_blank">55. Dealing with Difficult People</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Presenting%20to%20a%20Hostile%20Audience" target="_blank">56. Presenting to a Hostile Audience</a></div>


<h4>Emotional Intelligence</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Awareness" target="_blank">57. Self Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotion%20Management" target="_blank">58. Emotion Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Stress%20Management" target="_blank">59. Stress Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Empathy" target="_blank">60. Empathy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Friendliness" target="_blank">61. Friendliness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Confidence" target="_blank">62. Self Confidence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Taking%20Criticism" target="_blank">63. Taking Criticism</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Social%20Intelligence" target="_blank">64. Social Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Effective%20Greetings" target="_blank">65. Effective Greetings</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Perceiving%20Emotions" target="_blank">66. Perceiving Emotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Attunement%20to%20Social%20Norms" target="_blank">67. Attunement to Social Norms</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Social%20Skills" target="_blank">68. Social Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intercultural%20Competence" target="_blank">69. Intercultural Competence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Language%20Abilities" target="_blank">70. Language Abilities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Charisma" target="_blank">71. Charisma</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Effective%20Presentation%20of%20Self" target="_blank">72. Effective Presentation of Self</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Fostering%20Personal%20Courage%20in%20Others" target="_blank">73. Fostering Personal Courage in Others</a></div>




<h4>Networking</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Making%20a%20Good%20First%20Impression" target="_blank">74. Making a Good First Impression</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Introducing%20Yourself" target="_blank">75. Introducing Yourself</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Engaging%20Conversation" target="_blank">76. Engaging Conversation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Contacts" target="_blank">77. Establishing Contacts</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Maintaining%20Long-term%20Relationships" target="_blank">78. Maintaining Long-term Relationships</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Building%20Relationships%20of%20Trust" target="_blank">79. Building Relationships of Trust</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Building%20Productive%20Relationships" target="_blank">80. Building Productive Relationships</a></div>






<h3 id="id80">5.7 Emotional Intelligence (42 Skills)</h3>


<h4>Core Emotional Intelligence</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Perceiving%20Emotions" target="_blank">1. Perceiving Emotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Understanding%20Emotions" target="_blank">2. Understanding Emotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20Emotions" target="_blank">3. Using Emotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Emotions" target="_blank">4. Managing Emotions</a></div>


<h4>Perceiving Emotions</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Awareness" target="_blank">5. Self Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Reading%20People" target="_blank">6. Reading People</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Empathy" target="_blank">7. Empathy</a></div>


<h4>Understanding Emotions</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Assessment" target="_blank">8. Self Assessment</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Assessing%20the%20Emotions%20of%20Others" target="_blank">9. Assessing the Emotions of Others</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Attunement%20to%20Social%20Norms" target="_blank">10. Attunement to Social Norms</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cultural%20Competence" target="_blank">11. Cultural Competence</a></div>


<h4>Using Emotions</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Charisma" target="_blank">12. Charisma</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Gut%20Decisions" target="_blank">13. Gut Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sociability" target="_blank">14. Sociability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Social%20Skill" target="_blank">15. Social Skill</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communication" target="_blank">16. Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=First%20Impressions" target="_blank">17. First Impressions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Body%20Language" target="_blank">18. Body Language</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Eye%20Contact" target="_blank">19. Eye Contact</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Humor" target="_blank">20. Humor</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">21. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing" target="_blank">22. Influencing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiating" target="_blank">23. Negotiating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Facilitating" target="_blank">24. Facilitating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Collaborating" target="_blank">25. Collaborating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Building%20Rapport" target="_blank">26. Building Rapport</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Building%20Trust" target="_blank">27. Building Trust</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Openness" target="_blank">28. Openness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Taking%20Criticism" target="_blank">29. Taking Criticism</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Adaptability" target="_blank">30. Adaptability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Curiosity" target="_blank">31. Curiosity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Agreeableness" target="_blank">32. Agreeableness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Conscientiousness" target="_blank">33. Conscientiousness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Energy" target="_blank">34. Energy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Assertiveness" target="_blank">35. Assertiveness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Focus" target="_blank">36. Focus</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Introspection" target="_blank">37. Introspection</a></div>


<h4>Managing Emotions</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Controlling%20Disruptive%20Emotions" target="_blank">38. Controlling Disruptive Emotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Controlling%20Impulses" target="_blank">39. Controlling Impulses</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self-discipline" target="_blank">40. Self-discipline</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Resilience" target="_blank">41. Resilience</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Endurance" target="_blank">42. Endurance</a></div>






<h3 id="id81">5.8 Communication (90 Skills)</h3>


<h4>Core Communication Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Verbal%20Communication" target="_blank">1. Verbal Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Communication" target="_blank">2. Visual Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interpersonal%20Skills" target="_blank">3. Interpersonal Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotional%20Intelligence" target="_blank">4. Emotional Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing" target="_blank">5. Influencing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Communication" target="_blank">6. Business Communication</a></div>




<h4>Verbal Communication</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Conversation" target="_blank">7. Conversation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Articulate%20Speech" target="_blank">8. Articulate Speech</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Ability%20to%20Simplify%20Complex%20Ideas" target="_blank">9. Ability to Simplify Complex Ideas</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Speaking" target="_blank">10. Public Speaking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Presentations" target="_blank">11. Presentations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Storytelling" target="_blank">12. Storytelling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20Humor%20%26%20Wit" target="_blank">13. Using Humor &amp; Wit</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Effective%20Word%20Choice" target="_blank">14. Effective Word Choice</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Plain%20Language%20%28Clear%20Word%20Choice%20That%20Avoids%20Jargon%29" target="_blank">15. Plain Language (Clear Word Choice That Avoids Jargon)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mental%20Sharpness%20and%20Inventiveness" target="_blank">16. Mental Sharpness and Inventiveness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Control%20of%20the%20Voice%20%28Intonation%20%26%20Inflection%29" target="_blank">17. Control of the Voice (Intonation &amp; Inflection)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Speaking%20Rhythm" target="_blank">18. Speaking Rhythm</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self-presentation" target="_blank">19. Self-presentation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20a%20Relationship%20With%20an%20Audience" target="_blank">20. Developing a Relationship With an Audience</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Active%20Silence" target="_blank">21. Active Silence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Active%20Listening" target="_blank">22. Active Listening</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Selective%20Listening" target="_blank">23. Selective Listening</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Critical%20Questioning" target="_blank">24. Critical Questioning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Language%20Ability" target="_blank">25. Language Ability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Targeted%20Communication%20%28Tailoring%20Your%20Message%20To%20Your%20Audience%29" target="_blank">26. Targeted Communication (Tailoring Your Message To Your Audience)</a></div>




<h4>Visual Communication</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Presentation%20%28e.g.%20Effective%20Slides%29" target="_blank">27. Visual Presentation (e.g. Effective Slides)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Body%20Language%20%26%20Facial%20Expressions" target="_blank">28. Body Language &amp; Facial Expressions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Eye%20Contact" target="_blank">29. Eye Contact</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Gestures" target="_blank">30. Gestures</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Posture" target="_blank">31. Posture</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Stage%20Presence%20%28Public%20Speaking%29" target="_blank">32. Stage Presence (Public Speaking)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Artistic%20Sense" target="_blank">33. Artistic Sense</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Communication%20Design" target="_blank">34. Visual Communication Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Graphic%20Design" target="_blank">35. Graphic Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Web%20Design" target="_blank">36. Web Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Drawing" target="_blank">37. Drawing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Typography" target="_blank">38. Typography</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Effective%20Use%20of%20Visual%20Aids" target="_blank">39. Effective Use of Visual Aids</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Fashion%20Sense" target="_blank">40. Fashion Sense</a></div>




<h4>Interpersonal Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Social%20Intelligence" target="_blank">41. Social Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Greetings" target="_blank">42. Greetings</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Introductions" target="_blank">43. Introductions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Making%20Good%20First%20Impressions" target="_blank">44. Making Good First Impressions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Rapport" target="_blank">45. Establishing Rapport</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Building%20Trust" target="_blank">46. Building Trust</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Interpersonal%20Relationships" target="_blank">47. Developing Interpersonal Relationships</a></div>




<h4>Emotional Intelligence</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Perceiving%20Emotions" target="_blank">48. Perceiving Emotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Understanding%20Emotions" target="_blank">49. Understanding Emotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Ability%20to%20Analyze%20Your%20Own%20Emotions" target="_blank">50. Ability to Analyze Your Own Emotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Control%20%28Emotions%29" target="_blank">51. Self Control (Emotions)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Empathy" target="_blank">52. Empathy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Observing%20%26%20Analyzing" target="_blank">53. Observing &amp; Analyzing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Paraphrasing" target="_blank">54. Paraphrasing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Understanding%20of%20Barriers%20to%20Communication%20%28e.g.%20Information%20Overload%29" target="_blank">55. Understanding of Barriers to Communication (e.g. Information Overload)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Disability%20Awareness" target="_blank">56. Disability Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cultural%20Competence" target="_blank">57. Cultural Competence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Attunement%20to%20Social%20Norms" target="_blank">58. Attunement to Social Norms</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self-esteem" target="_blank">59. Self-esteem</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Open%20to%20Criticism" target="_blank">60. Open to Criticism</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sense%20of%20Humor" target="_blank">61. Sense of Humor</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20Emotions" target="_blank">62. Using Emotions</a></div>




<h4>Influencing</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Persuasion" target="_blank">63. Persuasion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Reasoning" target="_blank">64. Reasoning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiation" target="_blank">65. Negotiation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">66. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Inspiring" target="_blank">67. Inspiring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Debating" target="_blank">68. Debating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Providing%20Feedback" target="_blank">69. Providing Feedback</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Collaborating" target="_blank">70. Collaborating</a></div>




<h4>Business Communication</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Relations" target="_blank">71. Public Relations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Selling" target="_blank">72. Selling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Marketing%20Communications" target="_blank">73. Marketing Communications</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Advertising" target="_blank">74. Advertising</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Publicity" target="_blank">75. Publicity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Community%20Engagement" target="_blank">76. Community Engagement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Technical%20Communication" target="_blank">77. Technical Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Executive%20Communication%20%28e.g.%20Executive%20Summaries%29" target="_blank">78. Executive Communication (e.g. Executive Summaries)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Crisis%20Communication" target="_blank">79. Crisis Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Interviewing" target="_blank">80. Interviewing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Service" target="_blank">81. Customer Service</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Relationships" target="_blank">82. Customer Relationships</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leadership" target="_blank">83. Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Team%20Building" target="_blank">84. Team Building</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Engaging%20Employees" target="_blank">85. Engaging Employees</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Coaching" target="_blank">86. Coaching</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mentoring" target="_blank">87. Mentoring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Training" target="_blank">88. Training</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Conflict%20Resolution" target="_blank">89. Conflict Resolution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Office%20Politics" target="_blank">90. Office Politics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Etiquette" target="_blank">91. Business Etiquette</a></div>






<h3 id="id82">5.9 Visual Comminication (83 Skills)</h3>


<h4>Visual Abilities</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Literacy" target="_blank">1. Visual Literacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Reasoning" target="_blank">2. Visual Reasoning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Spatial%20Analysis" target="_blank">3. Spatial Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Analytics" target="_blank">4. Visual Analytics</a></div>


<h4>Artistic Abilities</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Aesthetic%20Sense" target="_blank">5. Aesthetic Sense</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Design%20Sense" target="_blank">6. Design Sense</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Artistic%20Sense" target="_blank">7. Artistic Sense</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cultural%20Sense" target="_blank">8. Cultural Sense</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Style" target="_blank">9. Style</a></div>


<h4>Professional Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Art" target="_blank">10. Art</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Illustration" target="_blank">11. Illustration</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Graphic%20Design" target="_blank">12. Graphic Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=User%20Interface%20Design%20%28e.%20g.%20Web%20Design%29" target="_blank">13. User Interface Design (e. g. Web Design)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Typography" target="_blank">14. Typography</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Page%20Layout%20Design" target="_blank">15. Page Layout Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Photography" target="_blank">16. Photography</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Photo%20Editing" target="_blank">17. Photo Editing</a></div>


<h4>Persuasion Techniques</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Persuasion%20%28Ethos%2C%20Pathos%2C%20and%20Logos%29" target="_blank">18. Persuasion (Ethos, Pathos, and Logos)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Arrangement" target="_blank">19. Arrangement</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emphasis" target="_blank">20. Emphasis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Clarity" target="_blank">21. Clarity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Conciseness" target="_blank">22. Conciseness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Tone" target="_blank">23. Tone</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Targeting%20Information%20To%20An%20Audience" target="_blank">24. Targeting Information To An Audience</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Framing%20%28i.%20e.%20Framing%20a%20Visual%20Argument%29" target="_blank">25. Framing (i. e. Framing a Visual Argument)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Social%20Proof" target="_blank">26. Social Proof</a></div>


<h4>Writing</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Writing" target="_blank">27. Business Writing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Copy%20Writing" target="_blank">28. Copy Writing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Word%20Choice" target="_blank">29. Word Choice</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Plain%20Language%20%28i.e.%20avoid%20needless%20jargon%20and%20flowery%20words%29" target="_blank">30. Plain Language (i.e. avoid needless jargon and flowery words)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Slogans" target="_blank">31. Slogans</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Language%20Ability" target="_blank">32. Language Ability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Editing" target="_blank">33. Editing</a></div>


<h4>Presenting Visual Information</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Speaking" target="_blank">34. Public Speaking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Facilitating%20Meetings" target="_blank">35. Facilitating Meetings</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Presentation%20Flow" target="_blank">36. Presentation Flow</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Storytelling" target="_blank">37. Storytelling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Humor" target="_blank">38. Humor</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Influencing" target="_blank">39. Influencing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Motivating" target="_blank">40. Motivating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Coaching" target="_blank">41. Coaching</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cultural%20Competence" target="_blank">42. Cultural Competence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Brainstorming" target="_blank">43. Brainstorming</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Whiteboarding" target="_blank">44. Whiteboarding</a></div>


<h4>Information Visualization</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Expression%20of%20Emotion" target="_blank">45. Visual Expression of Emotion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Expression%20of%20Concepts" target="_blank">46. Visual Expression of Concepts</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Simplifying%20Complex%20Ideas" target="_blank">47. Simplifying Complex Ideas</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Technical%20Drawings" target="_blank">48. Technical Drawings</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Engineering%20Drawings" target="_blank">49. Engineering Drawings</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Scientific%20Diagrams" target="_blank">50. Scientific Diagrams</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diagrams" target="_blank">51. Diagrams</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Graphs" target="_blank">52. Graphs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Heatmaps" target="_blank">53. Heatmaps</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Treemaping" target="_blank">54. Treemaping</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Flow%20Charts" target="_blank">55. Flow Charts</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Data%20Flow%20Diagrams" target="_blank">56. Data Flow Diagrams</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mindmaps" target="_blank">57. Mindmaps</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Concept%20Maps" target="_blank">58. Concept Maps</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Maps%20%28Cartography%29" target="_blank">59. Maps (Cartography)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Statistical%20Graphics" target="_blank">60. Statistical Graphics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Timelines" target="_blank">61. Timelines</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Hierarchies" target="_blank">62. Hierarchies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Network%20Visualization%20%28Representing%20Relationships%29" target="_blank">63. Network Visualization (Representing Relationships)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Argument%20Maps" target="_blank">64. Argument Maps</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Symbols" target="_blank">65. Symbols</a></div>


<h4>Information Modeling &amp; Design</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Research" target="_blank">66. Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Information%20Analysis" target="_blank">67. Information Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Modeling%20Information" target="_blank">68. Modeling Information</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Modeling%20Decisions" target="_blank">69. Modeling Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Statistical%20Analysis" target="_blank">70. Statistical Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Metrics%20%26%20KPI" target="_blank">71. Developing Metrics &amp; KPI</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Data%20Transformations" target="_blank">72. Data Transformations</a></div>


<h4>Visualizing Business Information</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Business%20Analysis" target="_blank">73. Business Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Financial%20Analysis" target="_blank">74. Financial Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Branding" target="_blank">75. Branding</a></div>


<h4>Technology</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20Visualization%20Tools" target="_blank">76. Using Visualization Tools</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Computer-aided%20Design" target="_blank">77. Computer-aided Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Information%20Architecture" target="_blank">78. Information Architecture</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visualization%20Standards%20%28e.%20g.%20UML%29" target="_blank">79. Visualization Standards (e. g. UML)</a></div>


<h4>Managing Visual Information</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Knowledge%20Management" target="_blank">80. Knowledge Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Infonomics" target="_blank">81. Infonomics</a></div>




<h4>Leadership of Visual Communication</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creative%20Direction" target="_blank">82. Creative Direction</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Art%20Direction" target="_blank">83. Art Direction</a></div>






<h3 id="id83">5.10 Negotiation (103 Skills)</h3>


<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiation%20Planning" target="_blank">1. Negotiation Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=To%20Negotiate" target="_blank">2.Influencing To Negotiate</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotional%20Intelligence" target="_blank">3. Emotional Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Communication" target="_blank">4. Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Hard%20Bargaining" target="_blank">5. Hard Bargaining</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomacy" target="_blank">6. Diplomacy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Selling" target="_blank">7. Selling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20Making" target="_blank">8. Decision Making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Soft%20Skills" target="_blank">9. Soft Skills</a></div>


<h4>Negotiation Planning</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Research" target="_blank">10. Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Goal%20%26%20Objective%20Planning" target="_blank">11. Goal &amp; Objective Planning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identifying%20%26%20Prioritizing%20Alternatives" target="_blank">12. Identifying &amp; Prioritizing Alternatives</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identifying%20%26%20Validating%20Assumptions" target="_blank">13. Identifying &amp; Validating Assumptions</a></div>


<h4>Influencing To Negotiate</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Persuasion" target="_blank">14. Persuasion</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Pitching%20Ideas%20%26%20Proposals" target="_blank">15. Pitching Ideas &amp; Proposals</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Public%20Speaking" target="_blank">16. Public Speaking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Reasoning" target="_blank">17. Reasoning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Debating" target="_blank">18. Debating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Conflict%20Resolution" target="_blank">19. Conflict Resolution</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Collaborating" target="_blank">20. Collaborating</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Authority" target="_blank">21. Establishing Authority</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Rapport%20%26%20Trust" target="_blank">22. Establishing Rapport &amp; Trust</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Managing%20Relationships" target="_blank">23. Managing Relationships</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creative%20Questioning" target="_blank">24. Creative Questioning</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identifying%20Needs" target="_blank">25. Identifying Needs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Ability%20to%20Simplify%20Complex%20Ideas" target="_blank">26. Ability to Simplify Complex Ideas</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Common%20Ground" target="_blank">27. Establishing Common Ground</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Win-Win%20Thinking" target="_blank">28. Win-Win Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Consistency" target="_blank">29. Consistency</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Social%20Proof" target="_blank">30. Establishing Social Proof</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Demonstrating%20Good%20Faith" target="_blank">31. Demonstrating Good Faith</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Ability%20to%20See%20Other%20People%27s%20Point%20of%20View" target="_blank">32. Ability to See Other People's Point of View</a></div>


<h4>Complex Negotiations</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Negotiating%20Across%20Organizational%20Boundaries" target="_blank">33. Negotiating Across Organizational Boundaries</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Multi-party%20Negotiations" target="_blank">34. Multi-party Negotiations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=International%20Business%20Negotiations" target="_blank">35. International Business Negotiations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Establishing%20Partnerships%20and%20Alliances" target="_blank">36. Establishing Partnerships and Alliances</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mediation" target="_blank">37. Mediation</a></div>


<h4>Emotional Intelligence</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Observing%20%26%20Analyzing%20Emotions" target="_blank">38. Observing &amp; Analyzing Emotions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Separating%20the%20People%20From%20the%20Problem" target="_blank">39. Separating the People From the Problem</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Empathy" target="_blank">40. Empathy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Optimism" target="_blank">41. Optimism</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Humor" target="_blank">42. Humor</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Ability%20To%20Take%20Criticism" target="_blank">43. Ability To Take Criticism</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Self%20Control" target="_blank">44. Self Control</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Recognizing%20Attempts%20To%20Trigger%20Emotional%20Responses" target="_blank">45. Recognizing Attempts To Trigger Emotional Responses</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Deflecting%20Personal%20Attacks" target="_blank">46. Deflecting Personal Attacks</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Attunement%20to%20Social%20Norms" target="_blank">47. Attunement to Social Norms</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Quick-wittedness" target="_blank">48. Quick-wittedness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Endurance%20%26%20Persistence" target="_blank">49. Endurance &amp; Persistence</a></div>


<h4>Communication</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Verbal%20Communication" target="_blank">50. Verbal Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Visual%20Communication" target="_blank">51. Visual Communication</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Social%20Intelligence" target="_blank">52. Social Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Active%20Listening" target="_blank">53. Active Listening</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20Silence" target="_blank">54. Using Silence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Body%20Language" target="_blank">55. Body Language</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strong%20Eye%20Contact" target="_blank">56. Strong Eye Contact</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=First%20Impressions" target="_blank">57. First Impressions</a></div>




<h4>Hard Bargaining</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Fear%2C%20Uncertainty%20and%20Doubt" target="_blank">58. Fear, Uncertainty and Doubt</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Bluffing" target="_blank">59. Bluffing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Divide%20and%20Conquer" target="_blank">60. Divide and Conquer</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Defense%20in%20Depth" target="_blank">61. Defense in Depth</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Switching%20Barriers" target="_blank">62. Switching Barriers</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Buying%20Time%20%28e.%20g.%20Snow%20Job%29" target="_blank">63. Buying Time (e. g. Snow Job)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Bogey" target="_blank">64. Bogey</a></div>


<h4>Diplomacy</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomatic%20Strategy" target="_blank">65. Diplomatic Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Politics" target="_blank">66. Politics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Using%20An%20Advocate%20%28Shuttle%20Diplomacy%29" target="_blank">67. Using An Advocate (Shuttle Diplomacy)</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Positive%20Words%2C%20Negative%20Body%20Language" target="_blank">68. Positive Words, Negative Body Language</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Saying%20No%20With%20Positive%20Words" target="_blank">69. Saying No With Positive Words</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Diplomatic%20Language" target="_blank">70. Diplomatic Language</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Politeness" target="_blank">71. Politeness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Calling%20Bluffs%20%26%20Naming%20Negotiation%20Tricks" target="_blank">72. Calling Bluffs &amp; Naming Negotiation Tricks</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Building%20Retreat%20Paths" target="_blank">73. Building Retreat Paths</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Use%20of%20Objective%20Criteria" target="_blank">74. Use of Objective Criteria</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Anchoring" target="_blank">75. Anchoring</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Avoiding%20Escalations" target="_blank">76. Avoiding Escalations</a></div>


<h4>Selling</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Strategy" target="_blank">77. Sales Strategy</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Identifying%20Customer%20Requirements%20%26%20Needs" target="_blank">78. Identifying Customer Requirements &amp; Needs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Proposals" target="_blank">79. Developing Proposals</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sales%20Pitching" target="_blank">80. Sales Pitching</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Answering%20Customer%20Questions" target="_blank">81. Answering Customer Questions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Customer%20Relationship%20Management" target="_blank">82. Customer Relationship Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Selling%20Product%20Benefits" target="_blank">83. Selling Product Benefits</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Analysis%20of%20Customer%20Buy%20Cycles" target="_blank">84. Analysis of Customer Buy Cycles</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Analysis%20of%20Customer-side%20Politics" target="_blank">85. Analysis of Customer-side Politics</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Foot-in-the-Door%20Techniques" target="_blank">86. Foot-in-the-Door Techniques</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Door-in-the-Face%20Techniques" target="_blank">87. Door-in-the-Face Techniques</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Closing%20Deals" target="_blank">88. Closing Deals</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Nibbling%20%26%20Upselling" target="_blank">89. Nibbling &amp; Upselling</a></div>




<h4>Decision Making</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Strategic%20Decision%20Making" target="_blank">90. Strategic Decision Making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Tactical%20Decision%20Making" target="_blank">91. Tactical Decision Making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Information%20Analysis" target="_blank">92. Information Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Modeling%20Business%20Decisions" target="_blank">93. Modeling Business Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20Making%20by%20Formalizing%20Trade-offs" target="_blank">94. Decision Making by Formalizing Trade-offs</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Problem%20Solving" target="_blank">95. Problem Solving</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Dealing%20with%20Ambiguity" target="_blank">96. Dealing with Ambiguity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Accountability" target="_blank">97. Accountability</a></div>


<h4>Soft Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Leadership" target="_blank">98. Leadership</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Organization%20Skills" target="_blank">99. Organization Skills</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Planning%20%26%20Scheduling" target="_blank">100. Planning &amp; Scheduling</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Time%20Management" target="_blank">101. Time Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Meeting%20Management" target="_blank">102. Meeting Management</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Cross-Cultural%20Competence" target="_blank">103. Cross-Cultural Competence</a></div>






<h3 id="id84">5.11 Innovation (60 Skills)</h3>


<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Idea%20Formation" target="_blank">1. Idea Formation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Applying%20Innovation%20Techniques" target="_blank">2. Applying Innovation Techniques</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20Making" target="_blank">3. Decision Making</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Design" target="_blank">4. Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Problem%20Solving" target="_blank">5. Problem Solving</a></div>


<h4>Idea Formation</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Counterfactual%20Thinking" target="_blank">6. Counterfactual Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Divergent%20Thinking" target="_blank">7. Divergent Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Creative%20Thinking" target="_blank">8. Creative Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intelligence" target="_blank">9. Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Fluid%20Intelligence" target="_blank">10. Fluid Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Emotional%20Intelligence" target="_blank">11. Emotional Intelligence</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Conceptual%20Blending" target="_blank">12. Conceptual Blending</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Unbiased%20Thinking" target="_blank">13. Unbiased Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Intuition" target="_blank">14. Intuition</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Trend%20Awareness" target="_blank">15. Trend Awareness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sapience" target="_blank">16. Sapience</a></div>




<h4>Applying Innovation Techniques</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Research" target="_blank">17. Research</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Incubation%20Techniques" target="_blank">18. Incubation Techniques</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Modeling%20Concepts" target="_blank">19. Modeling Concepts</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Framing%20Problems" target="_blank">20. Framing Problems</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Thought%20Experiment" target="_blank">21. Thought Experiment</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Exploring%20Possibilities" target="_blank">22. Exploring Possibilities</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Prototyping" target="_blank">23. Prototyping</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Aleatory%20Techniques" target="_blank">24. Aleatory Techniques</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Improvisation" target="_blank">25. Improvisation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Inducing%20Change%20of%20Perspective" target="_blank">26. Inducing Change of Perspective</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Multiple%20Idea%20Facilitation" target="_blank">27. Multiple Idea Facilitation</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Mental%20State%20Shift" target="_blank">28. Mental State Shift</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Hypothesis%20Testing" target="_blank">29. Hypothesis Testing</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Morphological%20Analysis" target="_blank">30. Morphological Analysis</a></div>




<h4>Decision Making</h4>



<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Gut%20Decisions" target="_blank">31. Gut Decisions</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Decision%20Analysis" target="_blank">32. Decision Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Analogies" target="_blank">33. Analogies</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Remote%20Associations" target="_blank">34. Remote Associations</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Remote%20Consequences" target="_blank">35. Remote Consequences</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sensemaking" target="_blank">36. Sensemaking</a></div>




<h4>Design</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Artistic%20Ability" target="_blank">37. Artistic Ability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Design%20Sense" target="_blank">38. Design Sense</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Aesthetic%20Sense" target="_blank">39. Aesthetic Sense</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Functional%20Sense" target="_blank">40. Functional Sense</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Design%20Analysis" target="_blank">41. Design Analysis</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=User-centered%20Design" target="_blank">42. User-centered Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Use-centered%20Design" target="_blank">43. Use-centered Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Critical%20Design" target="_blank">44. Critical Design</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Speculative%20Design" target="_blank">45. Speculative Design</a></div>




<h4>Problem Solving</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Lateral%20Thinking" target="_blank">46. Lateral Thinking</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Developing%20Useful%20Metaphors" target="_blank">47. Developing Useful Metaphors</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Problem%20Visualization" target="_blank">48. Problem Visualization</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Reduction" target="_blank">49. Reduction</a></div>




<h4>Soft Skills</h4>

<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Courage" target="_blank">50. Courage</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Curiosity" target="_blank">51. Curiosity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Imagination" target="_blank">52. Imagination</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Sociability" target="_blank">53. Sociability</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Playfulness" target="_blank">54. Playfulness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Introspection" target="_blank">55. Introspection</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Resilience%20%26%20Endurance" target="_blank">56. Resilience &amp; Endurance</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Originality" target="_blank">57. Originality</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Openness" target="_blank">58. Openness</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Tolerance%20for%20Ambiguity" target="_blank">59. Tolerance for Ambiguity</a></div>
<div class="hashtag"><a href="https://www.youtube.com/results?search_query=Optimism" target="_blank">60. Optimism</a></div>
</div>

</div>
    			
    			<h3 class="mt-5">Reference<h3>
    			<p><span class="text-white">1000 Skills for Your Resume (List). (n.d.). Retrieved October 27, 2020, from</span> <a href="https://careers.simplicable.com/careers/new/1000-skills-for-your-resume" target="_blank">https://careers.simplicable.com/careers/new/1000-skills-for-your-resume</a><p>
    			
    		</div>

        </div>
    		
            <?php require_once('___footer.php'); ?>

        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="vendors/datatables/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="vendors/datatables/datatables-demo.js"></script>

    </body>

</html>