<?php
//print_r($home);
$home_data  = json_decode(file_get_contents('uploads/jsondata/homejosn.json'), true);
//print_r($home_data);
$popupdata = [];
foreach($home_data['config_home'] as $key => $value){
    $popupdata[$value['key_name']] = $value['value'];
}
//print_r($popupdata);
$page_url = $this->uri->segment(1);
?>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"
        aria-hidden="true"></i></button>

<style type="text/css">
.hidedefault {
    display: none;
}
</style>
<header>

    <div class="container">
        <div class="row">
            <div class="col-sm-6"><a href="<?php echo site_url('home')?>">
                    <h1><img src="<?php echo base_url();?>assets/images/logo.png" alt="" class="main_logo"></h1>
                </a></div>
            <div class="col-sm-6">
                <div class="language_row">
                    <div class="call_top">
                        <i class="fa fa-phone" aria-hidden="true"></i> <a href="callto:02224095792">022 2409 5792</a> /
                        <a href="callto:02224035296">022 2403 5296</a>
                    </div>
                    <div class="call_size"><span class="small">
                            <a href="javascript:void(0);" title="Text Size: Decrease" id="btn-decrease"
                                class="decrease">A-</a>
                        </span>
                        <span class="medium">
                            <a href="javascript:void(0);" title="Text Size: Normal" id="btn-orig" class="reset">A</a>
                        </span>
                        <span class="large">
                            <a href="javascript:void(0);" title="Text Size: Increase" id="btn-increase"
                                class="increase">A+</a>
                        </span>
                    </div>

                    <div class="call_language">
                        <a href="#" onclick="changelang(1);">English</a> &nbsp;|&nbsp;
                        <a href="#" onclick="changelang(2);">Marathi</a>
                    </div>


                </div>

                <div class="login_btns">
                    <a href="#" class="student_btn"><i class="fa fa-lock" aria-hidden="true"></i> Student Login</a>
                    <a href="#" class="teacher_btn"><i class="fa fa-lock" aria-hidden="true"></i> Teacher Login</a>

                    <?php
                    if(isset($popupdata['config_hellobar_show']) && $popupdata['config_hellobar_show']==1){
                    ?>
                    <a href="#" class="student_btn" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="margin: 0 0 0 10px"><i class="fa fa-lock" aria-hidden="true"></i> Page Popup</a>
                    <?php }?>

                </div>

                <div class="top_search">
                    <form action="<?php echo site_url('search')?>" method="get">
                        <input type="text" name="keywords" value="<?php echo $this->input->get('keywords')?>"
                            id="top_keyword" class="search_inpt" placeholder="Search Here">
                        <button type="submit" class="submit_search"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
$homelinks[] = 'home';
$homelinks[] = 'AISHE';
$homelinks[] = 'library';



$about_us[] = 'about-us';
$about_us[] = 'organogram';
$about_us[] = 'unique-feature';
$about_us[] = 'testimonials';

$Programmes[] = 'HD-programm';
$Programmes[] = 'RM-hospitality-programm';
$Programmes[] = 'TSAD-programm';
$Programmes[] = 'fsn-programm';
$Programmes[] = 'ND-programm';
$Programmes[] = 'bca-programm';
$Programmes[] = 'foundation-programm';
$Programmes[] = 'msc-cnd-programm';
$Programmes[] = 'msc-tourism-hospital-programm';
$Programmes[] = 'msc-cs-programm';
$Programmes[] = 'PGDSSFN-programm';
$Programmes[] = 'PGECE-programm';
$Programmes[] = 'skill-based-courses';
$Programmes[] = 'gandhian-studies-center';
$Programmes[] = 'ignou';


$Admission[] = 'admission-enquiry';
$Admission[] = 'admission-process';

$Exams[] = 'student-notice';
$Exams[] = 'bsc-result';
$Exams[] = 'bca-result';
$Exams[] = 'pg-result';

$Committees[] = 'grievance-redressal-committee';
$Committees[] = 'committee-activity';


$Research[] = 'research';
$Research[] = 'research-committee';
$Research[] = 'research-page';
$Research[] = 'research-activity';
$Research[] = 'research-collaborations';
$Research[] = 'research-critical-thinking';

$EECH[] = 'incubation';
$EECH[] = 'placement';


$linkages[] = 'linkages';

$Grants[] = 'grant-received';
$Grants[] = 'quotations-for-rusa';

$contactus[] = 'contact-us';
?>

    <div class="main_menu">
        <div class="container">
            <div class="row">
                <div id="menuzord" class="menuzord red menuzord-responsive">
                    <div class="showhide32"></div>
                    <ul class="menuzord-menu me#menusnuzord-right menuzord-indented scrollable">

                        <li class="<?php echo (in_array($page_url,$homelinks)) ? 'active' : ''?>"><a href="<?php echo site_url('home')?>">Home</a></li>

                        <li  class="<?php echo (in_array($page_url,$about_us)) ? 'active' : ''?>"><a href="#">About us</a>
                            <ul class="dropdown">
                                <li><a href="about-us">Parent Body (SMES)</a></li>
                                <li><a href="organogram">Organogram </a></li>
                                <li><a href="unique-feature">Facilities/Unique features</a></li>
                                <li><a href="testimonials">Testimonials </a></li>
                            </ul>
                        </li>

                        <li class="<?php echo (in_array($page_url,$Programmes)) ? 'active' : ''?>"><a href="#">Programmes</a>
                            <ul class="dropdown">
                                <li><a href="#">Undergraduate</a>
                                    <ul class="dropdown">
                                        <li><a href="HD-programm">Human Development</a></li>
                                        <li><a href="RM-hospitality-programm">Resource Management (Hospitality
                                                Management)</a></li>
                                        <li><a href="TSAD-programm">Textile Science &amp; Apparel Design</a></li>
                                        <li><a href="fsn-programm">Food Science &amp; Nutrition</a></li>
                                        <li><a href="ND-programm">Nutrition &amp; Dietetics</a></li>
                                        <li><a href="bca-programm">Bachelor of Computer Applications </a></li>
                                        <li><a href="foundation-programm">Foundation Courses </a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Postgraduate</a>
                                    <ul class="dropdown">
                                        <li><a href="msc-cnd-programm">M.Sc Clinical Nutrition &amp; Dietetics</a></li>
                                        <li><a href="msc-tourism-hospital-programm">M.Sc Resource Management (Tourism
                                                &amp; Hospitality Management)</a></li>
                                        <li><a href="msc-cs-programm">M.Sc Computer Science</a></li>
                                        <li><a href="PGDSSFN-programm">PG Sports Science Fitness &amp; Nutrition</a>
                                        </li>
                                        <li><a href="PGECE-programm">PG Early Childhood Education</a></li>
                                    </ul>
                                </li>

                                <!--<li><a href="diploma-programm">Certificate /Diploma Programs</a></li>-->

                                <li><a href="skill-based-courses">Skill development Courses</a></li>
                                <!--<li><a href="#">Additional credits courses</a>
                                             <ul class="dropdown">
                                                 <li><a href="skill-development-programm">Skill development Courses </a></li>
                                            </ul>
                                        </li>-->
                                <li><a href="https://www.hmnscnip.in/junior/index.php" target="_blank">Smt. HMN College
                                        of Home Science </a></li>
                                <li><a href="https://www.hmnscnip.in/polytechnic.php" target="_blank">Smt. Shardaben
                                        Champaklal Nanavati Institute of Polytechnic</a></li>
                                <li><a href="gandhian-studies-center">Gandhian Studies Center</a></li>
                                <li><a href="ignou">IGNOU</a></li>
                            </ul>
                        </li>

                        <li class="<?php echo (in_array($page_url,$Admission)) ? 'active' : ''?>"><a href="#">Admission</a>
                            <ul class="dropdown">
                                <li><a href="admission-enquiry">Admission Enquiry</a></li>
                                <li><a href="admission-process">Admission Process</a></li>
                                <li><a href="<?php echo base_url();?>uploads/pdf/admission-policy-10.08.2020-converted.pdf"
                                        target="_blank">Admission Policy</a></li>
                                <li><a href="<?php echo base_url();?>uploads/pdf/refund-rules.pdf"
                                        target="_blank">Refund Rules</a></li>
                                <!--<li><a href="#">Leaving/ Migration/ Bonafide/ Transcript Form</a></li>
                                        <li><a href="#">Online Fees Payment</a></li>-->
                            </ul>
                        </li>
                        <li  class="<?php echo (in_array($page_url,$Exams)) ? 'active' : ''?>"><a href="#">Exams</a>
                            <ul class="dropdown">
                                <li><a href="student-notice">Important Notices </a></li>
                                <li><a href="#">Time Table </a>
                                    <ul class="dropdown">
                                        <!--pdf/revised-BSC-Final-exam-time-table-2021-22.pdf-->
                                        <li><a href="#">BSc Exam</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url();?>uploads/pdf/Revised-Home-Science-Final-exam-time-table%20-%202021-22.pdf"
                                                        target="_blank">Freshers</a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/ATKT-Final-Exam-Home-Science-2021-22.pdf"
                                                        target="_blank">Repeaters </a></li>
                                            </ul>
                                        </li>
                                        <!--pdf/revised-BCA-time-table-final-exam-2021-22.pdf-->
                                        <li><a href="#">BCA Exam</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url();?>uploads/pdf/BCA-Time-Table-Final-Exam-2021-22.pdf"
                                                        target="_blank">Freshers</a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/ATKT-Final-Exam-BCA-2021-22(Second-Term).pdf"
                                                        target="_blank">Repeaters </a></li>
                                            </ul>
                                        </li>
                                        <!--pdf/revised-PG-courses-final-exam-time-table-2021-22.pdf-->
                                        <li><a href="#">PG Exam</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url();?>uploads/pdf/PG-Courses-Final-Exam-Time-table-2021-22.pdf"
                                                        target="_blank">Freshers</a></li>
                                                <li><a href="#">Repeaters </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="<?php echo base_url();?>uploads/pdf/continuous-assessment.pdf"
                                        target="_blank">Continuous Assessment</a>
                                    <!--<a href="#">Continuous Assessment </a>
                                            <ul class="dropdown">
                                                <li><a href="#">BSc</a></li>
                                                <li><a href="#">BCA</a></li>
                                                <li><a href="#">PG</a></li>
                                            </ul>-->
                                </li>
                                <li><a href="#">Result </a>
                                    <ul class="dropdown">
                                        <li><a href="bsc-result">BSc</a></li>
                                        <li><a href="bca-result">BCA</a></li>
                                        <li><a href="pg-result">PG</a></li>
                                    </ul>
                                </li>
                                <!--<li><a href="#">Required Forms </a></li>
                                        <li><a href="#">Re exam Fee Receipt </a></li>-->
                            </ul>
                        </li>

                        <li><a href="#">NAAC</a>
                            <ul class="dropdown">
                                <li><a href="#">IQAC </a>
                                    <ul class="dropdown">
                                        <li><a href="#">Composition of IQAC</a>
                                            <ul class="dropdown">
                                                <!--<li><a href="<?php echo base_url();?>uploads/pdf/iqac.pdf" target="_blank">2017-2021</a></li>-->
                                                <li><a href="<?php echo base_url();?>uploads/pdf/iqac-21-24.pdf"
                                                        target="_blank">2021-2024</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Minutes of IQAC Meeting</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url();?>uploads/pdf/IQAC-Minutes-18-19.pdf"
                                                        target="_blank">2018-2019</a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/IQAC-Minutes-19-20.pdf"
                                                        target="_blank">2019-2020</a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/IQAC-Minues-20-21.pdf"
                                                        target="_blank">2020-2021</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Documents &amp; Reports</a>
                                    <ul class="dropdown">
                                        <li><a href="#">AQAR</a>
                                            <ul class="dropdown">
                                                <!--<li><a href="#" target="_blank">2018-2019</a></li>
                                                        <li><a href="#" target="_blank">2019-2020</a></li>-->
                                                <li><a href="<?php echo base_url();?>uploads/pdf/AQAR-2017-2018.pdf"
                                                        target="_blank">2017 -2018 </a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/AQAR-2018-2019.pdf"
                                                        target="_blank">2018 -2019 </a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/AQAR-2019-2020.pdf"
                                                        target="_blank">2019- 2020 </a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/AQAR-2020-2021.pdf"
                                                        target="_blank">2020-2021</a></li>
                                                <!--<li><a href="<?php echo base_url();?>uploads/pdf/.pdf" target="_blank">2021 -2022 </a></li>-->
                                            </ul>
                                        </li>

                                        <li><a href="#">Best Practice</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url();?>uploads/pdf/Best-Practice-17-18.pdf"
                                                        target="_blank">2017-2018</a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/Best-Pracice-18-19.pdf"
                                                        target="_blank">2018-2019</a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/Best-Pracice-19-20.pdf"
                                                        target="_blank">2019-2020</a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/Best-Practice-20-21.pdf"
                                                        target="_blank">2020-2021</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">RAR Report</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url();?>uploads/pdf/ssr-report-16-17.pdf"
                                                        target="_blank">2016-2017</a></li>
                                                <!--<li><a href="#">2019-2020</a></li>
                                                        <li><a href="#">2020-2021</a></li>-->
                                            </ul>
                                        </li>
                                        <li><a href="#">Audit Reports</a>
                                            <ul class="dropdown">
                                                <!--<li><a href="<?php echo base_url();?>uploads/pdf/academic-audit-2020-1.pdf" target="_blank">Academic/Administrative Audit </a></li>
                                                        <li><a href="<?php echo base_url();?>uploads/pdf/Gender-Audit-Report-2020-21.pdf" target="_blank">Gender Audit </a></li>-->

                                                <li><a href="#">Green Audit Report</a>
                                                    <ul class="dropdown">
                                                        <li><a href="<?php echo base_url();?>uploads/pdf/Green-Audit-2019-2020.pdf"
                                                                target="_blank">2019-2020</a></li>
                                                        <li><a href="<?php echo base_url();?>uploads/pdf/Green-Audit-2020-2021.pdf"
                                                                target="_blank">2020-2021</a></li>
                                                        <li><a href="<?php echo base_url();?>uploads/pdf/Green-Audit-2021-2022.pdf"
                                                                target="_blank">2021-2022</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Perspective Plan</a>
                                            <ul class="dropdown">
                                                <!--<li><a href="#">2018-2019</a></li>
                                                        <li><a href="#">2019-2020</a></li>-->
                                                <li><a href="<?php echo base_url();?>uploads/pdf/Perspective-plan.pdf"
                                                        target="_blank">2021-2024 </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Feedback</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url();?>uploads/pdf/student-satisfaction-survey.pdf"
                                                        target="_blank">Student Satisfaction Survey </a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">Policy</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url();?>uploads/pdf/Admission-Policy.pdf"
                                                        target="_blank"> Admission Policy </a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/Infrastructure-utilization.pdf"
                                                        target="_blank"> Infrastructure Utilization &amp; Maintenance
                                                        Policy </a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/IT-policy.pdf"
                                                        target="_blank"> IT Policy </a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/ethical-policy.pdf"
                                                        target="_blank"> Ethical Policy </a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/resource-mobilisation-policy.pdf"
                                                        target="_blank"> Resource Mobilisation Policy </a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="<?php echo (in_array($page_url,$Committees)) ? 'active' : ''?>"><a href="#">Committees</a>
                            <ul class="dropdown">
                                <li><a href="#">Statutory</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo base_url();?>uploads/pdf/governing-body.pdf"
                                                target="_blank">Governing Body </a></li>
                                        <li><a href="<?php echo base_url();?>uploads/pdf/academic-council.pdf"
                                                target="_blank">Academic Council </a></li>
                                        <li><a href="<?php echo base_url();?>uploads/pdf/finanace-committee.pdf"
                                                target="_blank">Finance Committee </a></li>
                                        <li><a href="<?php echo base_url();?>uploads/pdf/Board-of-studies-of-all-the-Departments.pdf"
                                                target="_blank">Board of Studies </a></li>

                                        <li><a href="<?php echo base_url();?>uploads/pdf/examination-cell.pdf"
                                                target="_blank">Examination CELL </a></li>
                                        <li><a href="<?php echo base_url();?>uploads/pdf/iqac.pdf"
                                                target="_blank">Internnal Quality Assuarance Cell (IQAC) </a></li>
                                        <li><a href="<?php echo base_url();?>uploads/pdf/cdc.pdf"
                                                target="_blank">College Development Committee </a></li>
                                        <li><a href="<?php echo base_url();?>uploads/pdf/internal-women-cell.pdf"
                                                target="_blank">Internal Committee / Women’s Cell</a></li>
                                        <li><a href="<?php echo base_url();?>uploads/pdf/right-to-information.pdf"
                                                target="_blank">Right To Information Cell </a></li>
                                        <li><a href="<?php echo base_url();?>uploads/pdf/equal-oppurtunity-centre.pdf"
                                                target="_blank">Equality Opportunity Centre </a></li>
                                    </ul>
                                </li>
                                <li><a href="#">College Level </a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo base_url();?>uploads/pdf/College-Committees-2021-%202024.pdf"
                                                target="_blank">Committee List</a></li>
                                        <li><a href="grievance-redressal-committee">Grievance Redressal Committee</a>
                                        </li>
                                        <li><a href="committee-activity">Committee Activities</a></li>
                                    </ul>
                                </li>
                                <!--<li><a href="#">Non Statuory </a>
                                            <ul class="dropdown">
                                                <li><a href="#">Cultural</a></li>
                                                <li><a href="#">Sports</a></li>
                                                <li><a href="#">NSS</a></li>
                                                <li><a href="#">Alumnae</a></li>
                                                <li><a href="#">Placement</a></li>
                                                <li><a href="#">Seminar and Workshop</a></li>
                                                <li><a href="#">Mentoring</a></li>
                                                <li><a href="#">Environment and Sensitization committee </a></li> 
                                            </ul>
                                        </li>-->
                                <!-- <li><a href="#">College Level </a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url();?>uploads/pdf/anti-ragging-committee.pdf" target="_blank">Anti-ragging Committee</a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/grievance-redressal-cell.pdf" target="_blank">Grievance Redressal Cell</a></li>
                                                <li><a href="#">Unfair means in Examination at College</a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/caste-based-discrimination.pdf" target="_blank">For Prevention of Caste-based Discrimination</a></li>
                                                <li><a href="<?php echo base_url();?>uploads/pdf/students-welfare-committee.pdf" target="_blank">Students Welfare Committee</a></li>
                                            </ul>
                                        </li> -->
                            </ul>
                        </li>



                        <li class="<?php echo (in_array($page_url,$Research)) ? 'active' : ''?>"><a href="#">Research</a>
                            <ul class="dropdown">
                                <li><a href="research">Research Capacity Building Center</a></li>
                                <!--pdf/Publications-Jan-2020-Dec-2020.pdf-->
                                <li><a href="#">Publications</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo base_url();?>uploads/pdf/research-2017-2018.pdf"
                                                target="_blank">2017-2018</a></li>
                                        <li><a href="<?php echo base_url();?>uploads/pdf/research-2018-2019.pdf"
                                                target="_blank">2018-2019</a></li>
                                        <li><a href="<?php echo base_url();?>uploads/pdf/research-2019-2020.pdf"
                                                target="_blank">2019-2020</a></li>
                                        <li><a href="<?php echo base_url();?>uploads/pdf/research-2021-2022.pdf"
                                                target="_blank">2021-2022</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url();?>uploads/pdf/research-policy.pdf"
                                        target="_blank">Policy</a></li>
                            </ul>
                        </li>

                        <!--<li>
                                    <a href="#">Library</a>
                                </li>-->



                        <li class="<?php echo (in_array($page_url,$EECH)) ? 'active' : ''?>"><a href="#">EECH</a>
                            <ul class="dropdown">
                                <li><a href="incubation">Incubation </a></li>
                                <li><a href="placement">Placement </a></li>
                                <!--pdf/Placement-Report.pdf-->

                                <!--<li><a href="#">Enterpeneurship </a></li>-->
                            </ul>
                        </li>
                        <!--<li><a href="<?php echo base_url();?>uploads/pdf/linkages.pdf" target="_blank">LINKAGES</a></li>-->
                        <li  class="<?php echo (in_array($page_url,$linkages)) ? 'active' : ''?>"><a href="linkages">LINKAGES</a></li>

                        <li  class="<?php echo (in_array($page_url,$Grants)) ? 'active' : ''?>"><a href="#">Grants/Schemes </a>
                            <ul class="dropdown">
                                <li><a href="grant-received">Grants Received</a></li>
                                <li><a href="quotations-for-rusa">RUSA </a></li>
                            </ul>
                        </li>
                        <li class="<?php echo (in_array($page_url,$contactus)) ? 'active' : ''?>"><a href="contact-us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>



<!-- Modal popup -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog page_load">
        <div class="modal-content">
            <div class="pop_title">
                <h5 class="admission_title">
                    <?php echo (isset($popupdata['config_hello_bar'])) ? $popupdata['config_hello_bar'] : '';?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="pop_call">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="pop_phone"><i class="fa fa-phone" aria-hidden="true"></i> <a
                                href="callto:02224095792">022 2409 5792</a>/<a href="callto:02224035296">022 2403
                                5296</a></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pop_phone"><i class="fa fa-envelope enve lop" aria-hidden="true"></i> <a
                                href="mailto:admission@bmncollege.com">admission@bmncollege.com</a></div>
                    </div>
                </div>
            </div>

            <div class="modal-body pop_frm">
                <div id="message-contact2">

                    <div id="success_div2" class="hidedefault alert alert-success"> This is a success message.
                    </div>
                    <div id="err_div2" class="hidedefault alert alert-danger"> This is a error message.</div>

                </div>
                <form name="frm-admission-enquiry2" id="frm-admission-enquiry2"
                    action="<?php echo site_url($this->uri->segment(1)) ?>" method="post">
                    <input type="hidden" name="mode" id="mode" value="admission-enquiry">

                    <div class="row">
                        <div class="col-sm-6"><input name="full_name" id="full_name2" type="text" placeholder="Name"
                                class="form-control input_pop" /></div>
                        <div class="col-sm-6"><input name="contact_number" id="contact_number2" type="text"
                                placeholder="Contact Number" class="form-control input_pop validateMobile" /></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><input name="email_addrress" id="email_addrress2" type="text"
                                placeholder="Email Id" class="form-control input_pop" /></div>
                        <div class="col-sm-6"><input name="city" id="city2" type="text" placeholder="City"
                                class="form-control input_pop" /></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <select name="program" id="program2" class="form-select input_pop"
                                aria-label="Default select example">

                                <option selected>Select Programs</option>
                                <option> Human Development</option>
                                <option> Resource Management (Hospitality Management) </option>
                                <option> Textile Science &amp; Apparel Design </option>
                                <option> Food Science &amp; Nutrition </option>
                                <option> Nutrition &amp; Dietetics </option>
                                <option> Bachelor of Computer Application </option>
                                <option> Foundation Courses </option>
                                <option> M.Sc Clinical Nutrition &amp; Dietetics </option>
                                <option> M.Sc Resource Management (Tourism &amp; Hospitality Management) </option>
                                <option> M.Sc Computer Science </option>
                                <option> PG Sports Science Fitness &amp; Nutrition </option>
                                <option> PG Early Childhood Education </option>
                                <option> Skill development Courses </option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <input name="btn-admission-enquiry" id="btn-admission-enquiry2" type="submit" value="Submit"
                                class="pop_btn" />
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- End Modal popup -->