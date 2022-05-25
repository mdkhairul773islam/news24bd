  
 <style>
    ul li a span.icon{
        float: right;
        margin-right: 20px;
    }
 </style>
<!-- Sidebar -->
<aside id="sidebar-wrapper">
    <div class="sidebar-nav">
        <h3 class="sidebar-brand"><a href="#"><?php echo caption('Admin'); ?> <span><?php echo caption('Panel'); ?></span></a></h3>
    </div>
    
    <nav>
        <ul class="sidebar-nav">

            <!-- li class="sidebar-brand"><a href="#">Start Bootstrap</a></li -->
            <li id="dashboard">
                <a href="<?php echo site_url('super/dashboard'); ?>">
                    <i class="fa fa-home"></i>
                     <?php echo caption('dashboard'); ?>
                </a>
            </li>


            <li id="header_menu" >
                <a href="#header" data-toggle="collapse">
                    <i class="fa fa-header"></i> 
                    <?php echo caption('header'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="header" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('header/banner'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('banner'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('header/slider'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('slider'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('header/notice'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('notice'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('header/pages'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('pageContent'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('header/latest_news'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('updateNews'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('header/imageGallery'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('photoGallery'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('header/videoGallery'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('videoGallery'); ?>
                        </a>
                    </li>
                    
                </ul>
            </li>


            <li id="speech_menu">
                <a href="#speech" data-toggle="collapse">
                    <i class="fa fa-comment"></i> 
                    <?php echo caption('speech'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="speech" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('header/speech/index/president'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('presidentSpeech'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('header/speech/index/head_master'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('headmasterSpeech'); ?>
                        </a>
                    </li>
                    
                     <li>
                        <a href="<?php echo site_url('header/speech/index/principal'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('principalSpeech'); ?>
                        </a>
                    </li>

                </ul>
            </li>
            
            
            <li id="registration_menu">
                <a href="#registration" data-toggle="collapse">
                    <i class="fa fa-user"></i> 
                    <?php echo caption('students'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="registration" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('registration/registration'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('newStudents'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('registration/registration/allStudent'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('allStudents'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('admission/admission/upgrade_student'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('upgradeStudents'); ?>
                        </a>
                    </li>

                </ul>
            </li>

            <li id="attendance_menu">
                <a href="#attendance" data-toggle="collapse">
                    <i class="fa fa-check-square-o"></i>
                    <?php echo caption('attendance'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="attendance" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('attendance/attendance'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('takeAttendance'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('attendance/attendance/student_report'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('studentReport'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('attendance/attendance/class_wise_report'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('classwiseReport'); ?>
                        </a>
                    </li>
                    
                </ul>
            </li>

            <li id="routine">
                <a href="<?php echo site_url('routine'); ?>">
                    <i class="fa fa-file-text"></i>
                     <?php echo caption('Dynamic_Routine'); ?>
                </a>
            </li>

            <li id="resultsystem_menu">
                <a href="#resultsystem" data-toggle="collapse">
                    <i class="fa fa-file-text"></i>
                    <?php echo caption('result'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="resultsystem" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('subject/subject'); ?>">
                        <i class="fa fa-angle-right"></i>
                        <?php echo caption('subject'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('exam/exam'); ?>">
                            <i class="fa fa-angle-right"></i>
                        <?php echo caption('exam'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('marks/marks'); ?>">
                            <i class="fa fa-angle-right"></i>
                        <?php echo caption('setNumber'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('resultPublish'); ?>">
                            <i class="fa fa-angle-right"></i>
                        <?php echo caption('result'); ?>
                        </a>
                    </li>


               <li >
                <a href="<?php echo site_url('resultPublish/batchResult'); ?>">
                    <i class="fa fa-angle-right"></i>
                    <?php echo caption('resultList'); ?>
                </a>
              </li>

               <li>
                <a href="<?php echo site_url('resultSms/resultSms'); ?>">
                    <i class="fa fa-angle-right"></i>
                    <?php echo caption('smsResult'); ?>
                </a>
            </li>  
            

                </ul>
            </li>

            <li id="trCertificate_menu">
                <a href="#tr_certificat" data-toggle="collapse">
                   <i class="fa fa-file-text"></i>
                    <?php echo caption('tc'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="tr_certificat" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('tr_certificate/tr_certificate');?>">
                            <i class="fa fa-angle-right"></i>
                        <?php echo caption('newtc'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('tr_certificate/tr_certificate/allView'); ?>">
                            <i class="fa fa-angle-right"></i> 
                        <?php echo caption('alltc'); ?>
                        </a>
                    </li>

                </ul>
            </li>

            <li id="admit_menu">
                <a href="#admit" data-toggle="collapse">
                   <i class="fa fa-file-text"></i>
                    <?php echo caption('AdmitCard'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="admit" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('admitCard'); ?>">
                            <i class="fa fa-angle-right"></i>
                        <?php echo caption('admitGenerator'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('admitCard/set_instruction'); ?>">
                            <i class="fa fa-angle-right"></i> 
                        <?php echo caption('setInformation'); ?>
                        </a>
                    </li>

                </ul>
            </li>

            <li id="testimonial_menu">
                <a href="#testimonial" data-toggle="collapse">
                   <i class="fa fa-file-text"></i>
                    <?php echo caption('testimonial'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="testimonial" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('testimonial'); ?>">
                            <i class="fa fa-angle-right"></i>
                        <?php echo caption('Add_New'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('testimonial/allView'); ?>">
                            <i class="fa fa-angle-right"></i> 
                        <?php echo caption('alltestimonial'); ?>
                        </a>
                    </li>

                </ul>
            </li>

            <li id="certificate_menu">
                <a href="#certificate" data-toggle="collapse">
                   <i class="fa fa-file-text"></i>
                        <?php echo caption('Certificate'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="certificate" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('certificate'); ?>">
                            <i class="fa fa-angle-right"></i>
                        <?php echo caption('addCertificate'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('certificate/viewAll'); ?>">
                            <i class="fa fa-angle-right"></i> 
                        <?php echo caption('allCertificate'); ?>
                        </a>
                    </li>

                </ul>
            </li>

            <li id="payment_menu">
                <a href="#payment" data-toggle="collapse">
                    <i class="fa fa-money"></i>&nbsp;
                    <?php echo caption('Payment'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="payment" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('student_payment/payment');?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Student_Payment'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('student_payment/payment/paymentHistory'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Payment_Histroy'); ?> 
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('student_payment/payment/monthly_payment_history'); ?>">
                            <i class="fa fa-angle-right"></i>
                             <?php echo caption('Monthly_Payment_Histroy'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('student_payment/payment/paymentSlip'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Student_Payment_Slip'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('student_payment/payment/setAmount'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Set_Amount'); ?>
                        </a>
                    </li>
                </ul>
            </li>

            <li id="committee_menu">
                <a href="#committee" data-toggle="collapse">
                    <i class="fa fa-users"></i>
                    <?php echo caption('Committee'); ?> 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="committee" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('committee/committee');?>">
                            <i class="fa fa-angle-right"></i>
                           <?php echo caption('Add_Member'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('committee/committee/all_view_member'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Show_All_Member'); ?>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li id="employee_menu">
                <a href="#employee" data-toggle="collapse">
                    <i class="fa fa-male"></i>
                    <?php echo caption('Employee'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="employee" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('employee/employee');?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Add_Employee'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('employee/employee/show_employee'); ?>">
                            <i class="fa fa-angle-right"></i> 
                            <?php echo caption('View_Employee'); ?>
                        </a>
                    </li>

                </ul>
            </li>


            <li id="bank_menu">
                <a href="#bank" data-toggle="collapse">
                    <i class="fa fa-university"></i>
                    <?php echo caption('Bank'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="bank" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('bank/bankInfo'); ?>">
                            <i class="fa fa-angle-right"></i>
                             <?php echo caption('Add_Account'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/all_account'); ?>">
                            <i class="fa fa-angle-right"></i>
                             <?php echo caption('All_Account'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/transaction'); ?>">
                            <i class="fa fa-angle-right"></i> 
                            <?php echo caption('Add_Transaction'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/searchViewTransaction'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Custom_Search'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/allTransaction'); ?>">
                            <i class="fa fa-angle-right"></i> 
                            <?php echo caption('All_Transaction'); ?>
                        </a>
                    </li>
                </ul>
            </li>


            <li id="cost_menu">
                <a href="#cost" data-toggle="collapse">
                    <i class="fa fa-money"></i>
                    <?php echo caption('Cost'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="cost" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('cost/infoView'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Add_Cost'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('cost/infoView/showCost'); ?>">
                            <i class="fa fa-angle-right"></i> 
                            <?php echo caption('Show_Cost'); ?>
                        </a>
                    </li>
                </ul>
            </li>

            <li id="leave_menu">
                <a href="#leave" data-toggle="collapse">
                    <i class="fa fa-paper-plane"></i>
                    <?php echo caption('leave_management'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="leave" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('leave_management/leaveView');?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Add_New'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('leave_management/leaveView/show');?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Show_Leave'); ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li id="sms_menu">
                <a href="#sms" data-toggle="collapse">
                    <i class="fa fa-envelope-o"></i>
                    <?php echo caption('Mobile_SMS'); ?>  
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="sms" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('sms/sendSms');?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Send_SMS'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('sms/sendSms/send_custom_sms'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Custom_SMS'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('sms/sendSms/sms_report'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('SMS_Report'); ?>
                        </a>
                    </li>
                </ul>
            </li>
            
             <li id="uploadDelete_menu" >
                <a href="#upload_delete" data-toggle="collapse">
                    <i class="fa fa-cloud-upload"></i> 
                    <?php echo caption('File_Uplode'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="upload_delete" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('upload_delete/resultUpload'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Result'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('upload_delete/classRoutine'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Class_Rutine'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('upload_delete/bookList'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Book_List'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('upload_delete/admissionForm'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Admission_Form'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('upload_delete/syllabus'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Syllabus'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('upload_delete/magazine'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Megazine'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('upload_delete/leaveList'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Leave_List'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('upload_delete/digitalContent'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Digital_Content'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('upload_delete/academicCalendar'); ?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Academic_Calender'); ?>
                        </a>
                    </li>
                </ul>
            </li>

            <!--li id="visitor">
                <a href="<?php echo site_url('visitors/comments'); ?>">
                    <i class="fa fa-envelope"></i>
                    Visitor Comments
                </a>
            </li>

            <li id="income_menu">
                <a href="#income" data-toggle="collapse">
                    <i class="fa fa-money"></i>
                    Income 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="income" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('income/infoView'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Add Income
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('income/infoView/showIncome'); ?>">
                            <i class="fa fa-angle-right"></i> 
                            Show Income
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('income/infoView/earn_from_student'); ?>">
                            <i class="fa fa-angle-right"></i> 
                            Earn from Student
                        </a>
                    </li>
                </ul>
            </li-->

            <!--li id="upload_menu">
                <a href="#upload" data-toggle="collapse">
                    <i class="fa fa-cloud-upload"></i>
                    Upload File 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="upload" class="sidebar-nav collapse">
                    
                    <li>
                        <a href="<?php echo site_url('upload/uploadView/result'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Result
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('upload/uploadView/routine'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Routine
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('upload/uploadView'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Leave List
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('upload/uploadView/calendar');?>">
                            <i class="fa fa-angle-right"></i> 
                            Academic Calendar
                        </a>
                    </li>
                </ul>
            </li>

            <li id="balance">
                <a href="<?php echo site_url('balance/infoView');?>">
                    <i class="fa fa-sitemap"></i>
                    Balance Sheet
                </a>
            </li>


            <li id="form">
                <a href="<?php echo site_url('form/form'); ?>">
                    <i class="fa fa-file-text-o"></i>
                    Form
                </a>
            </li>


            <li id="table">
                <a href="<?php echo site_url('table/table'); ?>">
                    <i class="fa fa-th"></i>
                    Table
                </a>
            </li>


            <li id="comp">
                <a href="#components" data-toggle="collapse"><i class="fa fa-tint"></i> Components</a>
                <ul id="components" class="sidebar-nav collapse">
                    <li><a href="<?php echo site_url('comp/textEditor'); ?>">Texteditor</a></li>
                    <li><a href="<?php echo site_url('comp/chart'); ?>">Chart</a></li>
                </ul>
            </li-->

           <li id="video">
                <a href="<?php echo site_url('video/video'); ?>">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                   <?php echo caption('Video'); ?>
                </a>
            </li>

            <li id="theme_menu">
                <a href="#theme" data-toggle="collapse">
                    <i class="fa fa-cog"></i>
						<?php echo caption('Theme_Settings'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="theme" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('theme/themeSetting');?>">
                            <i class="fa fa-angle-right"></i>
							<?php echo caption('Logo/Icon'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('theme/themeSetting/theme_tools');?>">
                            <i class="fa fa-angle-right"></i>
							<?php echo caption('Theme_Tools'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('theme/themeSetting/theme_basic');?>">
                            <i class="fa fa-angle-right"></i>
							<?php echo caption('Basic_Option'); ?>
                        </a>
                    </li>

                   <!--  <li>
                        <a href="<?php echo site_url('theme/image_cropper');?>">
                            <i class="fa fa-angle-right"></i>
                            Image Cropper
                        </a>
                    </li> -->

                </ul>
            </li>
            
            <li id="backup_menu">
                <a href="<?php echo site_url('data_backup'); ?>">
                    <i class="fa fa-database"></i>
                    <?php echo caption('Backup'); ?>
                </a>
            </li>

            <li id="golden_jubilee">
                <a href="<?php echo site_url('golden_jubilee'); ?>">
                   <i class="fa fa-users" aria-hidden="true"></i>
                   <?php echo caption('Golden_jubilee'); ?> 
                </a>
            </li>

            <li id="">
                <a target="_blank" href="http://ndcm.edu.bd/webmail">
                   <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <?php echo caption('Web_Mail'); ?>
                </a>
            </li>
            

        </ul>
    </nav>
</aside>
<!-- /#sidebar-wrapper -->

