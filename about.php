
<?php
include("function.php");
include("session.php");
include("connection.php");
if(isset($_POST["login"])){
$Username=mysqli_real_escape_string($connection,$_POST["username"]);
$Password=mysqli_real_escape_string($connection,$_POST["password"]);
 if(empty($Username || $Password)){
     $_SESSION["ErrorMessage"]="Login Field is Required";
 }
  else{
      $Login_account=login_Access($Username,$Password);
    $_SESSION["User_Id"]=$Login_account["id"];

    $_SESSION["Username"]=$Login_account["username"];
    if($Login_account){

$_SESSION["SuccessMessage"]="Welcome ".$_SESSION["Username"];
Redirect_to("submission.php");



}
    else{
        $_SESSION["ErrorMessage"]="Invalid Username/Password";

    }
  }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="image/unilag.png">

</head>

<body>
<div class="fluid-container">
  <div class="row loginpage ">
        <div id="login" class="col-md-4" style="margin-bottom: 30px;">
         <img src="image/unilag.png" height="52"  class="ml-5 my-2">
         <img src="image/NJES_logo.png" height="52" class="ml-5 my-2">
        </div>

        <div class="col-md-8 text-center">
          <div class="row mt-3">
            <div class="col-md-5 form-inner" style="padding-bottom: 10px;padding-top: 0px;">
                <form action="index.php" method="post">
                  Username <input class="username" type="text"  aria-label="Search" name="username">
            </div>
            <div class="col-md-7">
                  Password <input class="username" type="password" name="password" style="margin-bottom:10px;">
            <button type="submit" class="btn btn-success text-center pb-4" name="login" id="login">Login</button><br>
            </form>
             <div class="text-right ml-5">
         <p class="text-center text-danger mt-2 ml-5" id="register"><a href="register.php" class="text-center"><i style="color:black;">New User? </i>  Register</a></p>
            </div>
          </div>
  </div>
  </div>
     </div>

    <div class="text-center"><?php echo errormessage();

                     echo successmessage();?></div>
 <nav class="navbar navbar-expand-md navbar-light bg-light bg-cus">


     <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-4">
            <a href="index.php" class="nav-item nav-link active pl-4">Home</a>
            <a href="about.php" class="nav-item nav-link pl-5">About</a>
            <a href="submission.php" class="nav-item nav-link pl-5">Submission</a>
            <a href="current.php" class="nav-item nav-link pl-5">Current</a>
            <a href="archive.php" class="nav-item nav-link px-5" tabindex="-1">Archive</a>
        </div>
         <div class="navbar-nav ml-auto">
            <!-- <a href="login.php" class="nav-item nav-link">Login</a>
            <a href="register.php" class="nav-item nav-link">Register</a> -->
            <input class="form-control mr-sm-2" type="text"  aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
</div>
        </div>

 </nav>
</div>
</div>

<div class="fluid-container">
    <div class="top">
    <h5> ABOUT THE JOURNAL</h5>
			<div class="col-md-12">
		            <ul id="accordable-example" class="accordable">
		              <li>
		                <span> About</span>
		                <div class="col-md-12">
											<p style="color: black">Nigerian Online Journal of Educational Science and Technology (NOJEST) is an open access journal, which means that all content is freely available without charge to the user or their institution. Users are allowed to read, download, copy, distribute, print, search, or link to the full texts of the articles, or use them for any other lawful purpose, without asking prior permission from the publisher or the author. This is in accordance with the Budapest Open Access Initiative (BOAI) definition of open access.</p>
											<p style="color: black">NOJEST is a peer reviewed journal and covers all area of educational sciences. The journal is published online biannually (two times a year: June and December) and provides immediate open access to its content on the principle that making research freely available to the public supports a greater global exchange of knowledge. The journal aims to achieve the advancement of knowledge in the field of educational sciences and to offer an integrated view of the field by presenting approaches of multiple disciplines.</p>
											<p style="color: black">Topics include:</p>
											<ul>
											<li>Biology Education</li>
											<li>Chemistry Education</li>
											<li>Children with Special Needs</li>
											<li>Computer and Instructional Technologies</li>
											<li>Home Economics Education</li>
											<li>Integrated Science Education</li>
											<li>Mathematics Education</li>
											<li>Physical Education and Sports</li>
											<li>Physics Education</li>
											<li>Technology and Design Education</li>
											<li>Educational Technology</li>
											</ul>
											<p>The journal is also interested in the following areas:</p>
											<ul>
											<li>Teacher Education </li>
											<li>Professional Issues in Teaching </li>
											<li>Educational Assessment and Measurement </li>
											<li>Behavior Management of Exceptional Students </li>
											<li>University Learning and Teaching </li>
											<li>Contemporary Issues in Education </li>
											<li>Motivation in Learning and Teaching </li>
											<li>Managing Learner Cognitive Load </li>
											<li>Social Perspectives in Education </li>
											<li>Educational Psychology </li>
											<li>E-learning</li>
										</ul>

											<p>Journal Publisher</p>
											<p>Department of Science and Technology Education</p>
											<p>University of Lagos, Nigeria</p>
											<p>njes.editor@gmail.com</p>
											<p>njes.contact@gmail.com</p>


									</p>
							</div>
									</li>
								</ul>
							</div>
	</div>

</div>

</div>

<div class="container">
    <div class="row duvet">
        <div class="col-md-12">
             <p style="color: white"> People</p>
        </div>
        <div class="col-md-12">
            <ul id="accordable-example" class="accordable">
              <li>
                <span> Contact</span>
                <div>
                  <p>
										Department of Science and Technology Education<br>
										University of Lagos, Nigeria<br>
										njes.editor@gmail.com<br>
										njes.contact@gmail.com<br>

									</p>
                </div>
              </li>
              <li>
                <span>Editorial Team</span>
                <div>
                  <p>
										<h4>Editor in Chief</h4>
											<p>Duro Ajeyalemi, PhD, University of Lagos, Nigeria</p>
										<h4>Deputy Editor in Chief & Managing Editor</h4>
											<p>Adeneye O. A. Awofala, PhD, University of Lagos, Nigeria, aawofala@unilag.edu.ng</p>
										<h4>Associate Editors</h4>
											<p>Abayomi A. Arigbabu, PhD, Tai Solarin University of Education, Nigeria</p>
											<p>Gladys O. Esiobu, PhD, University of Lagos, Nigeria,</p>
											<p>Uchenna N. Udeani, PhD, University of Lagos, Nigeria</p>
											<p>Oladiran S. Olabiyi, PhD, University of Lagos, Nigeria, solabiyi@unilag.edu.ng</p>
											<p>Awoyemi A. Awofala, PhD, Tai Solarin University of Education, Nigeria</p>
										<h4>Editorial Board Members</h4>
											<p>Alfred O. Fatade, PhD, Tai Solarin University of Education, Nigeria</p>
											<p>Moshood K. Akinsola, PhD, University of Ibadan, Nigeria</p>
											<p>Alice M. Olagunju, PhD, University of Ibadan, Nigeria</p>
											<p>Ayotola Aremu, PhD, University of Ibadan, Nigeria</p>
											<p>Adedeji Tella, PhD, University of Ibadan, Nigeria</p>
											<p>Veronica F. T. Babajide, PhD, University of Lagos, Nigeria</p>
											<p>Sunday Adeyemo, PhD, University of Lagos, Nigeria</p>
											<p>Saheed O. A. Fakorede, PhD, University of Lagos, Nigeria</p>
											<p>Moses I. Odo, PhD, University of Lagos, Nigeria</p>
											<p>Ngozi P. Okafor, PhD, University of Lagos, Nigeria</p>
											<p>Atinuke Lano-Maduagu, PhD, University of Lagos, Nigeria</p>
											<p>Caroline O. Oke, PhD, University of Lagos, Nigeria</p>
											<p>Stephen O. Adenle, PhD, University of Lagos, Nigeria</p>
											<p>Ishola O. Shobowale, PhD, University of Lagos, Nigeria</p>
											<p>Sabainah O. Akinoso, PhD, University of Lagos, Nigeria</p>
											<p>Adedamola A. Kareem, PhD, University of Lagos, Nigeria</p>
											<p>Olufunke O. Oluwaleyimu, PhD, University of Lagos, Nigeria</p>
											<p>Omolabake T. Ojo, PhD, University of Lagos, Nigeria</p>
											<p>Rachael O. Okunuga, PhD, University of Lagos, Nigeria</p>
											<p>Oladimeji F. Olafare, PhD, University of Lagos, Nigeria</p>
											<p>Iyalekhue V. Abusomwan, PhD, University of Lagos, Nigeria</p>
											<h4>Language Editors</h4>
												<p>Jelili A. Jimoh, PhD, University of Lagos, Nigeria</p>
												<p>Toyin E. Owoyemi, PhD, University of Lagos, Nigeria</p>

									</p>
                </div>
              </li>

            </ul>
        </div>


    </div>

    <div class="row duvet">
        <div class="col-md-12">
             <p style="color: white"> Ethics and Malpractice Statement</p>
        </div>

        <div class="col-md-12">
            <ul id="accordable-example" class="accordable">
              <li>
                <span>Publication Ethics and Publication Malpractice Statement </span>
                <div>
                  <p>  Nigerian Journal of Educational Sciences Publication Ethics and Publication Malpractice Statement is based, in large part, on the guidelines and standards developed by the <a href="http://publicationethics.org" target="_blank">Committee on Publication Ethics (COPE).</a> The relevant duties and expectations of authors, reviewers, and editors of the journal are set out below. Below is a summary of our key expectations of editors, peer-reviewers, and authors. </p>
                </div>
              </li>
              <li>
                <span>Editors’ Responsibilities</span>
                <div>
								<p><strong>Publication decision:</strong> Editors should be accountable for everything published in their journals and strive to meet the needs of readers and authors. Editors’ decisions to accept or reject a paper for publication should be based on the editorial board’s reviews and paper’s importance.</p>

								<p><strong>Review of Manuscripts:</strong> The editor ensures that each manuscript is initially evaluated by the editor, who may make use of appropriate means, to examine the originality of the contents of the manuscript and ensure the quality of the material they publish, recognizing that journals and sections within journals will have different aims and standards.</p>

								<p><strong>Fair Review:</strong> Editors should strive to ensure that peer review of their journal is fair, unbiased and timely. The editor ensures that each manuscript received is evaluated on its intellectual content without regard to authors’ sex, gender, race, religion, citizenship, etc.</p>

								<p><strong>Confidentiality:</strong> The editor and any editorial staff must not disclose any information about a submitted manuscript to anyone other than the corresponding author, reviewers, potential reviewers, other editorial advisers, and the publisher, as appropriate. The editor must ensure that information regarding manuscripts submitted by the authors is kept confidential.</p>

								<p><strong>Disclosure and Conflicts of Interest:</strong> Editors should require reviewers to disclose any potential competing interests before agreeing to review a submission.<p>

                </div>
              </li>
              <li>
                <span>Authors' Responsibilities</span>
                <div>
									<p><strong>Reporting Standards:</strong> Authors should precisely present their original research, as well as objectively discuss its significance. Manuscripts are to be edited in accordance to the submission guidelines of the journal.</p>

									<p><strong>Originality:</strong> Authors must certify that their work is entirely unique and original.</p>

									<p><strong>Redundancy:</strong> Authors should not concurrently submit papers describing essentially the same research. Submitting the same paper to more than one journal constitutes unethical publishing behavior and is unacceptable.</p>

									<p><strong>Acknowledgement of Sources:</strong> Author(s) should acknowledge all sources of data used in the research and cite publications that have influenced their research.</p>

									<p><strong>Authorship of the Paper:</strong> Authorship should be limited only to those who have made a significant contribution to conceiving, designing, executing and/or interpreting the submitted study. All those who have significantly contributed to the study should be listed as co-authors. The corresponding author should also ensure that all the authors and co-authors have seen and approved the final submitted version of the manuscript and their inclusion as co-authors.
									</p>

									<p><strong>Data Access and Retention:</strong> Authors should retain raw data related to their submitted paper, and must provide it for editorial review, upon request of the editor.</p>

									<p><strong>Fundamental errors in published works:</strong> When an author discovers a significant error or inaccuracy in his/her submitted manuscript, the author must immediately notify the editor.</p>

                </div>
              </li>
              <li>
                <span>Reviewers’ Responsibilities</span>
                <div>
									<p><strong>Confidentiality:</strong> Manuscript reviewers, the editor and the editorial staff must not disclose any information regarding submitted manuscripts. All submitted manuscripts are to be treated as privileged information. Editors should provide guidance to reviewers on everything that is expected of them including the need to handle submitted material in confidence.</p>

									<p><strong>Acknowledgement of Sources:</strong> Reviewers must ensure that authors have acknowledged all sources of data used in the research. Any statement that an observation, derivation, or argument had been previously reported should be accompanied by the relevant citation. A reviewer should also call to the editor's attention any substantial similarity or overlap between the manuscript under consideration and any other published paper of which they have personal knowledge.</p>

									<p><strong>Standards of Objectivity:</strong> Review of submitted manuscripts will be conducted objectively. The reviewers shall express their views clearly, with supporting arguments. Personal criticism of the author is inappropriate.</p>

									<p><strong>Promptness:</strong> If a reviewer believes it is not possible for him/her to review the research reported in a manuscript within the designated guidelines, or within stipulated time, he/she should notify the editor, so that the accurate and timely review can be ensured.</p>

									<p><strong>Conflict of Interest:</strong> All reviewers should have no conflict of interest with respect to the research, the authors and/or the funding bodies.</p>

                </div>
              </li>

              <li>
                <span>Change or Modification of Published Paper</span>
                <div>
									<p><strong>Withdrawal:</strong> Papers published will be withdrawn if authors noticed significant errors. Before accepting withdrawal request, editorial board and Editor-in-chief should talk with authors sufficiently. If a paper were withdrawn,</p>

									<p> - Paper in journal database should be removed,</p>

									<p> - Link in online publication site should be removed,</p>

									<p>- Next phrase or similar phrase to announce the reason should be shown below the paper title in online publication paper list: (This paper was withdrawn because of some technical errors).</p>

								<p><strong>Replacement:</strong> Papers published can be replaced if authors send an updated paper. Before accepting replacement request, editorial board and Editor-in-chief should talk with authors sufficiently, and at least three reviewers should check the advances. If a paper were replaced,</p>

									<p> - Paper in journal database should be replaced,</p>

									<p> - Link in online publication site should be replaced,</p>

									<p> - Next phrase or similar phrase to announce the reason should be shown below the paper title in online publication paper list: (This paper was replaced because authors sent updated version. Contact editor if you want to check old version).</p>

									<p> - Old version should be kept separately, and if someone wants to check old version, editor can send the PDF to him/her.</p>

									<p> - However, replacement is acceptable only one time, and only for technical advances.</p>

								<p><strong>Removal:</strong> Papers published will be removed if reviewers, readers, librarians, publishers or other subjects noticed significant errors or plagiarism. Before removing a paper, editorial board and Editor-in-chief should talk with authors sufficiently, and should provide enough time to have authors’ explanation. If a paper were withdrawn,</p>

									<p> - Paper in journal database should be removed,</p>

									<p> - Link in online publication site should be removed,</p>

									<p> - Next phrase or similar phrase to announce the reason should be shown below the paper title in online publication paper list: (This paper was removed because of plagiarism).</p>

                </div>
              </li>

							<li>
								<span>Penalties</span>
								<div>
									<p><strong>Double Submission:</strong> If double submission was found or noticed from other sources, editorial board should check the status. If the double submission was confirmed as intentional thing,</p>

									<p> - Review process will be terminated,</p>

									<p> - The reason should be sent to reviewers, editorial board and authors,</p>

									<p> - All authors’ name will be marked as black list, and these authors cannot submit any paper to Journal of Pedagogical Research for three years.</p>

									<p><strong>Double Publication:</strong> If double publication was found or noticed from other sources, editorial board should check the status. If the double publication was confirmed as intentional thing,</p>

									<p> - This should be reported to editorial board and authors,</p>

									<p> - This should be sent to publisher published same (or very similar) paper,</p>

									<p> - Paper will be removed according to the “Removal” part in chapter 4,</p>

									<p> - All authors’ name will be marked as black list, and these authors cannot submit any paper to Nigerian Journal of Educational Sciences for three years.</p>

									<p><strong>Plagiarism:</strong> If plagiarism (including self-plagiarism) was found or noticed from other sources, editorial board should check the status. If the plagiarism (including self-plagiarism) was confirmed as intentional thing:</p>

									<p> - This should be reported to editorial board and authors,</p>

									<p> - This should be sent to publisher published same or similar paper,</p>

									<p> - Paper will be removed according to the “Removal” part in section 4,</p>

									<p>All authors’ name will be marked as black list, and these authors cannot submit any paper to Nigerian Journal of Educational Sciences for five years.</p>

									<p>All the Editors, authors, and reviewers, within we agree upon standards of proper ethical behavior and accept the responsibility for fulfilling the following duties and responsibilities, as set by the <a href="http://publicationethics.org/resources/guidelines" target="_blank"> COPE Code of Conduct for Journal Editors</a>).</p>

								</div>
							</li>

              <li>
                <span>NOJEST Complaint Policy</span>
                <div>
                  <p>Nigerian Online Journal of Educational Sciences and Technology defines a complaint as the expression of being unhappy about a perceived failure during the submission, evaluation or publication process. We infer that the complainant is not simply disagreeing with a decision we have made or something we have published but thinks that there has been a failure of process - for example, a long delay or a rude response - or a severe misjudgment.</p>

									<p>Nigerian Journal of Educational Sciences is aware of the complaints stated below:</p>
									<ol>

										<li> Authorship complaints</li>

										<li> Plagiarism complaints</li>

										<li> Multiple, duplicate, concurrent publication/Simultaneous submission</li>

										<li> Research results misappropriation</li>

										<li> Allegations of research errors and fraud</li>

										<li> Research standards violations</li>

										<li> Undisclosed conflicts of interest</li>

										<li> Reviewer bias or competitive harmful acts by reviewers.</li>
									</ol>

										<p>The best way to reach us is by email. Complaints should ideally be made to the person the complainant is already in contact with over the matter being complained about. If that is not appropriate please email njes.editor@gmail.com</p>

										<p>Whenever possible complaints will be dealt with by the relevant member of the editorial staff. If that person cannot deal with the complaint he or she will refer it to a section editor or the executive editor.</p>

										<p>Complaints that are not under the control of Nigerian Journal of Educational Sciences editorial staff will be sent to the relevant heads of department. All complaints will be acknowledged within three working days. If possible a full response will be made within four weeks. If this is not possible an interim response will be given within four weeks. Further interim responses will be provided until the complaint is resolved. If the complainant is not happy with the resolution he or she can ask for the complaint to be escalated to the individual's manager or to the executive editor. If the complainant remains unhappy, complaints should be escalated to the editor, whose decision is final.
										</p>
                </div>
              </li>

            </ul>
        </div>
    </div>

    <div class="row duvet">
        <div class="col-md-12">
             <p style="color: white"> Submission</p>
        </div>

        <div class="col-md-12">
            <ul id="accordable-example" class="accordable">
              <li>
                <span> Submission Preparation Checklist </span>
                <div>
                  <p>  As part of the submission process, authors are required to check off their submission's compliance with all of the following items, and submissions may be returned to authors that do not adhere to these guidelines. </p>
									<ul>
										<li>No part of the article has been plagiarised from other published material.</li>
										<li>The submission has not been previously published, nor is it before another journal for consideration (or an explanation has been provided in Comments to the Editor).</li>
										<li>The submission file is in OpenOffice, Microsoft Word, or RTF document file format.</li>
										<li>Where available, URLs for the references have been provided.</li>
										<li>The text should be set to 1.15 line spacing and in A4 paper size. All illustrations, figures, and tables are placed within the text at the appropriate points, rather than at the end.</li>
										<li>The text adheres to the stylistic and bibliographic requirements outlined in the Author Guidelines.</li

									</ul>
                </div>
              </li>
              <li>
                <span>Author Guidelines</span>
                <div>
                  <p>	Articles submitted to Journal of Pedagogical Research (JPR) are considered for publication if they:</p>

									<ul>
										<li>report original approach or test an existing theory related to educational science</li>


										<li>are of interest to the teaching and learning</li>


										<li>are scientifically rigorous</li>


										<li>have not been published previously or</li>


										<li>are not under consideration for publication elsewhere.</li>
									</ul>

										<p>We request our authors to consider the following items before submitting their manuscript</p>




										<h3>A. Material submission</h3>


											<p>Authors are free to submit their manuscripts electronically by online submission system or send it to ijopr.editor@gmail.com e-mail address.<p>


										<h3> B. Language</h3>



										<ol>
											<li>	Articles and all appendices are accepted in English only.</li>


											<li>	Authors are responsible for the English proofreading of the papers.</li>
										</ol>


										<h3> C. Copyright</h3>


											<p>Journal of Pedagogical Research authorized for the publication of the article. However, the authors reserve the following rights:</p>



										<ol>
											<li>	The right to make copies for their own purposes, provided that non-commercial purposes.</li>


											<li>	The right to use all or a portion of the article for the author's future works, such as books and lectures, with the mention of the bibliography of the Journal.</li>


											<li>	The right to use on their personel web pages on condition of giving reference.</li>
										</ol>


										 <h3>D. Formatting</h3>



										 <ol>
											 <li>	Journal of Pedagogical Research is not strict for the submission file format. Authors are free to submit their paper on A4 paper. The final version of the paper will be prepared by the layout editor if the manuscript is accepted.</li>


											 <li>	There is no word or sheet limitation for the manuscripts.</li>
											 <li>	All materials should conform to styles in the latest Publication Manual of the American Psychological Association (APA) (please see <a href="http://www.apastyle.org" target="_blank"> http://www.apastyle.org</a>).</li>

											 <li>	It should be indicated the author(s) name(s), affiliation, address, and e-mail address in the first page (as a title page).</li>


											 <li>	The papers should be prepared with Microsoft Word Software or any software supported by Microsoft Office.</li>
									</ol>

                </div>
              </li>
               <li>
                <span>Abstracting/Indexing</span>
                <div>
                  <p>Nigerian Journal of Educational Sciences has been indexed by the following databases:</p>
									<p>Directory of Open Access Journals (DOAJ)</p>
									<p>Index Copernicus (IC)</p>
									<p>Scinapse</p>
									<p>Research Bib</p>
									<p>WorldCat</p>

                </div>
              </li>
            <!--  <li>
                <span>Author fees</span>
                <div>
                  <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Accordion Panel 2</p>
                </div>
              </li> -->

            </ul>
        </div>

    </div>

    <!-- <div class="row duvet">
        <div class="col-md-12">
             <p> Others</p>
        </div>

        <div class="col-md-12">
            <ul id="accordable-example" class="accordable">
              <li>
                <span> Journal Scholarship</span>
                <div>
                  <p>  ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                </div>
              </li>
              <li>
                <span>Site Map</span>
                <div>
                  <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Accordion Panel 2</p>
                </div>
              </li>
              <li>
                <span>About This Publishing System</span>
                <div>
                  <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Accordion Panel 2</p>
                </div>
              </li>

            </ul>
        </div>


    </div> -->




</div>

<footer>
	 <p>Publisher: Nigeria Online Journal of Educational Science And Technology, NOJEST</p>
		<p> For suggestions, recommendations and possible academic collaborations, feel free to contact our chief editor on contact@nojest.com.ng</p>
</footer>









	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.easing.1.3.min.js"></script>

    <script src="js/jquery.accordable.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>

</body>

</html>
