<?php

return [

	
	'user-management' => [
		'title' => 'User Management',
		'created_at' => 'Time',
		'fields' => [
		],
	],
	
	'roles' => [
		'title' => 'Roles',
		'created_at' => 'Time',
		'fields' => [
			'title' => 'Title',
		],
	],
	
	'users' => [
		'title' => 'Users',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
			'role' => 'Role',
			'remember-token' => 'Remember token',
		],
	],
	
	'events' => [
		'title' => 'Events',
		'created_at' => 'Time',
		'fields' => [
			'title' => 'Title',
			'description' => 'Description',
			'start-time' => 'Start time',
			'venue' => 'Venue',
			'categories' => 'Countries',
			'subcategories' => 'Subcategories'
		],
		
	],
	
	'tickets' => [
		'title' => 'Tickets',
		'created_at' => 'Time',
		'fields' => [
			'event' => 'Event',
			'title' => 'Ticket Type',
			'amount' => 'Amount of tickets available',
			'available-from' => 'Available from',
			'available-to' => 'Available to',
			'price' => 'Price',
		],
	],
	
	'payments' => [
		'title' => 'Payments',
		'created_at' => 'Time',
		'fields' => [
			'email' => 'Email',
			'merchant' => 'Merchant',
			'amount' => 'Amount',
		],
	],
	'qa_create' => 'Create',
	'qa_save' => 'Save',
	'qa_edit' => 'Edit',
	'qa_view' => 'View',
	'qa_update' => 'Update',
	'qa_list' => 'List',
	'qa_no_entries_in_table' => 'No entries in table',
	'custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Logout',
	'qa_add_new' => 'Add new',
	'qa_are_you_sure' => 'Are you sure?',
	'qa_back_to_list' => 'Back to list',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Delete',
	'quickadmin_title' => 'Event Management',
];