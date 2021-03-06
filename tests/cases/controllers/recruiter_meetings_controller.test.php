<?php
/* RecruiterMeetings Test cases generated on: 2010-05-03 00:05:48 : 1272846228*/
App::import('Controller', 'RecruiterMeetings');

class TestRecruiterMeetingsController extends RecruiterMeetingsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RecruiterMeetingsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.recruiter_meeting', 'app.school', 'app.office', 'app.employee', 'app.user', 'app.role', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.volunteer', 'app.document', 'app.donation', 'app.ecuador_profile', 'app.signup', 'app.spanish_profile', 'app.menu');

	function startTest() {
		$this->RecruiterMeetings =& new TestRecruiterMeetingsController();
		$this->RecruiterMeetings->constructClasses();
	}

	function endTest() {
		unset($this->RecruiterMeetings);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>