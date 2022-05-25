CREATE TABLE `access_info` (
  `user_id` int(10) unsigned NOT NULL,
  `login_period` datetime NOT NULL,
  `logout_period` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

CREATE TABLE `ad_calender` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ad_calender_title` varchar(255) NOT NULL,
  `ad_calender_attachment` varchar(255) NOT NULL,
  `ad_calender_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `admission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `student_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `roll` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `session` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `batch` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',
  `shift` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Bangla',
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',
  `optional` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `admit_instruction` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `details` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1; 

CREATE TABLE `advance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `employeeId` varchar(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

CREATE TABLE `at_a_glance` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `at_a_glance_title` varchar(255) NOT NULL,
  `at_a_glance` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8; 

CREATE TABLE `attendance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `class` varchar(45) NOT NULL,
  `session` varchar(45) NOT NULL,
  `group` varchar(100) NOT NULL DEFAULT 'None',
  `subject` varchar(255) NOT NULL DEFAULT 'All',
  `roll` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8; 

CREATE TABLE `bank_account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `datetime` date NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `pre_balance` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8; 

CREATE TABLE `banner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `certificate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `session` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `roll` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `issue_at` date NOT NULL,
  `issue_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `class_and_subject` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CS_class` varchar(255) NOT NULL,
  `CS_group` varchar(255) NOT NULL,
  `CS_subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `committee_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_date` varchar(255) NOT NULL,
  `member_year_from` varchar(10) NOT NULL,
  `member_year_to` varchar(10) NOT NULL,
  `member_full_name` varchar(255) NOT NULL,
  `member_post` varchar(255) NOT NULL,
  `member_mobile_number` varchar(255) NOT NULL,
  `member_address` varchar(255) NOT NULL,
  `member_photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `cost` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `purpose` text COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `spender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `employee` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_emp_id` varchar(100) NOT NULL,
  `employee_type` varchar(100) NOT NULL,
  `employee_joining` date NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_gender` text NOT NULL,
  `employee_mobile` varchar(15) NOT NULL,
  `employee_email` varchar(100) NOT NULL,
  `employee_present_address` text NOT NULL,
  `employee_permanent_address` text NOT NULL,
  `employee_designation` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `employee_salary` varchar(15) NOT NULL,
  `employee_photo` varchar(100) NOT NULL,
  `employee_status` varchar(20) NOT NULL,
  `employee_subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8; 

CREATE TABLE `employee_leave` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `employee_emp_id` varchar(100) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `cause` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8; 

CREATE TABLE `employee_payment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payDate` date NOT NULL,
  `employeeId` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `month` varchar(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `bonus` decimal(10,2) NOT NULL,
  `method` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

CREATE TABLE `exam` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `exam_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `objective` decimal(5,2) NOT NULL,
  `objective_pass_mark` decimal(5,2) NOT NULL,
  `written` decimal(5,2) NOT NULL,
  `written_pass_mark` decimal(5,2) NOT NULL,
  `practical` decimal(5,2) NOT NULL,
  `practical_pass_mark` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `gallery` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_date` date NOT NULL,
  `gallery_title` varchar(255) NOT NULL,
  `gallery_path` varchar(255) NOT NULL,
  `position` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8; 

CREATE TABLE `latest_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `latest_news_date` date NOT NULL,
  `latest_news_title` text NOT NULL,
  `latest_news_description` text NOT NULL,
  `latest_news_link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8; 

CREATE TABLE `marks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `year` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `exam_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `roll` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `objective` decimal(5,2) NOT NULL,
  `written` decimal(5,2) NOT NULL,
  `practical` decimal(5,2) NOT NULL,
  `total` decimal(5,2) NOT NULL,
  `point` decimal(5,2) NOT NULL,
  `letter` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `messages_date` varchar(20) NOT NULL,
  `messages_name` varchar(250) NOT NULL,
  `messages_mobile` varchar(50) NOT NULL,
  `messages_text` text NOT NULL,
  `messages_condition` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `notice` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `notice_date` date NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `notice_description` text NOT NULL,
  `notice_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8; 

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_date` date NOT NULL,
  `page_page` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_description` text NOT NULL,
  `page_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8; 

CREATE TABLE `registration` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `datetime` date NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `religion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `present_address` text COLLATE utf8_unicode_ci NOT NULL,
  `permanent_address` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admitted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `result` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `exam_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `roll` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total` decimal(6,2) NOT NULL,
  `gpa` decimal(3,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `reunion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `path` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `guest` int(10) NOT NULL,
  `total_fee` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1; 

CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

CREATE TABLE `set_amount` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_class` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tution_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `late_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `advance` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tiffin_charge` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `admission_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `re_admission_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `transfer_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `testimonial_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `exam_1st` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `exam_2nd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `exam_annual` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `session_charge` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `transport_fair` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `progress_report` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `annual_feast` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `library_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `poor_fund` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_card` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cap` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `base` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tie` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `internal_exam` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cultural_programme` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `maintanance_cost` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hostel_charge` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dyning_charge` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sports_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `milad_puja` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `slider` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slider_date` date NOT NULL,
  `slider_title` varchar(100) NOT NULL,
  `slider_path` varchar(50) NOT NULL,
  `slider_url` text NOT NULL,
  `position` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8; 

CREATE TABLE `sms_record` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_date` date NOT NULL,
  `delivery_time` time NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `total_characters` varchar(4) NOT NULL,
  `total_messages` varchar(2) NOT NULL,
  `delivery_report` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1; 

CREATE TABLE `speech` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `speech_person` varchar(255) NOT NULL,
  `speech_speech` text NOT NULL,
  `speech_path` varchar(255) NOT NULL,
  `speech_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8; 

CREATE TABLE `student_payment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `students_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `payment_date` date NOT NULL,
  `payment_year` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `payment_month` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `payment_class` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tution_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `late_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `advance` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tiffin_charge` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `admission_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `re_admission_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `transfer_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `testimonial_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `exam_1st` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `exam_2nd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `exam_annual` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `session_charge` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `transport_fair` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `progress_report` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `annual_feast` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `library_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `poor_fund` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_card` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cap` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `base` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tie` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `internal_exam` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cultural_programme` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `maintanance_cost` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hostel_charge` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dyning_charge` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sports_fee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `milad_puja` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `students` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `students_name` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `student_religion` varchar(100) NOT NULL,
  `fathers_profession` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `birth_date` varchar(100) NOT NULL,
  `preasent_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `parents_mobile` varchar(20) NOT NULL,
  `lg_mobile` varchar(20) NOT NULL,
  `session` varchar(100) CHARACTER SET utf8 NOT NULL,
  `class` varchar(100) NOT NULL,
  `student_shift` varchar(255) NOT NULL,
  `student_group` varchar(255) NOT NULL,
  `students_roll` varchar(50) NOT NULL,
  `student_section` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `subject` (
  `id` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `datetime` date NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paper` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `subject_code` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `subject_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'compulsory',
  `written` int(100) NOT NULL,
  `objective` int(100) NOT NULL,
  `practical` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `tc` (
  `id` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vill_or_road` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_office` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upazilla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `roll` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reg` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `attendance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `testimonial` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(25) NOT NULL,
  `datetime` date NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gpa` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `theme_setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `theme_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `background_pattern` text COLLATE utf8_unicode_ci NOT NULL,
  `login_background` text COLLATE utf8_unicode_ci NOT NULL,
  `google_map` text COLLATE utf8_unicode_ci NOT NULL,
  `footer` text COLLATE utf8_unicode_ci NOT NULL,
  `header` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci NOT NULL,
  `menu_icon` text COLLATE utf8_unicode_ci NOT NULL,
  `social_icon` text COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `transaction` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_date` date NOT NULL,
  `bank` varchar(100) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `transaction_type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `transaction_by` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8; 

CREATE TABLE `upload_digital_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dc_title` varchar(255) NOT NULL,
  `dc_class` varchar(255) NOT NULL,
  `dc_group` varchar(255) NOT NULL,
  `dc_subject` varchar(255) NOT NULL,
  `dc_attachment` text NOT NULL,
  `dc_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `upload_leave` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `leave_title` varchar(255) NOT NULL,
  `leave_attachment` varchar(255) NOT NULL,
  `leave_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `upload_magazine` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `magazine_title` varchar(255) NOT NULL,
  `magazine_attachment` varchar(255) NOT NULL,
  `magazine_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `upload_result` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `result_class` varchar(255) NOT NULL,
  `result_exam` varchar(255) NOT NULL,
  `result_attachment` varchar(255) NOT NULL,
  `result_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `upload_routine` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `routine_class` varchar(255) NOT NULL,
  `routine_title` varchar(255) NOT NULL,
  `routine_attachment` varchar(255) NOT NULL,
  `routine_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `upload_syllabus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `syllabus_class` varchar(255) NOT NULL,
  `syllabus_attachment` varchar(255) NOT NULL,
  `syllabus_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `opening` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `maritial_status` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `facecbook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `privilege` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `branch` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8; 

CREATE TABLE `video_gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `embed_code` text NOT NULL,
  `video_title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `visitors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4; 
 
INSERT INTO `access_info` ( `user_id`, `login_period`, `logout_period`) VALUES 
('60', '2016-11-05 15:58:08', '0000-00-00 00:00:00'), 
('60', '2016-11-05 15:58:30', '0000-00-00 00:00:00'), 
('60', '2016-11-05 15:58:36', '0000-00-00 00:00:00'), 
('60', '2016-11-05 15:58:44', '0000-00-00 00:00:00'), 
('60', '2016-11-05 15:59:27', '0000-00-00 00:00:00'), 
('60', '2016-11-05 16:01:51', '0000-00-00 00:00:00'), 
('60', '2016-11-05 16:15:49', '0000-00-00 00:00:00'), 
('60', '2016-11-05 16:17:18', '0000-00-00 00:00:00'), 
('60', '2016-11-05 17:11:38', '0000-00-00 00:00:00'), 
('60', '2016-11-05 17:44:01', '0000-00-00 00:00:00'), 
('60', '2016-11-14 09:46:31', '0000-00-00 00:00:00'), 
('60', '2016-11-14 11:31:23', '2016-11-14 11:37:51'), 
('60', '2016-11-14 11:38:01', '2016-11-14 11:38:37'), 
('60', '2016-11-14 11:38:49', '0000-00-00 00:00:00'), 
('60', '2016-11-14 12:15:28', '0000-00-00 00:00:00'), 
('60', '2016-11-15 12:19:47', '0000-00-00 00:00:00'), 
('60', '2016-11-17 10:16:05', '0000-00-00 00:00:00'), 
('60', '2016-11-20 17:48:21', '0000-00-00 00:00:00'), 
('60', '2016-11-21 14:19:09', '2016-11-21 14:26:06'), 
('60', '2016-11-21 23:46:49', '2016-11-21 23:47:21'), 
('60', '2016-11-21 23:58:54', '2016-11-21 23:59:29'), 
('60', '2016-11-23 11:40:24', '2016-11-23 11:49:48'), 
('60', '2016-11-24 15:43:58', '0000-00-00 00:00:00'), 
('60', '2016-11-24 17:45:57', '0000-00-00 00:00:00'), 
('61', '2016-11-27 09:43:20', '0000-00-00 00:00:00'), 
('60', '2016-11-28 11:38:20', '2016-11-28 12:33:37'), 
('60', '2016-11-29 14:56:44', '0000-00-00 00:00:00'), 
('60', '2016-11-29 14:59:26', '0000-00-00 00:00:00'), 
('60', '2016-11-29 15:47:50', '2016-11-29 15:49:48'), 
('60', '2016-12-04 12:24:29', '2016-12-04 12:24:36'), 
('60', '2016-12-05 17:14:40', '2016-12-05 17:18:20'), 
('60', '2016-12-10 11:01:34', '0000-00-00 00:00:00'), 
('60', '2017-01-03 11:18:48', '0000-00-00 00:00:00'), 
('60', '2017-01-14 10:39:35', '2017-01-14 10:41:55'), 
('60', '2017-01-14 12:10:42', '0000-00-00 00:00:00'), 
('60', '2017-01-14 17:20:03', '0000-00-00 00:00:00'), 
('60', '2017-01-14 17:21:33', '0000-00-00 00:00:00'), 
('60', '2017-01-15 10:22:18', '0000-00-00 00:00:00'), 
('60', '2017-01-18 11:14:36', '0000-00-00 00:00:00'), 
('60', '2017-01-21 10:28:07', '0000-00-00 00:00:00'), 
('60', '2017-01-22 10:30:25', '2017-01-22 11:03:46'), 
('60', '2017-01-25 12:20:51', '0000-00-00 00:00:00'), 
('60', '2017-01-25 16:28:35', '0000-00-00 00:00:00'), 
('60', '2017-01-26 10:19:55', '2017-01-26 10:20:17'), 
('60', '2017-01-26 13:18:40', '2017-01-26 13:52:03'), 
('60', '2017-01-26 13:54:56', '2017-01-26 15:39:49'), 
('60', '2017-01-26 16:08:25', '2017-01-26 16:11:02'), 
('60', '2017-01-26 16:39:59', '2017-01-26 16:56:34'), 
('60', '2017-01-29 10:31:26', '2017-01-29 10:33:34');  



 



INSERT INTO `admission` ( `id`, `date`, `student_id`, `password`, `roll`, `class`, `group`, `session`, `batch`, `shift`, `version`, `section`, `optional`) VALUES 
('30', '2016-11-05', '30', '1234', '104', 'Nine', 'Science', '2016', '0', 'Day', 'Bangla', 'A', 'HIGHER MATHEMATICS'), 
('31', '2016-11-05', '31', '12345', '103', 'Nine', 'Science', '2016', '0', 'Day', 'Bangla', 'A', 'HIGHER MATHEMATICS'), 
('32', '2016-11-05', '32', '12345', '101', 'Nine', 'Science', '2016', '0', 'Day', 'Bangla', 'A', 'BIOLOGY'), 
('33', '2016-11-05', '33', '123456', '105', 'Nine', 'Science', '2016', '0', 'Day', 'Bangla', 'A', 'AGRICULTURE STUDIES'), 
('34', '2016-11-05', '34', '12345', '102', 'Nine', 'Science', '2016', '0', 'Day', 'Bangla', 'A', 'BIOLOGY'), 
('35', '2016-11-05', '35', '12345', '102', 'Six', 'None', '2016', '0', 'Day', 'Bangla', 'None', 'None'), 
('36', '2016-11-05', '36', '123455', '103', 'Six', 'None', '2016', '0', 'Day', 'Bangla', 'None', 'None'), 
('37', '2016-11-05', '37', '12345', '101', 'Six', 'None', '2016', '0', 'Day', 'Bangla', 'None', 'None'), 
('38', '2016-11-05', '38', '1234', '104', 'Seven', 'Science', '2016', '0', 'Morning', 'Bangla', 'None', 'AGRICULTURE STUDIES'), 
('39', '2016-11-05', '39', '123456', '105', 'Six', 'None', '2016', '0', 'Day', 'Bangla', 'A', 'None'), 
('40', '2017-01-14', '42', '', '01', 'Ten', 'Science', '2017', '0', 'Day', 'Bangla', 'A', 'BIOLOGY'), 
('41', '2017-01-14', '43', '', '02', 'Ten', 'Science', '2017', '0', 'Day', 'Bangla', 'A', 'BIOLOGY'), 
('42', '2017-01-14', '44', '', '03', 'Ten', 'Science', '2017', '0', 'Day', 'Bangla', 'A', 'BIOLOGY'), 
('43', '2017-01-14', '45', '', '04', 'Ten', 'Science', '2017', '0', 'Day', 'Bangla', 'A', 'HIGHER MATHEMATICS'), 
('44', '2017-01-14', '46', '', '05', 'Ten', 'Science', '2017', '0', 'Day', 'Bangla', 'A', 'HIGHER MATHEMATICS');  



INSERT INTO `admit_instruction` ( `id`, `details`) VALUES 
('2', 'Arrive at the examination venue at least 15 minutes before the start of the examination / 35 minutes before a digital examination.'), 
('3', 'The examination starts at the moment the book control begins, and you must therefore be present by 8.20 a.m. for regular written examinations and 8.10 a.m. at digital examinations.'), 
('4', 'When using a laptop at digital examinations, the laptop has to be set up as soon as possible. If you are taking a law exam, the laptop must be set up before the book control.'), 
('5', 'Coats, backpacks, bags, etc. must be placed as directed. Mobile phones, mp3 players, smartwatches and other electronic devices must be turned off and put away, and cannot be stored in coats or pockets.'), 
('6', 'If support material, other than that which is specifically permitted, is found at or by the desk, it may be treated as an attempt to cheat and relevant procedures for cheating will be followed. ');  



 



INSERT INTO `at_a_glance` ( `id`, `date`, `at_a_glance_title`, `at_a_glance`) VALUES 
('2', '2016-07-19', 'এক নজরে নটর ডেম কলেজ । ', '<p><span style="color: #000000;">এক নজরে নটর ডেম কলেজ । এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;</span></p>');  



INSERT INTO `attendance` ( `id`, `date`, `class`, `session`, `group`, `subject`, `roll`) VALUES 
('9', '2016-11-05', 'Six', '2016', 'None', '', '["104","103","101","105"]'), 
('10', '2017-01-15', 'Ten', '2017', 'Science', '', '["02","03","04","05"]'), 
('11', '2017-01-30', 'Ten', '2017', 'Science', '', '["01","02","03","04","05"]');  



INSERT INTO `bank_account` ( `id`, `datetime`, `bank_name`, `holder_name`, `account_number`, `pre_balance`) VALUES 
('13', '2016-11-05', 'Sonali_Bank_Limited', 'Rony Debnath', '101020', '5950'), 
('14', '0000-00-00', 'Janata_Bank_Limited', 'abcd', '123456789123', '50000'), 
('15', '0000-00-00', 'National_Bank_Limited', 'asdf', '123456789857458', '5000000'), 
('16', '2017-01-14', 'AB_Bank_Limited', 'asdfasdf', '123456789456123', '50000'), 
('17', '2017-01-25', 'Dutch_Bangla_Bank', 'Maruf hasan', '15610550882', '16000');  



INSERT INTO `banner` ( `id`, `date`, `path`) VALUES 
('1', '2017-01-21', 'public/banner/banner.jpg');  



INSERT INTO `certificate` ( `id`, `student_id`, `name`, `father_name`, `mother_name`, `class`, `session`, `roll`, `dob`, `issue_at`, `issue_by`) VALUES 
('8', '39', 'Azaz Ahammed', 'Abul munsur Ahammed', 'Ruckshanara Begum', 'Six', '2016', '105', '1989-08-07', '2016-11-05', 'imtiaz'), 
('9', '33', 'Imtiaz Ahammed', 'Abul munsur Ahammed', 'Ruckshanara Begum', 'Nine', '2016', '105', '1989-08-07', '2016-11-05', 'azaz');  



 



INSERT INTO `committee_members` ( `id`, `member_date`, `member_year_from`, `member_year_to`, `member_full_name`, `member_post`, `member_mobile_number`, `member_address`, `member_photo`) VALUES 
('15', '2016-11-05', '2016', '2017', 'Khairul Islam Tanmoy', 'সভাপতি', '01624390079', 'Mymensingh', 'public/members/member_796305.jpg');  



INSERT INTO `cost` ( `id`, `date`, `purpose`, `amount`, `spender`) VALUES 
('5', '2016-11-05', 'staff_salarry', '8000.00', 'Wone'), 
('6', '2016-11-05', 'staff_salarry', '8000.00', 'My Selfe'), 
('7', '2017-01-03', 'feed', '524.00', 'abcd');  



INSERT INTO `employee` ( `id`, `employee_emp_id`, `employee_type`, `employee_joining`, `employee_name`, `employee_gender`, `employee_mobile`, `employee_email`, `employee_present_address`, `employee_permanent_address`, `employee_designation`, `username`, `password`, `employee_salary`, `employee_photo`, `employee_status`, `employee_subject`) VALUES 
('24', '158', 'staff', '2016-11-17', 'Rubel mia', 'Male', '01914690644', 'rubelfahsan@gmail.com', 'Mymensingh', 'Mymensingh', 'Clerk', '', '', '7000', 'public/employee/employee_158.jpg', '1', '');  



INSERT INTO `employee_leave` ( `id`, `date`, `employee_emp_id`, `date_from`, `date_to`, `cause`) VALUES 
('1', '2017-01-15', '158', '2016-12-29', '2016-12-31', '<p>অসুস্থতার</p>');  



 



INSERT INTO `exam` ( `id`, `date`, `title`, `exam_id`, `class`, `group`, `subject`, `objective`, `objective_pass_mark`, `written`, `written_pass_mark`, `practical`, `practical_pass_mark`) VALUES 
('1', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484371123', 'Nine', 'Science', 'BANGLA 1st', '40.00', '20.00', '60.00', '30.00', '0.00', '0.00'), 
('2', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484371123', 'Nine', 'Science', 'BANGLA 2nd', '40.00', '20.00', '60.00', '30.00', '0.00', '0.00'), 
('3', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484371123', 'Nine', 'Science', 'ENGLISH 1st', '0.00', '0.00', '100.00', '40.00', '0.00', '0.00'), 
('4', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484371123', 'Nine', 'Science', 'ENGLISH 2nd', '0.00', '0.00', '100.00', '40.00', '0.00', '0.00'), 
('5', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484371123', 'Nine', 'Science', 'CAREER EDUCATION', '40.00', '20.00', '60.00', '30.00', '0.00', '0.00'), 
('6', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484371123', 'Nine', 'Science', 'BIOLOGY', '35.00', '20.00', '40.00', '30.00', '25.00', '15.00'), 
('7', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484372074', 'Ten', 'Science', 'BANGLA 1st', '40.00', '15.00', '60.00', '20.00', '0.00', '0.00'), 
('8', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484372074', 'Ten', 'Science', 'BANGLA 2nd', '40.00', '15.00', '60.00', '20.00', '0.00', '0.00'), 
('9', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484372074', 'Ten', 'Science', 'ENGLISH 1st', '0.00', '0.00', '100.00', '40.00', '0.00', '0.00'), 
('10', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484372074', 'Ten', 'Science', 'ENGLISH 2nd', '0.00', '0.00', '100.00', '40.00', '0.00', '0.00'), 
('11', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484372074', 'Ten', 'Science', 'CAREER EDUCATION', '40.00', '15.00', '60.00', '20.00', '0.00', '0.00'), 
('12', '2017-02-01 12:00:00', 'Annual Exam 2017', '1484372074', 'Ten', 'Science', 'BIOLOGY', '25.00', '15.00', '50.00', '25.00', '25.00', '15.00');  



INSERT INTO `gallery` ( `id`, `gallery_date`, `gallery_title`, `gallery_path`, `position`) VALUES 
('38', '0000-00-00', 'গ্যালারী', 'public/gallery/gallery5532.png', '2'), 
('39', '0000-00-00', 'গ্যালারী', 'public/gallery/gallery4753.png', '1'), 
('40', '0000-00-00', 'গ্যালারী', 'public/gallery/gallery6939.png', '3'), 
('41', '0000-00-00', 'গ্যালারী', 'public/gallery/gallery3481.png', '4'), 
('42', '0000-00-00', 'গ্যালারী', 'public/gallery/gallery4396.png', '5'), 
('44', '0000-00-00', 'গ্যালারী', 'public/gallery/gallery9594.png', '6');  



INSERT INTO `latest_news` ( `id`, `latest_news_date`, `latest_news_title`, `latest_news_description`, `latest_news_link`) VALUES 
('8', '2016-12-05', 'হোসেনপুর ডিগ্রী কলেজের সমস্ত আপডেট পেতে নিয়মিত ভিজিট করুন। ', '<p>হোসেনপুর ডিগ্রী কলেজের সমস্ত আপডেট পেতে নিয়মিত ভিজিট করুন।</p>', '');  



INSERT INTO `marks` ( `id`, `date`, `year`, `exam_id`, `class`, `roll`, `student_id`, `subject_name`, `subject`, `objective`, `written`, `practical`, `total`, `point`, `letter`) VALUES 
('1', '2017-01-14', '2016', '1484371123', 'Nine', '104', '30', 'BANGLA', 'BANGLA 1st', '30.00', '45.00', '0.00', '75.00', '4.00', 'A'), 
('2', '2017-01-14', '2016', '1484371123', 'Nine', '103', '31', 'BANGLA', 'BANGLA 1st', '30.00', '35.00', '0.00', '65.00', '3.50', 'A-'), 
('3', '2017-01-14', '2016', '1484371123', 'Nine', '101', '32', 'BANGLA', 'BANGLA 1st', '30.00', '45.00', '0.00', '75.00', '4.00', 'A'), 
('4', '2017-01-14', '2016', '1484371123', 'Nine', '105', '33', 'BANGLA', 'BANGLA 1st', '35.00', '30.00', '0.00', '65.00', '3.50', 'A-'), 
('5', '2017-01-14', '2016', '1484371123', 'Nine', '102', '34', 'BANGLA', 'BANGLA 1st', '32.00', '35.00', '0.00', '67.00', '3.50', 'A-'), 
('6', '2017-01-14', '2016', '1484371123', 'Nine', '104', '30', 'BANGLA', 'BANGLA 2nd', '25.00', '45.00', '0.00', '70.00', '4.00', 'A'), 
('7', '2017-01-14', '2016', '1484371123', 'Nine', '103', '31', 'BANGLA', 'BANGLA 2nd', '20.00', '40.00', '0.00', '60.00', '3.50', 'A-'), 
('8', '2017-01-14', '2016', '1484371123', 'Nine', '101', '32', 'BANGLA', 'BANGLA 2nd', '21.00', '35.00', '0.00', '56.00', '3.00', 'B'), 
('9', '2017-01-14', '2016', '1484371123', 'Nine', '105', '33', 'BANGLA', 'BANGLA 2nd', '22.00', '44.00', '0.00', '66.00', '3.50', 'A-'), 
('10', '2017-01-14', '2016', '1484371123', 'Nine', '102', '34', 'BANGLA', 'BANGLA 2nd', '26.00', '52.00', '0.00', '78.00', '4.00', 'A'), 
('11', '2017-01-14', '2016', '1484371123', 'Nine', '104', '30', 'ENGLISH', 'ENGLISH 1st', '0.00', '70.00', '0.00', '70.00', '4.00', 'A'), 
('12', '2017-01-14', '2016', '1484371123', 'Nine', '103', '31', 'ENGLISH', 'ENGLISH 1st', '0.00', '65.00', '0.00', '65.00', '3.50', 'A-'), 
('13', '2017-01-14', '2016', '1484371123', 'Nine', '101', '32', 'ENGLISH', 'ENGLISH 1st', '0.00', '55.00', '0.00', '55.00', '3.00', 'B'), 
('14', '2017-01-14', '2016', '1484371123', 'Nine', '105', '33', 'ENGLISH', 'ENGLISH 1st', '0.00', '80.00', '0.00', '80.00', '5.00', 'A+'), 
('15', '2017-01-14', '2016', '1484371123', 'Nine', '102', '34', 'ENGLISH', 'ENGLISH 1st', '0.00', '45.00', '0.00', '45.00', '2.00', 'C'), 
('16', '2017-01-14', '2016', '1484371123', 'Nine', '104', '30', 'ENGLISH', 'ENGLISH 2nd', '0.00', '78.00', '0.00', '78.00', '4.00', 'A'), 
('17', '2017-01-14', '2016', '1484371123', 'Nine', '103', '31', 'ENGLISH', 'ENGLISH 2nd', '0.00', '90.00', '0.00', '90.00', '5.00', 'A+'), 
('18', '2017-01-14', '2016', '1484371123', 'Nine', '101', '32', 'ENGLISH', 'ENGLISH 2nd', '0.00', '75.00', '0.00', '75.00', '4.00', 'A'), 
('19', '2017-01-14', '2016', '1484371123', 'Nine', '105', '33', 'ENGLISH', 'ENGLISH 2nd', '0.00', '68.00', '0.00', '68.00', '3.50', 'A-'), 
('20', '2017-01-14', '2016', '1484371123', 'Nine', '102', '34', 'ENGLISH', 'ENGLISH 2nd', '0.00', '75.00', '0.00', '75.00', '4.00', 'A'), 
('21', '2017-01-14', '2016', '1484371123', 'Nine', '104', '30', 'CAREER EDUCATION', 'CAREER EDUCATION', '30.00', '55.00', '0.00', '85.00', '5.00', 'A+'), 
('22', '2017-01-14', '2016', '1484371123', 'Nine', '103', '31', 'CAREER EDUCATION', 'CAREER EDUCATION', '32.00', '50.00', '0.00', '82.00', '5.00', 'A+'), 
('23', '2017-01-14', '2016', '1484371123', 'Nine', '101', '32', 'CAREER EDUCATION', 'CAREER EDUCATION', '33.00', '45.00', '0.00', '78.00', '4.00', 'A'), 
('24', '2017-01-14', '2016', '1484371123', 'Nine', '105', '33', 'CAREER EDUCATION', 'CAREER EDUCATION', '31.00', '44.00', '0.00', '75.00', '4.00', 'A'), 
('25', '2017-01-14', '2016', '1484371123', 'Nine', '102', '34', 'CAREER EDUCATION', 'CAREER EDUCATION', '25.00', '53.00', '0.00', '78.00', '4.00', 'A'), 
('26', '2017-01-14', '2016', '1484371123', 'Nine', '104', '30', 'BIOLOGY', 'BIOLOGY', '20.00', '40.00', '20.00', '80.00', '5.00', 'A+'), 
('27', '2017-01-14', '2016', '1484371123', 'Nine', '103', '31', 'BIOLOGY', 'BIOLOGY', '21.00', '35.00', '18.00', '74.00', '4.00', 'A'), 
('28', '2017-01-14', '2016', '1484371123', 'Nine', '101', '32', 'BIOLOGY', 'BIOLOGY', '24.00', '30.00', '19.00', '73.00', '4.00', 'A'), 
('29', '2017-01-14', '2016', '1484371123', 'Nine', '105', '33', 'BIOLOGY', 'BIOLOGY', '20.00', '32.00', '22.00', '74.00', '4.00', 'A'), 
('30', '2017-01-14', '2016', '1484371123', 'Nine', '102', '34', 'BIOLOGY', 'BIOLOGY', '25.00', '30.00', '20.00', '75.00', '4.00', 'A'), 
('31', '2017-01-14', '2017', '1484371123', 'Ten', '01', '40', 'BANGLA', 'BANGLA 1st', '30.00', '55.00', '0.00', '85.00', '5.00', 'A+'), 
('32', '2017-01-14', '2017', '1484371123', 'Ten', '02', '41', 'BANGLA', 'BANGLA 1st', '25.00', '45.00', '0.00', '70.00', '4.00', 'A'), 
('33', '2017-01-14', '2017', '1484371123', 'Ten', '03', '42', 'BANGLA', 'BANGLA 1st', '22.00', '35.00', '0.00', '57.00', '3.00', 'B'), 
('34', '2017-01-14', '2017', '1484371123', 'Ten', '04', '43', 'BANGLA', 'BANGLA 1st', '23.00', '44.00', '0.00', '67.00', '3.50', 'A-'), 
('35', '2017-01-14', '2017', '1484371123', 'Ten', '05', '44', 'BANGLA', 'BANGLA 1st', '21.00', '42.00', '0.00', '63.00', '3.50', 'A-'), 
('36', '2017-01-14', '2017', '1484371123', 'Ten', '01', '40', 'BANGLA', 'BANGLA 2nd', '33.00', '55.00', '0.00', '88.00', '5.00', 'A+'), 
('37', '2017-01-14', '2017', '1484371123', 'Ten', '02', '41', 'BANGLA', 'BANGLA 2nd', '35.00', '45.00', '0.00', '80.00', '5.00', 'A+'), 
('38', '2017-01-14', '2017', '1484371123', 'Ten', '03', '42', 'BANGLA', 'BANGLA 2nd', '25.00', '35.00', '0.00', '60.00', '3.50', 'A-'), 
('39', '2017-01-14', '2017', '1484371123', 'Ten', '04', '43', 'BANGLA', 'BANGLA 2nd', '22.00', '52.00', '0.00', '74.00', '4.00', 'A'), 
('40', '2017-01-14', '2017', '1484371123', 'Ten', '05', '44', 'BANGLA', 'BANGLA 2nd', '30.00', '47.00', '0.00', '77.00', '4.00', 'A'), 
('41', '2017-01-14', '2017', '1484371123', 'Ten', '01', '40', 'ENGLISH', 'ENGLISH 1st', '0.00', '70.00', '0.00', '70.00', '4.00', 'A'), 
('42', '2017-01-14', '2017', '1484371123', 'Ten', '02', '41', 'ENGLISH', 'ENGLISH 1st', '0.00', '50.00', '0.00', '50.00', '3.00', 'B'), 
('43', '2017-01-14', '2017', '1484371123', 'Ten', '03', '42', 'ENGLISH', 'ENGLISH 1st', '0.00', '60.00', '0.00', '60.00', '3.50', 'A-'), 
('44', '2017-01-14', '2017', '1484371123', 'Ten', '04', '43', 'ENGLISH', 'ENGLISH 1st', '0.00', '66.00', '0.00', '66.00', '3.50', 'A-'), 
('45', '2017-01-14', '2017', '1484371123', 'Ten', '05', '44', 'ENGLISH', 'ENGLISH 1st', '0.00', '80.00', '0.00', '80.00', '5.00', 'A+'), 
('46', '2017-01-14', '2017', '1484371123', 'Ten', '01', '40', 'ENGLISH', 'ENGLISH 2nd', '0.00', '75.00', '0.00', '75.00', '4.00', 'A'), 
('47', '2017-01-14', '2017', '1484371123', 'Ten', '02', '41', 'ENGLISH', 'ENGLISH 2nd', '0.00', '68.00', '0.00', '68.00', '3.50', 'A-'), 
('48', '2017-01-14', '2017', '1484371123', 'Ten', '03', '42', 'ENGLISH', 'ENGLISH 2nd', '0.00', '57.00', '0.00', '57.00', '3.00', 'B'), 
('49', '2017-01-14', '2017', '1484371123', 'Ten', '04', '43', 'ENGLISH', 'ENGLISH 2nd', '0.00', '75.00', '0.00', '75.00', '4.00', 'A'), 
('50', '2017-01-14', '2017', '1484371123', 'Ten', '05', '44', 'ENGLISH', 'ENGLISH 2nd', '0.00', '68.00', '0.00', '68.00', '3.50', 'A-'), 
('51', '2017-01-14', '2017', '1484371123', 'Ten', '01', '40', 'CAREER EDUCATION', 'CAREER EDUCATION', '22.00', '45.00', '0.00', '67.00', '3.50', 'A-'), 
('52', '2017-01-14', '2017', '1484371123', 'Ten', '02', '41', 'CAREER EDUCATION', 'CAREER EDUCATION', '25.00', '50.00', '0.00', '75.00', '4.00', 'A'), 
('53', '2017-01-14', '2017', '1484371123', 'Ten', '03', '42', 'CAREER EDUCATION', 'CAREER EDUCATION', '26.00', '56.00', '0.00', '82.00', '5.00', 'A+'), 
('54', '2017-01-14', '2017', '1484371123', 'Ten', '04', '43', 'CAREER EDUCATION', 'CAREER EDUCATION', '24.00', '45.00', '0.00', '69.00', '3.50', 'A-'), 
('55', '2017-01-14', '2017', '1484371123', 'Ten', '05', '44', 'CAREER EDUCATION', 'CAREER EDUCATION', '30.00', '32.00', '0.00', '62.00', '3.50', 'A-'), 
('56', '2017-01-14', '2017', '1484371123', 'Ten', '01', '40', 'BIOLOGY', 'BIOLOGY', '21.00', '32.00', '20.00', '73.00', '4.00', 'A'), 
('57', '2017-01-14', '2017', '1484371123', 'Ten', '02', '41', 'BIOLOGY', 'BIOLOGY', '20.00', '35.00', '15.00', '70.00', '4.00', 'A'), 
('58', '2017-01-14', '2017', '1484371123', 'Ten', '03', '42', 'BIOLOGY', 'BIOLOGY', '24.00', '25.00', '18.00', '67.00', '0.00', 'F'), 
('59', '2017-01-14', '2017', '1484371123', 'Ten', '04', '43', 'BIOLOGY', 'BIOLOGY', '24.00', '32.00', '17.00', '73.00', '4.00', 'A'), 
('60', '2017-01-14', '2017', '1484371123', 'Ten', '05', '44', 'BIOLOGY', 'BIOLOGY', '20.00', '33.00', '19.00', '72.00', '4.00', 'A');  



INSERT INTO `messages` ( `id`, `messages_date`, `messages_name`, `messages_mobile`, `messages_text`, `messages_condition`) VALUES 
('1', '2016-10-20', 'সোহেল ', '০১৯৩৭৪৭৬৭১৬', 'আমি ভর্তি সম্পর্কে জানতে চাই ।', 'read'), 
('2', '2016-10-21', 'Mustafiz Sohel', '01937476716', 'Mustafizur Rahman SOhel from Freelance IT Lab Myemsnigh ', 'read'), 
('3', '2016-10-21', 'Sohel', '01937476716', 'Hello World!', 'read'), 
('4', '2016-12-05', 'Maruf hasan', '01914690644', 'HI there', 'read');  



INSERT INTO `notice` ( `id`, `notice_date`, `notice_title`, `notice_description`, `notice_path`) VALUES 
('34', '2016-12-05', 'বর্তমান সময়ের প্রেক্ষাপটে কলেজ কর্তৃপক্ষ সন্ত্রাস ও জঙ্গীবাদ বিরোধী কর্যক্রম হাতে নিয়েছে।', '<p>বর্তমান সময়ের প্রেক্ষাপটে কলেজ কর্তৃপক্ষ সন্ত্রাস ও জঙ্গীবাদ বিরোধী কর্যক্রম হাতে নিয়েছে। বর্তমান সময়ের প্রেক্ষাপটে কলেজ কর্তৃপক্ষ সন্ত্রাস ও জঙ্গীবাদ বিরোধী কর্যক্রম হাতে নিয়েছে। বর্তমান সময়ের প্রেক্ষাপটে কলেজ কর্তৃপক্ষ সন্ত্রাস ও জঙ্গীবাদ বিরোধী কর্যক্রম হাতে নিয়েছে। বর্তমান সময়ের প্রেক্ষাপটে কলেজ কর্তৃপক্ষ সন্ত্রাস ও জঙ্গীবাদ বিরোধী কর্যক্রম হাতে নিয়েছে। বর্তমান সময়ের প্রেক্ষাপটে কলেজ কর্তৃপক্ষ সন্ত্রাস ও জঙ্গীবাদ বিরোধী কর্যক্রম হাতে নিয়েছে। বর্তমান সময়ের প্রেক্ষাপটে কলেজ কর্তৃপক্ষ সন্ত্রাস ও জঙ্গীবাদ বিরোধী কর্যক্রম হাতে নিয়েছে।</p>', ''), 
('35', '2016-12-05', 'আমি কলেজ কর্তৃপক্ষকে স্বাগত জানাই', '<p>আমি কলেজ কর্তৃপক্ষকে স্বাগত জানাই। আমি কলেজ কর্তৃপক্ষকে স্বাগত জানাই। আমি কলেজ কর্তৃপক্ষকে স্বাগত জানাই। আমি কলেজ কর্তৃপক্ষকে স্বাগত জানাই।&nbsp;আমি কলেজ কর্তৃপক্ষকে স্বাগত জানাই।&nbsp;আমি কলেজ কর্তৃপক্ষকে স্বাগত জানাই।&nbsp;আমি কলেজ কর্তৃপক্ষকে স্বাগত জানাই।&nbsp;</p>', '');  



INSERT INTO `pages` ( `id`, `page_date`, `page_page`, `page_title`, `page_description`, `page_path`) VALUES 
('1', '2016-11-05', 'at_a_glance', 'এক নজরে খুকশিয়া উচ্চ বিদ্যালয় ', '<p>এক নজরে খুকশিয়া উচ্চ বিদ্যালয় এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;</p>
<p>&nbsp;</p>
<p>এক নজরে খুকশিয়া উচ্চ বিদ্যালয় এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;এক নজরে খুকশিয়া উচ্চ বিদ্যালয়&nbsp;</p>', 'public/page_Image/at_a_glance7095.jpg'), 
('2', '2016-10-21', 'School_history', 'খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস ', '<p>খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ <strong>বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;খুকশিয়া উচ্চ বিদ্যালয়ের সংক্ষিপ্ত ইতিহাস&nbsp;</strong></p>', ''), 
('3', '2016-11-05', 'history', 'ইতিহাস', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('4', '2016-11-05', 'future_plan', 'ভবিষ্যৎ পরিকল্পনা', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>&nbsp;</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('5', '2016-11-05', 'master_plan', 'পরিকল্পনা', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('6', '2016-11-05', 'success_story', 'সফলতা', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('7', '2016-11-05', 'features', 'আমাদের বৈশিষ্ট্য', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('8', '2016-11-05', 'aim', 'আমাদের লক্ষ্য', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('9', '2016-11-05', 'achievement', 'স্কুলের অর্জন', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('10', '2016-11-05', 'infrastructure', 'ভৌত অবকাঠামো ', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('11', '2016-11-05', 'manpower', 'কর্মরত জনবল', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('12', '2016-11-05', 'teachers_activities', 'শিক্ষকদের কার্যক্রম', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('13', '2016-11-05', 'institution_rules', 'প্রতিষ্ঠানের নিয়মকানুন', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('14', '2016-11-05', 'academic_rules', 'একাডেমিক নীতিমালা', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('15', '2016-11-05', 'governing_body', 'বর্তমান গভর্নিং বডি', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('16', '2016-11-05', 'institute_head', 'প্রাপ্তন প্রতিষ্ঠান প্রধানের তালিকা', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('17', '2016-11-05', 'class_and_branch', 'শ্রেণী ও শাখা ', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('18', '2016-11-05', 'book_list', 'পাঠ্যবইয়ের তালিকা ', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('19', '2016-11-05', 'exam_method', 'পরীক্ষা পদ্ধতি ', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('20', '2016-11-05', 'daily_attendance', 'দৈনিক উপস্থিতি ', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>', ''), 
('21', '2016-11-05', 'multimedia_classroom', 'মাল্টিমিডিয়া শ্রেণীকক্ষ', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', ''), 
('22', '2016-11-05', 'computer_lab', 'কম্পিউটার ল্যাব', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', ''), 
('23', '2016-11-05', 'library', 'গ্রন্থাগ্রার', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', ''), 
('24', '2016-11-05', 'laboratory', 'বিজ্ঞানাগার', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', ''), 
('25', '2016-11-05', 'extra_class', 'এক্সট্রা ক্লাস ', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', ''), 
('26', '2016-11-05', 'study_tour', 'শিক্ষা সফর ', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', ''), 
('27', '2016-11-05', 'scholarship', 'শিক্ষা বৃত্তি', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', ''), 
('28', '2016-11-05', 'sports', 'খেলাধুলা', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', ''), 
('29', '2016-11-05', 'first_aid', 'প্রাথমিতক চিকিৎসা ', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', ''), 
('30', '2016-11-05', 'canteen', 'ক্যান্টিন', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', ''), 
('31', '2016-11-05', 'admission_and_other_fees', 'ভর্তি ও অন্যান্য ফি ', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', ''), 
('32', '2016-11-05', 'admission_rules', 'ভর্তির নিয়মাবলী ', '<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। এই টুকু হল সভাপতির বানী</p>
<p>বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না।</p>', '');  



INSERT INTO `registration` ( `id`, `datetime`, `name`, `father_name`, `mother_name`, `father_profession`, `mother_profession`, `student_mobile`, `guardian_mobile`, `birth_date`, `religion`, `gender`, `present_address`, `permanent_address`, `photo`, `class`, `group`, `session`, `section`, `status`) VALUES 
('30', '2016-11-05', 'Md.Arif Hossin', 'A. Lotif Ali', 'Mst. Honufa Khatun', 'Service Holder', 'Housewife', '01718894561', '01969552552', '2000-10-15', 'islam', 'Male', 'Mymensingh, Sunkipara.', 'Mymensingh, Sunkipara.', 'students_504014.png', 'Nine', 'Science', '2016', 'A', 'admitted'), 
('31', '2016-11-05', 'Khairul Islam Tanmoy', 'Khalilur Rahman', 'Kulsuma Khatun', 'Govment Employee', 'House Wife', '01757674512', '01624390079', '1995-11-03', 'islam', 'Male', 'Dapunia, Mymensingh', 'Dapunia, Mymensingh', 'students_687418.png', 'Nine', 'Science', '2016', 'A', 'admitted'), 
('32', '2016-11-05', 'Jayanta Biswas', 'Joymongal Biswas', 'Bakul Rani Biswas', 'Business', 'Housewife', '01775219457', '01775219457', '1989-12-25', 'hindu', 'Male', 'Mymensingh', 'Mymensingh', 'students_870822.png', 'Nine', 'Science', '2016', 'A', 'admitted'), 
('33', '2016-11-05', 'Imtiaz Ahammed', 'Abul munsur Ahammed', 'Ruckshanara Begum', 'Business', 'Houswife', '01912226436', '01912226436', '1989-08-07', 'islam', 'Male', 'Mymensingh', 'Nandial, Mymensingh', 'students_165337.jpg', 'Nine', 'Science', '2016', 'A', 'admitted'), 
('34', '2016-11-05', 'Rony Debnath', 'Mangal Ch. Debnath', 'Sanchita Rani Debnath', 'Job', 'Housewife', '01921787634', '01921787634', '1992-10-27', 'hindu', 'Male', 'Mymensingh', 'Mymensingh', 'students_348741.jpg', 'Nine', 'Science', '2016', 'A', 'admitted'), 
('35', '2016-11-05', 'Rony', 'Mangal', 'Sanchita', 'Job', 'Housewife', '01921787634', '01921787634', '1992-10-27', 'hindu', 'Male', 'Mymensingh', 'Mymensingh', 'students_231770.png', 'Six', 'None', '2016', 'None', 'admitted'), 
('36', '2016-11-05', 'Birondo Sebag', 'Hanuman Busra', 'Faria Jadob', 'Service Holder', 'House Wife', '01757674512', '01624390079', '1995-10-10', 'hindu', 'Male', 'Mymensingh', 'Mymensingh', 'students_415174.png', 'Six', 'None', '2016', 'None', 'admitted'), 
('37', '2016-11-05', 'Rajan Biswas', 'Joymongal Biswas', 'Bakul Rani Biswas', 'Business', 'Housewife', '01775219457', '01775219457', '2000-01-01', 'hindu', 'Male', 'Mymensingh', 'Mymensingh', 'students_781982.png', 'Six', 'None', '2016', 'None', 'admitted'), 
('38', '2016-11-05', 'Mamun rahman', 'Momen Mia', 'Asiwa Akter', 'Doctor', 'Housewife', '01968574128', '01883009227', '2002-12-31', 'islam', 'Male', 'Sankipara, Mymensingh.', 'Sankipara, Mymensingh.', 'students_781982.jpg', 'Six', 'None', '2016', 'None', 'admitted'), 
('39', '2016-11-05', 'Azaz Ahammed', 'Abul munsur Ahammed', 'Ruckshanara Begum', 'Business', 'Houswife', '01717439904', '01717439904', '1989-08-07', 'islam', 'Male', 'Mymensingh', 'Nandial, Mymensingh', 'students_866373.png', 'Six', 'None', '2016', 'A', 'admitted'), 
('41', '2016-11-29', 'Jayanta 123', '123', 'asdf', 'asfd', 'sadfsd', '01775219457', '0', '2016-10-15', 'ইসলাম', 'option1', 'sadf', 'asdf', 'students_328857.png', 'Six', 'None', '2015-2016', 'None', 'admitted'), 
('42', '2017-01-14', 'Md: korim', 'Md: Rohim', 'Mst: salma', '', '', '017xxxxxxxx', '01xxxxxxxxxx', '1998-01-01', 'islam', 'Male', 'solodfljfjoijfn', 'solodfljfjoijfn', 'students_999891.jpg', 'Ten', 'Science', '2017', 'A', 'admitted'), 
('43', '2017-01-14', 'Md: kalam', 'Md: abul', 'Mst: Rohima', '', '', '017xxxxxxx2', '01xxxxxxxxx2', '2000-01-02', 'islam', 'Male', 'tetertetrt', 'tetertetrt', 'students_207790.jpg', 'Ten', 'Science', '2017', 'A', 'admitted'), 
('44', '2017-01-14', 'Md: Monir', 'Abul Hasem', 'Amena', '', '', '017xxxxxxx3', '01xxxxxxxxx3', '2001-05-02', 'islam', 'Male', 'ygryrtyttr', 'ygryrtyttr', 'students_403591.jpg', 'Ten', 'Science', '2017', 'A', 'admitted'), 
('45', '2017-01-14', 'Md: Asraful', 'Salman', 'Salema', '', '', '017xxxxxxx4', '01xxxxxxxxx4', '0200-01-04', 'hindu', 'Male', 'dfdrerer', 'dfdrerer', 'students_387857.jpg', 'Ten', 'Science', '2017', 'A', 'admitted'), 
('46', '2017-01-14', 'Rani', 'Pranotus', 'Suki', '', '', '017xxxxxxx5', '01xxxxxxxxx5', '2002-05-06', 'hindu', 'Female', 'hhtgytry ttytry', 'hhtgytry ttytry', 'students_894205.jpg', 'Ten', 'Science', '2017', 'A', 'admitted');  



 



INSERT INTO `reunion` ( `id`, `date`, `name`, `father_name`, `mother_name`, `gender`, `religion`, `session`, `class`, `subject`, `profession`, `present_address`, `permanent_address`, `mobile`, `email`, `path`, `type`, `transaction_id`, `fee`, `guest`, `total_fee`) VALUES 
('1', '2016-11-28', 'Rony Debnath', 'M', 'S', 'Male', '??????', '2010-2011', 'Degree', 'CSE', 'Programmer', 'Mymensingh', 'Mymensingh', '01921787634', 'ronycse9@gmail.com', 'public/upload/reunion/01921787634_93087.png', 'teacher', '1234567890', '0.00', '0', '0.00');  



INSERT INTO `sessions` ( `session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES 
('3efd1b49559abcb0f1d549902a53d0c7', '192.168.0.104', 'Mozilla/5.0 (Windows NT 6.1; rv:51.0) Gecko/20100101 Firefox/51.0', '1485770404', 'a:12:{s:9:"user_data";s:0:"";s:7:"user_id";i:1001;s:12:"login_period";s:22:"2017-01-30 15:49:05 pm";s:4:"name";s:16:"Freelance IT Lab";s:5:"email";s:19:"mrskuet08@gmail.com";s:8:"username";s:14:"freelanceitlab";s:6:"mobile";s:11:"01937476716";s:9:"privilege";s:5:"super";s:5:"image";s:27:"private/images/pic-male.png";s:6:"branch";s:10:"Mymensingh";s:6:"holder";s:5:"super";s:8:"loggedin";b:1;}'), 
('88f781c1f7b6678d526bcf229735f088', '192.168.0.108', 'Mozilla/5.0 (Windows NT 6.1; rv:51.0) Gecko/20100101 Firefox/51.0', '1485770600', 'a:12:{s:9:"user_data";s:0:"";s:7:"user_id";i:1001;s:12:"login_period";s:22:"2017-01-30 14:28:33 pm";s:4:"name";s:16:"Freelance IT Lab";s:5:"email";s:19:"mrskuet08@gmail.com";s:8:"username";s:14:"freelanceitlab";s:6:"mobile";s:11:"01937476716";s:9:"privilege";s:5:"super";s:5:"image";s:27:"private/images/pic-male.png";s:6:"branch";s:10:"Mymensingh";s:6:"holder";s:5:"super";s:8:"loggedin";b:1;}'), 
('9ae50fd70fd6be8bbe0c0ae2d935f8a6', '192.168.0.105', 'Mozilla/5.0 (Windows NT 6.1; rv:51.0) Gecko/20100101 Firefox/51.0', '1485770868', 'a:12:{s:9:"user_data";s:0:"";s:7:"user_id";i:1001;s:12:"login_period";s:22:"2017-01-30 10:51:27 am";s:4:"name";s:16:"Freelance IT Lab";s:5:"email";s:19:"mrskuet08@gmail.com";s:8:"username";s:14:"freelanceitlab";s:6:"mobile";s:11:"01937476716";s:9:"privilege";s:5:"super";s:5:"image";s:27:"private/images/pic-male.png";s:6:"branch";s:10:"Mymensingh";s:6:"holder";s:5:"super";s:8:"loggedin";b:1;}'), 
('c2456287c78b1ca9f091afba9790e9b6', '192.168.0.108', 'Mozilla/5.0 (Windows NT 6.1; rv:51.0) Gecko/20100101 Firefox/51.0', '1485767007', '');  



INSERT INTO `set_amount` ( `id`, `payment_class`, `tution_fee`, `late_fee`, `advance`, `tiffin_charge`, `admission_fee`, `re_admission_fee`, `transfer_fee`, `testimonial_fee`, `exam_1st`, `exam_2nd`, `exam_annual`, `session_charge`, `transport_fair`, `progress_report`, `annual_feast`, `library_fee`, `poor_fund`, `id_card`, `cap`, `base`, `tie`, `internal_exam`, `cultural_programme`, `maintanance_cost`, `hostel_charge`, `dyning_charge`, `sports_fee`, `milad_puja`, `others`) VALUES 
('6', 'Six', '150', '150', '50', '60', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'), 
('7', 'Seven', '50', '60', '40', '450', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'), 
('8', 'Nine', '150', '20', '50', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'), 
('9', 'Ten', '100', '0', '0', '50', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');  



INSERT INTO `slider` ( `id`, `slider_date`, `slider_title`, `slider_path`, `slider_url`, `position`) VALUES 
('76', '2016-12-10', '1', './public/slider/slider1126.jpg', '', '1'), 
('77', '2016-12-10', '2', './public/slider/slider9025.jpg', '', '2');  



 



INSERT INTO `speech` ( `id`, `speech_person`, `speech_speech`, `speech_path`, `speech_date`) VALUES 
('1', 'president', '<p style="text-align: justify;">বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে।</p>', 'public/speech/president12.png', '2016-12-10'), 
('2', 'vp_speech', '<p style="text-align: justify;">বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে।</p>', 'public/speech/vp_speech18.png', '2016-12-05'), 
('3', 'principal', '<p style="text-align: justify;">বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে। বাংলাদেশের স্বাধীনতা যুদ্ধ প্রসঙ্গে দুই একটি কথা বলে কিছুই জানানো যায় না। বাংলাদেশের স্বাধীনতা যুদ্ধ ১৯৭১ সালে সংঘটিত একটি মুক্তি সংগ্রাম। এর ব্যাপ্তি ছিল ১৯৭১ সালের ২৫শে মার্চ হতে ১৬ই ডিসেম্বর পর্যন্ত। রক্তক্ষয়ী এই স্বাধীনতা যুদ্ধের মাধ্যমে বাংলাদেশ পাকিস্তান এর কাছ থেকে স্বাধীনতা অর্জন করে।</p>', 'public/speech/principal28.png', '2016-12-05');  



INSERT INTO `student_payment` ( `id`, `students_id`, `payment_date`, `payment_year`, `payment_month`, `payment_class`, `tution_fee`, `late_fee`, `advance`, `tiffin_charge`, `admission_fee`, `re_admission_fee`, `transfer_fee`, `testimonial_fee`, `exam_1st`, `exam_2nd`, `exam_annual`, `session_charge`, `transport_fair`, `progress_report`, `annual_feast`, `library_fee`, `poor_fund`, `id_card`, `cap`, `base`, `tie`, `internal_exam`, `cultural_programme`, `maintanance_cost`, `hostel_charge`, `dyning_charge`, `sports_fee`, `milad_puja`, `others`) VALUES 
('9', '30', '2016-11-05', '2016', '11', 'Nine', '150', '20', '50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''), 
('10', '46', '2016-11-01', '2016', '11', 'Ten', '100', '', '', '50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''), 
('11', '44', '2016-10-11', '2016', '10', 'Ten', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''), 
('12', '44', '2016-11-01', '2016', '11', 'Ten', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');  



 



INSERT INTO `subject` ( `id`, `datetime`, `class`, `group`, `subject`, `subject_name`, `paper`, `subject_code`, `subject_type`, `written`, `objective`, `practical`) VALUES 
('20', '2016-11-05', 'Six', 'None', 'BANGLA', 'BANGLA 1st', '1st', '', 'compulsory', '60', '40', '0'), 
('21', '2016-11-05', 'Nine', 'Science', 'BANGLA', 'BANGLA 1st', '1st', '101', 'compulsory', '60', '40', '0'), 
('22', '2016-11-05', 'Six', 'None', 'BANGLA', 'BANGLA 2nd', '2nd', '', 'compulsory', '60', '40', '0'), 
('23', '2016-11-05', 'Six', 'None', 'ENGLISH', 'ENGLISH 1st', '1st', '', 'compulsory', '60', '40', '0'), 
('24', '2016-11-05', 'Nine', 'Science', 'BANGLA', 'BANGLA 2nd', '2nd', '102', 'compulsory', '60', '40', '0'), 
('25', '2016-11-05', 'Six', 'None', 'ENGLISH', 'ENGLISH 2nd', '2nd', '', 'compulsory', '60', '40', '0'), 
('26', '2016-11-05', 'Nine', 'Science', 'ENGLISH', 'ENGLISH 1st', '1st', '103', 'compulsory', '60', '40', '0'), 
('27', '2016-11-05', 'Six', 'None', 'MATHEMATICS', 'MATHEMATICS', 'None', '', 'compulsory', '60', '40', '0'), 
('28', '2016-11-05', 'Six', 'None', 'INFORMATION AND COMMUNICATION TECHNOLOGY', 'INFORMATION AND COMMUNICATION TECHNOLOGY', 'None', '', 'compulsory', '60', '40', '0'), 
('29', '2016-11-05', 'Nine', 'Science', 'ENGLISH', 'ENGLISH 2nd', '2nd', '104', 'compulsory', '60', '40', '0'), 
('30', '2016-11-05', 'Nine', 'Science', 'CAREER EDUCATION', 'CAREER EDUCATION', 'None', '131', 'optional', '60', '40', '0'), 
('31', '2016-11-05', 'Six', 'None', 'BANGLADESH AND GLOBAL STUDIES', 'BANGLADESH AND GLOBAL STUDIES', 'None', '', 'compulsory', '60', '40', '0'), 
('32', '2016-11-05', 'Nine', 'Science', 'BIOLOGY', 'BIOLOGY', 'None', '111', 'compulsory', '40', '35', '25'), 
('33', '2017-01-14', 'Ten', 'Science', 'BANGLA', 'BANGLA 1st', '1st', '', 'compulsory', '60', '40', '0'), 
('34', '2017-01-14', 'Ten', 'Science', 'BANGLA', 'BANGLA 2nd', '2nd', '', 'compulsory', '60', '40', '0'), 
('35', '2017-01-14', 'Ten', 'Science', 'ENGLISH', 'ENGLISH 1st', '1st', '', 'compulsory', '100', '0', '0'), 
('36', '2017-01-14', 'Ten', 'Science', 'ENGLISH', 'ENGLISH 2nd', '2nd', '', 'compulsory', '100', '0', '0'), 
('37', '2017-01-14', 'Ten', 'Science', 'CAREER EDUCATION', 'CAREER EDUCATION', 'None', '', 'compulsory', '60', '40', '0'), 
('38', '2017-01-14', 'Ten', 'Science', 'BIOLOGY', 'BIOLOGY', 'None', '', 'compulsory', '50', '25', '25');  



INSERT INTO `tc` ( `id`, `student_id`, `date`, `name`, `father_name`, `mother_name`, `vill_or_road`, `post_office`, `upazilla`, `district`, `class`, `group`, `roll`, `reg`, `attendance`, `birth_date`, `starting_date`, `ending_date`) VALUES 
('2', '33', '2016-11-05', 'Imtiaz Ahammed', 'Abul munsur Ahammed', 'Ruckshanara Begum', 'Acher gown', 'jamtala', 'Nandial', 'Mymensingh', 'Nine', 'Science', '105', '2541', '80', '1989-08-07', '2016-11-01', '2016-11-05');  



INSERT INTO `testimonial` ( `id`, `student_id`, `datetime`, `name`, `father_name`, `mother_name`, `birth_date`, `class`, `roll`, `reg`, `session`, `group`, `gpa`) VALUES 
('6', '31', '2016-11-05', 'Khairul Islam Tanmoy', 'Khalilur Rahman', 'Kulsuma Khatun', '1995-11-03', 'Nine', '103', '526610', '2016', 'Science', '5.00'), 
('7', '33', '2017-01-14', 'Imtiaz Ahammed', 'Abul munsur Ahammed', 'Ruckshanara Begum', '1989-08-07', 'Nine', '55', '21545', '2016', 'Science', '4.50'), 
('8', '34', '2017-01-14', 'Rony Debnath', 'Mangal Ch. Debnath', 'Sanchita Rani Debnath', '1992-10-27', 'Nine', '500', '5245', '2016', 'Science', '4.80');  



INSERT INTO `theme_setting` ( `id`, `theme_color`, `background_pattern`, `login_background`, `google_map`, `footer`, `header`, `logo`, `menu_icon`, `social_icon`, `language`) VALUES 
('1', '#0d8c45', 'public/img/background10949.png', 'private/images/background21243.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3632.782187025138!2d90.6502962144417!3d24.423633484261767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37568963c174bcdf%3A0xed453a8c249cd9ac!2sHossainpur+Degree+College!5e0!3m2!1sbn!2sbd!4v1480938088458" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '{"l_footer_text":"\u09b8\u09cb\u09a8\u09be\u09b0 \u09ac\u09be\u0982\u09b2\u09be \u09b9\u09be\u0987 \u09b8\u09cd\u0995\u09c1\u09b2","addr_moblile":"01816 859164, 01715 154674","addr_email":"contact@hossainpurcollege.gov.bd, info@hossainpurcollege.gov.bd","addr_address":"Mymensingh","footer_img":"public\/img\/footer_244167.png"}', '{"site_name":"\u09b8\u09cb\u09a8\u09be\u09b0 \u09ac\u09be\u0982\u09b2\u09be \u09b9\u09be\u0987 \u09b8\u09cd\u0995\u09c1\u09b2","place_name":"\u09ac\u09be\u0982\u09b2\u09be\u09a6\u09c7\u09b6"}', '{"logo":"public\/img\/logo_173285.png","faveicon":"public\/img\/favicon_751627.png"}', '{"aside_menu":"fa fa-connectdevelop","footer_menu":"fa fa-caret-right"}', '{"s_facebook":"https://facebook.com","s_twitter":"https://twitter.com","s_gplus":"https://plus.google.com","s_pinterest":"https://www.pinterest.com/"}', 'en');  



INSERT INTO `transaction` ( `id`, `transaction_date`, `bank`, `account_number`, `transaction_type`, `amount`, `transaction_by`) VALUES 
('5', '2016-11-05', 'Sonali_Bank_Limited', '101020', 'Credit', '1000', 'Rony'), 
('6', '2016-11-05', 'Sonali_Bank_Limited', '101020', 'Debit', '50', 'Jayanta'), 
('7', '2017-01-25', 'Dutch_Bangla_Bank', '15610550882', 'Credit', '5000', 'Self'), 
('8', '2017-01-25', 'Dutch_Bangla_Bank', '15610550882', 'Credit', '2000', 'Maruf hasan'), 
('9', '2017-01-25', 'Dutch_Bangla_Bank', '15610550882', 'Debit', '1000', 'Maruf hasan');  



 



 



INSERT INTO `upload_magazine` ( `id`, `magazine_title`, `magazine_attachment`, `magazine_date`) VALUES 
('8', 'Magazine', 'public/upload_delete/magazine/magazine_2016-11-05_9010.pdf', '2016-11-05');  



 



 



INSERT INTO `upload_syllabus` ( `id`, `syllabus_class`, `syllabus_attachment`, `syllabus_date`) VALUES 
('15', 'Six', 'public/upload_delete/syllabus/syllabus_2016-11-05_2471.pdf', '2016-11-05');  



INSERT INTO `users` ( `id`, `opening`, `name`, `l_name`, `gender`, `birthday`, `maritial_status`, `position`, `about`, `website`, `facecbook`, `twitter`, `email`, `username`, `password`, `privilege`, `image`, `mobile`, `branch`) VALUES 
('60', '2016-11-05 03:57:58', 'Freelance', 'iTLab', 'male', '2016-11-05', 'single', 'ceo', 'Freelance itLab', 'http://freelanceitlab.com/', 'http://freelanceitlab.com/', 'http://freelanceitlab.com/', 'freelanceitlab@gmail.com', 'superadmin', '262478f2a0b13b0532b5fddd18822a0f', 'admin', 'public/profiles/superadmin.jpg', '01234567890', '');  



INSERT INTO `video_gallery` ( `id`, `date`, `embed_code`, `video_title`) VALUES 
('1', '2017-01-14', '<iframe width="560" height="315" src="https://www.youtube.com/embed/iCUV3iv9xOs?list=PL442FA2C127377F07" frameborder="0" allowfullscreen></iframe>', ''), 
('4', '2017-01-14', '<iframe width="560" height="315" src="https://www.youtube.com/embed/k6ZiPqsBvEQ?list=PL442FA2C127377F07" frameborder="0" allowfullscreen></iframe>', '');  



INSERT INTO `visitors` ( `id`, `date`, `ip`) VALUES 
('1', '2016-11-05', '192.168.0.105'), 
('2', '2016-11-05', '192.168.0.112'), 
('3', '2016-11-05', '192.168.0.102'), 
('4', '2016-11-05', '::1'), 
('5', '2016-11-05', '192.168.0.110'), 
('6', '2016-11-05', '192.168.0.101'), 
('7', '2016-11-08', '192.168.0.103'), 
('8', '2016-11-14', '::1'), 
('9', '2016-11-14', '192.168.0.102'), 
('10', '2016-11-14', '192.168.0.103'), 
('11', '2016-11-15', '192.168.0.112'), 
('12', '2016-11-15', '192.168.0.104'), 
('13', '2016-11-16', '192.168.0.104'), 
('14', '2016-11-17', '192.168.0.112'), 
('15', '2016-11-17', '::1'), 
('16', '2016-11-17', '192.168.0.107'), 
('17', '2016-11-19', '192.168.0.104'), 
('18', '2016-11-19', '::1'), 
('19', '2016-11-20', '192.168.0.104'), 
('20', '2016-11-20', '::1'), 
('21', '2016-11-20', '192.168.0.101'), 
('22', '2016-11-20', '192.168.0.110'), 
('23', '2016-11-20', '192.168.0.112'), 
('24', '2016-11-21', '192.168.0.102'), 
('25', '2016-11-21', '192.168.0.104'), 
('26', '2016-11-21', '::1'), 
('27', '2016-11-22', '::1'), 
('28', '2016-11-22', '192.168.0.104'), 
('29', '2016-11-23', '::1'), 
('30', '2016-11-23', '192.168.0.102'), 
('31', '2016-11-23', '192.168.0.100'), 
('32', '2016-11-23', '192.168.0.104'), 
('33', '2016-11-24', '192.168.0.105'), 
('34', '2016-11-24', '::1'), 
('35', '2016-11-24', '192.168.0.100'), 
('36', '2016-11-25', '::1'), 
('37', '2016-11-26', '192.168.0.100'), 
('38', '2016-11-26', '192.168.0.101'), 
('39', '2016-11-26', '192.168.0.104'), 
('40', '2016-11-27', '192.168.0.106'), 
('41', '2016-11-27', '192.168.0.104'), 
('42', '2016-11-28', '192.168.0.108'), 
('43', '2016-11-28', '192.168.0.101'), 
('44', '2016-11-28', '192.168.0.105'), 
('45', '2016-11-28', '192.168.0.112'), 
('46', '2016-11-28', '192.168.0.104'), 
('47', '2016-11-29', '192.168.0.101'), 
('48', '2016-11-29', '192.168.0.104'), 
('49', '2016-11-29', '192.168.0.108'), 
('50', '2016-11-29', '192.168.0.112'), 
('51', '2016-11-29', '::1'), 
('52', '2016-11-29', '192.168.0.100'), 
('53', '2016-11-30', '192.168.0.112'), 
('54', '2016-12-03', '192.168.0.100'), 
('55', '2016-12-04', '192.168.0.104'), 
('56', '2016-12-04', '192.168.0.102'), 
('57', '2016-12-04', '192.168.0.100'), 
('58', '2016-12-05', '192.168.0.100'), 
('59', '2016-12-05', '192.168.0.106'), 
('60', '2016-12-05', '::1'), 
('61', '2016-12-10', '192.168.0.100'), 
('62', '2016-12-10', '::1'), 
('63', '2016-12-11', '192.168.1.103'), 
('64', '2016-12-11', '192.168.1.106'), 
('65', '2016-12-15', '192.168.1.103'), 
('66', '2016-12-15', '192.168.1.104'), 
('67', '2016-12-20', '192.168.1.103'), 
('68', '2016-12-26', '192.168.1.102'), 
('69', '2016-12-27', '192.168.1.102'), 
('70', '2017-01-03', '192.168.1.103'), 
('71', '2017-01-14', '192.168.0.107'), 
('72', '2017-01-14', '192.168.0.108'), 
('73', '2017-01-14', '192.168.0.101'), 
('74', '2017-01-15', '192.168.0.102'), 
('75', '2017-01-18', '192.168.0.106'), 
('76', '2017-01-21', '192.168.0.102'), 
('77', '2017-01-21', '192.168.0.104'), 
('78', '2017-01-22', '192.168.0.103'), 
('79', '2017-01-24', '::1'), 
('80', '2017-01-25', '192.168.0.107'), 
('81', '2017-01-26', '192.168.0.103'), 
('82', '2017-01-26', '192.168.0.107'), 
('83', '2017-01-26', '192.168.0.105'), 
('84', '2017-01-29', '192.168.0.105'), 
('85', '2017-01-29', '192.168.0.104'), 
('86', '2017-01-29', '192.168.0.106'), 
('87', '2017-01-30', '192.168.0.101'), 
('88', '2017-01-30', '192.168.0.105'), 
('89', '2017-01-30', '192.168.0.102'), 
('90', '2017-01-30', '192.168.0.108'), 
('91', '2017-01-30', '192.168.0.104'); 