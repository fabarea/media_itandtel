#
# Table structure for table 'sys_file'
#
CREATE TABLE sys_file (
	is_localization int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'sys_file_metadata'
#
CREATE TABLE sys_file_metadata (
	localization varchar(255) DEFAULT '' NOT NULL,
);